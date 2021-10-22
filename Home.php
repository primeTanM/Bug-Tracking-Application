<!DOCTYPE html>

<html lang="en">
<title>Faculty Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css">
<body>  
<?php
include "connect.php";
session_start();
if($_SESSION['counter']==0){
	$result = mysqli_query($con,"SELECT * FROM user WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
	$count  = mysqli_num_rows($result);
    $_SESSION['counter']=1;
	if($count==0) {
		header("Location: F_Loginerror.php");
    } 
    header('Cache-Control: no cache'); 
    $_SESSION['user'] = $_POST["username"];
    $_SESSION['pass'] = $_POST["password"];
    $row=mysqli_fetch_assoc($result);
    $_SESSION['type'] = $row['type'];
}
?>
    <?php
    if($_SESSION['type']=="QA"){
        echo '<li><a href="create_post.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Create Post</a></li>';
    }
    if($_SESSION['type']=="ADM"){
        echo '<li><a href="check_users.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Check Users</a></li>';
    }
    ?>
  </ul> -->

<nav class="navbar">
  <div class="brand-title">Bug Tracker</div>
  <a href="#" class="toggle-button">
    <span class="bar"></span>
    <span class="bar"></span>
    <span class="bar"></span>
  </a>
  <div class="navbar-links">
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="logout.php">Logout</a></li>
      <?php
      if($_SESSION['type']=="QA"){
          echo '<li><a href="create_post.php">Create Post</a></li>';
      }
      if($_SESSION['type']=="ADM"){
          echo '<li><a href="check_users.php">Check Users</a></li>';
      }
      ?>
    </ul>
  </div>
</nav>
      
<!-- </header>  -->

  <?php $sql="SELECT * FROM bug";
$result=mysqli_query($con,$sql) or die("Bad Query: $sql");
while($row=mysqli_fetch_assoc($result)){
echo "<div class='post-container'>";
echo "<h1 class='item'> {$row['title']} </h1>";
echo "<h4 class='item'> Status:  {$row['status']} </h4>";
echo "<div class='des item'>{$row['description']} </div>";
echo "<div class='com item'><b>Posted by</b> : {$row['username']}</div>";
$sql1="SELECT * FROM comments WHERE post_id={$row['id']}";
$result1=mysqli_query($con,$sql1) or die("Bad Query: $sql1");
while($row1=mysqli_fetch_assoc($result1)){
  echo "<h5>{$row1['comment']}</h4>";
  echo "<h5>{$row1['username']}</h4>";
}
if($_SESSION['type']=="DEV"){
  echo "<form class='form-horizontal' method='post' action='change_status_dev.php'>";
  echo "<input type='hidden' id='id' name='id' value={$row['id']}>" ;
  echo "<select id='Status' name='Status' class='form-control input-md'>";
  echo "<option value='Open'>Open</option>";
  echo "<option value='Work In Progress'>Work In Progress</option>";
  echo "<option value='Closed'>Closed</option></select>" ;
  echo "<button id='submit' name='submit' class='btn btn-large btn-success' type='submit'> Submit</button></form>";
}
if($_SESSION['type']=="QA"){
echo "<form class='form-horizontal' method='post' action='add_comments.php'>";
echo "<label for='comment'>Add Comments</label>";
echo "<textarea id='comment' name='comment' rows='4' cols='50'>";
echo "</textarea>";
echo "<input type='hidden' id='id' name='id' value={$row['id']}>" ;
//echo "<input type='hidden' id='Status' name='Status' value={$row['status']}>" ;
echo "<button id='submit' name='submit' class='btn btn-large btn-success' type='submit'> Submit</button></form>";
}
if($_SESSION['type']=="ADM"){
echo "<a href='delete_post.php?ID={$row['id']}'> <button class='delete-btn'>Delete</button></a>";
}echo "</div>";
}
?>

</body>
</html>


