<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include "connect.php";
$sql="SELECT * FROM bug WHERE id={$_GET['ID']}";
$result=mysqli_query($con,$sql) or die("Bad Query: $sql");
$row=mysqli_fetch_assoc($result);
echo "<h1>{$row['title']}</h1>";
echo "<h4>{$row['description']}</h4>";
echo "<h4>{$row['comment']}</h4>";
echo "<h4>{$row['status']}</h4>";
echo "<h4>{$row['username']}</h4>";
?>
<form class="form-horizontal" method="post" action="post_update.php">
    <label for="comment">Add Comments</label>
<textarea id="comment" name="comment" rows="4" cols="50">
     At w3schools.com you will learn how to make a website. They offer free tutorials in all web development technologies.
  </textarea>
    <?php
    echo "<input type='hidden' id='id' name='id' value={$_GET['ID']}>" ;
    echo "<input type='hidden' id='Status' name='Status' value={$row['status']}>" ;
    ?>
    <button id="submit" name="submit" class="btn btn-large btn-success" type="submit"> Submit</button>
</form>
</body>
</html>