<?php

use PHPMailer\PHPMailer\PHPMailer;

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

$sql= "SELECT email FROM account ORDER BY id DESC LIMIT 0 , 1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$mail1 = $row["email"];

echo "$mail1";

$sql2= "SELECT username FROM account ORDER BY id DESC LIMIT 0 , 1";
$result = $conn->query($sql2);
$row2 = $result->fetch_assoc();
$username = $row2["username"];
  
echo "$username";

$sql3= "SELECT class FROM account ORDER BY id DESC LIMIT 0 , 1";
$result = $conn->query($sql3);
$row3 = $result->fetch_assoc();
$class = $row3["class"];
  
echo "$class";

        
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


$email = $mail1;
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

$mail->Subject = "卑鄙粘之棉_auto-reply";
// 信件標題
$mail->Body = "$username 您好，您在$time 對本站進行了$class ，
我們已收到您的訊息，謝謝您的留言！";
//信件內容(html版，就是可以有html標籤的如粗體、斜體之類)
$mail->AltBody = "喵喵喵";
//信件內容(純文字版)

if (!$mail->Send()) {
    echo "寄信發生錯誤：" . $mail->ErrorInfo;
    //如果有錯誤會印出原因
} else {
    echo "寄信成功";
}

?>



<script type="text/javascript">
    window.location.href = "contact.php";
</script>
