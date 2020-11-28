

@extends('backend.layouts.master')

@section('content')

    <div class="content-body">
        <div class="container">
            <div class="row">
                @include('partials.menu')


                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Withdrawals</h4>
                        </div>
                        <div class="card-body">

                            <div class="transaction-table">
                                @if (count($withdrawals) > 0)
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0 table-responsive-sm">
                                        <tbody>
                                        @foreach($withdrawals as $item)
                                        <tr>
                                            @if ($item->approved)
                                                <td><span class="buy-thumb"><i class="mdi mdi-arrow-up"></i></span>
                                                </td>
                                            @else
                                                <td><span class="sold-thumb"><i class="mdi mdi-arrow-down"></i></span>
                                                </td>
                                            @endif


                                            <td>
                                                <span class="badge {{ $item->approved ? 'badge-success' : 'badge-danger' }} p-2">{{ $item->approved ? 'Approved' : 'Pending' }}</span>
                                            </td>
                                            <td>
                                                <i class="cc BTC"></i> {{ $item->method }}
                                            </td>

                                            <td class="{{ $item->status ? 'text-danger' : 'text-success' }}">{{ $item->amount }} USD</td>
                                                <td class="">
                                                    @if(!$item->approved)
                                                        <a class="badge badge-primary p-2" href="{{ route('backend.withdrawal.processing',$item->id)  }}">Continue Transaction</a>
                                                    @else
                                                        <a href="#" class="badge badge-success p-2">Completed</a>
                                                    @endif
                                                </td>
                                            <td>{{ $item->created_at }}</td>
                                        </tr>

                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                @endif

                                @if (count($withdrawals) < 1)
                                    <div class="text-center">
                                        <h3 class="text-center">No recorded withdrawals Yet</h3>

                                    </div>

                                @endif
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
