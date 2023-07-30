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



unset($_SESSION['event_id']);
unset($_SESSION['a_email']);
unset($_SESSION['event_name']);
unset($_SESSION['organizer']);
// session_write_close();


header("Location: ../index.php");
?>