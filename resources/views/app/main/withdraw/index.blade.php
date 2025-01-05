<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
    <title>{{setting('site_name')}}</title>
    <link href="{{asset('public')}}/IndustrialRobots/dist/css/chunk-vendors.1b220e19.css" rel="stylesheet">
    <link href="{{asset('public')}}/IndustrialRobots/dist/css/app.40cacca1.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/IndustrialRobots/dist/css/800.6d4723c4.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/IndustrialRobots/dist/css/532.da379610.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/IndustrialRobots/dist/css/222.258fab4b.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/IndustrialRobots/dist/css/88.4d2ecb2d.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/IndustrialRobots/dist/css/506.d94d4718.css">
    <style>
        .withdrawpage[data-v-6363e7b3]:after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
            width: 100vw;
            height: 51.333333vw;
            background: url({{asset('public')}}/IndustrialRobots/dist/img/1.c0ba8dc8.png) no-repeat;
            background-size: cover;
            filter: hue-rotate(45deg);
        }
        .withdrawpage .section-box .totalass[data-v-6363e7b3] {

            filter: hue-rotate(45deg);
        }
        .withdrawpage .section-box .btnposit[data-v-6363e7b3] {
            background: #1989fa;

            color: #fff;
            font-weight: 600;
        }
        .withdrawpage .section-box .infobank .ifsc img[data-v-6363e7b3] {
            filter: invert(1);
        }
        .withdrawpage[data-v-6363e7b3]:after {
            display: none;
        }
        .withdrawpage[data-v-6363e7b3] {
            padding: 0 4vw 1.333333vw;
        }
        .withdrawpage .section-box .totalass[data-v-6363e7b3] {
            background: transparent;
        }
    </style>
</head>
<body class="">
<div id="app" data-v-app="">
    @include('alert-message')
    <form action="{{route('user.withdraw.request')}}" method="post">
        @csrf
        <div>
            <div class="withdrawpage" data-v-6363e7b3="">
                <div class="van-nav-bar van-hairline--bottom transparent" data-v-6363e7b3="">
                    <div class="van-nav-bar__content">
                        <div class="van-nav-bar__left van-haptics-feedback" onclick="window.location.href='{{route('mine')}}'"><i
                                class="van-badge__wrapper van-icon van-icon-arrow-left van-nav-bar__arrow"><!----><!---->
                                <!----></i><!----></div>
                        <div class="van-nav-bar__title van-ellipsis">Withdraw</div>
                        <div class="van-nav-bar__right van-haptics-feedback"><img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAsCAYAAAATmipGAAAAAXNSR0IArs4c6QAAAZ5JREFUWEftmb9OwzAQxr9LaRFMaa+ZeAjYykPwBkiMTPyZYGFmgQnYGJF4A96BssFDMKWmmaigtIccGhEhgWtI2hg5QxT5TufvfhfbiU34vBrMvC0INomwCmApZ5vl40AED4TxtVLqEsCr7pz0jZlXhIIbAtZmqcjUlwD3JOMNpdSjFtpotaO7qonMktBin3pxh5h5BxRcTAwvEByORsOrJEkSU8Zl2MMwDGu1+hYIJwAW0z5kvEstbneJqPPRgH2l4vMyBNjGZI72QDhLZQm6xO3oORs4o7dhc14kvyaSkl2o9yftAy1UMifVi9PBVZUrr80LLaIqnmgRFPMxPNG5Em0yHxPogIjqRQoRkaFATvtKHX0X16r0+QWhSKHZRK568XIhQp0hWgLFqUNalX7qqCU4eqFFQ/VEPVH9F/pvPpx/O+FPs0SaXhWrwfTHJXTw0xJZqFBniJqyLtNuVfoyhZhie6EmQrZ2T9SWmMnfEzURsrV7orbETP7OEnVjI7fF0S0R1tMyVHpr3JXDBmeOb3TFXTkQy2aJSh8xvgNeM1tY9oxEwwAAAABJRU5ErkJggg=="
                                alt="" data-v-6363e7b3=""></div>
                    </div>
                </div>
                <section class="section-box" data-v-6363e7b3="">
                    <div class="totalass" data-v-6363e7b3=""><p class="aomouti" data-v-6363e7b3="">{{price(auth()->user()->balance)}}</p><span
                            data-v-6363e7b3="">Total assets</span></div>
                    <p class="withunt" data-v-6363e7b3="">Withdraw amount</p>
                    <div class="van-cell van-field input-box" data-v-6363e7b3=""><!----><!---->
                        <div class="van-cell__value van-field__value">
                            <div class="van-field__body"><input type="number" inputmode="numeric" id="van-field-2-input"
                                                                class="van-field__control"
                                                                name="amount"
                                                                placeholder="Enter the withdraw amount you need"><!---->
                                <!----><!----></div><!----><!----></div><!----><!----></div>
                    <div class="restbox flex" data-v-6363e7b3=""><p data-v-6363e7b3="">Withdraw account</p><span
                            data-v-6363e7b3="" onclick="window.location.href='{{route('user.card')}}'">Add</span></div>
                    <div class="infobank flex" data-v-6363e7b3="">
                        <div class="ifsc" data-v-6363e7b3=""><img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAAXNSR0IArs4c6QAABBNJREFUWEfVmFuIG1UYgL9/0nS33S1eWheR4oIWLMjSNZ0ka5UWX6zSWhFFBUF6WeyDFVR8sPVChVqKQkHtg9bi/ckHUSpuqUixl3U3M1YKYhVbtaIiCiK4brTZ5Jc5Oxkn6SaTSbohnaeQ+c/5v/nv5wgd/kiH83FhAeoYi0nwKHArcBUwt00WPgt8B4xQZLcM8VNZb2BBPc5GiuwB5rUJqpaaPAm2SIrXPAEDqC7DwF7Ud7nyF8IXwGSbYOejXIewwOgTFHhAbPaJHqOfJF8jdCOUKLGTKXbKCvJtgjNqdJR5zGEbFttQLJR/KLBU1OElYIsP86ykebKdYNW61GEH8IT//x4P8FtgCfA3Qp/YbXPrjHZQF8/dvwE9wCkP0MugJJCTNNko6+kJesjTTxeTDHJGpuPlvD7qMA5kgIIHWFZwWNKsqqVJR1lCkl0Ia1G6fLlfgBeYYLfcxNT5olSHT4GVJl8aAVSXLMoB4OIaEAcQ1olNIfzeBP5c+uuCW+QlxZmKdXEA/Zj4Bljsb+L9/ghYBNwVqpsVCaZHuIRuvgSuiLSsskMyPFWWi2VBddgMvOwv3o9wZ9lSOs4yLI4CvcAEBfrK5UkdrgFOlmttXUjhQ7G5rTlAl3dQ7jOLi1wrQ3xV5Y5wmbpR0hwLFOW4G2EowoJ5hFfE5sfmAB3eB243iwsslBX8UQXo1SyvdnkdYLXYHIx0aYRAPBe7PI/ymNlT2SgZXg++dDsWa/jMLwne31dL2jT9lp64gCkU14+lCeBhhA84yyKSbAfu8eHHJMP1LZH5i2MBGsM5Zsp5sI7yPCVWStZ8SMWjR1lAF6uxgtpZKVAkzxQj4d4fC1BHuZQkbwFr6gBOYvGILGfvOYA5vMxfG2HZtyXN/bGTRF0uQjkCDIQUfO+XD69X2n7PnH4tbBWbXRVJNMuA/5cY4QcshiXFJ8GXHqKXXh4HtgIWUEJYJbapjdOhOVsu1lEGSHLCT45fSWLLID/P5Cp1eQjlRT9ZDkumdk9vJIkaisGKucxi80zxFVjJc67DcWDQFKMiV4bPFY1AVYRFI71Yc4wg3GIWJuiTFL/XU6QuT6M841txnWTYHxcsVpKowxiQRfhXbLqjlKnDJmCfkSuxXrK8GSh0zbzphUF54Ahv11yrU4cckAbykmZ+JODnrKfkdxmLDbKcN0KAwyiv1tyjmWEhPNUCz0UBoiwL6p2yQTIhQIcbwGR/edCt3K6ZcUtd3kO5IxJsJoEiN8sQH1cE/jgLSXDZOeLNDqzqMkCJgwiXx4JU3iXNva2cVarLTM1Dkx6imx6WUiLREOQc/hSb0w3J1hGqPjR1/LGzww/unX71YRp6J18eBcW0k6/fAshOvsBstTTM1voL6456tqzQyr7/Acu1+j4b5AcqAAAAAElFTkSuQmCC"
                                alt="" data-v-6363e7b3="">
                            <p data-v-6363e7b3="">Bank code</p></div>
                        <p class="righti" data-v-6363e7b3="">{{\App\Models\PaymentMethod::where('id', auth()->user()->gateway_method)->first()->name}}</p></div>
                    <div class="infobank flex" data-v-6363e7b3="">
                        <div class="ifsc" data-v-6363e7b3=""><img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAAXNSR0IArs4c6QAABXRJREFUWEe9mGtsVFUQgL/ZbUGhvEQwGgwQIUZ5t/cuFWwKEjAS/KPRkFTqq4IJhvhDifwBghpAfxkSEtEWgw3BV/xh0IAaCPIoe3fRCgiKPDSaKGhQXkKhO+aePd1sy93uvVtg/u3eMzPfPXfOzJwRShRdTow51AKzUaqBUQiDUGPwNMoRhD0on+OyQ8Q+iehPIq5Ht1FGPxpQFgMjQ+ofRVnNCZrkcdpD6phlkQA1yUSEDcC4ACcXgFPGojIE6BOw5lugXlwOhIUMDagec1HWI9yUZ9xDeA9hK5Uc7fiMqghJRhNjFvA0UJmn47+ID/lJGMhQgOpRD6wHYtboz8AicfkijBNN8jDCW7mQUNqJUydVfFBMvyigpqkhw9dAuTGmfEpf6mUM54oZz3+uKQaQoRlhjv2/jRi1UkVLd3a6BdSd9KMXPyAMs0Y24VAnQiYKXMdac8AqzK49Yv87jjBWHPzPHijdA3q8Abxsj1Oak0yV2VwqBS4HuZub6UULynhr91VxWBoZUPcymBi/AH2BK7RTJdV83xO4HGSaKjLsBeLAGc4xXKbzT5DtgjuoKRahJrB9aRaXedcCLgfp8SHwmP39vLi8HQ3QYzuYSuHL/eKy65oCpnnAHj7f7FZxeTA0oKYoRzkL9Ab+wmFoqaWq0EupEifF38AA4Dyb6S/Lrz58gZ9YPe4GDlvjBd+upzuq+V+pjJEyiRNdbQYDZnPfDru4UVwaegoTpK9J3kd4wj6bLC7JcID7mEE7X9k0sFYcFl4XQI93gWetnxpx2BkOcA+TKbMZXtkoCequE+DHwKPGdpyJUklrOMBWhtLGn2axkpYEznUC3A+MNV6EQeLwbyhAw+XxO3CHSdJlDJFJwYm0VHDdxxDa+cM2IMfE5a7QacYAJk0b9aTdxfmS4J1SYQIPiMcLwBprf50kWBAN0GOmn0Ct0iGOMy5qN1wwB2bz7CGwuxanVipzWaOTWuFS50dFygRttnsWXhQnV/p6tJmaZjEZVoeJ8WLdzGxgszV0EaVGJpPqCZ3u5T7ibENNlfLryUypNP1moBRvWFM0ozbNKCeNwarSuhptoYo4W4DBlqZJXJsHSwbMNq3fIEywNs4AC8RlU5SdVM90Q2uBCquXQqjtrlnNRlYI0RS3o3wJjMktF7aQYYUk2N2dCXNlaGcZwow83VYuMUumcrKY+1CAJu3s5hbKaQYe6mL0J3Palf3ErEPlNoTxqLnVjeqy/jOEeUFJOVKaCcxd2ZM9H3g9L46KbULH81PAElyaxD8cISX0Dubb04NUcIHnEJ5CTRoqZMcHaUVYTzmNMoHzIbnyoiGqRpf12sow2qhGGIUyyKak0whHuEyLTDEls2QpaQdL9laCYkmAuovh9GYaGRII96KMIMataG4ek53TwAliHCSDx0W2Sw2/RmUMDajZFszvC/0xiJ8TQ+taKD8evwM20MbGMCkmVB7UJHcS4xXUZHy/PAXJFTDt2FnT2cWoQBkIlBVYfxGhCVgtTve7WrhZOEgvLrDEpIauYNnhpF+y/KvpAYRj4nC500n3O5Zst+Kf8mmouVZ27fn8KcUqBrJSRgdPLIIvTS2MJ25K2T15Ti+hbCBGozhmKhBZNMkUhAaEOpReeQZ+RJkrCRMCneQqQE1TR4Z1eQPIDEqjKWvV/BaZKkBB9zCCcpajJp47GP5DWSgJM+bLSSdATfISYgZGHf8f9mOvWL0tFVpTTCdDI5IbJSvKUknwWofNHKB6LEZYZYI8Kx/Rh2eizgGjwgbWeGGFOCzrdIo1yRmEftbBm+KaIfkNEVVipMwd2R8X+3JWXPp3BvTMBaYeYaU4rLohZHlOzFw7bcKrgQxrJJGdGf4P0BquOF6lCw4AAAAASUVORK5CYII="
                                alt="" data-v-6363e7b3="">
                            <p data-v-6363e7b3="">Card holder</p></div>
                        <p class="righti" data-v-6363e7b3="">{{auth()->user()->name}}</p></div>
                    <div class="infobank lastbank flex" data-v-6363e7b3="">
                        <div class="ifsc" data-v-6363e7b3=""><img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAAXNSR0IArs4c6QAAAhVJREFUWEftmL9rFEEUxz/fNcGoiSBoodiljhjdi6ZJYWWRxsJCoggxhX+AwcImTUDU3sJOCQEbEQwRQYIYUG4vEghpBLtgCAoW/sBft09m2Cx3gcDdyXoTuSmHmXmf/b6Zt+89EfhQ4HzUAVqFbsQYKWPACeAA1K8p4IMM+AS8IWIGY0Yxvzbt5IBWoR/jETBQAEQzR64gzinmndvkAT0cvMI41MxJha0VH4BhBylboIteEuB4ZvAzKdPsYpYnrGmKtDAQJ84UEaMcpcoFIm4AfZm9Zb5Qki1xkZQHOVwXIxpkuUio7c62hEHgRQ5pXJKVmUec9ZuMSQ1xpx1wmzatzDXE7YznqSzx/j7oJ8QRxay3FbDCYYz3GcNHB1gFIsQPxfS0Ey5XscJ3jN1A6gBdHHLjm0rsCwIw4Suw1zt1JwG66D0dgoLgw033VgUDYavHqHVx8IDBu7jzihu9Q7ZTw0zHxR0XN6rA3677fx6JLwf2M07Khko8ztOhBXroZQLxVjHP8vlF+tjDFX6zpFO8bFXJhhW0hEngFvIp2YhiFn3inXATuO7yNYxjGmLVz5e5h5gAflKlX6dZawWyGcC7wNXMyGWVuJ8BPgTOZ1n4qGLmMsDniDN+PmJYJ3ndAQxdwSDu4LZFU9te8ZaiKfCyM/jCPfjWR+jNIx9gQ26/1bQbwm1g1kCG2wJu5Z/5L/YE3+X/A3AccbJ1QybZAAAAAElFTkSuQmCC"
                                alt="" data-v-6363e7b3="">
                            <p data-v-6363e7b3="">Bank account</p></div>
                        <p class="righti" data-v-6363e7b3="">{{auth()->user()->gateway_number}}</p></div>
                    <button class="btnposit" data-v-6363e7b3="">Withdraw Now</button>
                    <div class="tipsui" data-v-6363e7b3=""><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAAXNSR0IArs4c6QAABDlJREFUWEfVmX2IVFUUwH9nVslA19IEIyKhqCAqYd/M1irZB/0lUfRhREVCYaXt+kdQa4JYUFtBUJrbB4gIRZQSRcxfYVLQ2s68DVGCCgpDosLNVTfIxd135N6585qPN/vemxllev++c879vXPv+bjnCU08upUMq/EQbkfpAa4BLkVYYM0pk8AfwE8IYyhfkceXrQRpl5M0CnqQy5hmA8ojwOVpdIGjCB8whx2ynN+T6iYC1FEW08VLKI8DF0QYV4QTwCn3rhvlIiDK/hTCTmbYIr38HQcaC6gFHkR4G7ikwpgCBxC+IOAbMvwgHicrF1OfhQRcR4ZbUO4Cbq4BHkd5RnJ8PBtkQ0DdzxwWsA3lqdCwMIWym4A3pJef476+CniUq8nwLMJjaLgLxvPvMsmA3MZ0lL1IQB3hQuayB1hdobSPgPVpwWoX1RLoMHBHxbs8Z3hA+vi3Vr4O0HpuPp+FcMoMGTbTw+simK1t+VHjtzGeI+BlhC5nMM8/3FPryXpAn2GUp53SaZSHJcenLVNFRVaBexE+BObZ18I74rG+UrQK0AXER1bUeA7WJIXTAqsQrkLJS44/k36QGkj4xHlSUR6qDJwQ0KaSDD+G0SoMisdrSRbSAhsR3nSyf6EsTwXp8zzKq05/nIBryynoP0CfHWjo3n143Jn0zKnPQZQbKz7mCcmyM8nHGRl7Jn2+DANHGBaPDaVdNwKmQpzhF5uETSqZ4YY00apF9gL3hUDKrZLj66SAlsFEdxeHXAqaYi5XmopTAiwwhDDoDL4vWZ5MZbzAUpvMzRkM2CU53kqjX5bVIu8B61zADInHC+IK/xFXW9Xtf6ok3AxMlI7LkSYOjOOOkmeZaJEcMOoURiTLinYt2IwdLfIt0Od0e0V9BlGGnFs3iRdGU6x99VmJML9KcJpf05zf2kXqeLRoS9r9VlBZITlGYslK53YLwot1siZ/drFSevguiZ06wAJ9iPWiefaaLT4EXG/xhItru5JGi6jPLpS1Dd73S9Z2QKkf2wUpE+4cHjaAx2xyViYkx6KkFvV7ljDNABm6nfdNHlzljsqAeGxPaivCi8eNs4BxcwZNvTX57zfxWNa0UZ9+lG1tAfQ5gnKFycn/A8DyFgsT4iXf4ojoa6cHj6PlLW4ySM4VYFSQNJVmzhlgXZppIVFXQmqbgiQqUbel1LUNsK7UlaYELTcL7QCMbBZshfN5BWWT27JE7ZaOcRMB2xEWukRtLupLnI1j7iIPAadQ+qWXA3E5NrLdsoBNNKxVNTxuZWGPeKyZTWzWhtV5MVXLr0XuBnaD82DDos0kwqOS5fOGInEtvwVs4dIU58C495rk0mQhS3OYpq6dcRANvZf02lk2oJ18cbde7PTRh4Xs5OFRuNWdPH6rqrGdOsCsgkwyAlZOkHEj4IBu5DyNgKtAO3WIXtf7ncffEGcBV60t4f/CB9oAAAAASUVORK5CYII="
                            alt="" data-v-6363e7b3="">
                        <p data-v-6363e7b3="">Withdraw tips</p></div>
                    <p class="welcome" data-v-6363e7b3="">
                        Withdraw tips
</br>
  Here are some guidelines for the withdrawal process:
</br>
  1. Withdrawal Processing Time: Withdrawals are processed on a daily basis, preferably between 11:00 AM and 5:00 PM.
</br>
  2. Minimum Withdrawal Amount: Minimum withdrawal amount is BDT.. 300
</br>
  3. Transfer Time: After submitting a successful withdrawal request, funds will be transferred to your account within a time frame of 1 to 6 hours.  In exceptional circumstances, this may take up to 24 hours.
</br>
  4. Withdrawal Frequency: Users are allowed one withdrawal per day.  However, it is important to note that there is a 15% withdrawal service fee associated with each withdrawal transaction
</br>
  5. Accuracy of Withdrawal Account Information: It is very important to ensure the accuracy of your Withdrawal Account information during the entry process.  Providing incorrect information may cause the withdrawal to fail.  In case of failure, you can reapply after correcting the details.
</br>
  6. Activation Requirement: To activate the withdrawal feature, users must recharge and purchase a product.
</br>
  These guidelines are designed to facilitate a smooth and efficient withdrawal process.  If you encounter any issues or have questions, feel free to contact our customer service team for assistance.
                    </p></section>
            </div>
        </div><!----></div>
    </form>
</body>
</html>
