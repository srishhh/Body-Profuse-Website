<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Book An Appointment</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="HTML Template\main.css">
</head>
<body>
    <div class="container">
<H2><p align="center">
<?php
$con = mysqli_connect('localhost', 'root', '', 'body_profuse');
$userID = $_POST['userID'];
$name = $_POST['name'];
$app_time = $_POST['app_time'];
$pro = $_POST['pro'];
$sql = ("insert into appointment (userID, name, app_time, pro) values ('".$userID."', '".$name."', '".$app_time."', '".$pro."')");
$rs = mysqli_query($con, $sql);
?>
Appointment Made Successfully! :)
<p><a class="form__button" href="indextesting.html">Home</a></p>
</p></H2>
    </div>
    <script src="./src/main.js"></script>
</body>
</html>
<html>
<body>
<?php
?>
</body>
</html>