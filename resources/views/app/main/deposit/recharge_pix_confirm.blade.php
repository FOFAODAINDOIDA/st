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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />


</head>
<body>

<div class="header">
    <div onclick="window.location.href='{{url('')}}/payment-method/{{$amount}}'"><i class="fa fa-chevron-left"></i></div>
    <div><h4>PIX DETAILS</h4></div>
    <div></div>
</div>
<form action="{{url('recharge-confirm-submit')}}" method="get" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="paymethod" value="{{$method->name}}">
    <input type="hidden" name="amount" value="{{$amount}}">
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mt-2">
                    <div class="card-body">
                        <h3 class="header_title">{{price($amount)}}</h3>
                        <p class="header_count">Countdown</p>
                        <h3 class="header_time"><span id="timer" data-hours="00" data-minutes="30" data-seconds="00"></span></h3>
                    </div>
                </div>

                <p class="payment_para">
                    Please upload the payment voucher within the specified time, otherwise the OTC has the right to cancel the order.
                </p>

                <h3 class="payment_me_title">
                    Payment Method
                </h3>

                <div class="card mt-2">
                    <div class="card-body">
                        <div class="d-flex flexer justify-content-between">
                            <div class="td1">Wallet Name</div>
                            <div class="td2">{{$method->name}} <i onclick="copiedText('{{$method->name}}')" class="fa fa-copy"></i></div>
                        </div>

                        <div class="d-flex flexer justify-content-between" style="margin: 10px 0;">
                            <div class="td1">Wallet Account</div>
                            <div class="td2">{{$method->address}} <i onclick="copiedText('{{$method->address}}')" class="fa fa-copy"></i></div>
                        </div>

                        <div class="d-flex flexer justify-content-between">
                            <div class="td2" style="font-size:12px;">Please make send money and submit payment successfully</div>
                        </div>

                        <hr style="margin-top: 25px;">

                        <div class="form-group">
                            <label for="trans_id">Upload Transaction ID</label>
                            <input type="text" required placeholder="Please enter Upload serial number" id="trans_id" name="transaction_id" class="form-control">
                        </div>

                        <div class="form-group" style="margin-top: 20px;">
                            <label for="photo">
                                Upload Payment Picture
                                <br>
                                <img id="photo_prove" src="{{asset('public/font_fount.jpeg')}}" alt="">
                            </label>
                            <input type="file" required onchange="openFile(event)" name="photo" id="photo" style="display: none;">
                        </div>
                    </div>
                </div>

                <button class="btn btn-success d-block" style="width: 100%;">Confirm Order</button>
                <a href="{{url('deposit')}}" class="btn btn-danger d-block mt-2">Cancel Order</a>
                <div style="height: 30px;"></div>
            </div>
        </div>
    </div>

</form>

@include('alert-message')
<script>
    var openFile = function(file) {
        var input = file.target;
        var reader = new FileReader();
        reader.onload = function(){
            var dataURL = reader.result;
            var output = document.getElementById('photo_prove');
            output.src = dataURL;
        };
        reader.readAsDataURL(input.files[0]);
    };

    function copiedText(text){
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
        message('Copied successfully')
    }
</script>

<script>
    var clock = document.getElementById('timer');

    var hour = 0;
    if (sessionStorage.getItem('hour')){
        hour = sessionStorage.getItem('hour');
    }
    clock.setAttribute('data-hours', hour);

    var minute = 30;
    if (sessionStorage.getItem('minute')){
        minute = sessionStorage.getItem('minute');
    }
    clock.setAttribute('data-minutes', minute);

    var second = 0;
    if (sessionStorage.getItem('second')){
        second = sessionStorage.getItem('second');
    }
    clock.setAttribute('data-seconds', second);
</script>
<script>
    const oneSec = 1000,
        container = document.getElementById('timer');

    let dataHours 	= container.getAttribute('data-hours'),
        dataMinutes = container.getAttribute('data-minutes'),
        dataSeconds = container.getAttribute('data-seconds'),
        timerEnd 		= container.getAttribute('data-timer-end'),
        timerOnEndMsg = "data-timer-end";

    if (dataHours == '' || dataHours == null || dataHours == NaN) {
        dataHours = "0";
    }
    if (dataMinutes == '' || dataMinutes == null || dataMinutes == NaN) {
        dataMinutes = "0";
    }
    if (dataSeconds == '' || dataSeconds == null || dataSeconds == NaN) {
        dataSeconds = "0";
    }

    let hoursSpan = document.createElement('span'),
        minutesSpan = document.createElement('span'),
        secondsSpan = document.createElement('span'),
        separator1 = document.createElement('span'),
        separator2 = document.createElement('span'),
        separatorValue = ":",
        max = 59,
        s = parseInt(dataSeconds) > max ? max : parseInt(dataSeconds),
        m = parseInt(dataMinutes) > max ? max : parseInt(dataMinutes),
        h = parseInt(dataHours);

    secondsSpan.classList.add('time');
    minutesSpan.classList.add('time');
    hoursSpan.classList.add('time');
    separator1.classList.add('separator');
    separator1.textContent = separatorValue;
    separator2.classList.add('separator');
    separator2.textContent = separatorValue;

    checkValue = (value)=>{
        if (value < 10) {
            return "0" + value;
        } else {
            return value;
        }
    }

    hoursSpan.textContent = checkValue(dataHours);
    minutesSpan.textContent = checkValue(dataMinutes);
    secondsSpan.textContent = checkValue(dataSeconds);

    timer = (sv,mv,hv)=>{

        s = parseInt(sv);
        m = parseInt(mv);
        h = parseInt(hv);

        if (s > 0) {
            return s -= 1;
        } else {
            s = max;
            if (m > 0) {
                return m -= 1;
            } else {
                m = max;
                if (h > 0) {
                    return h -= 1;
                }
            }
        }
    }

    finished = ()=>{
        max = 0;
        let timerEnd = container.getAttribute(timerOnEndMsg);
        container.setAttribute(timerOnEndMsg, 'true');
        if (timerEnd == '' || timerEnd == null) {
            sessionStorage.clear()
            container.textContent = "timer-end";
        } else {
            container.textContent = timerEnd;
        }
    }

    counter = setInterval(()=>{

        if (h == 0 && m == 0 && s == 0) {
            clearInterval(counter, finished());
        }

        if (s >= 0) {
            timer(s,m,h);

            sessionStorage.setItem('second', checkValue(s))
            sessionStorage.setItem('minute', checkValue(m))
            sessionStorage.setItem('hour', checkValue(h))

            hoursSpan.textContent   = checkValue(h);
            minutesSpan.textContent = checkValue(m);
            secondsSpan.textContent = checkValue(s);
        }
    }, oneSec);

    // let children = [hoursSpan, separator1, minutesSpan, separator2, secondsSpan];
    let children = [minutesSpan, separator2, secondsSpan];

    for (child of children) {
        container.appendChild(child);
    }

</script>
</body>
</html>
