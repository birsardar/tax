<!DOCTYPE html>
<html lang="en">
<head>
    @include('links')
</head>
<body>
    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <img class="img-fluid logo-dark mb-2" src="{{url('global_assets/images/taxrx_logo.png')}}" alt="Logo">
                <div class="loginbox">
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Login</h1>
                            <p class="account-subtitle">Access to our dashboard</p>
                            <form action="{{ route('logincheck') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="form-control-label">Username<span>(Email)</span></label>
                                    <input type="text" name="email" class="form-control">    
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Password</label>
                                    <div class="pass-group">
                                        <input type="password" name="password" class="form-control pass-input">
                                        <span class="fas fa-eye toggle-password"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="remember" class="custom-control-input" id="cb1">
                                                <label class="custom-control-label" for="cb1">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-6 text-end">
                                            <a class="forgot-link" href="{{ route('password.request') }}">Forgot Password ?</a>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-lg btn-block btn-primary w-100" type="submit">Login</button>
                                <div class="login-or">
                                    <span class="or-line"></span>
                                    <span class="span-or">or</span>
                                </div>
                                <div class="social-login mb-3">
                                    <span>Login with</span>
                                    <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="google"><i class="fab fa-google"></i></a>
                                </div>
                                <div class="text-center dont-have">Don't have an account yet? <a href="{{ route('signup.customer') }}">Register</a></div>   
                                <div class="text-center"><a href="{{ route('admin-login') }}" class="btn btn-sm btn-block btn-primary w-100">Login as Admin</a></div>
                         </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('script-links')
</body>
</html>
