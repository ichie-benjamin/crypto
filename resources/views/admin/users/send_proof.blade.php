@extends('admin.layouts.admin-app')

@section('content')
    <div class="br-mainpanel">
        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">Send Fast Payment Proof</h4>
        </div>

        <div class="br-pagebody">
            <div class="br-section-wrapper">

                <div class="row mg-t-10">
                    <div class="col-xl-10">

                        @include('notification')

                        <div class="form-layout form-layout-4">
                            <form action="{{ route('admin.mail.proof') }}" method="POST">
                                @csrf
                                <div class="row mg-t-20">
                                    <label class="col-sm-12 form-control-label">Receiver Name : <span class="tx-danger">*</span></label>
                                    <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                        <input id="name" type="text" class="form-control" placeholder="name" name="name" value="{{ old('name') }}" required >
                                    </div>
                                </div>
                                <div class="row mg-t-20">
                                    <label class="col-sm-12 form-control-label">Email Address : <span class="tx-danger">*</span></label>
                                    <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                        <input id="email" type="text" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required >
                                    </div>
                                </div>
                                <div class="row mg-t-20">
                                    <label class="col-sm-12 form-control-label">Wallet ID : <span class="tx-danger">*</span></label>
                                    <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                        <input id="wallet" type="text" class="form-control" placeholder="Wallet ID" name="wallet" value="{{ old('wallet') }}" required >
                                    </div>
                                </div>
                                <div class="row mg-t-20">
                                    <label class="col-sm-12 form-control-label">Amount (In USD) : <span class="tx-danger">*</span></label>
                                    <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                        <input id="amount" type="text" class="form-control" placeholder="Amount" name="amount" value="{{ old('amount') }}" required >
                                    </div>
                                </div>


                                <div class="mg-t-20">
                                <button class="btn btn-info">Send Proof</button>
                                </div>
                            </form>
                        </div><!-- form-layout -->
                    </div><!-- col-6 -->

                </div>
            </div>
        </div>
        @endsection

