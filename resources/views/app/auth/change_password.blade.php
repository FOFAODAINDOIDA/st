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
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/IndustrialRobots/dist/css/266.c3765aec.css">
    <style>
        .bankpage[data-v-45df3e73]:after {
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
        .bankpage .section-box .btnposit[data-v-45df3e73] {
            background: #1989fa;
            color: #fff;
        }
        .bankpage[data-v-45df3e73]:after {
            display: none;
        }
        .bankpage[data-v-45df3e73] {
            padding: 0 4vw 1.333333vw;
        }
    </style>
</head>
<body class="">
<div id="app" data-v-app="">
    @include('alert-message')
    <div>
        <form action="{{route('user.change.password.confirmation')}}" method="post">
            @csrf
            <div class="bankpage" data-v-45df3e73="">
                <div class="van-nav-bar van-hairline--bottom transparent" data-v-45df3e73="">
                    <div class="van-nav-bar__content">
                        <div class="van-nav-bar__left van-haptics-feedback" onclick="window.location.href='{{route('mine')}}'"><i
                                class="van-badge__wrapper van-icon van-icon-arrow-left van-nav-bar__arrow"><!----><!---->
                                <!----></i><!----></div>
                        <div class="van-nav-bar__title van-ellipsis">Senha/div><!----></div>
                </div>
                <section class="section-box" data-v-45df3e73="">
                    <div class="bankunt" data-v-45df3e73=""><img class="imgl"
                                                                 src="data:image/png;base64,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"
                                                                 alt="" data-v-45df3e73="">
                        <p data-v-45df3e73="">Alterar senha</p><img class="imgui"
                                                                      src="{{asset('public')}}/IndustrialRobots/dist/img/1.2a3cfcca.png" alt=""
                                                                      data-v-45df3e73=""></div>
                    <p class="accounti" data-v-45df3e73="">Senha antiga</p>
                    <div class="van-cell van-field input-box" data-v-45df3e73=""><!----><!---->
                        <div class="van-cell__value van-field__value">
                            <div class="van-field__body"><input type="password" id="van-field-15-input"
                                                                name="old_password"
                                                                class="van-field__control"
                                                                placeholder="Por favor, digite a senha antiga"><!----><!---->
                                <!----></div><!----><!----></div><!----><!----></div>
                    <p class="accounti" data-v-45df3e73="">Nova senha</p>
                    <div class="van-cell van-field input-box" data-v-45df3e73=""><!----><!---->
                        <div class="van-cell__value van-field__value">
                            <div class="van-field__body"><input type="password" id="van-field-16-input"
                                                                class="van-field__control"
                                                                name="new_password"
                                                                placeholder="Por favor, digite a nova senha"><!----><!---->
                                <!----></div><!----><!----></div><!----><!----></div>
                    <p class="accounti" data-v-45df3e73="">Confirme a senha</p>
                    <div class="van-cell van-field input-box" data-v-45df3e73=""><!----><!---->
                        <div class="van-cell__value van-field__value">
                            <div class="van-field__body"><input type="password" id="van-field-17-input"
                                                                class="van-field__control"
                                                                name="confirm_password"
                                                                placeholder="Digite a nova senha novamente"><!----><!----><!---->
                            </div><!----><!----></div><!----><!----></div>
                    <div class="tipsui" data-v-45df3e73=""><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAAXNSR0IArs4c6QAABDlJREFUWEfVmX2IVFUUwH9nVslA19IEIyKhqCAqYd/M1irZB/0lUfRhREVCYaXt+kdQa4JYUFtBUJrbB4gIRZQSRcxfYVLQ2s68DVGCCgpDosLNVTfIxd135N6585qPN/vemxllev++c879vXPv+bjnCU08upUMq/EQbkfpAa4BLkVYYM0pk8AfwE8IYyhfkceXrQRpl5M0CnqQy5hmA8ojwOVpdIGjCB8whx2ynN+T6iYC1FEW08VLKI8DF0QYV4QTwCn3rhvlIiDK/hTCTmbYIr38HQcaC6gFHkR4G7ikwpgCBxC+IOAbMvwgHicrF1OfhQRcR4ZbUO4Cbq4BHkd5RnJ8PBtkQ0DdzxwWsA3lqdCwMIWym4A3pJef476+CniUq8nwLMJjaLgLxvPvMsmA3MZ0lL1IQB3hQuayB1hdobSPgPVpwWoX1RLoMHBHxbs8Z3hA+vi3Vr4O0HpuPp+FcMoMGTbTw+simK1t+VHjtzGeI+BlhC5nMM8/3FPryXpAn2GUp53SaZSHJcenLVNFRVaBexE+BObZ18I74rG+UrQK0AXER1bUeA7WJIXTAqsQrkLJS44/k36QGkj4xHlSUR6qDJwQ0KaSDD+G0SoMisdrSRbSAhsR3nSyf6EsTwXp8zzKq05/nIBryynoP0CfHWjo3n143Jn0zKnPQZQbKz7mCcmyM8nHGRl7Jn2+DANHGBaPDaVdNwKmQpzhF5uETSqZ4YY00apF9gL3hUDKrZLj66SAlsFEdxeHXAqaYi5XmopTAiwwhDDoDL4vWZ5MZbzAUpvMzRkM2CU53kqjX5bVIu8B61zADInHC+IK/xFXW9Xtf6ok3AxMlI7LkSYOjOOOkmeZaJEcMOoURiTLinYt2IwdLfIt0Od0e0V9BlGGnFs3iRdGU6x99VmJML9KcJpf05zf2kXqeLRoS9r9VlBZITlGYslK53YLwot1siZ/drFSevguiZ06wAJ9iPWiefaaLT4EXG/xhItru5JGi6jPLpS1Dd73S9Z2QKkf2wUpE+4cHjaAx2xyViYkx6KkFvV7ljDNABm6nfdNHlzljsqAeGxPaivCi8eNs4BxcwZNvTX57zfxWNa0UZ9+lG1tAfQ5gnKFycn/A8DyFgsT4iXf4ojoa6cHj6PlLW4ySM4VYFSQNJVmzhlgXZppIVFXQmqbgiQqUbel1LUNsK7UlaYELTcL7QCMbBZshfN5BWWT27JE7ZaOcRMB2xEWukRtLupLnI1j7iIPAadQ+qWXA3E5NrLdsoBNNKxVNTxuZWGPeKyZTWzWhtV5MVXLr0XuBnaD82DDos0kwqOS5fOGInEtvwVs4dIU58C495rk0mQhS3OYpq6dcRANvZf02lk2oJ18cbde7PTRh4Xs5OFRuNWdPH6rqrGdOsCsgkwyAlZOkHEj4IBu5DyNgKtAO3WIXtf7ncffEGcBV60t4f/CB9oAAAAASUVORK5CYII="
                            alt="" data-v-45df3e73="">
                        <p data-v-45df3e73="">Lembrete gentil</p></div>
                    <p class="welcome" data-v-45df3e73="">Não compartilhe sua senha, mantenha-a confidencial para manter sua
                        Conta segura.</p>
                    <button class="btnposit" data-v-45df3e73="" type="submit">Confirme agora</button>
                </section>
            </div>
        </form>

    </div><!----></div>
</body>
</html>
