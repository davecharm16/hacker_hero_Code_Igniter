<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?= base_url()?>assets/css/style.css">
    <title>Submitted Entry</title>
</head>
<body>
    <?php 
        // Get Post Value
        $post_data = $_POST;
    ?>

    <form action="<?= base_url() ?>" method="post">
        <h1>Submitted Entry</h1>
        <label for="name">Your Name (Optional) : <span> <?= $post_data['name']?> </span> </label>
        <label for="course">Course Title:  <span> <?= $post_data['course']?> </span> </label>
        <label for="score">Given Score (1-10): <span> <?= $post_data['score']?></span> </label>
        <label for="reason">Reason:</label>
        <p><?= $post_data['reason']?></p>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
