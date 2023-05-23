<?php
include "connection.php";

extract($_POST);

// if(!empty($_POST['submit'])){

   

 if(isset($sendrollno) && isset($sendname)){
    // echo $sendname;
    // echo $sendrollno;
     echo   $sql="insert into `studentinformation`(name, rollno)values('$sendname' ,'$sendrollno')";
        $result=mysqli_query($con, $sql);

    } 
//  }
//  else {

//     echo "empty request";
// }
?>
