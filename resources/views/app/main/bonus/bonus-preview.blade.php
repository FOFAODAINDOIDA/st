<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{setting('site_name')}}</title>
    <!-- ícone favicon -->
    <link rel="icon" href="{{asset('public/footbal')}}/assets/image/favicon.ico">
    <!-- === Font awesome === -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- === Área de Css Início === -->
    <link rel="stylesheet" href="{{asset('public/footbal')}}/assets/css/global.css">
    <link rel="stylesheet" href="{{asset('public/footbal')}}/assets/css/animate.css">
    <link rel="stylesheet" href="{{asset('public/footbal')}}/assets/css/style.css">
</head>
<body>
@include('alert-message')
<div class="loader">
    <img class="loading_img" src="{{asset('public/footbal')}}/assets/image/loding.jpg" style="position: fixed;z-index: 999;width: 100px;top: 50%;left: 50%;transform: translate(-50%, -50%);">
</div>
<div class="wrapper mine-page">
    <section class="history_header">
        <div class="recharge_history" onclick="recharge()"><h3 style="border-bottom: 2px solid rgb(18, 87, 48) !important;">Bônus de Presente</h3></div>
    </section>

    <section class="recharge">
        @if($datas->count() > 0)
            @foreach($datas as $element)
                <div class="history_container">
                    <div style="display: flex;justify-content: space-between">
            <span class="history_icon">
                <img width="20px" src="{{asset('public/footbal')}}/assets/image/gift.png">
            </span>
                        <span>
                <h4 class="h_h4">Bônus de Presente</h4>
                <p class="h_p">{{$element->created_at}}</p>
            </span>
                    </div>
                    <div>
                        <h4 class="h_price">{{price($element->bonus->amount)}}</h4>
                        <p class="h_status" style="color: green !important;">Bem-sucedido</p>
                    </div>
                </div>
            @endforeach
        @else
            <div style="color: red; text-align: center;margin-top: 30px">Registro Vazio</div>
        @endif
    </section>
</div>
<!-- área do menu -->
<div class="menu-area">
    <ul class="menu">
        <li class="menu-item">
            <a href="{{route('dashboard')}}">
                        <span class="menu-content">
                            <span class="menu-icon">
                                <img src="{{asset('public/footbal')}}/assets/image/menu/home.png" alt="">
                                <img src="{{asset('public/footbal')}}/assets/image/menu/active-home.png" alt="" class="image-active">
                            </span>
                            <span class="menu-name">início</span>
                        </span>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{route('order')}}">
                        <span class="menu-content">
                            <span class="menu-icon">
                                <img src="{{asset('public/footbal')}}/assets/image/menu/notice.png" alt="">
                                <img src="{{asset('public/footbal')}}/assets/image/menu/motic-active.png" alt="" class="image-active">
                            </span>
                            <span class="menu-name">pedido</span>
                        </span>
            </a>
        </li>
        <li class="menu-item ">
            <a href="{{route('fund')}}">
                        <span class="menu-content">
                            <span class="menu-icon">
                                <img src="{{asset('public/footbal')}}/assets/image/menu/stock.png" alt="">
                                <img src="{{asset('public/footbal')}}/assets/image/menu/stock-active.png" alt="" class="image-active">
                            </span>
                            <span class="menu-name">fundos</span>
                        </span>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{route('team')}}">
                        <span class="menu-content">
                            <span class="menu-icon">
                                <img src="{{asset('public/footbal')}}/assets/image/menu/apps.png" alt="">
                                <img src="{{asset('public/footbal')}}/assets/image/menu/apps-active.png" alt="" class="image-active">
                            </span>
                            <span class="menu-name">equipe</span>
                        </span>
            </a>
        </li>
        <li class="menu-item active">
            <a href="{{route('mine')}}">
                        <span class="menu-content">
                            <span class="menu-icon">
                                <img src="{{asset('public/footbal')}}/assets/image/menu/profile.png" alt="">
                                <img src="{{asset('public/footbal')}}/assets/image/menu/profile-active.png" alt="" class="image-active">
                            </span>
                            <span class="menu-name">minha conta</span>
                        </span>
            </a>
        </li>
    </ul>
</div>
<script src="{{asset('public/footbal')}}/assets/js/jquery-3.7.0.min.js"></script>
<script src="{{asset('public/footbal')}}/assets/js/script.js"></script>
</body>
</html>
 