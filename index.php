<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="styles.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<head>
	<title>Cisternos</title>
</head>
<body>
	<?php 
	include 'functions.php';
	?>
	<div class="container">
		<div class="row"><h2>Baseinas</h2></div>
		<div class="row">
			<table border="1" class="table table-hover">
				<thead>
					<tr>
						<th rowspan="4" scope="colgroup">Gylis</th>
						<th rowspan="4" scope="colgroup">Plotis</th>
						<th rowspan="4" scope="colgroup">Ilgis</th>
						<th rowspan="4" scope="colgroup">Tūris</th>
						<tr>
							<th id="tableHeader" colspan="6" scope="colgroup">Autocisternu kiekis</th>
						</tr>
						<tr>
							<th id="tableSecondH" colspan="2" scope="colgroup">120 m3</th>
							<th id="tableSecondH" colspan="2" scope="colgroup">170 m3</th>
							<th id="tableSecondH" colspan="2" scope="colgroup">220 m3</th>
						</tr>
						<tr>
							<th scope="colgroup">Kiekis</th>
							<th scope="colgroup">Kaina</th>
							<th scope="colgroup">Kiekis</th>
							<th scope="colgroup">Kaina</th>
							<th scope="colgroup">Kiekis</th>
							<th scope="colgroup">Kaina</th>
						</tr>
					</tr>
				</thead>
				<tbody>

					<?php

					for ($length=10; $length <= 40; $length++) { 
						$volume = volume($length, $height, $width);
						echo "<tr><td>$height</td><td>$width</td><td>$length</td><td>".$volume."</td><td>".trucks($volume, 120)."</td><td>".price(trucks($volume, 120),120)."</td><td>".trucks($volume, 170)."</td><td>".price(trucks($volume, 170),170)."</td><td>".trucks($volume, 220)."</td><td>".price(trucks($volume, 220),220)."</td></tr>";
					}
					?>

				</tbody>
			</table>
		</div>
	</div>
</div>

</body>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>
