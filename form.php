<?php
    session_start();
    
    if (isset($_SESSION["check"])) {
        echo "<html>";
        echo "    <head>";
        echo "        <meta charset='utf-8'>";
        echo "        <title>迎新活動行程報名表</title>";
        echo "    </head>";
        echo "    <body bgcolor='#E0F2F1' text='#0B3B39'>";
        echo "        <img src='nuk2.jpg'>";
        echo "        <h1>😎 迎新報名</h1>";

        if (isset($_SESSION["adminLogin"])) {
            echo "        <h3>🖥️歡迎Admin</h3>";
        } else if (isset($_SESSION["userLogin"])) {
            echo "        <h3>🙍‍♀️歡迎User</h3>";
        }

        echo "        <a href='logout.php'>Log out</a>";
        echo "        <table border='1'>";
        echo "            <thead>";
        echo "                <tr>";
        echo "                    <td></td>";
        echo "                    <td>日期</td>";
        echo "                    <td>時間</td>";
        echo "                </tr>";
        echo "            </thead>";
        echo "            <tbody>";
        echo "                <tr>";
        echo "                    <td>場次一</td>";
        echo "                    <td>2025/02/21</td>";
        echo "                    <td>上午 8:30 - 11:30</td>";
        echo "                </tr>";
        echo "                <tr>";
        echo "                    <td>場次二</td>";
        echo "                    <td>2025/02/21</td>";
        echo "                    <td>上午 2:00 - 5:00</td>";
        echo "                </tr>";
        echo "                <tr>";
        echo "                    <td>場次三</td>";
        echo "                    <td>2025/02/22</td>";
        echo "                    <td>下午 2:00 - 5:00</td>";
        echo "                </tr>";
        echo "                <tr>";
        echo "                    <td>場次四</td>";
        echo "                    <td>2025/02/23</td>";
        echo "                    <td>下午 2:30 - 5:30</td>";
        echo "                </tr>";
        echo "            </tbody>";
        echo "        </table>";
        echo "        <br>";
        echo "        <form action='info.php' method='post'>";
        echo "            場次";
        echo "            <select name='place'>";
        echo "                <option value='1'>一</option>";
        echo "                <option value='2'>二</option>";
        echo "                <option value='3'>三</option>";
        echo "                <option value='4'>四</option>";
        echo "            </select>";
        echo "            <br>";
        echo "            姓名<input type='text' name='name'><br>";
        echo "            E-Mail<input type='email' name='email'><br>";
        echo "            連絡電話<input type='tel' name='phone'><br>";
        echo "            備註<br><textarea name='note' rows='5' cols='30'></textarea><br>";
        echo "            <input type='submit' value='點我報名'>";
        echo "        </form>";
        echo "        <a href='activity-introduction.html'>👉迎新活動介紹看這裡</a>";
        echo "    </body>";
        echo "</html>";
    } else {
        echo "Illegal user. Please <a href='login.php'>login</a>";
    }
?>