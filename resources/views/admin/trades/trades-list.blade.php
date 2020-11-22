@extends('admin.layouts.admin-app')

@section('style')
    <link href="{{ asset('lib/highlightjs/github.css')}}" rel="stylesheet">
    <link href="{{ asset('lib/datatables/jquery.dataTables.css')}}" rel="stylesheet">
    <link href="{{ asset('lib/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
    <div class="br-pageheader pd-y-15 pd-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Dashboard</a>
            <span class="breadcrumb-item active"> Trades Layouts</span>
        </nav>
    </div><!-- br-pageheader -->
    <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
        <h4 class="tx-gray-800 mg-b-5"> {{ $title }}</h4>
    </div>

    @if (Request()->has('deposit'))
        <div class="br-pagebody">
            <p>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Add New Trade
                </button>
            </p>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @include('notification')
            <div class="collapse" id="collapseExample">
                <div class="br-section-wrapper">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Add Trade</h6>

                    <form action="{{ route('admin.trades.store') }}" method="POST">
                        @csrf
                        <div class="form-layout form-layout-1">
                            <div class="row mg-b-25">

                                <input name="deposit_id" type="hidden" value="{{ request()->get('deposit') }}">
                                <input name="user_id" type="hidden" value="{{ $deposit->user_id }}">

                                <div class="col-md-4">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label"> Traded Asset: <span class="tx-danger">*</span></label>
                                        <select id="asset" name="currency_pair" required class="form-control">
                                            <option>BCH-BTC</option>
                                            <option>BCH-EUR</option>
                                            <option>BCH-GBP</option>
                                            <option>BTC-EOS</option>
                                            <option>BTC-EUR</option>
                                            <option>BTC-GBP</option>
                                            <option>BTC-USD</option>
                                            <option>BTC-USDC</option>
                                            <option>EOS-BTC</option>
                                            <option>EOS-EUR</option>
                                            <option>EOS-USD</option>
                                            <option>ETC-BTC</option>
                                            <option>ETC-EUR</option>
                                        </select>
                                    </div>
                                </div><!-- col-8 -->
                                <div class="col-md-4">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label text text-capitalize">Traded Amount : <span class="tx-danger">*</span></label>
                                        <input class="form-control" step="any" required type="number" name="traded_amount" placeholder="Traded Amount">
                                    </div>
                                </div><!-- col-8 -->
                                <div class="col-md-4">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label"> Trade Duration <span class="tx-danger">*</span></label>
                                        <select id="duration" required class="form-control" name="duration">
                                            <option value="60">1 min</option>
                                            <option value="180">3 min</option>
                                            <option value="300">5 min</option>
                                            <option value="900">15 mins</option>
                                            <option value="1800">30 mins</option>
                                            <option value="3600">1 hr</option>
                                            <option value="7200">2 hr</option>
                                            <option value="86400">1 day</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label text text-capitalize">Percent Profit / Loss (%): <span class="tx-danger">*</span></label>
                                        <input class="form-control" required type="number" name="profit" placeholder="Percent Profit / Loss (%)">
                                    </div>
                                </div><!-- col-8 -->
                                <div class="col-md-3">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label">Trade Action: <span class="tx-danger">*</span></label>
                                        <select id="trade_type" required class="form-control" name="trade_type">
                                            <option value="buy">Buy</option>
                                            <option value="sell">Sell</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label">Predicted Trade as: <span class="tx-danger">*</span></label>
                                        <select id="is_win" required class="form-control" name="is_win">
                                            <option value="1">Win</option>
                                            <option value="0">Loss</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label">Opening Price : <span class="tx-danger">*</span></label>
                                        <input class="form-control" required type="number" step="any" name="opening_price" placeholder="opening price">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group mg-b-10-force">
                                        <label class="form-control-label">Closing Price : </label>
                                        <input class="form-control" required type="number" step="any" name="closing_price" placeholder="closing price">
                                    </div>
                                </div>


                            </div><!-- row -->

                            <div class="form-layout-footer">
                                <button class="btn btn-primary" type="submit">Submit Form</button>
                            </div><!-- form-layout-footer -->
                        </div><!-- form-layout -->
                    </form>
                </div><!-- br-section-wrapper -->
            </div>
        </div>
    @endif

        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10"> {{ $title }} List</h6>

                <div class="table-wrapper">
                    <table id="datatable1" class="table table-bordered table-condensed display responsive nowrap">
                        <thead>
                        <tr>
{{--                            <th class="wd-5p">S.No</th>--}}
                            <th class="wd-10p">User</th>
                            <th class="wd-10p">Currency Pair</th>
                            <th class="wd-10p">Traded Amount</th>
                            <th class="wd-10p">Duration</th>
                            <th class="wd-10p">Percent Profit / Loss</th>
                            <th class="wd-10p">Predicted Trade as</th>
                            <th class="wd-10p">Opening Price</th>
                            <th class="wd-10p">Closing Price</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($trades as $trade)
                        <tr>
{{--                            <td>{{ $trade->id }}</td>--}}
                            <td class="text-capitalize"><a href="{{ route('admin.users.show',$trade->user->username) }}"> {{ $trade->user->name }}</a></td>
                            <td>{{ $trade->currency_pair }}</td>
                            <td>{{ $trade->traded_amount }}</td>
                            <td>{{ $trade->duration }}Sec</td>
                            <td>{{ $trade->profit }} %</td>
                            <td>{{ $trade->is_win ? 'Win' : 'Loss' }}</td>
                            <td>{{ $trade->opening_price }}</td>
                            <td>{{ $trade->closing_price }}</td>

                            <td class="text-center">
                                <form method="POST" action="{!! route('admin.trades.destroy', $trade->id) !!}" accept-charset="UTF-8">
                                    <input name="_method" value="DELETE" type="hidden">
                                    {{ csrf_field() }}

                                    <div class="btn-group justify-center" role="group">
                                        <button type="submit" class="btn btn-danger" title="Delete Job" onclick="return confirm(&quot;Click Ok to delete Record.&quot;)">
                                            <span class="fa fa-trash" aria-hidden="true"></span>
                                        </button>
                                    </div>

                                </form>

                            </td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div><!-- table-wrapper -->

    </div><!-- br-pagebody -->
</div><!-- br-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

        @section('js')
            <script src="{{ asset('lib/jquery-ui/jquery-ui.js') }}"></script>
            <script src="{{ asset('lib/jquery-switchbutton/jquery.switchButton.js') }}"></script>
            <script src="{{ asset('lib/peity/jquery.peity.js') }}"></script>
            <script src="{{ asset('lib/datatables/jquery.dataTables.js') }}"></script>
            <script src="{{ asset('lib/datatables-responsive/dataTables.responsive.js') }}"></script>
            <script src="{{ asset('lib/select2/js/select2.min.js') }}"></script>
            <script src="{{ asset('lib/highlightjs/highlight.pack.js') }}"></script>
            <script>
                $(function(){
                    'use strict';

                    $('#datatable1').DataTable({
                        responsive: true,
                        language: {
                            searchPlaceholder: 'Search...',
                            sSearch: '',
                            lengthMenu: '_MENU_ items/page',
                        }
                    });

                    $('#datatable2').DataTable({
                        bLengthChange: false,
                        searching: false,
                        responsive: true
                    });

                    // Select2
                    $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

                });
            </script>
       @endsection

@endsection
