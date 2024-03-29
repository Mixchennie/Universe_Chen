{{-- <x-guest-layout> --}}
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box; 
        }
        .login_container {
            width: 100%;
            display: flex;
            height: 500px;
            padding: 0 100px;
            margin-top: 20px;
            background-color: transparent;
            
        }
        .login_container img{
            width: 50%;
            height: 100%;
            border-top-left-radius: 8px;
            border-bottom-left-radius: 8px;
            
        }
  
        .form_login {
            width: 50%;
            display: flex;
            flex-direction: column;
            padding: 0 100px;
            background-color: #FF6699;
            border-top-right-radius: 8px;
            border-bottom-right-radius: 8px;
            padding-top: 20px;
            height: 100%;
        }
   
        .login_container h3, h2 {
            text-align: left;
            color: #333;
            margin-bottom: 20px;
        }
                /* Stylings for the additional buttons */
                .additional_buttons {
            margin-bottom: 20px;

                }

        .form_group {
            position: relative;
            margin-bottom: 15px;
        }

        .form_group label {
            margin-bottom: 5px;
            color: #333;
            font-weight: bold;
            display: block;
            position: absolute;
            top:10px;
            font-size: 15px;
        }

        .form_group input {
            padding: 10px;
            border: none;
            border-bottom: 1px solid #ccc;
            width: 100%;
            background-color: #FF6699;
            outline: none;
        }
        .form_group input:focus{
            background-color: #FF6699;
        }
        .form_group input::placeholder{
            color: rgba(255, 255, 255, 0.7);
        }

        .form_group button {
            background-color: #66b3ff;
            color: #fff;
            width: 420px;
            padding: 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .form_group button:hover {
            background-color: #dbea11;
        }
        

   
        .form_group label {
            margin-bottom: 5px;
            color: #333;
            font-weight: bold;
            display: block;
        }

        .form_group button {
            background-color: #53cbfe;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .form_group button:hover {
            background-color: #a08b45;
        }
        .additional_buttons button{
            background-color: #53cbfe;
            width: 47%;
            padding: 5px;
            border-radius: 3px;
            outline: none;
            border: none;
            color: #fff;
            /* border: 0.5px solid #5B86E5!important; */

        }
        .additional_buttons button i{
            color: #FF6699!important;
        }   
        .btn_login{
            background-color: #000!important;
            color:#FF4646!important;
            width: 100%!important;
        }
        .btn_register{
            background-color: transparent!important;
            color: #fff!important;
            border: 1px solid #5B86E5!important;
            width: 100%!important;
        
        }
        button a{
            display: block;
        }
    </style>
    <div class="login_container my-5">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7Jbq-w6NLK1GVWCEZ3GVqlY71x82PbWXDr2JHG8Z0H_8zs54z" alt="Ảnh mẫu">
        <div class="form_login">
            <h2>Universe</h2>
            <h3>Sign In to Universe</h3>
            <div class="additional_buttons">
                <button><i class="fab fa-google"></i> Sign in with Google</button>
                <button><i class="far fa-envelope"></i> Sign in with Email</button>
            </div>
            <form class="login_form" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form_group">
                    <x-input-label for="email" :value="__('')"  />
                    <x-text-input id="email" class="form-control border-0 shadow" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" onfocus="clearPlaceholder(this)" placeholder="Email"/>
                    <x-input-error :messages="$errors->get('email')" class="form-message text-danger" placeholder="" />
                </div>
                <div class="form_group">
                    <x-input-label for="password" :value="__('')" />
                    <x-text-input id="password" class="form-control border-0 shadow" type="password" name="password" required autocomplete="current-password" onfocus="clearPlaceholder(this)" placeholder="Password"  />
                    <x-input-error :messages="$errors->get('password')" class="form-message text-danger" placeholder="" />
                </div>
                <div class="form_group">
                    <button class="btn_login" type="submit">{{ __('Sign In') }}</button>
                </div>
                <div class="form_group">
                    <button class="btn_register" type="button">
                        <a href="{{ route('register') }}">{{ __('Sign Up Now') }}</a>
                    </button>
                </div>
            </form>
        </div>
    </div>
    
{{-- </x-guest-layout> --}}