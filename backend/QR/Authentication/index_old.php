<?php


    // if(!defined('my-site')){

    //     Header("location:../../access-denied.html");
    //     }


    // include "conn.php";
    // session_start();
    // if(isset($_SESSION['event_id'])){

    


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>QR Authentication</title>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />

    <!-- logo -->
    <link rel="icon" type="image/x-icon" href="../../assets/logo/eb-transperent-logo.png" />

</head>

<body>
    <div class="container" style="text-align: center;">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="#" class="navbar-brand">EVENT BUDDY</a>
                </div>
                <!-- <a href="display.php" class="btn btn-success">Live Participant</a> -->
            </div>
        </nav>
        <div class="row" style="text-align: center;">
            <div>
                <label>Scan QR Code</label>
            </div>
            <div>
                <video id="preview" width="50%"></video>
            </div>
            <div>
                <form id="myForm" action="insert.php" method="post" class="form-horizontal">
                    <input type="text" name="text" id="text" value=" " style="display: none;" readonly placeholder="scan qrcode"
                        class="form-control" />

                    
                </form>

               
                
            </div>
        </div>
    </div>
    <!-- <div class="mw-52 container text-center bg-info"> <h2 class="text-success">marked as present</h2></div> -->
    <script>
        let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
        Instascan.Camera.getCameras().then(function (cameras) {
            if (cameras.length > 0) {
                scanner.start(cameras[0]);
            } else {
                alert('No Camera Found');
            }
        }).catch(function (e) {
            console.error(e);
        });
        scanner.addListener('scan', function (c) {
            // alert(c);

            document.getElementById('text').value = c;


            window.location.href = 'insert.php'+'?c='+c;
            document.getElementById("myForm").submit();
        });
    </script>
</body>

</html>

<?php
    

    // echo $_SESSION['event_id'];
     $event_id = $_SESSION['event_id'];
   
    // if(isset($_GET['m'])){
    //     $message = $_GET['m'];
       
        // echo $message;

        if($message=="Marked as present" || $message=="Attendance Already Marked"){
            echo  "<div id=\"pre\" class=\"w-25 container info text-center bg-info\"> <h2 class=\"text-success\">$message</h2></div>";

            ?>
            <script>
                setTimeout(function(){
                    // document.getElementByClassName("info").style.display='none';
                    document.getElementById("pre").style.display='none';
                },1000);
    
            </script>
    <?php

        }else{
            echo  "<div id=\"pre\" class=\" w-25 container info text-center bg-info\"> <h2 class=\"text-danger \">$message</h2></div>";

            ?>
            <script>
                setTimeout(function(){
                    // document.getElementByClassName("info").style.display='none';
                    document.getElementById("pre").style.display='none';
                },1000);
    
            </script>
    <?php

        }

       
    // }else{

        // echo  "<div class=\"w-25 container text-center bg-info\"> <h2 class=\"text-warning\">Attendance Not Done</h2></div>";

    // }
?>

            <!-- live-participant-list -->
            <div id="live-participant-list" class="participant-list container">
                <div class="participant-list-title">
                    <h2>Attendance List</h2>
                </div>

                <?php
                 //Executing query to get details of relevant participants
                 $sql = "SELECT * FROM participants WHERE event_id ='$event_id' AND flag=1";
                 $result = $conn->query($sql);

                 //defining a variable set its value to 1 , this value will be used as serial number of table
                 $row_count = 1;

                //  $_SESSION['l-p']=true;

                  //Checking whether the number of result row is greater than  1 or not 
                  if ($result->num_rows > 0) 
                {
                    echo "
                    <table class='table table-dark'>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile Number</th>
                                        <th>Time Stamp</th>
                                    </tr>
                                </thead>

                                <tbody>
                    
                    
                    
                    ";


                    // output data of each row
                    while ($row = $result->fetch_assoc()){
                        echo "<tr><td>" . "$row_count" . "</td><td>" . $row["p_name"] . "</td><td>" . $row["p_email"] . "</td><td>" . $row["mobile"] . "</td><td>". $row['date_time']."</td></tr>";
                        $row_count++;
                    }

                }else {
                    ?>
                        
    
                    <?php
                        echo "0 results";
                    }
                    ?>
                
                    </tbody>
                    </table>


                
                <br>
                
                <form method="post" action="../../export/export-attendance.php">
                    <input class="btn btn-success" type="submit" name="export" value="Download As Excel File">
                    <!-- <a class="btn btn-success" href="../../Mail/send-participation-proof.php">Proof of participation</a>    -->
                </form>

                <a href="../../admin.php" id="back-2"><i class="fas fa-angle-left"></i> Back</a>
                <!-- <button onclick="refreshPage();"class="btn btn-primary">Refresh</button> -->
                

            </div>


<?php
    // }else{
    //     header("Location:../../access-denied.html");
    // }

?>