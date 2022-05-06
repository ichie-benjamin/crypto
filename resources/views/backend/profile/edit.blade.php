@extends('backend.layouts.master')

@section('content')

    <div class="content-body">
        <div class="container">
            <div class="row">
                @include('partials.setting-menu')
                <div class="col-xl-12">
                    @include('notification')

                    <form method="post" action="{{ route('backend.profile.update') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    <div class="row">
                        <div class="col-xl-6 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">User Profile</h4>
                                </div>
                                <div class="card-body">

                                        <div class="form-row">
                                            <div class="form-group col-xl-12">
                                                <label class="mr-sm-2">Your Username</label>
                                                <input type="text" value="{{ auth()->user()->username }}" disabled class="form-control" placeholder="Username">
                                            </div>

                                            <div class="form-group col-xl-12">
                                                <div class="media align-items-center ">
                                                    <img class="mr-3 rounded-circle mr-0 mr-sm-3"
                                                         src="{{ auth()->user()->avatar }}" width="50" height="50" alt="">
                                                    <div class="media-body">
                                                        <h5 class="mb-0">{{ auth()->user()->name }}</h5>
{{--                                                        <p class="mb-0">Max file size is 2mb--}}
{{--                                                        </p>--}}
                                                    </div>
                                                </div>
{{--                                                <div class="file-upload-wrapper" data-text="Change Photo">--}}
{{--                                                    <input name="file-upload-field" type="file"--}}
{{--                                                           class="file-upload-field">--}}
{{--                                                </div>--}}


                                                <div class="" style="padding-top: 4px!important;">
                                                    <p><input type="file"  accept="image/*" name="avatar" id="file"  onchange="loadFile(event)" style="display: none;"></p>
                                                    <label class="btn btn-primary"  for="file" style="cursor: pointer;">Upload Front ID</label>
                                                    <span class="float-right">Maximum file size is 2mb</span>
                                                    <p><img id="output" width="100" /></p>
                                                </div>


                                                <div class="form-group col-12">
                                                    <button type="submit" class="btn btn-success px-4">Update</button>
                                                </div>
                                            </div>

                                        </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Your Wallet</h4>
                                </div>
                                <div class="card-body">

                                        <div class="form-row">
                                            <div class="form-group col-xl-12">
                                                <label class="mr-sm-2">BTC Wallet ID</label>
                                                <input type="text" required name="btc" value="{{ auth()->user()->btc }}" class="form-control" placeholder="">
                                            </div>

                                            <div class="form-group col-xl-12 mb-4">
                                                <label class="mr-sm-2">Your Phone Number</label>
                                                <input type="text" required name="phone" value="{{ auth()->user()->phone }}" class="form-control" placeholder="">
                                            </div>

                                        </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Personal Information</h4>
                                </div>
                                <div class="card-body">
{{--                                    <form method="post" action="{{ route('backend.profile.update') }}" class="personal_validate">--}}
                                        <div class="form-row">
                                            <div class="form-group col-xl-6 col-md-6">
                                                <label class="mr-sm-2">Your First Name</label>
                                                <input required value="{{ auth()->user()->first_name }}" type="text" class="form-control" placeholder="{{ auth()->user()->first_name }}"
                                                       name="first_name">
                                            </div>
                                            <div class="form-group col-xl-6 col-md-6">
                                                <label class="mr-sm-2">Your Last Name</label>
                                                <input required value="{{ auth()->user()->last_name }}" type="text" class="form-control" placeholder="{{ auth()->user()->last_name }}"
                                                       name="last_name">
                                            </div>
                                            <div class="form-group col-xl-6 col-md-6">
                                                <label class="mr-sm-2">Email</label>
                                                <input disabled type="email" value="{{ auth()->user()->email }}" class="form-control"
                                                       placeholder="{{ auth()->user()->email }}" >
                                            </div>
                                            <div class="form-group col-xl-6 col-md-6">
                                                <label class="mr-sm-2">Date of birth</label>
                                                <input required type="date" class="form-control" placeholder="10-10-2020"
                                                       id="datepicker" value="{{ auth()->user()->dob }}" autocomplete="off" name="dob">
                                            </div>
                                            <div class="form-group col-xl-6 col-md-6">
                                                <label class="mr-sm-2">Present Address</label>
                                                <input required type="text" class="form-control"
                                                       placeholder="address" value="{{ auth()->user()->address }}" name="address">
                                            </div>
                                            <div class="form-group col-xl-6 col-md-6">
                                                <label class="mr-sm-2">Permanent Address</label>
                                                <input required type="text" value="{{ auth()->user()->permanent_address }}" class="form-control"
                                                       placeholder="permanent address"
                                                       name="permanent_address">
                                            </div>
                                            <div class="form-group col-xl-6 col-md-6">
                                                <label class="mr-sm-2">City</label>
                                                <input required type="text" value="{{ auth()->user()->city }}" class="form-control" placeholder="City"
                                                       name="city">
                                            </div>
                                            <div class="form-group col-xl-6 col-md-6">
                                                <label class="mr-sm-2">Postal Code</label>
                                                <input required type="text" value="{{ auth()->user()->postal }}" class="form-control" placeholder="postal"
                                                       name="postal">
                                            </div>
                                               <div class="form-group col-xl-6 col-md-6">
                                                <label class="mr-sm-2">Country</label>
                                                <input required type="text" value="{{ auth()->user()->country }}" class="form-control" placeholder="Country"
                                                       name="country">
                                            </div>

                                            <div class="form-group col-12">
                                                <button type="submit" class="btn btn-success px-4">Save</button>
                                            </div>
                                        </div>
{{--                                    </form>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


@endsection

@section('js')


    <script>
        var loadFile = function(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
@endsection
