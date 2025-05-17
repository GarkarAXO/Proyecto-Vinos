<?php
error_reporting(0);
session_start();

$session_i = $_SESSION['usuario'];

if ($session_i == null || $session_i == "") {
    include("headerC2.PHP");
}else{
    include("headerS2.php");
}
?>