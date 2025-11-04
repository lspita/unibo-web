<?php
require_once 'bootstrap.php';

//Base Template
$templateParams["titolo"] = "Blog TW - Home";
$templateParams["nome"] = "lista-articoli.php";
$templateParams["categorie"] = $dbh->getCategories();
$templateParams["articolicasuali"] = $dbh->getRandomPosts(2);
//Home Template
$templateParams["titolo_pagina"] = "Ultimi Articoli";
$templateParams["articoli"] = $dbh->getPosts(2);

require 'template/base.php';
?>