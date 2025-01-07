<!DOCTYPE html>
<html lang="en">

<head>
    <title>Safe-payment</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('public/assets/css/') }}/pix_payment.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
</head>

<body>

    <div class="header">
        <div onclick="window.location.href='{{ url('') }}/payment-method/{{ $amount }}'"><i
                class="fa fa-chevron-left"></i></div>
        <div class="justify-content-center">
            <h4>PIX DETAILS</h4></div>
        <div></div>
    </div>
    <form action="{{ url('recharge-pix-confirm-submit') }}" method="get" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="paymethod" value="{{ $method->name }}">
        <input type="hidden" name="amount" value="{{ $amount }}">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card mt-2">
                        <div class="card-body">
                            <b>VALUE:</b>
                            <h3 class="header_title"> {{ price($amount) }}</h3>
                        </div>
                    </div>

                    <h3 class="payment_me_title">
                        HOW TO PAY:
                    </h3>

                    <div class="card mt-2">
                        <div class="card-body">
                            <div class="d-flex flex-column fw-bold justify-content-between">
                                <div class="td2" style="font-size:14px;"> 1 - Open your bank app. </div>
                                <div class="td2" style="font-size:14px;"> 2 - Choose "Pay with Pix". </div>
                                <div class="td2" style="font-size:14px;"> 3 - Scan the QR Code or use the PIX Copy
                                    and Paste option </div>
                                </br>
                                <div class="td2" style="font-size:14px;"> OBS: Pay just one time to avoid any double
                                    payment problem! </div>
                            </div>

                            <hr style="margin-top: 20px;">

                            <div class="d-flex flex-column justify-content-center align-items-center form-group">
                                <label for="trans_id">QR CODE - PIX</label>
                                @php
                                    /* Variáveis de ambiente configurados no servidor
 que irão sustentar nossas requisições */
                                    $baseUrl = env('PRIMEPAG_API_URL');
                                    $apiKey = env('PRIMEPAG_API_KEY');
                                    $apiSecret = env('PRIMEPAG_API_KEY_SECRET');

                                    /* Variáveis locais que irão complementar
 nossas requisições */
                                    $qrCodeUrl = $baseUrl . '/v1/pix/qrcodes';
                                    $accessTokenUrl = $baseUrl . '/auth/generate_token';

                                    $dataToken = json_encode(['grant_type' => 'client_credentials']);
                                    $dataQr = [
                                        'generator_name' => 'RUAM GUILHERME FERREIRA DE FREITAS',
                                        'generator_document' => '05766922205',
                                        'external_reference' => 'TestePlataforma2',
                                        'expiration_time' => 300000,
                                        'value_cents' => (int) $amount * 100,
                                    ];

                                    $authToken = base64_encode($apiKey . ':' . $apiSecret);

                                    // Requisição 1: Obter o token
                                    $ch1 = curl_init($accessTokenUrl);

                                    curl_setopt_array($ch1, [
                                        CURLOPT_RETURNTRANSFER => true,
                                        CURLOPT_POST => true,
                                        CURLOPT_POSTFIELDS => $dataToken,
                                        CURLOPT_HTTPHEADER => [
                                            'Authorization: Basic ' . $authToken,
                                            'Content-Type: application/json',
                                        ],
                                    ]);
                                    $response1 = curl_exec($ch1);
                                    curl_close($ch1);

                                    $data1 = json_decode($response1, true);
                                    $token = $data1['access_token'] ?? null; // Usando o operador null coalescing (PHP 7+)

                                    if ($token) {
                                        // Requisição 2: Usar o token
                                        $ch2 = curl_init($qrCodeUrl);
                                        curl_setopt_array($ch2, [
                                            CURLOPT_RETURNTRANSFER => true,
                                            CURLOPT_POST => true,
                                            CURLOPT_POSTFIELDS => $dataQr,
                                            CURLOPT_HTTPHEADER => ['Authorization: Bearer ' . $token],
                                        ]);
                                        $response2 = curl_exec($ch2);
                                        $error = curl_error($ch2);

                                        curl_close($ch2);

                                        if ($error) {
                                            echo 'Error: ' . $error;
                                        } else {
                                            $decodedResponse = json_decode($response2, true);
                                            if (isset($decodedResponse['qrcode'])) {
                                                $referenceCode = $decodedResponse['qrcode']['reference_code'];
                                                $externalReference = $decodedResponse['qrcode']['external_reference'];
                                                $qrCodeContent = $decodedResponse['qrcode']['content'];
                                                $qrCodeImageBase64 = $decodedResponse['qrcode']['image_base64'];

                                                $image_data = base64_decode($qrCodeImageBase64);
                                                $finfo = finfo_open();
                                                $mime_type = finfo_buffer($finfo, $image_data, FILEINFO_MIME_TYPE);
                                                finfo_close($finfo);
                                                $image = imagecreatefromstring($image_data);

                                                if (!$image) {
                                                    die('Erro ao criar imagem a partir do Base64.');
                                                }

                                                $width = imagesx($image);
                                                $height = imagesy($image);

                                                $margin = 180;

                                                $new_width = $width - 2 * $margin;
                                                $new_height = $height - 2 * $margin;

                                                $x = $margin;
                                                $y = $margin;

                                                $cropped_image = imagecrop($image, [
                                                    'x' => $x,
                                                    'y' => $y,
                                                    'width' => $new_width,
                                                    'height' => $new_height,
                                                ]);

                                                if (!$cropped_image) {
                                                    die('Erro ao recortar a imagem.');
                                                }

                                                ob_start();
                                                imagepng($cropped_image);
                                                $cropped_image_data = ob_get_contents();
                                                ob_end_clean();

                                                $cropped_base64 = base64_encode($cropped_image_data);

                                                echo '<img class="qr-code" src="data:' .
                                                    $mime_type .
                                                    ';base64,' .
                                                    $cropped_base64 .
                                                    '" />';

                                                imagedestroy($image);
                                                imagedestroy($cropped_image);
                                            } else {
                                                echo 'Error: ' .
                                                    (isset($decodedResponse['error'])
                                                        ? $decodedResponse['error'] .
                                                            ': ' .
                                                            $decodedResponse['error_description']
                                                        : 'Invalid response');
                                            }
                                        }
                                    } else {
                                        echo 'Erro ao obter o token.';
                                    }
                                @endphp
                            </div>
                            <div class="d-flex flex-column justify-content-center align-items-center form-group"
                                style="margin-top: 20px;">
                                <div class="td2 fw-bold"> PIX COPY AND PASTE <i class="fa fa-copy"
                                        onclick="copiedText('{{ $qrCodeContent }}')"></i></div>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-success confirm d-block" style="width: 100%;">Confirm Order</button>
                    <a href="{{ url('deposit') }}" class="btn btn-danger d-block mt-2">Cancel Order</a>
                    <div style="height: 30px;"></div>
                </div>
            </div>
        </div>

    </form>

    @include('alert-message')
    <script>
        function copiedText(text) {
            const body = document.body;
            const input = document.createElement("input");
            body.append(input);
            input.style.opacity = 0;
            input.value = text; // Keep spaces by default

            try {
                input.select();
                input.setSelectionRange(0, input.value.length);
                const successful = document.execCommand("Copy");
                if (successful) {
                    message('Copied successfully');
                } else {
                    message('Failed to copy text');
                }
            } catch (err) {
                message('Error copying text');
                console.error('Error:', err); // Log the error for debugging
            } finally {
                input.blur();
                input.remove();
            }
        }
    </script>
</body>

</html>
