<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form Login</title>

    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">

</head>

<body>
    <div class="container">
        <div class="form">
            <h2>Sign In</h2>
            <form method="POST" action="{{ route('actionlogin') }}">
                @csrf
                <div class="inputBox">
                    <input type="text" id="username" class="" name="username" required>
                    <label>Username</label>
                </div>
                <div class="inputBox">
                    <input type="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <label>Password</label>
                </div>
                <!-- <div class="links">
                    <a href="#">Forgot Password</a>
                    <a href="#">Signup</a>
                </div> -->
                <div class="inputBox">
                    <input type="submit" value="Login">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
</html>