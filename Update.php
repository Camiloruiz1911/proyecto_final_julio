<?php

if(!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: index.php?error="."Invalid ID");
    exit();
}
$id = $_GET['id'];
include_once 'layout/layout.php'



?>