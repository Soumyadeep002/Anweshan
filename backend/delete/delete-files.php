<?php

// if(!defined('my-site')){

//    Header("location:access-denied.html");
//    }
   
?>

<?php
include "../database/db_conn.php";

$stmt = "SELECT * FROM event_admin WHERE event_id='$event_id'";
$result = $conn->query($stmt);


if ($result->num_rows > 0)
{
   $row = $result->fetch_assoc();
   $event_broc = "pdf/{$row['event_broc']}";
   $c_image1 = "image/{$row['c_image1']}";
   $c_image2 = "image/{$row['c_image2']}";
   $c_image3 = "image/{$row['c_image3']}";

      $s1= unlink($event_broc);
      $s2= unlink($c_image1);
      $s3= unlink($c_image2);
      $s4= unlink($c_image3);

      if( $s1 && $s2 && $s3 && $s4 ){

         ?><script>
            alert("Previous files Deleted");
            window.location.href = "admin.php";
         </script><?php

    }else{

      ?><script>
         alert("Previous File not deleted 1");
        //  window.location.href = "logout.php";
      </script><?php

    }
}else{

    ?> 
    <script>alert("Previous File not deleted 2")
    // window.location.href = "logout.php";
    </script>
    <?php

}

?>