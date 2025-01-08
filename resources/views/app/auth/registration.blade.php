<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="{{asset('public')}}/IndustrialRobots/dist/favicon.ico">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
    <title>User-Register</title>
    <link href="{{asset('public')}}/IndustrialRobots/dist/css/chunk-vendors.1b220e19.css" rel="stylesheet">
    <link href="{{asset('public')}}/IndustrialRobots/dist/css/app.40cacca1.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/IndustrialRobots/dist/css/618.fb73ccc8.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/IndustrialRobots/dist/css/251.8f9f8f9c.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/IndustrialRobots/dist/css/990.27ce916f.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/IndustrialRobots/dist/css/348.77458ec3.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/IndustrialRobots/dist/css/222.258fab4b.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/IndustrialRobots/dist/css/532.da379610.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/IndustrialRobots/dist/css/891.dedc9d23.css">
    <style>
        .loginpage[data-v-d4c41fd0]:after {
            background: url({{asset('public')}}/ccc.jpg) no-repeat;
            background-size: contain;
        }
        .van-tabs__line {
            left: -40px;
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
<div id="app" data-v-app="">
    <div>
        <div class="loginpage" data-v-d4c41fd0="">
            <div class="van-tabs van-tabs--line tabs-box" data-v-d4c41fd0="">
                <div class="van-tabs__wrap">
                    <div role="tablist" class="van-tabs__nav van-tabs__nav--line" aria-orientation="horizontal"><!---->
                        <div id="van-tabs-10-0" role="tab" class="van-tab van-tab--line" tabindex="-1"
                             aria-selected="false" aria-controls="van-tab-11"><span
                                class="van-tab__text van-tab__text--ellipsis">
                                <p data-v-d4c41fd0="" onclick="window.location.href='{{url('login')}}'">Login</p></span>
                        </div>
                        <div id="van-tabs-10-1" role="tab" class="van-tab van-tab--line van-tab--active" tabindex="0"
                             aria-selected="true" aria-controls="van-tab-12"><span
                                class="van-tab__text van-tab__text--ellipsis">
                                <p data-v-d4c41fd0="" onclick="window.location.href='{{url('register')}}'">Registro</p></span>
                        </div>
                        <div class="van-tabs__line"
                             style="transform: translateX(304.5px) translateX(-50%); transition-duration: 0.3s;"></div>
                    </div>
                </div>
                <div class="van-tabs__content">
                    <div id="van-tab-11" role="tabpanel" class="van-tab__panel" tabindex="-1"
                         aria-labelledby="van-tabs-10-0" data-v-d4c41fd0="" style="display: none;">
                        <section class="section-box" data-v-d4c41fd0="">
                            <div class="phonei" data-v-d4c41fd0=""><img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAYAAAByDd+UAAAAAXNSR0IArs4c6QAAA5tJREFUSEu9ll1oXEUUx///2eSyIitBBfXBUhEffDAh2ZndChFMi7SCWMEiljz4VUraUhV8kiKN4oOgoGC0RRQ/MSgt1I88KMJixNDcmc2ah0UoCDUUFfwKblbMdpkjU7PBj829dzV4YNmHOfP/zQzn/M8lMkatVtvabrcPk9wlItcC8CTPiMgMySmt9bdZpJglyVp7CMAzAPIb5DdITmit307TSwVaa48AeBKAAHhfRI739fVVW62WyuVy2wAcBrAjrCulJorF4ktJ0ERgHMc7SH4sIkLyfmPMG93EnHOPiMjTAM4D2GaMqW0ETQRaaxcADJN8TGsdbrlhWGunABwi+ZHWelfPwPn5+SGl1BcAvltZWblmbGzstyTg3Nzcpf39/UsALlpdXb16dHT0m275G94wjuODJF8A8IoxZl9aMYR159wHInIbgD3GmJM9Aa214QmPiMijpVLpqSxAa+2zAB4m+aDW+vlegUcBTIafMebxLEDn3IsicoDkAa318Z6A1Wp13Hv/VmgFY8zujMDTIlIGcIsx5pOegPV6/cpms3mO5Pkoiq4bGho6lwStVquD3vsayV8BXKG1Dv//iLQ+fIfkXQBmZmZmbp+cnPTdROr1etRsNj8lGYxgyhgTzKBrJAKdc1tEJPTiZSRPRFG0f3Bw8Oc/K83Ozl6Vz+ffJBncZsl7P1Iul3/8V8CwyVp7M4D3AFwC4CcA75Kseu/V2o32ACgA+B7AziSXCXqpXrrWXzeIyGsARrqdXEQ+U0rdp7X+Kq24MgGDSLDTWq22vd1u30rywngSkTMkPzTGfJ4G6qxnBmYVTMvrCqxUKgOFQmGviOwUkeuVUgURUSliYaj8QvLLYOC5XG56eHh4+e97/gIMz7awsPCQiBwVkYG00yatk1wWkSe01s+RDLP0QqwDK5VKvlAoTIvIHWtrNRF5naQTkWXv/fqmbiClQtFygGRRRO7pFBjJU41GY29n2qwDrbUnANwJoBHmmjEm2FoiJOmGcRyPAzhGMrTMSWNMaJ8/buicmxCRYwHmvd9eLpfdf3nOzl7n3IiIVEIPdwydi4uLF7darbMALvfej5fL5dQPoV4OY629G8A0gB+iKNpKa+0DAF4WkdOlUunGXsSy5sZxPEcyaO8LwFMAdgenKBaLwU02PeI4vpfkq8EiA/BrAFtCVXnvwzfJpodSKuiHIbAUgKsAok2ndBdsMY7jWZI3/R/AYPK/A/uRhjvdgr1QAAAAAElFTkSuQmCC"
                                    alt="" data-v-d4c41fd0="">
                                <p data-v-d4c41fd0="">Telefone</p></div>
                            <div class="van-cell van-field input-box" data-v-d4c41fd0="">
                                <div class="van-cell__value van-field__value">
                                    <div class="van-field__body">
                                        <input type="tel" inputmode="numeric"
                                               id="van-field-13-input"
                                               class="van-field__control"
                                               placeholder="Digite o número de telefone de 11 dígitos">
                                    </div>
                                </div>
                            </div>
                            <div class="phonei" data-v-d4c41fd0=""><img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAYAAAByDd+UAAAAAXNSR0IArs4c6QAAAmZJREFUSEvVlT9oVEEQxr/ZJzlFJaAg2lvYie+9WS4YkAgqnqlEI4hgKVEJFlaxEQQLrYIIaWzUSmKjoikiB+ECd2/XIsLD4op4CGp5TUA570b2uOAlucv9eTkw0+7M/Pab2dkhdGG5XG5/KpW6SkTjtVrtBBEdAvAHwDcABQBzYRi+I6Jap3TUycFaOykiDwAcbPKtAlAAmuO/VKvVW+l0OrtVzrbAYrGYKpfLLwFcaiRYAPDM87xF3/e/i4hnrT1KRGdF5CaAYwDcRaaZ+VE7aEugiJC1dg7ARQBlz/Ou+77/pl0SBzfGTBPRfaeciO6EYTjTyr8lMIqiKSJyAWURGdVax51K786jKLpGRM9df5VSI0EQfNoYtwlorR0Wka8AhgGMM/P7bmBrPtbaxyJyF8AiM5/qCDTG3AbwBMA8M5/vBeZ84zjet7q6WiKiA0qp40EQfG7O0UrhvIicA3CZmV0fezZjzCyAGwDuMfPDLYHGmB8ADovIEa31z55p/3r5QkReaa2vdAJW3Etj5l0ApB9goVA4rZT6CGCBmc90AjpIhZmH+oG5mOXl5b2VSuWpUuqt7/uvBw7s6acxxiRWuDOAKysre/rt4VrcxMSE+1vX2aY5bJQ0KaseLyJ5rfVIN4/G9fFXQmq9Qsy8TlQ7hYnGorFt6st4ZwKz2exud/uxsbGWZd9Whfl8Pu153ofGor0QhmFuY6+3FRhF0QwRTTUgs8w8OVCgMUYDqCtsLOilgQJd8jiOh0qlEmUymd+tRmdbS9rNbP7/QCISEXGLOInV92k3g++e+ckkpKbYJWYebc71F5TmWiz3TzndAAAAAElFTkSuQmCC"
                                    alt="" data-v-d4c41fd0="">
                                <p data-v-d4c41fd0="">Senha</p></div>
                            <div class="van-cell van-field input-box" data-v-d4c41fd0="">
                                <div class="van-cell__value van-field__value">
                                    <div class="van-field__body">
                                        <input type="password" id="van-field-14-input"
                                               class="van-field__control"
                                               placeholder="Por favor, digite a senha">
                                        <div class="van-field__right-icon">
                                            <img class="eyeimg"
                                                 src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAAA1CAYAAAAOJMhOAAAAAXNSR0IArs4c6QAAAy9JREFUaEPtl0mojWEYx38XIWJBUkoWyphMGRYyR2yUnTmxkVwpc1iYMmaWEFGUhSQLoWSIDGGFRJShjJFEZOp/Pac+537j8X7f1e19Nrd73mf6///P+7znVFHPrKqe4cED+t8V9Qp5hQpmwI9cwYRnLucVykxZwQFeoYIJz1zOK5SZsoIDvEIFE565nFcoM2UFB8QptByYAWwCdhbcV1S5mcBq4CCwJMwpDtBroA3wC5gL7KhjUJOBQ0AD4BPQIiugNcBSCxIoMbK+jkBNA/YDjaz+diO5VjtxCulsn41dKVAqzQN+FAhsAbDOlFHZI8BU4GdWheQvUAIxOxB8BpgEvMsZVBNgVxmhe4FZUWBKDafpS+Omy6j5lT0FpgCX0gRX4NMJOAr0tVhNxDJTKjZdlndoOnAgkE1FpJ62oS6pC2sIzDHymgcSzgc2pymQFpA2yjlgQEjSFwbq8D/erVHABqBnSI23wFDgbhKoNICaAaeBwZbspYHTGg3GPwK22Kh8SCps57on42zRDCxTfzcwFugYqKseHsblTgLUFDgFjLQkb4BhxtRwYCvQo6zAF+AsoOVxC3gAfLT3TEqrwV6WcwzQqiz+mq3kG0AH4KL9ldszYAjwJApUEqDjwHgLfg+MAO4EkmnmtRwWA51jmPtuZ6V3JMxV4NcCJwx8yUcEaPm0sw+kkEj8GpYkDpDU+WxjJYY149cjmtb2Gw0sMgZTTlyNm9RcCVyJCeoCXADaGtj2gO5uLUtSSIypUW2eqym63AhoI8lOAhpRjU3LADHPgcbARPPbY29LUvpuBvwysK3SkUsqUn5+D+hqH3YH9H+YtQZeARpZARTjTixJoSxFNOvadLLHge0UlUNMD7LDPmV3M0vdv3xdAqoOjELkl8dA9YWBL7srgFUVowgEugSkNa3FIdO902WPM92J0kOpFR32aGfG6BLQbaA3oEdV2+hbim7uA9pgN4H+KfwTXVwC6gfoF+Ux4Hxi5T8Oersm2A+3yMcyZa4aN5eAstTNzdcDyo1aR4m9Qo6IzC2NVyg3ah0l9go5IjK3NF6h3Kh1lNgr5IjI3NJ4hXKj1lHi3xa/fzYaib0fAAAAAElFTkSuQmCC"
                                                 alt="" data-v-d4c41fd0="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btnlogin" data-v-d4c41fd0="">Login</button>
                        </section>
                    </div>
                    <form action="{{url('register')}}" id="reg" method="post">@csrf
                        <div id="van-tab-12" role="tabpanel" class="van-tab__panel" tabindex="0"
                             aria-labelledby="van-tabs-10-1" data-v-d4c41fd0="" style="">
                            <section class="section-box" data-v-d4c41fd0="">
                                <div class="phonei" data-v-d4c41fd0=""><img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAYAAAByDd+UAAAAAXNSR0IArs4c6QAAA5tJREFUSEu9ll1oXEUUx///2eSyIitBBfXBUhEffDAh2ZndChFMi7SCWMEiljz4VUraUhV8kiKN4oOgoGC0RRQ/MSgt1I88KMJixNDcmc2ah0UoCDUUFfwKblbMdpkjU7PBj829dzV4YNmHOfP/zQzn/M8lMkatVtvabrcPk9wlItcC8CTPiMgMySmt9bdZpJglyVp7CMAzAPIb5DdITmit307TSwVaa48AeBKAAHhfRI739fVVW62WyuVy2wAcBrAjrCulJorF4ktJ0ERgHMc7SH4sIkLyfmPMG93EnHOPiMjTAM4D2GaMqW0ETQRaaxcADJN8TGsdbrlhWGunABwi+ZHWelfPwPn5+SGl1BcAvltZWblmbGzstyTg3Nzcpf39/UsALlpdXb16dHT0m275G94wjuODJF8A8IoxZl9aMYR159wHInIbgD3GmJM9Aa214QmPiMijpVLpqSxAa+2zAB4m+aDW+vlegUcBTIafMebxLEDn3IsicoDkAa318Z6A1Wp13Hv/VmgFY8zujMDTIlIGcIsx5pOegPV6/cpms3mO5Pkoiq4bGho6lwStVquD3vsayV8BXKG1Dv//iLQ+fIfkXQBmZmZmbp+cnPTdROr1etRsNj8lGYxgyhgTzKBrJAKdc1tEJPTiZSRPRFG0f3Bw8Oc/K83Ozl6Vz+ffJBncZsl7P1Iul3/8V8CwyVp7M4D3AFwC4CcA75Kseu/V2o32ACgA+B7AziSXCXqpXrrWXzeIyGsARrqdXEQ+U0rdp7X+Kq24MgGDSLDTWq22vd1u30rywngSkTMkPzTGfJ4G6qxnBmYVTMvrCqxUKgOFQmGviOwUkeuVUgURUSliYaj8QvLLYOC5XG56eHh4+e97/gIMz7awsPCQiBwVkYG00yatk1wWkSe01s+RDLP0QqwDK5VKvlAoTIvIHWtrNRF5naQTkWXv/fqmbiClQtFygGRRRO7pFBjJU41GY29n2qwDrbUnANwJoBHmmjEm2FoiJOmGcRyPAzhGMrTMSWNMaJ8/buicmxCRYwHmvd9eLpfdf3nOzl7n3IiIVEIPdwydi4uLF7darbMALvfej5fL5dQPoV4OY629G8A0gB+iKNpKa+0DAF4WkdOlUunGXsSy5sZxPEcyaO8LwFMAdgenKBaLwU02PeI4vpfkq8EiA/BrAFtCVXnvwzfJpodSKuiHIbAUgKsAok2ndBdsMY7jWZI3/R/AYPK/A/uRhjvdgr1QAAAAAElFTkSuQmCC"
                                        alt="" data-v-d4c41fd0="">
                                    <p data-v-d4c41fd0="">Telefone</p></div>
                                <div class="van-cell van-field input-box" data-v-d4c41fd0=""><!----><!---->
                                    <div class="van-cell__value van-field__value">
                                        <div class="van-field__body">
                                            <input type="number" inputmode="numeric"
                                                   name="phone"
                                                   required
                                                   id="van-field-15-input"
                                                   class="van-field__control"
                                                   placeholder="Digite o número de telefone de 11 dígitos">
                                        </div>
                                    </div>
                                </div>
                                <div class="phonei" data-v-d4c41fd0=""><img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAYAAAByDd+UAAAAAXNSR0IArs4c6QAAAmZJREFUSEvVlT9oVEEQxr/ZJzlFJaAg2lvYie+9WS4YkAgqnqlEI4hgKVEJFlaxEQQLrYIIaWzUSmKjoikiB+ECd2/XIsLD4op4CGp5TUA570b2uOAlucv9eTkw0+7M/Pab2dkhdGG5XG5/KpW6SkTjtVrtBBEdAvAHwDcABQBzYRi+I6Jap3TUycFaOykiDwAcbPKtAlAAmuO/VKvVW+l0OrtVzrbAYrGYKpfLLwFcaiRYAPDM87xF3/e/i4hnrT1KRGdF5CaAYwDcRaaZ+VE7aEugiJC1dg7ARQBlz/Ou+77/pl0SBzfGTBPRfaeciO6EYTjTyr8lMIqiKSJyAWURGdVax51K786jKLpGRM9df5VSI0EQfNoYtwlorR0Wka8AhgGMM/P7bmBrPtbaxyJyF8AiM5/qCDTG3AbwBMA8M5/vBeZ84zjet7q6WiKiA0qp40EQfG7O0UrhvIicA3CZmV0fezZjzCyAGwDuMfPDLYHGmB8ADovIEa31z55p/3r5QkReaa2vdAJW3Etj5l0ApB9goVA4rZT6CGCBmc90AjpIhZmH+oG5mOXl5b2VSuWpUuqt7/uvBw7s6acxxiRWuDOAKysre/rt4VrcxMSE+1vX2aY5bJQ0KaseLyJ5rfVIN4/G9fFXQmq9Qsy8TlQ7hYnGorFt6st4ZwKz2exud/uxsbGWZd9Whfl8Pu153ofGor0QhmFuY6+3FRhF0QwRTTUgs8w8OVCgMUYDqCtsLOilgQJd8jiOh0qlEmUymd+tRmdbS9rNbP7/QCISEXGLOInV92k3g++e+ckkpKbYJWYebc71F5TmWiz3TzndAAAAAElFTkSuQmCC"
                                        alt="" data-v-d4c41fd0="">
                                    <p data-v-d4c41fd0="">Senha</p></div>
                                <div class="van-cell van-field input-box" data-v-d4c41fd0=""><!----><!---->
                                    <div class="van-cell__value van-field__value">
                                        <div class="van-field__body"><input type="password" id="van-field-16-input"
                                                                            name="password"
                                                                            required
                                                                            class="van-field__control"
                                                                            placeholder="Por favor, digite a senha"><!---->
                                            <div class="van-field__right-icon"><img class="eyeimg"
                                                                                    onclick="showPassword()"
                                                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADQAAAA1CAYAAAAOJMhOAAAAAXNSR0IArs4c6QAAAy9JREFUaEPtl0mojWEYx38XIWJBUkoWyphMGRYyR2yUnTmxkVwpc1iYMmaWEFGUhSQLoWSIDGGFRJShjJFEZOp/Pac+537j8X7f1e19Nrd73mf6///P+7znVFHPrKqe4cED+t8V9Qp5hQpmwI9cwYRnLucVykxZwQFeoYIJz1zOK5SZsoIDvEIFE565nFcoM2UFB8QptByYAWwCdhbcV1S5mcBq4CCwJMwpDtBroA3wC5gL7KhjUJOBQ0AD4BPQIiugNcBSCxIoMbK+jkBNA/YDjaz+diO5VjtxCulsn41dKVAqzQN+FAhsAbDOlFHZI8BU4GdWheQvUAIxOxB8BpgEvMsZVBNgVxmhe4FZUWBKDafpS+Omy6j5lT0FpgCX0gRX4NMJOAr0tVhNxDJTKjZdlndoOnAgkE1FpJ62oS6pC2sIzDHymgcSzgc2pymQFpA2yjlgQEjSFwbq8D/erVHABqBnSI23wFDgbhKoNICaAaeBwZbspYHTGg3GPwK22Kh8SCps57on42zRDCxTfzcwFugYqKseHsblTgLUFDgFjLQkb4BhxtRwYCvQo6zAF+AsoOVxC3gAfLT3TEqrwV6WcwzQqiz+mq3kG0AH4KL9ldszYAjwJApUEqDjwHgLfg+MAO4EkmnmtRwWA51jmPtuZ6V3JMxV4NcCJwx8yUcEaPm0sw+kkEj8GpYkDpDU+WxjJYY149cjmtb2Gw0sMgZTTlyNm9RcCVyJCeoCXADaGtj2gO5uLUtSSIypUW2eqym63AhoI8lOAhpRjU3LADHPgcbARPPbY29LUvpuBvwysK3SkUsqUn5+D+hqH3YH9H+YtQZeARpZARTjTixJoSxFNOvadLLHge0UlUNMD7LDPmV3M0vdv3xdAqoOjELkl8dA9YWBL7srgFUVowgEugSkNa3FIdO902WPM92J0kOpFR32aGfG6BLQbaA3oEdV2+hbim7uA9pgN4H+KfwTXVwC6gfoF+Ux4Hxi5T8Oersm2A+3yMcyZa4aN5eAstTNzdcDyo1aR4m9Qo6IzC2NVyg3ah0l9go5IjK3NF6h3Kh1lNgr5IjI3NJ4hXKj1lHi3xa/fzYaib0fAAAAAElFTkSuQmCC"
                                                                                    alt="" data-v-d4c41fd0=""></div><!---->
                                        </div><!----><!----></div><!----><!----></div>
                                <div class="phonei" data-v-d4c41fd0=""><img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAYAAAByDd+UAAAAAXNSR0IArs4c6QAAA9xJREFUSEvtVk1oXFUU/s59LzNRS7X4VzdKKCGmYGhm7n1vUihdCFItFVwYBF1YFaRglaKl/tSC9bf+UH8Qa1V0I0gEF4IuBIXWJn3z7p3EZNFWCkbcVOii2tipTubdIze8iZlxJjMT6s4Db/HePff77jnvnnM+QpcWRVG/53kfALAAHlJK/dQNBHXqXCwWr/Y870lm3gkgm+67yMxv9fb2vjo0NHSuE6y2hFrrASLawcwPAljFzOeFEM9ZawURPQtgNYDzAD5MkuRQoVA4vRzxIqExpieTyawql8s39PT0DFhrQwC3AdgAgIjoDwDvCyEO5HK5sw50fHz8umw2u4eZHwZwBQAGUALwTZIksed5p5IkOROG4QUiStyeRUKt9ZyLoOF0DmCKiD7NZDIft0rbzMzMmkqlsp2Z7wUwvBTX4THzXBAELhN1hA68DOAIEZ1m5lK1Wj06MjLycyf/puYzOTl5U5Ikm5k5T0T9ADYDuFwptRDc0giZiE5KKdd3Q9DO1xhzgpkH/ydsl6mO1/+TlGqtdwHY5fv+rcPDw3V1eMkJU7I3AMxZazeEYTi7NPxLSmiMeZSZ32Rm1xS2BEEw0ZjrrgnTHvo6gENSymINUGv9CIC3AbgucruU8lizH9s1YRRFBc/z3MldyraEYXjcGON667tEdMFauzUIgqOtbtFyhG7c/KiUGmySlseZ+bW0SR8mIvd+0fO8rblc7shyV1ZrfRLAgFJKNHaa3wD8qZRa2wxAa70bwIG0O5WttdvCMPyuXX1orX8F0KuUuqqRcBzARgDrWg3VOI6fSKO7LwiCb9uRTU9P91UqFTegjyulHHZdL30awIvuUUrtbQfWyboxZj8zu5m5VynlsP8hjON4LRG508wT0c1SyjOdgLbyiaLoet/3TzFzlojW1fDqJr4x5iVmfgrAV1LKbUTkRtaKzBjzBTPfxcyvBEHgMBesjnBiYuIy3/cNEa0nouellPtWwqa1fgbAC0R0AoCSUro5+29C96VUKg1aa13dXQlgj1LKlUPHFsfxY0R0EMDvQoiN+XzelcWiNRVRxWJxkxDi61RyHJRS7q5pklbMY2NjXl9f38sA3E123eeOfD7/faN/S9VWKpUK1tovAVwL4FiSJA+0UmRTU1P98/PzHxHRJgBnhRB35vP5qNnhlpWJxpgbmfkzACMA/gJwWAjxXi1NxphbrLU7iMhJyIyrNyK6R0r5S6tMtNWlaap2MvM+IlqTAjmZ6PZe496Z+RwR7Z+dnX1ndHR0QQ6umLC2MYqi1b7v38/Md6da1S39QESfV6vVTwqFghPDbe1v8mv2LCpiX+YAAAAASUVORK5CYII="
                                        alt="" data-v-d4c41fd0="">
                                    <p style="display: none;" data-v-d4c41fd0="">Verifique o Codigo</p></div>
                                <div style="display: none;" class="van-cell van-field input-box btnbox" data-v-d4c41fd0=""><!----><!---->
                                    <div class="van-cell__value van-field__value">
                                        <div class="van-field__body"><input type="text" id="van-field-17-input"
                                                                            class="van-field__control"
                                                                            name="captcha"
                                                                            required
                                                                            value="{{rand(0000, 9999)}}"
                                                                            placeholder="Enter SMS OTP Code"><!---->
                                            <div class="van-field__right-icon">
                                                <style>
                                                    .codeGet {
                                                        width: 65px !important;
                                                        background: #1989fa;
                                                        text-align: center;
                                                        border-radius: 50px;
                                                        color: #fff;
                                                        font-size: 12px;
                                                    }
                                                </style>
                                                <!--<div class="van-image codeGet" data-v-d4c41fd0="" onclick="verifyPhoneNumber()">-->
                                                <!--    Get Code-->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="display: none;" class="phonei" data-v-d4c41fd0=""><img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAYAAAByDd+UAAAAAXNSR0IArs4c6QAAAyZJREFUSEvlls9rXFUUx7/fO/OchTD4Kxt10awMSE0m8+57GG0xiHVVKC5qxVJDpQvdiIoUbP8BxVpUhNqKiki16Q/URcCFQrGNM/feTJKNtURctJWCYBnopJBM5h65YiRm5iUzVbKob3t+fO455/vOvcQGf9xgHv7nQOfcZhF5XUS2kbwT6L4jItIi+TPJ41EUHRocHJwP48tsqTFmN8mPSHoR+Q7A1R7nnQdQArCZ5E/e+21JklzuCJyZmUmazeY5ABHJWe/99uDcI/BPd2PMZySfFRE3Pz//cEegMeYsyXC6QwAOAKiLyDNJknzbLXR8fPy2/v7+t0m+KCLXANxNcqwNWKlU7s/lcpdE5L0kSV6qVqtblFLjAO7x3h9M0/SN9aC1Wu3eVqt1EsAIgBOFQuGFhYWFiwBm2oDGmO0kvwawQ2v9VUgeEiwtLZ0kOSIiZ4rF4tjAwMD1TmBjzFaSJ0JFAPZrrQ8HP+fcGRHZ0gZ0zj0nIp8AeFRrfX45qXMuEpHDf7XoolLqqXK5fGEltFqtvqyUCh34XSm1s1wuf79sN8YcU0rt7VThGMmPvfcjaZr+sLoKa+0eETlCcgnAXq31qdnZ2dsXFxc/BLALwDmSO+M4/oeqnXNHRWRfG3B6enpTs9k8UCwWX8lqm7U2COo0gE0A3gfwGIAHSb4L4LU4jpurD5oJXE8Qy/bJycm78vn8cZJPAgg/9T6t9edZ8W3Aubm5Qr1ev69TQKPR+G10dLSx2iYiylr7fD6fPz88PPzjWodtAxpjviD5dEaQ0Vqn3Vbfya8N6JxLReTxTs7e+6k0Tb/5T4H/Jlk3sX9XaK0NG+GBDkESVpvW+tNuEq7n45w7Fn4jWmtDwizgO2spbz3ISru19ksAj2zIjT8xMVHo6+u7ErZkJnBqauohpdSlUqlU76WSDIW+KiJvAdiTCXTOXfPeX42iaEepVJq7WagxJqzKD8JN0Wg0sltaq9V2tVqtMN8gnrMAer2AIwDDYeUBuBBF0RNDQ0O/rjnDSqVSzuVy4U0zSvKOXt80AH4JbxqSb8ZxfCN0aUNEs3Ictz7wD3cYaV7qOaa+AAAAAElFTkSuQmCC"
                                        alt="" data-v-d4c41fd0="">
                                    <p data-v-d4c41fd0="">Código de convite</p></div>
                                <div class="van-cell van-field input-box" data-v-d4c41fd0="">
                                    <div class="van-cell__value van-field__value">
                                        <div class="van-field__body">
                                            <input type="text" id="van-field-18-input"
                                                   class="van-field__control"
                                                   name="ref_by"
                                                   required
                                                   value="{{isset($ref_by) && !empty($ref_by) && $ref_by != null ? $ref_by : \App\Models\User::select('ref_id')->first()->ref_id}}"
                                                   placeholder="Please enter the invitation code">
                                        </div>
                                    </div>
                                </div>
                                <button class="btnlogin" data-v-d4c41fd0="" type="button" onclick="submitForRegistration()">Register</button>
                                <div class="agreeto" data-v-d4c41fd0="">
                                    <p data-v-d4c41fd0=""><input type="radio" id="shb">  <label for='shb'>Concorde com o Contrato de Registro do Usuário</label> </p></div>
                                <p class="forgoti" data-v-d4c41fd0="" onclick='window.location.href="{{route('user.download.apk')}}"'> </p></section>
                        </div>
                    </form>
                </div>
            </div>
            <img class="imgto" src="{{asset('public')}}/IndustrialRobots/dist/img/ic_bg2.029866d8.png" alt="" data-v-d4c41fd0=""></div>
    </div><!----></div>
<input type="hidden" name="_token" value="{{csrf_token()}}">
@include('alert-message')
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


<script>
    var otp = '{{session()->get('otp')}}'

    function verifyPhoneNumber(){
        let phone = document.querySelector('input[name="phone"]').value;
        if (phone == ''){
            message('Enter Phone Number');
            return 0;
        }

        if (phone.length != 10){
            message('Phone Number 10 Must');
            return 0;
        }

        document.querySelector('.codeGet').innerHTML = 'Sending..'
        document.querySelector('.codeGet').setAttribute('onclick', '')

        var URL = '{{url('verify/phoneNumber')}}'
        fetch(URL, {
            method: 'post',
            credentials: "same-origin",
            headers: {
                "Content-Type": "application/json",
                "X-Requested-With": "XMLHttpRequest",
                "X-CSRF-Token": document.querySelector('input[name="_token"]').value
            },
            body: JSON.stringify({phone: phone})
        }).then(function(response){
            return response.json();
        }).then(function(res){
            otp = res.otp;
            document.querySelector('.codeGet').innerHTML = 'Sent'
            setTimeout(function (){
                document.querySelector('.codeGet').innerHTML = 'Get Code';
                document.querySelector('.codeGet').setAttribute('onclick', 'verifyPhoneNumber()')
            }, 1000 * 60)
        })
            .catch(function(error){
                console.log(error)
            });
    }
</script>

<script>
    function submitForRegistration()
    {
        let captcha = document.querySelector('input[name="captcha"]').value;
        // if (captcha != otp){
        //     message('Invalid OTP');
        //     return true;
        // }
        document.getElementById('reg').submit()
    }
</script>
</body>
</html>
