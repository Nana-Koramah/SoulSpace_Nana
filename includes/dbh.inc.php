<?php

$dsn = "mysql:host=localhost;dbname=SoulSpace";
$bdusername = "root";
$bdpassword = "";

try {
  $pdo = new PDO($dsn, $bdusername, $bdpassword);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Connection failed: ". $e->getMessage();
}