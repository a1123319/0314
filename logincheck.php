<?php
    session_start();
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Login check</title>
</head>
<body>
    <?php
        $name = "a1123319";
        $password = "a1123319";

        $fetchName = $_POST["username"];
        $fetchPassword = $_POST["password"];

        if ($name == $fetchName && $password == $fetchPassword) {
            echo "Login succeeded";
            $_SESSION["check"] = 1;
            setcookie("username", $name, strtotime("+10 seconds", time()));
            header("Location:form.php");
        } else {
            echo "Login failed";
            header("Refresh:2;url='login.php'");
        }
    ?>
</body>
</html>