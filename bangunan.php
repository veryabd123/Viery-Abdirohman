
<DOCTYPE html>
<html>
    <head>
        <title>List Inventaris Bangunan</title>
    </head>
    <body>
        <h1>Masuk</h1>
        <?php
            include "database.php";
            $query = "SELECT * FROM inventaris WHERE kategori = 'Bangunan'";
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
                <?php
                $no=$no+1;
                $semua=$semua+$total;
            } 
        ?>
            </tr>
            </table>
            <h1> Total Inventaris Bangunan Rp.<?= $semua ?></h1>
    </body>
</html>