<?php
global $conn;
include ("config/database.php");

if(isset($_POST["submit"])){
    extract($_POST);
    $sql="INSERT INTO c_data(fullname,age,gender,email,phone,comment) VALUES('$f_name','$age','$gender','$email','$phone','$comment')";
    $result=$conn->query($sql);
    if ($result) {
        $last_id=$conn->insert_id;
        header("location:review.php?id=$last_id");

    } else {
        echo "Try Again momentarily".$conn->error;
    }

}else{
    echo "An Error Occurred Please Try Again";
}

