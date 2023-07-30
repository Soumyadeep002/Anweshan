<?php
include "db.php";


if (isset($_SESSION['e-a-event-id']) &&  isset($_SESSION['e-a-email'])) {

    $event_id = $_SESSION['e-a-event-id'];
   
    // $qrimage = $_SESSION['qrimage'];


    //Query to Fetching data from db with event id as condition
    $sql = "SELECT * FROM events WHERE event_id ='$event_id'";

    //Executing the query and storing the result in a variable 
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            $event_name = $row['event_name'];
            // $even

            ?>

            <div style="text-align: center; border: 2px solid gray; width: fit-content; margin: auto; border-radius: 50px 0px 50px 0px; background-color: lightblue;">
                <div style="border-bottom: 2px solid gray; border-radius: 10px;">
                    <img width="100px" height="50px" src="https://github.com/irahuldutta02/dynamic-images/blob/main/event-buddy-files/logo/eb-transperent-logo-16-9.png?raw=true" alt="event-buddy">
                </div>
                <div style="text-align: center; display: flex; padding: 10px;">
                    <div style="margin: auto; padding: 10px;">

                       
                        <div>
                            <h1>Event Name: <?php echo $row['event_name']; ?></h1>
                        </div>

                        <div>
                            <h2>Event Id: <?php echo $event_id; ?></h2>
                        </div>

                        <div>
                            <h2>Event Organizer: <?php echo $row['organizer']; ?> </h2>
                        </div>
                        
                    </div>
            <?php


        }
    }

            ?>

            
                    

                    

                  
                </div>
                <!-- <div style="border-top: 2px solid blue; border-radius: 10px; ">
                    <p><b>Show this QR to mark your attandence</b></p>
                </div> -->
            </div>

    <?php

                
            
}else{
    Header("location:../access-denied.html");
}

?>