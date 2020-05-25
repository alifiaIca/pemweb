<?php
session_start();
?>
<html lang="en">
<head>
    <title>Hasil Jawaban</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
            <form class="login100-form validate-form" action="over.php" method="post">
                <?php if ($_GET['answer'] == 'true'){ ?>
                    <span class="login100-form-title p-b-33">
						Hello <?php echo $_SESSION['username']; ?>, Selamat Jawaban Anda benar...
                    </span>
                    <span class="login100-form-title p-b-33">
                        <b>Lives: <?php echo $_SESSION['live'];?> | Score <?php echo $_SESSION['score'];?></b>
                    </span>
                <?php }else{ ?>
                    <span class="login100-form-title p-b-33">
						Hello <?php echo $_SESSION['username']; ?>, Sayang jawaban anda salah... tetap semangat Ya!!!

                    </span>
                    <span class="login100-form-title p-b-33"><b>Lives: <?php echo $_SESSION['live'];?> | Score <?php echo $_SESSION['score'];?></b></span>
                <?php } ?>

                <div class="container-login100-form-btn m-t-20">
                    <input type="submit" class="login100-form-btn" name="submit" value="<?php if ($_SESSION['live']>0) echo 'Soal Selanjutnya'; else echo 'Finish';?>">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>