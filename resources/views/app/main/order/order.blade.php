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
        .homepage[data-v-81dae98a]:after {
            display: none;
        }
        .homepage[data-v-81dae98a] {
            padding: 0 0 20vw;
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
                    <div class="van-nav-bar__title van-ellipsis">My Orders</div>
                    <div class="van-nav-bar__right van-haptics-feedback">
                    </div>
                </div>
            </div>

            <?php
                $myPackage = \App\Models\Package::whereIn('id', my_vips())->get();
                $totalTask =  \App\Models\Package::whereIn('id', my_vips())->sum('task');
            ?>

            <section class="section-box" data-v-81dae98a="">
                <div class="choosei" data-v-81dae98a="" style="display: flex;justify-content: space-between;">
                    <p data-v-81dae98a="" style="font-size: 20px;">Order List</p>
                    <p data-v-81dae98a="" style="font-size: 20px;">Total Task: {{$totalTask}}</p>
                </div>
                <div class="prolist" data-v-81dae98a="">
                    @foreach($myPackage as $element)
                        <?php
                        $myPackage = \App\Models\Purchase::where('user_id', auth()->id())->where('package_id', $element->id)->where('status', 'active')->first();
                        $task = \App\Models\Task::first();
                        ?>
                            <div class="listi" data-v-81dae98a="" style="width: 100%;"><img
                                    src="{{asset($element->photo)}}"
                                    class="imgpro" alt="" data-v-81dae98a="">
                                <div class="double" data-v-81dae98a=""><p class="ellipsis-2" data-v-81dae98a="">{{$element->name}}</p>
                                </div>
                                <p class="priceuis" data-v-81dae98a="">{{price($element->price)}}</p>
                                <div class="infobox flex" data-v-81dae98a=""><span data-v-81dae98a="">Cycle:</span>
                                    <p data-v-81dae98a="">{{$element->validity}} days</p></div>
                                <div class="infobox flex" data-v-81dae98a=""><span data-v-81dae98a="">Task Limit:</span>
                                    <p data-v-81dae98a="">{{$element->task}}</p></div>
                                <div class="infobox flex" data-v-81dae98a=""><span data-v-81dae98a="">Daily income:</span>
                                    <p data-v-81dae98a="">{{price($task->amount * $element->task)}}</p></div>
                                <div class="infobox flex" data-v-81dae98a=""><span data-v-81dae98a="">Total income:</span>
                                    <p data-v-81dae98a="">{{price(($task->amount * $element->task) * $element->validity)}}</p></div>
                            @if($myPackage)
                                <button type="button"
                                        style="background: #1989fa;color: #fff;"
                                        class="van-button van-button--default van-button--normal nowbtn"
                                        data-v-81dae98a="">
                                    <div class="van-button__content"><!----><span class="van-button__text">Opened service</span>
                                        <!----></div>
                                </button>
                            @else
                                <button type="button" onclick="openModal('shvcdgvcg{{$element->id}}', 'buy{{$element->id}}')"
                                        class="van-button van-button--default van-button--normal nowbtn"
                                        data-v-81dae98a="">
                                    <div class="van-button__content"><!----><span class="van-button__text"> Not open</span>
                                        <!----></div>
                                </button>
                            @endif
                        </div>

                        <div class="openBuyModal shvcdgvcg{{$element->id}}" style="display: none;width: 100%;">
                            <div role="dialog" tabindex="0" class="van-popup van-popup--bottom buybox buy{{$element->id}}"
                                 style="z-index: 2008;display: none">
                                <div class="listi" data-v-81dae98a="" style="width: 100%;">
                                    <div class="topi" data-v-81dae98a=""><img class="spanimg"
                                                                              src="{{asset($element->photo)}}"
                                                                              alt="" data-v-81dae98a="">
                                        <div class="right" data-v-81dae98a="">
                                            <div class="asteroid" data-v-81dae98a=""><p data-v-81dae98a="">{{$element->name}}</p></div>
                                            <div class="incomei" data-v-81dae98a="">
                                                <div class="leftcome" data-v-81dae98a=""><span data-v-81dae98a="">Price:</span>
                                                    <p data-v-81dae98a="">{{price($element->price)}}</p></div>
                                            </div>
                                            <p class="limtiui" data-v-81dae98a=""> Purchase quantity limit: <span
                                                    data-v-81dae98a="">0</span><strong data-v-81dae98a="">/1</strong></p></div>
                                    </div>
                                    <p class="line" data-v-81dae98a=""></p>
                                    <p class="looking" data-v-81dae98a="">{{$element->title}}</p>
                                    <div class="daysi flex" data-v-81dae98a=""><span data-v-81dae98a="">Cycle:</span>
                                        <p data-v-81dae98a="">{{$element->validity}} Days</p></div>
                                    <div class="daysi flex" data-v-81dae98a=""><span data-v-81dae98a="">Daily income:</span>
                                        <p data-v-81dae98a="">{{price($element->commission_with_avg_amount / $element->validity)}}</p></div>
                                    <div class="daysi flex" data-v-81dae98a=""><span data-v-81dae98a="">Total income:</span>
                                        <p data-v-81dae98a=""> {{price($element->commission_with_avg_amount)}}</p></div>
                                    <div class="accounti flex" data-v-81dae98a="">
                                        <div class="lefti" data-v-81dae98a=""><p data-v-81dae98a="">{{price($element->price)}}</p><span
                                                data-v-81dae98a="">Account assets</span></div>
                                        <button class="btnsit" data-v-81dae98a="" onclick="window.location.href='{{route('recharge')}}'"> Deposit</button>
                                    </div>
                                    <button class="invseti limitbtn" onclick="window.location.href='{{route('purchase.confirmation', $element->id)}}'" data-v-81dae98a=""> Not open</button>
                                    <p class="canceli" data-v-81dae98a="" style="background: red;" onclick="cancelBuyModal('shvcdgvcg{{$element->id}}', 'buy{{$element->id}}')">Cancel</p></div><!---->
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
            @include('app.layout.manu')
        </div>
    </div>
</div>
</body>
</html>
