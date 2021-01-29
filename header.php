<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Sistem Pendukung Keputusan metode AHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
</head>

<body>
	<div class="ui top attached demo menu borderless">
		<a class="item">
			<i class="sidebar icon"></i> 
		</a>
		<a class="item"  href="index.php">
			<h4>Sistem Pendukung Keputusan dengan metode AHP</h4>
		</a>
	</div>
	<div class="ui bottom attached segment">
	<div class="ui labeled  left inline vertical sidebar menu">
		<a class="item"  href="index.php">
		Home
		</a>
		<a class="item"  href="kriteria.php">
		
		Kriteria
		<div class="ui blue tiny label" style="float: right;"><?php echo getJumlahKriteria(); ?></div>
		</a>
		<a class="item" href="alternatif.php">
		
		Alternatif
		<div class="ui blue tiny label" style="float: right;"><?php echo getJumlahAlternatif(); ?></div>
		</a>
		<a class="item" href="bobot_kriteria.php">
		Perbandingan Kriteria
		</a>
		<a class="item" href="bobot.php?c=1"> 
		Perbandingan Alternatif
		</a>
			<?php
				if (getJumlahKriteria() > 0) {
					for ($i=0; $i <= (getJumlahKriteria()-1); $i++) { 
						echo "<li><a class='item' style='padding-left: 1.8rem;'  href='bobot.php?c=".($i+1)."'>".getKriteriaNama($i)."</a></li>";
					}
				}
			?>
	</div>
	<div class="pusher">
		<div class="ui basic segment">
		
 
