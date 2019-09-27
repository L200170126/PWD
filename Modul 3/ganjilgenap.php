<html>
<head>
<title>ganjilgenap</title>
</head>
<body>
<form method="POST" action="ganjilgenap.php">
<p>nilai A adalah =<input type="text" name="A" size="3"></p>
<p><input type="submit" name="submit" value="cek"></p>
</form>
<?php
error_reporting(E_ALL ^ E_NOTICE);
$A = $_POST['A'];
$submit = $_POST['submit'];

if($submit){
	$jum = $A/$A==0
	    echo "Nilai A adalah genap"
}
if($submit){
	$jum = $A/$A!=0
	    echo "Nilai A adalah ganjil"
}
?>

</body>
</html>
