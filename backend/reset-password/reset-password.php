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

    <!-- reset password form -->

    <form action="../Mail/send-otp-mail.php" class="form-reset" name="send-otp" method="post">
      <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">
        Password Reset
      </h1>

      <input type="text" id="inputeventid" class="form-control" name="event_id"
        placeholder="Enter the alphanumaric event ID" required="" autofocus="" pattern="[a-zA-Z0-9]+" />

      <input type="email" id="resetEmail" class="form-control" name="a_email" placeholder="Email address" required=""
        autofocus="" />

      <button class="btn btn-primary btn-block" id="send-otp" type="submit" name="send-otp">
        SEND OTP
      </button>

    

      <a href="../signup-login/signup.php" id="cancel_reset"><i class="fas fa-angle-left"></i> Cancel</a>
    </form>

  <!-- scripts  -->
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
  </script>
</body>

</html>