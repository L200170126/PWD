<html>
    <head>
        <title>tugas2</title>
</head>
<body>
    <H1>Tugas2</H1>
    <form method='POST' action=''>
<p>Angka : <input type='text' name='nama' size='20'></p>
<p><input type='submit' value='submit' name='angka'></p>
</form>
<?php
error_reporting(E_ALL ^ E_NOTICE);
$angka = $_POST['angka'];
$submit = $_POST['submit'];

    if($submit %2==0){
        echo "$angka adalah bilangan genap";
    }
    else{
        echo "$angka adalah bilangan ganjil";
    }

?>
</body>
</html>