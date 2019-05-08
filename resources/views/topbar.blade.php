
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                eLibrary
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-users"></i>About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#myModal" href=""><i class="fas fa-phone"></i>contacts us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="{{url('comment_page')}}"><i class="fas fa-comments"></i>Comment's</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}"><i class="far fa-user"></i>{{ __('Login') }}
                            </a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}"><i
                                            class="fas fa-sign-in-alt"></i>{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#ordrhistory" href=""><i class="far fa-file-alt"></i>{{ __('Order History') }}</a>

                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div class="container ">
    {{--@if(Session()->has('success'))--}}
        {{--<p class="alert alert-success">--}}
            {{--{{Session()->get('success')}}--}}
        {{--</p>--}}
    {{--@endif--}}
    @if(session('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert"><i class="fas fa-times"></i></button>
            {{ session('success') }}
        </div>
    @endif
</div>
<div class="header col-12">
    <div class="col-3"></div>
    <div class="container float-right h-100 col-6">
        <div class="d-flex justify-content-center ">
            @if(session('cart')==0)
                <a class="btn btn-primary"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart is
                    empty <span class="badge badge-pill badge-danger"></span></a>
            @else
                <a href="{{ url('cart') }}" class="btn btn-primary"> <i class="fa fa-shopping-cart"
                                                                        aria-hidden="true"></i> Cart <span
                            class="badge badge-pill badge-danger">{{ count(session('cart')) }}</span></a>
            @endif
        </div>
    </div>
    <div class=" name col-3">
        <h2><p class="font-italic">e-Libeary</p></h2>
    </div>
</div>