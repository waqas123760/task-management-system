<?php
session_start();
if(isset($_SESSION['user']) && ($_SESSION['user'] != '') ){

}
else{
header('location:index.php');
}
?>