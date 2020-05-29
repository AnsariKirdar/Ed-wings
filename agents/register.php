<!doctype html>
<html lang="en">

<head>
  <title>Register as Agent</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="../img/logo/favicon.ico" type="image/x-icon">
  <script src="https://kit.fontawesome.com/f3f7c81543.js" crossorigin="anonymous"></script>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.css">
  <style>
    body {
      background-image: url('../img/bg/regagent.jpg');
      background-repeat: no-repeat;
      background-size: cover;
      padding-top: 30px;
      padding-bottom: 30px;
      background-attachment: fixed;
    }

    .main_container {
      background-color: rgba(255, 255, 255, .2);
      border-radius: 10px;
      backdrop-filter: blur(10px);
      padding: 30px;
      height: 100%;
    }

    .form-control {
      background-color: rgba(255, 255, 255, .2);
      backdrop-filter: blur(10px);
      border: none;
      border-radius: 70px;
      min-width: 450px;
      max-width: 450px;
      padding-left: 20px !important;
      padding-right: 20px !important;
    }

    .form-control:focus {
      background-color: rgba(255, 255, 255, .1);
      backdrop-filter: blur(10px);
      border: none;
      border-radius: 70px;
      outline: none !important;
    }

    .form-control:active {
      background-color: rgba(255, 255, 255, .1);
      backdrop-filter: blur(10px);
      border: none;
      border-radius: 70px;
      outline: none !important;
    }

    .alert {
      background-color: rgba(255, 255, 255, .1);
      backdrop-filter: blur(10px);
    }

    .label {
      width: 250px;
    }

    .back {
      padding: 10px;
      padding-right: 30px;
      padding-left: 30px;
      color: #000;
      font-weight: bold;
      background-color: rgba(255, 255, 255, .2);
      border-radius: 10px;
    }

    .back:hover {
      padding: 10px;
      padding-right: 30px;
      padding-left: 30px;
      color: #000;
      font-weight: bold;
      background-color: rgba(255, 255, 255, .2);
      border-radius: 10px;
      text-decoration: none;
    }

    @media (max-width: 576px) {
      .label {
        width: 250px;
      }

      .input {
        width: 100%;
      }

      .form-control {
        min-width: 100%;
        max-width: 100%;
      }


    }
  </style>
</head>

<body>
  <div class="container mb-4">
    <p>
      <a href="../index.php" target="_blank" rel="noopener noreferrer" class="back">
        <i class="fa fa-backward" aria-hidden="true"></i>
        Back
      </a>
    </p>
  </div>
  <div class="container">
    <div class="main_container text-dark">
      <form action="./dbh/regrequest.php" method="post">
        <h1 class="font-weight-bolder h3 text-dark text-center mt-4">
          REGISTER YOUR TRAVEL AGENCY
        </h1>
        <p class="text-dark font-weight-bold text-center h5 my-3">
          Thanks for your interest in Ed-wings.
        </p>
        <h3 class="text-dark font-weight-bold my-4">
          Let's Get started
        </h3>
        <p class="font-weight-bold small">
          Before we can start working together, you’ll need to register your agency. If you’re the manager of a travel
          agency and not currently affiliated with Ed-wings, please fill out the form below. Once you’re approved,
          you’ll be able to grant individual access to agents at your firm.
        </p>
        <hr class="my-5">
        <p class="h5 font-weight-bold mb-3">
          Agency Detail's
        </p>
        <div class="alert alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong class="text-danger"> IMPORTANT NOTE : </strong>
          <span class="text-dark">
            This is an Agency (NOT Agent), registration form. If your business is already associated with Ed-wings,
            please contact the Manager of your agency.
          </span>
        </div>

        <div class="d-lg-flex d-md-flex d-sm-block align-items-center justify-content-center my-4">
          <div class="label">
            <label for="" class="font-weight-bold text-dark text-lg-right text-md-right text-sm-left w-100 px-2">Agency
              / Company Name</label>
          </div>
          <div class="input">
            <input type="text" name="agency_name" id="" class="form-control form-control-lg text-dark px-2" placeholder="" aria-describedby="helpId">
          </div>
        </div>

        <div class="d-lg-flex d-md-flex d-sm-block align-items-center justify-content-center my-4">
          <div class="label">
            <label for="" class="font-weight-bold text-dark text-lg-right text-md-right text-sm-left w-100 px-2">Business Registration with Local
            </label>
          </div>
          <div class="input">
            <input type="text" name="business_registration_with" id="" class="form-control form-control-lg text-dark px-2" placeholder="" aria-describedby="helpId">
          </div>
        </div>


        <div class="d-lg-flex d-md-flex d-sm-block align-items-center justify-content-center my-4">
          <div class="label">
            <label for="" class="font-weight-bold text-dark text-lg-right text-md-right text-sm-left w-100 px-2">Registration Number
            </label>
          </div>
          <div class="input">
            <input type="text" name="business_registration_number" id="" class="form-control form-control-lg text-dark px-2" placeholder="" aria-describedby="helpId">
          </div>
        </div>

        <div class="d-lg-flex d-md-flex d-sm-block align-items-center justify-content-center my-4">
          <div class="label">
            <label for="" class="font-weight-bold text-dark text-lg-right text-md-right text-sm-left w-100 px-2">IATA Number

            </label>
          </div>
          <div class="input">
            <input type="text" name="iata_number" id="" class="form-control form-control-lg text-dark px-2" placeholder="" aria-describedby="helpId">
          </div>
        </div>

        <div class="d-lg-flex d-md-flex d-sm-block align-items-center justify-content-center my-4">
          <div class="label">
            <label for="" class="font-weight-bold text-dark text-lg-right text-md-right text-sm-left w-100 px-2">ABTA Number
            </label>
          </div>
          <div class="input">
            <input type="text" name="abta_number" id="" class="form-control form-control-lg text-dark px-2" placeholder="" aria-describedby="helpId">
          </div>
        </div>

        <div class="d-lg-flex d-md-flex d-sm-block align-items-center justify-content-center my-4">
          <div class="label">
            <label for="" class="font-weight-bold text-dark text-lg-right text-md-right text-sm-left w-100 px-2">CLIA Number
            </label>
          </div>
          <div class="input">
            <input type="text" name="clia_number" id="" class="form-control form-control-lg text-dark px-2" placeholder="" aria-describedby="helpId">
          </div>
        </div>

        <div class="d-lg-flex d-md-flex d-sm-block align-items-center justify-content-center my-4">
          <div class="label">
            <label for="" class="font-weight-bold text-dark text-lg-right text-md-right text-sm-left w-100 px-2">TIDS Number
            </label>
          </div>
          <div class="input">
            <input type="text" name="tids_number" id="" class="form-control form-control-lg text-dark px-2" placeholder="" aria-describedby="helpId">
          </div>
        </div>

        <p class="h5 font-weight-bold mb-3">
          Agency Manager Detail's
        </p>

        <div class="d-lg-flex d-md-flex d-sm-block align-items-center justify-content-center my-4">
          <div class="label">
            <label for="" class="font-weight-bold text-dark text-lg-right text-md-right text-sm-left w-100 px-2">First Name
            </label>
          </div>
          <div class="input">
            <input type="text" name="manager_first_name" id="" class="form-control form-control-lg text-dark px-2" placeholder="" aria-describedby="helpId">
          </div>
        </div>

        <div class="d-lg-flex d-md-flex d-sm-block align-items-center justify-content-center my-4">
          <div class="label">
            <label for="" class="font-weight-bold text-dark text-lg-right text-md-right text-sm-left w-100 px-2">Last Name
            </label>
          </div>
          <div class="input">
            <input type="text" name="manager_last_name" id="" class="form-control form-control-lg text-dark px-2" placeholder="" aria-describedby="helpId">
          </div>
        </div>

        <div class="d-lg-flex d-md-flex d-sm-block align-items-center justify-content-center my-4">
          <div class="label">
            <label for="" class="font-weight-bold text-dark text-lg-right text-md-right text-sm-left w-100 px-2">Email
            </label>
          </div>
          <div class="input">
            <input type="text" name="manager_email" id="" class="form-control form-control-lg text-dark px-2" placeholder="" aria-describedby="helpId">
          </div>
        </div>

        <div class="d-lg-flex d-md-flex d-sm-block align-items-center justify-content-center my-4">
          <div class="label">
            <label for="" class="font-weight-bold text-dark text-lg-right text-md-right text-sm-left w-100 px-2">Contact
            </label>
          </div>
          <div class="input">
            <input type="text" name="manager_contact" id="" class="form-control form-control-lg text-dark px-2" placeholder="" aria-describedby="helpId">
          </div>
        </div>

        <p class="h5 font-weight-bold mb-3">
          Agency Contact Detail's
        </p>
        <div class="d-lg-flex d-md-flex d-sm-block align-items-center justify-content-center my-4">
          <div class="label">
            <label for="" class="font-weight-bold text-dark text-lg-right text-md-right text-sm-left w-100 px-2">Email
            </label>
          </div>
          <div class="input">
            <input type="text" name="agency_email" id="" class="form-control form-control-lg text-dark px-2" placeholder="" aria-describedby="helpId">
          </div>
        </div>

        <div class="d-lg-flex d-md-flex d-sm-block align-items-center justify-content-center my-4">
          <div class="label">
            <label for="" class="font-weight-bold text-dark text-lg-right text-md-right text-sm-left w-100 px-2">Public phone
            </label>
          </div>
          <div class="input">
            <input type="number" name="agency_public_phone_number" id="" class="form-control form-control-lg text-dark px-2" placeholder="" aria-describedby="helpId">
          </div>
        </div>

        <div class="d-lg-flex d-md-flex d-sm-block align-items-center justify-content-center my-4">
          <div class="label">
            <label for="" class="font-weight-bold text-dark text-lg-right text-md-right text-sm-left w-100 px-2">Phone Number
            </label>
          </div>
          <div class="input">
            <input type="number" name="agency_phone_number" id="" class="form-control form-control-lg text-dark px-2" placeholder="" aria-describedby="helpId">
          </div>
        </div>

        <div class="d-lg-flex d-md-flex d-sm-block align-items-center justify-content-center my-4">
          <div class="label">
            <label for="" class="font-weight-bold text-dark text-lg-right text-md-right text-sm-left w-100 px-2">Fax
            </label>
          </div>
          <div class="input">
            <input type="text" name="agency_fax" id="" class="form-control form-control-lg text-dark px-2" placeholder="" aria-describedby="helpId">
          </div>
        </div>

        <p class="h5 font-weight-bold mb-3">
          Agency Address
        </p>

        <div class="d-lg-flex d-md-flex d-sm-block align-items-center justify-content-center my-4">
          <div class="label">
            <label for="" class="font-weight-bold text-dark text-lg-right text-md-right text-sm-left w-100 px-2">Address
            </label>
          </div>
          <div class="input">
            <input type="text" name="agency_address" id="" class="form-control form-control-lg text-dark px-2" placeholder="" aria-describedby="helpId">
          </div>
        </div>

        <div class="d-lg-flex d-md-flex d-sm-block align-items-center justify-content-center my-4">
          <div class="label">
            <label for="" class="font-weight-bold text-dark text-lg-right text-md-right text-sm-left w-100 px-2">Country
            </label>
          </div>
          <div class="input">
            <input type="text" name="agency_country" id="" class="form-control form-control-lg text-dark px-2" placeholder="" aria-describedby="helpId">
          </div>
        </div>

        <div class="d-lg-flex d-md-flex d-sm-block align-items-center justify-content-center my-4">
          <div class="label">
            <label for="" class="font-weight-bold text-dark text-lg-right text-md-right text-sm-left w-100 px-2">State or Province
            </label>
          </div>
          <div class="input">
            <input type="text" name="agency_state" id="" class="form-control form-control-lg text-dark px-2" placeholder="" aria-describedby="helpId">
          </div>
        </div>

        <div class="d-lg-flex d-md-flex d-sm-block align-items-center justify-content-center my-4">
          <div class="label">
            <label for="" class="font-weight-bold text-dark text-lg-right text-md-right text-sm-left w-100 px-2">City
            </label>
          </div>
          <div class="input">
            <input type="text" name="agency_city" id="" class="form-control form-control-lg text-dark px-2" placeholder="" aria-describedby="helpId">
          </div>
        </div>

        <div class="d-lg-flex d-md-flex d-sm-block align-items-center justify-content-center my-4">
          <div class="label">
            <label for="" class="font-weight-bold text-dark text-lg-right text-md-right text-sm-left w-100 px-2">Postal/Zip Code
            </label>
          </div>
          <div class="input">
            <input type="text" name="postal_code" id="" class="form-control form-control-lg text-dark px-2" placeholder="" aria-describedby="helpId">
          </div>
        </div>

        <div class="w-100 text-center">
          <button type="submit" name="reg_submit" class="btn btn-success btn-lg px-5 rounded-pill mt-4">
            Submit
          </button>
        </div>




      </form>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script>
    $(".alert").alert();
  </script>
</body>

</html>