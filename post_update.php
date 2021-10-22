
<?php
include "connect.php";
session_start();
$sql="UPDATE bug SET comment='{$_POST["comment"]}', status='{$_POST["Status"]}' WHERE id={$_POST["id"]}";
echo "{$_SESSION['counter']}";
    if (mysqli_query($con, $sql)) {
        header('Location: Home.php');
      } else {
        header("Location: F_Loginerror.php");
      }
?>