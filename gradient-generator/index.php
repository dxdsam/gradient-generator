<?php  
	const DEG_VAL = 999;
	const HEX_VAL = 999999;

	$deg = rand(000, DEG_VAL);
	$color1 = rand(000000, HEX_VAL);
	$color2 = rand(000000, HEX_VAL);
	$bg_result = "linear-gradient({$deg}deg, #{$color1}, #{$color2});";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gradient background generator</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background: <?= $bg_result ?>;">
	<div class="container">
		<input type="text" name="result" value="<?= $bg_result ?>">
		<a href="">Pencet aku om!</a>
	</div>
</body>
</html>