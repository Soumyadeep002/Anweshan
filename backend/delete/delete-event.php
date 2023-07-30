<?php include "../database/db_conn.php";?>

<?php

// if(!defined('my-site')){

//     Header("location:access-denied.html");
//     }


?>


<?php 
         if(isset($_GET['event_id'])){
            $event_id = $_GET['event_id'];
            

           $stmt = "SELECT * FROM events WHERE event_id='$event_id'";
           $result = $conn->query($stmt);

            if ($result->num_rows > 0)
            {
               $row = $result->fetch_assoc();
               $event_broc = "../event-assets/b_pdf/{$row['event_broc']}";
               $c_image1 = "../event-assets/c_image/{$row['c_image1']}";
               $c_image2 = "../event-assets/c_image/{$row['c_image2']}";
               $c_image3 = "../event-assets/c_image/{$row['c_image3']}";


             
              

             
               ?>
              
               <?php


               $sql = "DELETE FROM event_admin WHERE event_id='$event_id'";
               $ex = $conn->query($sql);

              
               $sql2 = "DELETE FROM participant WHERE event_id='$event_id'";
               $ex2 = mysqli_query($conn,$sql2);


               $sql3 = "DELETE  FROM events WHERE event_id='$event_id'";
               $ex3 = $conn->query($sql3);
            
           
               if ($ex && $ex2 &&  $ex3) 
               {
                  if($row['event_broc'] != "event-broucher-01.pdf" && $row['c_image1'] !="eb-black-bg-logo-16-9.png" && $row['c_image2'] !="eb-black-bg-logo-16-9.png" && $row['c_image3'] !="eb-black-bg-logo-16-9.png")
                  {

                     $s1= unlink($event_broc);
                     $s2= unlink($c_image1);
                     $s3= unlink($c_image2);
                     $s4= unlink($c_image3);

                     if( $s1 && $s2 && $s3 && $s4 ){

                     
            
                        ?><script>
                           alert("Event Deleted");
                           window.location.href = "../signup-login/logout.php";
                        </script><?php

                     }else{

                     ?><script>
                        alert("Error in Deleting Event files");
                        window.location.href = "../signup-login/logout.php";
                     </script><?php

                     }

                  }else{

                     ?><script>
                     alert("Event Deleted");
                     window.location.href = "../signup-login/logout.php";
                  </script><?php

                  }
      
               }else{
                  ?> 
                  <script>alert("Error in Deleting Event ")
                  window.location.href = "../signup-login/logout.php";
                  </script>
                  <?php
               }

            }else{
               ?> 
               <script>alert("Event Not Found ")
               window.location.href = "../signup-login/logout.php";
               </script>
               <?php
            }

         }else{
            Header("location:../error/access-denied.html");
           
           
           
         }
            ?>