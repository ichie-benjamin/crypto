@extends('backend.layouts.master')

@section('content')

    <div class="content-body">
        <div class="container">
            <div class="row">

                @include('partials.menu')

                <div class="col-md-12">
                    @include('notification')

                    <div style="width: 100%" class="alert alert-success">
                        @if(request()->get('t') == 'available_balance')
                            <p>Available Balance : <strong style="color: #0a0c12; font-weight: bold; font-size: 1.4em">{{ auth()->user()->aBalance() }}</strong></p>
{{--                            <p> Account Balance : <strong style="color: #0a0c12; font-weight: bold; font-size: 1.4em">{{ auth()->user()->balance() }}</strong></p>--}}
                        @else
                            <p> Account Balance : <strong style="color: #0a0c12; font-weight: bold; font-size: 1.4em">{{ auth()->user()->balance() }}</strong></p>
{{--                            <p>Available Balance : <strong style="color: #0a0c12; font-weight: bold; font-size: 1.4em">{{ auth()->user()->aBalance() }}</strong></p>--}}
                        @endif
                    </div>
                </div>

                @if(request()->get('t') == 'available_balance')
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title text-capitalize">{{ str_replace('_',' ',request()->get('t')) }} BTC Withdrawal</h4>
                                {{--                            <h4 class="card-title">Make Deposit <a href="" class="float-right tx-danger">Pending Deposits</a> </h4>--}}

                                {{--                            <div class="col-6">--}}
                                <a href="{{ route('backend.pending.withdrawal') }}" style="color: red" class="float-right tx-danger">All Withdrawals</a>
                                {{--                            </div>--}}
                            </div>
                            <div class="card-body" id="deposits">
                                <div class="row">
                                    <form method="post" action="{{ route('backend.withdrawals.store') }}" class="py-5 col-md-6 col-sm-12">

                                        {{ csrf_field() }}

                                        <div class="form-group row align-items-center">
                                            <input type="hidden" name="type" value="{{ request()->get('t') }}" />
                                            <div class="col-sm-4">
                                                <label for="inputEmail3" class="col-form-label">Payment Method
                                                    <br>
                                                    <small>Selected Payment Method</small>
                                                </label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="input-group mb-3">
                                                    <img height="70px" width="70px" src="/images/btc.png" />
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
                                            <input type="hidden" name="method" value="Bitcoin">
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
                                                    <small>Minimum amount : $ {{ setting('minimum_withdraw',100) }}</small>
                                                </label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text bg-primary"><i class="mdi mdi-currency-usd fs-18 text-white"></i></label>
                                                    </div>
                                                    <input name="amount" required type="number" step="any" class="form-control" placeholder="5000 USD">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row align-items-center">
                                            <div class="col-sm-4">
                                                <label for="inputEmail3" class="col-form-label">Wallet Address
                                                    <br>
                                                    <small>Please double check this address </small>
                                                </label>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <label class="input-group-text bg-primary"><i class="mdi mdi-currency-btc fs-18 text-white"></i></label>
                                                    </div>
                                                    <input name="wallet" required type="text" class="form-control" placeholder="">
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
                @else

                    @if (auth()->user()->can_withdraw)
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Wire Withdrawal</h4>
                            {{--                            <h4 class="card-title">Make Deposit <a href="" class="float-right tx-danger">Pending Deposits</a> </h4>--}}

{{--                            <div class="col-6">--}}
                                <a href="{{ route('backend.pending.withdrawal') }}" style="color: red" class="float-right tx-danger">Pending Wire Withdrawals</a>
{{--                            </div>--}}
                        </div>
                        <div class="card-body" id="deposits">
                            <div class="row">
                                <form method="post" action="{{ route('backend.wire.withdrawals.store') }}" class="py-5 col-md-8 col-sm-12">

                                    {{ csrf_field() }}

                                    <input type="hidden" name="type" value="{{ request()->get('t') }}" />

                                    <div class="form-group row align-items-center">
                                        <input type="hidden" name="method" value="Wire Withdraw">

                                        <div class="col-md-12">
                                            <label class="col-form-label">Amount to withdrawal
                                            </label>
                                            <div class="input-group mb-3">
                                                <input name="amount" value="{{ old('amount') }}"  required type="number" step="any" class="form-control" placeholder="e.g 0029203003">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="col-form-label">Account Number
                                            </label>
                                            <div class="input-group mb-3">
                                                <input name="account_number" value="{{ old('account_number') }}"  required type="number" class="form-control" placeholder="e.g 0029203003">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="col-form-label">Account Name
                                            </label>
                                            <div class="input-group mb-3">
                                                <input name="account_name"  value="{{ old('account_name') }}"  required type="text" class="form-control" placeholder="e.g Jone">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="inputEmail3" class="col-form-label">Withdrawal Currency
                                            </label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <label class="input-group-text  bg-primary"><i class="mdi mdi-currency-usd fs-18 text-white"></i></label>
                                                </div>
                                                <select class="form-control">
                                                    <option value="USD">USD</option>
                                                    <option value="EURO">EURO</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="col-form-label">Bank Country
                                            </label>
                                            <div class="input-group mb-3">
                                                <input name="bank_country" value="{{ old('bank_country') }}"  required type="text" class="form-control" placeholder="e.g Canada">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="col-form-label">Bank Currency
                                            </label>
                                            <div class="input-group mb-3">
                                                <input name="bank_currency" value="{{ old('bank_currency') }}" required type="text" class="form-control" placeholder="e.g USD">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="col-form-label">Bank Name
                                            </label>
                                            <div class="input-group mb-3">
                                                <input name="bank_name" value="{{ old('bank_name') }}" required type="text" class="form-control" placeholder="e.g BOA">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="col-form-label">Bank Branch
                                            </label>
                                            <div class="input-group mb-3">
                                                <input value="{{ old('bank_branch') }}"  name="bank_branch" required type="text" class="form-control" placeholder="e.g College">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="col-form-label">Bank address
                                            </label>
                                            <div class="input-group mb-3">
                                                <input value="{{ old('bank_address') }}" name="bank_address" required type="text" class="form-control" placeholder="e.g College">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="col-form-label">Sort Code
                                            </label>
                                            <div class="input-group mb-3">
                                                <input value="{{ old('sort_code') }}" name="sort_code" required type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="col-form-label">Routine Number
                                            </label>
                                            <div class="input-group mb-3">
                                                <input name="routine_number" value="{{ old('routine_number') }}"  required type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="col-form-label">Bank Software
                                            </label>
                                            <div class="input-group mb-3">
                                                <input name="bank_software" value="{{ old('bank_software') }}" required type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="col-form-label">Swift Code
                                            </label>
                                            <div class="input-group mb-3">
                                                <input name="swift_code" value="{{ old('swift_code') }}" required type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="col-form-label">Iban Number
                                            </label>
                                            <div class="input-group mb-3">
                                                <input name="iban_number" value="{{ old('iban_number') }}" required type="text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="col-form-label">Account label
                                            </label>
                                            <div class="input-group mb-3">
                                                <input name="account_label" value="{{ old('account_label') }}" required type="text" class="form-control " placeholder="">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="text-">
                                        <button class="btn btn-primary">Proceed </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                    @else
                        <div class="col-12">
                            <div class="alert alert-danger">
                                <h3>Active Trade Session</h3>
                                Account balance is currently traded on the Forex market, you cannot withdraw until trade is completed
                            </div>
                        </div>
                    @endif
                @endif

                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Important Information</h4>
                        </div>
                        <div class="card-body">
                            <div class="important-info">
                                <ul>
                                    <li>
                                        <i class="mdi mdi-checkbox-blank-circle"></i>
                                        For security reasons, Binary 24 Trades process withdrawals by review once a day.
                                    </li>
                                    <li>
                                        <i class="mdi mdi-checkbox-blank-circle"></i>
                                        Submit your withdrawals by 07:00 UTC +00 (about 11 hour) to be included in
                                        the days batch
                                    </li>
                                    <li>
                                        <i class="mdi mdi-checkbox-blank-circle"></i>
                                        If you are using a public server for your transactions, please ensure you logout before leaving the browser
                                    </li>


                                </ul>
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
