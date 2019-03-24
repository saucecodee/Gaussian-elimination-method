<?php include 'process.php' ?>	

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
			<!--number table-->
			<table class="table1 tab" border="2" style="margin-top: 0px;">
				<tr>
					<th colspan="5">
						INITIAL VALUES	
					</th>
				</tr>
				<tr>
					<td>
						<?php echo $r1c1 ;?>
					</td>
					<td>
						<?php echo $r1c2 ;?>
					</td>
					<td>
						<?php echo $r1c3;?>
					</td>
					<td>
						<?php echo $r1c4 ;?>
					</td>
					<td>
						<?php echo $r1c5 ;?>
					</td>
				</tr>
				<tr>
					<td>
						<?php echo $r2c1 ;?>
					</td>
					<td>
						<?php echo $r2c2 ;?>
					</td>
					<td>
						<?php echo $r2c3 ;?>
					</td>
					<td>
						<?php echo $r2c4 ;?>
					</td>
					<td>
						<?php echo $r2c5 ;?>
					</td>
				</tr>
				<tr>
					<td>
						<?php echo $r3c1 ;?>
					</td>
					<td>
						<?php echo $r3c2 ;?>
					</td>
					<td>
						<?php echo $r3c3 ;?>
					</td>
					<td>
						<?php echo $r3c4 ;?>
					</td>
					<td>
						<?php echo $r3c5 ;?>
					</td>
				</tr>
				<tr>
					<td>
						<?php echo $r4c1 ;?>
					</td>
					<td>
						<?php echo $r4c2 ;?>
					</td>
					<td>
						<?php echo $r4c3 ;?>
					</td>
					<td>
						<?php echo $r4c4 ;?>
					</td>
					<td>
						<?php echo $r4c5 ;?>
					</td>
				</tr>
			</table>
			<!--end number table-->			
			
			<!--number table-->
			<table class="table1 tab" border="2" style="margin-top: 0px;">
				<tr>
					<th colspan="5" style="background-color:#27ae60;">
						STEP 1
					</th>
				</tr>
				<tr>
					<td style="background-color: #f39c12;">
						<?php echo $r1c1 ;?>
					</td>
					<td>
						<?php echo $r1c2 ;?>
					</td>
					<td>
						<?php echo $r1c3;?>
					</td>
					<td>
						<?php echo $r1c4 ;?>
					</td>
					<td>
						<?php echo $r1c5 ;?>
					</td>
				</tr>
				<tr>
					<td>
						<?php echo $r2c1 ;?>
					</td>
					<td>
						<?php echo $r2c2 ;?>
					</td>
					<td>
						<?php echo $r2c3 ;?>
					</td>
					<td>
						<?php echo $r2c4 ;?>
					</td>
					<td>
						<?php echo $r2c5 ;?>
					</td>
				</tr>
				<tr>
					<td>
						<?php echo $r3c1 ;?>
					</td>
					<td>
						<?php echo $r3c2 ;?>
					</td>
					<td>
						<?php echo $r3c3 ;?>
					</td>
					<td>
						<?php echo $r3c4 ;?>
					</td>
					<td>
						<?php echo $r3c5 ;?>
					</td>
				</tr>
				<tr>
					<td>
						<?php echo $r4c1 ;?>
					</td>
					<td>
						<?php echo $r4c2 ;?>
					</td>
					<td>
						<?php echo $r4c3 ;?>
					</td>
					<td>
						<?php echo $r4c4 ;?>
					</td>
					<td>
						<?php echo $r4c5 ;?>
					</td>
				</tr>
			</table>
			<!--end number table-->
			
			<!--number table-->
			<table class="table1 tab" border="2" style="margin-top: 0px;">
				<tr>
					<th colspan="6" style="background-color:#27ae60;">
						STEP 2
					</th>
				</tr>
				<tr>
					<td>
						<?php echo $s2r1c1 = $r1c1 ;?>
					</td>
					<td>
						<?php echo $s2r1c2 = $r1c2 ;?>
					</td>
					<td>
						<?php echo $s2r1c3 = $r1c3;?>
					</td>
					<td>
						<?php echo $s2r1c4 = $r1c4 ;?>
					</td>
					<td>
						<?php echo $s2r1c5 = $r1c5 ;?>
					</td>
				</tr>
				<tr>
					<td>
						<?php echo $s2r2c1 = (($r1c1*$r2c1)-($r1c1*$r2c1)) ;?>
					</td>
					<td style="background-color: #f39c12;">
						<?php echo $s2r2c2 = (($r1c1*$r2c2)-($r1c2*$r2c1)) ;?>
					</td>
					<td>
						<?php echo $s2r2c3 = (($r1c1*$r2c3)-($r1c3*$r2c1)) ;?>
					</td>
					<td>
						<?php echo $s2r2c4 = (($r1c1*$r2c4)-($r1c4*$r2c1)) ;?>
					</td>
					<td>
						<?php echo $s2r2c5 = (($r1c1*$r2c5)-($r1c5*$r2c1)) ;?>
					</td>
				</tr>
				<tr>
					<td>
						<?php echo $s2r3c1 = (($r1c1*$r3c1)-($r1c1*$r3c1)) ;?>
					</td>
					<td>
						<?php echo $s2r3c2 = (($r1c1*$r3c2)-($r1c2*$r3c1)) ;?>
					</td>
					<td>
						<?php echo $s2r3c3 = (($r1c1*$r3c3)-($r1c3*$r3c1)) ;?>
					</td>
					<td>
						<?php echo $s2r3c4 = (($r1c1*$r3c4)-($r1c4*$r3c1)) ;?>
					</td>
					<td>
						<?php echo $s2r3c5 = (($r1c1*$r3c5)-($r1c5*$r3c1)) ;?>
					</td>
				</tr>
				<tr>
					<td>
						<?php echo $s2r4c1 = (($r1c1*$r4c1)-($r1c1*$r4c1)) ;?>
					</td>
					<td>
						<?php echo $s2r4c2 = (($r1c1*$r4c2)-($r1c2*$r4c1)) ;?>
					</td>
					<td>
						<?php echo $s2r4c3 = (($r1c1*$r4c3)-($r1c3*$r4c1)) ;?>
					</td>
					<td>
						<?php echo $s2r4c4 = (($r1c1*$r4c4)-($r1c4*$r4c1)) ;?>
					</td>
					<td>
						<?php echo $s2r4c5 = (($r1c1*$r4c5)-($r1c5*$r4c1)) ;?>
					</td>
				</tr>
			</table>
			<!--end number table-->
			
			<!--number table-->
			<table class="table1 tab" border="2" style="margin-top: 0px;">
				<tr>
					<th colspan="6" style="background-color:#27ae60;">
						STEP 3
					</th>
				</tr>
				<tr>
					<td>
						<?php echo $s3r1c1 = (($s2r1c1*$s2r2c2)-($s2r1c2*$s2r2c1)) ;?>
					</td>
					<td>
						<?php echo $s3r1c2 = (($s2r1c2*$s2r2c2)-($s2r1c2*$s2r2c2)) ;?>
					</td>
					<td>
						<?php echo $s3r1c3 = (($s2r1c3*$s2r2c2)-($s2r1c2*$s2r2c3)) ;?>
					</td>
					<td>
						<?php echo $s3r1c4 = (($s2r1c4*$s2r2c2)-($s2r1c2*$s2r2c4)) ;?>
					</td>
					<td>
						<?php echo $s3r1c5 = (($s2r1c5*$s2r2c2)-($s2r1c2*$s2r2c5)) ;?>
					</td>
				</tr>
				<tr>
					<td>
						<?php echo $s3r2c1 = $s2r2c1 ;?>
					</td>
					<td>
						<?php echo $s3r2c2 = $s2r2c2 ;?>
					</td>
					<td>
						<?php echo $s3r2c3 = $s2r2c3 ;?>
					</td>
					<td>
						<?php echo $s3r2c4 = $s2r2c4 ;?>
					</td>
					<td>
						<?php echo $s3r2c5 = $s2r2c5 ;?>
					</td>
				</tr>
				<tr>
					<td>
						<?php echo $s3r3c1 = (($s2r2c1*$s2r3c2)-($s2r2c2*$s2r3c1)) ;?>
					</td>
					<td>
						<?php echo $s3r3c2 = (($s2r2c2*$s2r3c2)-($s2r2c2*$s2r3c2)) ;?>
					</td>
					<td style="background-color: #f39c12;">
						<?php echo $s3r3c3 = (($s2r2c2*$s2r3c3)-($s2r2c3*$s2r3c2)) ;?>
					</td>
					<td>
						<?php echo $s3r3c4 = (($s2r2c2*$s2r3c4)-($s2r2c4*$s2r3c2)) ;?>
					</td>
					<td>
						<?php echo $s3r3c5 = (($s2r2c2*$s2r3c5)-($s2r2c5*$s2r3c2)) ;?>
					</td>
				</tr>
				<tr>
					<td>
						<?php echo $s3r4c1 = (($s2r2c1*$s2r4c2)-($s2r2c2*$s2r4c1)) ;?>
					</td>
					<td>
						<?php echo $s3r4c2 = (($s2r2c1*$s2r4c2)-($s2r2c2*$s2r4c1)) ;?>
					</td>
					<td>
						<?php echo $s3r4c3 = (($s2r2c2*$s2r4c3)-($s2r2c3*$s2r4c2)) ;?>
					</td>
					<td>
						<?php echo $s3r4c4 = (($s2r2c2*$s2r4c4)-($s2r2c4*$s2r4c2)) ;?>
					</td>
					<td>
						<?php echo $s3r4c5 = (($s2r2c2*$s2r4c5)-($s2r2c5*$s2r4c2)) ;?>
					</td>
				</tr>
			</table>
			<!--end number table-->
			
			<!--number table-->
			<table class="table1 tab" border="2" style="margin-top: 0px;">
				<tr>
					<th colspan="6" style="background-color:#27ae60;">
						STEP 4
					</th>
				</tr>
				<tr>
					<td>
						<?php echo $s4r1c1 = (($s3r1c1*$s3r3c3)-($s3r1c3*$s3r3c1)) ;?>
					</td>
					<td>
						<?php echo $s4r1c2 = (($s3r1c2*$s3r3c3)-($s3r1c3*$s3r3c2)) ;?>
					</td>
					<td>
						<?php echo $s4r1c3 = (($s3r1c3*$s3r3c3)-($s3r1c3*$s3r3c3)) ;?>
					</td>
					<td>
						<?php echo $s4r1c4 = (($s3r1c4*$s3r3c3)-($s3r1c3*$s3r3c4)) ;?>
					</td>
					<td>
						<?php echo $s4r1c5 = (($s3r1c5*$s3r3c3)-($s3r1c3*$s3r3c5)) ;?>
					</td>
				</tr>	
				<tr>
					<td>
						<?php echo $s4r2c1 = (($s3r2c1*$s3r3c3)-($s3r2c3*$s3r3c1)) ;?>
					</td>
					<td>
						<?php echo $s4r2c2 = (($s3r2c2*$s3r3c3)-($s3r2c3*$s3r3c2)) ;?>
					</td>
					<td>
						<?php echo $s4r2c3 = (($s3r2c3*$s3r3c3)-($s3r2c3*$s3r3c3)) ;?>
					</td>
					<td>
						<?php echo $s4r2c4 = (($s3r2c4*$s3r3c3)-($s3r2c3*$s3r3c4)) ;?>
					</td>
					<td>
						<?php echo $s4r2c5 = (($s3r2c5*$s3r3c3)-($s3r2c3*$s3r3c5)) ;?>
					</td>
				</tr>
				<tr>
					<td>
						<?php echo $s4r3c1 = $s3r3c1 ;?>
					</td>
					<td>
						<?php echo $s4r3c2 = $s3r3c2 ;?>
					</td>
					<td>
						<?php echo $s4r3c3 = $s3r3c3 ;?>
					</td>
					<td>
						<?php echo $s4r3c4 = $s3r3c4 ;?>
					</td>
					<td>
						<?php echo $s4r3c5 = $s3r3c5 ;?>
					</td>
				</tr>
				<tr>
					<td>
						<?php echo $s4r4c1 = (($s2r3c1*$s2r4c2)-($s2r3c2*$s2r4c1)) ;?>
					</td>
					<td>
						<?php echo $s4r4c2 = (($s2r3c1*$s2r4c2)-($s2r2c2*$s2r4c1)) ;?>
					</td>
					<td>
						<?php echo $s4r4c3 = (($s3r3c3*$s3r4c3)-($s3r3c3*$s3r4c3)) ;?>
					</td>
					<td style="background-color: #f39c12;">
						<?php echo $s4r4c4 = (($s3r3c3*$s3r4c4)-($s3r3c4*$s3r4c3)) ;?>
					</td>
					<td>
						<?php echo $s4r4c5 = (($s3r3c3*$s3r4c5)-($s3r3c5*$s3r4c3)) ;?>
					</td>
				</tr>
			</table>
			<!--end number table-->
			
			<!--number table-->
			<table class="table1 tab" border="2" style="margin-top: 0px;">
				<tr>
					<th colspan="6" style="background-color:#27ae60;">
						STEP 5
					</th>
				</tr>
				<tr>
					<td>
						<?php echo $s5r1c1 = (($s4r1c1*$s4r4c4)-($s4r1c4*$s4r4c1)) ;?>
					</td>
					<td>
						<?php echo $s5r1c2 = (($s4r1c2*$s4r4c4)-($s4r1c4*$s4r4c2)) ;?>
					</td>
					<td>
						<?php echo $s5r1c3 = (($s4r1c3*$s4r4c4)-($s4r1c4*$s4r4c3)) ;?>
					</td>
					<td>
						<?php echo $s5r1c4 = (($s4r1c4*$s4r4c4)-($s4r1c4*$s4r4c4)) ;?>
					</td>
					<td>
						<?php echo $s5r1c5 = (($s4r1c5*$s4r4c4)-($s4r1c4*$s4r4c5)) ;?>
					</td>
				</tr>
				<tr>
					<td>
						<?php echo $s5r2c1 = (($s4r2c1*$s4r4c4)-($s4r2c4*$s4r4c1)) ;?>
					</td>
					<td>
						<?php echo $s5r2c2 = (($s4r2c2*$s4r4c4)-($s4r2c4*$s4r4c2)) ;?>
					</td>
					<td>
						<?php echo $s5r2c3 = (($s4r2c3*$s4r4c4)-($s4r2c4*$s4r4c3)) ;?>
					</td>
					<td>
						<?php echo $s5r2c4 = (($s4r2c4*$s4r4c4)-($s4r2c4*$s4r4c4)) ;?>
					</td>
					<td>
						<?php echo $s5r2c5 = (($s4r2c5*$s4r4c4)-($s4r2c4*$s4r4c5)) ;?>
					</td>
				</tr>
				<tr>
					<td>
						<?php echo $s5r3c1 = (($s4r3c1*$s4r4c4)-($s4r3c4*$s4r4c1)) ;?>
					</td>
					<td>
						<?php echo $s5r3c2 = (($s4r3c2*$s4r4c4)-($s4r3c4*$s4r4c2)) ;?>
					</td>
					<td>
						<?php echo $s5r3c3 = (($s4r3c3*$s4r4c4)-($s4r3c4*$s4r4c3)) ;?>
					</td>
					<td>
						<?php echo $s5r3c4 = (($s4r3c4*$s4r4c4)-($s4r3c4*$s4r4c4)) ;?>
					</td>
					<td>
						<?php echo $s5r3c5 = (($s4r3c5*$s4r4c4)-($s4r3c4*$s4r4c5)) ;?>
					</td>
				</tr>
				<tr>
					<td>
						<?php echo $s5r4c1 = $s4r4c1 ;?>
					</td>
					<td>
						<?php echo $s5r4c2 = $s4r4c2 ;?>
					</td>
					<td>
						<?php echo $s5r4c3 = $s4r4c3 ;?>
					</td>
					<td>
						<?php echo $s5r4c4 = $s4r4c4 ;?>
					</td>
					<td>
						<?php echo $s5r4c5 = $s4r4c5 ;?>
					</td>
				</tr>
			</table>
			<!--end number table-->
			
			<!--number table-->
			<table class="table1 tab" border="2" style="margin-top: 0px;">
				<tr>
					<th colspan="6" style="background-color:#27ae60;">
						STEP 6
					</th>
				</tr>
				<tr>
					<td>
						<?php echo $s6r1c1 =  $s5r1c1/$s5r1c1 ;?>
					</td>
					<td>
						<?php echo $s6r1c2 =  $s5r1c2/$s5r1c1 ;?>
					</td>
					<td>
						<?php echo $s6r1c3 =  $s5r1c3/$s5r1c1 ;?>
					</td>
					<td>
						<?php echo $s6r1c4 =  $s5r1c4/$s5r1c1 ;?>
					</td>
					<td>
						<?php echo $s6r1c5 =  $s5r1c5/$s5r1c1 ;?>
					</td>
				</tr>
				<tr>
					<td>
						<?php echo $s6r2c1 =  $s5r2c1/$s5r2c2 ;?>
					</td>
					<td>
						<?php echo $s6r2c2 =  $s5r2c2/$s5r2c2 ;?>
					</td>
					<td>
						<?php echo $s6r2c3 =  $s5r2c3/$s5r2c2 ;?>
					</td>
					<td>
						<?php echo $s6r2c4 =  $s5r2c4/$s5r2c2 ;?>
					</td>
					<td>
						<?php echo $s6r2c5 =  $s5r2c5/$s5r2c2 ;?>
					</td>
				</tr>
				<tr>
					<td>
						<?php echo $s6r3c1 =  $s5r3c1/$s5r3c3 ;?>
					</td>
					<td>
						<?php echo $s6r3c2 =  $s5r3c2/$s5r3c3 ;?>
					</td>
					<td>
						<?php echo $s6r3c3 =  $s5r3c3/$s5r3c3 ;?>
					</td>
					<td>
						<?php echo $s6r3c4 =  $s5r3c4/$s5r3c3 ;?>
					</td>
					<td>
						<?php echo $s6r3c5 =  $s5r3c5/$s5r3c3 ;?>
					</td>
				</tr>
				<tr>
					<td>
						<?php echo $s6r4c1 =  $s5r4c1/$s5r4c4 ;?>
					</td>
					<td>
						<?php echo $s6r4c2 =  $s5r4c2/$s5r4c4 ;?>
					</td>
					<td>
						<?php echo $s6r4c3 =  $s5r4c3/$s5r4c4 ;?>
					</td>
					<td>
						<?php echo $s6r4c4 =  $s5r4c4/$s5r4c4 ;?>
					</td>
					<td>
						<?php echo $s6r4c5 =  $s5r4c5/$s5r4c4 ;?>
					</td>
				</tr>
			</table>
			<!--end number table-->
			
			<!--number table-->
			<table class="table1" border="2" style="margin-top: 0px;">
				<tr>
					<th>
						X1	
					</th>
					<th>
						X2
					</th>
					<th>
						X3	
					</th>
					<th>
						X4
					</th>
				</tr>
				<tr>
					<td>
						<?php echo $s6r1c5;?>
					</td>
					<td>
						<?php echo $s6r2c5;?>
					</td>
					<td>
						<?php echo $s6r3c5;?>
					</td>
					<td>
						<?php echo $s6r4c5;?>
					</td>
				</tr>
			</table>
			<!--end number table-->
		</div>	
	</body>
</html>