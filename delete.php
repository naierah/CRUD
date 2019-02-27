<?php
require('connection.php');
$id=null;
$id=$_REQUEST['id'];
$sql="DELETE from users where id='$id';";
$result=$conn->query($sql);
header('Location:http://localhost/index.php');
?>