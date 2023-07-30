<!-- front end finished  -->
<?php
include "../database/db_conn.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<!-- Head part of the page  -->

<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>ANWESHAN - ADMIN</title>

    

    <link rel="icon"  href="../../assets/icon1.png" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="./css/admin.css">

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

</head>

<!-- Body part of page -->

<body class="">

    <!-- navbar  -->
    <nav id="my_mob_nav" class="navbar navbar-expand-lg navbar-dark bg-primary ">
        <div class="container-fluid">
            <a href="../index.php" class="navbar-brand"><img style="height:40px;" src="../../assets/logo.png"
                    alt=""></a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">

                <div class="navbar-nav">
                    <a href="admin.php" class="nav-item nav-link active">Home</a>
                    <a href="admin-event-details-update.php" class="nav-item nav-link active">Update Event Details</a>
                    <a href="admin-event-files-update.php" class="nav-item nav-link active">Update Event Files</a>
                    <a href="admin-participat-list.php" class="nav-item nav-link active">Participant List</a>
                    <a href="admin-attandence-list.php" class="nav-item nav-link active">Attendance List</a>
                    <a href="admin-create-admin.php" class="nav-item nav-link active">Create New Admin</a>
                    
                </div>
               
                <div class="navbar-nav ms-auto">
                    <a onclick="javascript:return confirm('Are You Want to Logout');" type="button" href="../signup-login/logout.php" class="nav-item nav-link active"><strong>Logout</strong></a>
                </div>
            </div>
        </div>
    </nav>

   
    <!-- end of navbar  -->

    <div class="d-flex flex-row">
        <div id="sidenav" class=" flex-column flex-shrink-0 p-3 bg-body-tertiary "
            style="width: 280px; ">
            <a href="admin.php"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi pe-none me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                <a href="../index.php" class="" style="margin-left: auto; margin-right: auto;"><img style="height:80px;" src="../../assets/logo.png" alt="logo" ></a>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="admin.php" class="nav-link active" aria-current="page">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#home"></use>
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <a href="admin-event-details-update.php" class="nav-link  link-body-emphasis">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#speedometer2"></use>
                        </svg>
                        Update Event Details
                    </a>
                </li>
                <li>
                    <a href="admin-event-files-update.php" class="nav-link link-body-emphasis">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#table"></use>
                        </svg>
                        Update Event Files
                    </a>
                </li>
                <li>
                    <a href="admin-participat-list.php" class="nav-link link-body-emphasis">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#grid"></use>
                        </svg>
                        Participant List
                    </a>
                </li>
                <li>
                    <a href="admin-attandence-list.php" class="nav-link link-body-emphasis">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#people-circle"></use>
                        </svg>
                        Attendance List
                    </a>
                </li>
                
                <li>
                    <a href="admin-create-admin.php" class="nav-link link-body-emphasis">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#people-circle"></use>
                        </svg>
                        Create New Admin
                    </a>
                </li>
               
                <li>
                    <a onclick="javascript:return confirm('Are You Want to Logout');"
                        href="../signup-login/logout.php"  type="button"
                        class="nav-link link-body-emphasis ">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#people-circle"></use>
                        </svg>
                        Logout
                    </a>
                </li>
            </ul>
            <hr>

        </div>
    

    <?php
                        if (isset($_SESSION['event_id']) && isset($_SESSION['a_email'])&& isset($_SESSION['event_name'])) {
                            $event_id = $_SESSION['event_id'];
                            $a_email = $_SESSION['a_email'];
                            $organizer =  $_SESSION["organizer"];
                            //Executing query to get details of relevant admin

                            $sql = "SELECT *
                            FROM events
                            JOIN event_admin ON events.event_id= event_admin.event_id WHERE events.event_id='$event_id' AND event_admin.a_email='$a_email'";
                            $result = mysqli_query($conn, $sql);



                            //Checking whether the number of result row is greater than  1 or not 

                            if ($result->num_rows > 0) {
                                // output data of each row

                                $row = $result->fetch_assoc();
                                
                                
                            }else{
                                ?>
    <script>alert("No such event");
        window.location.href = "../signup-login/logout.php";
    </script>
    <?php
                            }

                        ?>
    <!-- Main Section -->
    <div class="container">

        <!-- home-heading  -->
        <div id="event-details" class="p-5 home-heading">
            <div class="home-heading-content">
                <div class="container-lg my-3">
                    <h1>Event Name :
                        <?php echo $row['event_name']; ?>
                    </h1>
                    <h4>Admin Name :
                        <?php echo $row['a_name']; ?>
                    </h4>

                    <p class="lead">Organizer :
                        <?php echo $row['organizer']; ?>
                    </p>



                    <img src="../event-assets/c_image/<?php echo $row['c_image1'] ?>" class="img-fluid" alt="Cover Image">

                </div>

                <!-- Displaying other details -->
                <p class="card-date-time">

                    <b>Start Date & time :</b>
                    [
                    <?php echo $row['event_s_date']; ?>] [
                    <?php echo $row['event_s_time']; ?>]
                </p>


                <p class="card-date-time">
                    <b>End Date & time :</b>
                    [
                    <?php echo $row['event_e_date']; ?>] [
                    <?php echo $row['event_e_time']; ?>]
                </p>


                <p class="card-Venue">
                    <b>Venue :</b>
                    <?php echo $row['event_venue']; ?>
                </p>


                <p class="card-event-description-title">
                    <b>Event Description :</b>
                    <?php echo $row['event_desc']; ?>
                </p>


                <p class="card-event-description">
                </p>

                <p class="card-Venue">
                    <b>Approval status :</b>
                    <?php
                   
                    if($row["approval"]==0 ){
                        echo "Pending";
                    }else if($row["approval"]==2){
                        echo "Not Approved";
                    }
                    else{
                        echo "Approved";
                    }
                    
                     ?>


                </p>
                
                <div>
                    <div>
                            <a  href="../QR/Authentication/" onclick="requestCameraPermission()" type="button" class="btn btn-success">Take
                                    Attendance</a>

                            <a target="_blank" href="../event-assets/b_pdf/<?php echo $row['event_broc']; ?>" type="button"
                                class="btn btn-primary brochure-btn">Event Brochure</a>
                    </div>

                    

                   <!--  <div><a onclick="javascript:return confirm('Are You Want to Delete This Event Permanently');"
                            href="../delete/delete-event.php?event_id=<?php echo $event_id ?>" id="delete-event"
                            type="button" class=" btn btn-danger brochure-btn link-body-emphasis " style="margin-top: 0.5rem;">Delete Event</a></div> -->
                       
                </div>



               

                
            </div>
        </div>

    </div>

</div>

    <?php
                        } else {
                            header("location:../signup-login/login.php");
                        }
?>

    <!-- scripts  -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


    

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>