<?php
$id = $_GET['id'];
?>
<html>
<head>
  <title>Edit Form</title>
</head>
<style>
  body{
    background-color:#85B2BB;
  }
</style>
<body>
  <h1 class="center1" style="color:#FF91A4; margin-top: 45px;">
    -EDIT FORM-
  </h1>
  <form class="form-style-5" action = "edit.php" method = "post" id="EditForm" >
    <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
    Name:<br>
    <input type="text" name = "Name" id="idName" placeholder="Enter Name" style="width: 484px; padding: 5px;"> <br>
    Comment:<br>
    <textarea rows="10" cols="66" name = "Comment" id="idComment" placeholder="Enter Comment"></textarea><br>
    Link:<br>
    <input type="text" name = "Link" id="idLink" placeholder="Enter Link" style="width: 484px; padding: 5px;"> <br><br>
    <input type="submit" id="commentBtn" style="background-color: hsl(41, 90%, 69%); cursor: pointer; margin: 10px auto; padding: 13px; border-radius: 8px; border-width: 0px; font-weight: bolder; margin-left: 120px;">
    <input type="button" onclick="document.location='show.php'" value="Cancle" style="cursor: pointer ;background-color: hsl(41, 90%, 69%); margin: 10px auto;margin-left: 100px; padding: 13px; border-radius: 8px; border-width: 0px; font-weight: bolder;">
  </form>
</body>
</html>
