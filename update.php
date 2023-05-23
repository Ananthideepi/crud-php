<?php
    include "connection.php";
    extract($_POST);

    //  print_r($_POST);
    if( isset($sendrollno)&&isset($sendname) && isset($sendemail) && isset($sendphoneno)){

        $sql="update studentinformation SET name = '$sendname', email='$sendemail', phoneno='$sendphoneno' where rollno='$sendrollno'";
           
    
        $result=mysqli_query($con ,$sql);


    }
?>

