<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/style.css">
    <title>Feedback Form</title>
</head>
<body>
    <form action="<?= base_url()?>process" method="POST">
        <h1>Feedback Form</h1>
        <label for="name">Your Name (Optional)</label>
        <input type="text" name="name" id="name_id">
        <label for="course">Course Title</label>
        <select name="course" id=course_id">
            <option value="Php Track">Php Track</option>
            <option value="Web Fundamentals">Php Track</option>
            <option value="Angular">Angular</option>
            <option value="React">React</option>
        </select>
        <label for="score">Given Score (1-10)</label>
        <select name="score" id="score_id">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <label for="reason">Reason:</label>
        <textarea rows="10" cols="60" name="reason"></textarea>
        <input type="submit" name="submit" value="submit" id="submit1">
    </form>
</body>
</html>
