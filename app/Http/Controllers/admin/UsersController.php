<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\Identity;
use App\Models\Role;
use App\Models\Trade;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class UsersController extends Controller
{

    public function index(){
        $title = 'All Users';
        $users = User::whereRoleIs('user')->lates()->get();
        return view('admin.users.index', compact('users','title'));
    }
    public function subAdmins(){
        $title = 'sub_admin';
        $users = User::whereRoleIs('sub_admin')->orWhereRoleIs('moderator')->lates()->get();
        return view('admin.users.index', compact('users','title'));
    }

    public function connectAccount($id){
        $user = User::findOrFail($id);
        $user->code = null;
        $user->account_officer = 'Account connected';
        $user->save();
        $this->message($user, 'Congratulations, Your account has been successfully connected, you can login to your dashboard and make your first deposit if you have not done that already','Account Connected');
        return redirect()->back()->with('success','Account successfully connected');
    }

    public function sendMessage($id){
        $user = User::findOrFail($id);
        return view('admin.users.send_message', compact('user'));
    }
    public function sendMsg(Request $request){
        $user = User::findOrFail($request['user_id']);
        $this->message($user, $request['message'],$request['subject']);
        return redirect()->back()->with('success', "Message successfully sent to ". $user->name);
    }

    public function activePlans(){
        $users = User::whereRoleIs('user')->get();
        return view('admin.users.active_plans-list', compact('users'));
    }

   public function employers(){
        $title = 'employer';
        $users = User::whereRoleIs('employer')->get();
        return view('admin.users.employer-list', compact('users','title'));
    }

    public function create(Request $request)
    {
        $role = $request->get('r');
       $roles = Role::whereName($role)->get();
        return view('admin.users.create', compact('roles','role'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['nullable'],
            'username' => ['required', 'string', 'max:50', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed',  'min:6',             // must be at least 10 characters in length
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'regex:/[@$!%*#?&]/'],
        ]);

        $data = $request->all();

            DB::beginTransaction();

            $user = User::create([
                'first_name' => $data['first_name'],
                'email' => $data['email'],
                'username' => $data['username'],
                'mobile_number' => $data['phone'],
                'password' => bcrypt($data['password']),
            ]);

            // assign role to registered user
            $user->attachRole($data['role']);

            // send email verification link to user
            event(new \Illuminate\Auth\Events\Registered($user));
            DB::commit();

            $email = $data['email'];

        return redirect()->back()->with('success', "A verification email has been sent to the $email");
    }

//    public function fundAccount(Request $request){
//        $this->validate($request, [
//            'user_id' => ['required', 'integer'],
//            'amount' => ['required'],
//            ]);
//        $data = $request->all();
//        $user = User::findOrFail($data['user_id']);
//        $user->balance = $user->balance + $data['amount'];
//        $user->save();
//        Transaction::create(['user_id' => $data['user_id'], 'amount' => $data['amount'], 'type' => $data['type'], 'account_type' => $data['account_type'],'note' => $data['note']]);
//        return redirect()->back()->with('success', 'Successful, balance modified');
//    }

    public function fundAccount(Request $request){
        $this->validate($request, [
            'user_id' => ['required', 'integer'],
            'amount' => ['required'],
            ]);
        $data = $request->all();
        $user = User::findOrFail($data['user_id']);
        if($data['type'] == 'credit'){
            $user->balance = (int)$user->balance + (int)$data['amount'];
        }else{
            $user->balance = (int)$user->balance - (int)$data['amount'];
        }
        $user->save();
        Transaction::create(['user_id' => $data['user_id'], 'amount' => $data['amount'], 'type' => $data['type'], 'account_type' => $data['account_type'],'note' => $data['note']]);
        return redirect()->back()->with('success', 'Successful, balance modified');
    }
    public function updateWithdrawable(Request $request){
        $this->validate($request, [
            'user_id' => ['required', 'integer'],
            'withdrawable' => ['required'],
            ]);
        $data = $request->all();
        $user = User::findOrFail($data['user_id']);
        $user->withdrawable = $data['withdrawable'];
        $user->save();
        return redirect()->back()->with('success', 'Successful, Withdrawable balance modified');
    }
    public function fundBonus(Request $request){
        $this->validate($request, [
            'user_id' => ['required', 'integer'],
            'amount' => ['required'],
            ]);
        $data = $request->all();
        $user = User::findOrFail($data['user_id']);
        if($data['type'] == 'credit'){
            $user->bonus = (int)$user->bonus + (int)$data['amount'];
        }else{
            $user->bonus = (int)$user->bonus - (int)$data['amount'];
        }
        $user->save();
        Transaction::create(['user_id' => $data['user_id'], 'amount' => $data['amount'], 'type' => $data['type'], 'account_type' => $data['account_type'],'note' => $data['note']]);
        return redirect()->back()->with('success', 'Successful, Bonus modified');
    }

    public function toggleTrade($id){
        $user = User::findOrFail($id);
        if(!$user->can_trade){
            if(setting('suspend_trade_mail')){
                $this->message($user, 'Your account has been activated for withdraw, you can login to your dashboard and make your withdrawal request','Account Activated For Withdrawal');
            }
        }
        $user->can_trade = !$user->can_trade;
        $user->save();
        return redirect()->back()->with('success', 'Successful, User Data Updated');
    }
    public function toggleActive($id){
        $user = User::findOrFail($id);
        if(!$user->is_active){
            if(setting('user_activated_mail')){
                $this->message($user, 'Congratulations, Your account has been activated, you can login to your dashboard and make your first deposit, if you have not done that yet request','Account Activated');
            }
        }
        $user->is_active = !$user->is_active;
        $user->save();
        return redirect()->back()->with('success', 'Successful, User Data Updated');
    }
    public function toggleWithdraw($id){
        $user = User::findOrFail($id);
        if(!$user->can_withdraw){
            if(setting('enable_withdraw_mail')){
                $this->message($user, 'Your account has been activated for withdraw, you can login to your dashboard and make your withdrawal request','Account Activated For Withdrawal');
            }
        }
        $user->can_withdraw = !$user->can_withdraw;
        $user->save();
        return redirect()->back()->with('success', 'Successful, User Data Updated');
    }
    public function toggleUpgrade($id){
        $user = User::findOrFail($id);
        if(!$user->can_upgrade){
            if(setting('plan_upgrade_mail')){
                $this->message($user, 'Your account has been activated for upgrade, you can login to your dashboard to upgrade your account','Account Activated For Upgrade');
            }
        }
        $user->can_upgrade = !$user->can_upgrade;
        $user->save();
        return redirect()->back()->with('success', 'Successful, User Data Updated');
    }

    public function IdActivate($id){
        $id = Identity::findOrFail($id);
        $id->status =  1;
        $id->save();
        return redirect()->back()->with('success', 'Successful, Id activated');
    }

    public function Ids(){
        $ids = Identity::with('user')->latest()->get();
        return view('admin.ids', compact('ids'));
    }

    public function loginLogs($id){
        $user = User::findOrFail($id);
        $details = User::findOrFail($id)->authentications;

        return view('admin.logins', compact('details','user'));
    }
    public function myLoginLogs(){

        $details = Auth::user()->authentications;

        return view('admin.my_logins', compact('details'));
    }

    public function edit(User $user)
    {
        $admin_roles = Role::whereNotIn('name', ['super_admin', 'customer'])->pluck('name');
        return view('admin.users.edit', compact('user', 'admin_roles'));
    }


    public function show($username)
    {
        $user = User::whereUsername($username)->firstOrFail();
        $deposits = Deposit::whereUserId($user->id)->get();
        $trades = Trade::whereUserId($user->id)->get();
        $trans = Transaction::whereUserId($user->id)->get();
        return view('admin.users.show', compact('user','deposits','trades','trans'));
    }

    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'first_name' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
            'mobile_number' => ['required', 'numeric', 'digits_between:10,14'],
            // 'username' => ['required', 'string', 'max:50', 'unique:profiles'],
        ]);

        try {
            DB::beginTransaction();

        $data = $request->all();

          $user->update([
                'first_name' => $data['first_name'],
//                'email' => $data['email'],
                'mobile_number' => $data['mobile_number'],
                // 'delivery_category_id' => $data['delivery_category_id']
            ]);

            if (isset($request->password)) {
                $user->password = bcrypt($data['password']);
                $user->save();
            }

            $active = isset($request->active) ? true : false;

            $user->syncRoles([$data['role']]);
            DB::commit();

        } catch(\Exception $e) {

            DB::rollback();
            return back()->with('failure', 'Woops! something went wrong: ' . $e->getMessage());

        }

        // $customer->assignRole('customer');

        return redirect()->back()->with('success', 'Admin Account has been updated');
    }

    public function destroy(User $user)
    {
        try {
            $user->delete();
            // $customer->profile->delete(); // delete corresponding user profile

        } catch(\Exception $e) {

            return back()->with('failure', 'Woops! something went wrong: '.$e->getMessage());

        }

        return back()->with('success', 'User account deleted.');
    }
}
