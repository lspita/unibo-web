<?php
session_start();
define("UPLOAD_DIR", "./upload/");
require_once("utils/functions.php");
require_once("db/database.php");
$dbh = new DatabaseHelper(
    getenv("DB_HOST"), 
    getenv("DB_USER"), 
    getenv("DB_PASSWORD"), 
    getenv("DB_NAME")
);
?>