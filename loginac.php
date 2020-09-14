<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>登入系統的後臺執行過程</title>
</head>

<body>
    <?php
    session_start(); //登入系統開啟一個session內容 
    $dbhost = '127.0.0.1';
    $dbuser = 'hj';
    $dbpass = 'test1234';
    $dbname = 'testdb';
    $account = $_REQUEST["account"]; //獲取html中的使用者名稱（通過post請求） 
    $password = $_REQUEST["password"]; //獲取html中的密碼（通過post請求）
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); //連線mysql 資料庫
    if (!$conn) {
        ?>
        <script type="text/javascript">
            alert("資料庫連線失敗");
            window.location.href = "index.php";
        </script>
        <?php
    }

    $dbaccount = null;
    $dbpassword = null;
    $sql = "SELECT * FROM users WHERE account ='{$account}'"; //查出對應使用者名稱的資訊
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) { //while迴圈將$result中的結果找出來 
        $dbaccount = $row["account"];
        $dbpassword = $row["password"];
    }
    if (is_null($dbaccount)) { //使用者名稱在資料庫中不存在時跳回index.html介面 
    ?>
        <script type="text/javascript">
            window.location.href = "login.php?error=1";
        </script>
        <?php
    } else {
        $password = sha1($password);
        if ($dbpassword != $password) { //當對應密碼不對時跳回index.html介面 
        ?>
            <script type="text/javascript">
                window.location.href = "login.php?error=2";
            </script>
        <?php
        } else {
            $_SESSION["account"] = $account;
            $_SESSION["code"] = mt_rand(0, 100000); //給session附一個隨機值，防止使用者直接通過呼叫介面訪問welcome.php
        ?>
            <script type="text/javascript">
                location.reload();
                window.location.href = "index.php";
            </script>
    <?php
        }
    }
    mysqli_close($conn); //關閉資料庫連線，如不關閉，下次連線時會出錯 
    ?>
</body>

</html>