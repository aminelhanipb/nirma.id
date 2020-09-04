<?php
$servername = "localhost";
$username = "nirmatracking";
$password = "Bismillah123;HH";
$dbname = "nirmatracking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE costumer (
noorder INT(6) UNSIGNED PRIMARY KEY,
agen VARCHAR(30) NOT NULL,
nama VARCHAR(30) NOT NULL,
kodeunik VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$sql = "CREATE TABLE dataNirma (
  noorder INT(6) UNSIGNED,
  tanggal DATE NOT NULL,
  jam TIME NOT NULL,
  jeniskegiatan VARCHAR(100) NOT NULL,
  detail VARCHAR(3000) NOT NULL,
  lampiran VARCHAR(3000),
  id int(6) AUTO_INCREMENT PRIMARY KEY
  )";

if ($conn->query($sql) === TRUE) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>