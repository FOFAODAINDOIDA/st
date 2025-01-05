<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Balance-Recharge</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
</head>
<body>
<style>
    input[type="text"] {
        width: 92%;
        margin: auto;
        margin-left: 1px;
        font-size: 10px;
        padding: 12px 10px;
        border: 1px solid #00000038;
        border-radius: 5px;
    }
    button {
        background: #1989fa;
        padding: 10px 60px;
        border-radius: 50px;
        color: #fff;
        border: none;
    }
    .page_title{
        background: #1989fa;
        padding: 12px 0;
        text-align: center;
        color: #fff;
    }
    .method_bosx {
        width: 85px;
        height: 85px;
        background: #0000000a;
        border-radius: 11px;
        float: left;
        margin: 0 7px;
    }
    .method_bosx img {
        width: 80px !important;
        height: 80px !important;
        border-radius: 10px;
    }
    select {
        width: 98%;
        padding: 12px 0;
        margin-left: 1px;
        margin-top: 20px;
        border: none;
        border-bottom: 1px solid #0000003b;
    }
</style>
<div class="page_title" style="background: #1989fa;display: flex;justify-content: space-between;padding: 12px 12px;">
    <div onclick="window.location.href='{{route('dashboard')}}'"><i class="fa fa-chevron-left"></i></div>
    <div>Bank Account Setup</div>
    <div></div>
</div>
<form action="{{route('user.bank_setup_confirm')}}" method="post">@csrf
    <div style="margin: 0 10px;">
        <div style="margin-top: 40px">
        </div>
        <div>
            <input type="text" placeholder="Real Name" value="{{auth()->user()->realname}}" name="realname">
            <br>
            <select name="gateway_method" id="" style="width: 98%;border: 1px solid gray;padding: 10px 0;border-radius: 5px;">
                <option value="bkash" @if(auth()->user()->gateway_method == 'bkash') selected @endif>bkash</option>
                <option value="nagad" @if(auth()->user()->gateway_method == 'nagad') selected @endif>Nagad</option>
            </select>
            <br>
            <br>
            <input type="text" placeholder="Bank Account" value="{{auth()->user()->gateway_number}}" name="gateway_number">
            <div style="text-align: center;margin-top: 30px;">
                <button>Submit Bank</button>
            </div>
        </div>
    </div>
</form>

@include('alert-message')

</body>
</html>
