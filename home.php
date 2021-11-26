Nama    : Viery Viery Abdirohman
NIM     : 123200048
<?php
	session_start();
	$username = $_SESSION['username'];
	if(empty($_SESSION['username'])){
		header("location:login.php?pesan=belum_login");
	}
?>
<DOCTYPE html>
<html>
    <head>
        <title>Beranda</title>
       
        <style>
            html,body{
                
                margin:0;
                font-family: sans-serif;
            }

            .judul{
                padding-top: 10px;
                background-color:#191970;
                color : white;
            }

            .fontjudul{
                font-family: Cooper Black;
            }
        
            .menu{
                background-color: #DCDCDC;
            }
        
            .menu ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
            }
        
            .menu > ul > li {
                float: left;
            }
        
            
            .menu li a {
                display: inline-block;
                color: black;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }
        
            .menu li a:hover{
                color: white;
                background-color: #191970;
            }
        
            li.dropdown {
                display: inline-block;
            }
        
            .dropdown:hover .isi-dropdown {
                display: block;
            }
        
            .isi-dropdown a:hover {
                color: #fff !important;
                background-color: #F0F8FF;
            }
        
            .isi-dropdown {
                position: absolute;
                display: none;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
                background-color: #f9f9f9;
            }
        
            .isi-dropdown a {
                color: #3c3c3c !important;
            }
        
            .isi-dropdown a:hover {
                color: #232323 !important;
                background: #f3f3f3 !important;
            }

            .button{
                float: right;
            }

            .bawah{
                text-align: bottom;
            }
        </style>
    </head>
    <body>
        <center>
            <div class="judul">
                <div class="fontjudul">
                    <h1>DAFTAR INVENTARIS BARANG</h1>
                    <h1>KANTOR SERBA ADA</h1>
                </div>
                <header class="header">
                    <div class="menu">
                        <ul>
                            <li><a href="home.php">Beranda</a></li>
                            <li><a href="data inventaris.php">Data Inventaris</a></li>
                            <li class="dropdown"><a href="#">List per Kategori</a>
                                <ul class="isi-dropdown">
                                    <li><a href="bangunan.php">Bangunan</a></li>
                                    <li><a href="kendaraan.php">Kendaraan</a></li>
                                    <li><a href="alat tulis kantor.php">Alat Tulis Kantor</a></li>
                                    <li><a href="elektronik.php">Elektronik</a></li>
                                </ul>
                            </li>
                            <li class="button">
                            <div class="navbar-kanan">
                                <button type="button" class="btn btn-logout"><a href="logout.php" style="color: white;">LOGOUT</a></button>
                                 </div>
                                <?php 
                                    if(isset($_POST['submit'])){
                                        session_start();
                                        session_destroy();
                                        header("location:login.php?pesan=logout");
                                    }
                                ?>
                            </li>
                        </ul>
                    </div>
                </header>
            </div>
            <br>
            <br><h1>Selamat Datang<h1><br>
            <h1><?php echo $nama_lengkap ?><h1>
    
        </center>
    </body>
</html>