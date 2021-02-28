@extends('admin.layouts.admin-app')

@section('content')
    <div class="br-mainpanel">
        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">Send Message to {{ $user->name }}</h4>
        </div>

        <div class="br-pagebody">
            <div class="br-section-wrapper">

                <div class="row mg-t-10">
                    <div class="col-xl-10">

                        @include('notification')

                        <div class="form-layout form-layout-4">
                            <form action="{{ route('admin.user.send_msg') }}" method="POST">
                                @csrf

                                <input type="hidden" name="user_id" value="{{  $user->id }}">
                                <div class="row mg-t-20">
                                    <label class="col-sm-4 form-control-label">Subject : <span class="tx-danger">*</span></label>
                                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                        <input id="subject" type="text" class="form-control" placeholder="Mail Subject" name="subject" value="" required >

                                        @error('subject')
                                        <span class="invalid-feedback" role="alert">
                                <small><strong>{{ $message }}</strong></small>
                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="row mg-t-20">
                                    <label class="col-sm-12 form-control-label">Message: <span class="tx-danger">*</span></label>
                                </div>

                                <div class="row mg-t-20">
                                    <div class="col-sm-12 mg-t-10 mg-sm-t-0">
                                        <textarea required class="form-control" rows="5"  name="message"></textarea>
                                    </div>
                                </div>
                                <div class="mg-t-20">
                                <button class="btn btn-info">Submit Form</button>
                                </div>
                            </form>
                        </div><!-- form-layout -->
                    </div><!-- col-6 -->

                </div>
            </div>
        </div>
        @endsection

