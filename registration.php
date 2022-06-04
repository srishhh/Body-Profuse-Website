<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Registration Page</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="HTML Template\main.css">
</head>
<body>
    <div class="container">
<H2><p align="center">
<?php
$con = mysqli_connect('localhost', 'root', '', 'body_profuse');
$userID = $_POST['userID'];
$pwd = $_POST['pwd'];
$rpwd = $_POST['rpwd'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$sql = ("select * from user where userID = '".$userID."'");
$rs = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($rs);
if($row!="")
{
echo "Sorry the Username is already taken... :(";
}
else
{
if($pwd==$rpwd)
{
$sql = ("insert into user (userID, pwd, name, phone, address) values ('".$userID."', '".$pwd."', '".$name."', '".$phone."', '".$address."')");
$rs = mysqli_query($con, $sql);
echo "Registered Successfully! :)";
}
else
{
echo "Sorry the Passwords do not match... :(";
}
}
?>
<p><a class="form__button" href="registration.html">Refresh And Register</a></p>
<p><a class="form__button" href="indextesting.html">Home</a></p>
</p></H2>
    </div>
    <script src="./src/main.js"></script>
</body>
</html>