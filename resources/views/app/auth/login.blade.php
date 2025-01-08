<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
    <title>User-Login</title>
    <script src="https://connect.facebook.net/signals/config/3687131994854335?v=2.9.138&amp;r=stable&amp;domain=www.{{asset('public')}}/IndustrialRobotsapp.com"
            async=""></script>
    <link href="{{asset('public')}}/IndustrialRobots/dist/css/chunk-vendors.1b220e19.css" rel="stylesheet">
    <link href="{{asset('public')}}/IndustrialRobots/dist/css/app.40cacca1.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/IndustrialRobots/dist/css/618.fb73ccc8.css">
    <style>
       .loginpage[data-v-d4c41fd0]:after {
            background: url({{asset('public')}}/ccc.jpg) no-repeat;
            background-size: contain;
        }
        [data-v-d4c41fd0] .tabs-box {
            margin-top: 16px;
        }
        .loginpage .section-box .btnlogin[data-v-d4c41fd0] {
            background: #1989fa;
            color: #fff;
        }
    </style>
</head>
<body class="">
@include('alert-message')
<div id="app" data-v-app="">
    <div>
        <div class="loginpage" data-v-d4c41fd0="">
            <div class="van-tabs van-tabs--line tabs-box" data-v-d4c41fd0="">
                <div class="van-tabs__wrap">
                    <div role="tablist" class="van-tabs__nav van-tabs__nav--line" aria-orientation="horizontal"><!---->
                        <div id="van-tabs-1-0" role="tab" class="van-tab van-tab--line van-tab--active" tabindex="0"
                             aria-selected="true" aria-controls="van-tab-2"><span
                                class="van-tab__text van-tab__text--ellipsis">
                                <p data-v-d4c41fd0="" onclick="window.location.href='{{url('login')}}'">LOGIN</p></span>
                        </div>
                        <div id="van-tabs-1-1" role="tab" class="van-tab van-tab--line" tabindex="-1"
                             aria-selected="false" aria-controls="van-tab-3"><span
                                class="van-tab__text van-tab__text--ellipsis">
                                <p data-v-d4c41fd0="" onclick="window.location.href='{{url('register')}}'">Registro</p>
                            </span>
                        </div>
                        <div class="van-tabs__line"
                             style="transform: translateX(101.5px) translateX(-50%); transition-duration: 0.3s;"></div>
                        <!----></div>
                </div><!---->
                <form action="{{route('login.submit')}}" method="post">@csrf
                    <div class="van-tabs__content">
                        <div id="van-tab-2" role="tabpanel" class="van-tab__panel" tabindex="0"
                             aria-labelledby="van-tabs-1-0" data-v-d4c41fd0="" style="">
                            <section class="section-box" data-v-d4c41fd0="">
                                <div class="phonei" data-v-d4c41fd0=""><img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAYAAAByDd+UAAAAAXNSR0IArs4c6QAAA5tJREFUSEu9ll1oXEUUx///2eSyIitBBfXBUhEffDAh2ZndChFMi7SCWMEiljz4VUraUhV8kiKN4oOgoGC0RRQ/MSgt1I88KMJixNDcmc2ah0UoCDUUFfwKblbMdpkjU7PBj829dzV4YNmHOfP/zQzn/M8lMkatVtvabrcPk9wlItcC8CTPiMgMySmt9bdZpJglyVp7CMAzAPIb5DdITmit307TSwVaa48AeBKAAHhfRI739fVVW62WyuVy2wAcBrAjrCulJorF4ktJ0ERgHMc7SH4sIkLyfmPMG93EnHOPiMjTAM4D2GaMqW0ETQRaaxcADJN8TGsdbrlhWGunABwi+ZHWelfPwPn5+SGl1BcAvltZWblmbGzstyTg3Nzcpf39/UsALlpdXb16dHT0m275G94wjuODJF8A8IoxZl9aMYR159wHInIbgD3GmJM9Aa214QmPiMijpVLpqSxAa+2zAB4m+aDW+vlegUcBTIafMebxLEDn3IsicoDkAa318Z6A1Wp13Hv/VmgFY8zujMDTIlIGcIsx5pOegPV6/cpms3mO5Pkoiq4bGho6lwStVquD3vsayV8BXKG1Dv//iLQ+fIfkXQBmZmZmbp+cnPTdROr1etRsNj8lGYxgyhgTzKBrJAKdc1tEJPTiZSRPRFG0f3Bw8Oc/K83Ozl6Vz+ffJBncZsl7P1Iul3/8V8CwyVp7M4D3AFwC4CcA75Kseu/V2o32ACgA+B7AziSXCXqpXrrWXzeIyGsARrqdXEQ+U0rdp7X+Kq24MgGDSLDTWq22vd1u30rywngSkTMkPzTGfJ4G6qxnBmYVTMvrCqxUKgOFQmGviOwUkeuVUgURUSliYaj8QvLLYOC5XG56eHh4+e97/gIMz7awsPCQiBwVkYG00yatk1wWkSe01s+RDLP0QqwDK5VKvlAoTIvIHWtrNRF5naQTkWXv/fqmbiClQtFygGRRRO7pFBjJU41GY29n2qwDrbUnANwJoBHmmjEm2FoiJOmGcRyPAzhGMrTMSWNMaJ8/buicmxCRYwHmvd9eLpfdf3nOzl7n3IiIVEIPdwydi4uLF7darbMALvfej5fL5dQPoV4OY629G8A0gB+iKNpKa+0DAF4WkdOlUunGXsSy5sZxPEcyaO8LwFMAdgenKBaLwU02PeI4vpfkq8EiA/BrAFtCVXnvwzfJpodSKuiHIbAUgKsAok2ndBdsMY7jWZI3/R/AYPK/A/uRhjvdgr1QAAAAAElFTkSuQmCC"
                                        alt="" data-v-d4c41fd0="">
                                    <p data-v-d4c41fd0="">Telefone</p></div>
                                <div class="van-cell van-field input-box" data-v-d4c41fd0=""><!----><!---->
                                    <div class="van-cell__value van-field__value">
                                        <div class="van-field__body">
                                            <input type="number" inputmode="numeric"
                                                   id="van-field-4-input"
                                                   name="phone"
                                                   required
                                                   class="van-field__control"
                                                   placeholder="Digite o número de telefone de 11 dígitos">
                                            <!----><!----><!----></div><!----><!----></div><!----><!----></div>
                                <div class="phonei" data-v-d4c41fd0=""><img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAYAAAByDd+UAAAAAXNSR0IArs4c6QAAAmZJREFUSEvVlT9oVEEQxr/ZJzlFJaAg2lvYie+9WS4YkAgqnqlEI4hgKVEJFlaxEQQLrYIIaWzUSmKjoikiB+ECd2/XIsLD4op4CGp5TUA570b2uOAlucv9eTkw0+7M/Pab2dkhdGG5XG5/KpW6SkTjtVrtBBEdAvAHwDcABQBzYRi+I6Jap3TUycFaOykiDwAcbPKtAlAAmuO/VKvVW+l0OrtVzrbAYrGYKpfLLwFcaiRYAPDM87xF3/e/i4hnrT1KRGdF5CaAYwDcRaaZ+VE7aEugiJC1dg7ARQBlz/Ou+77/pl0SBzfGTBPRfaeciO6EYTjTyr8lMIqiKSJyAWURGdVax51K786jKLpGRM9df5VSI0EQfNoYtwlorR0Wka8AhgGMM/P7bmBrPtbaxyJyF8AiM5/qCDTG3AbwBMA8M5/vBeZ84zjet7q6WiKiA0qp40EQfG7O0UrhvIicA3CZmV0fezZjzCyAGwDuMfPDLYHGmB8ADovIEa31z55p/3r5QkReaa2vdAJW3Etj5l0ApB9goVA4rZT6CGCBmc90AjpIhZmH+oG5mOXl5b2VSuWpUuqt7/uvBw7s6acxxiRWuDOAKysre/rt4VrcxMSE+1vX2aY5bJQ0KaseLyJ5rfVIN4/G9fFXQmq9Qsy8TlQ7hYnGorFt6st4ZwKz2exud/uxsbGWZd9Whfl8Pu153ofGor0QhmFuY6+3FRhF0QwRTTUgs8w8OVCgMUYDqCtsLOilgQJd8jiOh0qlEmUymd+tRmdbS9rNbP7/QCISEXGLOInV92k3g++e+ckkpKbYJWYebc71F5TmWiz3TzndAAAAAElFTkSuQmCC"
                                        alt="" data-v-d4c41fd0="">
                                    <p data-v-d4c41fd0="">Senha</p></div>
                                <div class="van-cell van-field input-box" data-v-d4c41fd0=""><!----><!---->
                                    <div class="van-cell__value van-field__value">
                                        <div class="van-field__body"><input type="password" id="van-field-5-input"
                                                                            class="van-field__control"
                                                                            required
                                                                            name="password"
                                                                            placeholder="Por favor, digite a senha"><!---->
                                            <div class="van-field__right-icon"><img class="eyeimg"
                                                                                    onclick="showPassword()"
                                                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAAA1CAYAAAAOJMhOAAAAAXNSR0IArs4c6QAAAy9JREFUaEPtl0mojWEYx38XIWJBUkoWyphMGRYyR2yUnTmxkVwpc1iYMmaWEFGUhSQLoWSIDGGFRJShjJFEZOp/Pac+537j8X7f1e19Nrd73mf6///P+7znVFHPrKqe4cED+t8V9Qp5hQpmwI9cwYRnLucVykxZwQFeoYIJz1zOK5SZsoIDvEIFE565nFcoM2UFB8QptByYAWwCdhbcV1S5mcBq4CCwJMwpDtBroA3wC5gL7KhjUJOBQ0AD4BPQIiugNcBSCxIoMbK+jkBNA/YDjaz+diO5VjtxCulsn41dKVAqzQN+FAhsAbDOlFHZI8BU4GdWheQvUAIxOxB8BpgEvMsZVBNgVxmhe4FZUWBKDafpS+Omy6j5lT0FpgCX0gRX4NMJOAr0tVhNxDJTKjZdlndoOnAgkE1FpJ62oS6pC2sIzDHymgcSzgc2pymQFpA2yjlgQEjSFwbq8D/erVHABqBnSI23wFDgbhKoNICaAaeBwZbspYHTGg3GPwK22Kh8SCps57on42zRDCxTfzcwFugYqKseHsblTgLUFDgFjLQkb4BhxtRwYCvQo6zAF+AsoOVxC3gAfLT3TEqrwV6WcwzQqiz+mq3kG0AH4KL9ldszYAjwJApUEqDjwHgLfg+MAO4EkmnmtRwWA51jmPtuZ6V3JMxV4NcCJwx8yUcEaPm0sw+kkEj8GpYkDpDU+WxjJYY149cjmtb2Gw0sMgZTTlyNm9RcCVyJCeoCXADaGtj2gO5uLUtSSIypUW2eqym63AhoI8lOAhpRjU3LADHPgcbARPPbY29LUvpuBvwysK3SkUsqUn5+D+hqH3YH9H+YtQZeARpZARTjTixJoSxFNOvadLLHge0UlUNMD7LDPmV3M0vdv3xdAqoOjELkl8dA9YWBL7srgFUVowgEugSkNa3FIdO902WPM92J0kOpFR32aGfG6BLQbaA3oEdV2+hbim7uA9pgN4H+KfwTXVwC6gfoF+Ux4Hxi5T8Oersm2A+3yMcyZa4aN5eAstTNzdcDyo1aR4m9Qo6IzC2NVyg3ah0l9go5IjK3NF6h3Kh1lNgr5IjI3NJ4hXKj1lHi3xa/fzYaib0fAAAAAElFTkSuQmCC"
                                                                                    alt="" data-v-d4c41fd0=""></div><!---->
                                        </div><!----><!----></div><!----><!----></div>
                                <button class="btnlogin" type="submit" data-v-d4c41fd0="">Entrar</button>
                            </section>
                        </div>
                        <div id="van-tab-3" role="tabpanel" class="van-tab__panel" tabindex="-1"
                             aria-labelledby="van-tabs-1-1" data-v-d4c41fd0="" style="display: none;"><!----></div>
                    </div>
                </form>
            </div>
            <img class="imgto" src="{{asset('public')}}/IndustrialRobots/dist/img/ic_bg2.029866d8.png" alt="" data-v-d4c41fd0=""></div>
    </div><!---->
</div>

<script>
    function showPassword(){
        let password = document.querySelector('input[name="password"]')
        if (password.type == 'password'){
            password.type = 'text';
        }else {
            password.type = 'password';
        }
    }
</script>

</body>
</html>
