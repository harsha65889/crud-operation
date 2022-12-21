<?php
    include "config.php";

    if(isset($_POST['submit'])){
        $first_name=$_POST['firstname'];
        $last_name=$_POST['lastname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $gender=$_POST['gender'];
    //$sql="INSERT INTO `table name` (`user values`)VALUES('variables of user values')";
    $sql="INSERT INTO `users` (`firstname`,`lastname`,`email`,`password`,`gender`) VALUES ('$first_name','$last_name','$email','$password','$gender')";
 
    $result=mysqli_query($conn,$sql);

    if($result==TRUE){
        echo "new record created successfully";
    }
    else{
        echo "error".$sql."<br>".$conn->error;
    }
    $conn->close();
    }
?>

<html>
<body>
    <h2>signup form</h2>
    <form action="" method="POST">
        <fieldset>
            <legend>personal information</legend>
            First name:<br>
            <input type="text" name="firstname">
            <br>
            Last name:<br>
            <input type="text" name="lastname">
            <br>
            Password<br>
            <input type="text" name="password">
            <br>
            Email<br>
            <input type="text" name="email">
            <br>
            Gender<br>
            <input type="radio" name="gender" value="male">male
            <input type="radio" name="gender" value="female">female
            <br>
            <input type="submit" name="submit" value="submit">
        </fieldset>
    </form>
</body>
</html>