<?php
session_start();
include 'config.php';
$soal1 = $_POST['soal1'];
$soal2 = $_POST['soal2'];
$jawab = $_POST['answer'];

if ($jawab == $soal1+$soal2){
    $_SESSION['score'] += 10;
    header('location: show.php?answer=true');
} else{
    if ($_SESSION['live'] > 0){
        $_SESSION['score'] -= 2;
        $_SESSION['live'] -= 1;
        header('location: show.php?answer=false');
    } else {

    }
}

?>