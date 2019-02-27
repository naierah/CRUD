<?php 
require('connection.php');
require('header.php');
$sql="SELECT  * from users ;";
$result=$conn->query($sql);
 $rows = $result->fetch_all(MYSQLI_ASSOC);
 //var_dump($rows);
 //print_r($rows[0]['name']);
  ?>
 <html>
 <title>CRUD</title>
 <body>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Users </h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Action</th>
        </tr>
          <?php foreach ($rows as $key => $value) {   ?> 
          <tr>
            <td><?php echo $rows[$key]['id']."<br>"; ?></td>
            <td><?php echo $rows[$key]['name']."<br>";?></td>
            <td><?php echo $rows[$key]['email']."<br>";?></td>
         
         <td>
              <a href="edit.php?id=<?php echo $rows[$key]['id'] ?>"  class="btn btn-info">Edit</a>

              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?id=<?php echo $rows[$key]['id'] ?>" class='btn btn-danger'>Delete</a>
            </td>
          </tr>
         <?php  } ?>
      </table>
    </div>
  </div>
</div>
</body>
</html>
 

