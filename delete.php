<?php
    include "config.php";

    if(isset($_GET['id'])){
        $user_id=$_GET['id'];
        $sql="DELETE FROM `users` WHERE `id`='$user_id'";
        $result=mysqli_query($conn,$sql);
        if($result==TRUE){
            echo "deleted successfully";
            header('Location: index.php');
        }
        else{
            echo "erroe".$sql."<br>".$conn->error;
        }
    }
    ?>