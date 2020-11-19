<html>
<head>
<title>ITF Lab</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'chanika.mysql.database.azure.com', 'it63070029@chanika', 'chanika00_', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table width="600" border="1">
  <tr>
    <th> <center>Name</center></th>
    <th> <center>Comment</center></th>
    <th><center>Link</center></th>
    <th> <center>Action<center></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
    <td><?php echo $Result['Link'];?></td>
    <td><center><button type = "submit" class ="btn btn-light"><a href="delet.php?id=<?=$result['id'];?">Delete</a></button></center></td>
                <button type = "submit" class ="btn btn-light"><a href="edit.php?id=<?=$result['id'];?">Edit</button></center></td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
<center><button type="submit" class="btn btn-primary" onclick="window.location= 'from.html'">Add</button></center>
</body>
</html>
