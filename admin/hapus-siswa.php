<?php
// Get the value of nisn from the query string
$nisn = $_GET['nisn'];

// Include the database connection file
include '../koneksi.php';

// Prepare the SQL query
$sql = "DELETE FROM siswa WHERE nisn = ?";

// Initialize a prepared statement
$stmt = mysqli_prepare($koneksi, $sql);

// Bind the parameter to the statement
mysqli_stmt_bind_param($stmt, "s", $nisn);

// Execute the statement
if (mysqli_stmt_execute($stmt)) {
  // If the query is successful, redirect to the siswa page
  header("location: ?url=siswa");
} else {
  // If the query fails, display an error message and redirect to the siswa page
  echo "<script>
    alert('Maaf, data tidak terhapus');
    window.location.assign('?url=siswa');
    </script>";
}

// Close the statement and database connection
mysqli_stmt_close($stmt);
mysqli_close($koneksi);
?>
