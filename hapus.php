
<DOCTYPE html>
<html>
    <head>
        <title>Hapus</title>
    </head>
    <body>
        <h1>Hapus Barang</h1>
        <form method="POST">
            <label>Nama Barang yang akan Dihapus: </label>
            <input type="text" name="namabarang" placeholder="Nama Barang"> <br>
            <input type="submit" name="hapus" value="Hapus">
        </form>
        <?php
            include "database.php";
            session_start();
            if(isset($_POST['hapus'])){
                $namabarang = $_POST['namabarang'];
                
                $query = "DELETE FROM inventaris WHERE nama_barang = '$namabarang'";
                $execute = mysqli_query($connect,$query);

                if($execute){
                    echo "Data Berhasil Dihapus<br>";
                    echo "<a href='home.php'>Tekan untuk kembali ke Beranda</a>";
                } else {
                    echo "Data Gagal Dihapus<br>";
                    echo "<a href='home.php'>Tekan untuk kembali ke Beranda</a>";
                }
            }
	    ?>
    </body>
</html>
