<?php 

$dbhost = '127.0.0.1';
                $dbuser = 'hj';
                $dbpass = 'test1234';
                $dbname = 'db_commodity';

                $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $del_id=$_GET[“id”]; 
                $exec=”delete from info where id=$del_id”; 

                $sql = "SELECT * FROM buybuy";
                $result = $conn->query($sql);


                // $sql = "delete from buybuy where id='$del_id'";
                // $result = $conn->query($sql);

                    
                $conn->close();   
                
                
?> 

<a href="buybuycar.php">返回刪除頁面</a>