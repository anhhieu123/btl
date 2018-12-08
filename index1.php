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
    </div>
    <div class="content">
        <?php if(isset($_SESSION['success'])):?>
            <div class="error success">
                <h3>
                    <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                        ?>
                </h3>
            </div>
        <?php
            if(isset($_SESSION["username"])): ?>
            <p>Welcome <?php echo $_SESSION['username']; ?></p>
            <p><a a href="" style="color:#ff09" >Logout</a></p>
        <?php endif ?>
    </div>
</body>
</html>