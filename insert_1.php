<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'chanika.mysql.database.azure.com', 'it63070029@chanika', 'chanika00_', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$product = $_POST['product'];
$price = $_POST['price'];
$amount = $_POST['amount'];
$total = $_POST['(price)*(amount)=total'];

$sql = "INSERT INTO guestbook (product , price , amount , total) VALUES ('$product', '$price', '$amount' , '$total')";


if (mysqli_query($conn, $sql)) {
    header('location: show_1.php');
    
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
