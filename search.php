<?php

include "connection.php";


$table='<table>
<thead>
         <tr>
             <th>S.no</th>
             <th>Rollno</th>
             <th>Name</th>
             <th>Email</th>
             <th>Phoneno</th>
             <th>Action <i class="bi bi-search" onclick="search()"></i></th>
         </tr>
 </thead><tbody>';
  
if(isset($_POST['send_search_word'])){

    $search_data=$_POST['send_search_word'];
    $sql="select *  from `studentinformation` WHERE name LIKE '{$search_data}%'";
    $result=mysqli_query($con, $sql);

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
                                                <td><i class="bi bi-pencil-square" onclick="updated('.$rollno.')"></i>/<i class="bi bi-trash-fill" onclick="delete_row('.$rollno.')"></i></td>
                                            <tr>';
                                            $number++;
                                        
                                    }
                                }                          
                        }
          
        $table.=`</tbody></table>`;
        echo $table;     

}
else{
 echo '<div id="display_table">no data found </div>';

}
        
?>