<!DOCTYPE html>
<html>
<head>
<style>
    
</style>    
</head>

<body>
<?php
$q = intval($_GET['q']);

$con = mysqli_connect('p:'.us-cdbr-iron-east-03.cleardb.net, ba9d64f6582da6, fc89c240, heroku_97dadad547197c3);

if (!$con){
    die('Could not connect to: ' . mysqli_error($con));
}
?>
</body>
</html>