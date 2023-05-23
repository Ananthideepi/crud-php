
<html>
    <input name="name" type="text" placeholder="enter your name..." id="nameid" >
    <input name="rollno" type="number" placeholder="enter your rollno..." id="rollnoid">
    <input type="submit" onclick="add()">

    <br>


    <?php
    include "text.php";

  
    ?>

    <script>
        function add(){
        var name=document.getElementById("nameid").value;
        var rollno=document.getElementById("rollnoid").value;
            $.ajax({
            type:"POST",
            url:"text.php ",
            data:{
                sendname:name,
                sendrollno:rollno,
               
            },
            success:function(data, status){
             console.log(data);
            }
        })

        }

</script>
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script></html>