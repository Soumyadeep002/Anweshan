<?php
include "../database/db_conn.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link rel="icon"  href="../../assets/icon1.png" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- external css links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />

    <!-- external css -->
    <link rel="stylesheet" href="css/signup-login.css">

    <!-- internal css  -->
    <style>

    </style>

    <!-- title of the page  -->
    <title>EB - Login</title>

</head>

<body>

    <!-- navbar  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
        <a href="../index.php" class="navbar-brand"><img style="height:40px;" src="../../assets/logo.png" alt=""></a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="../index.php" class="nav-item nav-link active">Home</a>
                    <a href="../index.php#events-section" class="nav-item active nav-link">Events</a>
                </div>
                <div class="navbar-nav ms-auto">
                    <a href="../super-admin/super-admin.php" class="nav-item active nav-link"><strong>Super
                            Admin</strong></a>
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
            <button class="btn btn-success btn-block" type="submit" name="submit">
                <i class="fas fa-sign-in-alt"></i> Sign in
            </button>
            <a href="../reset-password/reset-password.php" id="forgot_pswd">Forgot password?</a>
            <hr />
            <a href="signup.php" id="forgot_pswd">Create Event</a>
            <a href="../index.php"><i class="fas fa-angle-left"></i> Cancel</a>
        </form>

        <?php
        if (isset($_POST['event_id']) && isset($_POST['a_email']) && isset($_POST['a_password'])) {
            // if (isset($_POST['submit'])) {
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
            $a_email = validate($_POST['a_email']);

            if (empty($event_id)) {

                exit();
            } elseif (empty($a_email)) {
                exit();
            } elseif (empty($a_password)) {
                exit();
            } else {

                //Executing query to get details of relevant admin
                $sql = "SELECT `a_name`, `a_email`, `a_password`, `event_id` FROM `event_admin` WHERE a_email='{$a_email}' AND event_id='{$event_id}'";

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

                            //Executing query to get details of relevant admin
                            $sql1 = "SELECT * FROM events WHERE event_id='{$event_id}'";

                            echo $event_id;

                            $result1 = $conn->query($sql1);

                            //Checking whether the number of result row is greater than  1 or not 
                            if ($result1->num_rows > 0) {
                                // output data of each row
                                $row1 = $result1->fetch_assoc();

                                // Storing data using session for using in admin.php page
                                $_SESSION['event_id'] = $row['event_id'];
                                $_SESSION['a_email'] = $row['a_email'];

                                // echo $row['a_email'];
                                // echo $row['event_id'];
                                // $_SESSION['a_password'] = $row['a_password'];
                                // $_SESSION['a_name'] = $row['a_name'];

                                // $_SESSION['event_name'] = $row1['event_name'];
                                $_SESSION['event_name'] = $row1['event_name'];

                                // echo $row1['event_name'];
                                // echo $_SESSION['event_name'];

                                // $_SESSION["event_s_date"] = $row1["event_s_date"];
                                // $_SESSION["event_s_time"] = $row1["event_s_time"];
                                // $_SESSION["event_e_time"] = $row1["event_e_time"];
                                // $_SESSION["event_e_date"] = $row1["event_e_date"];
                                // $_SESSION["event_venue"] = $row1["event_venue"];
                                $_SESSION["organizer"] = $row1["organizer"];

                                // $_SESSION["event_desc"] = $row1["event_desc"];
                                // $_SESSION["event_broc"] = $row1["event_broc"];
                                // $_SESSION["c_image1"] = $row1["c_image1"];
                                // $_SESSION["c_image2"] = $row1["c_image2"];
                                // $_SESSION["c_image3"] = $row1["c_image3"];
                                // $_SESSION["e_slot"] = $row1["e_slot"];

                                //Redirecting to admin dashboard

                                header('Location: ../admin/admin.php');

                                // open
                                exit();
                            }
                        } else {
        ?><script>
                                alert("Wrong Password ");
                                window.location.href = "login.php";
                            </script><?php
                                    }
                                } else {
                                        ?><script>
                            alert("Invalid Login Credential");
                            window.location.href = "login.php";
                        </script><?php
                                }
                            } else {
                                    ?><script>
                        alert("Invalid Login Credential");
                        window.location.href = "login.php";
                    </script><?php
                            }
                        }
                    } else {
                                ?><script>
                // alert("asdf");
                // window.location.href = "login.php";
            </script><?php
                    }

                        ?>

    </div>


    <!-- scripts  -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>