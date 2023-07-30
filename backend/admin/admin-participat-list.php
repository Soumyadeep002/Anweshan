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

    <link rel="icon"  href="../../assets/icon1.png" />
    <title>ANWESHAN - ADMIN</title>

   

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="./css/admin.css">
    <!-- <link rel="stylesheet" href="./css/demo.css"> -->
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

    

    <style>
        .cd-table-container {
            background: #fff;
            box-shadow: 1px 2px 26px rgba(0, 0, 0, 0.2);
            padding: 15px;
            max-width: 720px;
        }

        /* Table Design */
        .cd-table {
            width: 100%;
            color: #666;
            margin: 10px auto;
            border-collapse: collapse;
        }

        .cd-table tr,
        .cd-table td {
            border: 1px solid #ccc;
            padding: 10px;
        }

        .cd-table th {
            background: #017721;
            color: #fff;
            padding: 10px;
        }

        /* Search Box */
        .cd-search {
            padding: 10px;
            border: 1px solid #ccc;
            width: 100%;
            box-sizing: border-box;
        }

        /* Search Title */
        .cd-title {
            color: #666;
            margin: 15px 0;
        }




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
                    <a href="admin-participat-list.php" class="nav-link active link-body-emphasis">
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

        <div style="padding-bottom: 20px;" id="admin-heading">
            <h3><?php echo $event_name; ?> - Participant List</h3>
        </div>

        <!-- <div class="search-container">
            <input type="text" id="myFilter" name="search" class="form-control table-filter" onkeyup="myFunction()"
                data-table="order-table" placeholder="Search name...">
        </div> -->
        <h2 class="cd-title">Search Table Record:</h2>
        <input type="text" class="cd-search table-filter" data-table="order-table" placeholder="Item to filter.." />

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
                         <table class='cd-table order-table table'>
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

            
        </div>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>



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