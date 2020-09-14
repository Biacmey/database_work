<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>忘記密碼修改AC</title>
</head>

<body>
    <?php
    session_start(); //登入系統開啟一個session內容 
    $dbhost = '127.0.0.1';
    $dbuser = 'hj';
    $dbpass = 'test1234';
    $dbname = 'testdb';
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];
    $passwordCon = $_REQUEST["passwordConfirm"];
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); //連線mysql 資料庫
    if (!$conn) {
        ?>
        <script type="text/javascript">
            alert("資料庫連線失敗");
            window.location.href = "index.php";
        </script>
        <?php
    }
    $sql = "SELECT * FROM users WHERE email = '{$email}'";
    $query = $conn->query($sql);
    $row = $query->fetch_assoc();
    $dbpassword = $row['password'];
    $token = md5( $row['account'] . $row['password']);
    $url = "resetpswd.php?email=" . $email . "&token=" . $token . "&error=";
    if (sha1($password) == $dbpassword) {
        $url = $url . "2";
        header("location:$url");
        exit();
    } else {
        if ($password != $passwordCon) {
            $url = $url . "1";
            header("location:$url");
            exit();
        } else {
            $password = sha1($password);
            $account = $row["account"];
            $sql = "UPDATE users SET password = '{$password}',getpswdctime = NULL WHERE account ='{$account}'";
            $conn->query($sql);
    ?>
            <script type="text/javascript">
                window.location.href = "login.php";
                alert("更改成功");
            </script>
    <?php
        }
    }



    mysqli_close($conn); //關閉資料庫連線，如不關閉，下次連線時會出錯 
    ?>
</body>

</html>