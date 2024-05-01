@extends('backend.layouts.master')

@section('content')

    <div class="content-body">
        <div class="container">
            <div class="row">
                @include('partials.menu')

                <div class="col-xl-12" style="margin-top: 10px">
                    <div class="card">
{{--                        <div class="card-header">--}}
{{--                            <h4 class="card-title">Upgraded account holders benefit from the best trade deals. </h4>--}}
{{--                        </div>--}}
                        <div class="card-body">
                            <div class="important-info">
                                <ul>
                                    <li>

{{--                                        <h4>Security of Funds</h4>--}}
                                        There is often a minimum deposit requirement for account upgrades, starting from $10,000 to $1,000,000
                                    </li>
                                    <li>
{{--                                        <h4>Bank Fees</h4>--}}
                                        <p>Premium Account Holder gains access to specialized
                                            benefits and innovative trading conditions with Crypto Assets</p>
                                    </li>
                                    <li>
{{--                                        <h4>Third Party Payments</h4>--}}
                                        <p>Access tighter fixed spreads and a full suite of real-time technical analysis tools.</p>

                                    </li>


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


            @foreach($packages as $item)
                    <div class="col-sm-12">
                        <div class="acc-block clearfix">


                            <div class="acc-price-block">
                                <div class="acc-type-wrap">
                                    <h2><span class="masha_index masha_index2" rel="2"></span>{{ $item->name }}<span><span class="masha_index masha_index3" rel="3"></span>account</span></h2>
                                    <img src="/images/act_type.png">
                                </div>
                                <div class="acc-btn-wrap">
                                    <span><span class="masha_index masha_index5" rel="5"></span>{{ $item->price }}</span>

                                    <a href="{{ route('deposit.purchase', $item->id) }}" class="btn btn-success btn-lg " rel="nofollow">
                                        <img src="/images/user.png" />
                                        Open
                                    </a>


                                </div>
                            </div>

                            <ul class="acc-list">
                                <li><i class="fa fa-check"></i><span class="masha_index masha_index7" rel="7"></span> Full access to all features</li>
                                <li><i class="fa fa-check"></i><span class="masha_index masha_index8" rel="8"></span> More than {{ $item->minimum_purchase / 5 }} assets</li>
                                <li><i class="fa fa-check"></i><span class="masha_index masha_index9" rel="9"></span> Up to {{ $item->percent_profit }} % bonus</li>
                                <li><i class="fa fa-check"></i><span class="masha_index masha_index10" rel="10"></span> Education courses available</li>
                                <li><i class="fa fa-check"></i><span class="masha_index masha_index11" rel="11"></span> Account manager</li>
                            </ul>
                            <ul class="acc-list">
                                <li><i class="fa fa-check"></i><span class="masha_index masha_index12" rel="12"></span> Economic calendar</li>
                                <li><i class="fa fa-check"></i><span class="masha_index masha_index13" rel="13"></span> Withdrawal- Your first withdrawal is free</li>
                            </ul>
                            <ul class="acc-list">
                                <li><i class="fa fa-check"></i><span class="masha_index masha_index41" rel="41"></span> Economic calendar</li>
                                <li><i class="fa fa-check"></i><span class="masha_index masha_index42" rel="42"></span> Daily analytics</li>
                                <li><i class="fa fa-check"></i><span class="masha_index masha_index43" rel="43"></span> Market reviews</li>
                                <li><i class="fa fa-check"></i><span class="masha_index masha_index44" rel="44"></span> Fundamental and technical analysis</li>
{{--                                <li><i class="fa fa-check"></i><span class="masha_index masha_index45" rel="45"></span> Withdrawal- One free withdrawal per month</li>--}}
                            </ul>
                        </div>
                    </div>
                @endforeach


                <div class="col-xl-12" style="margin-top: 10px">
                    <div class="card">
                        <div class="card-header">
                            <div>
                                <h4 class="card-title">Benefits of a Premium Trading Account : </h4>
                                <p>

                                    A Premium Trading Account offers a suite of advanced features and benefits designed to cater to the sophisticated needs of our customers.

                                </p>
                            </div>

                        </div>
                        <div class="card-body">
                            <div class="important-info">
                                <ul>

                                    <li>
                                        <strong>Fixed Low Spreads:</strong> <br>
                                        Enjoy the stability of fixed spreads as low as 0.9 pip, safeguarding you against the unpredictability of market-adjusted spreads that might inflate costs during volatile trading periods.
                                    </li>
                                    <li>
                                        <strong>
                                            Guaranteed Stop Loss and Take Profit: </strong><br/>
                                        Secure your trades with guaranteed stop loss and take profit options, ensuring that your risk management strategies are firmly in place without additional costs.
                                    </li>
                                    <li>
                                        <strong>
                                            Customizable Trading Experience: </strong> <br/>
                                        Tailor your trading strategy with access to a diverse range of instruments and CFDs, allowing for a trading experience that perfectly suits your preferences and goals.
                                    </li>
                                    <li>
                                        <strong>
                                            Generous Upgrade Bonuses: </strong> <br/>
                                        Benefit from substantial upgrade bonuses, which can range from $10,000 to $200,000, varying with the level of upgrade selected.
                                    </li>
                                    <li>
                                        <strong>
                                            Risk-Free Trading Opportunities:</strong><br/>
                                            Experience the unique advantage of risk-free trading, which allows you to execute trades without the immediate risk to your invested capital. Whether your predictions are accurate or not, your initial funds are protected.
                                    </li>
                                    <li>
                                        <strong>
                                            Dedicated Support:</strong><br/>
                                            Receive the personalized attention of an additional Personal Account Manager and access to trade experts, which ensures that you have expert guidance tailored to your upgraded account level.
                                    </li>
                                    <li>
                                        <strong>
                                            Increased Trading Limit:</strong><br/>
                                            Gain the ability to trade with an extended limit, allowing for a trading volume that can exceed $200 million, providing you with the capacity to engage in high-value transactions.
                                    </li>
                                    <li>
                                        <strong>
                                            Enhanced Leverage Options: </strong><br/>
                                            Take control with higher leverage options, giving you the power to open larger positions with a relatively small amount of capital.
                                    </li>
                                    <li>
                                        <strong>
                                            Exclusive Market Insights:</strong><br/>
                                        Get ahead with exclusive market insights and advanced analytical tools that can help you make informed trading decisions.
                                    </li>
                                    <li>
                                        <strong>
                                            Invitation to VIP Events:</strong><br/>
                                            Be part of an elite circle with invitations to VIP events and seminars that can provide networking opportunities and insights from industry leaders.
                                    </li>
                                    <li>
                                        <strong>
                                            Zero Transaction Fees: </strong><br/>
                                            Transact with zero fees withdrawals, allowing you to manage your funds efficiently without incurring additional costs.
                                    </li>

                                    <li>
                                        <strong>
                                            Access to Premium Educational Resources:</strong><br/>
                                            Enhance your trading knowledge with a wealth of premium educational materials, including webinars, in-depth courses, and personalized training sessions.
                                    </li>

                                    <li class="mt-2">
                                        <strong>
                                    By opting for a Premium Trading Account, you not only receive a higher level of service but also gain access to tools and benefits that can significantly enhance your trading performance and overall experience.
                                        </strong>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12" style="margin-top: 5px">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">How do I upgrade my Crypto Assets Account?</h4>
                        </div>
                        <div class="card-body">
                            <div class="important-info">
                                <ul>
                                    <li>
                                        You're required to select an upgrade plan that is suitable for your investment size </li>
                                    <li>
                                        Deposit the amount corresponding with your chosen upgrade plan.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
{{--                <div class="col-xl-12" style="margin-top: 5px">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-header">--}}
{{--                            <h4 class="card-title">Important Information</h4>--}}
{{--                        </div>--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="important-info">--}}
{{--                                <ul>--}}
{{--                                    <li>--}}
{{--                                        <h4>Payment process</h4>--}}
{{--                                        For faster processing we recommend that all account holders deposit funds via Bitcoin cryptocurrency option from inside their Secure Client Area. From your Secure Client Area you will be able to fund your account in real time using cryptocurrency option (Bitcoin) which is the fastest funding option--}}
{{--                                    </li>--}}
{{--                                    <li>--}}

{{--                                        <h4>Security of Funds</h4>--}}
{{--                                        When funding your trading account client money is held in Segregated Client Trust Accounts, your funds are kept in AA rated banks. Electronic payments are processed using SSL (Secure Socket Layer) technology and are encrypted to ensure security. All payment information is confidential and used only for the purpose of funding your trading account with Crypto Asset Trade.--}}
{{--                                    </li>--}}
{{--                                    <li>--}}

{{--                                        <h4>Bank Fees</h4>--}}
{{--                                        <p>Crypto Asset Trade does not charge any additional fees for deposits. You should however be aware that you--}}
{{--                                            may incur fees on payments to and from some international banking institutions crypto exchanger such as--}}
{{--                                            coinbase.com, crypto.com. Crypto Asset Trade accepts no responsibility for any such bank or crypto--}}
{{--                                            exchanger fees.</p>--}}


{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <h4>Third Party Payments</h4>--}}
{{--                                        <p>Crypto Asset Trade does not accept payments from third parties.--}}
{{--                                        Please ensure that all deposits into your trading account come from a bank account in your name.--}}
{{--                                        Payments from Joint Bank Accounts / Credit Cards are accepted if the trading account holder is one--}}
{{--                                            of the parties on the Bank Account / Credit Card.</p>--}}

{{--                                    </li>--}}


{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

            </div>

        </div>
    </div>

@endsection
