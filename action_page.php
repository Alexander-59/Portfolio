<?php

$name = $_POST["Name"];
$email = $_POST["Email"];
$sub =$_POST["Subject"];
$msg = $_POST["Message"];

echo $_POST['Name'];

echo ($name);

$filename = 'data.csv';
$new_csv = fopen($filename,'w');
$order = array(
    0 => "Name", 1 => "Email",  2 => "Subject", 3 => "Message"
);

fputcsv($new_csv,$order);

?>