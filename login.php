
<DOCTYPE html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" type="text/css" href="style.css">
        <title>Login</title>
    </head>
    <body>
    <center>
        
        <div class="container">
        <form action="ceklogin.php" method="POST" class="login-email">
        <div class="input-group">
        <h1>Login</h1>
        </div>
        <div class="input-group">
        <input type="text" name="username"value="Username"> <br>
        </div>
        <div class="input-group">
        <input type="password" name="password"value="Password"> <br><br>
        </div>
        <div class="input-group">
        <input type="submit" value="Login" class="btn"><br><br><br>
        </div>
        </form>
        </div>
        <div class="s">
        <?php
        
            if(isset($_GET['pesan'])){
                if($_GET['pesan'] == "gagal"){
                    echo "Login gagal! username dan/atau password salah!";
                }else if($_GET['pesan'] == "logout"){
                    echo "Anda telah berhasil logout";
                }else if($_GET['pesan'] == "belum_login"){
                    echo "Anda harus login dulu";
                }
            }
        ?>
        </div>
        </center>
    </body>
</html>
