<?php
$servername='krish123.github.io';
$username='root';
$password='';
$dbname = "krish123";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>