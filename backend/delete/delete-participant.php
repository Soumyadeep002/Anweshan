<?php
include "../database/db_conn.php";
if (isset($_GET['event_id']) && isset($_GET['p_email'])) {

    //Storing event id(get method) in variable  
    $event_id = $_GET['event_id'];


    $p_email= $_GET['p_email'];

    $test = filter_var($p_email, FILTER_VALIDATE_EMAIL);
    echo $test ;
    echo $_GET['p_email'];

    $stmt = "SELECT * FROM participant WHERE event_id='$event_id' AND p_email='$p_email'";
    $result = $conn->query($stmt);

   

     if ($result->num_rows > 0){
        $row = $result->fetch_assoc();
        $qr_image = "../QR/Generation/images/{$row['qr_image']}";

        
        echo $row['p_email'];
       
        $sql = "DELETE FROM participant WHERE event_id='$event_id' AND p_email='$p_email'";
        $ex = mysqli_query($conn,$sql);

        // echo $sql;

        if ($ex){
            $s1= unlink($qr_image);
            

            if($s1)
            {
                ?><script>
                        alert("participants Deleted");
                        window.location.href = "../admin/admin.php";
                     </script><?php
            }else{
                
                ?><script>
                alert("Error in Deleting participants files");
                window.location.href = "../admin/admin.php";
             </script><?php
            }
        }else{
            ?> 
            <script>alert("Error in participants")
            window.location.href = "../admin/admin.php";
            </script>
            <?php
        }

     }else{
        ?>
    <script>
    alert("No Such Participant");
    window.location.href = "../admin/admin.php";
    </script>
    <?php
     }

}else{
    Header("Location:access-denied.html");
}    

?>