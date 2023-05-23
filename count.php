<?php

include "connection.php";

$sql="select *  from `studentinformation` WHERE 1";
$result=mysqli_query($con, $sql);

 $length=mysqli_num_rows($result);

?>