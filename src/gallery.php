<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon"  href="../assets/icon1.png" />
    <title>Anweshan, Gallery</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/gallery.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
    <link rel="stylesheet" href="../css/design.css">

    <style>
        body {
            margin: 0;
            padding: 0;
        }

        /* .container{
	width:90%
	margin:10px auto;
} */
        .portfolio-menu {
            text-align: center;
        }

        .portfolio-menu ul li {
            display: inline-block;
            margin: 0;
            list-style: none;
            padding: 10px 15px;
            cursor: pointer;
            -webkit-transition: all 05s ease;
            -moz-transition: all 05s ease;
            -ms-transition: all 05s ease;
            -o-transition: all 05s ease;
            transition: all .5s ease;
        }

        .portfolio-item {
            /*width:100%;*/
        }
W
        .portfolio-item .item {
            /*width:303px;*/
            float: left;
            margin-bottom: 10px;
        }
        .gap{
            grid-row-gap: 15px;
        }
        .shadow{
            text-shadow: px 1px 5px black;
        }
    </style>

</head>

<body class="bg-fixed bg-no-repeat bg-cover bg-[50%]" style="background-image: url(../assets/bgspace.gif); " >

      
<div class="my_item_font">
    <div class=" z-[60] top-0 fixed flex lg:hidden justify-between w-screen backdrop-blur-md bg-black bg-opacity-25  ">
      <a href="../index.html"><img class="w-[150px] p-2 lg:w-3/12 " src="../assets/logo.png" alt=""></a>



      <div class=" z-[60] nav-button lg:hidden py-4 my-auto mr-10 top-0 ">
        <div id="hamb-btn" class="flex flex-col group hamburger space-y-1.5 hover:cursor-pointer  ml-3 ">
          <div id="l1" class="w-10 h-1.5 bg-white rounded-lg  duration-300"></div>
          <div id="l2" class="w-10 h-1.5 bg-white rounded-lg duration-300"></div>
          <div id="l3" class="w-10 h-1.5 bg-white rounded-lg  duration-300"></div>
        </div>




      </div>
    </div>

    <div id="mob-nav" class="nav-bar absolute hidden lg:block">
      <div
        class=" nav-items h-screen lg:h-fit top-0 duration-500 fixed flex flex-col lg:flex-row lg:justify-between lg:items-center z-50  w-screen bg-cyan-950 bg-opacity-70  backdrop-blur-md lg:backdrop-blur-0 lg:bg-none lg:bg-opacity-0">

        <div class=" lf order-2  mb-5 lg:mb-0  flex flex-col lg:flex-row space-y-5 lg:space-y-0 mr-4">

          <div id="home"
            class="element  duration-150 hover:bg-white lg:px-6 lg:py-5 transition-all ease-linear hover:text-cyan-950  flex lg:space-x-2 items-center mx-auto  text-white lg:text-white font-bold text-2xl hover:cursor-pointer" >
            <a href="../index.html">HOME</a>

          </div>
          <div id="about"
            class="element duration-150 transition-all ease-linear mx-auto hover:lg:bg-white lg:px-6 lg:py-5 text-white lg:text-white font-bold text-2xl  lg:hover:lg:text-cyan-950 pb-0 lg:pb-3 ">
            <a href="../index.html#about-data">ABOUT</a>
          </div>
          <div id="event"
            class="group element duration-150 transition-all ease-linear mx-auto hover:lg:bg-white lg:px-6 lg:py-5 text-white lg:text-white font-bold text-2xl  lg:hover:lg:text-cyan-950 pb-0 lg:pb-3 ">
            <!-- event dropdown -->
          <div id="dropdown-wrapper" class="inline-block group">
            <button
              class="element flex items-center mx-auto lg:mx-5  font-bold text-2xl ">
              EVENTS<span class=" w-4">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                  <path fill-rule="evenodd"
                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                    clip-rule="evenodd" />
                </svg>
              </span></button>
            <div class="flex justify-center lg:translate-y-5 w-full">
              <div id="menu"
                class="absolute hidden py-3 gap-3   group-hover:flex  left-auto right-auto flex   lg:ml-9  flex-col bg-white lg:bg-cyan-950 text-cyan-950 lg:text-white drop-shadow-md">
                <a class="px-5 py-3 text-center  hover:bg-cyan-950 duration-300 hover:text-white font-semibold text-xl lg:hover:bg-white lg:hover:text-cyan-950  "
                  href="tech.php">TECH</a>
                <a class="px-5 py-3 text-center hover:bg-cyan-950 duration-300  hover:text-white font-semibold text-xl lg:hover:bg-white lg:hover:text-cyan-950  "
                  href="cultural.php">CULTURAL</a>
                <a class="px-2 py-3 text-center hover:bg-cyan-950 duration-300  hover:text-white font-semibold text-xl lg:hover:bg-white lg:hover:text-cyan-950  "
                  href="https://akimatsuri-makaut.web.app/" target="_blank">ANIME FEST</a>

              </div>
            </div>
          </div>
          </div>

          <div id="sponsor"
            class="element duration-150 transition-all ease-linear mx-auto hover:lg:bg-white lg:px-6 lg:py-5 text-white lg:text-white font-bold text-2xl  lg:hover:lg:text-cyan-950 pb-0 lg:pb-3 ">
            <a href="../index.html#sponsor-data">SPONSORS</a>
          </div>

          <div id="gallery"
            class="element duration-150 transition-all ease-linear mx-auto hover:lg:bg-white lg:px-6 lg:py-5 text-white lg:text-white font-bold text-2xl  lg:hover:lg:text-cyan-950 pb-0 lg:pb-3 ">
            
            <a href="gallery.php">GALLERY</a>
          </div>
          <div id="team"
            class="element duration-150 transition-all ease-linear mx-auto hover:lg:bg-white lg:px-6 lg:py-5 text-white lg:text-white font-bold text-2xl  lg:hover:lg:text-cyan-950 pb-0 lg:pb-3 ">
            <a href="../index.html#team-data">TEAM</a>
          </div>

        </div>


        <a href="../index.html"><div class="center order-1 mt-8 lg:items-center lg:mt-0 invisible lg:visible flex  lg:mr-auto lg:ml-10 ">
          <img class="min-w-[100px] w-[15%]" src="../assets/logo.png" alt="">

        </div></a>



      </div>
    </div>
  </div>



    
        <div
            class="center  z-[200]  my-8 lg:my-28 " style="margin-top:5rem;">
           <img class="w-1/3 lg:w-1/6 mx-auto " src="../assets/logo.png" alt="logo">

        </div>
    
    <div class="container">
        

        <div class="portfolio-item row gap">
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <a href="../assets/gallery/banner.png"
                    class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid"
                        src="../assets/gallery/banner.png"
                        alt="">
                </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <a href="../assets/gallery/pic1.png"
                    class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid"
                        src="../assets/gallery/pic1.png"
                        alt="">
                </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <a href="../assets/gallery/pic2.png"
                    class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid"
                        src="../assets/gallery/pic2.png"
                        alt="">
                </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <a href="../assets/gallery/pic3.png"
                    class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid"
                        src="../assets/gallery/pic3.png"
                        alt="">
                </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <a href="../assets/gallery/pic4.png"
                    class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid"
                        src="../assets/gallery/pic4.png"
                        alt="">
                </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <a href="../assets/gallery/pic5.png"
                    class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid"
                        src="../assets/gallery/pic5.png"
                        alt="">
                </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <a href="../assets/gallery/pic6.png"
                    class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid"
                        src="../assets/gallery/pic6.png"
                        alt="">
                </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <a href="../assets/gallery/pic4.png"
                    class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid"
                        src="../assets/gallery/pic4.png"
                        alt="">
                </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <a href="../assets/gallery/pic5.png"
                    class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid"
                        src="../assets/gallery/pic5.png"
                        alt="">
                </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <a href="../assets/gallery/pic6.png"
                    class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid"
                        src="../assets/gallery/pic6.png"
                        alt="">
                </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <a href="../assets/gallery/pic4.png"
                    class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid"
                        src="../assets/gallery/pic4.png"
                        alt="">
                </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <a href="../assets/gallery/pic5.png"
                    class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid"
                        src="../assets/gallery/pic5.png"
                        alt="">
                </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <a href="../assets/gallery/pic6.png"
                    class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid"
                        src="../assets/gallery/pic6.png"
                        alt="">
                </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <a href="../assets/gallery/pic4.png"
                    class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid"
                        src="../assets/gallery/pic4.png"
                        alt="">
                </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <a href="../assets/gallery/pic5.png"
                    class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid"
                        src="../assets/gallery/pic5.png"
                        alt="">
                </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <a href="../assets/gallery/pic6.png"
                    class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid"
                        src="../assets/gallery/pic6.png"
                        alt="">
                </a>
            </div>
            
         




        </div>
    </div>


    <script src="../js/gallery.js"></script>
   

</body>

</html>