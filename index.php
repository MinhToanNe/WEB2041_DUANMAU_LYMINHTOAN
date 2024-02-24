<?php 
include "./App/App.php";
include "./App/controller/Controller.php";
include "./App/models/Database.php";
include "./App/core/function.php";
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$app = new App();