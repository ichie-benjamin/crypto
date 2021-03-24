@extends('backend.layouts.master')

@section('content')

    <div class="content-body">
        <div class="container">
            <div class="row">
               @include('partials.menu')
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="card profile_card">
                        <div class="card-body">
                            <div class="media">
                                <img class="mr-3 rounded-circle mr-0 mr-sm-3" src="{{ auth()->user()->avatar }}" width="60"
                                     height="60" alt="">
                                <div class="media-body">
                                    <span>Hello</span>
                                    <h4 class="mb-2">{{ auth()->user()->name }}</h4>
                                    <p class="mb-1"> <span><i class="fa fa-phone mr-2 text-primary"></i></span> {{ auth()->user()->phone }}</p>
                                    <p class="mb-1"> <span><i class="fa fa-envelope mr-2 text-primary"></i></span>
                                        {{ auth()->user()->email }}
                                    </p>
                                    <p class="mb-1"> <span><i class="fa fa-link mr-2 text-primary"></i></span>
                                        Referral Link : {{ auth()->user()->ref_link }}
                                    </p>
                                </div>
                            </div>

                            <ul class="card-profile__info">
                                <li>
                                    <h5 class="mr-4">Address</h5>
                                    <span class="text-muted">{{ auth()->user()->address }}</span>
                                </li>

                                <li>
                                    <h5 class="text-danger mr-4">Last Login</h5>
                                    <span class="text-danger">{{ auth()->user()->lastLoginAt()->diffforhumans() }}</span>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>


                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="card acc_balance">
                        <div class="card-header">
                            <h4 class="card-title">Wallet</h4>
                        </div>
                        <div class="card-body">
                            <h3>Wallet ID</h3>
                            <p class="text-muted">{{ auth()->user()->btc }}</p>

                            <div class="d-flex justify-content-between my-3">
                                <div>
                                    <h3 class="mb-1">Available Balance</h3>
                                    <h4>0.000 USD</h4>
                                </div>
                            </div>


{{--                            <div class="btn-group mb-3">--}}
{{--                                <a href="{{ route('deposit.create') }}" class="btn btn-success">Deposit</a>--}}

{{--                            </div>--}}
                        </div>
                    </div>
                </div>

                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                            <div class="card text-center pt-2">
                                <div class="card-body">
                                    <p class="mb-1">Total Withdrawal</p>
                                    <h4>0.000 USD</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                            <div class="card text-center pt-2">
                                <div class="card-body">
                                    <p class="mb-1">Total Deposit</p>
                                    <h4>0.03654 USD</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                            <div class="card text-center pt-2">
                                <div class="card-body">
                                    <p class="mb-1">Total Trades</p>
                                    <h4>0</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
                            <div class="card text-center pt-2">
                                <div class="card-body">
                                    <p class="mb-1">Active Plan</p>
                                    <h4>None</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Transactions History</h4>
                        </div>
                        <div class="card-body">
                            <div class="transaction-table">
                                <div class="table-responsive">
                                    @if (count($deposits) > 0)
                                        <table class="table table-striped mb-0 table-responsive-sm">
                                            <thead>
                                            <tr>
                                                <th>Amount</th>
                                                <th>Plan</th>
                                                <th> Status</th>
                                                <th>Date </th>
                                                <th>View </th>


                                            </tr>
                                            </thead>
                                            <tbody>


                                            @foreach($deposits as $item)
                                                <tr>
                                                    <td>{{ $item->amount }} USD</td>
                                                    <td>{{ optional($item->plan)->name }}</td>
                                                    <td>
                                                        @if($item->status)
                                                            <p class="badge badge-success">Active</p>
                                                        @else
                                                            <p class="badge badge-warning">Pending</p>
                                                        @endif
                                                    </td>
                                                    <td>{{ $item->created_at->format('Y-m-d') }}</td>
                                                    <td><a class="btn btn-sm btn-success" href="{{ route('backend.deposit.view', $item->id) }}">details</a></td>
                                                    {{--<td>{{ $item-> }}</td>--}}

                                                    {{--<td>{{ $item-> }}</td>--}}
                                                    {{--<td>{{ $item-> }}</td>--}}
                                                    {{--<td>{{ $item->}}</td>--}}

                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    @endif


                                @if (count($deposits) < 1)
                                            <div class="text-center">
                                                <h3 class="text-center">No Transaction Yet, make a deposit to start trading</h3>

                                                <a class="btn text-center btn-success mt-4" href="{{ route('deposit.create') }}">Make Deposit</a>
                                            </div>

                                        @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Trades History</h4>
                        </div>
                        <div class="card-body">
                            <div class="transaction-table">
                                <div class="table-responsive">
                                    @if (count($trades) > 0)
                                    <table class="table table-striped mb-0 table-responsive-sm">
                                        <thead>
                                        <tr>
                                            <th>Transaction ID</th>
                                            <th>Time</th>
                                            <th>Type</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Balance</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($trades as $item)
                                            <tr>
                                                <td>#565845522</td>
                                                <td>January 10, 2020</td>
                                                <td>Realized P&L</td>
                                                <td>0.254782 BTC</td>
                                                <td>Completed</td>
                                                <td>0.125476 BTC</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    @endif

                                        @if (count($trades) < 1)
                                            <div class="text-center">
                                                <h3 class="text-center">No Trades, make a deposit to start trading</h3>

                                                <a class="btn text-center btn-success mt-4" href="{{ route('deposit.create') }}">Make Deposit</a>
                                            </div>

                                        @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


@endsection

@section('js')

@endsection
