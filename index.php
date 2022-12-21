<?php
  include "config.php";

  $sql="SELECT *FROM users";

  $result=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>view page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <a href="create.php">add</a>
        <h2>users</h2> 
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>first name</th>
                    <th>last name</th>
                    <th>email</th>
                    <th>password</th>
                    <th>gender</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
              <?php
                  if($result->num_rows>0){
                    while($row=$result->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['firstname'];?></td>
                    <td><?php echo $row['lastname'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['password'];?></td>
                    <td><?php echo $row['gender'];?></td>
                    <td><a class="btn btn-info" href="update.php?id=<?php echo $row["id"];?>">
                    EDIT</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id'];?>">
                    Delete</a></td>
                    </tr>
                        <?php
                    }
                }
                    ?>
            </tbody>
            </table>
    </div>
</body>
</html>
