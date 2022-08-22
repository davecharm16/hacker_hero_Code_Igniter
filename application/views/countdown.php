<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="<?= base_url()?>assets/css/style.css">
		<title>Countdown</title>
	</head>
	<body>
		
		<h1>Countdown Before the Day Ends!</h1>
		<div class="container">
			<h2> <span id="sec"><?= $seconds ?></span> Seconds</h2>
			<h3><?= $date ?></h3>
		</div>

		<script>
			setInterval(()=>{
				var element = document.getElementById('sec');
				var sec = parseInt(element.textContent);
				sec -= 1;
				element.textContent = sec;
			}, 1000)
		</script>
	</body>
</html>
