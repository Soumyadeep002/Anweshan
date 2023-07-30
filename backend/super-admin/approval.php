<?php
include "../database/db_conn.php";
session_start();



$c = $_GET['c'];
$event_id = $_GET['event_id'];
if ($c == '1') {

    $sql1 = "UPDATE events SET approval=1 WHERE event_id='{$event_id}'";
    mysqli_query($conn, $sql1);
    if ($sql1) {
?>
        <script>
            alert("Event Approved");
            window.location.href = "super-admin.php";
        </script>
    <?php
        // header('location:super-admin.php');

    }
} elseif ($c == 0) {
    $sql1 = "UPDATE events SET approval=0 WHERE event_id='{$event_id}'";
    mysqli_query($conn, $sql1);
    if ($sql1) {
    ?>
        <script>
            alert("selected");
            window.location.href = "super-admin.php";
        </script>
    <?php
        // header('location:super-admin.php');

    }
} elseif ($c == 2) {
    $sql1 = "UPDATE events SET approval=2 WHERE event_id='{$event_id}'";
    mysqli_query($conn, $sql1);
    if ($sql1) {
    ?>
        <script>
            alert("Event Not Approved");
            window.location.href = "super-admin.php";
        </script>
    <?php
        // header('location:super-admin.php');

    }
} else {
    ?>
    <script>
        alert("Error ! ");
        window.location.href = "super-admin.php";
    </script>
<?php
}
?>