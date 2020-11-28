@extends('admin.layouts.admin-app')

@section('style')
    @include('admin.partials.dt-css')
@endsection

@section('js')

    @include('admin.partials.dt-js')
@endsection

@section('content')
    <div class="br-mainpanel br-profile-page">

        <div class="card shadow-base bd-0 rounded-0 widget-4">
            <div class="card-header ht-75">
                <div class="hidden-xs-down">
                    <a href="#" class="mg-r-10"><span class="tx-medium">{{ $user->invested() }}</span> Invested</a>
{{--                    <a href="#"><span class="tx-medium">{{ $user->balance() }}</span> Account Balance</a>--}}
{{--                    <a href="#"><span class="tx-medium">{{ $user->bonus() }}</span> Bonus Balance</a>--}}
                </div>

            </div><!-- card-header -->
            <div class="card-body">
                <div class="card-profile-img">
                    <img src="{{ $user->avatar  }}" alt="">
                </div><!-- card-profile-img -->
                <h4 class="tx-normal tx-roboto tx-white">{{ $user->name }}</h4>
                <p class="tx-white">{{ $user->email }}</p>
                <p class=" tx-white">Balance : {{ $user->balance() }}</p>
                <p class=" tx-white">Bonus : {{ $user->bonus }}USD</p>

            </div><!-- card-body -->
        </div><!-- card -->

        <div class="ht-70 bg-gray-100 pd-x-20 d-flex align-items-center justify-content-center shadow-base">
            <ul class="nav nav-outline active-info align-items-center flex-row" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#posts" role="tab">Deposits</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#trans" role="tab">Transactions</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#photos" role="tab">Trades</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#withdrawals" role="tab">Withdrawal Requests</a></li>
            </ul>
        </div>

        @include('notification')

        <div class="card pd-20 pd-xs-30 shadow-base bd-0">
            <div class="row btn-bloc">
                {{--                               <div class="col-md-6">--}}
                <a href="" class="btn btn-primary mr- col-md-2">Edit Profile</a>
                <a href="{{ route('admin.user.logins',$user->id) }}" class="btn btn-warning col-md-2">Login Logins</a>
                <a href="{{ route('admin.user.logins',$user->id) }}" class="btn btn-danger col-md-2">Send Message</a>
                <a href="" data-toggle="modal" data-target="#fundBalance" class="btn btn-success col-md-3">Add / Substract Balance</a>
                <a href="" data-toggle="modal" data-target="#fundBonus" class="btn btn-primary col-md-3">Add / Substract Bonus</a>
            </div>
                <div style="margin-top: 5px" class="row btn-bloc">

                <a href="{{ route('admin.trades.index') }}?user={{$user->id}}" class="btn btn-success col-md-3">Trade For {{ $user->username }}</a>
                <a href="{{ route('admin.user.trade.toggle', $user->id) }}" class="btn  {{ $user->can_trade ? 'btn-danger' : 'btn-success' }} col-md-3">{{ $user->can_trade ? 'Suspend' : 'Un Suspend' }} Trade</a>
                <a href="{{ route('admin.user.upgrade.toggle', $user->id) }}" class="btn {{ $user->can_upgrade ? 'btn-danger' : 'btn-success' }} col-md-3">{{ $user->can_upgrade ? 'Deactivate' : 'Activate' }} Plan Upgrade</a>
                <a href="{{ route('admin.user.withdraw.toggle', $user->id) }}" class="btn {{ $user->can_withdraw ? 'btn-danger' : 'btn-success' }} col-md-3">{{ $user->can_withdraw ? 'Disable' : 'Enable' }} Withdraw</a>

                </div>
                {{--                               </div>--}}

        </div><!-- card -->

        <div class="tab-content br-profile-body" style=" max-width: 100%!important;">
            <div class="tab-pane fade active show" id="posts">
                <div class="row ">
                    <div class="col-md-4">
                        <div class="card pd-20 pd-xs-30 shadow-base bd-0">
                            <h6 class="tx-gray-800 tx-uppercase tx-semibold tx-13 mg-b-25">Profile Information</h6>

                            <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">First Name</label>
                            <p class="tx-info mg-b-25">{{ $user->first_name }}</p>

                            <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Last Name</label>
                            <p class="tx-info mg-b-25">{{ $user->last_name }}</p>

                            <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Phone Number</label>
                            <p class="tx-info mg-b-25">{{ $user->phone }}</p>

                            <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Email Address</label>
                            <p class="tx-inverse mg-b-25">{{ $user->email }}</p>

                            <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Present Address</label>
                            <p class="tx-inverse mg-b-25">{{ $user->address }} </p>

                            <label class="tx-10 tx-uppercase tx-mont tx-medium tx-spacing-1 mg-b-2">Permanent Address</label>
                            <p class="tx-inverse mg-b-50">{{ $user->parmanent_address }}</p>

                            <h3 class="tx-gray-800 tx-uppercase tx-semibold tx-13 mg-b-25">National ID</h3>
                           @if ($user->identify)
                               <h3>Front</h3>
                                <img height="100" width="100" src="{{ $user->identify->front }}" />

                               <h3>Back</h3>
                               <img height="100" width="100" src="{{ $user->identify->back }}" />

                            @else
                               <h6>Not Uploaded</h6>
                           @endif
                        </div><!-- card -->
                    </div>
                    <div class="col-md-8">
                        <div class="card pd-20 pd-xs-30 shadow-base bd-0 mg-t-30">

                            <h3>All Deposits</h3>
                            <div class="tabl-wrapper table-responsive">
                                <table id="datatable1" class="table display table-bordered responsive ">
                                    <thead>
                                    <tr>
                                        <th class="wd-5p">S/N</th>
                                                                        <th class="wd-15p">Date</th>
                                        <th class="wd-15p">Deposited Amount</th>
                                        <th class="wd-10p">Proof</th>
                                        <th class="wd-10p">Status</th>
                                        {{--                                <th class="wd-10p">Action</th>--}}
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @php
                                        $count = 1;
                                    @endphp
                                    @foreach ($deposits as $item)
                                        <tr>
                                            <td>{{ $count++ }}</td>
                                            {{--                                    <td>{{ optional($item->user)->name }}</td>--}}
                                            <td>{{ $item->created_at->format('d-m-Y') }}</td>
                                            <td>{{ $item->amount }}</td>
                                            <td>
                                                @if ($item->proof)
                                                    <a target="_blank" href="{{ $item->proof }}">View Proof</a>
                                                @else
                                                    Not Uploaded
                                                @endif
                                            </td>
                                            <td>
                                            @if($item->status)
                                                <p class="badge badge-success">Approved</p>
                                                @else
                                                <p class="badge badge-danger">Pending</p>
                                                @endif
                                            </td>
                                            {{--                                    <td>--}}
                                            {{--                                        <a href="{{ route('admin.deposit.approve', $item->id) }}" class="{{ $item->status ? 'btn-danger' : 'btn-success' }} btn " data-toggle="tooltip" data-placement="top">{{ $item->status ? 'Un Approve': 'Approve' }}</a>--}}
                                            {{--                                        <a href="{{ route('admin.deposit.destroy', $item) }}" onclick="return confirm(&quot;Click Ok to delete Deposit.&quot;)" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Delete"><em class="fa fa-trash"></em>--}}
                                            {{--                                        </a>--}}
                                            {{--                                    </td>--}}

                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div><!-- table-wrapper -->
                        </div>
                    </div>



                </div><!-- row -->
            </div><!-- tab-pane -->
            <div class="tab-pane fade show" id="trans">
                <div class="row ">
                    <div class="col-md-12">
                        <div class="card pd-20 pd-xs-30 shadow-base bd-0 mg-t-30">

                            <div class="tabl-wrapper table-responsive">
                                <table id="datatabl" class="table display table-bordered responsive nowrap">
                                    <thead>
                                    <tr>
                                        <th class="wd-10p">S/N</th>
                                        {{--                                <th class="wd-15p">User</th>--}}
                                        <th class="wd-15p">Date / Time</th>
                                        <th class="wd-15p">Amount</th>
                                        <th class="wd-10p">Fund Type</th>
                                        <th class="wd-10p">Account</th>
                                        <th class="wd-40p">Description</th>
                                        {{--                                <th class="wd-10p">Action</th>--}}
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @php
                                        $count = 1;
                                    @endphp
                                    @foreach ($trans as $item)
                                        <tr>
                                            <td>{{ $count++ }}</td>
                                            {{--                                    <td>{{ optional($item->user)->name }}</td>--}}
                                            <td>{{ $item->created_at }}</td>
                                            <td>$ {{ $item->amount }}</td>
                                            <td>{{ $item->type }}</td>
                                            <td>{{ $item->account_type }}</td>
                                            <td>{{ $item->note }}</td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div><!-- table-wrapper -->
                        </div>
                    </div>



                </div><!-- row -->
            </div><!-- tab-pane -->
            <div class="tab-pane fade" id="photos">
                <div class="row">
                    <div class="col-md-12">
{{--                        <div class="col-md-12">--}}
                            <div class="table-wrapper">
                                <div class="card pd-20 pd-xs-30 shadow-base bd-0 mg-t-30 table-responsive">
                                    <table class="table datatabl table-bordered table-condensed display responsive nowrap">
                                        <thead>
                                        <tr>
                                            {{--                            <th class="wd-5p">S.No</th>--}}
                                            {{--                                <th class="wd-10p">User</th>--}}
                                            <th class="wd-20p">Order Type / Item</th>
                                            <th class="wd-10p">Currency Pair</th>
                                            <th class="wd-10p"> Buy at</th>
                                            <th class="wd-10p">Sell at</th>
                                            <th class="wd-10p">Item Price</th>
                                            <th class="wd-10p">Opening Price</th>
                                            <th class="wd-10p">Closing Price</th>
                                            <th class="wd-10p">Profit</th>
                                            {{--                                <th></th>--}}
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($trades as $trade)
                                            <tr>
                                                {{--                            <td>{{ $trade->id }}</td>--}}
                                                {{--                                    <td class="text-capitalize"><a href="{{ route('admin.users.show',$trade->user->username) }}"> {{ $trade->user->name }}</a></td>--}}
                                                <td>{{ $trade->order_type }}</td>
                                                <td>{{ $trade->currency_pair }}</td>
                                                <td>{{ $trade->buy_at }}</td>
                                                <td>{{ $trade->sell_at }}</td>
                                                <td>{{ $trade->item_price }}</td>
                                                <td>{{ $trade->opening_price }}</td>
                                                <td>{{ $trade->closing_price }}</td>
                                                <td>{{ $trade->profit }}</td>

                                                {{--                                    <td class="text-center">--}}
                                                {{--                                        <form method="POST" action="{!! route('admin.trades.destroy', $trade->id) !!}" accept-charset="UTF-8">--}}
                                                {{--                                            <input name="_method" value="DELETE" type="hidden">--}}
                                                {{--                                            {{ csrf_field() }}--}}

                                                {{--                                            <div class="btn-group justify-center" role="group">--}}
                                                {{--                                                <button type="submit" class="btn btn-danger" title="Delete Job" onclick="return confirm(&quot;Click Ok to delete Record.&quot;)">--}}
                                                {{--                                                    <span class="fa fa-trash" aria-hidden="true"></span>--}}
                                                {{--                                                </button>--}}
                                                {{--                                            </div>--}}

                                                {{--                                        </form>--}}

                                                {{--                                    </td>--}}
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- table-wrapper -->

{{--                        </div><!-- row -->--}}
                    </div>
                </div>
            </div><!-- tab-pane -->
            <div class="tab-pane fade" id="withdrawals">
                <div class="col-md-12">
                        <div class="card pd-20 pd-xs-30 shadow-base bd-0 mg-t-30 ">
                            <div class="table-wrapper table-responsive">

                            <table class="table datatabl table-bordered table-condensed display responsive nowrap">
                            <thead>
                            <tr>
                                {{--                            <th class="wd-5p">S.No</th>--}}
{{--                                <th class="wd-10p">User</th>--}}
                                <th class="wd-20p">Order Type / Item</th>
                                <th class="wd-10p">Currency Pair</th>
                                <th class="wd-10p"> Buy at</th>
                                <th class="wd-10p">Sell at</th>
                                <th class="wd-10p">Item Price</th>
                                <th class="wd-10p">Opening Price</th>
                                <th class="wd-10p">Closing Price</th>
                                <th class="wd-10p">Profit</th>
{{--                                <th></th>--}}
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($trades as $trade)
                                <tr>
                                    {{--                            <td>{{ $trade->id }}</td>--}}
{{--                                    <td class="text-capitalize"><a href="{{ route('admin.users.show',$trade->user->username) }}"> {{ $trade->user->name }}</a></td>--}}
                                    <td>{{ $trade->order_type }}</td>
                                    <td>{{ $trade->currency_pair }}</td>
                                    <td>{{ $trade->buy_at }}</td>
                                    <td>{{ $trade->sell_at }}</td>
                                    <td>{{ $trade->item_price }}</td>
                                    <td>{{ $trade->opening_price }}</td>
                                    <td>{{ $trade->closing_price }}</td>
                                    <td>{{ $trade->profit }}</td>

{{--                                    <td class="text-center">--}}
{{--                                        <form method="POST" action="{!! route('admin.trades.destroy', $trade->id) !!}" accept-charset="UTF-8">--}}
{{--                                            <input name="_method" value="DELETE" type="hidden">--}}
{{--                                            {{ csrf_field() }}--}}

{{--                                            <div class="btn-group justify-center" role="group">--}}
{{--                                                <button type="submit" class="btn btn-danger" title="Delete Job" onclick="return confirm(&quot;Click Ok to delete Record.&quot;)">--}}
{{--                                                    <span class="fa fa-trash" aria-hidden="true"></span>--}}
{{--                                                </button>--}}
{{--                                            </div>--}}

{{--                                        </form>--}}

{{--                                    </td>--}}
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        </div>
                    </div><!-- table-wrapper -->

                </div><!-- row -->
            </div><!-- tab-pane -->
        </div><!-- br-pagebody -->

    </div><!-- br-mainpanel -->


    <div id="fundBalance" class="modal fade">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                    <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add / Subtract {{ $user->name }} Account Balance</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.user.fundaccount') }}" method="POST">

                <div class="modal-body pd-20">

                     @csrf
                        <div class="form-layout form-layout-1">
                            <div class="row mg-b-25">

                                <input name="account_type" type="hidden" value="balance">
                                <input name="user_id" type="hidden" value="{{ $user->id }}">

                                <div class="col-md-6">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label"> Fund Type: <span class="tx-danger">*</span></label>
                                        <select name="type" class="form-control" required>
                                            <option value="credit">Add Money</option>
                                            <option value="debit">Subtract Money</option>
                                        </select>
                                    </div>
                                </div><!-- col-8 -->
                                <div class="col-md-6">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label"> Amount: <span class="tx-danger">*</span></label>
                                        <input class="form-control" required type="number" step="any" name="amount" placeholder="Amount">
                                    </div>
                                </div><!-- col-8 -->
                                <div class="col-md-12">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label"> Note : <span class="tx-danger">*</span></label>
                                        <textarea class="form-control" type="text" name="note"></textarea>
                                    </div>
                                </div><!-- col-8 -->
                            </div>
                        </div>

                 </div><!-- modal-body -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary tx-size-xs">Submit</button>
                    <button type="button" class="btn btn-secondary tx-size-xs" data-dismiss="modal">Close</button>
                </div>
                </form>

            </div>
        </div><!-- modal-dialog -->
    </div><!-- modal -->
    <div id="fundBonus" class="modal fade">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                    <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add / Subtract {{ $user->name }} Account Bonus</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.user.fundbonus') }}" method="POST">

                <div class="modal-body pd-20">

                     @csrf
                        <div class="form-layout form-layout-1">
                            <div class="row mg-b-25">

                                <input name="account_type" type="hidden" value="bonus">
                                <input name="user_id" type="hidden" value="{{ $user->id }}">

                                <div class="col-md-6">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label"> Fund Type: <span class="tx-danger">*</span></label>
                                        <select name="type" class="form-control" required>
                                            <option value="credit">Add Money</option>
                                            <option value="debit">Subtract Money</option>
                                        </select>
                                    </div>
                                </div><!-- col-8 -->
                                <div class="col-md-6">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label"> Amount: <span class="tx-danger">*</span></label>
                                        <input class="form-control" required type="number" step="any" name="amount" placeholder="Amount">
                                    </div>
                                </div><!-- col-8 -->
                                <div class="col-md-12">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label"> Note : <span class="tx-danger">*</span></label>
                                        <textarea class="form-control" type="text" name="note"></textarea>
                                    </div>
                                </div><!-- col-8 -->
                            </div>
                        </div>

                 </div><!-- modal-body -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary tx-size-xs">Submit</button>
                    <button type="button" class="btn btn-secondary tx-size-xs" data-dismiss="modal">Close</button>
                </div>
                </form>

            </div>
        </div><!-- modal-dialog -->
    </div><!-- modal -->

@endsection
