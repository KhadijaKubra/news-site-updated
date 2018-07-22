<?php

//including the database connection file
    include("config.php");
    //connect_db();
//getting id of the data from url
    $id = $_GET['id'];
   /// $head=$_POST['heading'];
   // $data=$_POST['newsbody'];


//deleting the row from table // actually not deleting it just unlinking from the result
    $statement="update test SET DeletedAT=now() WHERE id='$id';";
   
   // $statement ="select * from test where DeletedAT is not null";
    $result = mysqli_multi_query($conn,$statement);
	//close_db();
	 mysqli_close($conn);
//redirecting to the display page (listdata.php in our case)
    header("Location:listdata.php");

?>

