
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script src="js/jquery-3.6.3.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#btn').click(function(){
// show hied toggle
				// $('p').show();
				// $('p').show();
				// $('p').toggle();

// fade effect
				$('#btn').click(function(){
					$('#div1').fadeTo("slow",0.3);
					$('#div2').fadeTo("slow",0.5);
					$('#div3').fadeTo("slow",0.7);
//				})




			})

		})
	</script>
</head>
<body>
	<input type="button" value="save" id="btn">
<!-- <p>this is p tag</p> -->
<!-- <p >this is p tag</p> -->
<!-- <p>this is p tag</p> -->
<div id ="div1" style="width: 100px; height: 100px; background-color: red;">this is div tag</div>
<div id ="div2" style="width: 100px; height: 100px; background-color: green;">this is div tag</div>
<div id ="div3" style="width: 100px; height: 100px; background-color: blue;">this is div tag</div>

</body>
</html>