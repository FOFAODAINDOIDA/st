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
            filter: hue-rotate(45deg);
        }
        .billpage .listbox[data-v-7813868a] {
            box-shadow: 0px 2px 5px #00000040;
            border: none;
        }
        .billpage[data-v-7813868a]:after {
            display: none;
        }
        .billpage[data-v-7813868a] {
            padding: 0 0 20vw;
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
                    <div class="van-nav-bar__title van-ellipsis">My Withdraw</div><!----></div>
            </div>
            <div class="van-tabs van-tabs--line tabs-box" data-v-7813868a="">
                <div class="van-tabs__content">
                    @foreach(\App\Models\Withdrawal::where('user_id', auth()->id())->orderByDesc('id')->get() as $element)
                    <div id="van-tab-11" role="tabpanel" class="van-tab__panel" tabindex="0"
                         aria-labelledby="van-tabs-10-0" data-v-7813868a="" style="">
                        <div role="feed" class="van-list" aria-busy="false" data-v-7813868a=""><!---->
                            <div class="listbox" data-v-7813868a="">
                                <div class="right" data-v-7813868a="">
                                    <div class="typeti flex" data-v-7813868a="">
                                        <p data-v-7813868a="">Withdraw</p>
                                        <span data-v-7813868a="">{{price($element->amount)}}</span>
                                    </div>
                                    <div class="timetype flex" data-v-7813868a="">
                                        <p data-v-7813868a="">{{$element->created_at}}</p>
                                        <p data-v-7813868a="">{{$element->status}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="van-list__finished-text"></div>
                            <div class="van-list__placeholder"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
