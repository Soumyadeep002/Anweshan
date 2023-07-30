<?php
define('my-site',true);
if(!defined('my-site')){

    header("Location: ../index.php");
    }

?>

<?php 

session_start();

// session_unset();
// session_destroy();



unset($_SESSION['sa_email']);
unset($_SESSION['sa_password']);


header("Location: ../index.php");
?>