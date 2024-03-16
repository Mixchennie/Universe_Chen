<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/customer/pages/account/login.css') }}">
</head>
<body>
    <div class="login_container my-5">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7Jbq-w6NLK1GVWCEZ3GVqlY71x82PbWXDr2JHG8Z0H_8zs54z" alt="Ảnh mẫu">
        <div class="form_login">
            <h2>Universe</h2>
            <h3>Sign In to Universe</h3>
            <div class="additional_buttons">
                <button><i class="fab fa-google"></i> Sign in with Google</button>
                <button><i class="far fa-envelope"></i> Sign in with Email</button>
            </div>
            <form class="login_form" action="{{ url('/Customer/Account/LoginPost') }}" method="POST">
                <div class="form_group">
                    <input class="form-control border-0 shadow"  name="email" placeholder="Email"/>
                    <span class="form-message text-danger">{{ empty($errors['email']) ? "" : $errors['email'] }}</span>
                </div>
                <div class="form_group">
                    <input type="password" class="form-control border-0 shadow"  name="password" placeholder="Password"/>
                    <span class="form-message text-danger">{{ empty($errors['password']) ? "" : $errors['password'] }}</span>
                </div>
                
                <div class="form_group" >
                    <button class="btn_login" type="submit" >Sign In</button>
                </div>
                <div class="form_group">
                    <button class="btn_register" type="button" >           
                        <a href="{{ url('/customer/account/register') }}">
                            Sign Up Now
                        </a>
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
