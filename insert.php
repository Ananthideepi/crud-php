<?php
 
include "connection.php";
extract($_POST);

//  print_r($_POST);
if(isset($sendrollno) && isset($sendname) && isset($sendemail) && isset($sendphoneno)){

    $sql="insert into `studentinformation`(rollno,name,email,phoneno)
        values('$sendrollno','$sendname','$sendemail','$sendphoneno')";

    $result=mysqli_query($con ,$sql);
}

?>