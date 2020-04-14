@extends('layouts.guest')
@section('css')
<style>
    .options {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    }

    .options:hover {
        color: #fff;
    }

    .options li {
        list-style-type: square;
        text-align: left;
    }

    .w-features {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        grid-gap: 20px;
    }

    .w-features>.feature {
        height: 300px;
    }

    .box {
        height: 100%;
    }

    .heading-section,
    .heading-lead {
        margin-top: 20px;
        margin-bottom: 20px;
    }
</style>
@endsection
@section('content')
<div class="section section-pad">
    <div class="container">
        <div class="section-head">
            <div class="row text-center">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <h2 class="heading-section cap">Our Wallet Features</h2>
                    <p>The power of institutional cryptocurrency fund management technology, right in your pocket.
                        CrystalCapital is the first mobile web-app in the world that allows users to easily buy into
                        a managed cryptocurrency fund, without holding user assets</p>
                </div>
            </div>
        </div>
        <div class="gaps size-3x"></div>
        <div class="w-features">
            <div class="feature">
                <div class="box box-small-dot box-alt-bg round">
                    <h4>Edge &amp; SDK</h4>
                    <p>CrystalCapital uses cutting edge wallet technology powered by Airbitz/Edge - a paradigm
                        shifting data security company. Edge, founded in 2014, is the most established non-custodial
                        wallet system in the industry with an impeccable track record of securing cryptocurrency
                        assets.</p>
                </div>
                <div class="gaps size-1-5x"></div>
            </div>
            <div class="feature">
                <div class="box box-small-dot box-alt-bg round">
                    <h4>One-Tap Investment</h4>
                    <p>Simply choose a fund and a method to make your deposit in just a few taps. CrystalCapital
                        supports connecting with your bank account, Coinbase or depositing from an external wallet.
                    </p>
                </div>
                <div class="gaps size-1-5x"></div>
            </div>
            <div class="feature">
                <div class="box box-small-dot box-alt-bg round">
                    <h4>Custody Your Assets</h4>
                    <p>Retain full control of your own assets at all times without trusting a third party. No frozen
                        accounts, no central trove of assets for hackers, and full transparency.</p>
                </div>
                <div class="gaps size-1-5x"></div>
            </div>
            <div class="feature">
                <div class="box box-small-dot box-alt-bg round">
                    <h4>On-Chain Transactions</h4>
                    <p>Every transaction is done on-chain, meaning you can audit every single trade and transaction
                        on the respective open, public, incorruptible blockchains.</p>
                </div>
            </div>
            <div class="feature">
                <div class="box box-small-dot box-alt-bg round">
                    <h4>Low Minimums</h4>
                    <p>Invest for as little as a few hundred dollars and add additional funds at any time and
                        liquidate your portfolio at any time with just 1 tap.</p>
                </div>
            </div>
            <div class="feature">
                <div class="box box-small-dot box-alt-bg round">
                    <h4>Exchange Rates</h4>
                    <p>We scour 8+ exchanges to find you the best rate on every trade (buy, sell and rebalance).
                        Save an average of 1% per trade by using the most competitive exchange.</p>
                </div>
            </div>
        </div>
        <div class="section-head">
            <div class="row text-center" style="margin-top: 20px;">
                <div class="col-md-12">
                    <h2 class="heading-section cap">Custom Portfolio</h2>
                    <p>Want to build and rebalance your own portfolios? Ember Fund provides a powerful mobile
                        platform to do just that. Leverage our smart order routing system to search over 8 exchanges
                        for the best rates and rebalance your entire portfolio with just a tap of a button.</p>
                </div>
            </div>
        </div>
        <div class="gaps size-2x"></div>
        <div class="gaps size-2x hidden-xs hidden-sm"></div>
        <div class="row text-center mb-x7">
            <div class="col-md-6 col-sm-6">
                <div class="box box-small-dot box-alt-bg round">
                    <span class="font-icon"><span class="pe pe-7s-lock"></span></span>
                    <h3>Our Experts and Quants</h3>
                    <p>We’ve curated and partnered with the top cryptocurrency veterans to construct our funds.</p>
                    <ul class="options">
                        <li>Coin Support</li>
                        <li>Bitcoin (BTC)</li>
                        <li>Dent (DENT)</li>
                        <li>Ethereum (ETH)</li>
                        <li>Ripple (XRP)</li>
                        <li>Dash (DASH)</li>
                        <li>Bitcoin Cash (BCH)</li>
                        <li>Litecoin (LTC)</li>
                        <li>TrueUSD (TUSD)</li>
                        <li>Enjin Coin (ENJ)</li>
                        <li>Basic Attention Token (BAT)</li>
                    </ul>
                </div>
                <div class="gaps size-1-5x"></div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="box box-small-dot box-alt-bg round">
                    <span class="font-icon"><span class="pe pe-7s-repeat"></span></span>
                    <h4>One-Tap Investment</h4>
                    <p>Simply choose a fund and a method to make your deposit in just a few taps. CrystalCapital
                        supports connecting with your bank account, Coinbase or depositing from an external wallet.
                    </p>
                </div>
                <div class="gaps size-1-5x"></div>
            </div>
        </div>
    </div>
</div>
@endsection
