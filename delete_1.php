<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'chanika.mysql.database.azure.com', 'it63070029@chanika', 'chanika00_', 'exam', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$id = $_GET['id'];
$sql = "DELETE FROM NewTable WHERE id =$id";

if (mysqli_query($conn, $sql)) {
    header('location: show_1.php');
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

mysqli_close($conn);
?>
