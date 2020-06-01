<?php

    $conn=mysqli_connect('localhost','root','')or die(mysqli_error($conn));
    $db=mysqli_select_db($conn,'contact')or die(mysqli_error($conn));
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $email=$_POST['email'];
    $coment=$_POST['coment'];
    $query=mysqli_query($conn,"INSERT into contact (name,surname,email,coment)
        VALUES ('".$name."','".$surname."','".$email."','".$coment."')") or die(mysqli_error($conn));
    if($query){
        echo "Inserted";
    }else{
        echo "Failed";
    }     


?>