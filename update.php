<?php
    include "config.php";

    if(isset($_POST['update'])){
        $user_id=$_POST['id'];
        $first_name=$_POST['firstname'];
        $last_name=$_POST['lastname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $gender=$_POST['gender'];
    
    $sql="UPDATE `users` SET `firstname`='$first_name',`lastname`='$last_name',`email`='$email',`password`='$password',`gender`='$gender' where `id`='$user_id'";
    
    $result=mysqli_query($conn,$sql);

    if($result==TRUE){
        echo "your data is updated";
        header('Location: index.php');
    }
    else{
        echo "error:".$sql."<br>".$conn->error;
    }
}
    if(isset($_GET["id"])){
         $user_id=$_GET["id"];
         $sql= "SELECT * FROM `users` WHERE `id`='$user_id'";
         $result=mysqli_query($conn,$sql);
         
            while($_row=$result->fetch_assoc()){
              $first_name=$_row['firstname'];
              $last_name=$_row['lastname'];
              $email=$_row['email'];
              $password=$_row['password'];
              $gender=$_row['gender'];
              $id=$_row['id'];
    }
}
         ?> 
         <h2>updated form</h2>
        <form action="update.php" method="POST">
            <fieldset>
                <legend>personal information</legend>
                First name:<br>
                <input type="text" name="firstname" value="<?php echo $first_name;?>">
                <input type="hidden" name="user_id" value="<?php echo $id;?>">
                <br>
                Last name:<br>
                <input type="text" name="lastname" value="<?php echo $last_name;?>">
                <br>
                Password<br>
                <input type="text" name="password" value="<?php echo $password;?>">
                <br>
                Email<br>
                <input type="text" name="email" value="<?php echo $email;?>">
                <br>
                Gender<br>
                <input type="radio" name="gender" value="male" <?php if($gender=='male'){ echo "checked";}?>>male
                <input type="radio" name="gender" value="female"<?php if($gender=='female'){ echo "checked";}?>>female
                <br>
                <input type="submit" name="update" value="update">
            </fieldset>
        </form>
        </body>
        </html>
