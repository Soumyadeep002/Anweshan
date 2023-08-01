<?php
session_start();
include "conn.php";


if(isset($_POST['text'])){

    $text = $_POST['text'];
    $code = explode(':',$text);

   

    if(!isset($code[1]) || !isset($code[0])){
        ?>

        <script>
        m="Invalid QR Code";             
        window.location.href = "index.php"+'?m='+m;     
        </script>

        <?php

      
       
    }else{
        $event_id = $code[0];
        $p_mail= $code[1]; 
    }

      
    $attendance =1;


    $key = "eventbuddy";

    //Decryption
    function decryption($data,$key){
        $encryption_key = base64_decode($key);
        list($encrypted_data,$iv) = array_pad(explode('::',base64_decode($data),2),2,null);
        return openssl_decrypt($encrypted_data,'aes-256-cbc',$encryption_key,0,$iv);

    }

    $de_event_id = decryption($event_id,$key);
    $de_p_mail = decryption($p_mail,$key);


    $sql = "SELECT * from participant  WHERE event_id='$de_event_id' AND p_email='$de_p_mail'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
    {

        
        while ($row = $result->fetch_assoc()) {
            
            if($row["attendance"]==0){
                $attendance = 1;
                $sql="UPDATE participant SET attendance = 1,entry_time =NOW() WHERE event_id='$de_event_id' AND p_email='$de_p_mail'";
                $query = mysqli_query($conn,$sql);
                if($query)

                {
                                        ?>


                    
                    <script>
                        
                        

                   

                         m="Marked as present";

                      
                        

                        
                        window.location.href = "index.php"+'?m='+m;


                       
                        
                    </script>
                    <?php
                   
            
                }
                else{
                    ?>
                    <script>
                      
                      m="Failed To Mark Attendance";
                    window.location.href = "index.php"+'?m='+m;
                    </script>
                    <?php
                }

            }
            else{

                // ! DO NOT DELETE THIS CODE THIS CODE IS FOR MARKING ABSENT(FOR TESTING)
                // $sql="UPDATE participants SET attendance = 0 WHERE event_id='$de_event_id' AND p_email='$de_p_mail'";
                // $query = mysqli_query($conn,$sql);


                ?>
                    <script>
                      
                      m="Attendance Already Marked";
                    window.location.href = "index.php"+'?m='+m;
                    </script>
                    <?php
            }
        }


    }else{
        ?>
         <script>
            m="Not Registered in event";
            window.location.href = "index.php"+'?m='+m;
        </script>
        <?php
       
        

    }

   

   




}else{

    ?>
     <script>
        m="Invalid QR Code OR QR Code Not Detected";             
        window.location.href = "index.php"+'?m='+m;     
       
    </script>
    <?php
    
}


$conn->close();



?>




<!-- <script>
    function displayMessage(message){
        alert(message);

        setTimeout(function(){
            window.close();
            window.location.href = "index.php";

        },2000);
    }
</script> -->

