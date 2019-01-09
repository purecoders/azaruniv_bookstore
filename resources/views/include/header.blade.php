<div class="top-bg text-white rtl">
    <div class="d-flex text-center p-1">
        <div class="col-4  text-right d-none flex-row justify-content-start	align-items-end p-2 align-self-end d-md-flex">
            <a href="{{route('site-home')}}" class="btn btn-light m-1"> <i class="fa fa-home"></i> صفحه اصلی</a>
        </div>
        <div class="m-auto">
            <img src="{{asset('img/logo2.png')}}" class=" logo mt-3" alt="">
            <h3 class="text-white">انتشارات دانشگاه شهید مدنی آذربایجان</h3>
        </div>

        @php
            $user = auth()->user();
            if($user !== null){
                $cart = $user->cart;
                if($cart !== null){
                    $contents = $cart->contents;
                    $count = sizeof($contents);
                }
            }else{
                $count = 0;
            }
        @endphp
        <div class=" col-4 text-left d-none flex-row justify-content-end	align-items-end p-2 align-self-end d-md-flex ">
            @auth
               @if(auth()->user()->role == 'user')
                <a href="{{route('user-cart')}}" class="btn btn-green m-1"> سبد خرید {{$count}} <i
                            class="fa fa-shopping-basket"></i>
                </a>
               @endif
            @endauth
        </div>

    </div>
    <div id="test" class="d-flex justify-content-around  d-md-none">
        <div class="col-4  text-right d-flex flex-row justify-content-start	align-items-end p-2 align-self-end">
            <a href="{{route('site-home')}}" class="btn btn-light m-1"> <i class="fa fa-home"></i> صفحه اصلی</a>
        </div>

        <div class="col-4 text-left d-flex flex-row justify-content-end	align-items-end p-2 align-self-end">
            @auth
                @if(auth()->user()->role == 'user')
                <a href="{{route('user-cart')}}" class="btn btn-light m-1"> سبد خرید {{$count}} <i
                            class="fa fa-shopping-basket"></i>
                </a>
                @endif
            @endauth
        </div>

    </div>

</div>

<nav class="navbar navbar-expand-md navbar-dark navbar-custom">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="http://www.azaruniv.ac.ir/?PageID=6" target="_blank">تماس با ما</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://www.azaruniv.ac.ir/?PageID=6" target="_blank">درباره ما</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('register')}}">ثبت نام</a>
                    </li>
                @endguest
                @auth
                    @if(auth()->user()->role == 'user')
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user-cart')}}">سبد خرید</a>
                    </li>
                    @endif
                @endauth
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">ورود به حساب</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">پنل کاربری</a>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link">
                            {{ auth()->user()->name }} <span class="caret"></span>
                        </span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            خروج
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>