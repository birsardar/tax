<!DOCTYPE html>
<html lang="en">
<head>
    @include('links')
</head>
<body>
  <form action = "{{ route('password.update') }}" method="post" >                
                @csrf
                            <div class="form-group">
                                <label class="form-control-label">Email</label>
                                <input class="form-control" type="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Password</label>
                                <input class="form-control" type="text" name="password" required>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Confirm Password</label>
                                <input class="form-control" type="text" name="password_confirmation" required>
                            </div>
                    <input type='hidden' value='{{$token}}' name='token'/>
                    <button type='submit'>Submit</button>
                </div>
        
</form>
@include('script-links')
</body>
</html>
