<?php
   include "count.php";
   include "get.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
   
</head>
<body onload ="display()">


    <div class="full_body">
        <h1>Student Information: </h1>

        <div class="add_field">
        <button onclick="new_field()"><i class="bi bi-person-plus-fill"></i> Add</button>
        </div>

        <div class="popup_field"  style="display:none"  id="popup">
                <div class="form_field" id="form" >

                    <div class="close">
                        <h2>Fill the details</h2>
                        <i class="bi bi-x" onclick="close_x()"></i>
                    </div>

                    <form class="forms">
                            <label for="rollno">  Rollno:
                                <input type="number" placeholder="Enter your rollno" id="completeRollno">
                            </label>

                            <label for="name">  Name:
                                <input type="name" placeholder="Enter your name" id="completeName">
                            </label>
                            
                            <label for="email"> Email:
                                <input type="email" placeholder="Enter your email" id="completeEmail">
                            </label>

                            <label for="phoneno"> Number:
                                <input type="text" placeholder="Enter your number" id="completephoneno">
                            </label>
                    </form>

                    <div class="button">
                        <button type="button" id="submit"  onclick="adduser()" > Submit</button>
                        <button type="button" id="update" style="display:none" >update</button>
                    </div>
                
                </div>
    </div>
    <br>
        <br>

        <div class="popup_field_update"  style="display:none"  id="popup_update">
                <div class="form_field" id="form_update" >

                    <div class="close">
                        <h2>Fill the details</h2>
                        <i class="bi bi-x" onclick="close_x()"></i>
                    </div>

                    <form class="forms_update">
                            <label for="updateRollno">  Rollno:
                                <input type="number" placeholder="Enter your rollno" id="updateRollno">
                            </label>

                            <label for="updateName">  Name:
                                <input type="name" placeholder="Enter your name" id="updateName">
                            </label>
                            
                            <label for="updateEmail"> Email:
                                <input type="email" placeholder="Enter your email" id="updateEmail">
                            </label>

                            <label for="updatephoneno"> Number:
                                <input type="text" placeholder="Enter your number" id="updatephoneno">
                            </label>
                    </form>

                    <div class="button">
                        <!-- <button type="button" id="submit"  onclick="adduser()" > Submit</button> -->
                        <button type="button" id="update"  onclick="update_value()">update</button>
                    </div>
                
                </div>
    </div>
        <div class="container">
        
            <div id="classroom">
        
                    <div class="head_field">
                            <div class="head">
                                <h2>Students</h2>
                                <p>Total count <span id="total_count" ><?php echo $length ?></span></p>
                            </div>
                            <div class="search"  id="search_field"style="display:none">  
                                <input type="text" id="input" placeholder="search the name...">
                            </div>
                    </div>
                            
                <div id="person_list">              
                </div>
                        
            </div>
        </div>
 
    <div id="pagination">
  <?php  echo $button ?>
    </div>
</div>
<!-- .......................................................................................................... -->


                       
      
   
    
<script src="script.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
</body>
</html>