<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="<?=base_url()?>/assets/css/style.css">
		<title>Document</title>
	</head>
	<body>
<?php 
	for($i = 1; $i <= $value; $i++){
?>
	<img src="<?=base_url()?>assets/images/ninja<?=rand(1,5)?>.jpg" alt="">
<?php 
	}
?>
	</body>
</html>
