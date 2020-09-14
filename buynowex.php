<?php

use PHPMailer\PHPMailer\PHPMailer;

session_start();
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$address = filter_input(INPUT_POST, 'address');
$count = 0;
if (!empty($name)) {
    if (!empty($email)) {
        $host = "127.0.0.1";
        $dbusername = "hj";
        $dbpassword = "test1234";
        $dbname = "db_commodity";
        // Create connection
        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

        $user = $_SESSION["account"];

        if (mysqli_connect_error()) {
            die('Connect Error (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
        } else {
            $a = rand(0,10000);
            $sql = "INSERT INTO buynow ( name, email, address,user,COUNT)
            values ('$name','$email','$address','$user','$a')";

            $result = $conn->query($sql);

            $tototal = null;
            $sql_c = "SELECT SUM(buynumber),SUM(total),name FROM buybuy GROUP BY model,user HAVING user='$user'";
            $result_c = $conn->query($sql_c);


            while ($row_c  = $result_c->fetch_assoc()) {
                $dbname = $row_c["name"];
                $dbtobuy = $row_c["SUM(buynumber)"];
                $dbtotal = $row_c["SUM(total)"];
                
                $sql_r = "INSERT into buycar(user,item,buynumber,count) values('{$user}','{$dbname}','{$dbtobuy}','$a')";
                $result_r = $conn->query($sql_r);
            }








            if ($conn->query($sql)) {


                echo "New record is inserted sucessfully";
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

$mail->Username = "s9609080@gmail.com";
$mail->Password = "sean326706";
//這邊是你的gmail帳號和密碼

$mail->FromName = "卑鄙粘之棉";
// 寄件者名稱(你自己要顯示的名稱)
$webmaster_email = "s9609080@gmail.com";
//回覆信件至此信箱


$email = filter_input(INPUT_POST, 'email');
// 收件者信箱
$name = filter_input(INPUT_POST, 'name');
// 收件者的名稱or暱稱
$mail->From = $webmaster_email;


$mail->AddAddress($email, $name);
$mail->AddReplyTo($webmaster_email, "Squall.f");
//這不用改

$mail->WordWrap = 50;
//每50行斷一次行

//$mail->AddAttachment("/XXX.rar");
// 附加檔案可以用這種語法(記得把上一行的//去掉)

$mail->IsHTML(true); // send as HTML

$mail->Subject = "卑弊粘之棉";
// 信件標題
$mail->Body = "已收到您的訂單 在確認收款之後會寄出貨品";
//信件內容(html版，就是可以有html標籤的如粗體、斜體之類)
$mail->AltBody = "已收到您的訂單 在確認收款之後會寄出貨品";
//信件內容(純文字版)

if (!$mail->Send()) {
    echo "寄信發生錯誤：" . $mail->ErrorInfo;
    //如果有錯誤會印出原因
} else {
    echo "寄信成功";
}
?>


<script type="text/javascript">
    alert("收到您的回報\n已發送確認信件至您的E-Mail，請查收");
    window.location.href = "pay.php";
</script>