<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>註冊系統的後臺執行過程</title>
</head>

<body>
    <?php
    session_start(); //登入系統開啟一個session內容 
    $dbhost = '127.0.0.1';
    $dbuser = 'hj';
    $dbpass = 'test1234';
    $dbname = 'testdb';
    $account = $_REQUEST["account"]; //獲取html中的使用者名稱（通過post請求） 
    $phone = $_REQUEST["phone"];
    $password = $_REQUEST["password"]; //獲取html中的密碼（通過post請求）
    $cpassword = $_REQUEST["cpassword"]; //獲取html中的密碼（通過post請求）
    $email = $_REQUEST["email"];
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
    $dbphone = null;
    $dbemail = null;

    $sql = "SELECT * FROM users WHERE phone ='{$phone}'"; //查出對應使用者名稱的資訊
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) { //while迴圈將$result中的結果找出來 
        $dbphone = $row["phone"];
    }
    $sql = "SELECT * FROM users WHERE account ='{$account}'"; //查出對應使用者名稱的資訊
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) { //while迴圈將$result中的結果找出來 
        $dbaccount = $row["account"];
    }
    $sql = "SELECT * FROM users WHERE email ='{$email}'"; //查出對應使用者名稱的資訊
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) { //while迴圈將$result中的結果找出來 
        $dbemail = $row["email"];
    }

    if (!is_null($dbphone)) { //電話在資料庫中存在跳回
    ?>
        <script type="text/javascript">
            window.location.href = "register.php?error=1";
        </script>
        <?php
    } else {
        if (!is_null($dbaccount)) { //帳號在資料庫中存在時跳回 
        ?>
            <script type="text/javascript">
                window.location.href = "register.php?error=2";
            </script>
            <?php
        } else {
            if (!is_null($dbemail)) {
            ?>
                <script type="text/javascript">
                    window.location.href = "register.php?error=4";
                </script>
                <?php
            } else {
                if ($password != $cpassword) {
                ?>
                    <script type="text/javascript">
                        window.location.href = "register.php?error=3";
                    </script>
                <?php
                } else {
                    $username = $_REQUEST["username"];
                    $gender = $_REQUEST["gender"];
                    $birthday = $_REQUEST["birthday"];
                    $password = sha1($password);
                    $sql_r = "INSERT into users (account,password,username,email,phone,gender,birthday) VALUES('{$account}','{$password}','{$username}','{$email}','{$phone}','{$gender}','{$birthday}')";
                    $result_r = $conn->query($sql_r);
                ?>
                    <script type="text/javascript">
                        alert("註冊成功");
                        location.reload();
                        window.location.href = "login.php";
                    </script>
    <?php
                }
            }
        }
    }
    mysqli_close($conn); //關閉資料庫連線，如不關閉，下次連線時會出錯
    ?>
</body>

</html>