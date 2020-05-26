<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
    body {
      background-image: url('./../img/bg/verify.jpg');
    }

    .verify {
      width: 450px;
      background-color: rgba(255, 255, 255, .1);
      border-radius: 15px;
      backdrop-filter: blur(8px);
      padding: 25px;
      box-sizing: border-box;
      color: #fff;
      box-shadow: 5px 5px 15px rgba(0, 0, 0, .5);
    }

    .verify .form-control {
      height: 45px;
      background-color: rgba(255, 255, 255, .1);
      box-shadow: 5px 5px 8px rgba(0, 0, 0, .5);
      border-radius: 5px;
      backdrop-filter: blur(8px);
      padding-left: 15px;
      border: none;
      padding-right: 15px;
      color: #fff;
      font-weight: bold;
    }

    .form-control::placeholder {
      color: #fff;
      font-weight: bold;
    }

    .btn-tra {
      background-color: rgba(255, 255, 255, .1);
      height: 45px;
      border: none;
      box-shadow: 5px 5px 8px rgba(0, 0, 0, .5);
      border-radius: 5px;
      backdrop-filter: blur(8px);
      color: #fff;
      font-weight: bold;
      text-transform: uppercase;
    }

    .btn-tra:hover {
      background-color: rgba(255, 255, 255, .2);
      height: 45px;
      border: none;
      box-shadow: 5px 5px 8px rgba(0, 0, 0, .5);
      border-radius: 5px;
      backdrop-filter: blur(8px);
      color: #fff;
      font-weight: bold;
      text-transform: uppercase;
    }

    .verify h1 {
      font-family: time;
    }
  </style>
</head>

<body id="body">
  <div class="d-flex justify-content-center align-items-center h-100">
    <div class="verify d-flex justify-content-center align-items-center">
      <div>
        <?php
        include './msg.php';
        include './conn.php';
        $v = mysqli_real_escape_string($conn, hex2bin($_GET['v']));
        $sql = "SELECT * FROM `user_unverified` WHERE `email` = '$v' limit 1";
        $result  = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        $mail = $row['email'];
        ?>
        <h1 class="text-center">
          Verify Email
        </h1>
        <p class="text-center">
          OTP is been Send to your mail Pls Open and Entry the OTP
        </p>
        <form action="./../activateuser.php" method="get">
          <div class="form-group my-4">
            <p class="text-center h5 mb-3">
              <?php echo $name; ?>
            </p>
            <input type="text" name="c" id="" class="form-control" placeholder="OTP" aria-describedby="helpId">
            <input type="text" name="m" id="" hidden value="<?php echo $mail; ?>" class="form-control" placeholder="OTP" aria-describedby="helpId">
            <input type="text" name="t" id="" hidden value="f" class="form-control" placeholder="OTP" aria-describedby="helpId">
          </div>
          <div class="form-group">
            <button class="btn btn-tra btn-block">
              Submit
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script>
    document.getElementById('body').style.height = window.innerHeight + "px";
  </script>
</body>

</html>