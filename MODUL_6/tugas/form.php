<html>
    <head>
        <title>Data Buku</title>
    </head>
    <?php
        $conn=mysqli_connect('localhost','root','','infor');
        ?>
    <body>
        <center>
            <h3>Masukan Data Buku :</h3>
            <table border='0'>
                <form method='post' action='form.php'>
                    <tr>
                        <td width='25%'>Kode Buku</td>
                        <td width='5%'>:</td>
                        <td width='65%'><input type='text' name='kode_buku' size='10'></td>
                    </tr>
                    <tr>
                        <td width='25%'>Nama Buku</td>
                        <td width='5%'>:</td>
                        <td width='65%'><input type='text' name='nama_buku' size='30'></td>
                    </tr>
                    <tr>
                        <td width='25%'>Kode Jenis</td>
                        <td width='5%'>:</td>
                        <td width='65%'>
                            <select name="kode_jenis">
                                <?php
                                    $sql = "select * from jenis_buku";
                                    $retval = mysqli_query($conn, $sql);
                                    while($row = mysqli_fetch_array($retval)){
                                        echo "<option value='$row[kode_jenis]'>$row[nama_jenis]</option>";
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
            </table>
                    <input type='submit' value='Masukan' name='submit'>
                </form>
    <?php
        error_reporting(E_ALL ^ E_NOTICE);
        $kodebuku = $_POST['kode_buku'];
        $namabuku = $_POST['nama_buku'];
        $kodejenis = $_POST['kode_jenis'];
        $submit = $_POST['submit'];
        
        if($submit){
            
                $input = "insert into buku(kode_buku, nama_buku, kode_jenis) 
                            values ('$kodebuku', '$namabuku', '$kodejenis')";
                mysqli_query($conn, $input);
                echo "</br> Data Berhasil dimasukkan";
        }
    ?>
    <hr>
    <h3>Data Buku</h3>
        <table border='1' width='50%'>
            <tr>
                <td align='center' width='20%'><b>Kode Buku</b></td>
                <td align='center' width='30%'><b>Nama Buku</b></td>
                <td align='center' width='10%'><b>Kode Jenis</b></td>
                <td align='center' width='30%'><b>Keterangan</b></td>
                <td colspan= 2 align='center' width='30%'><b>Aksi</b></td>
            </tr>
    <?php
        $cari = "select buku.kode_buku, buku.nama_buku, jenis_buku.nama_jenis, jenis_buku.keterangan_jenis from buku join jenis_buku on buku.kode_jenis = jenis_buku.kode_jenis";
        $hasil_cari = mysqli_query($conn,$cari);
        while ($data = mysqli_fetch_row($hasil_cari)){
        echo"
            <tr>
                <td width='20%'>$data[0]</td>
                <td width='30%'>$data[1]</td>
                <td width='10%'>$data[2]</td>
                <td width='30%'>$data[3]</td>
                <td><a href='update_form.php?kode_buku=$data[0]'>ubah</a></td>
                <td><a href='delete.php?kode_buku=$data[0]'>Hapus</a></td>
            </tr>";
        }
    ?>
        </table>
        </center>
    </body>
</html>