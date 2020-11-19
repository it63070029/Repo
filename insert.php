<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'chanika.mysql.database.azure.com', 'it63070029@chanika', 'chanika00_', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['Name'];
$comment = $_POST['Comment'];
$link = $_POST['Link'];
$id = $_POST['id'];

$sql = "INSERT INTO guestbook002 (Name , Comment , Link, ID) VALUES ('$name', '$comment', '$link','$id')";


if (mysqli_query($conn, $sql)) {
    header('location: show.php');
    
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
