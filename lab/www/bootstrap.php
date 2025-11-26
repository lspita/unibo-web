<?php
session_start();
define("UPLOAD_DIR", "./upload/");
require_once("utils/functions.php");
require_once("db/database.php");
$dbh = new DatabaseHelper(
    envValue('DB_HOST') ?? 'localhost', 
    envValue('DB_USER') ?? 'root',
    envValue('DB_PASSWORD') ?? '', 
    envValue('DB_NAME') ?? 'blogtw', 
    envValue('DB_PORT') ?? 3306
);
?>