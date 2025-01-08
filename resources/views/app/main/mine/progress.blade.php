<!DOCTYPE html>
<html lang="pt">
<head>
    <!-- Incluir arquivo de CSS geral -->
    @include('app.layout.css')
    <!-- CSS adicional para o slider (p_slider) -->
    <link rel="stylesheet" href="{{asset('public/footbal')}}/assets/css/p_slider.css">
</head>
<body>
    <!-- Incluir carregamento durante a renderização -->
    @include('app.layout.loading')

    <style>
        /* Estilo personalizado para o texto da classe client-price */
        .client-price p {
            color: #17cdaf !important; /* Cor personalizada */
        }
    </style>

    <!-- Cabeçalho com navegação para a tela anterior -->
    <div style="display: flex; justify-content: space-between; background: #1da6ef; padding: 15px">
        <div style="color: #fff;" onclick="window.location.href='{{route('mine')}}'">
            <i class="fa fa-chevron-left"></i>
        </div>
        <div style="color: #fff; font-weight: bold;">Progresso da tarefa de hoje</div>
        <div></div>
    </div>

    <div class="wrapper home-page dfdfsa">

        <!-- Conteúdo principal com os cards de progresso -->
        <div class="rowil2_content">
            <!-- Card de progresso de tarefa -->
            <div class="d_card" style="margin: 0 15px; margin-top: 15px;">
                <!-- Card com informações e tarefas -->
                <div style="overflow: hidden; margin-top: 15px; background: #fff; padding: 13px 10px; border-radius: 5px;">
                    <div style="width: 12%; margin-right: 2%; float: left;">
                        <!-- Imagem do usuário -->
                        <img src="https://ffst.vip/uploads/images/image_2023-08-03_15-38-40.png" style="width: 40px;">
                    </div>
                    <div style="width: 83%; margin-right: 2%; float: right;">
                        <div style="display: flex; justify-content: space-between; margin-top: 10px">
                            <div style="font-size: 14px; color: #000; font-weight: 600">881933690444</div>
                            <div style="font-size: 14px; color: #000; font-weight: 500">ID: 14511514</div>
                        </div>
                    </div>
                    
                    <!-- Lista de tarefas -->
                    <div>
                        <ul style="padding: 0; margin: 0; margin-top: 45px;">
                            <!-- Exemplo de item de tarefa -->
                            <li style="display: flex; justify-content: space-between; margin: 5px 0;">
                                <div>Exercícios: Não</div>
                                <div>FFST $30: NÃO</div>
                                <div></div>
                            </li>
                            <!-- Mais itens de tarefa -->
                            <li style="display: flex; justify-content: space-between; margin: 5px 0;">
                                <div>Exercícios: Não</div>
                                <div>FFST $30: NÃO</div>
                                <div></div>
                            </li>
                            <li style="display: flex; justify-content: space-between; margin: 5px 0;">
                                <div>Exercícios: Não</div>
                                <div>FFST $30: NÃO</div>
                                <div></div>
                            </li>
                            <li style="display: flex; justify-content: space-between; margin: 5px 0;">
                                <div>Exercícios: Não</div>
                                <div>FFST $30: NÃO</div>
                                <div></div>
                            </li>
                            <li style="display: flex; justify-content: space-between; margin: 5px 0;">
                                <div>Exercícios: Não</div>
                                <div>FFST $30: NÃO</div>
                                <div></div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Repetir estrutura dos cards de progresso, conforme necessário -->
                <!-- Adicione aqui as demais cards de progresso (cada uma com a mesma estrutura) -->

            </div>
        </div>

        <!-- Menu inferior -->
        @include('app.layout.manu')

    </div>

    <!-- === Área de Scripts === -->
    <!-- Inclusão do CSRF Token para segurança de formulários -->
    <meta name="csrf-token" content="{{csrf_token()}}">
    <!-- Script de notificação -->
    <script src="{{asset('public/assets/toast.js')}}"></script>
    <!-- Inclusão de mensagens de alerta -->
    @include('alert-message')

    <!-- Inclusão de scripts gerais -->
    @include('app.layout.js')

</body>
</html>
