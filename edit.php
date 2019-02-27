<?php 

require('header.php');
require('connection.php');

$id=null;
$id=$_GET['id'];
//$sql= " SELECT name,email FROM users where id='$id';";
$newname=null;
if(isset($_POST['newname'])){
    $newname=$_POST['newname'];
}
$newmail=null;
if(isset($_POST['newmail'])){
    $newmail=$_POST['newmail'];
}

$sql="UPDATE users SET name='$newname' ,email='$newmail' where id='$id';";
$result=$conn->query($sql);
//header('Location:http://localhost/index.php');

?>
<html>
<style>
    body{
        background-color: #f2f2f2;
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
    h1{
        color: #e9c429;
        font-family: "Arial Rounded MT Bold";
        font-size: xx-large;
        padding-top: 12px;
        text-align: center;
    }
</style>
<body>
 
<div style="padding: 6%; padding-left: 300px">
     

    <form action=""  method="post"  >
  
        <label for="fname" style="color: darkcyan"><b>Name</b></label>
        <input type="text" id="fname" name="newname"><br>
        
        <label for="fname" style="color: darkcyan"><b>Email &nbsp;</b></label>
        <input type="text"  name="newmail">
       
                   <input type="submit" value="Update ">

    </form>
</div>

</body>
</html>
