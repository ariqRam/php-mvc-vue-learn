<?php

require_once __DIR__ . '\..\init.php';

function createDB() {
  try {
    $conn = new PDO("mysql:host=" . DB_HOST, DB_USER, DB_PASSWORD);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE IF NOT EXISTS " . DB_NAME;
  
    echo "Creating database . . .\n";
  
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Database created successfully\n";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;
}

function createTable() {
  createMhsTable();
}

function createMhsTable() {
  try {
    $conn = new PDO("mysql:host=" . DB_HOST, DB_USER, DB_PASSWORD);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE TABLE IF NOT EXISTS " . DB_NAME . '.mahasiswa('
      . '
      id INT AUTO_INCREMENT,
      nama VARCHAR(100) NOT NULL,
      fakultas VARCHAR(100) NOT NULL,
      jurusan VARCHAR(100) NOT NULL,
      nim VARCHAR(100) NOT NULL,
      PRIMARY KEY(id)
      );';
  
    echo "Creating table . . .\n";
  
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table created successfully\n";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;
}

function populateDB($amount) {
  for($i=0; $i < $amount; $i++) {
    populateMhs();
  }
}

function populateMhs() {
  $faker = Faker\Factory::create();
  $db = new Database();
  $mhsModel = new Mahasiswa();

  $mhs['nama'] = $faker->name();
  $mhs['fakultas'] = $faker->randomElement(['FSKTM', 'FISIP', 'FH', 'FEB', 'STEI', 'FT']);
  $mhs['jurusan']= $faker->randomElement(['CS', 'AI', 'Kedokteran', 'Hukum', 'Ekonomi', 'Manajemen', 'Psikologi']);
  $mhs['nim'] = $faker->randomNumber(7, true);
  error_log($mhs['nim']);
  
  $mhsModel->insertData($mhs);
}

createDB();
createTable();
populateDB(5);