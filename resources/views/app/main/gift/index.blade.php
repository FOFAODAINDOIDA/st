<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{setting('site_name')}}</title>
    <!-- favicon icon -->
    <link rel="icon" href="{{asset('public/footbal')}}/assets/image/favicon.ico">
    <!-- === Font awesome === -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- === Css Area Start === -->
    <link rel="stylesheet" href="{{asset('public/footbal')}}/assets/css/global.css">
    <link rel="stylesheet" href="{{asset('public/footbal')}}/assets/css/style.css">
    <link rel="stylesheet" href="{{asset('public/footbal')}}/assets/css/setting.css">
    <style>
        .gift_box {
            width: 60px;
            height: 60px;
            margin: auto;
            background: #e5d900;
            text-align: center;
            line-height: 60px;
            border-radius: 50px;
        }
        form.gift_box_form {
            margin: 45px 20px;
        }
        label {
            font-size: 18px;
        }
        input[type="text"] {
            width: 100%;
            padding: 14px 8px;
            font-size: 16px;
            color: #000;
            border-radius: 9px;
            margin-top: 5px;
            border: none;
            background: #00000017;
        }
        input[type="text"]::placeholder{
            color: #000;
        }
        button.gift_btn {
            background: #db1e09;
            border: none;
            width: 100%;
            padding: 15px 0;
            color: #fff;
            font-size: 18px;
            border-radius: 50px;
            margin-top: 46px;
        }
        form.gift_box_form {
            margin: 45px 20px;
            background: #fff;
            padding: 25px 15px;
            border-radius: 10px;
        }
        .setting_body {
            top: 164px;
        }
        body{
            background: #db1e09;
        }
        form.gift_box_form {
            margin: 0 20px;
        }
    </style>
</head>
<body>
<link rel="stylesheet" href="{{asset('public/rahat/app.css')}}">
@include('alert-message')
<div class="setting_container">
    <div class="page_title">
        <div onclick="window.location.href='{{route('mine')}}'"><i class="fa fa-chevron-left"></i></div>
        <div>Exchange</div>
        <div></div>
    </div>
   <div style="text-align: center">
       <img src="{{asset('public/bg.png')}}" alt="">
   </div>
    <form action="javascript:void(0)" method="" class="gift_box_form"> @csrf
        <label for="gift">Exchange code</label>
        <div>
            <input type="text" name="bonus_code" placeholder="Please enter  code">
        </div>

        <div>
            <button class="gift_btn" onclick="submitBonusRequest()">Receive</button>
        </div>
    </form>
</div>

<style>
    img.boc {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 320px;
    }
    .clickMe img {
        width: 200px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .clickMeText button {
        width: 200px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .gi_amount {
        position: absolute;
        top: 45%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 41px;
        color: blue;
        font-style: italic;
    }
    .clickMeText button {
        width: 140px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 8px 0;
        border: none;
        border-radius: 4px;
        background: #ffffff80;
        color: green;
        font-weight: bold;
    }

</style>

<div id="box_show" style="display: none;">
    <img class="boc"  src="{{asset('public/gift-36.gif')}}" alt="">
    <div class="clickMe" style="display: none;">
        <img src="{{asset('public/check.gif')}}" alt="">
    </div>
    <div class="clickMeText">
        <div class="gi_amount">0</div>
        <button onclick="submitBonusRequestSubmit()">Click me</button>
    </div>
</div>

<meta name="csrf-token" content="{{csrf_token()}}">
<script src="{{asset('public/footbal')}}/assets/js/jquery-3.7.0.min.js"></script>
<script src="{{asset('public/footbal')}}/assets/js/script.js"></script>

<script>
    function submitBonusRequest()
    {
        var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        var code = document.querySelector('input[name="bonus_code"]').value
        if (code != ''){
            var data = {
                bonus_code: code,
            }
            fetch('{{route('user.submit-bonus')}}', {
                method: "POST",
                body: JSON.stringify(data),
                headers: {
                    "Content-type": "application/json; charset=UTF-8",
                    'X-CSRF-TOKEN': csrfToken
                }
            })
                .then(response => response.json())
                .then(res => {
                    code = ''
                    if (res.status === true)
                    {
                        document.getElementById('box_show').style.display = 'block';
                        document.querySelector('.gi_amount').innerHTML = res.amount;
                        // message(res.message);
                        {{--window.location = '{{route('gift')}}';--}}
                    }else {
                        message(res.message);
                    }
                })
                .catch(err => console.log(err));
        }else {
            setTimeout(function (){
                message('OOPs. Please Enter Bonus Code!')
            }, 2000)
        }
    }


    function submitBonusRequestSubmit()
    {
        var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        var code = document.querySelector('input[name="bonus_code"]').value
        if (code != ''){
            var data = {
                bonus_code: code,
            }
            fetch('{{route('user.submit-bonus-confirm')}}', {
                method: "POST",
                body: JSON.stringify(data),
                headers: {
                    "Content-type": "application/json; charset=UTF-8",
                    'X-CSRF-TOKEN': csrfToken
                }
            })
                .then(response => response.json())
                .then(res => {
                    code = ''
                    if (res.status === true)
                    {
                        document.getElementById('box_show').style.display = 'block';
                        document.querySelector('.clickMe').style.display = 'block';
                        document.querySelector('.boc').style.display = 'none';
                        document.querySelector('.clickMeText').style.display = 'none';
                        document.querySelector('input[name="bonus_code"]').value = '';
                        document.querySelector('.gi_amount').style.display = 'none';
                    }else {
                        message(res.message);
                    }
                })
                .catch(err => console.log(err));
        }else {
            setTimeout(function (){
                message('OOPs. Please Enter Bonus Code!')
            }, 2000)
        }
    }
</script>
</body>
</html>
