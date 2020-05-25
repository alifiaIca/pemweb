<?php
session_start();
$soal1 = rand(0,20);
$soal2 = rand(0,20);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Soal</title>
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
            <form class="login100-form validate-form" action="check.php" method="post">
					<span class="login100-form-title p-b-33">
						Hello <?php echo $_SESSION['username']; ?>, tetap semangat ya... You Can Do The Best
					</span>
                <span class="login100-form-title p-b-33">
						<b>Lives: <?php echo $_SESSION['live'];?> | Score: <?php echo $_SESSION['score'];?></b>
                </span>
                <span class="login100-form-title p-b-33">
						<b>Berapakah <?php echo $soal1;?> + <?php echo $soal2;?>?</b>
                </span>


                <div class="wrap-input100 validate-input">
                    <input class="input100" type="number" name="answer" placeholder="Masukan Jawaban Anda" required>
                    <input type="hidden" name="soal1" value="<?php echo $soal1;?>">
                    <input type="hidden" name="soal2" value="<?php echo $soal2;?>">
                </div>


                <div class="container-login100-form-btn m-t-20">
                    <input type="submit" class="login100-form-btn" name="submit" value="Submit">
                </div>


            </form>
        </div>
    </div>
</div>

</body>
</html>