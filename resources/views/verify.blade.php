<!DOCTYPE html>
<html lang="en">
<head>
    @include('links')
</head>
<form action="{{ route('verification.send') }}" method='post'>
    @csrf
<body><div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, 
                    <button type='submit'>{{ __('click here to request another') }}</button>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
@include('script-links')
</body>
</html>
