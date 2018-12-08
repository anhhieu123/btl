<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="header">
        <h2>Dang nhap</h2>
        <form method="Post" action="login1.php">
            <div class="input-group">
                <Lable>Username</Lable>
                <input type="text" name="username">
            </div>
            <div class="input-group">
                <Lable>Password</Lable>
                <input type="password" name="password_1">
            </div>
            <div class="input-group">
                <button type="submit" name="login" class="btn">Login</button>
            </div>
            <p>
                Not yet a member? <a href="register.php">Sign in</a>
            </p>
            
        </form>
    </div>
</body>
</html>