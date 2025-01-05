<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{setting('site_name')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <script defer="defer" src="{{asset('public')}}/IndustrialRobots/dist/js/app.cf8d09ef.js"></script>
    <link href="{{asset('public')}}/IndustrialRobots/dist/css/chunk-vendors.1b220e19.css" rel="stylesheet">
    <link href="{{asset('public')}}/IndustrialRobots/dist/css/app.40cacca1.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/IndustrialRobots/dist/css/251.8f9f8f9c.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
    <style>
        .homepage[data-v-81dae98a]:after {
            background: url({{asset('public')}}/IndustrialRobots/dist/img/1.c0ba8dc8.png) no-repeat;
            background-size: contain;
            filter: hue-rotate(45deg);
        }
        [data-v-81dae98a] .singbonus {
            filter: invert(1);
        }
        [data-v-81dae98a] .my-swipe .van-swipe__track .van-swipe-item .imgsui img {
            border-radius: 1.866667vw;
            height: 180px;
        }
        marquee {
            color: #1989fa;
        }
        .homepage .section-box .needbox .luckyuis[data-v-81dae98a] {
            filter: invert(1);
        }
        .homepage .section-box .needbox .luckyuis .drawui p[data-v-81dae98a] {
            color: unset !important;
        }
        .homepage .section-box .needbox .luckyuis img[data-v-81dae98a] {
            filter: hue-rotate(45deg);
        }
        .homepage .section-box .prolist .listi .vip-img[data-v-81dae98a] {
            filter: invert(1);
        }
        .homepage .section-box .prolist .listi .priceuis[data-v-81dae98a] {
            color: #1989fa;
        }
        .homepage .section-box .prolist .listi[data-v-81dae98a] {
            border: none;
            box-shadow: 0px 0px 6px 1px #1989fa38;
        }
        [data-v-81dae98a] .barbox img {
            filter: invert(1);
        }
    </style>

    <style>
        .fund_modal {
            position: fixed;
            background: #ff00001c;
            top: 0;
            left: 0;
            z-index: 22;
            width: 100%;
            height: 100%;
        }
        .fund_container {
            width: 90%;
            background: #fff;
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
            border-radius: 5px;
            padding: 10px;
        }
        .fund_close{
            text-align: left !important;
        }
        .fund_close i {
            font-size: 20px;
        }
        .fund_body p {
            font-size: 15px;
            margin-top: 16px;
            color: #00000061;
            text-align: center;
            padding: 0 31px;
        }
        .fund_confirm {
            background: #1989fa;
            font-size: 15px;
            padding: 8px 28px;
            border-radius: 4px;
            margin-top: 30px;
            color: #fff;
        }
        .homepage[data-v-81dae98a]:after {
            display: none;
        }
        .homepage[data-v-81dae98a] {
            padding: 0 0 20vw;
        }
        .homepage .section-box .prolist .listi .nowbtn[data-v-81dae98a] {
    background: none;
    border-radius: 2.266667vw;
    font-size: 4vw;
    font-weight: 500;
    color: #191919;
    width: 100%;
    height: 10.666667vw;
    margin-top: 2vw;
    border: none;
    background: red;
    color: #fff;
}
    </style>
</head>
<body class="">
@include('alert-message')
<div id="app" data-v-app="">
    <div>
        <div class="homepage" data-v-81dae98a="">
            <div class="van-nav-bar van-hairline--bottom transparent" data-v-81dae98a="">
                <div class="van-nav-bar__content"><!---->
                    <div class="van-nav-bar__title van-ellipsis">Funds</div>
                    <div class="van-nav-bar__right van-haptics-feedback"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAYAAAAehFoBAAAAAXNSR0IArs4c6QAAAzBJREFUWEft2UuoVXUUx/GPvexBUQZBgdBj4EB7QEUUBaXRg0YR9HRQmY+cF0WD0IlCBU2KhKygwh5ENghqUApBQUVYOohASSuo6EFFRWkPfvDfsD16dD/OufceuGt2zn/91/rutf977bXWnmPCZM6E8RoEPg7LcDPOw0kcoDPua/wPv+IzvIKN+LNyWge+AK/h7HETtbS/CzdhW/ZVwOfjPZxYjOWK3sf3yBVPpYTpNFyG3PHIb7gCn2bxWOzAOWUxt+A+/DyVlAfxdQoeKUc0yzuxKMD34ska7D3TDDro/uka9OoAb8GV+B3zZ0BkB4ET6a9wArYG+Cfkz7dx3QyLboXzFq5NMAP8b3n4nsNdMxT4WdyZBBDgKgvkz7tnKPAzVTAnBXgDVmDvpABfimSLzV2Ak68vHsErex/exY9tjmFb4LwJvy41Rhs/w3Q/KG+0xrbaAicX7sapjT0cWnErrmpjqy1wbJ+BFEp9S9McidQrqRMaSxfgxsbHoTgLPI6o1m3ORnhMET4CV1cF/CTUEg9gHb6YlCPRq/hZjcUN83BK1814sedR6Qyc5vDbhrAV4984Hv/0gO4MnMP/BpY0hE6EXy3Fdw9enYH7OO2zdxa4T/Sa7N0vwntxVHmSlzbZPQ06L+AO7Ese3lPmER+XTmIaeA7r8iNclOYhwMmRt5d2/8Jq6HZYE1OnkLnfJ0iG2hTgVPzprSLby+9WfdYY2edl2oNzi48lVdewCbeWP7/Ew3izbYM4QvCA3oA1OKvYzaz4lgo4vVrGQZcPOE0bM0yy9jkeQx6KJpJ2fS0uwdwhG8J09MBaWqlrMv+r92UxsB6pFY5p4r2m8zJW4pch+wKQu5aq68gWtpPBnirj37+y72CN5Om4sfbJYJj9zJUzPKyGzpmU34YPBzYswPO1DJRyNhPTH4YYrn8yeB3f1PX6dr6L8BIWFqMpdB4qxySOV+HRMiqNyndl1pvno5P0BY7TRPhxLK/dsaShVGeZEFUSyHzwCXRnGQVw5TxfnjK0O3mA5g/cjyc6U9Y2jhI4Zs8srcz1JdG/gwdLNhkFb+/pzUgg2hgZdYTb+O6k+z9FLbF2wg65xgAAAABJRU5ErkJggg=="
                            alt="" data-v-81dae98a=""></div>
                </div>
            </div>
            <section class="section-box" data-v-81dae98a="">
                <div class="needbox" data-v-81dae98a="">
                    <div class="choosei" data-v-81dae98a=""><p data-v-81dae98a="">Fund List</p><span
                            data-v-81dae98a="">Choose the fund investment you need</span></div>
                </div>
                <div class="prolist" data-v-81dae98a="">
                    @foreach(\App\Models\Fund::where('status', 'active')->get() as $element)
                        <?php
                            $myFund = \App\Models\FundInvest::where('user_id', auth()->id())->where('status', 'active')->where('fund_id', $element->id)->first();
                        ?>
                    <div class="listi" data-v-81dae98a=""><img
                            src="{{asset($element->photo)}}"
                            class="imgpro" alt="" data-v-81dae98a="">
                        <div class="double" data-v-81dae98a=""><p class="ellipsis-2" data-v-81dae98a="">{{$element->name}}</p>
                        </div>
                        <p class="priceuis" data-v-81dae98a="">{{price($element->minimum_invest)}}</p>
                        <div class="infobox flex" data-v-81dae98a=""><span data-v-81dae98a="">Cycle:</span>
                            <p data-v-81dae98a="">{{$element->validity}} days</p></div>
                        <div class="infobox flex" data-v-81dae98a=""><span data-v-81dae98a="">Total Return:</span>
                            <p data-v-81dae98a="">{{price($element->commission)}}</p></div>
                        @if($myFund)
                        <button type="button"
                                style="background: #1989fa;color: #fff;"
                                class="van-button van-button--default van-button--normal nowbtn"
                                data-v-81dae98a="">
                            <div class="van-button__content">
                                <span class="van-button__text">My Fund</span>
                            </div>
                        </button>
                        @else
                            <button type="button"
                                    onclick="openFundModal('fund{{$element->id}}')"
                                    class="van-button van-button--default van-button--normal nowbtn"
                                    data-v-81dae98a="">
                                <div class="van-button__content">
                                    <span class="van-button__text">Invest</span>
                                </div>
                            </button>
                        @endif
                    </div>

                        <div class="fund_modal" id="fund{{$element->id}}" style="display: none">
                            <div class="fund_container">
                                <div class="fund_close" onclick="clseFund('fund{{$element->id}}')">
                                    <i class="fa fa-close"></i>
                                </div>
                                <div class="fund_body" style="text-align: center;">
                                    <p>Thanks for choosing me. dear do you invest confirm</p>
                                    <button class="fund_confirm" onclick="window.location.href='{{route('fund.invest.confirm', $element->id)}}'">Confirm Now</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
            @include('app.layout.manu')
        </div>
    </div>
</div>


<script>
    function openFundModal(id){
        document.getElementById(id).style.display = 'block'
    }
    function clseFund(id){
        document.getElementById(id).style.display = 'none'
    }
</script>
</body>
</html>
