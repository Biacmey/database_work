<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>修改密碼AC</title>
</head>

<body>
    <?php
    session_start(); //登入系統開啟一個session內容
    $account = $_SESSION["account"];
    $dbhost = '127.0.0.1';
    $dbuser = 'hj';
    $dbpass = 'test1234';
    $dbname = 'testdb';
    $password = $_REQUEST["password"];
    $newpassword = $_REQUEST["newpassword"];
    $newpasswordCon = $_REQUEST["newpasswordConfirm"];
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); //連線mysql 資料庫
    if (!$conn) {
        ?>
        <script type="text/javascript">
            alert("資料庫連線失敗");
            window.location.href = "index.php";
        </script>
        <?php
    }
    $sql = "SELECT * FROM users WHERE account = '{$account}'";
    $query = $conn->query($sql);
    $row = $query->fetch_assoc();
    $dbpassword = $row['password'];
    $url = "changepswd.php?&error=";
    $password = sha1($password);
    if ($password != $dbpassword) {
        $url = $url . "1";
        header("location:$url");
        exit();
    } else {
        if ($newpassword != $newpasswordCon) {
            $url = $url . "2";
            header("location:$url");
            exit();
        } else {
            $password = sha1($newpassword);
            if ($newpassword == $password) {
                $url = $url . "3";
                header("location:$url");
                exit();
            } else {
                $account = $row["account"];
                $sql = "UPDATE users SET password = '{$password}' WHERE account ='{$account}'";
                $conn->query($sql);
    ?>
                <script type="text/javascript">
                    alert("更改成功");
                    window.location.href = "login.php";
                </script>
    <?php
            }
        }
    }



    mysqli_close($conn); //關閉資料庫連線，如不關閉，下次連線時會出錯 
    ?>
</body>

</html>