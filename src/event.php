<?php


//Starting Session
session_start();

//connecting to data base
include "../backend/database/db_conn.php";
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<?php


if (isset($_GET['event_id'])) {

    //Storing event id(get method) in variable  
    $event_id = $_GET['event_id'];

    // $events_id =$_POST['events_id'];


    //Query
    // $sql = "SELECT event_id,event_name, organizer, event_sdate, event_stime, event_edate, event_etime, event_venue, event_desc, event_broc, c_image1, c_image2, c_image3  FROM admins WHERE event_id='{$event_id}'";


    // $sql="SELECT DISTINCT event_admin.*,events.event_name,events.event_s_date,events.event_s_time,events.event_e_date,events.event_e_time,events.event_venue,events.organizer, events.event_desc, events.event_broc, events.e_slot, events.c_image1, events.c_image2, events.c_image3 FROM `events` INNER JOIN event_admin ON events.event_id = event_admin.event_id WHERE events.event_id='{$event_id}'";


    $sql="SELECT * FROM events WHERE events.event_id='{$event_id}'";

    //Executing Query and storing result in variable
    $result = $conn->query($sql);


    //Checking whether the number of result row is greater than  1 or not 
    if ($result->num_rows > 0) {
        // echo $result->num_rows;

        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $event_name = $row['event_name'];

?> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon"  href="../assets/icon1.png" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="../css/output.css">
    <link rel="stylesheet" href="../css/design.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Anweshan, Event</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Anton&family=Black+Ops+One&family=Rubik+80s+Fade&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Black+And+White+Picture&display=swap');

        .tech{
            font-family: 'Black Ops One', 'Roboto Condensed';
        }
        .cultural{
            font-family: 'Black And White Picture', sans-serif;
        }
        .material-symbols-outlined {
            font-variation-settings:
                'FILL' 1,
                'wght' 800,
                'GRAD' 0,
                'opsz' 48
        }

        .material-symbols-outlined {
            color: white;

        }

        /* .nav-items{
        
      } */
    </style>
</head>

<body class="overflow-x-hidden">

    <!-- navbar   -->
    <?php include 'navbar.php' ?>
  <!-- end of navbar   -->

  <div class="w-full h-[95vh] lg:h-screen bg bg-cover bg-[30%] bg-no-repeat"
        style="background-image: url(../backend/event-assets/c_image/<?php echo $row['c_image1']; ?>);">
        <div
            class=" h-full flex justify-center items-center ">
            <span class="<?php echo $row['event_type']?>  hover:text-cyan-300 duration-200 text-white text-6xl md:text-8xl lg:text-9xl"><?php echo $row['event_name']; ?></span>
            <a class="absolute top-auto bottom-56" href="" ><div class="rulebook   text-black text-3xl font-bold  px-8 py-2 md:px-10 md:py-4 border-2 rounded-lg bg-cyan-500 duration-300 hover:text-white hover:bg-cyan-700">
                RULEBOOK
            </div></a>
        </div>

        
    </div>

    <div class="w-screen  bg-fixed bg-cover bg-center pb-20 " style="background-color:rgb(32, 6, 94);">
        <div class="text-white w-[85%] lg:w-3/4 mx-auto">

            <!-- description  -->
            <div class="abt w-full text-center  font-semibold py-20  my_item_font"><span class="title-shadow text-3xl md:text-4xl lg:text-5xl">About Event</span>
                <div class="main flex flex-col lg:flex-row justify-center items-center lg:px-10 lg:space-x-10 py-10 ">

                    <div class="prizes flex justify-center items-center ">
                        <div class="trophy w-32 h-32">
                            <img class="w-32 h-32" src="../assets/trphy.png" alt="">
                        </div>
                        <div class="prize flex flex-col w-52 justify-start items-center font-bold text-3xl">
                            <span>Exciting</span><span>Prize Pool</span></div>
                    </div>
                    <div class="desc  text-justify ">

                        <p class="text-xl">
                        <?php echo $row['event_desc']; ?>
                        </p>
                    </div>
                </div>
                <div class="date-time text-xl">
                    <p><span><strong>VENUE : </strong></span><?php echo $row["event_venue"] ?></p>
                    <p><span><strong>DATE : </strong></span><?php echo $row['event_s_date']; ?></p>
                    <p><span><strong>TIME : </strong></span> <?php echo $row['event_s_time']; ?> </p>
                </div>
            </div>

            <!-- form  -->
            <div class="w-full mx-auto max-w-full md:max-w-5xl " style="background-color:rgba(0,0,0,0.33); padding:20px;">
                <span class="text-3xl font-semibold">Fill this form for entry:</span>

                <form class="mx-auto shadow-md rounded px-0 md:px-8 pt-6 pb-8 mb-4"
                    action="event.php?event_id=<?php echo $event_id ?>" method="POST">

                <?php ?>
                    <div class="mb-4">
                        <label class="block text-white text-lg font-semibold mb-2" for="name">
                            Name / Team Name <span class="text-red-500">*</span>
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="name" type="text" placeholder="Name" name="p_name">
                    </div>
                    <div class="mb-6">
                        <label class="block text-white text-lg font-semibold mb-2" for="email">
                            Email <span class="text-red-500">*</span>
                        </label>
                        <input
                            class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                            id="email" type="text" placeholder="Email" name="p_email">
                    </div>
                    <div class="mb-6">
                        <label class="block text-white text-lg font-semibold mb-2" for="phone">
                            Mobile Number <span class="text-red-500">*</span>
                        </label>
                        <input
                            class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                            id="phone" type="text" placeholder="Mobile Number" name="mobile">
                    </div>
                
                    <div class="mb-6">
                        <label class="block text-white text-lg font-semibold mb-2" for="department">
                            Department <span class="text-red-500">*</span>
                        </label>
                        <input
                            class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                            id="department" name="department" type="text" placeholder="Your Department">
                    </div>

                    <div class="mb-6">
                        <label class="block text-white text-lg font-semibold mb-2" for="collage">
                            Collage Name <span class="text-red-500">*</span>
                        </label>
                        <input
                            class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                            id="collage" type="text" name="collage" placeholder="Collage">
                    </div>

                    <div class="flex items-center justify-center">
                        <button
                            class="bg-cyan-500 w-1/2 hover:bg-cyan-700 text-black hover:text-white text-2xl border-2 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit" id="submit" name="submit">
                            Register
                        </button>

                    </div>
                </form>

                <?php
                            function test_input($data)
                            {
                                $data = trim($data);
                                $data = stripslashes($data);
                                $data = htmlspecialchars($data);
                                return $data;
                            }

                            if (isset($_POST['submit'])) {
                                if (!empty($_POST['p_name']) && !empty($_POST['p_email']) && !empty($_POST['mobile']) && !empty($_POST['department']) && !empty($_POST['collage'])) {
                                    $p_name = test_input($_POST['p_name']);
                                    $p_email = test_input($_POST['p_email']);
                                    $mobile = test_input($_POST['mobile']);
                                    $department = test_input($_POST['department']);
                                    $collage = test_input($_POST['collage']);

                                    echo$p_name;

                                    //Executing query to get details of relevant participants
                                    $sql = "SELECT * FROM participant WHERE event_id ='$event_id' AND p_email='$p_email'";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                            ?>
                <script>
                    alert("Already Registered");
                    window.location.href = "event.php?event_id=<?php echo $event_id ?>";
                </script>
                <?php
                                    } else {






                                        //QR Generation
                                        require_once '../backend/QR/Generation/phpqrcode/qrlib.php';
                                        $path = '../backend/QR/Generation/images/';
                                        $qrcode = $path . time() . ".png";
                                        $qrimage = time() . ".png";

                                        echo $qrimage;


                                        $key = "eventbuddy";

                                        //Encrypting
                                        function encryption($data, $key)
                                        {
                                            $encryption_key = base64_decode($key);
                                            $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
                                            $encrypted = openssl_encrypt($data, 'aes-256-cbc', $encryption_key, 0, $iv);
                                            return base64_encode($encrypted . '::' . $iv);
                                        }

                                        $en_event_id = encryption($event_id, $key);
                                        $en_p_mail = encryption($p_email, $key);

                                        QRcode::png("{$en_event_id}:{$en_p_mail}", $qrcode, 'H', 4, 4);




                                        $stmt = $conn->prepare("INSERT INTO participant (p_email, event_id, p_name, mobile, qr_image, collage, department) VALUES(?, ?, ?, ?, ?, ?, ?)");
                                        $stmt->bind_param("sssssss", $p_email, $event_id, $p_name, $mobile, $qrimage, $collage, $department);
                                        $stmt->execute();
                                        $stmt->close();
                                        if ($stmt) {
                                            $_SESSION['e_p_email'] = $p_email;
                                            $_SESSION['e_event_name'] = $event_name;
                                            $_SESSION['e_event_id'] = $event_id;
                                            $_SESSION['e_p_name'] = $p_name;
                                            $_SESSION['e_qrimage'] = $qrimage;
											$_SESSION['collage'] = $collage;
											$_SESSION['department'] = $department;
                                        ?>
                <script>
                    alert("Registered for the event. Check your mail for the QR-ticket.");
                    window.location.href = "../backend/Mail/send-p-mail.php";
                </script>
                <?php
                                        } else {
                                        ?>
                <script>
                    alert("Error try again");
                    window.location.href = "event.php?event_id=<?php echo $event_id ?>";
                </script>
                <?php
                                        }
                                    }
                                } else {
                                    ?>
                <script>
                    alert("Submitted minimum one empty form data");
                    window.location.href = "event.php?event_id=<?php echo $event_id ?>";
                </script>
                <?php


                                }
                            } else {

                                ?>
                <!-- <script>
                                        alert("Error in Form Submission");
                                        window.location.href = "event.php?event_id=<?php echo $event_id ?>";
                                        </script> -->
                <?php

                            }
                            ?>


            </div>
        </div>
    </div>

       <!-- footer  -->
  <?php include 'footer.php'?>
  <!-- end of footer  -->                       




    <script src="../js/script.js"></script>
    <script src="../js/home.js"></script>

    <!-- icons  -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- AOS data  -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({

            // offset: 400,
            mirror: false



        });
    </script>
</body>
</html>




<?php


        }
    } 
    else {
?>
<script>
    alert("No Such Event");
    window.location.href = "index.php";
</script>
<?php
    }
} else {
?>
<script>
    window.location.href = "access-denied.html";
</script>
<?php
}
?>