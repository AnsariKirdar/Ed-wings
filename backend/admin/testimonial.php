<?php include './inc/session_check.php'; ?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <?php include './inc/inc.php'; ?>
  <link rel="stylesheet" href="./css/bootstrap.min.css" />
  <style>
    .card {
      border-radius: 10px;
    }
  </style>
</head>

<body>
  <?php include './inc/nav.php'; ?>
  <div class="work_body">
    <div class="h-100 container p-2">
      <div class="bg-light rounded p-3 h-100 working_area">
        <?php include './../../dbh/msg.php'; ?>
        <div>
          <div class="">
            <form action="./testimonials-upload.php" class="" enctype="multipart/form-data" method="post">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <h2 class="font-weight-bolder">
                    Add the Testimonial
                  </h2>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="form-group">
                    <label for="" class="">Name</label>
                    <input type="text" name="name" class="form-control form-control-lg" placeholder="" aria-describedby="helpId">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="form-group">
                    <label for="" class="">Profile</label>
                    <input type="file" name="profile" class="form-control form-control-lg" placeholder="" aria-describedby="helpId">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="form-group">
                    <label for="" class="">From</label>
                    <input type="text" name="from" class="form-control form-control-lg" placeholder="" aria-describedby="helpId">
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="form-group">
                    <label for="" class="">Trip to</label>
                    <input type="text" name="trip_to" class="form-control form-control-lg" placeholder="" aria-describedby="helpId">
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="form-group">
                    <label for="" class="">Testimonial </label>
                    <textarea name="testimonials" rows="6" class="form-control-lg form-control"></textarea>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <div class="form-group text-center">
                    <button type="submit" name="test_upload" class="px-5 rounded-pill btn btn-success font-weight-bold">
                      Upload Testimonial
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <hr class="mb-1">
          <hr class="my-0 mb-3">
          <table class="table table-striped table-sm table-hover text-center">
            <thead class="thead-inverse">
              <tr class="tr_border text-uppercase">
                <th class="bg-danger text-white rounded-left-pill px-4">Sr.No</th>
                <th class="bg-danger text-white px-4">Name</th>
                <th class="bg-danger text-white px-4">From</th>
                <th class="bg-danger text-white px-4">Trip To</th>
                <th class="bg-danger text-white px-4">Testimonials</th>
                <th class="bg-danger text-white rounded-right-pill px-4">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include './../../dbh/conn.php';
              $result = mysqli_query($conn, 'SELECT * FROM `testimonials` ORDER BY `id` DESC');
              if ($result) {
                $a = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                  $id = $row['id'];
                  $q = bin2hex($row['id']);
                  $name = $row['name'];
                  $testimonials = $row['testimonial'];
                  $form_city = $row['from_city'];
                  $trip_to = $row['trip_to'];
                  echo '
                        <tr>
                        <td class="rounded-left-pill">' . $a . '</td>
                        <td class="font-weight-bold text-left">' . $name . '</td>
                        <td class="font-weight-bold text-left">' . $form_city . '</td>
                        <td class="font-weight-bold text-left">' . $trip_to . '</td>
                        <td class="">' . substr($testimonials, 0, 30) . '...</td>
                        <td class=" rounded-right-pill">
                        <a href="./testimonial-delete.php?q=' . $q . '" class="btn btn-sm btn-danger px-4 rounded-pill"> <span class="font-weight-normal"><i class="fas fa-trash-alt"></i></span> Delete</a>
                        </td>
                        </tr>
                                                ';
                  $a++;
                }
              }
              ?>
            </tbody>
          </table>
        </div>
        <!-- Bondurey Line No Code after This -->
      </div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>