<!doctype html>

<html>


	<head>
		
		<title>.:: GAUSSIAN ELIMINATION METHOD</title>
		<meta charset="utf-8" />
		<link href="css.css" rel="stylesheet" type="text/css" />
	
	</head>
	
	
	<body>
		<header>		
			<div id="header">
				<a href="index.php">GAUSSIAN ELIMINATION METHOD</a>
			</div>			
		</header>
				
		<div id="container">	
			<form action="solve.php" method="post">	
				<!--number table-->
				<table class="table1" border="2" style="margin-top: 0px;">
					<tr>
						<th colspan="6">
							ENTER THE VALUES IN THE BOX BELOW	
						</th>
					</tr>
					<tr>
						<td>
							<input type="text" name="r1c1" autofocus />
						</td>
						<td>
							<input type="text" name="r1c2" />
						</td>
						<td>
							<input type="text" name="r1c3" />
						</td>
						<td>
							<input type="text" name="r1c4" />
						</td>
						<td>
							<input type="text" name="r1c5" />
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="r2c1" />
						</td>
						<td>
							<input type="text" name="r2c2" />
						</td>
						<td>
							<input type="text" name="r2c3" />
						</td>
						<td>
							<input type="text" name="r2c4" />
						</td>
						<td>
							<input type="text" name="r2c5" />
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="r3c1" />
						</td>
						<td>
							<input type="text" name="r3c2" />
						</td>
						<td>
							<input type="text" name="r3c3" />
						</td>
						<td>
							<input type="text" name="r3c4" />
						</td>
						<td>
							<input type="text" name="r3c5" />
						</td>
					</tr>
					<tr>
						<td>
							<input type="text" name="r4c1" />
						</td>
						<td>
							<input type="text" name="r4c2" />
						</td>
						<td>
							<input type="text" name="r4c3" />
						</td>
						<td>
							<input type="text" name="r4c4" />
						</td>
						<td>
							<input type="text" name="r4c5" />
						</td>
					</tr>
				</table>
				<!--end number table-->
				<input class="solve" type="submit" name="submit" onclick="Solve();" value="CLICK HERE TO SOLVE" />
			</form>	
		</div>
		
		<script >
			function Solve(){
				confirm("Are you sure you have enetred the values correctly and want to solve this ?"); 
			}
		</script>
		
	</body>
</html>