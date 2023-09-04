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
                            <p class="account-subtitle">Sign In to your account Admin</p>
                            <form action="{{ route('admin-login-check') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label class="form-control-label">Username(Email Address)</label>
                                    <input type="text" name="username" class="form-control">    
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
                                            <a class="forgot-link" href="">Forgot Password ?</a>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-lg btn-block btn-primary w-100" type="submit">Login</button>
                                <div class="login-or">
                                    <span class="or-line"></span>
                                    <span class="span-or">or</span>
                                </div>
                                
                                <div class="text-center dont-have">Not a Admin? <a href="{{ route('login') }}">Login as Customer</a></div>   
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
