<?php
session_start();
if (isset($_POST['submit'])){
        if (isset($_SESSION['username'])){
            $_SESSION['live'] = 5;
            $_SESSION['score'] = 0;
            $_SESSION['member'] = 'old';
            header('location: question.php');
        } else{
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['live'] = 5;
            $_SESSION['score'] = 0;
            $_SESSION['member'] = 'new';
            header('location: question.php');
        }

}