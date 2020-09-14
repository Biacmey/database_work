<?php
$dbhost = '127.0.0.1';
$dbuser = 'root';
$dbpass = '23634495';
$dbname = 'picture';

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//組合查詢字串
$SQLSTR="select filepic,filetype from myimage where filename='"
         . $_REQUEST["filename"] . "'";
//
$cur=mysqli_query($conn,$SQLSTR);
//取出資料
$data=mysqli_fetch_array($cur);

//設定網頁資料格式
header("Content-Type: $data[1]");
// 輸出圖片資料
echo base64_decode($data[0]);
?>