<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
		<script type="text/javascript">
			


			function showhint(name) 
			{
				if(name.length==0)
				{
					console.log('value not found');
				}else
				{
					console.log(name);
					var http = new  XMLHttpRequest();
					http.onreadystatechange = function()
					{
						if(this.readyState == 4 && this.status==200)
						{
							document.getElementById('data').innerHTML = this.responseText; 
						}
					}
					http.open("POST","hint_mysql.php?",true);
					http.setRequestHeader("content-type","application/x-www-form-urlencoded");
					http.send("u_name="+name);
				}


			}
		</script>



</head>
<body>
	<table>
		<tr>
			<td>name:</td>
			<td>
				<input type="text" name="" onkeyup="showhint(this.value)"> 
			</td>
		</tr>
		<!-- <h1 id="title"></h1> -->
	</table>
	<li id="data">
		
	</li>
</body>
</html>