@extends('backend.layouts.master')

@section('content')

    <div class="content-body">
        <div class="container">
            <div class="row">
                @include('partials.menu')
                @foreach($packages as $item)
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="card acc_balance">
                        <div class="card-header">
                            <h2 class="card-titl text-capitalize">{{ $item->name }}</h2>
                        </div>
                        <div class="card-body">
{{--                            <span>{{ $item->name }}</span>--}}
                            <h3>{{ $item->price }}</h3>

                            <div class="d-flex justify-content-between my-3">
                                <div>
                                    <p class="mb-1">Minimum Deposit</p>
                                    <h4>{{ $item->minimum_purchase }} USD</h4>
                                </div>
                            </div>
                            <div>
                                <p class="mb-1">Maximum Deposit</p>
                                <h4>{{ $item->maximum_purchase }} USD</h4>
                            </div>

                            <div class="d-flex justify-content-between my-3">

                                <div>
                                    <p class="mb-1">Daily Return</p>
                                    <h4>{{ $item->percent_profit }}%</h4>
                                </div>

                            </div>
                            <div>
                                <p class="mb-1">Total Return</p>
                                <h4>{{ $item->totalReturn() }}%</h4>
                            </div>
                            <div class="d-flex justify-content-between my-3">
                                <div>
                                    <p class="mb-1">Plan Period</p>
                                    <h4>{{ $item->period }} days</h4>
                                </div>
                            </div>

                            <div class="btn-group mb-3">
                                <a href="{{ route('deposit.purchase', $item->id) }}" class="btn btn-success">Choose Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                @section('hide')
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Enter Amount</h4>
                        </div>
                        <div class="card-body"  id="deposits">
                            <input type="text" class="form-control"
                                   value="0xceb1b174085b0058201be4f2cd0da6a21bff85d4">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tab1">TUSD</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab2">USDC</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab3">FIAT</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab1">
                                    <div class="qrcode">
                                        <img src="images/qr.svg" alt="" width="150">
                                    </div>
                                    <form action="#">
                                        <div class="input-group">
                                            <input type="text" class="form-control"
                                                   value="0xceb1b174085b0058201be4f2cd0da6a21bff85d4">
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-primary text-white">Copy</span>
                                            </div>
                                        </div>
                                    </form>

                                    <ul>
                                        <li>
                                            <i class="mdi mdi-checkbox-blank-circle"></i>
                                            TUSD network transfers will be credited to your Tradio account after
                                            25 network confirmations.
                                        </li>
                                        <li>
                                            <i class="mdi mdi-checkbox-blank-circle"></i>
                                            TUSD deposits to this address are unlimited. Note that you may not
                                            be able to withdraw all of your funds at once if you deposit more
                                            than your daily withdrawal limit.
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="tab2">
                                    <div class="qrcode">
                                        <img src="images/qr.svg" alt="" width="150">
                                    </div>
                                    <form action="#">
                                        <div class="input-group">


                                            <div class="input-group-append">
                                                <span class="input-group-text bg-primary text-white">Copy</span>
                                            </div>
                                        </div>
                                    </form>

                                    <ul>
                                        <li>
                                            <i class="mdi mdi-checkbox-blank-circle"></i>
                                            USDC network transfers will be credited to your Tradio account after
                                            25 network confirmations.
                                        </li>
                                        <li>
                                            <i class="mdi mdi-checkbox-blank-circle"></i>
                                            USDC deposits to this address are unlimited. Note that you may not
                                            be able to withdraw all of your funds at once if you deposit more
                                            than your daily withdrawal limit.
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="tab3">
                                    <div class="qrcode">
                                        <img src="images/qr.svg" alt="" width="150">
                                    </div>
                                    <form action="#">
                                        <div class="input-group">
                                            <input type="text" class="form-control"
                                                   value="0xceb1b174085b0058201be4f2cd0da6a21bff85d4">
                                            <div class="input-group-append">
                                                <span class="input-group-text bg-primary text-white">Copy</span>
                                            </div>
                                        </div>
                                    </form>

                                    <ul>
                                        <li>
                                            <i class="mdi mdi-checkbox-blank-circle"></i>
                                            USDC network transfers will be credited to your Tradio account after
                                            25 network confirmations.
                                        </li>
                                        <li>
                                            <i class="mdi mdi-checkbox-blank-circle"></i>
                                            USDC deposits to this address are unlimited. Note that you may not
                                            be able to withdraw all of your funds at once if you deposit more
                                            than your daily withdrawal limit.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    @endsection
            </div>
        </div>
    </div>

@endsection
