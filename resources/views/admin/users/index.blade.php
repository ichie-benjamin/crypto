@extends('admin.layouts.admin-app')

@section('style')
@include('admin.partials.dt-css')
@endsection

@section('content')
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Dashboard</a>
            <a class="breadcrumb-item" href="#">Users</a>
            <span class="breadcrumb-item active">{{ $title }}</span>
            </nav>
        </div><!-- br-pageheader -->

        <div class="br-pagebody">

            <div class="br-section-wrapper">

                @include('notification')

                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10" style="padding-bottom: 50px">{{ $title }} User List <a href="{{ route('admin.users.create') }}?r={{ $title }}"><button class="btn btn-success" style="float: right"> Add New</button></a></h6>

            <div class="table-wrapper">
                <table id="datatable1" class="table table-bordered display responsive nowrap">
                <thead>
                    <tr>
                    <th class="wd-5p">S/N</th>
                    <th class="wd-10p">Username</th>
                    <th class="wd-5p">Profile Img</th>
                    <th class="wd-10p">Email</th>
{{--                    <th class="wd-10p">Phone</th>--}}
                    <th class="wd-10p">Invested</th>
                    <th class="wd-5p">Trades</th>
                    <th class="wd-10p">Acct Balance</th>
                    <th class="wd-10p">Withdrawable</th>
                    <th class="wd-10p">Acct Bonus</th>
{{--                        <th class="wd-15p">Role</th>--}}
                        <th class="wd-10p">Action</th>

                    </tr>
                </thead>
                <tbody>

                    @php
                        $count = 1;
                    @endphp
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $count++ }}</td>
                            <td><a href="{{ route('admin.users.show', $user->username) }}">{{ $user->username }}</a> <br />
                                @if ($user->is_active)
                                    <span class="badge badge-success">Activated</span>
                                @else
                                    <span class="badge badge-danger">Not Activated</span>
                                @endif
                            </td>
                            <td><img src="{{ $user->avatar }}" height="50px" width="50px"></td>
                            <td>{{ $user->email }} <br />
                                @if ($user->email_verified_at)
                                    <span class="badge badge-success">Verified</span>
                                @else
                                    <span class="badge badge-danger">Not Verified</span>
                                @endif
                            </td>
{{--                            <td>{{ $user->phone }}</td>--}}
                            <td>{{ $user->invested() }}</td>
                            <td><a href="{{ route('admin.trades.index') }}?user={{$user->id}}" >{{ \App\Models\Trade::whereUserId($user->id)->count() }}</a>
                            </td>
                            <td>{{ $user->balance() }}</td>
                            <td>{{ $user->withdrawable }}</td>
                            <td>{{ $user->bonus() }}</td>
                            <td>
                                <a href="{{ route('admin.users.show', $user->username) }}" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="View User"><em class="fa fa-eye"></em></a>
                                <a href="{{ route('admin.user.toggle', $user->id) }}" class="btn {{ $user->is_active ? 'btn-danger' : 'btn-success' }}" data-toggle="tooltip" ><em class="fa {{ $user->is_active ? 'fa-times ' : ' fa-check' }} "></em></a>
                                <a href="{{ route('admin.users.destroy', $user) }}" onclick="destroyUser(event, {{ $user->id }})" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Delete"><em class="fa fa-trash"></em>
                                    <form id="delete-customer-form-{{ $user->id }}" action="{{ route('admin.users.destroy', $user) }}" method="POST" class="d-none">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </a>
                            </td>

                        </tr>
                    @endforeach

                </tbody>
                </table>
            </div><!-- table-wrapper -->
        </div>
</div>
@endsection

@section('js')
    <script>
        function destroyUser(e, id) {
            e.preventDefault();

            if (confirm('There is no reversal to this!\nAre you sure you want to remove this user entirely from the system? '))
                document.getElementById('delete-customer-form-'+id).submit()
            else
                return false;
        }
    </script>

    @include('admin.partials.dt-js')
@endsection
