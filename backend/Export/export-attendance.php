
<?php
//connecting to data base
include "../database/db_conn.php";

//Starting Session
session_start();

//storing event id in a variable
$event_id = $_SESSION['event_id'];


//Checking whether form is submitted or not
if (isset($_POST["export"])) {
        header('Content-Type: text/csv; charset=utf-8');


        header('Content-Disposition: attachment ; filename='.$event_id.'_attendance-list'.'.csv');

         //storing data
        $output = fopen("php://output", "w");

        fputcsv($output, array('email', 'event ID', 'name', 'mobile number', 'time of entry'));


        $query = "SELECT * FROM participant WHERE event_id='$event_id' AND attendance=1";

        $result = mysqli_query($conn, $query);


        while ($row = mysqli_fetch_assoc($result)) {

            $entry_time = date('Y-m-d H:i:s',strtotime($row['entry_time']));
            fputcsv($output, array($row['p_email'], $row['event_id'], $row['p_name'], $row['mobile'], $entry_time));

            // fputcsv($output, $row);
        }
        
        fclose($output);


   


    


    
} else {
    Header("location:access-denied.html");
}



?>