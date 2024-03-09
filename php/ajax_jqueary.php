<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<script type="text/javascript" src="js/jquery-3.6.3.min.js">
	
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#btn').click(function(){
			// alert("hello");

			//by java script


			// by id --->  		 
			// document.getElementById('data').innerHTML="creative design";
			// by classs--->   	
			 // document.getElementsByClassName('data').innerHTML="creative";
			 	// for( var i=0;i<=document.getElementsByClassName('data').length;i++)
			 	// {
			 	// 	document.getElementsByClassName('data')[i].innerHTML="creative multimedia";
			 	// }

			//by jquery

			// by id--->	   	   
			// $('#data').html("creative multimedia");
			// by classs--->	  
			// $('.data').html("creative");	

		})



		// $('#txt').keyup(function(){
		// 	var  name = $(this).val()
		// 	$.ajax({
		// 			type:"get",
		// 			url:"hint_mysql.php",
		// 			data:{"u_name": name},
		// 			success:function(res){
		// 				$('#data').html(res)
		// 			}

		// 	})
		// })
	})



</script>
</head>
<body>
	<!-- <input type=	"text" name="" id="txt"> -->

	<ol id="data">
	</ol>

<!-- 

 -->


	<input type="button" name="" value="click" id="btn">



</body>
</html>