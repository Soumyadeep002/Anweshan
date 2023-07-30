<!DOCTYPE html>
<html lang="en">
<?php
include "../database/db_conn.php";

session_start();
?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon"  href="../../assets/icon1.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- external css links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
    <!-- external css -->
    <link rel="stylesheet" href="css/signup-login.css">
    <!-- internal css  -->
    <style>
    </style>
    <!-- title of the page  -->
    <title>EB - SIGNUP</title>
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
                    <a href="../super-admin/sa-login.php" class="nav-item active nav-link"><strong>Super
                            Admin</strong></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- all forms  -->
    <div id="logreg-forms">
        <!-- signup form  -->
        <form action="#" method="post" class="form-signup" enctype="multipart/form-data">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">
                Create New Event
            </h1>
            <input type="text" id="event-name" name="event_name" class="form-control" required=""
                placeholder="Event Name" autofocus="" />

            <div class="btn-group px-2" role="group"  aria-label="Basic radio toggle button group">
                <h4>Event type</h4>
                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off"  value="tech">
                <label class="btn btn-outline-primary" for="btnradio1">Tech</label>

                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off" value="cultural">
                <label class="btn btn-outline-primary" for="btnradio2">Cultural</label>

                
            </div>



            <input type="text" id="max_participant" name="max_participant" class="form-control" required=""
                placeholder="Maximum number of participant in a Team" />
            <input type="text" id="event-organizer" name="organizer" class="form-control" required=""
                placeholder="Event Organizer" />
            <input type="text" id="event-admin-name" class="form-control" name="a_name" required=""
                placeholder="Event Admin Name" />
            <input type="email" id="event-admin-email" class="form-control" name="a_email" required=""
                placeholder="Event Admin Email address" />
            <input type="password" id="user-pass" class="form-control" placeholder="Password" name="a_password"
                required="" />
            <input type="password" id="user-repeatpass" class="form-control" name="a_retype-password" required=""
                placeholder="Repeat Password" />
            <button class="btn btn-primary btn-block" type="submit" name="submit">
                <i class="fas fa-user-plus"></i> Create Event
            </button>
            <a href="../signup-login/login.php"><i class="fas fa-angle-left"></i> Back</a>
        </form>
        <?php
        if (isset($_POST['event_name']) && isset($_POST['btnradio']) && isset($_POST['max_participant']) && isset($_POST['organizer']) && isset($_POST['a_name'])  && isset($_POST['a_email'])  && isset($_POST['a_retype-password'])  && isset($_POST['a_password'])) {




            //function to trim and strip data
            function test_input($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            if ($_POST['a_password'] == $_POST['a_retype-password']) {
                // creating event_id
                $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $event_id = substr(str_shuffle($data), 0, 6);
                $event_name = test_input($_POST['event_name']);
                $event_type = test_input($_POST['btnradio']);
                $max_participant = test_input($_POST['max_participant']);
                $organizer = test_input($_POST['organizer']);
                $a_name = test_input($_POST['a_name']);
                $a_email = test_input($_POST['a_email']);
                $a_password = test_input($_POST['a_password']);
                //Hashing Password
                $h_password = password_hash($a_password, PASSWORD_DEFAULT);
                $stmt1 = $conn->prepare("INSERT INTO events (event_id, event_name, organizer, event_type, max_participant)
                VALUES (?, ?, ?, ?, ?);");
                $stmt2 = $conn->prepare(" INSERT INTO event_admin (a_name, event_id, a_email, a_password)
                VALUES (?, ?, ?, ?);");
                $stmt1->bind_param("sssss", $event_id, $event_name, $organizer, $event_type, $max_participant);
                $stmt2->bind_param("ssss", $a_name, $event_id, $a_email, $h_password);
                $stmt1->execute();
                $stmt2->execute();
                $stmt1->close();
                $stmt2->close();
                if ($stmt1 && $stmt2) {

                    $_SESSION['e-a-name'] = $a_name;
                    $_SESSION['e-a-event-name'] = $event_name;
                    $_SESSION['e-a-event-id'] = $event_id;
                    $_SESSION['e-a-email'] = $a_email;
                  
                  
                    $_SESSION['e-a-max_participant'] = $max_participant;
                    $_SESSION['e-a-event_type'] = $event_type;
                    $_SESSION['e-a-organizer'] = $organizer;
                   



        ?>
        <script>
            alert("Event Created. Check your mail for the Event Details");
            window.location.href = "../Mail/send-a-mail.php";
        </script>
        <?php
                } else {
                ?>
        <script>
            alert("Error in creating event ");
            window.location.href = "signup.php";
        </script>
        <?php
                }
            } else {
                ?>
        <script>
            alert("Password Not matched");
            window.location.href = "signup.php";
        </script>
        <?php
            }
        }
        ?>
    </div>