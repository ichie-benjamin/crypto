@extends('admin.layouts.admin-app')

@section('style')
    @include('admin.partials.dt-css')
@endsection

@section('content')
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Dashboard</a>
                <a class="breadcrumb-item" href="#">Deposits</a>
                <span class="breadcrumb-item active">{{ $title }}</span>
            </nav>
        </div><!-- br-pageheader -->

        <div class="br-pagebody">

            <div class="br-section-wrapper">

                @include('notification')

                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10" style="padding-bottom: 50px">{{ $title }}
                <a href="{{ route('admin.deposits.index') }}?status=0" class="float-right btn btn-xs btn-primary ">Pending Deposits</a>
                <a href="{{ route('admin.deposits.index') }}?status=1" class="float-right btn btn-xs btn-success mr-2">Approved Deposits</a>
                </h6>

                <div class="table-wrapper">
                    <table id="datatable1" class="table display table-bordered responsive nowrap">
                        <thead>
                        <tr>
                            <th class="wd-5p">S/N</th>
                            <th class="wd-15p">User</th>
                            <th class="wd-30p">Package Period</th>
                            <th class="wd-15p">Amount</th>
                            <th class="wd-10p">Proof</th>
                            <th class="wd-10p">Status</th>
                            <th class="wd-10p">Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        @php
                            $count = 1;
                        @endphp
                        @foreach ($deposits as $item)
                            <tr>
                                <td>{{ $count++ }}</td>
                                <td>{{ optional($item->user)->name }}</td>
                                <td>{{ optional($item->plan)->name }}</td>
                                <td>{{ optional($item->plan)->period }}</td>
                                <td>{{ $item->amount }}</td>
                                <td>
                                    @if ($item->proof)
                                        <img height="30px" width="30px" src="{{ $item->proof }}">
                                        <br/>
                                        <a target="_blank" href="{{ $item->proof }}">View Proof</a>
                                    @else
                                        Not Uploaded
                                    @endif
                                 </td>
                                <td>{{ $item->status ? 'Approved' : 'Un Approved' }}</td>
                                <td>
                                    <a href="{{ route('admin.deposit.approve', $item->id) }}" class="{{ $item->status ? 'btn-danger' : 'btn-success' }} btn " data-toggle="tooltip" data-placement="top">{{ $item->status ? 'Un Approve': 'Approve' }}</a>
                                    <a href="{{ route('admin.deposit.destroy', $item) }}" onclick="return confirm(&quot;Click Ok to delete Deposit.&quot;)" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Delete"><em class="fa fa-trash"></em>
                                    </a>
                                </td>

                            </tr>
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
