<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Balance-Recharge</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
    @include('app.layout.css')
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
        background: #db1e09;
        padding: 10px 60px;
        border-radius: 50px;
        color: #fff;
        border: none;
    }
    .page_title{
        background: #db1e09;
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
    p.hdghcdgcvgdvc {
        position: absolute;
        bottom: 43px;
        font-size: 21px;
        margin-left: 10px;
        color: #db1e09;
        font-weight: 600;
    }
    .referralLink {
        margin: 0 12px;
        background: #ff000012;
        padding: 14px 12px;
        /* white-space: nowrap; */
        overflow: hidden;
        border-radius: 6px;
        margin-top: 11px;
    }
    .buy_confirm a {
        text-decoration: none;
        font-weight: 500;
        font-weight: 500;
        background: #db1e09;
        padding: 10px 63px;
        font-size: 19px;
        color: #fff;
        border-radius: 6px;
        margin-top: 20px;
        /* width: 100%; */
        margin: 20px 12px;
        display: block;
        box-shadow: 0px 3px 0px #000;
    }

    ol {
        counter-reset: list;
        list-style: none;
    }

    ol li {
        counter-increment: list;
        margin-bottom: 10px;
    }

    ol li::before {
        content: counter(list);
        background: #53bf89;
        font-family: Arial, sans-serif;
        color: #fff;
        font-size: 13px;
        text-align: center;
        border-radius: 50%;
        width: 2.2em;
        height: 2.2em;
        line-height: 2.3em;
        display: inline-block;
        margin-right: 1em;
    }
    p.bhdc {
        margin-bottom: 12px;
        font-weight: 100;
    }
    ol li {
        counter-increment: list;
        margin-bottom: 10px;
        color: #db1e09;
    }

</style>

<div class="page_title" style="background: #db1e09;display: flex;justify-content: space-between;padding: 12px 12px;">
    <div onclick="window.location.href='{{route('dashboard')}}'"><i class="fa fa-chevron-left"></i></div>
    <div>Invite For Commission</div>
    <div></div>
</div>

<div style="position: relative">
    <img style="width: 100%;" src="{{asset('public/resize.jpeg')}}" alt="">
    <p class="hdghcdgcvgdvc">Join our team and owning wealth</p>
</div>

<h4 style="    padding: 12px;
    padding-bottom: 0;
    margin-bottom: 0;
    margin: 10px 0;
    font-weight: 500;">Copy your referral link and send it to your friends to sign up</h4>
<div class="referralLink">{{url('register').'?inviteCode='.auth()->user()->ref_id}}</div>
<div class="buy_confirm">
    <a href="javascript:void(0)" onclick="copyLink('{{url('register').'?inviteCode='.auth()->user()->ref_id}}')">Copy Link</a>
</div>

<div style="margin: 10px;">
    <h4 style="    padding: 12px 0;
    padding-bottom: 10px;
    margin-bottom: 0;
    font-weight: 500;">Promotion commission ratio</h4>
    <hr>
</div>

<div style="margin: 10px;">
    <p class="bhdc">The following rewards are permanently valid, and the commission will be automatically credited to your account. Act quickly!</p>
    <ol>
        <li>If you invite A to invest successfully, you will get an additional reward of 100, and you will get 30% (when product type is Specify) or 5% (when product type is Celebrate) of A's total investment.</li>
        <li>When A invites B to invest successfully, you will also receive a reward of 2% (when product type is Specify) of B's total investment.</li>
        <li>When B invites C to invest successfully, you will also receive a reward of 1% (when product type is Specify) of C's total investment.</li>
    </ol>
</div>



@include('alert-message')
<script>
    function copyLink(text)
    {
        const body = document.body;
        const input = document.createElement("input");
        body.append(input);
        input.style.opacity = 0;
        input.value = text.replaceAll(' ', '');
        input.select();
        input.setSelectionRange(0, input.value.length);
        document.execCommand("Copy");
        input.blur();
        input.remove();
        message('Copied success..')
    }
</script>

</body>
</html>
