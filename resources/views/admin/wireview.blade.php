@extends('admin.layouts.admin-app')


@section('content')
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Dashboard</a>
                <a class="breadcrumb-item" href="{{ route('admin.withdrawals.index') }}">Wire Transfer Details</a>
                <span class="breadcrumb-item active">{{ $title }}</span>
            </nav>
        </div><!-- br-pageheader -->

        <div class="br-pagebody">

            <div class="br-section-wrapper">

                @include('notification')

                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10" style="padding-bottom: 50px">{{ $title }}
                </h6>

                <div class="row ">
                    <div class="col-md-4">
                        <div class="card pd-20 pd-xs-30 shadow-base bd-0">
                            <h6 class="tx-gray-800 tx-uppercase tx-semibold tx-13 mg-b-25">Wire Transfer Information</h6>

                            @foreach($fields as $item)
                                @if ($item == 'user_id')
                                    <label class="tx-10 tx-uppercase tx-mont tx-lg-15 tx-spacing-1 mg-b-2 text-bold-700 ">User</label>
                                    <p class="tx-info mg-b-25 text-uppercase">
                                        {{ \App\Models\User::whereId($wire->user_id)->first()->name }}
                                    </p>
                                @else
                                    <label class="tx-10 tx-uppercase tx-mont tx-lg-15 tx-spacing-1 mg-b-2 text-bold-700 ">{{ str_replace('_',' ',$item) }}</label>
                                    <p class="tx-info mg-b-25">{{ $wire->$item }}</p>
                                @endif

                            @endforeach

                        </div><!-- card -->
                    </div>


                </div><!-- row -->

            </div>
        </div>
        @endsection
