function new_field(){
  var  popup=document.getElementById("popup");
    popup.setAttribute("style","display:block");
    // console.log("popup")
}
function close_x(){
  var  popup=document.getElementById("popup");
    popup.setAttribute("style","display:none");

var update=document.getElementById("popup_update");
    update.setAttribute("style","display:none");
    // console.log("popup closed");
}
function search(){
    $(".bi-search").click(function(){
      $("#search_field").toggle();
    });
  };
// ................................................................
var form=document.getElementById("form");
function adduser(){
        var rollno = $("#completeRollno").val();
        var name = $("#completeName").val();
        var email = $("#completeEmail").val();
        var phoneno = $("#completephoneno").val();
         console.log(rollno)
        $.ajax({
            type:"POST",
            url:"insert.php",
            data:{
                sendname:name,
                sendrollno:rollno,
                sendemail:email,
                sendphoneno:phoneno,
            },
            success:function(data, status){
                display();
                // total_count();
            }
        })
    close_x();       
}
// .......................................................................
function display(){
    var display ="true";
    $.ajax({
        type:"POST",
        url:"display.php",
        data:{
            senddisplay:display
        },
        success:function(data,status){
            //  console.log("data",data);

           $("#person_list").html(data);
        //    location.reload();
          
        }
    })
}
// ........................................................................................
function delete_row(rollno){

    var display ="true";
    $.ajax({
        type:"POST",
        url:"delete.php",
        data:{
            sendrollno:rollno
        },
        success:function(data,status){
            location.reload();
            display();

        }
    })
}
// ..................................................................................
function updated(rollno){
console.log("rollno",rollno);

var  update=document.getElementById("popup_update");
update.setAttribute("style","display:block");
    $.ajax({
        type:"POST",
        url:"get.php",
        data:{
            updateid:rollno
        },
        data_type:"JSON",
  
    success:function(data,status){
            console.log("data",data);
            data= JSON.parse(data);
            console.log(data.name);
          
                $("#updateName").val(data.name);
                $("#updateRollno").val(data.rollno);
                $("#updateEmail").val(data.email);
                $("#updatephoneno").val(data.phoneno);
        }
  })

}
// ......................................................................................
function update_value(){
 
  var up_name= $("#updateName").val();
  var up_rollno= $("#updateRollno").val();
  var up_email= $("#updateEmail").val();
  var up_phoneno= $("#updatephoneno").val();

  $.ajax({
    type:"POST",
    url:"update.php",
    data:{
        sendname:up_name,
        sendemail:up_email,
        sendphoneno:up_phoneno,
        sendrollno:up_rollno,
    },
    success:function(data, status){
        display();
        // total_count();
    }
})
  close_x();
}

const input_search=document.getElementById("input");
input_search.addEventListener("input",search_data);

function search_data(event){
var search_word=event.target.value ;

    if(search_word !=""){
        $.ajax({
            type:"post",
            url:"search.php",
            data:{
               send_search_word:search_word ,
            },
            success:function(data,status){
                $("#person_list").html(data);
            }
        })
    }
    else{
        display();
    }
    // display = table.filter( item => item.name.toLowerCase().includes(event.target.value.toLowerCase()))


}
// .....................................................................................
function sort(){
    var display ="true";
    $.ajax({
        type:"post",
        url:"sort.php",
        data:{
        sort_data:display,
        },
        success:function(data,status){
            $("#person_list").html(data);
        }
    })
}