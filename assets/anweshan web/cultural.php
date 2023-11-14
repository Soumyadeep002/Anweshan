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
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="../css/output.css">
  <link rel="stylesheet" href="../css/design.css">
  <link rel="stylesheet" href="../css/cultural.css">
  <!-- <link rel="stylesheet" href="../css/style.css"> -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <title>Anweshan</title>
  <style>
    

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
  </style>

</head>

<body class="overflow-x-hidden" style="background-color: #be6cd5;">

  

  <!-- navbar  -->
  <?php include 'navbar.php'?>
  <!-- end of navbar  -->

 <!-- parallax assets  -->
 <div class="assets">
    <div class="fixed w-screen h-screen bg-cover bg-center bg-no-repeat flex justify-center "
      style="background-image: url(../assets/cultural/bground.png)">

      <div id="title"
        class=" flex w-fit text absolute font-black text-white text-7xl md:text-9xl mt-36 md:mt-28   -translate-x-[95rem]">
        CULTURAL FEST
      </div>

      <div class="objects flex justify-center ">
        <img id="bush1" class="absolute z-[4] h-screen bg-cover right-auto left-0" src="../assets/cultural/bush-lt.png"
          alt="">
        <img id="bush2" class="absolute z-[4] h-screen bg-cover right-0 left-auto" src="../assets/cultural/bush-rt.png"
          alt="">
        <img id="odd1"
          class="absolute z-[2] right-auto left-0 lg:left-24 xl:left-72 top-auto bottom-20 md:bottom-0 md:h-1/4"
          src="../assets/cultural/add1.png" alt="" srcset="">
        <img id="odd2"
          class="absolute z-[2] right-0 lg:right-24 xl:right-72 left-auto  top-auto bottom-20 md:bottom-0 md:h-1/4"
          src="../assets/cultural/add2.png" alt="" srcset="">

      </div>

      <div class="stage ">
        <img id="stage" class="h-[55vh] mt-[19rem] sm:h-[85vh] sm:mt-24 md:mt-20 md:h-screen"
          src="../assets/cultural/stage.png " alt="">

      </div>



    </div>

    <!-- end of assets  -->


    <!-- start of contents  -->
    <div class="z-[3] absolute about  w-screen flex flex-col  ">

      <!-- events  -->
      <div 
        class="event container mx-auto  px-4 md:px-9 mt-[110vh]  lg:mt-[200vh] mb-60"  data-aos="zoom-in">
        <div class="border-b-8 border-indigo-700 title text-3xl lg:text-5xl text-white font-extrabold">
          <div id="about-data" class="trapizoid px-5 ">Events</div>
        </div>

        <div class="container h-20 items-center flex lg:hidden justify-center animate-pulse">
          <span class="out-glow mx-auto text-white font-bold text-2xl">Tap on cards</span>
        </div>
        <div class="cla mt-5 text-justify">

          <div class="z-40 flex flex-wrap justify-center  ">
          
        
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
              <div class="border-4 border-white w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 p-1 mx-1 my-1 ">
              <div class="group relative">
                <img src="../backend/event-assets/c_image/<?php echo $row['c_image2']; ?>"
                  alt="Image 1" class="w-full h-auto">
                <!-- overlays -->
                <div
                  class="absolute top-0 left-0 w-full h-full flex flex-col justify-center items-center text-center bg-[#b3235a] bg-opacity-75 opacity-0  group-hover:opacity-100 duration-500">
                  <h3 class="text-3xl font-bold text-white"><?php echo $row["event_name"]  ?></h3>
                  <p class="text-white"><span><strong>VENUE : </strong></span><?php echo $row["event_venue"] ?></p>
                  <p class="text-white"><span><strong>EVENT DATE : </strong></span><?php echo $row['event_s_date']; ?></p>
                  
                  <a href="../event.php?event_id=<?php echo $row['event_id'] ?>"
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
  
            
  
  
           
  
  
  
  
          </div>

        </div>
      </div>


   



    </div>
    <!-- end of contents -->


  </div>

   <!-- footer  -->
   <?php include 'footer.php'?>
  <!-- end of footer  -->




  <script src="../js/cultural.js"></script>
  <script src="../js/script.js"></script>

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