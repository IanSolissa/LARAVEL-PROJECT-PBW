<!DOCTYPE html>
<html lang="e

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Yeseva+One:400,700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700&display=swap">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=+, initial-scale=1.0">
    <title>CONTIX | REGISTER</title>
    <link rel="stylesheet" href="css/Register.css">
</head>

<body>
    <div class="form__container">
        <h1>Let's join us</h1>
        <hr>
        <div class="form__wrapper">
            <form action="/Register" method="POST">
                @csrf
                <input required type="text" id="username" name="username" placeholder="Username">
                <input required type="email" id="email" name="email" placeholder="Email">
                <input required type="password" id="password" name="password" placeholder="Password">
                {{-- <img src="images/eye-close.png" class="img1" /> --}}
                <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password">
                {{-- <img src="images/eye-close.png" class="img2" onclick="toggleConfirm()" /> --}}
                <button type="submit" class="regist__button">Register</button>
            </form>
        </div>
    </div>
    <footer>
        copyright &#169; 2023 Contix.m
    </footer>
    <script src="js/Register.js"></script>
</body>
</html>
