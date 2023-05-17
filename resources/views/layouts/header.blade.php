<header>
    <menu>
        <div class="header-container__left">
            <a href="/">
                <img src="{{asset('images/icons/logo.png')}}">
            </a>
        </div>
        <div class="header-container__center">
            <div class="item-center">
                <a href="/">Главная</a>
            </div>
            <div class="item-center">
                <a href="{{route('turs')}}">Предложения</a>
            </div>
        </div>
        <div class="header-container__right">
            <div class="header-container__right__login">
                @if(auth()->user())
                    <form action="{{asset('/logout')}}" method="get" class="form-logout">
                        @csrf
                        <button class="link-login">
                            <img src="{{asset('images/icons/logout.png')}}" height="28px">
                        </button>
                    </form>
                    <div class="link-dashboard">
                        <a href="{{asset('/dashboard')}}" class="link-login">
                            <img src="{{asset('images/icons/user.png')}}" height="28px">
                        </a>
                    </div>
                @else
                    <a href="{{asset('/login')}}" class="link-login">
                        <img src="{{asset('images/icons/login.png')}}" height="28px">
                    </a>
                @endif
            </div>
        </div>
    </menu>
</header>
