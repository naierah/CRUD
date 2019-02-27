<?php 

require('header.php');
require('connection.php');
session_start();
$name=null;
if(isset($_POST['name'])){
	$name=$_POST['name'];
}
$email=null;
if(isset($_POST['email'])){
	$email=$_POST['email'];
}
//echo $name;
//echo $email;
if($name && $email){
	$sql="INSERT into users(name,email) VALUES('$name','$email');";
	$result=$conn->query($sql);
	header('Location:http://localhost/index.php');
}

?>
<html>
<style>
    body{
        background-color: #ccc;
    }
    input[type=text], select {
        width:60%;
        height:50px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type=submit] {
        width: 70%;
        height:50px;
        background-color: darkcyan;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type=submit]:hover {
        background-color: darksalmon;
    }

    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
  
</style>
<body>

<div style="padding: 6%; padding-left: 300px">
     

    <form action=""  method="post"  >
        
        <label for="fname" style="color: darkcyan"><b>Your Name</b></label>
        <input type="text" name="name"><br>
        <label for="fname" style="color: darkcyan"><b> Your Email </b></label>
                <input type="text" name="email">
                   <input type="submit" value="create person">

    </form>
</div>

</body>
</html>
