<?php
$server ="localhost";
$username="root";
$password="";
$dbname="event_buddy_01";

$conn = new mysqli($server, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}

?>