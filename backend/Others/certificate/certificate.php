<?php




session_start();



include "../db_conn.php";

if (isset($_SESSION['event_id'])) {




$event_id =$_SESSION['event_id'];

$sql = "SELECT * FROM participants WHERE event_id ='$event_id' AND flag=1";
$result = $conn->query($sql);


$sql2 = "SELECT * FROM admins WHERE event_id ='$event_id'";
$result2 = $conn->query($sql2);



if ($result->num_rows > 0 && $result2->num_rows>0) 
{
    $row2 = $result2->fetch_assoc();
    while ($row = $result->fetch_assoc()){

        $p_name = $row['p_name'];
        $p_email = $row['p_email'];
        $event_name = $row2['event_name'];
        $organizer = $row2['organizer'];


        
        $html ="
        
        <!DOCTYPE html>
        <html lang=\"en\">

        <head>
            <meta charset=\"UTF-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            <title>Event Buddy || Proof of participation</title>
        </head>

        <body>

            <div style=\"text-align: center; border: 2px solid gray; width: fit-content; margin: auto; border-radius: 50px 0px 50px 0px; background-color: #ffefc3; padding: 50px;\">
                <div style=\"border-bottom: 2px solid blue; border-radius: 10px; padding: 20px;\">
                    <img width=\"200px\" height=\"100px\"
                        src=\"https://github.com/irahuldutta02/event-buddy/blob/main/assets/logo/eb-transperent-logo-16-9.png?raw=true\"
                        alt=\"event-buddy\">
                </div>
                <div>
                    <div>
                        <h1>Proof of Participation</h1>
                        <h3>awarded to</h3>
                        <h2>$p_name</h2>
                        <p>for his successfull participation in <b>$event_name</b> on <b>Date</b> organised by <b>$organizer</b></p>
                    </div>
                </div>

                <div style=\"border-top: 2px solid blue; border-radius: 10px; padding: 20px;\">
                    <p><b>Thank You</b></p>
                </div>
            </div>
            
        </body>

        </html>
        
        
        ";

        

       

        
        
        
        
    }


}else{

}

}
?>
