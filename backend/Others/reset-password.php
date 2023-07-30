<?php
//connecting with data-base
include "db_conn.php";


session_start();
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <link rel="icon" type="image/x-icon" href="assets/logo/eb-transperent-logo.png" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

  <!-- external css links -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />

  <link rel="stylesheet" href="/style.css" />

  <!-- external css -->
  <link rel="stylesheet" href="css/reset-password.css" />

  <!-- internal css  -->
  <style></style>

  <!-- title of the page  -->
  <title>EVENT BUDDY || Reset Password</title>
</head>

<body>
  <!-- navbar  -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a href="index.php" class="navbar-brand"><img style="height: 40px; width: 40px"
          src="assets/logo/eb-white-bg-logo.png" alt="" />
        Event Buddy</a>
      <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav">
          <a href="index.php" class="nav-item nav-link active">Home</a>
          <a href="index.php#events-section" class="nav-item active nav-link">Events</a>
        </div>
        <div class="navbar-nav ms-auto"></div>
      </div>
    </div>
  </nav>

  <!-- all forms  -->
  <div id="logreg-forms">

    <!-- reset password form -->

    <form action="reset-password.php" class="form-reset" name="send-otp" method="post">
      <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">
        Password Reset
      </h1>

      <input type="text" id="inputeventid" class="form-control" name="event_id"
        placeholder="Enter the alphanumaric event ID" required="" autofocus="" pattern="[a-zA-Z0-9]+" />

      <input type="email" id="resetEmail" class="form-control" name="a_mail" placeholder="Email address" required=""
        autofocus="" />

      <button class="btn btn-primary btn-block" id="send-otp" type="submit" name="send-otp">
        SEND OTP
      </button>

      <a href="signup-login.php" id="cancel_reset"><i class="fas fa-angle-left"></i> Cancel</a>
    </form>

    <!-- send-otp.php -->
    <?php
    //function to trim,strip and to convert all predefined characters to html entities
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if(isset($_POST['send-otp']) ){
        if(!empty($_POST['event_id']) && !empty($_POST['a_mail']))
        {
        //trimming data 
        $event_id = test_input($_POST['event_id']);
        $a_mail = test_input($_POST['a_mail']);

        $data = '1234567890abcdefghijklmnopqrstuvwxyz';
        $otp = substr(str_shuffle($data), 0, 6);

        

        //  Header("Location: Mail/send-otp-mail.php");
         
        ?>
        <head>
        <title>Sending Mail</title>
        <!-- logo -->
        <link rel="icon" type="image/x-icon" href="../assets/logo/eb-transperent-logo.png" />

        </head>


        <?php

       
        


















        }
    }


    ?>



    <!-- Otp form  -->
    <form class="form-reset-confirm" method="post">
      <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">
        Password Reset
      </h1>

      <?php
      echo  $event_id;
      echo  $a_mail;
      echo $otp;
      ?>

      <input type="text" id="otp" name="u-otp" class="form-control" autofocus="" placeholder="Otp From Mail"
        pattern="[a-zA-Z0-9]+" />

      <input type="password" id="inputPassword" name="a_password" class="form-control" placeholder="Password" />

      <input type="password" id="inputPassword" name="a_retype-password" class="form-control" placeholder="Retype Password" />

      <button class="btn btn-success btn-block" type="submit" name="reset-password">Confirm Reset Password</button>

      <a href="signup-login.php"><i class="fas fa-angle-left"></i> Cancel</a>
    </form>

    <!-- reset-password.php -->
    <?php
    
    if(isset($_POST['reset-password']) ){
        if(!empty($_POST['u-otp']) && !empty($_POST['a_password']) && !empty($_POST['a_retype-password']))
        {
           
            //verifying otp
            if($_POST['u-otp']==$otp){
                

                if ($_POST['a_password'] == $_POST['a_retype-password']) {
                    $a_password = $_POST['a_password'];

                      //Hashing Password
                      $h_password = password_hash($a_password, PASSWORD_DEFAULT);

                    // $u_otp= $_POST['u-otp'];

                     //preparing and executing statement
                     $stmt = $conn->prepare("UPDATE admins SET  a_password=? WHERE event_id=? AND a_mail=?");
                     $stmt->bind_param("sss", $h_password, $event_id,$a_mail);
                     $stmt->execute();
                     $stmt->close();
                     if($stmt){
                        ?>      
                        <script>
                            alert("Password Reset Successfully");
                            window.location.href = "index.php";
                        </script>
                        <?php
                     }else{
                        ?>      
                        <script>
                            alert("Password not reset");
                            window.location.href = "index.php";
                        </script>
                        <?php
                     }

                }else{
                    ?>
                    <script> alert("Password not matched");
                    window.location.href = "reset-password.php";
                </script>
                <?php
                }



            }else{
                ?>
                <script> alert("Otp not matched");
                window.location.href = "reset-password.php";
            </script>
            <?php
            }

            //verifying password
            


            

        }
    }

    ?>

  </div>

  <!-- scripts  -->
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>

    function toggleOtpForm(e) {
      e.preventDefault();
      $("#logreg-forms .form-reset").toggle(); // display:block or none
      $("#logreg-forms .form-reset-confirm").toggle(); // display:block or none
    }

    $(() => {
      $("#logreg-forms #send-otp").click(toggleOtpForm);
    });
  </script>
</body>

</html>























