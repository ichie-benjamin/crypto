@extends('backend.layouts.master')

@section('styles')
    <style>
        .form-control {
            background: #fff3cd!important;
        }
</style>

@endsection

@section('content')


    <div class="content-body">
        <div class="container">

            <div class="row">
                @include('partials.menu')
                @include('notification')

                <div class="col-xl-12 col-lg-12 col-md-12">

                    <div class="card acc_balance" style="background: white;">
                        <div class="card-header" style="background: white">
                            <h4 style="color: #0a0c12" class="card-titl text-capitalize">Select a payment method to make a deposit!</h4>
                        </div>
                        <div class="card-body" style="background: white">
{{--                            <span>{{ $item->name }}</span>--}}
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-3">
                                    <div class="card">
                                        <div class="card-header text-center">
                                            <h4 class="card-title text-center">Pay with Bitcoin</h4>
                                        </div>
                                        <div class="card-body">
                                            <img width="100%" src="/images/gateway/4.jpg" />
                                        </div>
                                        <div class="card-footer">
                                            <h4 class="card-title text-center"><a href="{{ route('backend.deposit.fund.upload') }}"> SELECT</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-3">
                                    <div class="card">
                                        <div class="card-header text-center">
                                            <h4 class="card-title text-center">Wire Transfer</h4>
                                        </div>
                                        <div class="card-body">
                                            <img width="100%" src="/images/gateway/2.jpg" />
                                        </div>
                                        <div class="card-footer">
                                            <h4 class="card-title text-center">SELECT</h4>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-3">
                                    <div class="card">
                                        <div class="card-header text-center">
                                            <h4 class="card-title text-center">Western Union</h4>
                                        </div>
                                        <div class="card-body">
                                            <img width="100%" src="/images/gateway/3.jpg" />
                                        </div>
                                        <div class="card-footer">
                                            <h4 class="card-title text-center">SELECT</h4>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-3">
                                    <div class="card">
                                        <div class="card-header text-center">
                                            <h4 class="card-title text-center">Money Gram</h4>
                                        </div>
                                        <div class="card-body">
                                            <img width="100%" src="/images/gateway/1.jpg" />
                                        </div>
                                        <div class="card-footer">
                                            <h4 class="card-title text-center">SELECT</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


{{--                    <form method="POST" action="{{ route('backend.deposits.store') }}">--}}
{{--                        {{ csrf_field() }}--}}
{{--                        <div class="card">--}}
{{--                        <div class="card-header">--}}
{{--                            <h4 class="card-title">Your Deposit</h4>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="d-flex justify-content-between my-3">--}}
{{--                                <div>--}}
{{--                                    <input type="hidden" name="plan_id" value="{{ $package->id }}">--}}
{{--                                    <input type="hidden" name="payment_method" value="btc">--}}
{{--                                    <input required name="amount" type="number" class="form-control"--}}
{{--                                           value="{{ old('amount') }}" placeholder="Enter Amount">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="card">--}}
{{--                        <div class="card-header">--}}
{{--                            <h4 class="card-title">Select Deposit Method</h4>--}}
{{--                        </div>--}}
{{--                        <div class="card-body"  id="deposits">--}}
{{--                            <ul class="nav nav-tabs" id="myTab" role="tablist">--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link active" data-toggle="tab" href="#tab1">--}}
{{--                                        <img style="width: 100px" src="/images/bitpay.png">--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                            <div class="tab-content">--}}
{{--                                <div class="tab-pane fade show active" id="tab1">--}}
{{--                                    <div class="qrcode">--}}
{{--                                        <img src="/back/images/qr.svg" alt="" width="150">--}}
{{--                                    </div>--}}
{{--                                    <form action="#">--}}
{{--                                        <div class="input-group">--}}
{{--                                            <input type="text" class="form-control"--}}
{{--                                                   value="0xceb1b174085b0058201be4f2cd0da6a21bff85d4">--}}
{{--                                            <div class="input-group-append">--}}
{{--                                                <span class="input-group-text bg-primary text-white">Copy</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </form>--}}

{{--                                    <ul>--}}
{{--                                        <li>--}}
{{--                                            <i class="mdi mdi-checkbox-blank-circle"></i>--}}
{{--                                            Once you have made a deposit, kindly upload a proof of payment--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="btn-group mb-3">--}}
{{--                        <input type="submit" class="btn btn-success" value="Continue" />--}}
{{--                    </div>--}}
{{--                    </form>--}}
                </div>

            </div>
        </div>
    </div>

@endsection
