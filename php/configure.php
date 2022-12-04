<?php

$pdo = new PDO('mysql:host=localhost', 'root', '');
$sql = "CREATE DATABASE IF NOT EXISTS OnlyPlants;";
$pdo->query($sql);


$pdo = new PDO('mysql:host=localhost;dbname=OnlyPlants;charset=utf8', 'root', '');
$sql = "CREATE TABLE IF NOT EXISTS users (
  id int unsigned NOT NULL AUTO_INCREMENT,
  email varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  password varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  firstName varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  lastname varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at timestamp NULL DEFAULT NULL,
  PRIMARY KEY (id), UNIQUE (email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";
//SQL-Befehl ausführen:
$pdo->query($sql);