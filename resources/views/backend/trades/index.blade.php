@extends('backend.layouts.backend')

@section('content')
    <div class="container-fluid">
    <!-- START: Breadcrumbs-->
    <div class="row ">
        <div class="col-12  align-self-center">
            <div class="sub-header mt-3 py-3 px-3 align-self-center d-sm-flex w-100 rounded">
                <div class="w-sm-100 mr-auto"><h4 class="mb-0">Trade Histories</h4></div>

                <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}"> Dashboard</a></li>
                    <li class="breadcrumb-item">Trade Histories</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- END: Breadcrumbs-->


        <div class="row">


            <div class="col-xl-12 col-lg-12 col-sm-12">

                <div style="margin-top: 10px" class="card">
                    <div class="card-header">
                        <h5 class="card-title">Your Trade History</h5>
                    </div>
                    <div class="card-body">
                        <div class="transaction-table">
                            <div class="table-responsive">
                                    <table id="datatable" class="display table dataTable table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <td></td>
                                            <th>Currency</th>
                                            <th>Currency Pair</th>
                                            <th>Trade Time</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Profit / Lose</th>
                                            <th>Opening Price</th>
                                            <th>Closing Price</th>

                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($trades as $item)
                                            {{--                                                <tr>--}}
                                            {{--                                                    @if ($item->is_win)--}}
                                            {{--                                                        <td><span class="buy-thumb"><i class="mdi mdi-arrow-up"></i></span>--}}
                                            {{--                                                        </td>--}}
                                            {{--                                                    @else--}}
                                            {{--                                                        <td><span class="sold-thumb"><i class="mdi mdi-arrow-down"></i></span>--}}
                                            {{--                                                        </td>--}}
                                            {{--                                                    @endif--}}

                                            {{--                                                    <td><img src="{{ optional($item->currency)->image }}" height="30" />--}}
                                            {{--                                                    </td>--}}
                                            {{--                                                    <td>{{ $item->currency_pair }}--}}
                                            {{--                                                    </td>--}}
                                            {{--                                                       <td>{{ $item->created_at }}--}}
                                            {{--                                                    </td>--}}
                                            {{--                                                        <td>${{ $item->traded_amount }}</td>--}}


                                            {{--                                                    <td class="{{ $item->is_win ? 'text-success' : 'text-danger' }}">{{ $item->is_win ? 'Win' : 'Loss' }}</td>--}}

                                            {{--                                                        <td>{{ $item->is_win ? '+' : '-' }}${{ $item->payout }}</td>--}}
                                            {{--                                                        <td>{{ $item->o_price }}</td>--}}
                                            {{--                                                        <td>{{ $item->c_price }}</td>--}}
                                            {{--                                                    <td>{{ $item->created_at }}</td>--}}
                                            {{--                                                </tr>--}}

                                        @endforeach


                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>



    @include('partials.datatable')

@endsection
