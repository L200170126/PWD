
Skip to content
Pull requests
Issues
Marketplace
Explore
@L200170127
Learn Git and GitHub without any code!

Using the Hello World guide, you’ll start a branch, write comments, and open a pull request.

<?php
	$conn= mysqli_connect('localhost', 'root', '','infor');
	
	$kodebuku = $_GET['kode_buku'];
	$hapus="delete from buku where kode_buku = '$kodebuku'";
	$data=mysqli_query($conn,$hapus);
	
	if($data > 0){
		echo "
		<script>
		alert('data berhasil di hapus');
		document.location.href='form.php';
		</script>";
	}else
		echo "
		<script>
		alert('data gagal di hapus');
		document.location.href='form.php';
		</script>";
?>