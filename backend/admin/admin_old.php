<?php
// define('my-site',true);

// if(!defined('my-site')){

//     Header("location:access-denied.html");
//     }
?>
<?php

//Starting session
session_start();

//Connecting to database
include "db_conn.php";
?>

<?php
//Checking wether session is set or not
// if (isset($_SESSION['event_id']) &&  isset($_SESSION['a_email'])) {
    // redirect them to your desired location


    ?>


    
    <!DOCTYPE html>
    <html lang="en">

    <!-- Head part of the page  -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ANWESHAN - ADMIN</title>

        <link rel="icon" type="image/x-icon" href="assets/logo/eb-transperent-logo.png" />

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

        <link rel="stylesheet" href="css/admin.css">

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
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    </div>
                    <div class="navbar-nav ms-auto">          
                        <a href="logout.php" class="nav-item nav-link active"><strong>Logout</strong></a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container">

        <div id="admin-heading">
            <h3>Admin Dashboard</h3>
        </div>

            <!-- home-heading  -->
            <div id="event-details" class="p-5 home-heading">
                <div class="home-heading-content">
                    <div class="container-lg my-3">
                        <h1><?php echo $_SESSION['event_name'];?></h1>
                        <p class="lead"> <?php echo $_SESSION['e_organizer'];?>
                        </p>
                        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">

                            <!-- Carousel indicators -->
                            <ol class="carousel-indicators">
                                <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                                <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                                <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for carousel items -->
                            <div class="carousel-inner">
                                <?php

                                    //Storing the event id in a variable
                                    $event_id =  $_SESSION['event_id'];

                                    //Query to Fetching data from db with event id as condition
                                    $sql = "SELECT * FROM events WHERE event_id ='$event_id'";

                                    //Executing the query and storing the result in a variable 
                                    $result = $conn->query($sql);

                                    //Checking whether the number of row in result is greater than 0 or not (nums_row =0 means data not found & nums_row >0 means non-zero result found )
                                    if ($result->num_rows > 0) 
                                    {   

                                        //Storing the data in row
                                        while ($row = $result->fetch_assoc()) 
                                        {
                                ?>

                                            <!-- displaying the images  -->
                                            <div class="carousel-item active">
                                                <img src="image/<?php echo $row['c_image1'] ?>" class="d-block w-100" alt="Slide 1">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="image/<?php echo $row['c_image2'] ?>" class="d-block w-100" alt="Slide 2">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="image/<?php echo $row['c_image3'] ?>" class="d-block w-100" alt="Slide 3">
                                            </div>
                            </div>


                                            <!-- Carousel controls -->
                                            <a class="carousel-control-prev" href="#myCarousel" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon"></span>
                                            </a>
                                            <a class="carousel-control-next" href="#myCarousel" data-bs-slide="next">
                                                <span class="carousel-control-next-icon"></span>
                                            </a>
                        </div>
                    </div>
                    <?php
                                        }

                                    } else {
                                       
                                        ?>      
                                        <script>
                                            alert("Event Not Found");
                                            window.location.href = "logout.php";
                                        </script>
                        <?php
                                        }
                    ?>

                    
                    <!-- Displaying other details -->
                    <p class="card-date-time"> 
                        <b>Start Date & time :</b> 
                        [<?php echo $_SESSION['event_s_date']; ?>]
                        [<?php echo $_SESSION['event_s_time']; ?>] 
                    </p>


                    <p class="card-date-time">
                        <b>End Date & time :</b> 
                        [<?php echo $_SESSION['event_e_date']; ?>]
                        [<?php echo $_SESSION['event_e_time']; ?>] 
                    </p>


                    <p class="card-Venue">
                        <b>Venue :</b> 
                        <?php echo $_SESSION['event_venue']; ?>
                    </p>


                    <p class="card-event-description-title">
                        <b>Event Description :</b>
                    </p>

                
                    <p class="card-event-description">
                        <?php echo $_SESSION['event_desc']; ?>
                    </p>

                    <p class="card-Venue">
                        <b>Approval status :</b> 
                        Approved / Pending
                    </p>

                    <a target="_blank" href="pdf/<?php echo $_SESSION['event_broc']; ?>" type="button" class="btn btn-primary brochure-btn">Event Brochure</a>


                    <div id="admin-controls">
                        <h2> Admin Controls</h2>
                    </div>
                    
                    <!-- buttons -->
                    <div id="admin-buttons">
                        
                        <a id="edit-event" type="button" class="btn btn-primary">Update Event Details</a>
                        <a id="edit-event-files" type="button" class="btn btn-primary">Update Event Files</a>
                        <a id="p-list-btn" type="button" class="btn btn-primary">Participant List</a>
                        <a id="l-p-list-btn" type="button" class="btn btn-primary">Attendance List</a>

                        <a id="new-admin-btn" type="button" class="btn btn-warning">Create New Admin</a>

                        <a target="_blank" href="QR/Authentication/" type="button" class="btn btn-success">Take Attendance</a>
                        <a onclick="javascript:return confirm('Are You Want to Delete This Event Permanently');" href="delete-event.php?event_id=<?php echo $event_id ?>" id="delete-event" type="button" class="btn btn-danger">Delete Event</a>
                    </div>
                </div>
            </div>

            <!-- form to update event details -->
            <div id="logreg-forms">
                <form action="admin.php" method="post" class="form-signup" enctype="multipart/form-data">

                    <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">
                        Edit Event Details
                    </h1>

                    <input type="text" id="event-name" name="event_name" class="form-control" required="" value="<?php echo $_SESSION['event_name']; ?>" />




                    <input type="text" id="event-organizer" name="organizer" class="form-control" required="" placeholder="Event Organizer" value="<?php echo $_SESSION["e_organizer"]; ?>" autofocus="" />

                    <label for="event-start-date">Event Start Date :</label>
                    <input type="date" id="event-start-date" name="event_sdate" class="form-control" required="" value="<?php echo $_SESSION["event_s_date"]; ?>" autofocus="" />

                    <label for="event-start-time">Event Start Time :</label>
                    <input type="time" id="event-start-time" name="event_stime" class="form-control" required="" value="<?php echo $_SESSION["event_s_time"]; ?>" autofocus="" />

                    <label for="event-end-date">Event End Date :</label>
                    <input type="date" id="event-end-date" name="event_edate" class="form-control" required="" value="<?php echo $_SESSION["event_e_date"]; ?>" autofocus="" />

                    <label for="event-end-time">Event End Time :</label>
                    <input type="time" id="event-end-duration" name="event_etime" class="form-control" required="" value="<?php echo $_SESSION["event_e_time"]; ?>" autofocus="" />

                    <label for="event-description">Event Description :</label>
                    <textarea class="form-control" id="event-description" required="" name="event_desc" value="" rows="3"><?php echo $_SESSION["event_desc"]; ?></textarea>

                    <input type="text" id="event-venue" class="form-control" name="event_venue" required="" placeholder="Event Venue" value="<?php echo $_SESSION["event_venue"]; ?>" autofocus="" />

                    <input type="text" id="event-admin-name" class="form-control" name="a_name" required="" placeholder="Event Admin Name" value="<?php echo $_SESSION["a_name"]; ?>" autofocus="" />

                    <input type="email" id="event-admin-email" class="form-control" name="a_mail" required="" placeholder="Event Admin Email address" value="<?php echo $_SESSION["a_email"]; ?>" autofocus="" />

                    <input type="password" id="user-pass" class="form-control" placeholder="Password" required="" autofocus="" />

                    <input type="password" id="user-repeatpass" class="form-control" name="a_password" required="" placeholder="Repeat Password" autofocus="" />


                        


                    <button class="btn btn-primary btn-block btn-danger" type="reset">
                        <i class="fas fa-eraser"></i> Reset
                    </button>

                    <button class="btn btn-primary btn-block" type="submit" name="submit">
                        <i class="fas fa-user"></i> Update Details
                    </button>

                    <a href="admin.php" id="cancel_signup"><i class="fas fa-angle-left"></i> Back</a>



                </form>

                 <!-- php code to update event details -->
                <?php

                //function to trim and strip data
                    function test_input($data)
                    {
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                    }

                    if (isset($_POST['submit'])) 
                    {


                        //Checking for non empty data
                        if (!empty($_POST['event_name']) && !empty($_POST['e_organizer']) && !empty($_POST['event_s_date']) && !empty($_POST['event_s_time']) && !empty($_POST['event_e_date']) && !empty($_POST['event_e_time']) && !empty($_POST['event_desc']) && !empty($_POST['event_venue']) && !empty($_POST['a_name']) && !empty($_POST['a_email']) && !empty($_POST['a_password'])) 
                        {
                            //calling test_input function and storing into a variable 
                            $event_name = test_input($_POST['event_name']);
                            $organizer = test_input($_POST['organizer']);
                            $event_sdate = test_input($_POST['event_s_date']);
                            $event_stime = test_input($_POST['event_s_time']);
                            $event_edate = test_input($_POST['event_e_date']);
                            $event_etime = test_input($_POST['event_e_time']);
                            $event_desc = test_input($_POST['event_desc']);
                            $event_venue = test_input($_POST['event_venue']);
                            $a_name = test_input($_POST['a_name']);
                            $a_mail = test_input($_POST['a_email']);
                            $a_password = test_input($_POST['a_password']);
                            // $event_broc = $_POST['event_broc'];


                            // Hashing
                            $h_password = password_hash($a_password,PASSWORD_DEFAULT);

                            //preparing and executing statement
                            $stmt = $conn->prepare("UPDATE event_admins SET  a_mail=?, a_name=?, a_password=?, event_name=?, event_sdate=?, event_stime=?, event_edate=?, event_etime=?, event_venue=?, organizer=?, event_desc=? WHERE event_id=?");
                            $stmt->bind_param("ssssssssssss", $a_mail, $a_name, $h_password, $event_name, $event_sdate, $event_stime, $event_edate, $event_etime, $event_venue, $organizer, $event_desc, $event_id);
                            $stmt->execute();
                            $stmt->close();

                            //Checking whether statement is successfully executed or not 
                            if ($stmt) 
                            {
                                ?>      
                                <script>
                                    alert("Event Details Updated Successfully. Logged Out due to change in login credential.");
                                    window.location.href = "logout.php";
                                </script>
                                <?php
                            }else{
                                ?>
                                <script>
                                    alert("Error in Updating Event Details");
                                    window.location.href = "admin.php";
                                </script>
                                <?php


                            }

                        } else 
                        {
                                ?>
                            <script>
                                alert("Submitted minimum one empty form data");
                                window.location.href = "admin.php";
                            </script>
                                    <?php
                        }
                    }else 
                    {
                            ?>
                        <script>
                            // alert("Error in form submission");
                            // window.location.href = "admin.php";
                        </script>
                                <?php
                    }

                ?>









            
                <!-- form to update event files -->
                <form class="form-signup-2" method="post" action="admin.php" enctype="multipart/form-data">
                    <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">
                        Edit Event Files
                    </h1>
                    <label for="event-brochure">Event Brochure: (pdf file under 40mb)</label>
                    <input type="file" id="event-brochure" required="" name="event_broc" >

                    <label for="Carousel-image">Carousel image: (1, 1460x620 image) (Cover Image)</label>
                    <input type="file" multiple id="corousel-image" required="" name="c_image1" multiple>

                    <label for="Carousel-image">Carousel image: (2, 1460x620 image)</label>
                    <input type="file" multiple id="corousel-image" required="" name="c_image2" multiple>

                    <label for="Carousel-image">Carousel image: (3, 1460x620 image)</label>
                    <input type="file" multiple id="corousel-image" required="" name="c_image3" multiple>

                    <button class="btn btn-primary btn-block btn-danger" type="reset">
                        <i class="fas fa-eraser"></i> Reset
                    </button>

                    <button class="btn btn-primary btn-block" type="submit" name="files">
                        <i class="fas fa-user"></i> Update
                    </button>

                    <a href="admin.php" id="cancel_signup"><i class="fas fa-angle-left"></i> Back</a>
                </form>


                <!-- form to update event files -->
                <form class="form-signup-3" method="post" action="admin.php" enctype="multipart/form-data">
                    <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">
                        Add New Admin
                    </h1>
                    
                    <input type="text" id="event-admin-name" class="form-control" name="a_name" required="" placeholder="Event Admin Name" value="" autofocus="" />

                    <input type="email" id="event-admin-email" class="form-control" name="a_mail" required="" placeholder="Event Admin Email address" value="" autofocus="" />

                    <input type="password" id="user-pass" class="form-control" placeholder="Password" required="" autofocus="" />

                    <input type="password" id="user-repeatpass" class="form-control" name="a_password" required="" placeholder="Repeat Password" autofocus="" />

                    <button class="btn btn-primary btn-block btn-danger" type="reset">
                        <i class="fas fa-eraser"></i> Reset
                    </button>

                    <button class="btn btn-primary btn-block" type="submit" name="files">
                        <i class="fas fa-user"></i> Create
                    </button>

                    <a href="admin.php" id="cancel_signup"><i class="fas fa-angle-left"></i> Back</a>
                </form>


                <!-- php to update event files -->
                <?php

                  

                    if (isset($_POST['files']))
                    {

                        // if (!empty($_POST['event_broc']) && !empty($_POST['c_image1']) && !empty($_POST['c_image2']) && !empty($_POST['c_image3']))
                        // {
                            
                            // header("Location:delete-files.php?event_id='$event_id'");

                            //Updating Event Brochure to database 
                            $pdf_format = array('pdf');
                            $pdf=$_FILES['event_broc']['name'];
            
                            $pdf_type = $_FILES['event_broc']['type'];

                            // $pdf_tmp = explode(".", $pdf);
                            // $pdf_extension=end($pdf_tmp);

                            $pdf_extension=pathinfo($pdf, PATHINFO_EXTENSION);
                            $new_pdf=$event_id."_event_broc".".".$pdf_extension;
            
                            $pdf_size=$_FILES['event_broc']['size'];
            
                            $pdf_temp_loc = $_FILES['event_broc']['tmp_name'];
            
                            // $pdf_store="pdf/".$pdf;
                            $pdf_store="pdf/".$new_pdf;
            
                          





                            //Updating carousel to database

                            //carousel image 1
                            $image_formats = array('gif', 'png', 'jpg');
                            $c_img1=$_FILES['c_image1']['name'];
                            $c_img1_type = $_FILES['c_image1']['type'];

                            // $c_img1_tmp = explode(".", $c_img1);
                            // $c_img1_extension=end($c_img1_tmp);

                            $c_img1_extension=pathinfo($c_img1, PATHINFO_EXTENSION);
                            $defined_extension ="png";
                            $new_c_img1=$event_id."_c_img1".".".$defined_extension;
                            $c_img1_size=$_FILES['c_image1']['size'];
                            $c_img1_temp_loc = $_FILES['c_image1']['tmp_name'];
                            $c_img1_store="image/".$new_c_img1;
                           



                          
                            //carousel image 2
                            $image_formats = array('gif', 'png', 'jpg');
                            $c_img2=$_FILES['c_image2']['name'];
                            $c_img2_type = $_FILES['c_image2']['type'];

                            // $c_img2_tmp = explode(".", $c_img2);
                            // $c_img2_extension=end($c_img2_tmp);

                            $c_img2_extension=pathinfo($c_img2, PATHINFO_EXTENSION);

                            $defined_extension ="png";
                            $new_c_img2=$event_id."_c_img2".".".$defined_extension;
                            $c_img2_size=$_FILES['c_image2']['size'];
                            $c_img2_temp_loc = $_FILES['c_image2']['tmp_name'];
                            $c_img2_store="image/".$new_c_img2;
                            




                            //carousel image 3
                            $image_formats = array('gif', 'png', 'jpg');
                            $c_img3=$_FILES['c_image3']['name'];
                            $c_img3_type = $_FILES['c_image3']['type'];

                            // $c_img3_tmp = explode(".", $c_img3);
                            // $c_img3_extension=end($c_img3_tmp);

                            $c_img3_extension=pathinfo($c_img3, PATHINFO_EXTENSION);

                            $defined_extension ="png";
                            $new_c_img3=$event_id."_c_img3".".".$defined_extension;
                            $c_img3_size=$_FILES['c_image3']['size'];
                            $c_img3_temp_loc = $_FILES['c_image3']['tmp_name'];
                            $c_img3_store="image/".$new_c_img3;
                           


                            
                            
                           

                                // $_SESSION["event_broc"] = $pdf;
                                


                                // $stmt = $conn->prepare("UPDATE admins SET  event_broc=?, c_image1=?, c_image2=?, c_image3=? WHERE event_id=?");
                                // $stmt->bind_param("sssss", $pdf, $c_img1, $c_img2, $c_img3, $event_id);
                                // $stmt->execute();
                                // $stmt->close();


                            

                             

                            if(in_array($c_img1_extension,$image_formats) && in_array($c_img2_extension,$image_formats) && in_array($c_img3_extension,$image_formats) && $pdf_extension=='pdf')
                            {
                                
                                move_uploaded_file($pdf_temp_loc, $pdf_store);

                                move_uploaded_file($c_img1_temp_loc, $c_img1_store);
                                move_uploaded_file($c_img2_temp_loc, $c_img2_store);
                                move_uploaded_file($c_img3_temp_loc, $c_img3_store);







                                //preparing and executing statement
                                $stmt = $conn->prepare("UPDATE admins SET  event_broc=?, c_image1=?, c_image2=?, c_image3=? WHERE event_id=?");
                                $stmt->bind_param("sssss", $new_pdf, $new_c_img1, $new_c_img2, $new_c_img3, $event_id);
                                $stmt->execute();
                                $stmt->close();
                                if ($stmt) 
                                {




                                    ?>             
                                    <script>
                                            alert("Event Files Updated Successfully. Logged Out due to change in login credential.");
                                            window.location.href = "logout.php";
                                    </script>
                                    <?php
                                }else{



                                    ?>
                                    <script>
                                       alert("Error in Updating event Details")
                                   </script>
                                    <?php
       
                                   
                                }
               
                                // header("Refresh: 1;url = admin.php");
                            }else{

                                ?>             
                                <script>
                                        alert("Invalid File Format");
                                        window.location.href = "admin.php";
                                </script>
                                <?php
            
                            }
                       
                        ?>
                            
                        <?php
                        

                    }else{

                        ?>             
                        <script>
                                // alert("Error in form submission");
                                // window.location.href = "admin.php";
                        </script>
                        <?php

                    }

                ?>
            </div>



            <!-- participant-list -->
            <div id="participant-list" class="participant-list">
                <div class="participant-list-title">
                    <h2>Participant List</h2>
                </div>

                <?php


                    // $event_id =  $_SESSION['event_id'];

                    //Executing query to get details of relevant participants
                    $sql = "SELECT * FROM participants WHERE event_id ='$event_id' ";
                    $result = $conn->query($sql);

                    //defining a variable set its value to 1 , this value will be used as serial number of table
                    $row_count = 1;


                  
                    //Checking whether the number of result row is greater than  1 or not 
                    if ($result->num_rows > 0) 
                    {
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

                         // output data of each row
                        while ($row = $result->fetch_assoc()) {

                            // echo "<tr><td>" . "$row_count" . "</td><td>" . $row["p_name"] . "</td><td>" . $row["p_email"] . "</td><td>" . $row["mobile"] . "</td></tr>";

                            echo "<tr><td>" . "$row_count" . "</td><td>" . $row["p_name"] . "</td><td>" . $row["p_email"] . "</td><td>" . $row["mobile"] . "</td>";
                            
                            $row_count++;
                            ?>  
                                <td> <a class="btn btn-danger" href="delete-participant.php?event_id=<?php echo $row['event_id'] ?>&p_email=<?php echo $row['p_email'] ?>">Delete Participant</a></td>
                               
                                </tr>
                            <?php
                        }
                    } else 
                    {
                        echo "<div id=\"pre\" class=\" w-25 container info text-center bg-info\"> <h2 class=\"text-danger \">No Registered Participants</h2></div>";
                       
    
                    }
                ?>
            
                </tbody>
                </table>

                <!-- Button to download data as excel file -->
                <form method="post" action="export/export-participant.php">
                    <input class="btn btn-success" type="submit" name="export" value="Download As Excel File">
                </form>

                <a href="admin.php" id="back-2"><i class="fas fa-angle-left"></i> Back</a>
            </div>


            <!-- live-participant-list -->
            <div id="live-participant-list" class="participant-list">
                <div class="participant-list-title">
                    <h2>Attendance List</h2>
                </div>

                <?php
                 //Executing query to get details of relevant participants
                 $sql = "SELECT * FROM participants WHERE event_id ='$event_id' AND flag=1";
                 $result = $conn->query($sql);

                 //defining a variable set its value to 1 , this value will be used as serial number of table
                 $row_count = 1;

                //  $_SESSION['l-p']=true;

                  //Checking whether the number of result row is greater than  1 or not 
                  if ($result->num_rows > 0) 
                {
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
                    while ($row = $result->fetch_assoc()){
                        echo "<tr><td>" . "$row_count" . "</td><td>" . $row["p_name"] . "</td><td>" . $row["p_email"] . "</td><td>" . $row["mobile"] . "</td></tr>";
                        $row_count++;
                    }

                }else 
                {

                    echo "<div id=\"pre\" class=\" w-25 container info text-center bg-info\"> <h2 class=\"text-danger \">No Live Participant</h2></div>";
                    ?>      

                        
                        <script>
                        // alert("No Live Participants");
                        // window.location.href = "admin.php";
                        </script>
                    <?php
                        
                }
                    ?>
                
                    </tbody>
                    </table>


                ?>
                <br>
                
                <form method="post" action="export/export-attendance.php">
                    <input class="btn btn-success" type="submit" name="export" value="Download As Excel File">
                    <a class="btn btn-success" href="Mail/send-participation-proof.php">Proof of participation</a>   
                </form>

                <a href="admin.php" id="back-2"><i class="fas fa-angle-left"></i> Back</a>
                <!-- <button onclick="refreshPage();"class="btn btn-primary">Refresh</button> -->
                

            </div>

            <!-- footer  -->
            <footer>
                <div class="footer-content">
                    <a href="https://github.com/rdtech2002/event-buddy-university-project-01" target="_blank"><i class="bi bi-github"></i></a>
                    <p>Copyright © 2022 Event Buddy</p>
                </div>
            </footer>
        </div>

        <!-- scripts  -->

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

        <script>

            function refreshPage(){
                window.location.reload();
            } 

            function toggleplist(e) {
                e.preventDefault();
                $("#event-details").toggle();
                $("#participant-list").toggle();
            }

            function togglelplist(e) {
                e.preventDefault();
                $("#event-details").toggle();
                $("#live-participant-list").toggle();
            }

            function editevent(e) {
                e.preventDefault();
                $("#event-details").toggle();
                $("#logreg-forms .form-signup").toggle();
            }

            function editfiles(e) {
                e.preventDefault();
                $("#event-details").toggle();
                $("#logreg-forms .form-signup-2").toggle();
            }

            function createAdmin(e) {
                e.preventDefault();
                $("#event-details").toggle();
                $("#logreg-forms .form-signup-3").toggle();
            }

            // function back1(e) {
            //     e.preventDefault();
            //     $("#event-details").toggle();
            //     $("#logreg-forms .form-signup").toggle();
            // }

            // function back2(e) {
            //     e.preventDefault();
            //     $("#event-details").toggle();
            //     $("#participant-list").toggle();
            // }

            // function back3(e) {
            //     e.preventDefault();
            //     $("#event-details").toggle();
            //     $("#live-participant-list").toggle();
            // }

            // function back4(e) {
            //     e.preventDefault();
            //     $("#event-details").toggle();
            //     $("#logreg-forms .form-signup-3").toggle();
            // }

            $(() => {
                // Login Register Form
                $("#p-list-btn").click(toggleplist);
                $("#l-p-list-btn").click(togglelplist);
                $("#edit-event").click(editevent);
                $("#edit-event-files").click(editfiles);
                $("#new-admin-btn").click(createAdmin);
                // $("#back-1").click(back1);
                // $("#back-2").click(back2);
                // $("#back-3").click(back3);
                // $("#back-4").click(back4);

            });
        </script>
    </body>

    </html>


<?php

// } else {
   
    // header("Location: signup-login.php");
    // exit();
    
// }
?>