@extends('admin.layouts.admin-app')

@section('style')
    @include('admin.partials.dt-css')
@endsection

@section('content')
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Dashboard</a>
                <a class="breadcrumb-item" href="#">Withdrawals</a>
                <span class="breadcrumb-item active">{{ $title }}</span>
            </nav>
        </div><!-- br-pageheader -->

        <div class="br-pagebody">

            <div class="br-section-wrapper">

                @include('notification')

                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10" style="padding-bottom: 50px">{{ $title }}
                <a href="{{ route('admin.withdrawals.index') }}?status=0" class="float-right btn btn-xs btn-primary ">Pending Withdrawals</a>
                <a href="{{ route('admin.withdrawals.index') }}?status=1" class="float-right btn btn-xs btn-success mr-2">Approved Withdrawals</a>
                </h6>

                <div class="table-wrapper">
                    <table id="datatable1" class="table display table-bordered responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-5p">S/N</th>
                            <th class="wd-15p">User</th>
                            <th class="wd-15p">Requested Amount</th>
                            <th class="wd-30p">Type</th>
                            <th class="wd-30p">Method</th>
                            <th class="wd-30p">Wallet ID / Wire ID</th>
                            <th class="wd-15p">Status</th>
                            <th class="wd-15p">Proof</th>
                            <th class="wd-10p">Action</th>
{{--                            <th class="wd-10p">Fees</th>--}}
                        </tr>
                        </thead>
                        <tbody>

                        @php
                            $count = 1;
                        @endphp
                        @foreach ($withdrawals as $item)
                            @if($item->user)
                            <tr>
                                <td>{{ $count++ }}</td>
                                <td><a href="{{ route('admin.users.show',$item->user ? $item->user->username : 1) }}" >{{ optional($item->user)->name }}</a></td>
                                <td>${{ $item->amount }}</td>
                                <td>{{ $item->type }}</td>
                                <td>
                                    {{ $item->method }}
                                </td>
                                <td>
                                    @if ($item->method == 'Bitcoin')
                                        {{ $item->wallet }}
                                    @else
                                        <a href="{{ route('admin.withdrawals.show', $item->wallet) }}">View Wire Info</a>
                                    @endif
                                </td>
                                <td>{{ $item->status  }}</td>
                                <td>
                                    @if ($item->type == 'account_balance')
                                        @if ($item->commission_proof)
                                            <a target="_blank" href="{{ $item->commission_proof }}">View Commission Proof</a>
                                        @endif
                                        @if ($item->tax_proof)
                                            <br/><a target="_blank" href="{{ $item->tax_proof }}">View Tax Proof</a>
                                        @endif
                                        @if ($item->cot_proof)
                                            <br/><a target="_blank" href="{{ $item->cot_proof }}">View Cost of Transfer Proof</a>
                                        @endif
                                        <br/>   <a data-toggle="modal" data-target="#modaldemo1" href="" data-placement="top" class="btn btn-success btn-sm">Approve Proof</a>

                                    @else
                                        None
                                    @endif
                                     </td>
                                <td>
                                    <a href="{{ route('admin.withdrawals.approve', $item->id) }}" class="{{ $item->approved ? 'btn-danger' : 'btn-success' }} btn " data-toggle="tooltip" data-placement="top">{{ $item->approved ? 'Un Approve': 'Approve' }}</a>
{{--                                    <a href="{{ route('admin.deposit.destroy', $item) }}" onclick="return confirm(&quot;Click Ok to delete Deposit.&quot;)" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Delete"><em class="fa fa-trash"></em>--}}
{{--                                    </a>--}}
                                </td>

                            </tr>


                            <div id="modaldemo1" class="modal fade">
                                <div class="modal-dialog modal-dialog-vertical-center" role="document">
                                    <div class="modal-content bd-0 tx-14">
                                        <div class="modal-header pd-y-20 pd-x-25">
                                            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Approve Each Fee by entering the amount</h6>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('admin.withdrawal.approve', $item->id) }}" method="POST">
                                            @csrf

                                            <div class="modal-body pd-25">
                                                <div class="form-group mg-b-10-force">
                                                    <label class="form-control-label">Commission Fee : <span class="tx-danger">*</span></label>
                                                    <input class="form-control" value="{{ $item->commission }}"  required type="number" step="any" name="commission" placeholder="Commission Fee">
                                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                                </div>
                                                <div class="form-group mg-b-10-force">
                                                    <label class="form-control-label">Tax Fee :</label>
                                                    <input class="form-control" value="{{ $item->tax }}"  type="number" step="any" name="tax" placeholder="Tax">
                                                </div>
                                                <div class="form-group mg-b-10-force">
                                                    <label class="form-control-label">Cost of Transfer : </label>
                                                    <input class="form-control" value="{{ $item->cost_of_transfer }}"  type="number" step="any" name="cost_of_transfer" placeholder="Cost of Transfer">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium">Submit</button>
                                                <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Close</button>
                                            </div>
                                        </form>

                                    </div>
                                </div><!-- modal-dialog -->
                            </div><!-- modal -->
@endif
                        @endforeach

                        </tbody>
                    </table>
                </div><!-- table-wrapper -->
            </div>
        </div>
        @endsection

        @section('js')
            <script>
                function destroyUser(e) {
                    e.preventDefault();

                    if (confirm('There is no reversal to this!\nAre you sure you want to remove this item entirely from the system? '))
                        document.getElementById('delete-customer-form').submit()
                    else
                        return false;
                }
            </script>

    @include('admin.partials.dt-js')
@endsection
