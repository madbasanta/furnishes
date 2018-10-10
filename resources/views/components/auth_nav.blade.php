<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand text-white p-0" href="{{ url('/') }}">
            <div href="javascipt:void(0)" class="d-inline-block" style="width: 50px;">
                <img src="/favicon.png" class="img-thumbnail">
            </div>
            {{ config('app.name', 'Laravel') }}
        </a>
        <button style="background: #f1f8f8" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto right-floated-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/wishlist">
                        WishList 
                        <i class="fa fa-heart ml-1 text-purple">
                            <small><span class="badge badge-danger">0</span></small>
                        </i>
                    </a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link" href="/cart">
                        Cart 
                        <i class="fa fa-shopping-cart ml-1 text-purple">
                            <small><span class="badge badge-secondary">0</span></small>
                        </i>
                    </a>
                </li>
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                            {{ __('Login') }} <i class="fa fa-unlock ml-1 text-purple"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">
                                {{ __('Register') }} <i class="fa fa-user-plus ml-1 text-purple"></i>
                            </a>
                        @endif
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }} <i class="fa fa-power-off float-right mt-1"></i>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>