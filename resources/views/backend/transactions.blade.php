

@extends('backend.layouts.master')

@section('content')

    <div class="content-body">
        <div class="container">
            <div class="row">
                @include('partials.menu')

                @if ($deposit)
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="card profile_card">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <h4 class="mb-2">Last Transaction</h4>
                                    </div>
                                </div>

                                <ul class="card-profile__info">
                                    <li>
                                        <h5 class="mr-4">Package Name</h5>
                                        <span class="text-muted">{{ optional($deposit->plan)->name }}</span>
                                    </li>

                                    <li>
                                        <h5 class=" mr-4">Deposit Amount</h5>
                                        <span class="text-muted">{{ $deposit->amount }}</span>
                                    </li>
                                    <li>
                                        <h5 class=" mr-4">Package Duration</h5>
                                        <span class="text-muted">{{ optional($deposit->plan)->period }}</span>
                                    </li>
                                    <li>
                                        <h5 class=" mr-4">Status</h5>
                                        @if($deposit->status)
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-warning">Pending</span>
                                        @endif
                                    </li>
                                    <li>
                                        <h5 class=" mr-4">Date Created</h5>
                                        <span class="text-muted">{{ $deposit->created_at->format('Y-m-d') }}</span>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                @endif

                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Transaction Histories</h4>
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
                                                <h3 class="text-center">No Transactions Yet, make a deposit to start trading</h3>

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
