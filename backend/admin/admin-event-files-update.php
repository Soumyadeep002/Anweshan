<!-- front end done  -->
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
                    <a href="admin-event-details-update.php" class="nav-link  link-body-emphasis">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#speedometer2"></use>
                        </svg>
                        Update Event Details
                    </a>
                </li>
                <li>
                    <a href="admin-event-files-update.php" class="nav-link active link-body-emphasis">
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
                <h3><?php  echo $event_name; ?> - Update Event Files</h3>
            </div>

            <!-- form to update event details -->
            <div id="logreg-forms">

                <form class="form-signup-2 " method="post" action="admin-event-files-update.php" enctype="multipart/form-data">
                    <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">
                        Update Event Files
                    </h1>
                    <label for="event-brochure" class="mt-3">Event Brochure: (pdf file under 40mb)</label> <br>
                    <input type="file" id="event-brochure"  name="event_broc"> <br>

                    <label for="Carousel-image" class="mt-3">Event Cover Image: (1460x620 image)</label> <br>
                    <input type="file" multiple id="corousel-image"  name="c_image1" multiple> <br>

                    <label for="Carousel-image" class="mt-3">Event Card Image: (A4 size)</label> <br>
                    <input type="file" multiple id="corousel-image"  name="c_image2" multiple> <br>

                    

                    <button class="btn btn-primary btn-block btn-danger" type="reset">
                        <i class="fas fa-eraser"></i> Reset
                    </button>

                    <button class="btn btn-primary btn-block" type="submit" name="files">
                        <i class="fas fa-user"></i> Update
                    </button>

                    <a href="admin.php" id="cancel_signup"><i class="fas fa-angle-left"></i> Back</a>
                </form>

                <?php
                // if (isset($_POST['event_broc']) && isset($_POST['c_image1']) && isset($_POST['c_image2']) && isset($_POST['c_image3'])) {

                if (isset($_POST['files'])) {
                    //Updating Event Brochure to database 






                    $pdf_format = array('pdf');
                    $pdf = $_FILES['event_broc']['name'];

                    $pdf_type = $_FILES['event_broc']['type'];

                    $pdf_extension = pathinfo($pdf, PATHINFO_EXTENSION);
                    $new_pdf = $event_id . "_event_broc" . "." . $pdf_extension;

                    $pdf_size = $_FILES['event_broc']['size'];

                    $pdf_temp_loc = $_FILES['event_broc']['tmp_name'];

                    // $pdf_store="pdf/".$pdf;
                    $pdf_store = "../event-assets/b_pdf/" . $new_pdf;




                    //Updating carousel to database

                    //carousel image 1
                    $image_formats = array('gif', 'png', 'jpg');
                    $c_img1 = $_FILES['c_image1']['name'];
                    $c_img1_type = $_FILES['c_image1']['type'];

                    // $c_img1_tmp = explode(".", $c_img1);
                    // $c_img1_extension=end($c_img1_tmp);

                    $c_img1_extension = pathinfo($c_img1, PATHINFO_EXTENSION);
                    $defined_extension = "png";
                    $new_c_img1 = $event_id . "_c_img1" . "." . $defined_extension;
                    $c_img1_size = $_FILES['c_image1']['size'];
                    $c_img1_temp_loc = $_FILES['c_image1']['tmp_name'];
                    $c_img1_store = "../event-assets/c_image/" . $new_c_img1;





                    //carousel image 2
                    $image_formats = array('gif', 'png', 'jpg');
                    $c_img2 = $_FILES['c_image2']['name'];
                    $c_img2_type = $_FILES['c_image2']['type'];

                    // $c_img2_tmp = explode(".", $c_img2);
                    // $c_img2_extension=end($c_img2_tmp);

                    $c_img2_extension = pathinfo($c_img2, PATHINFO_EXTENSION);

                    $defined_extension = "png";
                    $new_c_img2 = $event_id . "_c_img2" . "." . $defined_extension;
                    $c_img2_size = $_FILES['c_image2']['size'];
                    $c_img2_temp_loc = $_FILES['c_image2']['tmp_name'];
                    $c_img2_store = "../event-assets/c_image/" . $new_c_img2;





                   


                    if (in_array($c_img1_extension, $image_formats) && in_array($c_img2_extension, $image_formats) && $pdf_extension == 'pdf') {

                        move_uploaded_file($pdf_temp_loc, $pdf_store);

                        move_uploaded_file($c_img1_temp_loc, $c_img1_store);
                        move_uploaded_file($c_img2_temp_loc, $c_img2_store);
                        







                        //preparing and executing statement
                        $stmt = $conn->prepare("UPDATE events SET  event_broc=?, c_image1=?, c_image2=?  WHERE event_id=?");
                        $stmt->bind_param("ssss", $new_pdf, $new_c_img1, $new_c_img2, $event_id);
                        $stmt->execute();
                        $stmt->close();
                        if ($stmt) {




                ?>
                            <script>
                                alert("Event Files Updated Successfully.");
                                window.location.href = "admin.php";
                            </script>
                        <?php
                        } else {



                        ?>
                            <script>
                                alert("Error in Updating event Details")
                            </script>
                        <?php


                        }

                        // header("Refresh: 1;url = admin.php");
                    } else {

                        ?>
                        <script>
                            alert("Invalid File Format");
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