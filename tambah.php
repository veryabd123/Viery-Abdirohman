
<DOCTYPE html>
<html>
    <head>
        <title>Tambah</title>
    </head>
    <body>
        <h1>Tambah Data Inventaris</h1>
        <form method="POST">

            <label>Kode Barang : </label>
            <input type="text" name="kodebarang" placeholder="Kode Barang"> <br>

            <label>Nama Barang : </label>
            <input type="text" name="namabarang" placeholder="Nama Barang"> <br>

            <label>Jumlah : </label>
            <input type="number" name="jumlah" placeholder="Jumlah"> <br>

            <label>Satuan : </label>
            <input type="text" name="satuan" placeholder="Satuan"> <br>

            <label>Tanggal Datang : </label>
            <input type="date" name="tanggaldatang" placeholder=""> <br>

            <label>Kategori : </label>
            <input type="text" name="kategori" placeholder="Kategori"> <br>

            <label>Status : </label>
            <input type="text" name="status" placeholder="status"> <br>

            <label>Harga : </label>
            <input type="number" name="harga" placeholder="harga"> <br>

            <input type="submit" name="masuk" value=" + Tambah">

        </form>
        <?php
            include "database.php";
            session_start();
            if(isset($_POST['masuk'])){
                $kodebarang = $_POST['kodebarang'];
                $namabarang = $_POST['namabarang'];
                $jumlah = $_POST['jumlah'];
                $satuan = $_POST['satuan'];
                $tanggaldatang = $_POST['tanggaldatang'];
                $kategori = $_POST['kategori'];
                $status = $_POST['status'];
                $harga = $_POST['harga'];

                $query = "INSERT INTO inventaris (`kode_barang`, `nama_barang`, `jumlah`, `satuan`, `tgl_datang`, `kategori`, `status_barang`, `harga`) VALUES ('$kodebarang','$namabarang','$jumlah','$satuan','$tanggaldatang','$kategori','$status','$harga')";
                $execute = mysqli_query($connect,$query);

                if($execute){
                    echo "Data Berhasil Ditambahkan<br>";
                    echo "<a href='home.php'>Tekan untuk kembali ke Beranda</a>";
                } else {
                    echo "Data Gagal Ditambahkan<br>";
                    echo "<a href='home.php'>Tekan untuk kembali ke Beranda</a>";
                }
            }
	    ?>
    </body>
</html>