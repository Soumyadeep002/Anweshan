<?php
include "../database/db_conn.php";
session_start();
?>
<!-- forntend Done  -->

<!DOCTYPE html>
<html lang="en">

<!-- Head part of the page  -->

<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Participant List - Admin - Event Buddy</title>

    <link rel="icon" type="image/x-icon" href="../assets/logo/eb-transperent-logo.png" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="./css/admin.css">

</head>

<!-- Body part of page -->

<body>

    <!-- navbar  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a href="../index.php" class="navbar-brand">
                <img style="height:40px; width: 40px;" src="../assets/logo/eb-white-bg-logo.png" alt="">
                Event Buddy
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="../index.php" class="nav-item nav-link active">Home</a>
                </div>
                <div class="navbar-nav ms-auto">
                    <a href="../signup-login/logout.php" class="nav-item nav-link active"><strong>Logout</strong></a>
                </div>
            </div>
        </div>
    </nav>

    <?php
    if (isset($_SESSION['event_id']) && isset($_SESSION['a_email'])) 
    {
        $event_id = $_SESSION['event_id'];
        $a_email = $_SESSION['a_email'];
        //Executing query to get details of relevant admin
        ?>


    <!-- Main Section -->
    <div class="container">

        <div style="padding-bottom: 20px;" id="admin-heading">
            <h3>Admin Dashboard - Participant List</h3>
        </div>

        <div class="search-container">
            <input type="text" id="myFilter" name="search" class="form-control table-filter" onkeyup="myFunction()"
                data-table="order-table" placeholder="Search name...">
        </div>

        <!-- participant-list -->
        <div id="participant-list" class="participant-list">

            <?php
                $sql = "SELECT * FROM participant WHERE event_id='{$event_id}'";
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
                                     <th>Action</th>
                                 </tr>
                             </thead>

                             <tbody>
                         
                     ";
                    while ($row = $result->fetch_assoc()) {

                        // echo "<tr><td>" . "$row_count" . "</td><td>" . $row["p_name"] . "</td><td>" . $row["p_email"] . "</td><td>" . $row["mobile"] . "</td></tr>";

                        echo "<tr><td>" . "$row_count" . "</td><td>" . $row["p_name"] . "</td><td>" . $row["p_email"] . "</td><td>" . $row["mobile"] . "</td>";

                        $row_count++;
                ?>
            <td> <a class="btn btn-danger"
                    href="../delete/delete-participant.php?event_id=<?php echo $row['event_id'] ?>&p_email=<?php echo $row['p_email'] ?>">Delete</a>
            </td>

            </tr>
            <?php
                    }
                } else {

                    //! need to be changed 

                    echo  "<div style=\" padding: 10px; display:flex; margin: auto; align-items: center; border-radius: 10px; font-size: medium; font-weight: lighter;\" id=\"pre\" class=\"w-25 container info text-center bg-info\"> <p class=\"text-danger\" style=\"margin: auto;\" >No Registered Participants</p></div>";
                }

                ?>


            </tbody>
            </table>





            <!-- Button to download data as excel file -->
            <form style="display: inline-block;" method="post" action="../export/export-participant.php">
                <input class="btn btn-success" type="submit" name="export" value="Download">
            </form>

            <!-- <div style="display: inline-block;" >
                    <a href="mailto: rdtech2002@gmail.com,lghosh57@gmail.com" style="color: white;" class="btn btn-success">Send Mail</a>
                </div> -->

            <br>



            <?php

                ?>

            <br>

            <a href="admin.php" id="back-2"><i class="fas fa-angle-left"></i> Back</a>
        </div>

    </div>

    <!-- scripts  -->

    <!-- search option  -->
    <script>
        // search box js function start   
        (function () {
            'use strict';

            var TableFilter = (function () {
                var Arr = Array.prototype;
                var input;

                function onInputEvent(e) {
                    input = e.target;
                    var table1 = document.getElementsByClassName(input.getAttribute('data-table'));
                    Arr.forEach.call(table1, function (table) {
                        Arr.forEach.call(table.tBodies, function (tbody) {
                            Arr.forEach.call(tbody.rows, filter);
                        });
                    });
                }

                function filter(row) {
                    var text = row.textContent.toLowerCase();
                    //console.log(text);
                    var val = input.value.toLowerCase();
                    //console.log(val);
                    row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
                }

                return {
                    init: function () {
                        var inputs = document.getElementsByClassName('table-filter');
                        Arr.forEach.call(inputs, function (input) {
                            input.oninput = onInputEvent;
                        });
                    }
                };

            })();

            /*console.log(document.readyState);
              document.addEventListener('readystatechange', function() {
                  if (document.readyState === 'complete') {
                console.log(document.readyState);
                      TableFilter.init();
                  }
              }); */

            TableFilter.init();
        })();
            // search box js function end
    </script>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>

<?php
    } else {
        header("location:../signup-login/login.php");
    }
?>