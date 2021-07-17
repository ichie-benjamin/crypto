<template>
    <div class="row">
        <div class="col-5 text-center deposit-item-first" >
            <div class="text-center mr-auto mb-3">
                <img src="img/2021/btc.png" />
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <input value="XXXXX XXXXX XXXXX XXXXXXX" class="form-control" />
                </div>
            </div>
            <span class="mt-2">Make a deposit to this Wallet Address</span>
        </div>
        <div class="col-7">
            <h6 class="mb-0 text-uppercase font-weight-bold">Enter Amount</h6>
            <p>Please Specify the amount you would like to deposit into your account through Bitcoin</p>
            <button class="btn btn-secondary btn-md">$200</button>
            <button class="btn btn-secondary btn-md">$500</button>
            <button class="btn btn-secondary btn-md">$1000</button>
            <button class="btn btn-secondary btn-md">$2000</button>
            <div class="row mt-3 mb-3">
                <div class="col-4">
                    <input class="form-control"  value="200"/>
                </div>
                <div class="col-8">
                    <button class="btn btn-primary">Continue --></button>
                </div>
            </div>
            <div class="mt-2">
                <h6 class="mb-0 text-uppercase font-weight-bold">Send BTC to Address</h6>
                <div>
                    <p>Send only BTC to this deposit address.</p>
                    <div>
                        <p>
                                                      <span class="text-danger">
                                                          Sending coins or tokens other than BTC to this address may result in the loss of your deposit;
                                                      </span>
                        </p>
                        <p>
                            Coins will be deposited after 6-10 (It depends on the cryptocurrency) network confirmations;
                            All incoming deposits will be credited to the "Wallet" balance.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
export default {
    name: 'DepositItem',
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
