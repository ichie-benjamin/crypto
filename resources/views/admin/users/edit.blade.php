@extends('admin.layouts.admin-app')

@section('css')
    <link href="{{ asset('lib/select2/css/select2.min.css') }}" rel="Stylesheet">
@endsection

@section('content')
    <div class="br-mainpanel">
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5">Edit {{ $user->name }}</h4>
    </div>

    <div class="br-pagebody">
        <div class="br-section-wrapper">

        <div class="row mg-t-10">
            <div class="col-xl-10">

                @include('notification')

            <div class="form-layout form-layout-4">
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Edit {{ $user->name }}</h6>

                <form action="{{ route('admin.users.update', $user) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                    <label class="col-sm-4 form-control-label">First Name: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <input id="name" type="text" placeholder="First name" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ $user->first_name }}" required autocomplete="name" autofocus>

                        @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <small><strong>{{ $message }}</strong></small>
                            </span>
                        @enderror
                    </div>
                    </div><!-- row -->

                    <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Email: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" readonly required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <small><strong>{{ $message }}</strong></small>
                            </span>
                        @enderror
                    </div>
                    </div>
                    <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Mobile Number: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <input id="mobile_number" type="text" placeholder="Phone number" class="form-control @error('mobile_number') is-invalid @enderror" name="mobile_number" value="{{ $user->mobile_number }}" required autocomplete="mobile_number" autofocus>

                        @error('mobile_number')
                            <span class="invalid-feedback" role="alert">
                                <small><strong>{{ $message }}</strong></small>
                            </span>
                        @enderror
                    </div>
                    </div>

                    <div class="row mg-t-20">
                        <label class="col-sm-4 form-control-label">Username <span class="tx-danger">*</span></label>
                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                            <input id="name" disabled type="text" placeholder="Username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ $user->username }}" required readonly autocomplete="username" autofocus>

                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <small><strong>{{ $message }}</strong></small>
                                </span>
                            @enderror
                        </div>
                    </div>

                    @if (auth()->user()->hasRole('super_admin'))
                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Password <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <small><strong>{{ $message }}</strong></small>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Confirm Password <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div>
{{--                    @endrole--}}
                    @endif

                    <div class="row mg-t-20">
                        <label class="col-sm-4 form-control-label"> <span>Active</span>    </label>                      <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                            <input type="checkbox" name="active" @if ($user->active) checked @endif @if ($user->hasRole(['super_admin','admin'])) disabled @endif>
                        </div>
                    </div>

                    <div class="row mg-t-20">
                        <label class="col-sm-4 form-control-label">Choose Role <span class="tx-danger">*</span></label>
                        <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                        <select name="role" class="form-control select2" data-placeholder="Choose Role" required>
                            <option label="Choose Role"></option>
                                @foreach ($admin_roles ?? [] as $role)
                                    <option value="{{ $role ?? '' }}" @if($role == ($user->role)) selected @endif>{{ $role }}</option>
                                @endforeach
                            {{-- <option value="USA">Plan A</option>
                            <option value="UK">Plan B</option> --}}

                        </select>
                    </div>
                    </div><!-- col-4 -->
                    <div class="form-layout-footer mg-t-30">
                    <button class="btn btn-info">Submit Form</button>
                    <input type="reset" class="btn btn-secondary" value="Cancel">
                    </div><!-- form-layout-footer -->
                </form>
            </div><!-- form-layout -->
            </div><!-- col-6 -->

        </div>
        </div>
</div>
@endsection

@section('js')
    <script src="{{ asset('lib/select2/js/select2.min.js') }}"></script>
@endsection
