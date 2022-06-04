<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>User Login Page</title>
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
$sql = ("select pwd from user where userID = '".$userID."'");
$rs = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($rs);
if($row=="")
{
echo "Sorry username not found... :(";
}
else
{
if($row["pwd"]==$pwd)
{
	header("Location: indextesting.html");
	exit();
}
else
{
	echo "Sorry wrong password... :(";
}
}
?>
            <p><a class="form__button" href="userlogin.html">Refresh And Login</a></p>
</p></H2>
    </div>
    <script src="./src/main.js"></script>
</body>
</html>