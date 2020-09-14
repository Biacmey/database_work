<?php

use PHPMailer\PHPMailer\PHPMailer;

$username = filter_input(INPUT_POST, 'username');
$email = filter_input(INPUT_POST, 'email');
$phone = filter_input(INPUT_POST, 'phone');
$class = $_POST['class'];
$issue = filter_input(INPUT_POST, 'issue');
$id = filter_input(INPUT_POST, 'id');
if (!empty($username)) {
    if (!empty($email)) {
        $host = "127.0.0.1";
        $dbusername = "hj";
        $dbpassword = "test1234";
        $dbname = "db_report";
        // Create connection
        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);



        if (mysqli_connect_error()) {
            die('Connect Error (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
        } else {
            $sql = "INSERT INTO account (id, username, email, phone, class, issue)


values ('$id','$username','$email', '$phone', '$class', '$issue')";
            if ($conn->query($sql)) {


                echo "";
            } else {
                echo "Error: " . $sql . "
" . $conn->error;
            }
            $conn->close();
        }
    } else {
        echo "Password should not be empty";
        die();
    }
} else {
    echo "Username should not be empty";
    die();
}

?>

<?php

include("PHPMailer/src/PHPMailer.php");
include("PHPMailer/src/SMTP.php");
include("PHPMailer/src/Exception.php");

$mail = new PHPMailer(true);
$mail->IsSMTP();
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->CharSet = "utf-8";
$time = date('Y-m-d H:i', (time() + 6 * 3600));

$mail->Username = "s9609080@gmail.com";
$mail->Password = "sean326706";
//這邊是你的gmail帳號和密碼

$mail->FromName = "卑鄙粘之棉";
// 寄件者名稱(你自己要顯示的名稱)
$webmaster_email = "s9609080@gmail.com";
//回覆信件至此信箱


$email = "long326706@gmail.com";
// 收件者信箱
$name = "BOSS";
// 收件者的名稱or暱稱
$mail->From = $webmaster_email;



$mail->AddAddress($email, $name);
$mail->AddReplyTo($webmaster_email, "卑鄙粘之棉");
//這不用改

$mail->WordWrap = 50;
//每50行斷一次行

//$mail->AddAttachment("/XXX.rar");
// 附加檔案可以用這種語法(記得把上一行的//去掉)

$mail->IsHTML(true); // send as HTML

$mail->Subject = "卑鄙粘之棉_您有新的留言";
// 信件標題
$mail->Body = "$username 於 $time 對本站發送了有關 $class 之訊息，內容如下 $issue";
//信件內容(html版，就是可以有html標籤的如粗體、斜體之類)
$mail->AltBody = "喵喵喵";
//信件內容(純文字版)

if (!$mail->Send()) {
    echo "" . $mail->ErrorInfo;
    //如果有錯誤會印出原因
} else {
    echo "";
}


/*
$smail = new PHPMailer(true);
$mail->IsSMTP();
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->CharSet = "utf-8";
$time = date('Y-m-d H:i', (time() + 6 * 3600));

$smail->Username = "s9609080@gmail.com";
$smail->Password = "sean326706";
//這邊是你的gmail帳號和密碼

$smail->FromName = "卑鄙粘之棉";
// 寄件者名稱(你自己要顯示的名稱)
$swebmaster_email = "s9609080@gmail.com";
//回覆信件至此信箱

$email = filter_input(INPUT_POST, 'email');
// 收件者信箱
$name = filter_input(INPUT_POST, 'username');
// 收件者的名稱or暱稱
$mail->From = $webmaster_email;

$mail->AddAddress($email, $name);
$mail->AddReplyTo($webmaster_email, "Squall.f");
//這不用改

$smail->WordWrap = 50;
//每50行斷一次行

//$mail->AddAttachment("/XXX.rar");
// 附加檔案可以用這種語法(記得把上一行的//去掉)

$mail->IsHTML(true); // send as HTML

$mail->Subject = "卑鄙粘之棉_已收到您的留言";
// 信件標題
$mail->Body = "$username 您好，您在$time 對本站發送了訊息，\n我們已收到您的留言，謝謝您的意見！";
//信件內容(html版，就是可以有html標籤的如粗體、斜體之類)
$mail->AltBody = "喵喵喵";
//信件內容(純文字版)

if (!$mail->Send()) {
    echo "寄信發生錯誤：" . $mail->ErrorInfo;
    //如果有錯誤會印出原因
} else {
    echo "寄信成功";
}






*/

?>








<script type="text/javascript">
    alert("收到您的回報\n已發送確認信件至您的E-Mail，請查收");
    window.location.href = "contact_autoreply.php";
</script>
