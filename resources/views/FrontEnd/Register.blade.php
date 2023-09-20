<!DOCTYPE html>
<html lang="en">

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
            <form action="" method="POST">
                @csrf
                <input type="text" id="username" maxlength="50" name="username" placeholder="Username">
                <input type="email" id="email" name="email" placeholder="Email">
                <input type="password" id="password" name="password" placeholder="Password">
                <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password">
                <button type="submit" class="regist__button">Register</button>
            </form>
        </div>
    </div>
</body>

</html>
