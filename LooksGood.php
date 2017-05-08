<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/styles1.css">
</head>
<body>
    <p>
<script src="Javascript/background.js"></script>
</p>

<h1>Lokaverkefni</h1>
    <h3 id="h3">Matthías Birgisson</h3>

<form style="top: 17px;" action="SQL/signin.php" method="post">
      <h3>Sign In</h3>
          Email<br>
           <input type="email" name="email" required><br>
           Password<br>
           <input type="password" name="password" required>
           <input value="Sign in" id="takki" name="in" type="submit">
    </form>
    <form style="top: 210px;" action="SQL/signup.php" method="post">
      <h3>Sign Up</h3>
          Username<br>
           <input type="text" name="name" required><br>
          Email<br>
           <input type="email" name="email" required><br>
          Password<br>
           <input type="password" name="pass" required>
           <input value="Sign up" id="takki1" type="submit">
    </form>
</body>
</html>