<?php
include "../database/db_conn.php";
session_start();




?>
<!-- front end finished  -->

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
                    <a href="admin-attandence-list.php" class="nav-link link-body-emphasis">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#people-circle"></use>
                        </svg>
                        Attendance List
                    </a>
                </li>
               
                <li>
                    <a href="admin-create-admin.php" class="nav-link active link-body-emphasis">
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

            <div id="admin-heading">
                <h3><?php echo $event_name; ?> - Create New Admin</h3>
            </div>

            <div id="logreg-forms">
                <form action="admin-create-admin.php" method="post" class="form-signup" enctype="multipart/form-data">

                    <!-- Create New Admin -->
                    <form class="form-signup-3" method="post" action="admin.php" enctype="multipart/form-data">
                        <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">
                            Add New Admin
                        </h1>

                        <input type="text" id="event-admin-name" class="form-control" name="a_name" required="" placeholder="Event Admin Name" value="" autofocus="" />

                        <input type="email" id="event-admin-email" class="form-control" name="a_email" required="" placeholder="Event Admin Email address" value="" autofocus="" />

                        <input type="password" id="user-pass" class="form-control" placeholder="Password" name="a_password-repeat" required="" autofocus="" />

                        <input type="password" id="user-repeatpass" class="form-control" name="a_password" required="" placeholder="Repeat Password" autofocus="" />

                        <button class="btn btn-primary btn-block btn-danger" type="reset">
                            <i class="fas fa-eraser"></i> Reset
                        </button>

                        <button class="btn btn-primary btn-block" type="submit" name="files">
                            <i class="fas fa-user"></i> Create
                        </button>

                        <a href="admin.php" id="cancel_signup"><i class="fas fa-angle-left"></i> Back</a>
                    </form>


                    <?php
                    if (isset($_POST['a_name']) && isset($_POST['a_email']) && isset($_POST['a_password-repeat']) && isset($_POST['a_password'])) {
                        //function to trim and strip data
                        function validate($data)
                        {
                            $data = trim($data);
                            $data = stripslashes($data);
                            $data = htmlspecialchars($data);
                            return $data;
                        }

                        if ($_POST['a_password'] == $_POST['a_password-repeat']) {

                            //calling validate function and storing into a variable 
                            $a_password = validate($_POST['a_password']);
                            $a_password_repeat = validate($_POST['a_password-repeat']);
                            $u_a_mail = validate($_POST['a_email']);
                            $a_name = validate($_POST['a_name']);


                            $sql ="SELECT * FROM event_admin WHERE a_email='{$u_a_mail}' AND event_id='{$event_id}'";
                             //Executing Query and storing result in variable
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                ?>
                                <script>
                                    alert("Multiple admin can't be created using one mail in this event");
                                    window.location.href = "admin-create-admin.php";
                                </script>

                            <?php
                            }else
                            {
                           

                            


                                //Hashing Password
                                $h_password = password_hash($a_password, PASSWORD_DEFAULT);

                                //Preparing and executing statement
                                $stmt = $conn->prepare("INSERT INTO event_admin (event_id, a_email, a_name, a_password) VALUES(?, ?, ?, ?)");
                                $stmt->bind_param("ssss", $event_id, $u_a_mail, $a_name, $h_password);
                                $stmt->execute();
                                $stmt->close();

                                if ($stmt) {

                                    $_SESSION['e-a-name'] = $a_name;
                                    $_SESSION['e-a-event-name'] = $event_name;
                                    $_SESSION['e-a-event-id'] = $event_id;
                                    $_SESSION['e-a-email'] = $u_a_mail;
                                    $_SESSION['a_password'] = $a_password;
                                
                                
                                    $_SESSION['e-a-organizer'] = $organizer;

                                
                                    ?>
                                    <script>
                                        alert("new admin Created and mail send ");
                                        window.location.href = "../Mail/create-admin-send-mail.php";
                                    </script>

                                <?php
                                }
                            }
                        } else {
                            ?>
                            <script>
                                alert("password mismatched");
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
        header("location:../signup-login/login.php");
    }
?>