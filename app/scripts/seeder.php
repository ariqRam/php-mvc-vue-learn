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

function populateDB() {
  $faker = Faker\Factory::create();
  // generate data by calling methods
  echo $faker->name();

}

populateDB();