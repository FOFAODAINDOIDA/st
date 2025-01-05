<div class="bottom" data-v-2de32f02="" data-v-81dae98a="">
    <div class="flex flex-bom" data-v-2de32f02="">
        <div class="item @if(\Request::is('home')) active @endif" data-v-2de32f02="" onclick="window.location.href='/home'">
            <div class="img-box" data-v-2de32f02=""><img class="imgc"
                                                         src="{{ asset('IndustrialRobots/dist/img/ic_11.6ddd77bd.png') }}"
                                                         alt="" data-v-2de32f02=""></div>
            <p class="item-pone @if(\Request::is('home')) active @endif" data-v-2de32f02="" style="color: #999999;">Home</p>
        </div>
        <div class="item @if(\Request::is('user/my-order')) active @endif" data-v-2de32f02="" onclick="window.location.href='/user/my-order'">
            <div class="img-box" data-v-2de32f02=""><img class="imgc"
                                                         src="/public/IndustrialRobots/dist/icn/invest.png"
                                                         alt="" data-v-2de32f02=""></div>
            <p class="item-pone @if(\Request::is('user/my-order')) active @endif" data-v-2de32f02="" style="color: #999999;">Invest</p>
        </div>
        <div class="item @if(\Request::is('fund')) active @endif" data-v-2de32f02="" onclick="window.location.href='/fund'">
            <div class="img-box" data-v-2de32f02=""><img class="imgc"
                                                         src="/public/IndustrialRobots/dist/icn/fund.png"
                                                         alt="" data-v-2de32f02=""></div>
            <p class="item-pone @if(\Request::is('fund')) active @endif" data-v-2de32f02="" style="color: #999999;">Fund</p>
        </div>
        <div class="item @if(\Request::is('team')) active @endif" data-v-2de32f02="" onclick="window.location.href='/team'">
            <div class="img-box" data-v-2de32f02=""><img class="imgc"
                                                         src="/public/IndustrialRobots/dist/icn/team.png"
                                                         alt="" data-v-2de32f02=""></div>
            <p class="item-pone @if(\Request::is('team')) active @endif" data-v-2de32f02="" style="color: #999999;">Team</p>
        </div>
        <div class="item @if(\Request::is('mine')) active @endif" data-v-2de32f02="" onclick="window.location.href='/mine'">
            <div class="img-box" data-v-2de32f02=""><img class="imgc"
                                                         src="{{ asset('IndustrialRobots/dist/icn/mine.png') }}"
                                                         alt="" data-v-2de32f02=""></div>
            <p class="item-pone @if(\Request::is('mine')) active @endif" data-v-2de32f02="" style="color: #999999;">Mine</p>
        </div>
    </div>
</div>

<style>
    .active {
        filter: brightness(0) saturate(100%) invert(7%) sepia(3%) saturate(1420%) hue-rotate(40deg) brightness(97%) contrast(112%);
    }
</style>
