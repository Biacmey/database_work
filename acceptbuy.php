<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>確認付款AC</title>
</head>

<body>
    <?php
    session_start(); //登入系統開啟一個session內容 
    $dbhost = '127.0.0.1';
    $dbuser = 'hj';
    $dbpass = 'test1234';
    $dbname = 'db_commodity';
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname); //連線mysql 資料庫
    if (!$conn) {
        die('資料庫連線失敗' . mysqli_connect_error());
    }


    $user = $_SESSION["account"];
    $sql = "SELECT model,SUM(buynumber) FROM buybuy GROUP BY model,user HAVING user='$user'"; //查出對應使用者名稱的資訊
    $result = $conn->query($sql);

    ?>

    <form action=“https://www.paypal.com/row/cgi-bin/webscr” method=“post”>

        <input type=“hidden” name=“cmd” value=“_xclick”>

        <input type=“hidden” name=“business” value=“you@youremail.com”>


        <input type=“hidden” name=“item_name” value=“Item Name”>


        <input type=“hidden” name=“currency_code” value=“USD”>


        <input type=“hidden” name=“amount” value=“0.00”>

        <input type=“image” src=“http://www.paypal.com/zh_XC/i/btn/x-click-but01. gif” name=“submit” alt=“請使用PayPal付款！”>
        <!-- <script type="text/javascript">
                location.reload();
                window.location.href = "buynow.php";
            </script> -->
        <?php

        mysqli_close($conn); //關閉資料庫連線，如不關閉，下次連線時會出錯
        ?>
</body>

</html>