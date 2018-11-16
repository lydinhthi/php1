<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>My first PHP page</h1>
	<?php
	$chucdanh = 'giam doc';
	switch ($chucdanh) {
		case 'giam doc':
			echo "thu nhap cua ban la 10m";
			break;
		case 'tro ly':
			echo "thu nhap la 6m";
			break;
		case 'nhan vien kinh doanh':
			echo "thu nhap 5m";
			break;
		
		default:
			echo "thu nhap 4m";
			break;
	}
	?>
	<hr>
	<?php
	$i = 0;
	while ($i <= 100) {
		echo "<br>" .$i;
		$i++;
		# code...
	}
	?>
</body>
</html>