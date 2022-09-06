<?php

require_once __DIR__ . '/../init.php';

function dropDB() {
  try {
    $conn = new PDO("mysql:host=" . DB_HOST, DB_USER, DB_PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DROP DATABASE IF EXISTS " . DB_NAME;

    echo "Dropping Database . . .\n";

    $conn->exec($sql);
    echo "Database dropped successfully\n";
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}

dropDB();
require_once __DIR__ . '/seeder.php';
