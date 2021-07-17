@extends('backend.layouts.master')

@section('content')

    <div class="content-body">
        <div class="container">
            <div class="row">

                @include('partials.menu')

                <div class="col-md-12 card">
                    <div style="width: 100%" class="alert card-body">

                            <p>Available Balance : <strong style=" font-weight: bold; font-size: 1.4em">{{ auth()->user()->aBalance() }}</strong></p>
                            <p> Account Balance : <strong style="font-weight: bold; font-size: 1.4em">{{ auth()->user()->balance() }}</strong></p>
                            <p> Bonus Balance : <strong style="font-weight: bold; font-size: 1.4em">{{ auth()->user()->bonus() }}</strong></p>

                    </div>
                </div>

                    <div class="col-xl-12">
                        @include('notification')
                        <div class="card">
                            <div class="card-header">
                                <div class="col-6"> <h4 class="card-title">SELECT ACCOUNT TO WITHDRAW FROM</h4></div>
                                <div class="col-6">
                                    <a href="{{ route('backend.pending.withdrawal') }}" style="color: red" class="float-right tx-danger">All Withdrawals</a>
                                </div>
                                {{--                            <h4 class="card-title">Make Deposit <a href="" class="float-right tx-danger">Pending Deposits</a> </h4>--}}
                            </div>
                            <div class="card-body" id="deposits">
                                <div class="tab-content" style="margin-top: 20px; margin-bottom: 30px">
                                    <div class="tab-pane fade active show" id="tab1">
                                        <div class="row payment-methods">

                                            <div class="col-md-4 col-sm-6">
                                                <div class="card text-center p-1">
                                                    <div class="card-body">
                                                        <p class="mb-1">Account Balance</p>
                                                        <h4>$ {{ Auth()->user()->total() }} </h4>
                                                        <a href="{{ route('backend.btc.withdrawal') }}?t=account_balance" class="nav-link">Select</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="card text-center p-1">
                                                    <div class="card-body">
                                                        <p class="mb-1">Available Balance</p>
                                                        <h4>$ {{ Auth()->user()->withdrawable }} </h4>
                                                        <a href="{{ route('backend.btc.withdrawal') }}?t=available_balance" class="nav-link">Select</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="card text-center p-1">
                                                    <div class="card-body">
                                                        <p class="mb-1">Bonus Balance</p>
                                                        <h4>$ {{ Auth()->user()->bonus }}</h4>
                                                        <a href="{{ route('backend.withdraw.bonus') }}" class="nav-link">Select</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                    <div class="tab-pane fade" id="tab2">
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
                                                    <label for="inputEmail3" class="col-form-label">Withdrawal Currency
                                                        <br>
                                                        {{--                                                    <small>Please double check this address</small>--}}
                                                    </label>
                                                </div>
                                                <input type="hidden" name="method" value="Wire Transfer">
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
                                                        <small>Minimum amount : {{ setting('minimum_withdraw','$1000') }}</small>
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

                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Status definitions</h4>
                            </div>
                            <div class="card-body">
                                <div class="important-info">
                                    <ul>
                                        <li>
                                            <i class="mdi mdi-checkbox-blank-circle"></i>
                                            <span class="badge badge-info">Processing</span>
                                            We have received confirmation of your withdrawal request, and will be processing your request shortly.
                                        </li>
                                         <li>
                                            <i class="mdi mdi-checkbox-blank-circle"></i>
                                            <span class="badge badge-success">Completed</span>
                                             Your withdrawal request has been successfully processed and your funds are on the way to your designated account.
                                        </li>
                                         <li>
                                            <i class="mdi mdi-checkbox-blank-circle"></i>
                                            <span class="badge badge-warning">Cancelled</span>
                                             Your withdrawal has been canceled as per your request.
                                        </li>

   <li>
                                            <i class="mdi mdi-checkbox-blank-circle"></i>
                                            <span class="badge badge-danger">Declined</span>
       Your withdrawal request was not able to be processed. An email has been sent to you with more details.
       If you require any further clarifications please contact {{ setting('support_email') }}
   </li>



                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


{{--                    <div class="row">--}}

{{--                    </div>--}}



            </div>
        </div>
    </div>


@endsection

@section('js')

@endsection
