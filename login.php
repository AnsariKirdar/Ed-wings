<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <meta name="description" content="">
  <!-- meta tags -->
  <?php include './inc/head-links.php'; ?>
  <link rel="stylesheet" href="./css/main.css">
</head>
<style>
  body {
    background-image: url('./img/bg/login.jpg');
  }

  .nav-item .active {
    background-color: var(--danger) !important;
  }
</style>

<body class="" id="body">

  <!-- Nav Bar -->
  <?php include './inc/nav.php'; ?>
  <!-- Nav Bar -->

  <div class="vh-100">
    <div class="container py-5 d-flex align-items-center">
      <div class="text-white login_form px-2">


        <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active text-white font-weight-bold rounded-pill" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white font-weight-bold rounded-pill" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Sign Up</a>
          </li>
        </ul>
        <div class="px-2">
          <?php include './dbh/msg.php'; ?>
        </div>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active px-2" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="alert alert-dismissible fade show" role="alert" style="backdrop-filter: blur(25px);box-shadow:5px 5px 8px rgba(0,0,0,0.5);">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
              </button>
              <strong>Welcome back please login to get your access.</strong>
            </div>
            <div class="profile">
              <img src="./img/profile/avart.jpg" alt="ed-wings-defult-avater" class="w-100" srcset="">
            </div>
            <h1>
              Login
            </h1>
            <form action="./dbh/login.php" class="" method="post">
              <div class="form-group">
                <label for="" class="">User Name</label>
                <input type="text" name="username" id="" class="form-control" placeholder="" aria-describedby="helpId" required autocomplete="off" autofocus>
              </div>
              <div class="form-group">
                <label for="" class="">Password</label>
                <input type="password" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId" required autocomplete="off">
              </div>
              <div class="form-group mt-4 mb-3">
                <input type="submit" name="login_submit" id="" class="btn btn-light font-weight-bold btn-block rounded-pill btn-lg" value="Login" placeholder="" aria-describedby="helpId">
              </div>
              <div class="form-group">
                <a href="#" class="">
                  Reset the Password ?
                </a>
              </div>
            </form>
          </div>



          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <h1>
              Create account
            </h1>
            <form action="./dbh/cust_signup.php" class="" method="post">
              <div class="form-group">
                <label for="" class="">Your name</label>
                <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId" required autocomplete="off" autofocus required>
              </div>
              <div class="form-group">
                <label for="" class="">Email</label>
                <input type="email" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId" required autocomplete="off" required>
              </div>
              <div class="form-group">
                <label for="" class="">Password</label>
                <input type="password" name="pass1" id="" class="form-control" placeholder="" aria-describedby="helpId" required autocomplete="off" required>
              </div>
              <div class="form-group">
                <label for="" class="">Re-enter password</label>
                <input type="text" name="pass2" id="" class="form-control" placeholder="" aria-describedby="helpId" required autocomplete="off" required>
              </div>
              <div class="form-group mt-4 mb-3">
                <input type="submit" name="cust_sign_up" id="" class="btn btn-light font-weight-bold btn-block rounded-pill btn-lg" placeholder="" value="Create your Edwings account" aria-describedby="helpId">
              </div>
              <div class="form-group px-2 pt-3 mb-0">
                <p class="small">
                  By creating an account, you agree to Edwings's <a href="./user-agreement.php" target="_blank" rel="noopener noreferrer">Conditions</a> of Use and <a href="./payment-security.php" target="_blank" rel="noopener noreferrer">Privacy Notice.</a>
                </p>
              </div>
            </form>
          </div>
        </div>




      </div>
    </div>
  </div>

  <!-- footer  -->
  <?php include './inc/footer.php'; ?>
  <!-- Footer  -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>