<?php

include_once('db_conn.php');


$name = $_POST["Name"];
$email = $_POST["Email"];
$sub =$_POST["Subject"];
$msg = $_POST["Message"];

/* CSV FILE
echo $_POST['Name'];

echo ($name);

$filename = 'data.csv';
$new_csv = fopen($filename,'w');
$order = array(
    0 => "Name", 1 => "Email",  2 => "Subject", 3 => "Message"
);

fputcsv($new_csv,$order);
*/

date_default_timezone_set('Asia/Dhaka');
$time = date('Y-m-d H:i:s');

$sinsert = "INSERT INTO `feedback` (name,email,subject,message) VALUES ('$name','$email','$sub','$msg')";

if(!mysqli_query($conn,$sinsert)){
    echo 'Not Inserted!';
}
else{
    echo 'Inserted';
}

header("refresh:2; url=feedback.html");

?>