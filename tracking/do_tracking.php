<html>
<style>
  .center {
    margin-left: auto;
    margin-right: auto;
  }

  table,
  th,
  td {
    border: 1px solid black;
    border-collapse: collapse;
  }
</style>

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

$kodeunik = $_POST["kodeunik"];

$sql = "SELECT * FROM costumer INNER JOIN dataNirma ON costumer.noorder=dataNirma.noorder WHERE kodeunik='$kodeunik'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<table class='center'>";
  echo "<tr>";
  echo "<td>Kode Unik</td>";
  echo "<td><strong>";
  echo $kodeunik;
  echo "</strong></td></tr>";
  
  echo "</table>";
  echo "<br>";
  echo "<table class='center'>";
  echo "<tr>";
  echo "<td align='center'><strong>Agen</strong></td>";
  echo "<td align='center'><strong>Tanggal</strong></td>";
  echo "<td align='center'><strong>Jam</strong></td>";
  echo "<td align='center'><strong>Jenis Kegiatan</strong></td>";
  echo "<td colspan='2' align='center'><strong>Detail</strong></td></tr>";
  

  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>";
    echo $row["agen"];
    echo "</td>";
    echo "<td>";
    echo $row["tanggal"];
    echo "</td>";
    echo "<td>";
    echo $row["jam"];
    echo "</td>";
    echo "<td>";
    echo $row["jeniskegiatan"];
    echo "</td>";
    echo "<td colspan='2' >";
    echo $row["detail"];
    echo "</td>";
    echo "</tr>";
 
}
    echo "</table>";
} else {
  echo "Tidak Ditemukan";
}
$conn->close();
?>

</html>