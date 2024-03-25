<header>
    <div class="header">

        <h3><a class="navbar-brand" href="/">UNIVERSEPINK</a></h3>
        <div class="search_header">
            <input type="text" name="search" placeholder="search">
            <i class="fa-brands fa-searchengin"></i>
        </div>
        <div class="menu">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="{{asset('product.index') }}">Product</a></li>
                <li><a href="">Privacy</a></li>
                <li><a href="{{asset('aboutus') }}">About Us</a></li>
                <li><a href="{{asset('cart') }}"><i class="fa-solid fa-cart-shopping"></i></a></li>
            </ul>
        </div>
        @if(Auth::user() == null)
        <div class="auth-buttons">
            <button><a href="{{ route('login') }}" style="color:#ff6699">Sign In</a></button>
            <button><a href="{{ route('register') }}">Sign Up</a></button>
        </div>
        {{-- @endif --}}
 
        @else
        <div class="auth-buttons">
            
            <div class="dropdown">
                <a onclick="show_user_menu()" class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://cdn-icons-png.flaticon.com/512/1177/1177568.png">
                </a>

                <ul class="dropdown-menu user_menu">
                    <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                </ul>
            </div>
        </div>
        @endif
    </div>
</header>
@push('scripts')
    <script src="{{ asset('public/frontend/js/layout/header.js') }}"></script>
@endpush