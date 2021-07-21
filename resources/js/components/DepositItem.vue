<template>
    <div class="row">
        <div class="col-md-5 col-sm-12 text-center deposit-item-first" >
            <div class="text-center mr-auto mb-3">
                <img src="/img/2021/btc.png" />
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <input value="XXXXX XXXXX XXXXX XXXXXXX" class="form-control" />
                </div>
            </div>
            <span class="mt-2">Make a deposit to this Wallet Address</span>
        </div>
        <div class="col-md-7 col-sm-12">
            <div v-if="step === 1">
            <h6 class="mb-0 text-uppercase font-weight-bold">Enter Amount</h6>
            <p>Please Specify the amount you would like to deposit into your account through {{  coin  }}</p>
            <button type="button" v-for="i in amounts" :key="i" class="btn btn-secondary btn-md mr-1 mb-1" @click="setAmount(i)">$ {{ i }}</button>
            <div class="row mt-3 mb-3">
                <div class="col-md-4 col-12 mt-2">
                    <input class="form-control" v-model="amount"/>
                </div>
                <div class="col-md-8 col-12 mt-2">
                    <button @click="next()" class="btn btn-primary">Continue --></button>
                </div>
            </div>
            <div class="mt-2">
                <h6 class="mb-0 text-uppercase font-weight-bold">Send {{  coin  }} to Address</h6>
                <div>
                    <p>Send only {{  coin  }} to this deposit address.</p>
                    <div>
                        <p>
                                                      <span class="text-danger">
                                                          Sending coins or tokens other than {{  coin  }} to this address may result in the loss of your deposit;
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
            <div v-if="step === 2">
                <h6 class="mb-0 text-uppercase font-weight-bold">Confirm Transfer</h6>
                <p>Please confirm that you have transferred ${{ amount }} worth of {{ coin }} to the specified {{ coin }} wallet address</p>



                <div class="row">
                    <div class="col-8">
                        <button @click="pre()" class="btn btn-primary">Previous Page </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'DepositItem',
    props : ['coin'],
    data(){
        return {
            amount : 200,
            step: 1,
            amounts : [
                200,500,1000,1500,2000
            ],
        }
    },
    methods : {
        next(){
            this.step = 2;
        },
        pre(){
            this.step = 1
        },
        setAmount(amt){
            console.log('clikdedd')
            this.amount = amt;
        }
    },
    mounted() {
        // console.log('Component mounted.')
    }
}
</script>
