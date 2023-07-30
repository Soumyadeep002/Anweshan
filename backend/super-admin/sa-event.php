<?php
include "../database/db_conn.php";
session_start();

if (isset($_GET['event_id'])) {
    $event_id = $_GET['event_id'];


?>
    <!DOCTYPE html>
    <html lang="en">

    <!-- Head part of the page  -->

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>EB SA EVENT DETAILS</title>

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
                        <!-- ----------- -->
                        <a href="../signup-login/super-admin-logout.php" class="nav-item nav-link active"><strong>Logout</strong></a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container">

            <div style="padding-bottom: 20px;" id="admin-heading">
                <h3>Super Admin Dashboard</h3>
            </div>

            <?php
            //  $sql = "SELECT *
            //  FROM events
            //  WHERE approval=2";

            $sql = "SELECT event_admin.a_name, events.event_name,events.organizer ,GROUP_CONCAT(event_admin.a_name, ' (', event_admin.a_email, ')' SEPARATOR '<br>') AS admin_info FROM `events` INNER JOIN event_admin ON events.event_id = event_admin.event_id WHERE events.event_id='{$event_id}' GROUP BY events.event_id";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {











            ?>

                    <div id="sadmin-containt">
                        <h4>EVENT NAME : <span><?php echo $row['event_name']; ?></span></h4>
                        <h4>EVENT ID : <span><?php echo $event_id; ?></span></h4>
                        <h4>ORGANISER : <span><?php echo $row['organizer']; ?></span></h4>
                        <h4>ADMINS : </h4>
                        <ol>

                            <?php

                            $admin_info = explode('<br>', $row['admin_info']);

                            foreach ($admin_info as $info) {
                                echo '<li>' . $info . '</li>';
                                // echo "<br>";
                            }
                            ?>
                        </ol>

                <?php
                }
            } else {
            }
                ?>
                <a class="btn btn-success" href="approval.php?c=1&event_id=<?php echo $event_id; ?>"><i class='bx bxs-like'></i></a>
                <a class="btn btn-danger" href="approval.php?c=2&event_id=<?php echo $event_id; ?>"><i class='bx bxs-dislike'></i></a>

                    </div>

        </div>

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

<?php
} else {
    header("location:./sa-login.php");
}

?>