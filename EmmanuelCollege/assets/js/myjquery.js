//Delete Function
$(document).ready(function() {
	//Create dialog Edite  
   	$delete_dialog = $("#delete_dialog").dialog({  
    autoOpen:false,   
    title:"Delete User Information",   
    modal:true,   
    buttons: { 
      "Delete": function() { 
	  	
		var id = $("#id2").val();
		if(id=='')
			{
				alert("No record found in the database....!",title="Delete User Information");
				exit;
			}//End if statement
			
		$.post('processDelete.php',{
			user_id: id, action:'joined'
		});//End Post
		$(this).dialog("close");
		window.location.replace("http://localhost/jQuery_UI_Bootstrap");		
		},
      "Cancel": function() { 
	  	$(this).dialog("close"); 
		} 
    }
   });  
     
   //when the edit link is clicked  
   function delete_link_action() {  
    //get closest book div  
    var user = $(this).closest('.user');  
      
    //get id from div  
    var id = user.attr('id'); 
	
    //set id in form  
    $('#delete_dialog input[name="id2"]').val(id);  
        
    //open dialog  
    $delete_dialog.dialog('open');  
      
    //stop default link action  
    return false;  
   }  
     
   //attach action to edit links  
   $(".delete").click(delete_link_action);  
  }); 
  
  
////////////////////////// Update Function ///////////////////////////////////

$(document).ready(function() {
	//Create dialog Edite  
   	$edit_dialog = $("#edit_dialog").dialog({  
    autoOpen:false,   
    title:"Edit User Information",   
    modal:true,   
    buttons: { 
      "Update": function() { 
	  	
		var id = $("#id1").val(),
		name = $('#name1').val(),
		age = $('#age1').val();
		if(name=='' || age=='')
			{
				//alert("Please do not empty....!",title="Hello");
				$("#d2").dialog("open");
				$("#d2").dialog({
					buttons:{
						"OK":function(){
								$(this).dialog("close");
								$("#id:first").focus();	
							}
						}
					}); 
				exit;
			}//End if statement
			
		$.post('processUpdate.php',{
			user_id: id, user_name: name, user_age: age, action:'joined'
		});//End Post
		$(this).dialog("close");
		window.location.replace("http://localhost/jQuery_UI_Bootstrap");		
		},
      "Cancel": function() { 
	  	$("#id").val('');
		$("#name").val('');
		$("#age").val('');
	  	$(this).dialog("close"); 
		} 
    }
   });  
     
   //when the edit link is clicked  
   function edit_link_action() {  
    //get closest book div  
    var user = $(this).closest('.user');  
      
    //get id from div  
    var id = user.attr('id'); 
	
    //set id in form  
    $('#edit_dialog input[name="id1"]').val(id).attr('disabled','disabled');  
      
    //set current name in form 
	$('#edit_dialog input[name="name1"]').val($('.name',user).html());  
    
	//set current age in form
	$('#edit_dialog input[name="age1"]').val($('.age',user).html());
        
    //open dialog  
    $edit_dialog.dialog('open');  
      
    //stop default link action  
    return false;  
   }  
     
   //attach action to edit links  
   $(".edit").click(edit_link_action);  
  });
   
  
// Add Function   

$(function () {
	
	$(".sub").click(function(){
	var id=$("#hidid").val();
	alert(id);
	})
// Add New Dialog Open	 
$("#d1").dialog({
    autoOpen: false,
    height: 'auto',
    width: 'auto',
    modal: true,
	closeOnEscape:true, 
	resizable:false, 
	show:'fade',
    buttons: { 
      "Add": function() { 
	  	
		var id = $("#id").val(),
		name = $('#name').val(),
		age = $('#age').val();
		if(id=='' || name=='' || age=='')
			{
				//alert("Please do not empty....!",title="Hello");
				$("#d2").dialog("open");
				$("#d2").dialog({
					buttons:{
						"OK":function(){
								$(this).dialog("close");
								$("#id:first").focus();	
							}
						}
					}); 
				exit;
			}//End if statement
			
		$.post('processAdd_room.php',{
			user_id: id, user_name: name, user_age: age, action:'joined'
		});//End Post
		$("#id").val('');
		$("#name").val('');
		$("#age").val('');				
		$(this).dialog("close");
		window.location.replace("http://localhost/jQuery_UI_Bootstrap");		
		},
      "Cancel": function() { 
	  	$("#id").val('');
		$("#name").val('');
		$("#age").val('');
	  	$(this).dialog("close"); 
		} 
    }
});


$("#d2").dialog({
    autoOpen: false,
    height: 'auto',
    width: 'auto',
    modal: true,
	closeOnEscape:true, 
	resizable:false, 
	show:'fade',
    buttons: { 
      "Ok": function() { $(this).dialog("close"); } 
    }
});

$("#b1").click(function(){
    $("#d1").dialog("open");
});

});

////////////// Making Tooltip /////////////////////////
$(function() {
    $('a[title]').qtip({
         show: {
             delay: 1
         },
         hide: {
             delay: 0
         }
     });
	 $('button').qtip({
         show: {
             delay: 1
         },
         hide: {
             delay: 0
         }
     });
	 $('input[title]').qtip({
         show: {
             delay: 1
         },
         hide: {
             delay: 0
         }
     });
  });

