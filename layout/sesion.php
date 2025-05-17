<?php
error_reporting(0);
session_start();

$session_i = $_SESSION['usuario'];

if ($session_i == null || $session_i == "") {
    include("headerC.php");
}else{
    include("headerS.php");
}
?>