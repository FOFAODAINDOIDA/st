<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
    <title>{{setting('site_name')}}</title>
    <link href="{{asset('public')}}/IndustrialRobots/dist/css/chunk-vendors.1b220e19.css" rel="stylesheet">
    <link href="{{asset('public')}}/IndustrialRobots/dist/css/app.40cacca1.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/IndustrialRobots/dist/css/800.6d4723c4.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/IndustrialRobots/dist/css/532.da379610.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/IndustrialRobots/dist/css/222.258fab4b.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/IndustrialRobots/dist/css/88.4d2ecb2d.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <style>
        .rechargepage[data-v-6dceafc6]:after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
            width: 100vw;
            height: 51.333333vw;
            background: url({{asset('public')}}/IndustrialRobots/dist/img/1.c0ba8dc8.png) no-repeat;
            background-size: cover;
            filter: hue-rotate(45deg);
        }
        .rechargepage .section-box .totalass[data-v-6dceafc6] {
            background: linear-gradient(180deg,#1989fa,rgba(255,231,0,0));
        }
        .rechargepage .section-box .paylist .chopay[data-v-6dceafc6] {
            background: #1989fa;
        }
        .rechargepage .section-box .paylist .methodi p[data-v-6dceafc6] {
            color: #fff;
        }
        .rechargepage .section-box .btnposit[data-v-6dceafc6] {
            background: #1989fa;
            color: #fff;
        }
        .active {
            background: #1989fa;
        }
        .rechargepage[data-v-6dceafc6]:after {
            display: none;
        }
        .rechargepage[data-v-6dceafc6] {
            padding: 0 4vw 1.333333vw;
        }
    </style>
</head>
<body class="">
<div id="app" data-v-app="">
    <div>
        <div class="rechargepage" data-v-6dceafc6="">
            <div class="van-nav-bar van-hairline--bottom transparent" data-v-6dceafc6="">
                <div class="van-nav-bar__content">
                    <div class="van-nav-bar__left van-haptics-feedback" onclick="window.location.href='{{route('dashboard')}}'"><i
                            class="van-badge__wrapper van-icon van-icon-arrow-left van-nav-bar__arrow"><!----><!---->
                            <!----></i><!----></div>
                    <div class="van-nav-bar__title van-ellipsis">Deposit</div>
                    <div class="van-nav-bar__right van-haptics-feedback"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAsCAYAAAATmipGAAAAAXNSR0IArs4c6QAAAZ5JREFUWEftmb9OwzAQxr9LaRFMaa+ZeAjYykPwBkiMTPyZYGFmgQnYGJF4A96BssFDMKWmmaigtIccGhEhgWtI2hg5QxT5TufvfhfbiU34vBrMvC0INomwCmApZ5vl40AED4TxtVLqEsCr7pz0jZlXhIIbAtZmqcjUlwD3JOMNpdSjFtpotaO7qonMktBin3pxh5h5BxRcTAwvEByORsOrJEkSU8Zl2MMwDGu1+hYIJwAW0z5kvEstbneJqPPRgH2l4vMyBNjGZI72QDhLZQm6xO3oORs4o7dhc14kvyaSkl2o9yftAy1UMifVi9PBVZUrr80LLaIqnmgRFPMxPNG5Em0yHxPogIjqRQoRkaFATvtKHX0X16r0+QWhSKHZRK568XIhQp0hWgLFqUNalX7qqCU4eqFFQ/VEPVH9F/pvPpx/O+FPs0SaXhWrwfTHJXTw0xJZqFBniJqyLtNuVfoyhZhie6EmQrZ2T9SWmMnfEzURsrV7orbETP7OEnVjI7fF0S0R1tMyVHpr3JXDBmeOb3TFXTkQy2aJSh8xvgNeM1tY9oxEwwAAAABJRU5ErkJggg=="
                            alt="" data-v-6dceafc6=""></div>
                </div>
            </div>
            <section class="section-box" data-v-6dceafc6="">
                <div class="totalass" data-v-6dceafc6=""><p class="aomouti" data-v-6dceafc6="" style="color: #fff;">{{price(auth()->user()->balance)}}</p><span
                        data-v-6dceafc6="">Total assets</span></div>
                <p class="payment" data-v-6dceafc6="">Payment method</p>
                <div class="paylist" data-v-6dceafc6="">
                    <div class="methodi chopay" data-v-6dceafc6=""><p data-v-6dceafc6="">Channel I</p><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAsCAYAAAAn4+taAAAAAXNSR0IArs4c6QAAA4RJREFUaEPVmVmoTlEUx3/XPBOJQl0UUqZkKErJgwxFrgdFQmaZHsQlT0ShpAwPhkKmUOZShiJPPN1ShjfdhEvigWvu/7W/27nn7nO+fYbPd856uvc7e5+zfnvttc7a/1NF/q0VsL8q5xztgbNATZ5BegLXgMkKRl5BqoE7wLDijsojyFjgJtDXmxZ5A5kBXAS6+HM7TyDLgSNAG1uBygvILqA2LKezDtIWOAEsKvWayDJIN+AKMK0URJbLbz/gNjDSBSKrICOAW8AAV4gsgkwFrgLdo0BkDWShSex2USGyBKLSqhIbu/jEnhhn1SxzWgOHgZVJ71dJkM7ABWBWUohKbq0+wA1gXBoQlQIZYlrwQWlBVAJkkjkM9UoT4n+DzAPOAB0TQHwHOlSy+90AHABUpeJaHTDbVLit/lJd7qpVUDiATXG9N/PuAvOBL+b/ZcBRQN1xwcoJoi2grVSTEOI4sBr45buPyvb1IkO5QJopHDFB/gDbgb2W+bq/erIp5lpjOUAGmha8SeGIAaKkXgxcssxV2VaLP9RzrSFtEKvCERHkAzAHeGKZN9Fsp96+a3VpggQqHBFAXgIzgdeWOcq10wHl+3JaIKEKhyPIIxOJT5bxW4A9gKqgzbalAWJTOP4CDwAdlFzsHLAUaPQNlvSj7nhFiZtMSAISpHDIGUVIpVdl81CQFgUIeDew0/zt9berSfbpJSDeANVxQYIUDm0LtSIPPQ9X7qhdl2Ne+wGsAk5ZHO1vZNFRDuHUlquNAxKmcKwxb1z/80cbxzRX9tm8KO9ZHB1jWvzi2DAWRX8wUB8VpJTC8dOs8smAVdYZpIepTM8tY1SxFL0W2m4AjSTUtboWBcRV4dC+V7h3BOz7TsA7i2Ny6GBIPvmnNJjPCh+jgMRROM4DSyyVyO+QSuo+YLNDPhSHaLEWGGW+8JtLRJIoHI/Nu6GwahZTdPTpbG4ECA1V56t8bLIwkLQUjleAKpf/ba1zu7rX8REhpEKqhWnWDQeBpKpwANrPWnVFSDbcyKL6hBbFBKFzyTf/JBtI6gqHeag6WuXMe6Oyq3q5mnLiGLDeci6x5khZFA6Ptzpj/Pae7BxIFM113sS2zfFGpGwKh4OztiF62ekjj9qXoGLRItnTUDhi+ttimnonVTI1i/WuN1VENhqBIInC4fo87zit+FfgLfACeAbcB54C2oKR7B9aP5m07CEYcAAAAABJRU5ErkJggg=="
                            alt="" data-v-6dceafc6=""></div>
                </div>
                <p class="payment lastiui" data-v-6dceafc6="">Select amount</p>
                <div class="selce-amount" data-v-6dceafc6="">
                    <div class="amount" data-v-6dceafc6="" onclick="getAmount(this, 700)"><p data-v-6dceafc6="">700</p><!----></div>
                    <div class="amount" data-v-6dceafc6="" onclick="getAmount(this, 942)"><p data-v-6dceafc6="">942</p><!----></div>
                    <div class="amount" data-v-6dceafc6="" onclick="getAmount(this, 1842)"><p data-v-6dceafc6="">1842</p><!----></div>
                    <div class="amount" data-v-6dceafc6="" onclick="getAmount(this, 2842)"><p data-v-6dceafc6="">2842</p><!----></div>
                    <div class="amount" data-v-6dceafc6="" onclick="getAmount(this, 4242)"><p data-v-6dceafc6="">4242</p><!----></div>
                    <div class="amount" data-v-6dceafc6="" onclick="getAmount(this, 6742)"><p data-v-6dceafc6="">6742</p><!----></div>
                    <div class="amount" data-v-6dceafc6="" onclick="getAmount(this, 9842)"><p data-v-6dceafc6="">9842</p><!----></div>
                    <div class="amount" data-v-6dceafc6="" onclick="getAmount(this, 14342)"><p data-v-6dceafc6="">14342</p><!----></div>
                    <div class="amount" data-v-6dceafc6="" onclick="getAmount(this, 24500)"><p data-v-6dceafc6="">24500</p><!----></div>
                </div>
                <div class="van-cell van-field input-box" data-v-6dceafc6=""><!----><!---->
                    <div class="van-cell__value van-field__value">
                        <div class="van-field__body"><input type="number" inputmode="numeric" id="van-field-1-input"
                                                            name="amount"
                                                            class="van-field__control"
                                                            placeholder="Enter the deposit amount you need"><!---->
                            <!----><!----></div><!----><!----></div><!----><!----></div>
                <button class="btnposit" data-v-6dceafc6="" onclick="goMethodSelecrot()">Deposit Now</button>
                <div class="tipsui" data-v-6dceafc6=""><img
                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAAXNSR0IArs4c6QAABDlJREFUWEfVmX2IVFUUwH9nVslA19IEIyKhqCAqYd/M1irZB/0lUfRhREVCYaXt+kdQa4JYUFtBUJrbB4gIRZQSRcxfYVLQ2s68DVGCCgpDosLNVTfIxd135N6585qPN/vemxllev++c879vXPv+bjnCU08upUMq/EQbkfpAa4BLkVYYM0pk8AfwE8IYyhfkceXrQRpl5M0CnqQy5hmA8ojwOVpdIGjCB8whx2ynN+T6iYC1FEW08VLKI8DF0QYV4QTwCn3rhvlIiDK/hTCTmbYIr38HQcaC6gFHkR4G7ikwpgCBxC+IOAbMvwgHicrF1OfhQRcR4ZbUO4Cbq4BHkd5RnJ8PBtkQ0DdzxwWsA3lqdCwMIWym4A3pJef476+CniUq8nwLMJjaLgLxvPvMsmA3MZ0lL1IQB3hQuayB1hdobSPgPVpwWoX1RLoMHBHxbs8Z3hA+vi3Vr4O0HpuPp+FcMoMGTbTw+simK1t+VHjtzGeI+BlhC5nMM8/3FPryXpAn2GUp53SaZSHJcenLVNFRVaBexE+BObZ18I74rG+UrQK0AXER1bUeA7WJIXTAqsQrkLJS44/k36QGkj4xHlSUR6qDJwQ0KaSDD+G0SoMisdrSRbSAhsR3nSyf6EsTwXp8zzKq05/nIBryynoP0CfHWjo3n143Jn0zKnPQZQbKz7mCcmyM8nHGRl7Jn2+DANHGBaPDaVdNwKmQpzhF5uETSqZ4YY00apF9gL3hUDKrZLj66SAlsFEdxeHXAqaYi5XmopTAiwwhDDoDL4vWZ5MZbzAUpvMzRkM2CU53kqjX5bVIu8B61zADInHC+IK/xFXW9Xtf6ok3AxMlI7LkSYOjOOOkmeZaJEcMOoURiTLinYt2IwdLfIt0Od0e0V9BlGGnFs3iRdGU6x99VmJML9KcJpf05zf2kXqeLRoS9r9VlBZITlGYslK53YLwot1siZ/drFSevguiZ06wAJ9iPWiefaaLT4EXG/xhItru5JGi6jPLpS1Dd73S9Z2QKkf2wUpE+4cHjaAx2xyViYkx6KkFvV7ljDNABm6nfdNHlzljsqAeGxPaivCi8eNs4BxcwZNvTX57zfxWNa0UZ9+lG1tAfQ5gnKFycn/A8DyFgsT4iXf4ojoa6cHj6PlLW4ySM4VYFSQNJVmzhlgXZppIVFXQmqbgiQqUbel1LUNsK7UlaYELTcL7QCMbBZshfN5BWWT27JE7ZaOcRMB2xEWukRtLupLnI1j7iIPAadQ+qWXA3E5NrLdsoBNNKxVNTxuZWGPeKyZTWzWhtV5MVXLr0XuBnaD82DDos0kwqOS5fOGInEtvwVs4dIU58C495rk0mQhS3OYpq6dcRANvZf02lk2oJ18cbde7PTRh4Xs5OFRuNWdPH6rqrGdOsCsgkwyAlZOkHEj4IBu5DyNgKtAO3WIXtf7ncffEGcBV60t4f/CB9oAAAAASUVORK5CYII="
                        alt="" data-v-6dceafc6="">
                    <p data-v-6dceafc6="">Deposit tips</p></div>
                <p class="welcome" data-v-6dceafc6="">
                    Deposit tips
</br></br>
  1. The minimum recharge value available is BDT.542 and users follow the below steps to conveniently recharge.
</br></br>
  2. If your app account balance is not updated to reflect the recharge within 30 minutes of a successful transaction, we request you to contact our customer service team immediately.  While contacting us, provide your account number along with confirmation of successful recharge for efficient assistance.
</br></br>
  3. For a seamless transaction experience, we advise against saving recipient account details from previous transfers.  It is essential to ensure that the recharge receipt matches the payment amount to avoid any possible payment errors.
</br></br>
  4. To increase the security of your transactions, it is recommended to recharge exclusively within the application.  Additionally, exercise caution and avoid sending money to strangers to protect your financial transactions and personal information.
                </p></section>
        </div>
    </div><!----></div>

<style>
    .opop {
        width: 100%;
        height: 100%;
        background: #00000017;
        position: fixed;
        z-index: 22;
        left: 0;
        top: 0;
    }
    .opop_container {
        width: 100%;
        height: 160px;
        background: #ffff;
        bottom: 0;
        position: absolute;
        padding: 15px;
    }
    .opop_container h4 {
        font-size: 15px;
        text-align: center;
        margin-top: 7px;
        color: #3d3d3d;
    }
    .closer {
        font-size: 18px;
        position: absolute;
        top: 13px;
    }
</style>

<div class="opop" style="display: none;">
    <div class="opop_container">
        <h4>পেমেন্ট পদ্ধতি নির্বাচন করুন</h4>
        <div style="display: flex; justify-content: space-between;margin-top: 20px;" onclick="goMethodSelecrot()">
            <div style="font-size: 15px;">DCExchange</div>
            <div style="font-size: 15px;"><i class="fa fa-chevron-right"></i></div>
        </div>
        <div class="closer" onclick="document.querySelector('.opop').style.display = 'none'"><i class="fa fa-close"></i></div>
    </div>
</div>
@include('alert-message')
<script>
    function openOperation(){
        let getAmount = document.querySelector('input[name="amount"]').value;
        if (getAmount > 0){
            document.querySelector('.opop').style.display = 'block';
        }else {
            message('Please select amount')
        }
    }

    function getAmount(_this, amount){
        document.querySelector('input[name="amount"]').value = amount;
        let elements = document.querySelectorAll('.amount');
        for (let i=0; i < elements.length; i++){
            if (elements[i].classList.contains('active')){
                elements[i].classList.remove('active');
            }
        }

        _this.classList.add('active')
    }

    function goMethodSelecrot(){
        let getAmount = document.querySelector('input[name="amount"]').value;
        if (getAmount > 0){
            window.location.href = '{{url('payment-method')}}'+'/'+getAmount
        }else {
            message('Please select amount')
        }
    }
</script>
</body>
</html>
