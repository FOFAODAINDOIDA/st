<!DOCTYPE html>
<html lang="en">
<head>
    <title>Safe-payment</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="{{asset('public/assets/css/')}}/pix_payment.css">
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
                        <b>VALUE:</b> <h3 class="header_title"> {{price ($amount)}}</h3>
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
                                <div class="td2" style="font-size:14px;"> 3 - Scan the QR Code or Copy and Paste the PIX code to make payment. </div>
                                <div class="td2" style="font-size:14px;"> OBS: Pay just one time to avoid any double payment problem! </div>                                
                        </div>

                        <hr style="margin-top: 20px;">

                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAA+gAAAPoAQAAAABl2OlJAAAOvElEQVR4nO2dQZKjyBJEM4XM0A7dAG6CbgbcTNxE3EDshJlQ/HSPlLqtF1VT9ac1tLXnzKJKFP1Mi4SMCA+Pnf2Xaxf+yyW66KKLLrrooosuuuiiiy666KKLLrrooosuuuiiiy666KKLLrrooosuuuiiiy666KKLLrrooosuuuiiiy666KKLLrrooosuuuiiiy666KKLLrrooosuuuiiiy666KKLLrrooosuuuiiiy666KKLLrrooov+V9Cjr1P6cYrxGJa4X2PcWQwxfTSkC1NswhwPyyGs/NPwvGFqpmOY04U1/yNfp79liS666M/FgRDn9MPU2jWE8rbuQ3ykB4Gl7W7nMbaXMB+rWwhraQ98jBv6MZ7qsU03pDtCwX/kO/R3LNFFF/210ou5D2Fs/LeluocC29rS5xY7s7GZapvSC75c9jHteK70+Xlqx8gHQcCb/6Pvt9nvLrroov8H9KkJoZoO5bzPUQNOC91wCrVd5ngs+VSx9FBB1DD042lsL/UVcca/Qf+dS3TRRf9lpZghhLm+LWn78nSB7MEQT+MphRkpaFgO5T2su7Tj0/99GLoznhDV5Hf8v/TfukQXXfTXQi6AP0zH4LmAe+C2Tp93dh6b+lJd8TnSCkgSxDBYer+3dkG2sLL05i/sGWZ8lf6GJbroom+DnisNiA2mejogd7EWD8QSTGnwFDHXSEriMYQxtxa6aOcwNlM7pQs/ihbfoL9jiS666HnladXndmzH45zOF0hJ+vBqHDraM8OMtMo5XfCqBU4X7dBdat5R3or8j3yd/pYluuii/1hDRGUxvcarazX/SAWwZjHGmKKJMB+XWKXtjoJFekT0Q6QogbVIZg9MtQnRRRf9MzqKnp0Nrdm1uuaPHn7s6IdT65VQs9uyL+7x4SWLvju3A84dld3Keb/u48OkdBJd9O3TLfbdELu0rWM8lmb34m5QNqbjBSVQ9aW+esVxLR9xhbKxT7+Mp1CP9ZQulEt5t0K5StFF3zzdX8rtOW3r9LJOWz7uXxe6GCE+wHOgmis+CBA0sJbR8lHAckaKMkJ+8X+V/pYluuiib4JuiA0GtkG0Xgq9B0YYr7+YGq9M8KHCgmc6dvTpdJGeQriyVLZESiK+Tn/LEl100fNKwUE/9OmsgK6nub6lbb2Wtu6wt/uuH7shKx/m6u5qaYt+vDjXZhN01Evcu/L66/S3LNFFFz0vJv8MguUUTVxRmljLuysMoGY+j6d6bObjfPB2KAQNFlCaGFnNsCulkAueBMoWii666J/kLobYDSh4ovmyNCidbMXnHWoT51CPx3S8WGLpx4tIdeW5tUs9xmNAdjNXM75Of8sSXXTRn8uDhhO7IGyqbkgS4HSB/ogssE4rBQ3lHceLNf56ioCycR+UPRBd9D+DPvRem4CwMa11H9Mb3phWCGN3Qb9kvuKKR4vIL45N8PhjKfmG/2DDb/i7iy666O+kdzZ0dpkayifZlelSp3TsSI8heDpBArWwSMqUJJRO6TGEO2qYv+z9ju/Rf/sSXXTRf1qePQjQKdrt2Q0FGbWbK5hdn94K+ULsQ2tDg7bt6VDemKpUNCG66NunGwSMeL+nn9n1xA0ffyotupfjobxDyWxUNKUHAbSQtU3p/V4uqkWKLrron9KNVi6dO0NWEyqhce8GchA4QD5ZX/CHOEQwmkiPm46ni9ZGSJ0gfFiKR1AlVHTRt06nl4ulHW9QPoTlZcmGjGRIz4HT1DDMmNO2pgLKu7DDmE4XzCrA/aVcP/x6G/3uoov+t9FTDDD06JvIguVXNIEiZRhOIdRjU03HZ8Vxhzu6nm1SF96xVAgzPtzwG/3uoosu+jvp3oyFuuYU6fECkeSOdc0Y++4c2kvNMCNFE3c6RqYH0RD7NsUfyGmgEooJFcWqXKXoom+djv3bw00+1HZF0AD/eXtkx8gUM3jVAn0TS9zH7NyUjhcBVtFhrucDtY1WqCtTdNG3Tve3cooNIG2cj27vbBA6wbPRo4l2ivVczeiYZEeFsZGyvTzNHGkdq/e76KKL/iHdsjEkfoaOITs48JJfmBr8Ut68PZtXOgqspzYbVTPZodyF6KJvn04hQ4wnxgZHFhrcyoVhBroyLxBSw/wFHi95WiXas9vRzyNPyeN36O9Yoosuel5wWuzoCN0ELy3mNkcvQXDwzATvJnz+lDineCJbRVdXHzSlvkjRRRf9E7qh4olUBFuqA9oj9iFygISl/04MGlxgvea+iRgGeEzGpjZMr/NpmUEOsaKLvnk6hY09uyBqm45LdSuyiRtmYUMTwVxlWodQLIULHDrckaIPuLh5ezbaOHW6EF30jdM5ow6z6MaW0sbAwdbogwgoOY4nlzhfXckMq2iKEnzghM+biGnDRymZRRdd9M/pQ98OMIpDlxZLocxExJfFy3RM4cR84BBNOsh1GKLJS+i0oP98Hp79DfpvX6KLLvpzxewYmdMHJWzm+TkF1sxVYt4EkwR5qATMnjDGss7VjADXt4dOF6KLvnV69mykh0J1xaZeY8ltjSwixtc1E7ofy/mAvgm3aoOZI8RRXs1Y9umKlI2iiy76J3TGBhw4gVnY1Q/dEs4Q6QgRfO7N/COJib4JBBN0rD8uh2ft9Dv0dyzRRRc9L+O0GFYaaAy5HNZyKWjlgloksgRTk70k1yxfjDR3G10sYTbvQ7HuTNkD0UXfPD16X2RgUjAs1bx/XeHUqOdvS4yl2fMtPqBvojaDT0OF1/tayCFWdNFF/5hOI1gIl9xAjr1YBWIG9k0MHbuwIZ/8yRhysAF+1DmrEX0ezrfob1iiiy56Xty+mICLrmoKH4plD2UjNVB9CCloaCFgZLsmRuAiaujiqT1PTfpkPiyVuR3DN+hvWaKLLnpelqdVmo3x6JUGvN8f9HBD4wRzBKhR3nJtgtsdfgwGT6fqVs6cVqm+CdFFF/1Desy6yrEJ9RTdXfrZhZ0eNzx2TPHoRnEYlYlGC5o9pTumY5jZNrHuNN1GdNH/ALpPjxjg9/pstoZqiVLFCKvoloeIFDXQdoG39OnQYXaZWvrPY5wu2jV1uhBd9K3T6dDEWXRTfeVQSuiW+PdofzwhmkCRskzRBNsl6QwfxniaWneAP+Sxdnq/iy666J/RYfpQmyFqcIumbO3Qw9SpvrAEsbDg6b2X8HRqB3ZvzZGOkchu6nQhuugbp9uvAgf6zNNCAY6R6Xgx0cwlsGjxmmsX0FAxtdc8rZLXdboQXfSt0+PLmnFCMbK8Fba4gjFd6CAxmDBvorwtMbs54r0/eB5xPs6ufZaHm+iii/4J/eXggC5s6Bji3jOPPhy3c2N6lCboMu+OkXwMhakdswtUZDlD0YToom+cTvvHtKsRMsxHerVhMU3QWc+hVZNLIl46aogi0nmkHlu7Vt5AJWWj6KL/AXSfZE/rJp9x/9QeIH8wmA1u3TQfYNVGiQFv80bKPM82FGYoW3yd/pYluuiib4L+nDfR2sUFTQfkLiJGYhrCjO6Mgmc8sm8ihRkcYjO42xN0EjXmX3myUtGE6KJvnB7RUw3lQ26UQq/1nspGmD3loAFyaXRlLrts5QLl9Rk/VFP0obnKVYou+vbpxtGT6Ju4cHqEzRgjU6ycQ9EHlBzr8YhtDTMVc3MFXBjdAT6kOyh5VJ+U6KKL/jGdNvPIXTQ1dAwLYwPLdvLdOX0egvdnM0eB9myPJloqoKr5UL68nr5Of8cSXXTRn8unWcFcYaQoeinv6MmMPoiCDrG0n5+R1XRFBGuR3dCk50CM1cyxdvJ0El307dPdW4GzJzk9oryt5bLz8RFswh4ajK21W8mSI7UHHEA1niaUIi293+m+Ik8n0UUX/UO6Ozi0VEmGyh1i0ZYJeQMOF+mh0nDMVTys5T0ah2jiPGLnGk1ac3relHaPD50uRBf9T6AP7JuYmhQbHDleZvWzQm6UuoQfD4KnR2xwE6gLZ2GXCzxe5Loguuibp/tbuUVfJLIH3idlnj/giPszJAacM8WpdjHXIp/3I5yQslF00UX/R/QOp4tn62UoPZgIPF3A46XxXOXtWQl1//kQ3Jd+ZrIyZGu5b9B//xJddNGfK6Ky2GJb1xNSkvN+jRQ+mIcZLRyh53qubmsKGpjEtH6wczqRjI3PvyqWuIsfjMLe7HcXXfS/jo6eag6cwHSokkNozbcvjWBj4yOvw7Ivlh2jhqyFbFC0cE+nQn0Toosu+id0PFUGw8yqmM4K86G8hbW0h7lXHHTUITwHUaQLlg8RGKc7tWYTldflJ8eLjX530UX/2+gul6aZPDbvgrkSK3YvLkLy2F7C5L4L++COkYFNmXgS0Nwt0NSJIyq+TH/LEl100fOiXtmzBxM3b3kvqCTIpcgwuh9DvoD3O40a0oPA4LqA9mx4Nj70fhdddNE/pEdfJzZfepfWuve6JlXUZ0y5Ss8hNmVmo+psGelWkgg/9ixa6HQhuuhbp+OsgEoDThH0e0Xm0a2b+gBNxBhjnZsyXyPu2ZYJNwZMpHlZSH+D/o4luuiiv5a/rTHJfmY4seY5Mm72FOn1RG83d4r26bTQPrNv4roc6NkY5Agtuuii/1P6dETnJXWVuzxuojtjBC4vHPwQEc3Tm8hdXAI8ZXHsKNadPF5EF/2PoSOaqNyz5b7mrky0R4wndkfgT6B0goAR86/g6YTqJafXFbZ8mDzY+ncXXfS/h55rEGlbBzo00c49va2fs7AvoUaCYY6IMtKDwPf1GE+1XRh/LLRwe3yP/oYluuiib4OeSxMoNVxZ8ExPlhXtEXiqdPSFnDgK2+4+EpPd2ekCMpVHTKioMPcmW0l+lf6OJbrooudllosTdJN/Tpvg6SJPq0xXriFbuKHZ2pUPNJnMWUxau2m+jOiiiy666KKLLrrooosuuuiiiy666KKLLrrooosuuuiiiy666KKLLrrooosuuuiiiy666KKLLrrooosuuuiiiy666KKLLrrooosuuuiiiy666KKLLrrooosuuuiiiy666KKLLrrooosuuuiiiy666KKLLrrooosu+r+5/ge/OC7MePsWZwAAAABJRU5ErkJggg==">
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
