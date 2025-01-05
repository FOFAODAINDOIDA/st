<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="{{asset('public')}}/IndustrialRobots/dist/favicon.ico">
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
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/IndustrialRobots/dist/css/266.c3765aec.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/IndustrialRobots/dist/css/848.5057c000.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/IndustrialRobots/dist/css/127.f85e73b5.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/IndustrialRobots/dist/css/891.dedc9d23.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/IndustrialRobots/dist/css/251.8f9f8f9c.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/IndustrialRobots/dist/css/990.27ce916f.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/IndustrialRobots/dist/css/348.77458ec3.css">
    <style>
        .rotatebox[data-v-dd46357c] {
            min-height: 100vh;
            padding: 42.666667vw 0 6.666667vw;
            background: url({{asset('public')}}/IndustrialRobots/dist/img/ic_bg.e20472c4.png) no-repeat top/100% auto, #ff4709;
        }

        .rotatebox .drawbox[data-v-dd46357c] {
            width: 85.333333vw;
            height: 84.8vw;
            background: url({{asset('public')}}/IndustrialRobots/dist/img/3.79186fc0.png) no-repeat;
            background-size: cover;
            margin: 3.6vw auto 0;
            position: relative;
        }

        .rotatebox .todrawi[data-v-dd46357c] {
            width: 86.666667vw;
            height: 23.2vw;
            background: url({{asset('public')}}/IndustrialRobots/dist/img/7.bb229cc1.png) no-repeat;
            background-size: cover;
            margin: 4vw auto 0;
            padding: 5.866667vw 4vw 0;
        }

        .rotatebox .userimg[data-v-dd46357c] {
            width: 100%;
            height: 9.333333vw;
            background: url({{asset('public')}}/IndustrialRobots/dist/img/6.f0d0a5eb.png) no-repeat;
            background-size: cover;
        }

        .rotatebox .ruleui[data-v-dd46357c] {
            width: 60.266667vw;
            height: 11.2vw;
            background: url({{asset('public')}}/IndustrialRobots/dist/img/4.a8b5fb47.png) no-repeat;
            background-size: cover;
            margin: 2.933333vw auto 0;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px 0;
            border: 1px solid #0000002b;
            text-align: center;
            border-radius: 50px;
            font-size: 12px;
        }

        .submitCode {
            font-size: 16px;
            padding: 8px 40px;
            border-radius: 7px;
            background: #ff4709;
            color: #fff;
        }
    </style>
    <style>
        .winner {
            width: 100%;
            height: 100%;
            position: fixed;
            background: #0b0f1336;
            top: 0;
            left: 0;
        }
        .winner_container {
            width: 76%;
            background: linear-gradient(#fff, #ff9900);
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font-size: 15px;
            padding: 29px 10px;
            border-radius: 20px;
        }
        .congratulation {
            text-align: center;
            color: #ff4b13;
            font-size: 20px;
            font-weight: 600;
        }
        .congratulation_pera {
            text-align: center;
            margin: 15px 0;
        }
        .discreate {
            width: 100px;
            height: 100px;
            background: url('{{asset('public/coin.png')}}');
            background-repeat: no-repeat;
            background-size: cover;
            margin: auto;
        }
        h1.amount_ {
            text-align: center;
            font-size: 77px;
            font-style: italic;
            color: #975500;
            margin-left: -17px;
        }
        .receivedable_amount {
            text-align: center;
            font-size: 38px;
            color: red;
        }
        button.recBtn {
            padding: 10px 67px;
            border-radius: 5px;
            background: linear-gradient(30deg, gold, red);
            color: #fff;
        }
    </style>
</head>
<body class="">

<div id="app" data-v-app="">
    <div>
        <div class="rotatebox" data-v-dd46357c="">
            <i class="van-badge__wrapper van-icon van-icon-arrow-left lefticon"
               onclick="window.location.href='{{route('dashboard')}}'" data-v-dd46357c=""></i>
            <div class="drawbox" data-v-dd46357c="">
                <div class="drawAmountSize" data-v-dd46357c="">
                    <div class="listcuct item1" data-v-dd46357c="">
                        <div data-v-dd46357c=""><img
                                src="{{asset('public')}}/coin (2).png"
                                alt="" data-v-dd46357c="">
                            <p class="ellipsis-1" data-v-dd46357c="">{{price(5)}}</p></div>
                    </div>
                </div>
                <div class="drawAmountSize" data-v-dd46357c="">
                    <div class="listcuct item2" data-v-dd46357c="">
                        <div data-v-dd46357c=""><img
                                src="{{asset('public')}}/coin (2).png"
                                data-v-dd46357c="">
                            <p data-v-dd46357c="">{{price(18)}}</p></div>
                    </div>
                </div>
                <div class="drawAmountSize" data-v-dd46357c="">
                    <div class="listcuct item3" data-v-dd46357c="">
                        <div data-v-dd46357c=""><img
                                src="{{asset('public')}}/coin (2).png"
                                alt="" data-v-dd46357c="">
                            <p class="ellipsis-1" data-v-dd46357c="">{{price(36)}}</p></div>
                    </div>
                </div>
                <div class="drawAmountSize" data-v-dd46357c="">
                    <div class="listcuct item4" data-v-dd46357c="">
                        <div data-v-dd46357c=""><img
                                src="{{asset('public')}}/coin (2).png"
                                data-v-dd46357c="">
                            <p data-v-dd46357c="">{{price(100)}}</p></div>
                    </div>
                </div>
                <div class="drawAmountSize" data-v-dd46357c="">
                    <div class="listcuct item5" data-v-dd46357c="">
                        <div data-v-dd46357c=""><img
                                src="{{asset('public')}}/coin (2).png"
                                data-v-dd46357c="">
                            <p data-v-dd46357c="">{{price(150)}}</p></div>
                    </div>
                </div>
                <div class="drawAmountSize" data-v-dd46357c="">
                    <div class="listcuct item6" data-v-dd46357c="">
                        <div data-v-dd46357c=""><img
                                src="{{asset('public')}}/coin (2).png"
                                alt="" data-v-dd46357c="">
                            <p class="ellipsis-1" data-v-dd46357c="">{{price(250)}}</p></div>
                    </div>
                </div>
                <div class="drawAmountSize" data-v-dd46357c="">
                    <div class="listcuct item7" data-v-dd46357c="">
                        <div data-v-dd46357c=""><img
                                src="{{asset('public')}}/coin (2).png"
                                data-v-dd46357c="">
                            <p data-v-dd46357c="">{{price(400)}}</p></div>
                    </div>
                    <div class="drawuis" data-v-dd46357c="" id="drawBtn"><p data-v-dd46357c="">Draw</p></div>
                </div>
                <div class="drawAmountSize" data-v-dd46357c="">
                    <div class="listcuct item8" data-v-dd46357c="">
                        <div data-v-dd46357c=""><img
                                src="{{asset('public')}}/coin (2).png"
                                data-v-dd46357c="">
                            <p data-v-dd46357c="">{{price(500)}}</p></div>
                    </div>
                </div>
            </div>
            <div class="todrawi" data-v-dd46357c="">
                <p class="chancei" data-v-dd46357c="">
                    <label for="">Receive code from {{setting('site_name')}}</label>
                    <input type="text" placeholder="Enter Secret Code" name="draw">
                </p>
            </div>
            <div>
                <button class="submitCode" onclick="submitDrawCode()">Submit Code</button>
            </div>
            <div class="ruleui" data-v-dd46357c=""><p data-v-dd46357c="">Rule Of Activity</p></div>
            <div class="currently" data-v-dd46357c=""><p class="texti" data-v-dd46357c="">
                Lucky Draw is a daily benefit for users.  We prepare lots of rewards for you, you can play multiple times a day, you can get lucky draw every time you recharge.  The more recharges, the more lucky draws. Good luck!
            </p></div>
        </div>
    </div>
</div>

<div class="winner" style="display: none;">
    <div class="winner_container">
        <h3 class="congratulation">Congratulations!</h3>
        <p class="congratulation_pera">Get cash rewords and receive them immediately in you account</p>

        <div class="discreate">
            <h1 class="amount_" style="">{{$code ? $code->amount : 0}}</h1>
        </div>
        <h3 class="receivedable_amount">+{{price($code ? $code->amount : 0)}}</h3>

        <div style="text-align: center;">
            <button class="recBtn" onclick="getAmount()">OK</button>
        </div>
    </div>
</div>
@include('alert-message')

<script language="JavaScript"  src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
<meta name="csrf" content="{{csrf_token()}}">
<script>
    let code = '{{$code ? $code->code : 0}}';
    function submitDrawCode() {
        let draw = document.querySelector('input[name="draw"]').value;
        let drawBtn = document.getElementById('drawBtn');

        if (draw == code) {
            drawBtn.style.filter = 'invert(1)';
            drawBtn.setAttribute('onclick', 'startDraw()')
        }else {
            message('Code Invalid.')
        }
    }

    let count = 0;
    let winner = '{{$code ? $code->winner : 0}}';
    let amount = '{{$code ? $code->amount : 0}}';

    function counterDraw(){
        let elements = document.querySelectorAll('.drawAmountSize');

        let countDown = setInterval(function (){

            for (let i=0;i<elements.length;i++){
                elements[i].style.filter = 'none';
            }

            elements[count].style.filter = 'drop-shadow(2px 4px 6px black)';

            count = count+1;

            if (count > 7){
                clearInterval(countDown);
                for (let i=0;i<elements.length;i++){
                    elements[i].style.filter = 'none';
                }
                elements[winner].style.filter = 'drop-shadow(2px 4px 6px black)';
                document.querySelector('.winner').style.display = 'block';
            }
        }, 200)
    }

    function startDraw() {
        counterDraw()
    }

    function getAmount(){
        document.querySelector('.winner').style.display = 'none';

        let bonus_code = document.querySelector('input[name="draw"]').value;

        var URL = '{{route('user.submit-bonus-confirm')}}'
        fetch(URL, {
            method: 'post',
            credentials: "same-origin",
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "X-Requested-With": "XMLHttpRequest",
                "X-CSRF-Token": document.querySelector('meta[name="csrf"]').getAttribute('content')
            },
            body: JSON.stringify({bonus_code: bonus_code})
        }).then(function(response){
            return response.json();
        })  .then(function(res){
            message(res.message)
        })
        .catch(function(error){
            console.log(error)
        });
    }
</script>
</body>
</html>
