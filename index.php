<?php
session_start();
if (isset($_GET['status']) == 'new'){
    session_destroy();
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>K3518005 - UTS</title>
</head>
<body>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
            <?php if (isset($_SESSION['username'])){ ?>
                <form method="post" action="create.php">
					<span class="login100-form-title p-b-33">
						Hallo <?php echo $_SESSION['username']; ?>, Selamat Datang Kembali Di Permainan Ini!!!
					</span>
                    <p style="text-align: center">BUKAN ANDA? <a href="?status=new" class="btn btn-primary">Klik Disini</a></p>

                    <div class="container-login100-form-btn m-t-20">
                        <input type="submit" value="Start Game" name="submit" class="login100-form-btn">
                    </div>
                </form>
            <?php }else{ ?>
                <form method="post" action="create.php">
					<span class="login100-form-title p-b-33">
						SELAMAT DATANG
					</span>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="username" placeholder="Masukan Nama Anda" required>
                    </div>

                    <div class="wrap-input100 rs1 validate-input">
                        <input class="input100" type="email" name="email" placeholder="Masukan Email Anda" required>
                    </div>

                    <div class="container-login100-form-btn m-t-20">
                        <input type="submit" value="Start Game" name="submit" class="login100-form-btn">
                    </div>
                </form>
           <?php }?>

        </div>
    </div>
</div>
<?php


?>
</body>
</html>