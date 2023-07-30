<?php
define('my-site', true);

if (!defined('my-site')) {

    Header("location:access-denied.html");
}
?>


<?php

//Starting Session
session_start();


//connecting to data base
include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link rel="icon" type="image/x-icon" href="assets/logo/eb-transperent-logo.png" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- external css links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />

    <link rel="stylesheet" href="/style.css" />

    <!-- external css -->
    <link rel="stylesheet" href="css/signup-login.css">

    <!-- internal css  -->
    <style>

    </style>

    <!-- title of the page  -->
    <title>EB - SIGNUP / LOGIN</title>

</head>

<body>

    <!-- navbar  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a href="index.php" class="navbar-brand"><img style="height:40px; width: 40px;
                " src="assets/logo/eb-white-bg-logo.png" alt=""> Event Buddy</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="index.php#events-section" class="nav-item active nav-link">Events</a>
                </div>
                <div class="navbar-nav ms-auto">
                    <a href="super-admin/sa-login.html" class="nav-item active nav-link"><strong>Super Admin</strong></a>
                </div>
            </div>
        </div>
    </nav>

    <!-- all forms  -->
    <div id="logreg-forms">
        <!-- signin form  -->
        <form class="form-signin" method="post">

            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">
                Sign in
            </h1>
            <input type="text" id="inputeventid" name="event_id" class="form-control" autofocus="" placeholder="Enter the alphanumaric event ID" pattern="[a-zA-Z0-9]+" />
            <input type="email" id="inputEmail" name="a_email" class="form-control" placeholder="Email address" />
            <input type="password" id="inputPassword" name="a_password" class="form-control" placeholder="Password" />
            <button class="btn btn-success btn-block" type="submit">
                <i class="fas fa-sign-in-alt"></i> Sign in
            </button>
            <a href="./reset-password/reset-password.php" id="forgot_pswd">Forgot password?</a>
            <hr />
            <button class="btn btn-primary btn-block" type="button" id="btn-signup">
                <i class="fas fa-user-plus"></i> Create New Event
            </button>
            <a href="index.php"><i class="fas fa-angle-left"></i> Cancel</a>
        </form>

        <!-- php code of login -->
        <?php

        if (isset($_POST['event_id']) && isset($_POST['a_password']) && isset($_POST['a_email'])) {

            //function to trim and strip data
            function validate($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            //calling validate function and storing into a variable 
            $event_id = validate($_POST['event_id']);
            $a_password = validate($_POST['a_password']);
            $a_mail = validate($_POST['a_email']);

            //Checking for non empty data
            if (empty($event_id)) {

                exit();
            } elseif (empty($a_email)) {
                exit();
            } elseif (empty($a_password)) {
                exit();
            } else {

                //Executing query to get details of relevant admin
                $sql = "SELECT event_admin.a_name,event_admin.a_email,event_admin.a_password,events.event_name,events.event_s_date,events.event_s_time,events.event_e_date,events.event_e_time,events.event_venue,events.event_broc,events.e_organizer,events.event_desc,events.e_slot,events.c_image1,events.c_image2,events.c_image3,events.event_id FROM `events` INNER JOIN event_admin ON events.event_id = event_admin.event_id;
                ";
                $result = $conn->query($sql);

                //Checking whether the number of result row is greater than  1 or not 
                if ($result->num_rows > 0) {

                    // output data of each row
                    $row = $result->fetch_assoc();

                    // Authenticating user inputed data with db data
                    if ($row['event_id'] === $event_id && $row['a_email'] === $a_email) {
                        //de-hashing the password and verifying it and storing it into a variable(returns 1 or 0)
                        $dh_password = password_verify($a_password, $row['a_password']);


                        // Authenticating password
                        if ($dh_password == 1) {

                            // Storing data using session for using in admin.php page
                            $_SESSION['event_id'] = $row['event_id'];
                            $_SESSION['a_email'] = $row['a_email'];
                            // $_SESSION['a_password'] = $row['a_password'];
                            $_SESSION['a_name'] = $row['a_name'];

                            $_SESSION['event_name'] = $row['event_name'];

                            $_SESSION["event_s_date"] = $row["event_s_date"];
                            $_SESSION["event_s_time"] = $row["event_s_time"];
                            $_SESSION["event_e_time"] = $row["event_e_time"];
                            $_SESSION["event_e_date"] = $row["event_e_date"];
                            $_SESSION["event_venue"] = $row["event_venue"];
                            $_SESSION["e_organizer"] = $row["e_organizer"];
                            $_SESSION["event_desc"] = $row["event_desc"];
                            $_SESSION["event_broc"] = $row["event_broc"];
                            $_SESSION["c_image1"] = $row["c_image1"];
                            $_SESSION["c_image2"] = $row["c_image2"];
                            $_SESSION["c_image3"] = $row["c_image3"];
                            $_SESSION["e_slot"] = $row["e_slot"];

                            //Redirecting to admin dashboard
                            header('Location: admin.php');
                            // open
                            exit();
                        } else {
        ?><script>
                                alert("Wrong Password");
                                window.location.href = "signup-login.php";
                            </script><?php
                                    }
                                } else {
                                        ?><script>
                            alert("Invalid Login Credential");
                            window.location.href = "signup-login.php";
                        </script><?php
                                }
                            } else {
                                    ?><script>
                        alert("Invalid Login Credential");
                        window.location.href = "signup-login.php";
                    </script><?php
                            }
                        }
                    } else {
                                ?>
            <!-- <script>
            alert("Error in Form Submission");
            window.location.href = "signup-login.php"; -->
            </script><?php
                    }




                        ?>













        <!-- reset password form -->

        <!-- <form action="reset-password.php" class="form-reset" method="post">

            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">
                Password Reset
            </h1>

            <input type="text" id="inputeventid" class="form-control" name="event_id" placeholder="Enter the alphanumaric event ID" required="" autofocus="" pattern="[a-zA-Z0-9]+" />

            <input type="email" id="resetEmail" class="form-control" name="a_mail" placeholder="Email address" required="" autofocus="" />

            <input type="password" id="password" name="a_password" class="form-control" placeholder="Password " required="">

            <input type="password" name="a_retype-password" id="retype-password" class="form-control" placeholder="Retype Password" required="">

            <button class="btn btn-primary btn-block" type="submit" name="submit">
                Reset Password
            </button>

            <a href="#" id="cancel_reset"><i class="fas fa-angle-left"></i>Back</a>

        </form> -->







        <!-- signup form  -->

        <form action="signup-login.php" method="post" class="form-signup" enctype="multipart/form-data">

            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">
                Create New Event
            </h1>





            <input type="text" id="event-name" name="event_name" class="form-control" required="" placeholder="Event Name" />

            <input type="text" id="event-organizer" name="organizer" class="form-control" required="" placeholder="Event Organizer" autofocus="" />

            <label for="event-start-date">Event Start Date :</label>
            <input type="date" id="event-start-date" name="event_s_date" class="form-control" required="" autofocus="" />

            <label for="event-start-time">Event Start Time :</label>
            <input type="time" id="event-start-time" name="event_s_time" class="form-control" required="" autofocus="" />

            <label for="event-end-date">Event End Date :</label>
            <input type="date" id="event-end-date" name="event_e_date" class="form-control" required="" autofocus="" />

            <label for="event-end-time">Event End Time :</label>
            <input type="time" id="event-end-duration" name="event_e_time" class="form-control" required="" autofocus="" />

            <label for="event-description">Event Description :</label>
            <textarea class="form-control" id="event-description" required="" name="event_desc" rows="3"></textarea>

            <input type="text" id="event-venue" class="form-control" name="event_venue" required="" placeholder="Event Venue" autofocus="" />

            <input type="text" id="event-admin-name" class="form-control" name="a_name" required="" placeholder="Event Admin Name" autofocus="" />

            <input type="email" id="event-admin-email" class="form-control" name="a_email" required="" placeholder="Event Admin Email address" autofocus="" />

            <input type="password" id="user-pass" class="form-control" placeholder="Password" name="a_password" required="" autofocus="" />

            <input type="password" id="user-repeatpass" class="form-control" name="a_retype-password" required="" placeholder="Repeat Password" autofocus="" />

            <label for="event-brochure">Event Brochure: (pdf file under 40mb)</label>
            <input type="file" id="event-brochure" name="event_broc" value="">

            <label for="Carousel-image">Carousel image: (1, 1460x620 image) (Cover Image)</label>
            <input type="file" multiple id="corousel-image" name="c_image1" multiple>

            <label for="Carousel-image">Carousel image: (2, 1460x620 image)</label>
            <input type="file" multiple id="corousel-image" name="c_image2" multiple>

            <label for="Carousel-image">Carousel image: (3, 1460x620 image)</label>
            <input type="file" multiple id="corousel-image" name="c_image3" multiple>

            <button class="btn btn-primary btn-block btn-danger" type="reset">
                <i class="fas fa-eraser"></i> Reset
            </button>

            <button class="btn btn-primary btn-block" type="submit" name="submit">
                <i class="fas fa-user-plus"></i> Create Event
            </button>

            <a href="#" id="cancel_signup"><i class="fas fa-angle-left"></i> Back</a>

        </form>

        <!-- signup.php -->
        <?php
        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        if (isset($_POST['submit'])) {
            $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $event_id = substr(str_shuffle($data), 0, 6);

            if (!empty($_POST['event_name']) && !empty($_POST['e_organizer']) && !empty($_POST['event_s_date']) && !empty($_POST['event_s_time']) && !empty($_POST['event_e_date']) && !empty($_POST['event_e_time']) && !empty($_POST['event_desc']) && !empty($_POST['event_venue']) && !empty($_POST['a_name']) && !empty($_POST['a_email']) && !empty($_POST['a_password'])) {

                if ($_POST['a_password'] == $_POST['a_retype-password']) {

                    $event_name = test_input($_POST['event_name']);
                    $organizer = test_input($_POST['organizer']);
                    $event_s_date = test_input($_POST['event_s_date']);
                    $event_stime = test_input($_POST['event_s_time']);
                    $event_e_date = test_input($_POST['event_e_date']);
                    $event_e_time = test_input($_POST['event_e_time']);
                    $event_desc = test_input($_POST['event_desc']);
                    $event_venue = test_input($_POST['event_venue']);
                    $a_name = test_input($_POST['a_name']);
                    $a_email = test_input($_POST['a_email']);
                    $a_password = test_input($_POST['a_password']);
                    // $event_broc = $_POST['event_broc'];



                    //Hashing Password
                    $h_password = password_hash($a_password, PASSWORD_DEFAULT);

                    //Inserting Event Brochure to database 
                    $pdf_format = array('pdf');
                    $pdf = $_FILES['event_broc']['name'];

                    $pdf_type = $_FILES['event_broc']['type'];

                    // $pdf_tmp = explode(".", $pdf);
                    // $pdf_extension=end($tmp);

                    $pdf_extension = pathinfo($pdf, PATHINFO_EXTENSION);

                    $new_pdf = $event_id . "_event_broc" . "." . $pdf_extension;

                    $pdf_size = $_FILES['event_broc']['size'];

                    $pdf_temp_loc = $_FILES['event_broc']['tmp_name'];

                    // $pdf_store="pdf/".$pdf;
                    $pdf_store = "pdf/" . $new_pdf;

                    // move_uploaded_file($pdf_temp_loc, $pdf_store);




                    //Inserting carousel to database


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
                    $c_img1_store = "image/" . $new_c_img1;
                    // move_uploaded_file($c_img1_temp_loc, $c_img1_store);







                    // $c_img1=$_FILES['c_image1']['name'];
                    // $c_img1_type = $_FILES['c_image1']['type'];
                    // $c_img1_size=$_FILES['c_image1']['size'];
                    // $c_img1_temp_loc = $_FILES['c_image1']['tmp_name'];
                    // $c_img1_store="image/".$c_img1;
                    // move_uploaded_file($c_img1_temp_loc, $c_img1_store);





                    //carousel image 2
                    $image_formats = array('gif', 'png', 'jpg');
                    $c_img2 = $_FILES['c_image2']['name'];
                    $c_img2_type = $_FILES['c_image2']['type'];

                    //  $c_img2_tmp = explode(".", $c_img2);
                    //  $c_img2_extension=end($c_img2_tmp);
                    $c_img2_extension = pathinfo($c_img2, PATHINFO_EXTENSION);

                    $defined_extension = "png";
                    $new_c_img2 = $event_id . "_c_img2" . "." . $defined_extension;
                    $c_img2_size = $_FILES['c_image2']['size'];
                    $c_img2_temp_loc = $_FILES['c_image2']['tmp_name'];
                    $c_img2_store = "image/" . $new_c_img2;
                    //  move_uploaded_file($c_img2_temp_loc, $c_img2_store);



                    // $c_img2=$_FILES['c_image2']['name'];
                    // $c_img2_type = $_FILES['c_image2']['type'];
                    // $c_img2_size=$_FILES['c_image2']['size'];
                    // $c_img2_temp_loc = $_FILES['c_image2']['tmp_name'];
                    // $c_img2_store="image/".$c_img2;
                    // move_uploaded_file($c_img2_temp_loc, $c_img2_store);




                    //carousel image 3
                    $image_formats = array('gif', 'png', 'jpg');
                    $c_img3 = $_FILES['c_image3']['name'];
                    $c_img3_type = $_FILES['c_image3']['type'];

                    //  $c_img3_tmp = explode(".", $c_img3);
                    //  $c_img3_extension=end($c_img3_tmp);
                    $c_img3_extension = pathinfo($c_img3, PATHINFO_EXTENSION);

                    $defined_extension = "png";
                    $new_c_img3 = $event_id . "_c_img3" . "." . $defined_extension;
                    $c_img3_size = $_FILES['c_image3']['size'];
                    $c_img3_temp_loc = $_FILES['c_image3']['tmp_name'];
                    $c_img3_store = "image/" . $new_c_img3;
                    //  move_uploaded_file($c_img3_temp_loc, $c_img3_store);



                    // $c_img3=$_FILES['c_image3']['name'];
                    // $c_img3_type = $_FILES['c_image3']['type'];
                    // $c_img3_size=$_FILES['c_image3']['size'];
                    // $c_img3_temp_loc = $_FILES['c_image3']['tmp_name'];
                    // $c_img3_store="image/".$c_img3;
                    // move_uploaded_file($c_img3_temp_loc, $c_img3_store);


                    if (in_array($c_img1_extension, $image_formats) && in_array($c_img2_extension, $image_formats) && in_array($c_img3_extension, $image_formats) && $pdf_extension == 'pdf') {
                        move_uploaded_file($pdf_temp_loc, $pdf_store);

                        move_uploaded_file($c_img1_temp_loc, $c_img1_store);
                        move_uploaded_file($c_img2_temp_loc, $c_img2_store);
                        move_uploaded_file($c_img3_temp_loc, $c_img3_store);


                        $stmt=$conn->prepare("
                        START TRANSACTION;
                            INSERT INTO events (event_id, event_name, e_organizer)
                            VALUES ('aaa', 'marrige', 'makaut');
                            
                            INSERT INTO event_admin (a_name, event_id, a_email)
                            VALUES ('indranil', 'aaa', 'a@a.com');
                        COMMIT;
                        
                        ");




                        //Preparing and executing statement
                        $stmt = $conn->prepare("INSERT INTO admins (event_id, a_mail, a_name, a_password, event_name, event_sdate, event_stime, event_edate, event_etime, event_venue, organizer, event_desc, event_broc, c_image1, c_image2, c_image3) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                        $stmt->bind_param("ssssssssssssssss", $event_id, $a_mail, $a_name, $h_password, $event_name, $event_sdate, $event_stime, $event_edate, $event_etime, $event_venue, $organizer, $event_desc, $new_pdf, $new_c_img1, $new_c_img2, $new_c_img3);
                        $stmt->execute();
                        $stmt->close();

                        if ($stmt) {


                            $_SESSION['e-a-name'] = $a_name;
                            $_SESSION['e-a-event-name'] = $event_name;
                            $_SESSION['e-a-event-id'] = $event_id;
                            $_SESSION['e-a-mail'] = $a_mail;
                            $_SESSION['e-a-event-sdate'] = $event_sdate;
                            $_SESSION['e-a-event-stime'] = $event_stime;
                            $_SESSION['e-a-event-edate'] = $event_edate;
                            $_SESSION['e-a-event-etime'] = $event_etime;
                            $_SESSION['e-a-event-venue'] = $event_venue;
                            $_SESSION['e-a-organizer'] = $organizer;
                            $_SESSION['e-a-event-desc'] = $event_desc;





        ?><script>
                                alert("Event Created. Check your mail for the Event Details");
                                window.location.href = "Mail/send-a-mail.php";
                            </script><?php

                                    } else {
                                        ?>
                            <script>
                                alert("Error in creating event ");
                                window.location.href = "signup-login.php";
                            </script>
                        <?php
                                    }
                                } else {
                        ?>
                        <script>
                            alert("Invalid File Format");
                            window.location.href = "logout.php";
                        </script>
                    <?php
                                }
                            } else {
                    ?>
                    <script>
                        alert("Password Not matched");
                        window.location.href = "signup-login.php";
                    </script>
                <?php
                            }
                        } else {
                ?>
                <script>
                    alert("Submitted minimum one empty form data");
                    window.location.href = "signup-login.php";
                </script>
            <?php
                        }
                    } else {
            ?>
            <!-- <script>alert("Error in Form Submission");
                 window.location.href = "signup-login.php"; -->

            </script>
        <?php
                    }


        ?>
    </div>


    <!-- scripts  -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // toggleResetPswd script 
        // function toggleResetPswd(e) {
        //     e.preventDefault();
        //     $("#logreg-forms .form-signin").toggle(); // display:block or none
        //     $("#logreg-forms .form-reset").toggle(); // display:block or none
        // }

        // toggleSignUp script 
        function toggleSignUp(e) {
            e.preventDefault();
            $("#logreg-forms .form-signin").toggle(); // display:block or none
            $("#logreg-forms .form-signup").toggle(); // display:block or none
        }

        $(() => {
            // Login Register Form
            // $("#logreg-forms #forgot_pswd").click(toggleResetPswd);
            // $("#logreg-forms #cancel_reset").click(toggleResetPswd);
            $("#logreg-forms #btn-signup").click(toggleSignUp);
            $("#logreg-forms #cancel_signup").click(toggleSignUp);
        });
    </script>





</body>

</html>