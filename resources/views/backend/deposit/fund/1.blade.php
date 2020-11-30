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


                <div class="col-xl-12">
                    @include('notification')

                    <div class="card">
                        <div class="card-header">
                            <div class="col-6"> <h4 class="card-title">Make Deposit </h4></div>
                            <div class="col-6">
                              <a href="{{ route('backend.pending.deposit') }}" style="color: red" class="float-right tx-danger">Pending Deposits</a>
                            </div>
{{--                            <h4 class="card-title">Make Deposit <a href="" class="float-right tx-danger">Pending Deposits</a> </h4>--}}
                        </div>
                        <div class="card-body" id="deposits">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tab1">Payment System</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab2">Bank Wire Transfer</a>
                                </li>
                            </ul>
                            <div class="tab-content" style="margin-top: 20px; margin-bottom: 30px">
                                <div class="tab-pane fade active show" id="tab1">
                                    <div class="row payment-methods">

                                        <div class="col-xl-3 col-lg-3 col-md-3">
                                            <div class="card">
                                                <div class="card-header text-center">
                                                    <h4 class="card-title text-center">Pay with Bitcoin</h4>
                                                </div>
                                                <div class="card-body">
                                                    <img width="100%" height="80px" src="/images/gateway/bitpay.png" />
                                                </div>
                                                <div class="card-footer">
                                                    <h4 class="card-title text-center"><a href="{{ route('backend.deposit.fund.upload') }}"> SELECT</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3">
                                            <div class="card">
                                                <div class="card-header text-center">
                                                    <h4 class="card-title text-center">Fasa Pay</h4>
                                                </div>
                                                <div class="card-body">
                                                    <img width="100%" height="80px" src="/images/gateway/fasapay.jpg" />
                                                </div>
                                                <div class="card-footer">
                                                    <h4 class="card-title text-center"><a href="{{ route('backend.gateway','Fasa Pay Gateway') }}"> SELECT</a></h4>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3">
                                            <div class="card">
                                                <div class="card-header text-center">
                                                    <h4 class="card-title text-center">Western Union</h4>
                                                </div>
                                                <div class="card-body">
                                                    <img width="100%" height="80px" src="/images/gateway/3.jpg" />
                                                </div>
                                                <div class="card-footer">
                                                    <h4 class="card-title text-center"><a href="{{ route('backend.gateway','Western Union payment gateway') }}"> SELECT</a></h4>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3">
                                            <div class="card">
                                                <div class="card-header text-center">
                                                    <h4 class="card-title text-center">Money Gram</h4>
                                                </div>
                                                <div class="card-body">
                                                    <img width="100%" height="80px" src="/images/gateway/1.jpg" />
                                                </div>
                                                <div class="card-footer">
                                                    <h4 class="card-title text-center"><a href="{{ route('backend.gateway','Money Gram Payment gateway') }}"> SELECT</a></h4>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3">
                                            <div class="card">
                                                <div class="card-header text-center">
                                                    <h4 class="card-title text-center">Visa & MasterCard</h4>
                                                </div>
                                                <div class="card-body">
                                                    <img width="100%" height="80px" src="/images/gateway/visa.jpg" />
                                                </div>
                                                <div class="card-footer">

                                                    <h4 class="card-title text-center"><a href="{{ route('backend.gateway','Visa & MasterCard Payment gateway') }}"> SELECT</a></h4>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-3">
                                            <div class="card">
                                                <div class="card-header text-center">
                                                    <h4 class="card-title text-center">Neteller</h4>
                                                </div>
                                                <div class="card-body">
                                                    <img width="100%" height="80px" src="/images/gateway/net.jpg" />
                                                </div>
                                                <div class="card-footer">

                                                    <h4 class="card-title text-center"><a href="{{ route('backend.gateway','Neteller Payment gateway') }}"> SELECT</a></h4>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-lg-3 col-md-3">
                                            <div class="card">
                                                <div class="card-header text-center">
                                                    <h4 class="card-title text-center">Skrill</h4>
                                                </div>
                                                <div class="card-body">
                                                    <img width="100%" height="80px" src="/images/gateway/skril.png" />
                                                </div>
                                                <div class="card-footer">

                                                    <h4 class="card-title text-center"><a href="{{ route('backend.gateway','Skrill Payment gateway') }}"> SELECT</a></h4>

                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    <ul>
                                        <li>
                                            <i class="mdi mdi-checkbox-blank-circle"></i>
                                            All Payment method on Cryto Assets is secured and realiable
                                        </li>
                                        <li>
                                            <i class="mdi mdi-checkbox-blank-circle"></i>
                                            If you are using a public server for your transactions, please ensure you logout before leaving the browser
                                        </li>
                                        <li>
                                            <i class="mdi mdi-checkbox-blank-circle"></i>
                                            Deposit approvals usually takes less than 24hrs during working days
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="tab2">
                                    <form method="post" action="{{ route('backend.deposit.save') }}" class="py-5 col-md-6 col-sm-12">

                                        {{ csrf_field() }}

                                        <div class="form-group row align-items-center">
                                            <div class="col-sm-4">
                                                <label for="inputEmail3" class="col-form-label">Payment Method
                                                    <br>
                                                    <small>Selected Payment Method</small>
                                                </label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="input-group mb-3">
                                                    <img src="/images/wt.png" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row align-items-center">
                                            <div class="col-sm-4">
                                                <label for="inputEmail3" class="col-form-label">Deposit Currency
                                                    <br>
                                                    {{--                                                    <small>Please double check this address</small>--}}
                                                </label>
                                            </div>
                                            <input type="hidden" name="payment_method" value="Wire Transfer">
                                            <div class="col-sm-8">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text  bg-primary"><i class="mdi mdi-currency-usd fs-18 text-white"></i></label>
                                                    </div>
                                                    <select class="form-control">
                                                        <option>USD</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row align-items-center">
                                            <div class="col-sm-4">
                                                <label for="inputEmail3" class="col-form-label">Amount In USD
                                                    <br>
                                                    <small>Minimum amount : {{ setting('minimum_deposit','$1000') }}</small>
                                                </label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text bg-primary"><i class="mdi mdi-currency-usd fs-18 text-white"></i></label>
                                                    </div>
                                                    <input name="amount" required type="number" step="any" class="form-control text-right" placeholder="5000 USD">
                                                </div>
                                            </div>
                                        </div>

                                        {{--                                        <div class="form-group row align-items-center">--}}
                                        {{--                                            <div class="col-sm-6">--}}
                                        {{--                                                <label for="inputEmail3" class="col-form-label">Bitcoin Network Fee--}}
                                        {{--                                                    (BTC)--}}
                                        {{--                                                    <br>--}}
                                        {{--                                                    <small>Transactions on the Bitcoin network are priorirized by--}}
                                        {{--                                                        fees</small>--}}
                                        {{--                                                </label>--}}
                                        {{--                                            </div>--}}
                                        {{--                                            <div class="col-sm-6">--}}
                                        {{--                                                <h4 class="text-right">0.005</h4>--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </div>--}}

                                        <div class="text-right">
                                            <button class="btn btn-primary">Proceed </button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                @section('hides')

                <div class="col-xl-12" id="payment">
                    <div class="card">
                        <div class="card-header">
                            <div class="col-6"> <h4 class="card-title">Make Deposit </h4></div>
                        </div>
                        <div class="card-body" id="deposit">

                            <form method="post" action="{{ route('backend.deposit.store') }}" class="py-5 col-md-6 col-sm-12">

                                {{ csrf_field() }}

                                <div class="form-group row align-items-center">
                                    <div class="col-sm-4">
                                        <label for="inputEmail3" class="col-form-label">Payment Method
                                            <br>
                                            <small>Selected Payment Method</small>
                                        </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="input-group mb-3">
                                            <img src="/images/wt.png" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row align-items-center">
                                    <div class="col-sm-4">
                                        <label for="inputEmail3" class="col-form-label">Deposit Currency
                                            <br>
                                            {{--                                                    <small>Please double check this address</small>--}}
                                        </label>
                                    </div>
                                    <input type="hidden" name="payment_method" value="Wire Transfer">
                                    <div class="col-sm-8">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text  bg-primary"><i class="mdi mdi-currency-usd fs-18 text-white"></i></label>
                                            </div>
                                            <select class="form-control">
                                                <option>USD</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row align-items-center">
                                    <div class="col-sm-4">
                                        <label for="inputEmail3" class="col-form-label">Amount In USD
                                            <br>
                                            <small>Minimum amount : {{ setting('minimum_deposit','$1000') }}</small>
                                        </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text bg-primary"><i class="mdi mdi-currency-usd fs-18 text-white"></i></label>
                                            </div>
                                            <input name="amount" required type="number" step="any" class="form-control text-right" placeholder="5000 USD">
                                        </div>
                                    </div>
                                </div>

                                {{--                                        <div class="form-group row align-items-center">--}}
                                {{--                                            <div class="col-sm-6">--}}
                                {{--                                                <label for="inputEmail3" class="col-form-label">Bitcoin Network Fee--}}
                                {{--                                                    (BTC)--}}
                                {{--                                                    <br>--}}
                                {{--                                                    <small>Transactions on the Bitcoin network are priorirized by--}}
                                {{--                                                        fees</small>--}}
                                {{--                                                </label>--}}
                                {{--                                            </div>--}}
                                {{--                                            <div class="col-sm-6">--}}
                                {{--                                                <h4 class="text-right">0.005</h4>--}}
                                {{--                                            </div>--}}
                                {{--                                        </div>--}}

                                <div class="text-right">
                                    <button class="btn btn-primary">Proceed </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                @stop


            </div>
        </div>
    </div>

@endsection
