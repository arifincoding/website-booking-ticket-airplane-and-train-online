<?php
if (!isset($_SESSION)) {
session_start();
}
if(isset($_SESSION['username1'])){
}
else{
          
            header("location:index.php");
}
?>