<template>
    <div class="car">
        <div class="card-body">
            <div class="wizard-tab mb-4">
                <ul class="nav nav-tabs d-block d-sm-flex" style="border-bottom: 1px solid #000">
                    <li class="nav-item mr-auto mb-4">
                        <a class="nav-link active" data-toggle="tab" href="#tab1">
                            <div class="d-flex">
                                <div class="media-body align-self-center">
                                    <h6 class="mb-0 text-uppercase font-weight-bold">BTC</h6>
                                </div>
                            </div>

                        </a>
                    </li>
                    <li class="nav-item mr-auto text-center mb-4">
                        <a class="nav-link" data-toggle="tab" href="#tab2">
                            <div class="d-flex">
                                <div class="media-body align-self-center">
                                    <h6 class="mb-0 text-uppercase font-weight-bold">ETH</h6>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item mr-auto mb-4">
                        <a class="nav-link" data-toggle="tab" href="#tab3">
                            <div class="d-flex">
                                <div class="media-body align-self-center">
                                    <h6 class="mb-0 text-uppercase font-weight-bold">BNB</h6>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item mr-auto mb-4">
                        <a class="nav-link" data-toggle="tab" href="#tab4">
                            <div class="d-flex">
                                <div class="media-body align-self-center">
                                    <h6 class="mb-0 text-uppercase font-weight-bold">USDT</h6>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="nav-item mb-4">
                        <a class="nav-link p-0" data-toggle="tab" href="#tab5">
                            <div class="d-flex">
                                <div class="media-body align-self-center">
                                    <h6 class="mb-0 text-uppercase font-weight-bold">COV</h6>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="tab1">
                    <DepositItem coin="BTC"></DepositItem>
                </div>
                <div class="tab-pane fade" id="tab2">
                    <DepositItem coin="ETH"></DepositItem>
                </div>
                <div class="tab-pane fade" id="tab3">
                    <DepositItem coin="BNB"></DepositItem>
                </div>
                <div class="tab-pane fade" id="tab4">
                    <DepositItem coin="USDT"></DepositItem>
                </div>
                <div class="tab-pane fade" id="tab4">
                    <DepositItem coin="COV"></DepositItem>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import DepositItem from "./DepositItem";
export default {
    name: 'Deposit',
    components: {DepositItem},
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
