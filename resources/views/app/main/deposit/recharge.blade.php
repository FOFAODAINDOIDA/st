<!DOCTYPE html>
<html lang="en">
<head>
    <title>Safe-payment</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="{{asset('public/style.css')}}">
    <style>
        body{
            background: transparent;
        }
        .list-group-item {
            padding: 18px 0;
        }
    </style>
</head>
<body>
<div class="header">
    <div onclick="window.location.href='{{route('user.deposit')}}'"><i class="fa fa-chevron-left"></i></div>
    <div><h4>Choose Payment Method</h4></div>
    <div></div>
</div>
<div class="container">

    <ul class="list-group">
        @foreach(\App\Models\PaymentMethod::where('status', 'active')->get() as $element)
        <li class="list-group-item" style="border-top: none; border-bottom: 1px solid #ddd;" onclick="goPaymentMethod(this, '{{$element->id}}')">
            <div style="display: flex;justify-content: space-between;">
                <div style="font-weight: bold"><img style="width: 25px;height: 25px;border-radius: 50px;" src="{{asset($element->photo)}}" alt=""> {{$element->name}}</div>
                <div class="checker" style="background: transparent;color: #000000;"><i class="fa fa-check"></i></div>
            </div>
        </li>
        @endforeach
    </ul>

    <div class="submit_btn">
        <a href="javascript:void(0)" onclick="goPa()">Confirm</a>
    </div>
    <input type="hidden" name="method" value="">
    @include('alert-message')
    <script>
        function goPaymentMethod(_this, method_id){
            let elements = document.querySelectorAll('.checker');
            for (let i=0; i< elements.length; i++){
                elements[i].style.background = 'transparent';
                elements[i].style.color = '#000';
            }

            _this.querySelector('.checker').setAttribute('style', "background: #0093ff;color: #fff;")

            document.querySelector('input[name="method"]').value = method_id;
        }

        function goPa(){
            let method = document.querySelector('input[name="method"]').value;
            if (method != ''){
                window.location.href = '{{url('/payment-confirmation')}}'+'/'+method+'/'+'{{$amount}}';
            }else {
                message('PLease select a payment method');
            }
        }
    </script>
</div>
</body>
</html>
