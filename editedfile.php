<?php
    require 'config.php';
    $head=$_POST['heading'];
    $data=$_POST['newsbody'];
    $id=$_GET['id'];
    $statement="update test set heading='$head',summertext='$data' where id=$id";
    $result=mysqli_query($conn,$statement);

    if($result){
        
        $timeUpdate = "update test set UpdatedAt=now() where id='$id'";
        mysqli_query($conn,$timeUpdate);
        
        header('location:viewdata.php');
    }
    else{
        die("Query failed".mysqli_error($conn));
    }


?>