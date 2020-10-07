$.ajax({
							type:"POST",
							url:"comments.php",
							//data:dataText,
							//cache:false,
							//dataType:"html",
							success:function(result) { 
								$('.msgs').html(result);
								$(".jumbotron").addClass("jumbotron-fluid");
								$(".name").addClass("col-lg-8");
								$(".fa-user").addClass("fa");
								$(".email").addClass("col-lg-4");
								$(".fa-envelope").addClass("fa");
								$(".msg").addClass("col-lg-12");
								$(".msg").addClass("row");
							}
});