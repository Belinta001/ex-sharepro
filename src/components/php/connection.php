<?php
 $server= 'localhost';
 $user='root';
 $password='';
 $database='ex-share';
 $conn=mysqli_connect($server, $user, $password, $database);
 if($conn->connect_error){
     die("Connection failed:".$conn->connect_error);
 }
 echo "connection successful";
?>