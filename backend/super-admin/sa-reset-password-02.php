<?php
session_start();
include "../database/db_conn.php";

if (isset($_SESSION['sa_otp']) && isset($_SESSION['sa_otp_expiration'])  && isset($_SESSION['r_sa_email'])) {

  
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
    <link rel="stylesheet" href="./css/sa-reset-password-02.css" />

    <!-- internal css  -->
    <style></style>

    <!-- title of the page  -->
    <title>SA RESET PASSWORD</title>
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
      <form action="sa-reset-password-02.php" class="form-reset-confirm" method="post">
        <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">
          Super Admin Password Reset
        </h1>

        <input type="text" id="otp" name="otp" class="form-control" autofocus="" placeholder="Otp From Mail" />

        <input type="password" id="inputPassword" name="a_password" class="form-control" placeholder="Password" />

        <input type="password" id="inputPassword" name="a_retype-password" class="form-control" placeholder="Retype Password" />

        <button class="btn btn-success btn-block" type="submit">Confirm Reset Password</button>

        <a href="sa-login.php"><i class="fas fa-angle-left"></i> Cancel</a>

       
      </form>


      <?php
      if (isset($_POST['otp']) && isset($_POST['a_password']) && isset($_POST['a_password'])) {
        $otp = $_POST['otp'];
        $sa_password = $_POST['a_password'];

        $storedOtp = $_SESSION['sa_otp'];
        $expiration = $_SESSION['sa_otp_expiration'];
        $sa_email = $_SESSION['r_sa_email'];

       

        if (time() <= $expiration) 
        {
          if ($_POST['a_password'] === $_POST['a_retype-password']) 
          {
            $sql = "UPDATE super_admin SET sa_password='{$sa_password}' WHERE sa_email='{$sa_email}'";
            if ($conn->query($sql) === TRUE) 
            {
              unset($_SESSION['sa_otp']);
              unset($_SESSION['sa_otp_expiration']);
              unset($_SESSION['r_sa_email']);
             
              ?>
              <script>
                alert("Password Reset Complete");
                window.location.href = "sa-login.php";
              </script>
              <?php
            } else {
              ?>
              <script>
                alert("error in reset password");
                window.location.href = "sa-reset-password.php";
              </script>
              <?php
            }
          } else {
            ?>
            <script>
              alert("Password Not Matched");
              window.location.href = "sa-reset-password-02.php";
            </script>
            <?php
          }
        } else {
          ?>
          <script>
            alert("OTP Expired!!!");
            window.location.href = "sa-reset-password.php";
          </script>
      <?php
        }
      } else {
      }

      ?>
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