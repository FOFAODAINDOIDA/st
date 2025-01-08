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
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/IndustrialRobots/dist/css/506.d94d4718.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/IndustrialRobots/dist/css/958.03e0f1e5.css">
    <style>
        .bankpage[data-v-e0512320]:after {
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
        .bankpage .section-box .btnposit[data-v-e0512320] {

            background: #1989fa;
            color: #191919;
            font-weight: 600;
        }
        select {
            width: 100%;
            height: 36px;
            border: none;
        }
        select:focus-visible{
            outline: none;
        }
        .bankpage[data-v-e0512320]:after {
            display: none;
        }
        .bankpage[data-v-e0512320] {
            padding: 0 4vw 1.333333vw;
        }
    </style>
</head>
<body class="">
<div id="app" data-v-app="">
    <form action="{{route('setup.gateway')}}" method="post">
        @csrf
        <div>
            <div class="bankpage" data-v-e0512320="">
                <div class="van-nav-bar van-hairline--bottom transparent" data-v-e0512320="">
                    <div class="van-nav-bar__content">
                        <div class="van-nav-bar__left van-haptics-feedback" onclick="window.location.href='{{route('mine')}}'"><i
                                class="van-badge__wrapper van-icon van-icon-arrow-left van-nav-bar__arrow"><!----><!---->
                                <!----></i><!----></div>
                        <div class="van-nav-bar__title van-ellipsis">Bank Account</div><!----></div>
                </div>
                <section class="section-box" data-v-e0512320="">
                    <div class="bankunt" data-v-e0512320=""><img class="imgl"
                                                                 src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAAXNSR0IArs4c6QAAAZxJREFUWEftmD1LA0EQhp9JTBQLFRFBtLGws0yCRRC0NWCp/8FGO3+Cldr4H7QUYqsgKSRJaaWFjTYiohZiPkcuXj4uGEhyyd0G7rpbdmeee2dn2XsFwx8xnI8GoN6xRJhDIAUsAmMew5eBFyBNhSNZ49nKXwPULOsIl8CMx1Cd0n2gbEuCW9E8C1S5R5g1BO4PQ3knxKpojmPgoDYovKLsMUmGAhVPgccJ800S4Qxl3s59Yin4gLJiA6YkxpWnYG3JNM8WStrmebQULABReyAqMUo+A0ZQijZD0QLUOpDEm13tK2QrUwDYRykcorW+IFz3EW/wS5TNxrZzAA4+leuIjiZxHW0IAZyAyu4QcvQeUjj/t8TBMdOllh27OFAwULBLBdxOC/ZgoKBbBdyuD/bgyCmoT0zwRpJQmxlQpcwcGVnmp/WjPC+x5moX4Y0Oyt5IvHlBteb4AfgJTHUA/JI40/4qmGWHEPtUiTggQ5SocioJLnwF7LVp2kts+I/7CFgfxptHZttvtXPHZAOz3mFGW8C9HgNezjfe5f8FOmH8SbT3XjYAAAAASUVORK5CYII="
                                                                 alt="" data-v-e0512320="">
                        <p data-v-e0512320="">Bank account</p><img class="imgui"
                                                                   src="{{asset('public')}}/IndustrialRobots/dist/img/1.9fba072a.png" alt=""
                                                                   data-v-e0512320=""></div>
                    <p class="accounti" data-v-e0512320="">Bank account</p>
                    <div class="van-cell van-field input-box" data-v-e0512320=""><!----><!---->
                        <div class="van-cell__value van-field__value">
                            <div class="van-field__body"><input type="tel" inputmode="numeric" id="van-field-3-input"
                                                                class="van-field__control"
                                                                name="gateway_number"
                                                                placeholder="Please enter bank account number"><!---->
                                <!----><!----></div><!----><!----></div><!----><!----></div>
                    <p class="accounti" data-v-e0512320="">Card holder</p>
                    <div class="van-cell van-field input-box" data-v-e0512320="">
                        <div class="van-cell__value van-field__value">
                            <div class="van-field__body"><input type="text" id="van-field-4-input"
                                                                name="name"
                                                                class="van-field__control"
                                                                placeholder="Please enter cardholder name"><!----><!---->
                                <!---->
                            </div><!----><!---->
                        </div><!----><!---->
                    </div>
                    <p class="accounti" data-v-e0512320="">Bank code</p>
                    <div class="bank" data-v-e0512320="">
                        <select name="gateway_method" id="" onchange="manageCard(this)">
                            @foreach(\App\Models\PaymentMethod::where('status', 'active')->get() as $element)
                            <option value="{{$element->id}}">{{$element->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <p class="accounti" data-v-e0512320="">Login password</p>
                    <div class="van-cell van-field input-box" data-v-e0512320=""><!----><!---->
                        <div class="van-cell__value van-field__value">
                            <div class="van-field__body"><input type="password" id="van-field-5-input"
                                                                name="password"
                                                                class="van-field__control"
                                                                placeholder="Please enter login password"><!----><!---->
                                <!----></div><!----><!----></div><!----><!----></div>
                    <div class="tipsui" data-v-e0512320=""><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAAXNSR0IArs4c6QAABDlJREFUWEfVmX2IVFUUwH9nVslA19IEIyKhqCAqYd/M1irZB/0lUfRhREVCYaXt+kdQa4JYUFtBUJrbB4gIRZQSRcxfYVLQ2s68DVGCCgpDosLNVTfIxd135N6585qPN/vemxllev++c879vXPv+bjnCU08upUMq/EQbkfpAa4BLkVYYM0pk8AfwE8IYyhfkceXrQRpl5M0CnqQy5hmA8ojwOVpdIGjCB8whx2ynN+T6iYC1FEW08VLKI8DF0QYV4QTwCn3rhvlIiDK/hTCTmbYIr38HQcaC6gFHkR4G7ikwpgCBxC+IOAbMvwgHicrF1OfhQRcR4ZbUO4Cbq4BHkd5RnJ8PBtkQ0DdzxwWsA3lqdCwMIWym4A3pJef476+CniUq8nwLMJjaLgLxvPvMsmA3MZ0lL1IQB3hQuayB1hdobSPgPVpwWoX1RLoMHBHxbs8Z3hA+vi3Vr4O0HpuPp+FcMoMGTbTw+simK1t+VHjtzGeI+BlhC5nMM8/3FPryXpAn2GUp53SaZSHJcenLVNFRVaBexE+BObZ18I74rG+UrQK0AXER1bUeA7WJIXTAqsQrkLJS44/k36QGkj4xHlSUR6qDJwQ0KaSDD+G0SoMisdrSRbSAhsR3nSyf6EsTwXp8zzKq05/nIBryynoP0CfHWjo3n143Jn0zKnPQZQbKz7mCcmyM8nHGRl7Jn2+DANHGBaPDaVdNwKmQpzhF5uETSqZ4YY00apF9gL3hUDKrZLj66SAlsFEdxeHXAqaYi5XmopTAiwwhDDoDL4vWZ5MZbzAUpvMzRkM2CU53kqjX5bVIu8B61zADInHC+IK/xFXW9Xtf6ok3AxMlI7LkSYOjOOOkmeZaJEcMOoURiTLinYt2IwdLfIt0Od0e0V9BlGGnFs3iRdGU6x99VmJML9KcJpf05zf2kXqeLRoS9r9VlBZITlGYslK53YLwot1siZ/drFSevguiZ06wAJ9iPWiefaaLT4EXG/xhItru5JGi6jPLpS1Dd73S9Z2QKkf2wUpE+4cHjaAx2xyViYkx6KkFvV7ljDNABm6nfdNHlzljsqAeGxPaivCi8eNs4BxcwZNvTX57zfxWNa0UZ9+lG1tAfQ5gnKFycn/A8DyFgsT4iXf4ojoa6cHj6PlLW4ySM4VYFSQNJVmzhlgXZppIVFXQmqbgiQqUbel1LUNsK7UlaYELTcL7QCMbBZshfN5BWWT27JE7ZaOcRMB2xEWukRtLupLnI1j7iIPAadQ+qWXA3E5NrLdsoBNNKxVNTxuZWGPeKyZTWzWhtV5MVXLr0XuBnaD82DDos0kwqOS5fOGInEtvwVs4dIU58C495rk0mQhS3OYpq6dcRANvZf02lk2oJ18cbde7PTRh4Xs5OFRuNWdPH6rqrGdOsCsgkwyAlZOkHEj4IBu5DyNgKtAO3WIXtf7ncffEGcBV60t4f/CB9oAAAAASUVORK5CYII="
                            alt="" data-v-e0512320="">
                        <p data-v-e0512320="">Kind reminder</p></div>
                    <p class="welcome" data-v-e0512320=""> 1. After the bank card is bound, you can conveniently perform
                        operations such as cash withdrawals. </p>
                    <p class="welcome" data-v-e0512320=""> 2. If there are any changes to the bound bank card information,
                        please update it in time to avoid affecting your experience. </p>
                    <button class="btnposit" data-v-e0512320="" type="submit" style="color: #fff;">Add</button>
                </section><!----><!----></div>
        </div><!---->
    </form>
</div>
@include('alert-message')
<script>
    function manageCard(_this){
        if (_this.value == 'bank'){
            message('Coming soon....')
        }
    }
</script>
</body>
</html>
