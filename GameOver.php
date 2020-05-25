<?php
session_start();
include 'config.php';
$mysql = mysqli_query($con, "SELECT * FROM pemweb ORDER BY score DESC LIMIT 10");
$result = mysqli_fetch_all($mysql, MYSQLI_ASSOC);
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
            <form class="login100-form validate-form" action="index.php">

                <span class="login100-form-title p-b-33">
                    Hello <?php echo $_SESSION['username']; ?>, Sayang permainan sudah selesai. Semoga lain kali bisa lebih baik
                </span>

                <span class="login100-form-title p-b-33">
                    Score: <?php echo $_SESSION['score'];?>
                </span>

                <div class="container-login100-form-btn m-t-20">
                    <input type="submit" class="login100-form-btn" name="submit" value="Main Lagi">
                </div>
            </form>

            <table class="table" style="margin-top: 20px; text-align: center">
                <thead>
                <h4 style="text-align: center; margin-top: 20px"><b>HALL OF FAME</b></h4>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Score</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                foreach ($result as $tabel) { ?>
                <tr>
                    <th scope="row"><?php echo $no;?></th>
                    <td><?php echo $tabel['username'];?></td>
                    <td><?php echo $tabel['score'];?></td>
                </tr>
                <?php
                $no++;
                } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>