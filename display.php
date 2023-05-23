<?php

include "connection.php";

    $table='<table>
               <thead>
                        <tr>
                            <th>S.no</th>
                            <th>Rollno<i class="bi bi-caret-down"onclick="rollno_reverse()"></i>
                                      <i class="bi bi-caret-up" onclick="sort()"></i></th>
                            <th>Name<i class="bi bi-caret-down" onclick="reverse()"></i>
                                    <i class="bi bi-caret-up" onclick="sort()"></i> </th>
                            <th>Email</th>
                            <th>Phoneno</th>
                            <th>Action <i class="bi bi-search" onclick="search()"></i></th>
                        </tr>
                </thead><tbody>';

    $sql="select *  from `studentinformation` WHERE 1";
    $result=mysqli_query($con, $sql);
//  print_r( $result); 
//  $row = mysqli_fetch_assoc($result)
//  print_r( $row ); 
// echo $length=mysqli_num_rows($result);
 

if($result){
    if(mysqli_num_rows($result) > 0){
        $number=1;
        while($row = mysqli_fetch_assoc($result)){
            // echo $row['id'];
            // echo $row['rollno'];
            // echo $row['name'];
            // echo $row['email'];
            // echo $row['phoneno'];

        // print_r($row);
                $id=$row['id'];
                $rollno=$row['rollno'];
                $name=$row['name'];
                $email=$row['email'];
                $phoneno=$row['phoneno'];

             
                $table.='<tr>
                    <td>'. $number.'</td>
                    <td>'.$rollno.'</td>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$phoneno.'</td>
                    <td>  <div class="dropdown">
                    <button class="dropbtn">Action<i class="bi bi-caret-down"></i></button>
                                      <div class="dropdown-content">
                                      <a  onclick="updated('.$rollno.')">Edit</a>
                                      <a onclick="delete_row('.$rollno.')">Delete</a>
                                      </div>    
                    </div></td> 
                    
                   <tr>';
                $number++;
              
       }
    }
 
            }
          
   $table.=`</tbody></table>`;
echo $table;     

?>