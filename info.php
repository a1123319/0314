<?php 
    session_start();

    if (isset($_SESSION["check"])) {
        echo "<html>";
        echo "    <head>";
        echo "        <title>報名成功</title>";
        echo "        <meta charset='utf-8'>";
        echo "    </head>";
        echo "    <body bgcolor='#F2D6EF' text='#2C0728'>";
        echo "        <h1>報名成功！</h1>";
        echo "        以下是你的報名資訊<br>";
        echo "        <?php";
        echo "場次：" . $_POST["place"] . "<br>";
        echo "姓名：" . $_POST["name"] . "<br>";
        echo "E-Mail：" . $_POST["email"] . "<br>";
        echo "連絡電話：" . $_POST["phone"] . "<br>";
        echo "備註：<pre>" . nl2br(strip_tags($_POST["note"])) . "</pre>";
        echo "        <br>";
        echo "        我們期望到時見到您，謝謝！<br>";
        echo "        <img src='people.jpeg'>";
        echo "    </body>";
        echo "</html>";
    } else {
        echo "Illegal user. Please <a href='login.php'>login</a>";
    }
?>