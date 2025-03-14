<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body bgcolor="#E8D8F3" text="#190726">
    <h1>Login</h1>

    <?php
        if (isset($_COOKIE["username"])) {
            echo "Welcome back, " . $_COOKIE["username"];
        }
    ?>

    <form action="logincheck.php" method="post">
        Username <input type="text" name="username"><br>
        Password <input type="password" name="password"><br>
        <input type="submit" value="Login">
        <?php 
            date_default_timezone_set('Asia/Taipei');
            echo "<br><br>";
            echo "現在時間: " . time() . "<br>";
            echo "現在日期: " . date("Y年m月d日 H:i:s") . "<br>";
        ?>
    </form>
</body>
</html>