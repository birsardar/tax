<!DOCTYPE html>
<html lang="en">
<head>
    @include('links')
</head>
<form action="{{ route('password.request') }}" method="POST" >
    @csrf
<body><div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Your Password') }}</div>

                <div class="card-body">
                 <input type="email" placeholder="Enter your email" name="email">
                    <button type='submit'>Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
@include('script-links')
</body>
</html>
