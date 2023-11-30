<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Yeseva+One:400,700&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700&display=swap">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=+, initial-scale=1.0">
  <title>CONTIX</title>
  <link rel="stylesheet" href="CSS/Login.css">
</head>
<body>
    {{-- header --}}
    <header class="container">
        <h1>Welcome back!<br>Glad to see you again</h1>
        <hr>
    </header>


    {{-- form --}}
    <form method="POST" action="/Login" class="container" enctype="multipart/form-data">
        @csrf

        <div class="form-item">
            <input type="email" placeholder="Enter your email" name="email">
            <input type="password" placeholder="Enter your password" name="password">
            <img src="#" alt="fluent-eye" id="password">
        </div>

        {{-- button --}}
        <div class="container">
            <button type="submit" class="login-btn">Login</button>
        </div>
    </form>
    {{-- form end --}}


  

    {{-- my js --}}
    <script src="JS/Login.js"></script>

    <footer>
        <p>Copyright &#169; 2023 Contix.m</p>
    </footer>
</body>
  {{-- footer --}}
  





