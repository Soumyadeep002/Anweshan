<?php
include "../database/db_conn.php";
session_start();
?>

<!-- frontend done  -->

<!DOCTYPE html>
<html lang="en">

<!-- Head part of the page  -->

<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <meta http-equiv="refresh" content="1"> -->
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
                    <a href="admin-event-details-update.php" class="nav-link  link-body-emphasis">
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
                    <a href="admin-participat-list.php" class="nav-link  link-body-emphasis">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#grid"></use>
                        </svg>
                        Participant List
                    </a>
                </li>
                <li>
                    <a href="admin-attandence-list.php" class="nav-link active link-body-emphasis">
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
     if (isset($_SESSION['event_id']) && isset($_SESSION['a_email']) && isset($_SESSION['event_name']) && isset($_SESSION['organizer'])) {
        $event_id = $_SESSION['event_id'];
        $a_email = $_SESSION['a_email'];
        $event_name=$_SESSION['event_name']; 
        $organizer=$_SESSION['organizer']; 
        //Executing query to get details of relevant admin
    ?>
        <!-- Main Section -->
        <div class="container">

            <div style="padding-bottom: 20px;" id="admin-heading">
                <h3><?php echo $event_name; ?> - Attandence List</h3>
            </div>

            <!-- attandenc list -->
            <div id="live-participant-list" class="participant-list">

                <?php
                $sql = "SELECT * FROM participant WHERE event_id='{$event_id}' AND attendance=1";
                $result = $conn->query($sql);

                //defining a variable set its value to 1 , this value will be used as serial number of table
                $row_count = 1;


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
                        $disableLink = true;
                        echo "<tr><td>" . "$row_count" . "</td><td>" . $row["p_name"] . "</td><td>" . $row["p_email"] . "</td><td>" . $row["mobile"] . "</td><td>" . $row["entry_time"] . "</td></tr>";
                        $row_count++;
                    }
                } else {
                    $disableLink = false;
                    echo  "<div style=\" padding: 10px; display:flex; margin: auto; align-items: center; border-radius: 10px; font-size: medium; font-weight: lighter;\" id=\"pre\" class=\"w-25 container info text-center bg-info\"> <p class=\"text-danger\" style=\"margin: auto;\" >No attendee found</p></div>";
                }


                ?>



                </tbody>
                </table>
                <br>




                <form style="display: inline-block;" method="post" action="../export/export-attendance.php">
                    <input class="btn btn-success" type="submit" name="export" value="Download">
                </form>

                <div style="display: inline-block;"  >
                    <a class="btn btn-success" <?php if(!$disableLink){echo 'style="display:none;"';} ?> href="../Mail/send-participation-proof.php">Send Certificate</a>
                </div>

                <br>

                <a href="admin.php" id="back-2"><i class="fas fa-angle-left"></i> Back</a>

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
        // header("location:../signup-login/login.php");
    }
?>