<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">

    <title>Login</title>
</head>
<body>
      <form class="form-register" action="./config/Process.php" method="POST">
    <h4>Welcome to Enchanment Hotel !!</h4>
    <h3> Email Address</h3><br>
    <input placeholder="Enter your Email" type="text" class="form-control controls" name="email_admin" id="InputEmail1" aria-describedby="emailHelp">
    <h3> Password</h3><br>
    <input placeholder="Enter your password" type="password"  name="pass_admin" class="form-control controls" id="exampleInputPassword1">
    <input class="botons" type="submit" name="tras_b" value="Login">
</form>
</body>
</html>