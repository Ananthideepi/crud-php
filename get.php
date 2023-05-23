<?php
include "connection.php";

if(isset($_POST['updateid'])){
    $user_id=$_POST['updateid'];

    // echo  $user_id;
    $sql= "select * from `studentinformation` WHERE rollno = $user_id";
    $result=mysqli_query($con, $sql);

    $response=[];

    while($row=mysqli_fetch_assoc($result)){
        $response=$row;
    }
    echo json_encode($response);
          
}
?>