<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,300&family=Poppins&display=swap">
</head>

<body>

    <div class="row">
        <div class="login-page">
            <h1 class="signup" style="font-family: 'Fraunces', serif;">Sign Up</h1>
            <form action="/signup" method="POST">
                @csrf
                <label for="username">Username</label><br>
                <input class="input-user" type="text" id="username" name="username" value="{{ old('username') }}"
                    autofocus required><br><br>

                <label for="email">Email</label><br>
                <input class="input-user" type="text" id="email" name="email" value="{{ old('email') }}"
                    autofocus required><br><br>

                <label for="password">Password</label><br>
                <input class="input-user" type="password" id="password" name="password" value="{{ old('password') }}"
                    autofocus required><br><br>

                <label for="confirmPassword">Confirm Password</label><br>
                <input class="input-user" type="password" id="confirmPassowd" name="confirmPassword" autofocus
                    required><br><br>

                <input class="btn-login" type="submit">
            </form>
            <a href="/login" class="sign-up">Or already have an account? <b>Login</b></a>
        </div>
        <div class="img-logo">
            <img src="/image/logo.png" alt="logo">
        </div>
    </div>

    @include('sweetalert::alert')
</body>

</html>
