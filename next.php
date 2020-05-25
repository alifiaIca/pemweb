<?php
session_start();
if (isset($_POST['submit'])){
    header('location:question.php');
}