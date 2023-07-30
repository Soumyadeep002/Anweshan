
<?php
//connecting to data base
include "../database/db_conn.php";

//Starting Session
session_start();

//storing event id in a variable
$event_id = $_SESSION['event_id'];


//Checking whether form is submitted or not
if (isset($_POST["export"])) {

        // $file_extension=pathinfo($pdf, PATHINFO_EXTENSION);

        // $new_pdf=$event_id."_event_broc".".".$file_extension;

        header('Content-Type: text/csv; charset=utf-8');


        header('Content-Disposition: attachment ; filename='.$event_id.'_participant-list'.'.csv');

         //storing data
        $output = fopen("php://output", "w");
        fputcsv($output, array('email', 'event ID', 'name', 'mobile number'));


        $query = "SELECT * FROM participant WHERE event_id='$event_id'";

        $result = mysqli_query($conn, $query);


        while ($row = mysqli_fetch_assoc($result)) {
            
            // fputcsv($output, $row);

            fputcsv($output, array($row['p_email'], $row['event_id'], $row['p_name'], $row['mobile']));
        }
        fclose($output);


    


    


    
} else {
    Header("location:access-denied.html");
}



?>