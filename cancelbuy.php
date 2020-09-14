<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>取消訂單AC</title>
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
    $sql = "SELECT model,SUM(buynumber) FROM buybuy GROUP BY model,user HAVING user='$user'"; //找到購買數量
    $result = $conn->query($sql); //QUERY資料庫
    while ($row  = $result->fetch_assoc()) { //while迴圈將$result中的結果找出來
        $model = $row["model"];
        $buynumber = $row["SUM(buynumber)"];

        $sql1 = "SELECT * FROM commodity3 WHERE model = '$model'"; //找到這筆資料的庫存
        $checkInv = $conn->query($sql1);
        $row1 = $checkInv->fetch_assoc();
        $Inventory = $row1["inventory"]; //抓出庫存
        $buynumber = $buynumber / 2;
        $Inventoryt = $Inventory + $buynumber;
        $sale = $row1["sales"];
        $sale = $sale - $buynumber;
        $sql1 = "UPDATE commodity3 SET inventory='$Inventoryt',sales='$sale' WHERE model = '$model'";
        $conn->query($sql1);
    }


    $sql2 = "SELECT * FROM buycar WHERE user = '$user'"; //找到這筆資料的庫存
    $deletecar = $conn->query($sql2);
    $row2 = $deletecar->fetch_assoc();


    
    $sql3 = "SELECT count FROM buycar WHERE order by number ASC LIMIT1";
    $deletemap = $conn->query($sql3);
    $row3 = $deletecar->fetch_assoc();
    $count = $row3["count"];

    echo "$count";

    $sql3 = "DELETE FROM buynow WHERE COUNT = '$count'";
    $conn->query($sql3);
    $sql3 = "DELETE FROM buycar WHERE count = '$count'";
    $conn->query($sql3);



    ?>
    <script type="text/javascript">
        location.reload();
        alert("取消訂單成功!!");
        window.location.href = "buybuycar.php";
    </script> 
    <?php

    mysqli_close($conn); //關閉資料庫連線，如不關閉，下次連線時會出錯
    ?>
</body>

</html>