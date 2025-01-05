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
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/IndustrialRobots/dist/css/246.61d7acde.css">
    <style>
        .billpage[data-v-7813868a]:after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
            width: 100vw;
            height: 51.333333vw;
            background: url({{asset('public')}}/IndustrialRobots/dist/img/1.c0ba8dc8.png) no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body class="">
<div id="app" data-v-app="">
    <div>
        <div class="billpage" data-v-7813868a="">
            <div class="van-nav-bar van-hairline--bottom transparent" data-v-7813868a="">
                <div class="van-nav-bar__content">
                    <div class="van-nav-bar__left van-haptics-feedback" onclick="window.location.href='{{route('mine')}}'"><i
                            class="van-badge__wrapper van-icon van-icon-arrow-left van-nav-bar__arrow"><!----><!---->
                            <!----></i><!----></div>
                    <div class="van-nav-bar__title van-ellipsis">My bill</div><!----></div>
            </div>
            <div class="van-tabs van-tabs--line tabs-box" data-v-7813868a="">
                <div class="van-tabs__wrap">
                    <div role="tablist"
                         class="van-tabs__nav van-tabs__nav--line van-tabs__nav--shrink van-tabs__nav--complete"
                         aria-orientation="horizontal"><!---->
                        <div id="van-tabs-10-0" role="tab" class="van-tab van-tab--line van-tab--shrink van-tab--active"
                             tabindex="0" aria-selected="true" aria-controls="van-tab-11"><span class="van-tab__text">All</span>
                        </div>
                        <div id="van-tabs-10-1" role="tab" class="van-tab van-tab--line van-tab--shrink" tabindex="-1"
                             aria-selected="false" aria-controls="van-tab-12"><span class="van-tab__text">Deposit</span>
                        </div>
                        <div id="van-tabs-10-2" role="tab" class="van-tab van-tab--line van-tab--shrink" tabindex="-1"
                             aria-selected="false" aria-controls="van-tab-13"><span
                                class="van-tab__text">Withdraw</span></div>
                        <div id="van-tabs-10-3" role="tab" class="van-tab van-tab--line van-tab--shrink" tabindex="-1"
                             aria-selected="false" aria-controls="van-tab-14"><span class="van-tab__text">Income</span>
                        </div>
                        <div class="van-tabs__line"
                             style="transform: translateX(26.5px) translateX(-50%); transition-duration: 0.3s;"></div>
                        <!----></div>
                </div><!---->
                <div class="van-tabs__content">
                    <div id="van-tab-11" role="tabpanel" class="van-tab__panel" tabindex="0"
                         aria-labelledby="van-tabs-10-0" data-v-7813868a="" style="">
                        <div role="feed" class="van-list" aria-busy="false" data-v-7813868a=""><!---->
                            <div class="listbox" data-v-7813868a="">
                                <div class="right" data-v-7813868a="">
                                    <div class="typeti flex" data-v-7813868a=""><p data-v-7813868a="">Lucky Draw
                                            Bonus</p><span data-v-7813868a="">Rs.15.00</span></div>
                                    <div class="timetype flex" data-v-7813868a=""><p data-v-7813868a="">30/11/2023
                                            13:09</p></div>
                                </div>
                            </div><!---->
                            <div class="van-list__finished-text"></div><!---->
                            <div class="van-list__placeholder"></div>
                        </div>
                    </div>
                    <div id="van-tab-12" role="tabpanel" class="van-tab__panel" tabindex="-1"
                         aria-labelledby="van-tabs-10-1" data-v-7813868a="" style="display: none;">
                        <div role="feed" class="van-list" aria-busy="false" data-v-7813868a="">
                            <div class="empty-wrap" data-v-14e02b3d="" data-v-7813868a="" style="margin-top: 150px;">
                                <img class="empty" src="{{asset('public')}}/IndustrialRobots/dist/img/empty.4594a9f6.png" alt=""
                                     data-v-14e02b3d="">
                                <p class="text" data-v-14e02b3d="">There is no record yet !</p></div><!---->
                            <div class="van-list__finished-text"></div><!---->
                            <div class="van-list__placeholder"></div>
                        </div>
                    </div>
                    <div id="van-tab-13" role="tabpanel" class="van-tab__panel" tabindex="-1"
                         aria-labelledby="van-tabs-10-2" data-v-7813868a="" style="display: none;">
                        <div role="feed" class="van-list" aria-busy="false" data-v-7813868a="">
                            <div class="empty-wrap" data-v-14e02b3d="" data-v-7813868a="" style="margin-top: 150px;">
                                <img class="empty" src="{{asset('public')}}/IndustrialRobots/dist/img/empty.4594a9f6.png" alt=""
                                     data-v-14e02b3d="">
                                <p class="text" data-v-14e02b3d="">There is no record yet !</p></div><!---->
                            <div class="van-list__finished-text"></div><!---->
                            <div class="van-list__placeholder"></div>
                        </div>
                    </div>
                    <div id="van-tab-14" role="tabpanel" class="van-tab__panel" tabindex="-1"
                         aria-labelledby="van-tabs-10-3" data-v-7813868a="" style="display: none;">
                        <div role="feed" class="van-list" aria-busy="false" data-v-7813868a="">
                            <div class="empty-wrap" data-v-14e02b3d="" data-v-7813868a="" style="margin-top: 80px;"><img
                                    class="empty" src="{{asset('public')}}/IndustrialRobots/dist/img/empty.4594a9f6.png" alt=""
                                    data-v-14e02b3d="">
                                <p class="text" data-v-14e02b3d="">There is no record yet !</p></div><!---->
                            <div class="van-list__finished-text"></div><!---->
                            <div class="van-list__placeholder"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!----></div>
</body>
</html>
