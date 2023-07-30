<!-- <i?php // if(!defined('my-site')){ // Header("location:../../access-denied.html"); // } // include "conn.php" ; // session_start(); // if(isset($_SESSION['event_id'])){ ?> -->
<?php
include "../../database/db_conn.php";
session_start();



if(isset($_SESSION['event_id'])){
?>


<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link rel="icon" type="image/x-icon" href="../../assets/logo/eb-transperent-logo.png" />

    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>

    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>




    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" /> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- external css links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <!-- external css -->
    <link rel="stylesheet" href="css/qr-index.css">

    <!-- internal css  -->
    <style>
        #sidenav {
            display: none;
        }

        @media (min-width: 730px) {
            #my_mob_nav {
                display: none;
            }
        }

        @media (min-width: 730px) {
            #sidenav {
                display: flex;
            }

        }
    </style>

    <!-- title of the page  -->
    <title>EB - QR AUTH</title>

</head>

<body style="background-color: #09203f;">

    <!-- navbar  -->
    <nav id="my_mob_nav" class="navbar navbar-expand-lg navbar-dark bg-primary ">
        <div class="container-fluid">
            <a href="../index.php" class="navbar-brand"><img style="height:40px;" src="../../../assets/logo.png"
                    alt=""></a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">

                <div class="navbar-nav ms-auto">
                    <a href="../../admin/admin.php" class="nav-item nav-link active">Home</a>
                    <a href="../../admin/admin-event-details-update.php" class="nav-item nav-link active">Update Event Details</a>
                    <a href="../../admin/admin-event-files-update.php" class="nav-item nav-link active">Update Event Files</a>
                    <a href="../../admin/admin-participat-list.php" class="nav-item nav-link active">Participant List</a>
                    <a href="../../admin/admin-attandence-list.php" class="nav-item nav-link active">Attendance List</a>

                    <a href="../../admin/admin-create-admin.php" class="nav-item nav-link active">Create New Admin</a>

                </div>

                <div class="navbar-nav ">

                    <a onclick="javascript:return confirm('Are You Want to Logout');" type="button"
                        href="../../signup-login/logout.php" class="nav-item nav-link active"><strong>Logout</strong></a>


                    <div class="navbar-nav ">
                        <button id="toggle-fullscreen" onclick="toggleFullscreen()"><i class='bx bx-fullscreen'></i>
                            <div style="font-size:small; margin-top: auto; margin-bottom: auto;">FullScreen</div>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </nav>


    <!-- end of navbar  -->

    <div class="d-flex flex-row">
        <div id="sidenav" class=" flex-column flex-shrink-0 p-3 bg-body-tertiary " style="width: 280px; ">
            <a href="admin.php"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi pe-none me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                <a href="../../index.php" class="" style="margin-left: auto; margin-right: auto;"><img style="height:80px;"
                        src="../../../assets/logo.png" alt="logo"></a>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="../../admin/admin.php" class="nav-link active" aria-current="page">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#home"></use>
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <a href="../../admin/admin-event-details-update.php" class="nav-link  link-body-emphasis">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#speedometer2"></use>
                        </svg>
                        Update Event Details
                    </a>
                </li>
                <li>
                    <a href="../../admin/admin-event-files-update.php" class="nav-link link-body-emphasis">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#table"></use>
                        </svg>
                        Update Event Files
                    </a>
                </li>
                <li>
                    <a href="../../admin/admin-participat-list.php" class="nav-link link-body-emphasis">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#grid"></use>
                        </svg>
                        Participant List
                    </a>
                </li>
                <li>
                    <a href="../../admin/admin-attandence-list.php" class="nav-link link-body-emphasis">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#people-circle"></use>
                        </svg>
                        Attendance List
                    </a>
                </li>

                <li>
                    <a href="../../admin/admin-create-admin.php" class="nav-link link-body-emphasis">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#people-circle"></use>
                        </svg>
                        Create New Admin
                    </a>
                </li>

                <li>
                    <a onclick="javascript:return confirm('Are You Want to Logout');" href="../../signup-login/logout.php"
                        type="button" class="nav-link link-body-emphasis ">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#people-circle"></use>
                        </svg>
                        Logout
                    </a>
                </li>
                <!-- <li>
                    <div class=" ">
                        <button id="toggle-fullscreen" onclick="toggleFullscreen()"><i class='bx bx-fullscreen'></i>
                            <div style="font-size:small; margin-top: auto; margin-bottom: auto;">FullScreen</div>
                        </button>
                    </div>
                </li> -->
            </ul>
            <hr>

        </div>

        <!-- ! message dom -->
        <script>
            function messageFunction(a, b) {
                document.getElementById("message-p").innerText = a;
                document.getElementById("message-p").style.color = b;
                setTimeout(function () {
                    document.getElementById("message-p").innerText = "";
                }, 5000);
            }
        </script>




        <div class="container" style="text-align: center;">

            <div class="row" style="text-align: center;">
                <div id="page-title">
                    <label><strong style="color: white;">Scan QR Code</strong></label>
                </div>
                <div>
                    <video id="preview" width="100%" ></video>
                </div>
                <div>
                    <form id="myForm" action="insert.php" method="post" class="form-horizontal">
                        <input type="text" name="text" id="text" value=" " style="display: none;" readonly
                            placeholder="scan qrcode" class="form-control" />
                    </form>
                </div>


                <!-- ! message dom -->

                <div id="message">
                    <p id="message-p"></p>
                </div>

            </div>


            <!-- ! message demo purpose -->

            <?php
             $a = "";
            $b = "";
            ?>

            <script>
                messageFunction("<?php echo $a;  ?>", "<?php echo $b;  ?>")
            </script>




        </div>
    </div>




    <script>
        function toggleFullscreen() {
            if (document.fullscreenElement) {
                document.exitFullscreen();
            } else {
                document.documentElement.requestFullscreen();
            }
        }
    </script>

    <script>
        let scanner = new Instascan.Scanner({
            video: document.getElementById('preview')
        });
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


            window.location.href = 'insert.php' + '?c=' + c;
            document.getElementById("myForm").submit();
        });
    </script>


    <!-- scripts  -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>





</body>

</html>



<?php


    // echo $_SESSION['event_id'];
    $event_id = $_SESSION['event_id'];

    if(isset($_GET['m'])){
        $message = $_GET['m'];

    // echo $message;

    if ($message == "Marked as present" || $message == "Attendance Already Marked") {

        echo  "<div style=\" padding: 10px; display:flex; margin: auto; align-items: center; border-radius: 10px; font-size: medium; font-weight: lighter;\" id=\"pre\" class=\"w-25 container info text-center bg-info\"> <p class=\"text-danger\" style=\"margin: auto;\" >$message</p></div>";
        
        // echo  "<div id=\"pre\" class=\"w-25 container info text-center bg-info\"> <h2 class=\"text-success\">$message</h2></div>";

    ?>
<script>
    setTimeout(function () {
        // document.getElementByClassName("info").style.display='none';
        document.getElementById("pre").style.display = 'none';
    }, 2000);
</script>
<?php

    } else {
        // echo  "<div id=\"pre\" class=\" w-25 container info text-center bg-info\"> <h2 class=\"text-danger \">$message</h2></div>";

        echo  "<div style=\" padding: 10px; display:flex; margin: auto; align-items: center; border-radius: 10px; font-size: medium; font-weight: lighter;\" id=\"pre\" class=\"w-25 container info text-center bg-info\"> <p class=\"text-danger\" style=\"margin: auto;\" >$message</p></div>";

    ?>
<script>
    setTimeout(function () {
        // document.getElementByClassName("info").style.display='none';
        document.getElementById("pre").style.display = 'none';
    }, 2000);
</script>
<?php

    }


    // }else{

    // echo  "<div class=\"w-25 container text-center bg-info\"> <h2 class=\"text-warning\">Attendance Not Done</h2></div>";

    // }
    ?>

<!-- live-participant-list -->
<div id="live-participant-list" class="participant-list container">
    <div style="margin: auto; text-align: center; padding-bottom:20px; " class="participant-list-title">
        <h2>Attendance List</h2>
    </div>

    <?php
        //Executing query to get details of relevant participants
        $sql = "SELECT * FROM participant WHERE event_id ='$event_id' AND attendance=1";
        $result = $conn->query($sql);

        //defining a variable set its value to 1 , this value will be used as serial number of table
        $row_count = 1;

        //  $_SESSION['l-p']=true;

        //Checking whether the number of result row is greater than  1 or not 
        if ($result->num_rows > 0) {
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
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . "$row_count" . "</td><td>" . $row["p_name"] . "</td><td>" . $row["p_email"] . "</td><td>" . $row["mobile"] . "</td><td>" . $row['entry_time'] . "</td></tr>";
                $row_count++;
            }
        } else {
        ?>


    <?php
            echo "0 results";
        }
        ?>

    </tbody>
    </table>



    <br>

    <!-- <form method="post" action="../../export/export-attendance.php">
            <input class="btn btn-success" type="submit" name="export" value="Download As Excel File"> -->
    <!-- <a class="btn btn-success" href="../../Mail/send-participation-proof.php">Proof of participation</a>    -->
    <!-- </form> -->

    <a href="../../admin/admin.php" id="back-2"><i class="fas fa-angle-left"></i> Back</a>
    <!-- <button onclick="refreshPage();"class="btn btn-primary">Refresh</button> -->


</div>


<?php
    }
    }else{
        header("location:../../signup-login/login.php");
    }

    ?>