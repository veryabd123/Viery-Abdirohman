
<DOCTYPE html>
<html>
    <head>
        <title>Edit</title>
    </head>
    <body>
        <h1>Edit Barang</h1>
        <form method="POST">
            <label>Nama Barang yang akan Diedit: </label>
            <input type="text" name="namabarang" placeholder="Nama Barang"> <br>
            <input type="submit" name="edit" value="Edit">
        </form>
        <?php
            include "database.php";
            session_start();
            if(isset($_POST['edit'])){
                $namabarang = $_POST['namabarang'];
                
                $query = "SELECT * FROM inventaris WHERE nama_barang = '$namabarang'";
                $execute = mysqli_query($connect,$query);

                while($row=$execute->fetch_object()){
                ?>
                <form action="editdata.php" method="POST">

                    <label>Kode Barang : </label>
                    <input type="text" name="kodebarang" value=<?= $row->kode_barang ?>> <br>

                    <label>Nama Barang : </label>
                    <input type="text" name="namabarang" value=<?= $row->nama_barang ?>> <br>

                    <label>Jumlah : </label>
                    <input type="number" name="jumlah" value=<?= $row->jumlah ?>> <br>

                    <label>Satuan : </label>
                    <input type="text" name="satuan" value=<?= $row->satuan ?>> <br>

                    <label>Tanggal Datang : </label>
                    <input type="date" name="tanggaldatang" value=<?= $row->tgl_datang ?>> <br>

                    <label>Kategori : </label>
                    <input type="text" name="kategori" value=<?= $row->kategori ?>> <br>

                    <label>Status : </label>
                    <input type="text" name="status" value=<?= $row->status_barang ?>> <br>

                    <label>Harga : </label>
                    <input type="number" name="harga" value=<?= $row->harga ?>> <br>

                    <input type="submit" name="edite" value="Edit">
                </form>

                <?php 
                }
            }
	    ?>
    </body>
</html>