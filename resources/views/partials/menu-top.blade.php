<div class="row">
    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6">
        <div class="card text-center pt-2">
            <div class="card-body">
                <p class="mb-1">Balance</p>
                <h4>$ {{ Auth()->user()->balance }} </h4>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6">
        <div class="card text-center pt-2">
            <div class="card-body">
                <p class="mb-1">Bonus Bal</p>
                <h4>$ {{ Auth()->user()->bonus }}</h4>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6">
        <div class="card text-center pt-2">
            <div class="card-body">
                <p class="mb-1">Account Plan</p>
                <h4>STARTER</h4>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6">
        <div class="card text-center pt-2">
            <div class="card-body">
                <p class="mb-1">Account Status</p>
                @if (auth()->user()->is_active)
                    <h4 class="badge badge-success">Verified</h4>
                @else
                    <h4 class="badge badge-danger">Unverified</h4>
                @endif
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6">
        <div class="card text-center pt-2">
            <div class="card-body">
                <p class="mb-1">Total Withdraw</p>
                <h4>{{ Auth()->user()->withdrawals() }}</h4>
            </div>
        </div>
    </div>
    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-6">
        <div class="card text-center pt-2">
            <div class="card-body">
                <p class="mb-1">Connections</p>
                <h6 style="color: red" class="tx-danger">Account not connected</h6>
            </div>
        </div>
    </div>
</div>