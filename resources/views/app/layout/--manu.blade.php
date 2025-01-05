<style>
    .menu-item span{
        color: #ff0000 !important;
    }
</style>
<div class="menu-area">
    <ul class="menu">
        <li class="menu-item ">
            <a href="{{route('dashboard')}}">
                    <span class="menu-content">
                        <span class="menu-icon">
                            <img src="{{asset('public/pcb')}}/v3/img/nhome.png">
                        </span>
                        <span class="menu-name" style="color: #000">Home</span>
                    </span>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{route('pgroup')}}">
                    <span class="menu-content">
                        <span class="menu-icon">
                            <img src="{{asset('public')}}/icons8-personal-growth-48.png">
                        </span>
                        <span class="menu-name" style="color: #000">Invest</span>
                    </span>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{route('team')}}">
                    <span class="menu-content">
                        <span class="menu-icon">
                            <img src="{{asset('public/pcb')}}/v3/img/gr.png">
                        </span>
                        <span class="menu-name" style="color: #000">Team</span>
                    </span>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{url('mine')}}">
                    <span class="menu-content">
                        <span class="menu-icon">
                            <img src="{{asset('public/pcb')}}/v3/img/me.png" alt="">
                        </span>
                        <span class="menu-name" style="color: #000">Profile</span>
                    </span>
            </a>
        </li>
    </ul>
</div>
