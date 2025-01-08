<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{setting('site_name')}}</title>
    <!-- Ícone do Favicon -->
    <link rel="icon" href="{{asset('public/footbal')}}/assets/image/favicon.ico">
    <!-- === Font Awesome === -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- === Área de CSS === -->
    <link rel="stylesheet" href="{{asset('public/footbal')}}/assets/css/global.css">
    <link rel="stylesheet" href="{{asset('public/footbal')}}/assets/css/style.css">
    <link rel="stylesheet" href="{{asset('public/footbal')}}/assets/css/setting.css">
    <style>
        .btn.download-btn {
            font-size: 15px !important;
        }
    </style>
</head>
<body>
@include('alert-message')

<!-- Loader -->
<div class="loader">
    <img class="loading_img" src="{{asset('public/footbal')}}/assets/image/loding.jpg" style="position: fixed; z-index: 999; width: 100px; top: 50%; left: 50%; transform: translate(-50%, -50%);">
</div>

<!-- Contêiner de Configurações -->
<div class="setting_container">
    <!-- Banner de Configurações -->
    <div class="setting_banner" style="background: url('{{asset('public/footbal')}}/assets/image/bill-bg.png')">
        <h2>
            <span onclick="window.location.href = '{{route('mine')}}'"><i class="fa fa-chevron-left"></i></span>
            Configurações da Conta
        </h2>
    </div>

    <!-- Corpo das Configurações -->
    <div class="setting_body">
        <ul>
            <li>
                <div>Apelido</div>
                <div onclick="open_se_modal('name')">
                    @if(auth()->user()->name) 
                        <span style="color: #000">{{auth()->user()->name}}</span> 
                    @else 
                        {{'(Não vinculado)'}} 
                    @endif 
                    <i class="fa fa-chevron-right"></i>
                </div>
            </li>

            <li>
                <div>bKash</div>
                <div onclick="open_se_modal('easypaisa')">
                    @if(auth()->user()->bkash) 
                        <span style="color: #000">{{auth()->user()->bkash}}</span> 
                    @else 
                        {{'(Não vinculado)'}} 
                    @endif  
                    <i class="fa fa-chevron-right"></i>
                </div>
            </li>

            <li>
                <div>Nagad</div>
                <div onclick="open_se_modal('jazzcash')">
                    @if(auth()->user()->nagad) 
                        <span style="color: #000">{{auth()->user()->nagad}}</span> 
                    @else 
                        {{'(Não vinculado)'}} 
                    @endif 
                    <i class="fa fa-chevron-right"></i>
                </div>
            </li>

            <li>
                <div>USDT</div>
                <div onclick="open_se_modal('usdtmodal')">
                    @if(auth()->user()->usdt) 
                        <span style="color: #000">Já configurado</span> 
                    @else 
                        {{'(Não vinculado)'}} 
                    @endif 
                    <i class="fa fa-chevron-right"></i>
                </div>
            </li>

            <li>
                <div>Senha de Retirada</div>
                <div onclick="open_se_modal('usdt')">
                    @if(auth()->user()->w_password) 
                        <span style="color: #000">{{auth()->user()->w_password}}</span> 
                    @else 
                        {{'(Não vinculado)'}} 
                    @endif  
                    <i class="fa fa-chevron-right"></i>
                </div>
            </li>

            <li>
                <div>Senha de Login</div>
                <div>
                    <a href="{{route('login_password')}}">(Não vinculado) <i class="fa fa-chevron-right"></i></a>
                </div>
            </li>
        </ul>
    </div>
</div>

<!-- Modais de Configuração -->
@include('partials.modals')

<script src="{{asset('public/footbal')}}/assets/js/jquery-3.7.0.min.js"></script>
<script src="{{asset('public/footbal')}}/assets/js/script.js"></script>
<script>
    // Fechar Modal
    function modal1_close(div) {
        document.querySelector('.'+div).style.opacity = '0';
        document.querySelector('.'+div).style.zIndex = '-1';
        document.querySelector('.'+div).style.transition = '1s';
    }

    // Abrir Modal
    function open_se_modal(div) {
        document.querySelector('.'+div).style.opacity = '1';
        document.querySelector('.'+div).style.zIndex = '1';
        document.querySelector('.'+div).style.transition = '1s';
    }
</script>
</body>
</html>
