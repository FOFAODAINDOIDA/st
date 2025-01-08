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

    </style>

    <style>

        [data-v-81dae98a] .singbonus {
            width: 78.933333vw;
            height: 81.466667vw;
            background: url({{asset('public')}}/IndustrialRobots/dist/img/7.8ffb1937.png) no-repeat;
            background-size: cover;
            padding: 5.333333vw 6.666667vw 4vw;
        }

        .openBuyModal {
            width: 100%;
            height: 100%;
            background: #0000003b;
            position: fixed;
            z-index: 22;
            top: 0;
            left: 0;
        }
        [data-v-81dae98a] .singbonus {
            width: 78.933333vw;
            height: 81.466667vw;
            background: url({{asset('public')}}/IndustrialRobots/dist/img/7.8ffb1937.png) no-repeat;
            background-size: cover;
            padding: 5.333333vw 6.666667vw 4vw;
        }
        .close_pop {
            font-size: 25px;
            position: absolute;
            bottom: 4px;
            right: 13px;
            color: #000;
            background: #fff;
            width: 30px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            border-radius: 50px;
        }
        [data-v-81dae98a] .buybox .canceli {
            font-size: 4vw;
            font-weight: 600;
            color: rgba(0,0,0,.5);
            margin-top: 2.666667vw;
            padding: 9px 0;
            color: #fff;
            border-radius: 6px;
        }
        [data-v-81dae98a] .buybox .accounti .btnsit, [data-v-81dae98a] .buybox .invseti {
            height: 10.666667vw;
            background: #1989fa;
            border-radius: 2.266667vw;
            font-size: 4.133333vw;
            font-weight: 500;
            color: #fff;
        }
        .homepage[data-v-81dae98a]:after {
            display: none;
        }
        .homepage[data-v-81dae98a] {
            padding-top: 0;
        }
        .homepage .section-box .itemlist .positui img[data-v-81dae98a] {
            width: 12vw;
            height: auto;
            height: 45px;
        }
        .banner img {
    height: 200px;
    border-radius: 10px;
}

.homepage .section-box .prolist .listi .nowbtn[data-v-81dae98a] {
    background: #1989fa !important;
    color: #fff !important;
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
                    <div class="van-nav-bar__title van-ellipsis">Lar</div>
                    <div onclick='window.location.href="https://chat.whatsapp.com/J2qafQxm4t95VE65Ox3W77"' class="van-nav-bar__right van-haptics-feedback"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAYAAAAehFoBAAAAAXNSR0IArs4c6QAAAzBJREFUWEft2UuoVXUUx/GPvexBUQZBgdBj4EB7QEUUBaXRg0YR9HRQmY+cF0WD0IlCBU2KhKygwh5ENghqUApBQUVYOohASSuo6EFFRWkPfvDfsD16dD/OufceuGt2zn/91/rutf977bXWnmPCZM6E8RoEPg7LcDPOw0kcoDPua/wPv+IzvIKN+LNyWge+AK/h7HETtbS/CzdhW/ZVwOfjPZxYjOWK3sf3yBVPpYTpNFyG3PHIb7gCn2bxWOzAOWUxt+A+/DyVlAfxdQoeKUc0yzuxKMD34ska7D3TDDro/uka9OoAb8GV+B3zZ0BkB4ET6a9wArYG+Cfkz7dx3QyLboXzFq5NMAP8b3n4nsNdMxT4WdyZBBDgKgvkz7tnKPAzVTAnBXgDVmDvpABfimSLzV2Ak68vHsErex/exY9tjmFb4LwJvy41Rhs/w3Q/KG+0xrbaAicX7sapjT0cWnErrmpjqy1wbJ+BFEp9S9McidQrqRMaSxfgxsbHoTgLPI6o1m3ORnhMET4CV1cF/CTUEg9gHb6YlCPRq/hZjcUN83BK1814sedR6Qyc5vDbhrAV4984Hv/0gO4MnMP/BpY0hE6EXy3Fdw9enYH7OO2zdxa4T/Sa7N0vwntxVHmSlzbZPQ06L+AO7Ese3lPmER+XTmIaeA7r8iNclOYhwMmRt5d2/8Jq6HZYE1OnkLnfJ0iG2hTgVPzprSLby+9WfdYY2edl2oNzi48lVdewCbeWP7/Ew3izbYM4QvCA3oA1OKvYzaz4lgo4vVrGQZcPOE0bM0yy9jkeQx6KJpJ2fS0uwdwhG8J09MBaWqlrMv+r92UxsB6pFY5p4r2m8zJW4pch+wKQu5aq68gWtpPBnirj37+y72CN5Om4sfbJYJj9zJUzPKyGzpmU34YPBzYswPO1DJRyNhPTH4YYrn8yeB3f1PX6dr6L8BIWFqMpdB4qxySOV+HRMiqNyndl1pvno5P0BY7TRPhxLK/dsaShVGeZEFUSyHzwCXRnGQVw5TxfnjK0O3mA5g/cjyc6U9Y2jhI4Zs8srcz1JdG/gwdLNhkFb+/pzUgg2hgZdYTb+O6k+z9FLbF2wg65xgAAAABJRU5ErkJggg=="
                            alt="" data-v-81dae98a=""></div>
                </div>
            </div>
            <section class="section-box" data-v-81dae98a="">
                <div class="banner">
                    <img src="{{asset('public')}}/ccc.gif" class="van-gif__gif">
                </div>
        
                <div role="alert" class="van-notice-bar barbox" data-v-81dae98a=""><img
                        src="data:image/png;base64,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"
                        alt="" data-v-81dae98a="">
                    <marquee behavior="" direction="">
   77********* depositou R$50                           61********* sacou R$2000
14********* depositou R$140                          49********* sacou R$400
31********* depositou R$750                          68********* sacou R$1100
23********* depositou R$2000                         92********* sacou R$50
17********* depositou R$140                          85********* sacou R$400
70********* depositou R$1100                         33********* sacou R$2000
11********* depositou R$50                           58********* sacou R$750
98********* depositou R$140                          63********* sacou R$400
35********* depositou R$1100                         77********* sacou R$2000
44********* depositou R$50                           28********* sacou R$750
53********* depositou R$140                          21********* sacou R$2000
39********* depositou R$1100                         12********* sacou R$50
67********* depositou R$140                          18********* sacou R$400
74********* depositou R$2000                         62********* sacou R$750
56********* depositou R$50                           47********* sacou R$1100
59********* depositou R$140                          34********* sacou R$2000
90********* depositou R$50                           60********* sacou R$750
48********* depositou R$140                          79********* sacou R$400
65********* depositou R$1100                         87********* sacou R$2000
72********* depositou R$50                           50********* sacou R$140
80********* depositou R$750                          24********* sacou R$400
93********* depositou R$1100                         41********* sacou R$2000
71********* depositou R$50                           66********* sacou R$750
26********* depositou R$140                          84********* sacou R$400
73********* depositou R$2000                         25********* sacou R$1100
22********* depositou R$50                           36********* sacou R$140
69********* depositou R$750                          51********* sacou R$400
20********* depositou R$1100                         57********* sacou R$2000
45********* depositou R$50                           40********* sacou R$140
54********* depositou R$750                          37********* sacou R$400
30********* depositou R$1100                         76********* sacou R$2000
42********* depositou R$50                           82********* sacou R$750
64********* depositou R$140                          81********* sacou R$400
75********* depositou R$1100                         78********* sacou R$2000
34********* depositou R$50                           83********* sacou R$750
46********* depositou R$140                          56********* sacou R$400
55********* depositou R$1100                         38********* sacou R$2000
11********* depositou R$50             


                    </marquee>
                </div>

                <div class="needbox" data-v-81dae98a="">
                    <div class="choosei" data-v-81dae98a=""><p data-v-81dae98a="">Menu comum</p><span
                            data-v-81dae98a="">Escolha o menu que você precisa</span></div>
                    <div class="luckyuis" data-v-81dae98a="" onclick="window.location.href='{{route('user.drow')}}'">
                        <img src="https://img.icons8.com/emoji/48/coin-emoji.png" alt=""
                                                                  data-v-81dae98a="">
                      <div class="drawui" data-v-81dae98a=""><p data-v-81dae98a="">Sorteio</p>
                            <p data-v-81dae98a="">Diario</p></div>
                    </div>
                </div>
                <div class="itemlist" data-v-81dae98a="" style="justify-content: space-between">
                    <div class="positui" data-v-81dae98a="" onclick='window.location.href="https://chat.whatsapp.com/J2qafQxm4t95VE65Ox3W77"'><img
                            src="data:image/png;base64,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"
                            alt="" data-v-81dae98a="">
                        <p data-v-81dae98a="">Grupo Whatssapp</p>
                        </div><!---->
                    <div class="positui" data-v-81dae98a=""  onclick="window.location.href='{{route('invite.task')}}'"><img
                            src="data:image/png;base64,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"
                            style="border-radius: 50px;filter: invert(1);"
                            alt="" data-v-81dae98a="">
                        <p data-v-81dae98a="">Convidar</p></div>
                             <div class="positui" data-v-81dae98a="" onclick="window.location.href='{{route('recharge')}}'"><img
                            src="{{asset('public')}}/r.png"
                            style="border-radius: 50px;background: #0012ff;"
                            alt="" data-v-81dae98a="">
                        <p data-v-81dae98a="">Recarga</p></div>
                </div>
                <div class="needbox" data-v-81dae98a="">
                    <div class="choosei" data-v-81dae98a=""><p data-v-81dae98a="">Lista de serviços</p><span
                            data-v-81dae98a="">Escolha o investimento em serviços que você precisa</span></div>
                </div>
                <div class="prolist" data-v-81dae98a="">
                    @foreach(\App\Models\Package::where('status', 'active')->get() as $element)
                        <?php
                            $myPackage = \App\Models\Purchase::where('user_id', auth()->id())->where('package_id', $element->id)->where('status', 'active')->first();
                            $task = \App\Models\Task::first();
                        ?>
                    <div class="listi" data-v-81dae98a=""><img
                            src="{{asset($element->photo)}}"
                            class="imgpro" alt="" data-v-81dae98a="">
                        <div class="double" data-v-81dae98a=""><p class="ellipsis-2" data-v-81dae98a="">{{$element->name}}</p>
                        </div>
                        <p class="priceuis" data-v-81dae98a="">{{price($element->price)}}</p>
                        <div class="infobox flex" data-v-81dae98a=""><span data-v-81dae98a="">Ciclo:</span>
                            <p data-v-81dae98a="">{{$element->validity}} days</p></div>
                        <div class="infobox flex" data-v-81dae98a=""><span data-v-81dae98a="">Limite de tarefas:</span>
                            <p data-v-81dae98a="">{{$element->task}}</p></div>
                        <div class="infobox flex" data-v-81dae98a=""><span data-v-81dae98a="">Renda diária:</span>
                            <p data-v-81dae98a="">{{price($task->amount * $element->task)}}</p></div>
                        <div class="infobox flex" data-v-81dae98a=""><span data-v-81dae98a="">Total das receitas:</span>
                            <p data-v-81dae98a="">{{price(($task->amount * $element->task) * $element->validity)}}</p></div>
                        @if($myPackage)
                        <button type="button"
                                style="background: #1989fa;color: #fff;"
                                class="van-button van-button--default van-button--normal nowbtn"
                                data-v-81dae98a="">
                            <div class="van-button__content"><!----><span class="van-button__text">Investido</span>
                                <!----></div>
                        </button>
                        @else
                            <button type="button" onclick="openModal('shvcdgvcg{{$element->id}}', 'buy{{$element->id}}')"
                                    class="van-button van-button--default van-button--normal nowbtn"
                                    data-v-81dae98a="">
                                <div class="van-button__content"><!----><span class="van-button__text"> Investir</span>
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
                                                <div class="leftcome" data-v-81dae98a=""><span data-v-81dae98a="">Preço:</span>
                                                    <p data-v-81dae98a="">{{price($element->price)}}</p></div>
                                            </div>
                                            <p class="limtiui" data-v-81dae98a=""> Limite de quantidade de compra: <span
                                                    data-v-81dae98a="">0</span><strong data-v-81dae98a="">/1</strong></p></div>
                                    </div>
                                    <p class="line" data-v-81dae98a=""></p>
                                    <p class="looking" data-v-81dae98a="">{{$element->title}}</p>
                                    <div class="daysi flex" data-v-81dae98a=""><span data-v-81dae98a="">Ciclo:</span>
                                        <p data-v-81dae98a="">{{$element->validity}} Days</p></div>
                                    <div class="daysi flex" data-v-81dae98a=""><span data-v-81dae98a="">Tarefa diária:</span>
                                        <p data-v-81dae98a="">{{$element->task}}</p></div>
                                    <div class="daysi flex" data-v-81dae98a=""><span data-v-81dae98a="">Renda diária:</span>
                                        <p data-v-81dae98a="">{{price($task->amount * $element->task)}}</p></div>
                                    <div class="daysi flex" data-v-81dae98a=""><span data-v-81dae98a="">Total das receitas:</span>
                                        <p data-v-81dae98a=""> {{price(($task->amount * $element->task) * $element->validity)}}</p></div>
                                    <div class="accounti flex" data-v-81dae98a="">
                                        <div class="lefti" data-v-81dae98a=""><p data-v-81dae98a="">{{price($element->price)}}</p><span
                                                data-v-81dae98a="">Ativos da conta</span></div>

                                    </div>
                                    <button class="invseti limitbtn" onclick="window.location.href='{{route('purchase.confirmation', $element->id)}}'" data-v-81dae98a=""> Investir</button>
                                    <p class="canceli" data-v-81dae98a="" style="background: red;" onclick="cancelBuyModal('shvcdgvcg{{$element->id}}', 'buy{{$element->id}}')">Cancelar</p></div><!---->
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>

            <style>
                .poper {
                    width: 100%;
                    height: 100%;
                    background: #0000004f;
                    position: fixed;
                    top: 0;
                    left: 0;
                }
                .popper_container {
                    width: 300px;
                    height: 180px;
                    background: #fff;
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    border-radius: 20px;
                    padding: 13px 0;
                }
                .popper_container h2 {
                    font-size: 22px;
                    margin-top: 6px;
                }
                .popper_container a {
                    background: #1989fa;
                    font-size: 20px;
                    padding: 6px 72px;
                    margin-top: 34px;
                    display: inline-block;
                    border-radius: 50px;
                    color: #fff;
                }
                .closer {
                    font-size: 20px;
                    position: absolute;
                    left: 10px;
                }
            </style>

            

            @include('app.layout.manu')
        </div>
    </div>
    <div class="xuanfu" draggable="true" id="moveDiv">
        <div class="seruis" onclick='window.location.href="https://chat.whatsapp.com/J2qafQxm4t95VE65Ox3W77"'><img class="shake" src="{{asset('public')}}/IndustrialRobots/dist/img/ic_service.828288ea.png" alt="">
            <p class="un-read">1</p></div>
    </div>
</div>

<script>
    function openModal(cname1, cname2) {
        document.querySelector('.'+cname1).style.display = 'block';
        document.querySelector('.'+cname2).style.display = 'block';
    }

    function cancelBuyModal(cname1, cname2) {
        document.querySelector('.'+cname1).style.display = 'none';
        document.querySelector('.'+cname2).style.display = 'none';
    }

    function closePopUpModel(){
        document.querySelector('.poper').style.display='none';
    }

    function propositionEvent(event){
        event.stopPropagation();
    }


</script>
</body>
</html>
