<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>購物車AC</title>
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
    while ($row  = $result->fetch_assoc()) { //while迴圈將$result中的結果找出來 
        $model = $row["model"];
        $buynumber = $row["SUM(buynumber)"];

        $sql1 = "SELECT * FROM commodity3 WHERE model = '$model'";
        $checkInv = $conn->query($sql1);
        $row1 = $checkInv->fetch_assoc();
        $Inventory = $row1["inventory"];
        
        if ($Inventory < $buynumber) {
    ?>
            <script type="text/javascript">
                location.reload();

                alert("庫存不夠拉JOJO<?php echo $buynumber ?>");
                window.location.href = "buybuycar.php";
            </script>
    <?php
        } else {
            $Inventoryt = $Inventory - $buynumber;
            $sale = $row1["sales"];
            $sale = $sale + $buynumber;
            $sql1 = "UPDATE commodity3 SET inventory='$Inventoryt',sales='$sale' WHERE model = '$model'";
            $conn->query($sql1);
        }
    }
    ?>
    <script type="text/javascript">
        location.reload();
        window.location.href = "buynow.php";
    </script>
    <?php

    mysqli_close($conn); //關閉資料庫連線，如不關閉，下次連線時會出錯
    ?>
</body>

</html>