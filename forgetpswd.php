<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>傳送驗證信AC</title>
</head>

<body>
    <?php

    use PHPMailer\PHPMailer\PHPMailer;

    session_start(); //登入系統開啟一個session內容 
    $dbhost = '127.0.0.1';
    $dbuser = 'hj';
    $dbpass = 'test1234';
    $dbname = 'testdb';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); //連線mysql 資料庫
    if (!$conn) {
        ?>
        <script type="text/javascript">
            alert("資料庫連線失敗");
            window.location.href = "index.php";
        </script>
        <?php
    }
    if ($_REQUEST['phone'] == "") { //輸入信箱
        $email = stripslashes(trim($_REQUEST["email"])); //去除反斜線 去除空白
        $sql = "SELECT * FROM users WHERE email = '{$email}'";
        $query = $conn->query($sql);
        $row = $query->fetch_assoc();
        $dbemail = $row["email"];
        $dbusername = $row["username"];
        if (is_null($dbemail)) { //該郵箱尚未註冊！ 
    ?>
            <script type="text/javascript">
                window.location.href = "forgetpass.php?error=1";
            </script>
            <?php
        } else {
            $getpasstime = time();
            $account =$row['account'];
            $token = md5($row['account'] . $row['password']); //組合驗證碼 
            $url = "127.0.0.1/php_example/resetpswd.php?email=" . $email . "&token=" . $token; //構造URL
            $time = date('Y-m-d H:i');
            include("PHPMailer/src/PHPMailer.php");
            include("PHPMailer/src/SMTP.php");
            include("PHPMailer/src/Exception.php");
            mb_internal_encoding('UTF-8');
            $mail = new PHPMailer();    //建立新物件
            $mail->isSMTP();          //使用SMTP方式寄件
            $mail->SMTPAuth = true;   //需要驗證
            $mail->SMTPSecure = "ssl"; //SLS連線
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 465;
            $mail->CharSet = "utf8";
            $mail->Username = "wei60208@gmail.com";
            $mail->Password = "Pickchu0331";
            $mail->From = "wei60208@gmail.com";
            $mail->FromName = "卑鄙粘之棉";
            $mail->addAddress($email, $dbusername);
            $mail->isHTML(true);
            $mail->Subject = '卑鄙粘之棉_重設密碼';
            $mail->Body    = "親愛的" . $email . "：<br>您在" . $time . "提交了找回密碼請求。請點選下面的連結重置密碼 
        （按鈕24小時內有效）。<br/><a href='" . $url . "'target='_blank'>" . $url . "</a>";
            if (!$mail->send()) {
            ?>
                <script type="text/javascript">
                    window.location.href = "forgetpswd.php";
                    alert("出了點小問題，請重試");
                </script>
            <?php
            } else {
                $sql = "UPDATE users SET getpswdctime = '{$getpasstime}' WHERE account = '{$account}'";
                $conn->query($sql);
            ?>
                <script type="text/javascript">
                    window.location.href = "login.php";
                    alert("驗證碼已經送到您的信箱，請前往信箱進行更改密碼");
                </script>
            <?php
            }
        }
    } else if ($_REQUEST['email'] == "") { //phone
        $phone = stripslashes(trim($_REQUEST["phone"])); //去除反斜線 去除空白
        $sql = "SELECT * FROM users WHERE phone = '{$phone}'";
        $query = $conn->query($sql);
        $row = $query->fetch_assoc();
        $dbemail = $row["email"];
        $dbphone = $row["phone"];
        $dbusername = $row["username"];
        if (is_null($dbphone)) { //該郵箱尚未註冊！ 
            ?>
            <script type="text/javascript">
                window.location.href = "forgetpass.php?error=2";
            </script>
            <?php
        } else {
            $getpasstime = time();
            $account =$row['account'];
            $token = md5($row['account'] . $row['password']); //組合驗證碼 
            $url = "127.0.0.1/php_example/resetpswd.php?email=" . $dbemail . "&token=" . $token; //構造URL
            $time = date('Y-m-d H:i', (time() + 6 * 3600));
            include("PHPMailer/src/PHPMailer.php");
            include("PHPMailer/src/SMTP.php");
            include("PHPMailer/src/Exception.php");
            mb_internal_encoding('UTF-8');
            $mail = new PHPMailer();    //建立新物件
            $mail->isSMTP();          //使用SMTP方式寄件
            $mail->SMTPAuth = true;   //需要驗證
            $mail->SMTPSecure = "ssl"; //SLS連線
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 465;
            $mail->CharSet = "utf8";
            $mail->Username = "wei60208@gmail.com";
            $mail->Password = "Pickchu0331";
            $mail->From = "wei60208@gmail.com";
            $mail->FromName = "卑鄙粘之棉";
            $mail->addAddress($dbemail, $dbusername);
            $mail->isHTML(true);
            $mail->Subject = '卑鄙粘之棉_重設密碼';
            $mail->Body    = $emailbody = "親愛的" . $dbemail . "：<br>您在" . $time . "提交了找回密碼請求。請點選下面的連結重置密碼 
        （按鈕30分鐘內有效）。<br/><a href='" . $url . "'target='_blank'>" . $url . "</a>";
            if (!$mail->send()) {
            ?>
                <script type="text/javascript">
                    window.location.href = "forgetpswd.php";
                    alert("出了點小問題，請重試");
                </script>
            <?php
            } else {
                $sql = "UPDATE users SET getpswdctime = '{$getpasstime}' WHERE account ='$account'";
                $conn->query($sql);
            ?>
                <script type="text/javascript">
                    window.location.href = "login.php";
                    alert("驗證碼已經送到您的信箱，請前往信箱進行更改密碼");
                </script>
    <?php
            }
        }
    }
    mysqli_close($conn);
    ?>
</body>