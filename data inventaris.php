
<DOCTYPE html>
<html>
    <head>
        <title>Data Inventaris</title>
    </head>
    <body>
        <h1>Data Inventaris</h1>
        <form action="tambah.php" method="POST">
            <input type="submit" name="tambah" value=" + Tambah">
        </form>
        <?php
            include "database.php";
            $query = "SELECT * FROM inventaris ";
            $execute = mysqli_query($connect,$query);
            $no=1;
            $semua=0;
        ?>

        <table border="1" width="100%">
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Satuan</th>
                <th>Tanggal Datang</th>
                <th>Kategori</th>
                <th>Status Barang</th>
                <th>Harga</th>
                <th>Total Harga</th>
                <th>Aksi</th>
            </tr>
            <?php while($row=$execute->fetch_object()){
                $harga = $row->harga;
                $jml = $row->jumlah; 
                $total = $harga*$jml;
            ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $row->kode_barang ?></td>
                <td><?= $row->nama_barang ?></td>
                <td><?= $row->jumlah ?></td>
                <td><?= $row->satuan ?></td>
                <td><?= $row->tgl_datang ?></td>
                <td><?= $row->kategori ?></td>
                <td><?= $row->status_barang ?></td>
                <td><?= $row->harga ?></td>
                <td><?= $total ?></td>
                <td><a href="edit.php"><button>Edit</button></a><a href="hapus.php"><button>Hapus</button></a></td>
                <?php
                $no=$no+1;
                $semua=$semua+$total;
            } 
        ?>
            </tr>
            </table>

            <h1><center> Total Inventaris Rp.<?= $semua ?></center></h1>
    </body>
</html>