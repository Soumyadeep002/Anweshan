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
  <link rel="icon"  href="../assets/icon1.png" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <link rel="stylesheet" href="../css/design.css">
  <link rel="stylesheet" href="../css/tech.css">

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <title>Anweshan, Tech Fest</title>
  <style>
    /* =====Custom Scroll-Bar===== */

    /* width */
    ::-webkit-scrollbar {
      width: 10px;
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

    /* end of scroll bar */
    @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@900&display=swap');

    .title_fnt {
      font-family: 'Orbitron', sans-serif;
    }

    html {
      scroll-behavior: smooth;
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


    /* end of page loading  */
  </style>
</head>

<body class="bg-fixed bg-cover bg-[50%] bg-no-repeat overflow-x-hidden filter "
  style="background-image: url(../assets/tech/4884273.png); background-color: #00040f;">




  <!-- navbar  -->
  <?php include 'navbar.php' ?>
  <!-- end of navbar  -->

  <!-- title  -->
  <div class="fixed flex w-screen justify-center items-center h-screen title_fnt">
    <div id="title" class="anim-title relative text-white font-bold text-6xl sm:text-7xl md:text-8xl lg:text-9xl "
      data-text="Tech Fest">
      Tech Fest
    </div>
    <img id="spin" class="spinner absolute w-1/2 lg:w-3/12" src="../assets/tech/anweshan tech web page 4.png" alt="">
  </div>


  <!-- zoomable image  -->
  <div id="zoom" class="ct fixed z-0 w-screen h-screen bg-cover bg-[50%] pointer-events-none"
    style="background-image: url(../assets/tech/test3.png);"></div>

  <!-- explore button  -->
  <div id="explore" class="z-20  flex w-screen justify-center absolute left-[0px]">
    <div
      class="fixed my_item_font animate-bounce top-auto bottom-44 expl border-4 text-white text-2xl font-bold text-center align-middle  px-10 hover:scale-50 py-2 duration-100 rounded-xl  bg-pink-600 active:bg-purple-900">
      <a type="button" href="#about-data">Explore</a>

    </div>
  </div>

  <!-- start of contents  -->
  <div class="z-10 absolute about  w-screen flex flex-col  about my_item_font">

    <!-- events  -->
    <div id="event" class=" container mx-auto  px-4 md:px-9 mt-[110vh] lg:mt-[140vh] mb-60" data-aos="zoom-in">
      <div class=" title text-3xl md:text-4xl lg:text-5xl mb-20 text-white font-extrabold">
        <div id="about-data" class="text-center px-5 title-shadow my_title_font">EVENTS</div>
      </div>

      <div class="cla mt-5 text-justify">

        <div class="z-40 flex flex-wrap justify-center  ">
          <?php

$sql = "SELECT * FROM events WHERE approval = 1 and event_type='tech' ORDER BY event_s_date;";
$result = $conn->query($sql);

//Checking Wether
if ($result->num_rows > 0) {

  // output data of each row
while ($row = $result->fetch_assoc()) {
  // $_SESSION['event_id'] = $row['event_id'];           https://keyassets-p2.timeincuk.net/wp/prod/wp-content/uploads/sites/30/2016/01/Robot-Wars-2.jpg
?>
          <!-- events 1-->
          <div class="border-4 border-white w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 p-1 mx-1 my-1 ">
            <div class="group relative">
              <img src="../backend/event-assets/c_image/<?php echo $row['c_image2']; ?>" alt="Image 1"
                class="w-full h-auto">
              <!-- overlays -->
              <div
                class="absolute top-0 left-0 w-full h-full flex flex-col justify-center items-center text-center bg-[#2444d3] bg-opacity-75 opacity-0  group-hover:opacity-100 duration-500">
                <h3 class="text-3xl font-bold text-white">
                  <?php echo $row["event_name"]  ?>
                </h3>
                <p class="text-white"><span><strong>VENUE : </strong></span><?php echo $row["event_venue"] ?></p>
                <p class="text-white"><span><strong>EVENT DATE : </strong></span><?php echo $row['event_s_date']; ?></p>

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
  <!-- end of contents -->

  <!-- footer  -->
  <?php include 'footer.php'?>
  <!-- end of footer  -->


  
  <script src="../js/script2.js"></script>
  <script src="../js/tech.js"></script>



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