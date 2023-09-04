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
                        <h1>Register</h1>
                        <p class="account-subtitle">Access to our dashboard</p>
 
                       <form action="{{ route('signup.customer.check') }}" method="POST" id="registerForm">                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Name</label>
                                <input class="form-control" type="text" name="name" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Email Address</label>
                                <input class="form-control" type="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Number</label>
                                <input class="form-control" type="text" name="number" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Password</label>
                                <input class="form-control" type="password" name="password" id="password" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Confirm Password</label>
                                <input class="form-control" type="password" name="password_confirmation" id="confirmPassword" required>
                                <span id="passwordError" style="color: red;"></span> <!-- Error message for password confirmation -->
                            </div>
                            <div class="form-group mb-0">
                                <button class="btn btn-lg btn-block btn-primary w-100" type="submit">Register</button>
                            </div>
                        </form>

                        <div class="login-or">
                            <span class="or-line"></span>
                            <span class="span-or">or</span>
                        </div>

                        <div class="social-login">
                            <span>Register with</span>
                            <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="google"><i class="fab fa-google"></i></a>
                        </div>

                        <div class="text-center dont-have">Already have an account? <a href="/">Login</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('script-links')
</body>
</html>

<script>
function checkPasswordConfirmation() {
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    const passwordError = document.getElementById('passwordError');

    if (password !== confirmPassword) {
        passwordError.textContent = 'Passwords do not match';
    } else {
        passwordError.textContent = ''; // Clear error message if passwords match
    }
}

// Add an event listener to the confirm password field
document.getElementById('confirmPassword').addEventListener('keyup', checkPasswordConfirmation);
</script>
