<?php


include "connection.php";

if(isset($_POST['sendrollno'])){

 $delete_data=$_POST['sendrollno'];

$sql="DELETE FROM `studentinformation` WHERE rollno = $delete_data";
$result=mysqli_query($con, $sql);

}

?>