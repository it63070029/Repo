<html>
<head>
<title>ITF Lab</title>
  <!--<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<html>
<head>
<title>ITF Lab</title>
  <!--<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<html>
<head>
<title>ITF Lab</title>
  <!--<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>-->
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'chanika.mysql.database.azure.com', 'it63070029@chanika', 'chanika00_', 'exam', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM NewTable');
?>
<table class="center1" width="900" style="margin-left:auto;margin-right:auto;margin-top: 20px;">
  <tr>
    <th width="150" style="color: #f1f7f7; background-color: #98BDC6;"><div align="center">Product</div></th>
    <th width="300" style="color: #f1f7f7; background-color: #98BDC6;"><div align="center">Price</div></th>
    <th width="250" style="color: #f1f7f7; background-color: #98BDC6;"><div align="center">Amount</div></th>
    <th width="250" style="color: #f1f7f7; background-color: #98BDC6;"><div align="center">Total</div></th>
    <th width="200" style="color: #f1f7f7; background-color: #98BDC6;"><div align="center">Action</div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
  $total=$Result['price']*$Result['amount']
?>
  <tr>
    <td style="background-color: #f7fafa"><?php echo $Result['product'];?></div></td>
    <td style="background-color: #f7fafa"><?php echo $Result['price'];?></td>
    <td style="background-color: #f7fafa"><?php echo $Result['amount'];?></td>
    <td style="background-color: #f7fafa"><?php echo $total;?></td>
    <td style="background-color: #f7fafa"><div align="center">
        <button type="submit" style="padding: 5%; background-color: tomato; border-width: 0cm; color:white; border-radius: 6px;"><a href="delete_1.php?id=<?=$Result['id'];?>" style="color: white; text-decoration: none;"><strong>Delete</strong></a></button>
        
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
</body>
</html>
