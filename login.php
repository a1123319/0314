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
            echo "<h3>Welcome back, " . $_COOKIE["username"] . "</h3>";
        }

        echo "Admin帳號： admin<br>";
        echo "Admin密碼： admin<br>";
        echo "User帳號： user<br>";
        echo "User密碼： user<br>";
        echo "<br>";
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