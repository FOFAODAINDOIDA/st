<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{setting('site_name')}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
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
        .badge_e {
            font-size: 13px;
            background: #ff0074;
            padding: 5px 0;
            display: block;
            width: 100%;
            color: #fff;
            border-radius: 4px;
        }
        .middle p {
            font-size: 12px;
            text-align: left;
            margin-left: 9px;
            color: #0000007a;
            padding: 5px 0;
        }
        .bankpage .section-box[data-v-e0512320] {
            padding: 10px;
            background: #fff;
            border-radius: 1.333333vw;
        }

        .bankpage[data-v-e0512320]:after {
            display: none;
        }
        .bankpage[data-v-e0512320] {
            padding-top: 0;
        }
    </style>
</head>
<body class="">
@include('alert-message')
<div id="app" data-v-app="">
    <div>
        <div class="bankpage" data-v-e0512320="">
            <div class="van-nav-bar van-hairline--bottom transparent" data-v-e0512320="">
                <div class="van-nav-bar__content">
                    <div class="van-nav-bar__left van-haptics-feedback"
                         onclick="window.location.href='{{route('dashboard')}}'">
                        <i class="van-badge__wrapper van-icon van-icon-arrow-left van-nav-bar__arrow"></i>
                    </div>
                    <div class="van-nav-bar__title van-ellipsis">Task List</div>
                </div>
            </div>
            <?php $task = \App\Models\Task::first();?>
            @foreach($submitted_tasks as $element)
                <section class="section-box" data-v-e0512320="" style="margin-bottom: 10px;">
                    <div style="overflow: hidden; margin-top: 15px;">
                        <div style="width: 22%;float: left;" class="left">
                            <img style="width: 50px;border-radius: 5px;" src="{{asset('public')}}/goro.jpg" alt="">
                            <div class="badge_e">Members</div>
                        </div>
                        <div style="width: 56%;float: left;"  class="middle" >
                            <p>Demand Side: {{$task->task_code}}</p>
                            <p>Recuse Code: <span style="color: #ff0074;font-weight: bold;">{{$task->remaining_code}}</span></p>
                            <p>Request: </p>
                        </div>
                        <div style="width: 22%;float: left;">
                            <h5 style="color: #400dff;text-align: right;font-size: 14px;">Paid</h5>
                            <h5 style="color: #ff0074;text-align: right;font-size: 14px;padding: 8px 0;">{{price($task->amount)}}</h5>
                            <div class="badge_e" style="background: #ff007470;">Submitted</div>
                        </div>
                    </div>
                </section>
            @endforeach

            @for($i=0; $i<45;$i++)
                <section class="section-box" data-v-e0512320="" style="margin-bottom: 10px;">
                    <div style="overflow: hidden; margin-top: 15px;">
                        <div style="width: 22%;float: left;" class="left">
                            <img style="width: 50px;border-radius: 5px;" src="{{asset('public')}}/goro.jpg" alt="">
                            <div class="badge_e">Members</div>
                        </div>
                        <div style="width: 56%;float: left;"  class="middle" >
                            <p>Demand Side: {{$task->task_code}}</p>
                            <p>Recuse Code: <span style="color: #ff0074;font-weight: bold;">{{$task->remaining_code}}</span></p>
                            <p>Request: </p>
                        </div>
                        <div style="width: 22%;float: left;">
                            <h5 style="color: #400dff;text-align: right;font-size: 14px;">UnPaid</h5>
                            <h5 style="color: #ff0074;text-align: right;font-size: 14px;padding: 8px 0;">{{price($task->amount)}}</h5>
                            <div class="badge_e" onclick="window.location.href='{{route('task.submit', $task->id)}}'">Received</div>
                        </div>
                    </div>
                </section>
            @endfor
        </div>
    </div>
</div>
</body>
</html>
