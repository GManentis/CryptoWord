$(document).ready(function()
{
		
	$("#submit").click(function()
	{
			
		  var tex = $("#myText").val();
		  var pass = $("#password").val();
		 	
			$.ajax
			({
				type:'POST',
				data:{tex:tex,pass:pass},
				url:'ajax/EncodeText.php',
				success:function(result)
				{
					$("#response1").html(result);
					$("#myText").val("");
					$("#password").val("");
							
				}
				
			  }); 
		
	});	
	
	$("#fetch").click(function()
	{
			
		  var pass = $("#pass").val();
		 	
			$.ajax
			({
				type:'POST',
				data:{pass:pass},
				url:'ajax/DecodeText.php',
				success:function(result)
				{
					$("#response2").html(result);				
					$("#pass").val("");
				}
				
			  }); 
		
	});
	
});
