<template>
    <div class="card">
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
                                    <h6 class="mb-0 text-uppercase font-weight-bold">ETH</h6>
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
                <deposit-item class="tab-pane fade active show" id="tab1">
                    <DepositItem></DepositItem>
                    <deposit-item</deposit-item>
                </div>
                <div class="tab-pane fade" id="tab2">
                    <div class="form">
                        <div class="form-group">
                            <label class=" ">Password</label>
                            <input type="password" class="form-control bg-transparent" placeholder="">
                            <small class="form-text">6-character minimum; case sensitive.</small>
                        </div>
                        <div class="form-group">
                            <label class=" ">Confirm Password</label>
                            <input type="password" class="form-control bg-transparent" placeholder="">
                            <small class="form-text">6-character minimum; case sensitive.</small>
                        </div>
                        <div class="d-flex">
                            <button type="button" class="btn btn-primary prevtab">Previous</button>
                            <button type="button" class="btn btn-primary nexttab ml-auto">Next</button>

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab3">
                    <div class="form p-5 text-center">
                        <h3>Thank you !</h3>
                        <p>Quisque nec turpis at urna dictum luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis dui. Aliquam mattis dictum aliquet.</p>
                        <button type="button" class="btn btn-primary prevtab">Previous</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'Deposit',
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
