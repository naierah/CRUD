<?php 
const HOST='127.0.0.1:3306';
const USER='root';
const PASSWORD='';
const DATABASE='crud';
$conn=mysqli_connect(HOST,USER,PASSWORD,DATABASE);
 // if($conn->connect_errno >0){
 // 	die('cannot connect database');

 // }else{
 // 	echo "successfully connected";
 // }