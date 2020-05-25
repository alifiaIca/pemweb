<?php
session_start();
include 'config.php';

if ($_SESSION['live']>0){
    header('location: question.php');
} else {
    if ($_SESSION['member'] == 'new'){
        $username = $_SESSION['username'];
        $email = $_SESSION['email'];
        $score = $_SESSION['score'];
        $query = mysqli_query($con, "INSERT INTO pemweb SET username = '$username', email = '$email', score = '$score'");
        header('location: GameOver.php');
    } else{
        $username = $_SESSION['username'];
        $email = $_SESSION['email'];
        $score = $_SESSION['score'];
        $query = mysqli_query($con, "UPDATE pemweb SET score = '$score' WHERE username = '$username'");
        header('location: GameOver.php');
    }
}