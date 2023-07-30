<!-- frontend done  -->
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
    <link rel="icon"  href="../../assets/icon1.png" />

    <title>ANWESHAN - ADMIN</title>

    <link rel="icon" type="image/x-icon" href="../assets/logo/eb-transperent-logo.png" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />

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

<body>

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
                    <a href="admin.php" class="nav-link " aria-current="page">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#home"></use>
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <a href="admin-event-details-update.php" class="nav-link active link-body-emphasis">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#speedometer2"></use>
                        </svg>
                        Update Event Details
                    </a>
                </li>
                <li>
                    <a href="admin-event-files-update.php" class="nav-link  link-body-emphasis">
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
    if (isset($_SESSION['event_id']) && isset($_SESSION['a_email'])) {
        $event_id = $_SESSION['event_id'];
        $a_email = $_SESSION['a_email'];
        //Executing query to get details of relevant admin

        $sql = "SELECT *
                            FROM events
                            JOIN event_admin ON events.event_id= event_admin.event_id WHERE events.event_id='$event_id'";
        $result = mysqli_query($conn, $sql);



        //Checking whether the number of result row is greater than  1 or not 

        if ($result->num_rows > 0) {
            // output data of each row

            $row = $result->fetch_assoc();


    ?>


            <!-- Main Section -->
            <div class="container">

                <div id="admin-heading">
                    <h3><?php echo $row['event_name']; ?> - Update Event Details</h3>
                </div>

                <!-- form to update event details -->
                <div id="logreg-forms">
                    <form action="admin-event-details-update.php" method="post" class="form-signup" enctype="multipart/form-data">

                        <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">
                            Update Event Details
                        </h1>

                        <input type="text" id="event-name" name="event_name" class="form-control" placeholder="Event Name" required="" value="<?php echo $row["event_name"]; ?>" />

                        <label for="event-organizer">Event organizer :</label>
                        <input type="text" id="event-organizer" name="organizer" class="form-control" required="" placeholder="Event Organizer" value="<?php echo $row["organizer"]; ?>" autofocus="" />

                        <label for="event-start-date">Event Start Date :</label>
                        <input type="date" id="event-start-date" name="event_s_date" class="form-control"  value="<?php echo $row["event_s_date"]; ?>" required />

                        <label for="event-start-time">Event Start Time :</label>
                        <input type="time" id="event-start-time"  pattern="[0-9]{2}:[0-9]{2}"  name="event_s_time" class="form-control"  value="<?php echo $row["event_s_time"]; ?>" required />

                        <label for="event-end-date">Event End Date :</label>
                        <input type="date" id="event-end-date" name="event_e_date" class="form-control"  value="<?php echo $row["event_e_date"]; ?>" required/>

                        <label for="event-end-time">Event End Time :</label>
                        <input type="time" id="event-end-duration" pattern="[0-9]{2}:[0-9]{2}"   name="event_e_time" class="form-control"  value="<?php echo $row["event_e_time"]; ?>"  required />

                        <label for="event-description">Event Description :</label>
                        <textarea class="form-control" id="event-description" required="" name="event_desc" value="" rows="3"><?php echo $row["event_desc"]; ?></textarea>

                        <input type="text" id="event-venue" class="form-control" name="event_venue" required="" placeholder="Event Venue" value="<?php echo $row["event_venue"]; ?>" autofocus="" />

                        <input type="text" id="event-admin-name" class="form-control" name="a_name" required="" placeholder="Event Admin Name" value="<?php echo $row["a_name"]; ?>" autofocus="" />

                        <input type="email" id="event-admin-email" class="form-control" name="a_email" required="" placeholder="Event Admin Email address" value="<?php echo $row["a_email"]; ?>" autofocus="" />



                        <button class="btn btn-primary btn-block btn-danger" type="reset">
                            <i class="fas fa-eraser"></i> Reset
                        </button>

                        <button class="btn btn-primary btn-block" type="submit" name="submit">
                            <i class="fas fa-user"></i> Update Details
                        </button>

                        <a href="admin.php" id="cancel_signup"><i class="fas fa-angle-left"></i> Back</a>

                    </form>

                    <?php

                    //function to trim and strip data
                    function test_input($data)
                    {
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                    }

                    if (isset($_POST['event_name']) && isset($_POST['organizer']) && isset($_POST['event_s_date']) && isset($_POST['event_s_time']) && isset($_POST['event_e_date']) && isset($_POST['event_e_time']) && isset($_POST['event_desc']) && isset($_POST['event_venue']) && isset($_POST['a_name']) && isset($_POST['a_email'])) {

                        //calling test_input function and storing into a variable 
                        $event_name = test_input($_POST['event_name']);
                        $organizer = test_input($_POST['organizer']);
                       
                        $event_s_date = test_input($_POST['event_s_date']);
                        $event_s_time = test_input($_POST['event_s_time']);
                        $event_e_date = test_input($_POST['event_e_date']);
                        $event_e_time = test_input($_POST['event_e_time']);
                        $event_desc = test_input($_POST['event_desc']);
                        $event_venue = test_input($_POST['event_venue']);
                        $a_name = test_input($_POST['a_name']);
                        $a_email = test_input($_POST['a_email']);



                        // $stmt = $conn->prepare("UPDATE event_admins SET  a_email=?, a_name=?, a_password=?, event_name=?, event_sdate=?, event_stime=?, event_edate=?, event_etime=?, event_venue=?, organizer=?, event_desc=? WHERE event_id=?");
                        // $stmt->bind_param("ssssssssssss", $a_mail, $a_name, $h_password, $event_name, $event_sdate, $event_stime, $event_edate, $event_etime, $event_venue, $organizer, $event_desc, $event_id);
                        // $stmt->execute();
                        // $stmt->close();


                        $stmt1 = $conn->prepare("UPDATE events SET  event_name=?, event_s_date=?, event_s_time=?, event_e_date=?, event_e_time=?, event_venue=?, organizer=?, event_desc=? WHERE event_id=?");
                        $stmt1->bind_param("sssssssss", $event_name, $event_s_date, $event_s_time, $event_e_date, $event_e_time, $event_venue, $organizer, $event_desc, $event_id);
                        $stmt1->execute();
                        $stmt1->close();

                        $stmt2 = $conn->prepare("UPDATE event_admin SET  a_email=?, a_name=? WHERE event_id=?");
                        $stmt2->bind_param("sss", $a_email, $a_name, $event_id);
                        $stmt2->execute();
                       
                        $stmt2->close();

                        //Checking whether statement is successfully executed or not 
                        if ($stmt1 && $stmt2) {
                    ?>
                            <script>
                                alert("Event Details Updated Successfully.");
                                window.location.href = "admin.php";
                            </script>
                        <?php
                        } else {
                        ?>
                            <script>
                                alert("Error in Updating Event Details");
                                window.location.href = "admin.php";
                            </script>
                    <?php


                        }
                    }

                    ?>
                </div>
            </div>
        </div>

            <!-- scripts  -->

            
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
            
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
            </script>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>

<?php

        } else {
?>
    <script>
        alert("no event")
    </script>

<?php
        }
    } else {
        header("location:../signup-login/login.php");
    }
?>