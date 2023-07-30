<?php
session_start();
include "../database/db_conn.php";

if (isset($_SESSION['otp']) && isset($_SESSION['otp_expiration']) && isset($_SESSION['r_event_id']) && isset($_SESSION['r_a_email'])) {







?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link rel="icon"  href="../../assets/icon1.png" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <!-- external css links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" />

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />

    <link rel="stylesheet" href="/style.css" />

    <!-- external css -->
    <link rel="stylesheet" href="css/reset-password-02.css" />

    <!-- internal css  -->
    <style></style>

    <!-- title of the page  -->
    <title>RESET PASSWORD</title>
  </head>

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
            <a href="../index.php" class="nav-item nav-link active">Home</a>
            <a href="../index.php#events-section" class="nav-item active nav-link">Events</a>
          </div>
          <div class="navbar-nav ms-auto"></div>
        </div>
      </div>
    </nav>

    <!-- all forms  -->
    <div id="logreg-forms">

      <!-- Otp form  -->
      <form action="reset-password-02.php" class="form-reset-confirm" method="post">
        <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">
          Password Reset
        </h1>

        <input type="text" id="otp" name="otp" class="form-control" autofocus="" placeholder="Otp From Mail"  />

        <input type="password" id="inputPassword" name="a_password" class="form-control" placeholder="Password" />

        <input type="password" id="inputPassword" name="a_retype-password" class="form-control" placeholder="Retype Password" />

        <button class="btn btn-success btn-block" type="submit" >Confirm Reset Password</button>

        <?php

        if (isset($_POST['otp']) && isset($_POST['a_password']) && isset($_POST['a_retype-password'])) {
          $otp = $_POST['otp'];
          $a_password = $_POST['a_password'];




          $storedOtp = $_SESSION['otp'];
          $expiration = $_SESSION['otp_expiration'];
          $event_id=$_SESSION['r_event_id'];
          $a_email= $_SESSION['r_a_email'];
          if(time() <= $expiration)
          {

            if ($otp == $storedOtp ) {


              if ($_POST['a_password'] === $_POST['a_retype-password']) {


                $h_password = password_hash($a_password, PASSWORD_DEFAULT);

                $sql="UPDATE event_admin SET a_password='{$h_password}' WHERE event_id='{$event_id}' AND a_email='{$a_email}'";
                if($conn->query($sql)===TRUE){
                  unset($_SESSION['otp']);
                  unset($_SESSION['otp_expiration']);
                  unset($_SESSION['r_event_id']);
                  unset($_SESSION['r_a_email']);
                  ?>
                  <script>
                    alert("Password Reset Complete");
                    window.location.href = "../signup-login/login.php";
                  </script>
                <?php
                }else{
                  ?>
                  <script>
                    alert("error in reset password");
                    window.location.href = "../signup-login/login.php";
                  </script>
                <?php
                }

               


               

                
              } else {
              ?>
                <script>
                  alert("Password Not Matched");
                  window.location.href = "../reset-password/reset-password-02.php";
                </script>
              <?php
              }
            } else {
              ?>
              <script>
                alert("Wrong OTP!!!");
                window.location.href = "../reset-password/reset-password-02.php";
              </script>
            <?php
            }
          }else{
            ?>
            <script>
              alert("OTP Expired!!!");
              window.location.href = "../reset-password/reset-password.php";
            </script>
          <?php

          
          }

          // echo "hiii";
          // header("Location:../index.php");


          // Authenticating password
          // if ($dh_password == 1) {
          // }

        }else{
          ?>
              <script>
                // alert("error form submission");
                // window.location.href = "../reset-password/reset-password-02.php";
              </script>
            <?php
        }
        ?>




        <a href="../signup-login/login.php"><i class="fas fa-angle-left"></i> Cancel</a>
      </form>
    </div>

    <!-- scripts  -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>

    </script>
  </body>

  </html>

<?php


} else {
  header("location:../error/access-denied.html");
}

?>