<?php
include "../backend/database/db_conn.php";
session_start();
?>

<?php


define('my-site', true);

if (!defined('my-site')) {

    Header("location:access-denied.html");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon"  href="../assets/icon1.png" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/design.css">
    <title>Anweshan, Cultural Fest</title>
    <style>
       
        @import url('https://fonts.googleapis.com/css2?family=Balthazar&display=swap');

            /* =====Custom Scroll-Bar===== */

            /* width */
            ::-webkit-scrollbar {
            width: 6px;
            }

            /* Track */
            ::-webkit-scrollbar-track {
            background: rgb(2, 54, 54);
            }

            /* Handle */
            ::-webkit-scrollbar-thumb {
            background: linear-gradient(rgb(2, 44, 44), cyan, rgb(2, 44, 44));
            border: 1px solid cyan;
            border-radius: 100px
            }

        .gothic{
            font-family: 'Balthazar', serif;
        }
        


    </style>
</head>

<body class="overflow-x-hidden">

    <!-- navbar -->
    <?php include 'navbar.php' ?>
   <!-- end of navbar  -->
    <div class="bg-fixed bg-cover  bg-[50%] h-screen w-screen" style="background-image: url(../assets/cultural/bg.png);">

        <div id="title" class="fixed w-screen h-[80%] flex justify-center items-center ">
            <div class=" flex flex-col justify-center items-center z-50 pointer-events-none">
                <div class="text-5xl md:text-8xl font-bold gothic " style="text-shadow: 0px 0px 10px cyan; color: white;">CULTURAL FEST</div>
                <!-- <div class="text-3xl md:text-4xl font-semibold " style="text-shadow: 0px 0px 10px red; color: white;">ANWESHAN 2K23</div> -->
            </div>
        </div>

        <img id="stage" class="fixed top-auto bottom-5 blur-0 md:blur-sm pointer-events-none" src="../assets/cultural/stage.png" alt="">
        <img id="aud" class="absolute top-auto bottom-5 pointer-events-none" src="../assets/cultural/aud.png" alt="">

        <div class="absolute flex justify-center w-screen mt-[90vh] bg-[#28173c]">

            <!-- content here  -->
            <div class="container text-justify">

            
            <div class=" title text-3xl md:text-4xl lg:text-5xl mb-20 text-white font-extrabold">
                <div id="about-data" class="text-center px-5 mt-7 title-shadow my_title_font">EVENTS</div>
            </div>

                <div class="z-40 mb-20 flex flex-wrap justify-center  ">
                    <?php
  
                    $sql = "SELECT * FROM events WHERE approval = 1 and event_type='cultural' ORDER BY event_s_date;";
                    $result = $conn->query($sql);
        
                    //Checking Wether
                    if ($result->num_rows > 0) {
        
                      // output data of each row
                    while ($row = $result->fetch_assoc()) {
                      // $_SESSION['event_id'] = $row['event_id'];
                  ?>
                    <!-- events 1-->
                    <div class="border-4 border-white w-[90%] sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 p-1 mx-1 my-1 ">
                        <div class="group relative">
                            <img src="../backend/event-assets/c_image/<?php echo $row['c_image2']; ?>" alt="Image 1"
                                class="w-full h-auto">
                            <!-- overlays -->
                            <div
                                class="absolute top-0 left-0 w-full h-full flex flex-col justify-center items-center text-center bg-[#721a9b] bg-opacity-75 opacity-0  group-hover:opacity-100 duration-500">
                                <h3 class="text-3xl font-bold text-white">
                                    <?php echo $row["event_name"]  ?>
                                </h3>
                                <p class="text-white"><span><strong>VENUE : </strong></span>
                                    <?php echo $row["event_venue"] ?>
                                </p>
                                <p class="text-white"><span><strong>EVENT DATE : </strong></span>
                                    <?php echo $row['event_s_date']; ?>
                                </p>

                                <a href="event.php?event_id=<?php echo $row['event_id'] ?>"
                                    class="mt-4 inline-block bg-[#EAE2B7] text-gray-800 font-semibold py-2 px-4 rounded">Details
                                </a>
                            </div>
                        </div>
                    </div>

                    <?php
                            }
                        } else {
                            echo  "<div style=\" padding: 10px; display:flex; margin: auto; align-items: center; border-radius: 10px; font-size: medium; font-weight: lighter;\" id=\"pre\" class=\"w-25 container info text-center bg-info\"> <p class=\"text-danger\" style=\"margin: auto;\" >No Event to Show</p></div>";
                        }
                        ?>
                    <!-- add more cards -->




                </div>

            </div>

        </div>


    </div>

    <!-- footer  -->
  <?php include 'footer.php'?>
  <!-- end of footer  -->

    <script src="../js/cultural.js"></script>
    <script src="../js/script2.js"></script>

  <!-- icons  -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


  <!-- AOS data  -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 500,
      offset: 200,
      mirror: true,

    });
  </script>



</body>


</html>