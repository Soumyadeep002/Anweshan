<?php
include "../database/db_conn.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Head part of the page  -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EB SUPER ADMIN</title>

    <!-- ----------- -->
    <link rel="icon"  href="../../assets/icon1.png" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- ----------- -->
    <link rel="stylesheet" href="css/super-admin.css">

</head>

<!-- Body part of page -->

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
                    <!-- ----------  -->
                    <a href="../index.php" class="nav-item nav-link active">Home</a>
                </div>
                <div class="navbar-nav ms-auto">
                <a href="../signup-login/login.php" class="nav-item active nav-link"><strong>Admin</strong></a>
                    <a href="../signup-login/super-admin-logout.php" class="nav-item nav-link active"><strong>Logout</strong></a>
                </div>
            </div>
        </div>
    </nav>

    <?php

    if (isset($_SESSION['sa_email']) && isset($_SESSION['sa_password'])) {

    ?>

        <div style="padding-bottom: 50px;" class="container">

            <div style="padding-bottom: 20px;" id="admin-heading">
                <h3>Super Admin Dashboard</h3>
            </div>

            <div id="home-buttons " class= 'd-flex align-items-center justify-content-center py-5'>
                <a href="../signup-login/signup.php" type="button" class="btn btn-primary btn-lg">Create New Event</a>
            </div>




            <!-- request-list -->
            <div style="padding-bottom: 20px;" id="participant-list" class="participant-list">
                <div class="participant-list-title">
                    <h4>Requested Event List</h4>
                </div>


                <?php

                $sql = "SELECT *
            FROM events
            WHERE approval=0";
                $result = $conn->query($sql);


                //Checking Wether
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        // $_SESSION['event_id'] = $row['event_id'];

                ?>



                        <table class='table table-dark'>
                            <thead>
                                <tr>
                                    <th>Event ID</th>
                                    <th>Event Name</th>
                                    <th>Details</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td><?php echo $row['event_id']; ?></td>
                                    <td><?php echo $row['event_name']; ?></td>
                                    <td>
                                        <a target="_blank" href="./sa-event.php?event_id=<?php echo $row['event_id']; ?>">View</a>
                                    </td>
                                    <td>
                                        <?php
                                        $event_id = $row['event_id'];
                                        ?>
                                        <a class="btn btn-success" href="approval.php?c=1&event_id=<?php echo $row['event_id']; ?>"><i class='bx bxs-like'></i></a>
                                        <a class="btn btn-danger" href="approval.php?c=2&event_id=<?php echo $row['event_id']; ?>"><i class='bx bxs-dislike'></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>


                <?php
                    }
                } else {

                    echo  "<div style=\" padding: 10px; display:flex; margin: auto; align-items: center; border-radius: 10px; font-size: medium; font-weight: lighter;\" id=\"pre\" class=\"w-25 container info text-center bg-info\"> <p class=\"text-danger\" style=\"margin: auto;\" >No request found</p></div>";
                }

                ?>

            </div>
            <!-- Approved-list -->
            <div style="padding-bottom: 20px;" id="participant-list" class="participant-list">
                <div class="participant-list-title">
                    <h4>Approved Event List</h4>
                </div>

                <?php
                $sql = "SELECT *
                     FROM events
            WHERE approval=1";
                $result = $conn->query($sql);
                //Checking Wether
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                ?>



                        <table class='table table-dark'>
                            <thead>
                                <tr>
                                    <th>Event ID</th>
                                    <th>Event Name</th>
                                    <th>Details</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td><?php echo $row['event_id']; ?></td>
                                    <td><?php echo $row['event_name']; ?></td>
                                    <td>
                                        <a target="_blank" href="./sa-event.php?event_id=<?php echo $row['event_id']; ?>">View</a>

                                    </td>

                                    <?php

                                    $event_id = $row['event_id'];
                                    ?>
                                    <td>
                                        <!-- <form method="post"> -->
                                        <a class="btn btn-danger" href="approval.php?c=2&event_id=<?php echo $row['event_id']; ?>"><i class='bx bxs-dislike'></i></a>
                                        <!-- </form> -->



                                    </td>
                                </tr>
                            </tbody>
                        </table>
                <?php

                    }
                } else {
                    echo  "<div style=\" padding: 10px; display:flex; margin: auto; align-items: center; border-radius: 10px; font-size: medium; font-weight: lighter;\" id=\"pre\" class=\"w-25 container info text-center bg-info\"> <p class=\"text-danger\" style=\"margin: auto;\" >No Approved Events</p></div>";
                }

                ?>
            </div>

            <!-- Not Approved-list -->
            <div style="padding-bottom: 20px;" id="participant-list" class="participant-list">
                <div class="participant-list-title">
                    <h4>Not Approved Event List</h4>
                </div>


                <?php

                $sql = "SELECT *
                FROM events
                WHERE approval=2";
                $result = $conn->query($sql);


                //Checking Wether
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        // $_SESSION['event_id'] = $row['event_id'];

                ?>

                        <table class='table table-dark'>
                            <thead>
                                <tr>
                                    <th>Event ID</th>
                                    <th>Event Name</th>
                                    <th>Details</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td><?php echo $row['event_id']; ?></td>
                                    <td><?php echo $row['event_name']; ?></td>
                                    <td>
                                        <a target="_blank" href="./sa-event.php?event_id=<?php echo $row['event_id']; ?>">View</a>

                                    </td>
                                    <td>
                                        <a class="btn btn-success" href="approval.php?c=1&event_id=<?php echo $row['event_id']; ?>"><i class='bx bxs-like'></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                <?php

                    }
                } else {

                    echo  "<div style=\" padding: 10px; display:flex; margin: auto; align-items: center; border-radius: 10px; font-size: medium; font-weight: lighter;\" id=\"pre\" class=\"w-25 container info text-center bg-info\"> <p class=\"text-danger\" style=\"margin: auto;\" >All Events are Approved</p></div>";
                }

                ?>
            </div>

        </div>



    <?php
    } else {
        header("location:./sa-login.php");
    }
    ?>

    <!-- scripts  -->

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function disableButton() {
            var submitButton = document.querySelector('button[type="submit"]');
            submitButton.disabled = true;
        }
    </script>

</body>


</html>