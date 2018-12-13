<?php
session_start();
if(!isset($_SESSION['user_id'])) {
  header('Location:index.php?e=not_logged_in');
  exit();
}
 ?>