<?php 
  session_start();
  $C=$_POST['Id'];
  print_r($_POST);
  print_r($C);
  $usernamed= $_SESSION['username'];
  $db= mysqli_connect('localhost','root','', 'movie')or die("could not connect database..");
  $sql="DELETE FROM `$usernamed` WHERE `favouritesid`='$C'";
  mysqli_query($db, $sql);

  ?>