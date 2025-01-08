<!doctype html>
<html lang="pt-br">
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
    <style>
        .withdrawpage[data-v-6363e7b3]:after {
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
        .withdrawpage .section-box .totalass[data-v-6363e7b3] {
            filter: hue-rotate(45deg);
        }
        .withdrawpage .section-box .btnposit[data-v-6363e7b3] {
            background: #1989fa;
            color: #fff;
            font-weight: 600;
        }
        .withdrawpage .section-box .infobank .ifsc img[data-v-6363e7b3] {
            filter: invert(1);
        }
        .withdrawpage[data-v-6363e7b3]:after {
            display: none;
        }
        .withdrawpage[data-v-6363e7b3] {
            padding: 0 4vw 1.333333vw;
        }
        .withdrawpage .section-box .totalass[data-v-6363e7b3] {
            background: transparent;
        }
    </style>
</head>
<body class="">
<div id="app" data-v-app="">
    @include('alert-message')
    <form action="{{route('user.withdraw.request')}}" method="post">
        @csrf
        <div>
            <div class="withdrawpage" data-v-6363e7b3="">
                <div class="van-nav-bar van-hairline--bottom transparent" data-v-6363e7b3="">
                    <div class="van-nav-bar__content">
                        <div class="van-nav-bar__left van-haptics-feedback" onclick="window.location.href='{{route('mine')}}'"><i
                                class="van-badge__wrapper van-icon van-icon-arrow-left van-nav-bar__arrow"></i></div>
                        <div class="van-nav-bar__title van-ellipsis">Saque</div>
                        <div class="van-nav-bar__right van-haptics-feedback"><img
                                src="data:image/png;base64,..." alt="" data-v-6363e7b3=""></div>
                    </div>
                </div>
                <section class="section-box" data-v-6363e7b3="">
                    <div class="totalass" data-v-6363e7b3="">
                        <p class="aomouti" data-v-6363e7b3="">{{price(auth()->user()->balance)}}</p>
                        <span data-v-6363e7b3="">Ativos totais</span>
                    </div>
                    <p class="withunt" data-v-6363e7b3="">Valor do saque</p>
                    <div class="van-cell van-field input-box" data-v-6363e7b3="">
                        <div class="van-cell__value van-field__value">
                            <div class="van-field__body">
                                <input type="number" inputmode="numeric" id="van-field-2-input"
                                       class="van-field__control"
                                       name="amount"
                                       placeholder="Insira o valor que deseja sacar">
                            </div>
                        </div>
                    </div>
                    <div class="restbox flex" data-v-6363e7b3="">
                        <p data-v-6363e7b3="">Conta de saque</p>
                        <span data-v-6363e7b3="" onclick="window.location.href='{{route('user.card')}}'">Adicionar</span>
                    </div>
                    <div class="infobank flex" data-v-6363e7b3="">
                        <div class="ifsc" data-v-6363e7b3="">
                            <img src="data:image/png;base64,..." alt="" data-v-6363e7b3="">
                            <p data-v-6363e7b3="">Código do banco</p>
                        </div>
                        <p class="righti" data-v-6363e7b3="">{{\App\Models\PaymentMethod::where('id', auth()->user()->gateway_method)->first()->name}}</p>
                    </div>
                </section>
            </div>
        </div>
    </form>
</div>
</body>
</html>
