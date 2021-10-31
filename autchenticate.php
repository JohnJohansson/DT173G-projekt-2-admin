<?php
include("database/config.php");

$session = new session();
$validate = new post();

$session->checkField();
$validate->checkUser();
header('Location: index.php');
