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
          <h2 class=" font-weight-bold">
            Slider Control
          </h2>
          <form action="#" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="form-group col-lg-6 col-md-6 col-sm-12">
                <label for="">Title</label>
                <input type="text" name="title" id="" class="form-control form-control-lg" placeholder="" aria-describedby="helpId" require>
              </div>
              <div class="form-group col-lg-6 col-md-6 col-sm-12">
                <label for="">Description</label>
                <input type="text" name="description" id="" class="form-control form-control-lg" placeholder="" aria-describedby="helpId">
              </div>
              <div class="form-group col-lg-6 col-md-6 col-sm-12">
                <label for="">link</label>
                <input type="text" name="link" id="link" class="form-control form-control-lg" placeholder="" aria-describedby="helpId">
              </div>
              <div class="form-group col-lg-6 col-md-6 col-sm-12">
                <label for="">Slider</label>
                <input type="file" name="slider" id="slider" class="form-control form-control-lg  form-control-file" placeholder="" aria-describedby="helpId" require>
                <small id="helpId" class="text-muted">We suggest the slider should be the 1900px x 710px and under 700kb for better experience</small>
              </div>
              <div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
                <label for=""></label>
                <button type="submit" name="upload_slider" class="btn btn-success font-weight-bold px-4 rounded-pill">
                  Upload This Slider
                </button>
              </div>
            </div>
          </form>
        </div>
        <hr class="mb-1">
        <hr class="my-0 mb-3">
        <div class="card-columns">
          cards Gose here
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