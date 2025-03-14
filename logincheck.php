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
        $adminName = "admin";
        $adminPassword = "admin";
        $userName = "user";
        $userPassword = "user";

        $fetchName = $_POST["username"];
        $fetchPassword = $_POST["password"];

        if ($adminName == $fetchName && $adminPassword == $fetchPassword) {
            $_SESSION["check"] = 1;
            $_SESSION["adminLogin"] = 1;
            setcookie("username", $fetchName, strtotime("+10 seconds", time()));
            header("Location:form.php");
        } else if ($userName == $fetchName && $userPassword == $fetchPassword) {
            $_SESSION["check"] = 1;
            $_SESSION["userLogin"] = 1;
            setcookie("username", $fetchName, strtotime("+10 seconds", time()));
            header("Location:form.php");
        } else {
            echo "Login failed";
            header("Refresh:2;url='login.php'");
        }
    ?>
</body>
</html>