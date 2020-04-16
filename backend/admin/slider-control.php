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
      margin: 0 auto;
    }

    .card img {
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
          <form action="./slider-upload.php" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="form-group col-lg-6 col-md-6 col-sm-12">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control form-control-lg" require>
              </div>
              <div class="form-group col-lg-6 col-md-6 col-sm-12">
                <label for="">Description</label>
                <input type="text" name="description" class="form-control form-control-lg">
              </div>
              <div class="form-group col-lg-6 col-md-6 col-sm-12">
                <label for="">link display text</label>
                <input type="text" name="link_text" id="link_text" class="form-control form-control-lg">
              </div>
              <div class="form-group col-lg-6 col-md-6 col-sm-12">
                <label for="">link</label>
                <input type="text" name="link" id="link" class="form-control form-control-lg">
              </div>
              <div class="form-group col-lg-12 col-md-12 col-sm-12">
                <label for="">Slider</label>
                <input type="file" name="slider" id="slider" class="form-control form-control-lg  form-control-file" require>
                <small id="helpId" class="text-muted">We suggest the slider should be the 1900px x 710px and under 700kb
                  for better experience</small>
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
        <div class="row">
          <?php
          include './../../dbh/conn.php';
          $result = mysqli_query($conn, 'SELECT * FROM `slider`ORDER BY `slider`.`c_date` DESC');
          if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
              $dtitle = $row['title'];
              $title = $row['title'];
              $description = $row['description'];
              $link = $row['link'];
              $link_d = $row['link_text'];
              $file = $row['file'];
              $c_date = $row['c_date'];
              $n_id = $row['id'];
              $s_id = bin2hex($n_id);
              echo '
                
          <div class="modal fade" id="a' . $n_id . '" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                  <h5 class="modal-title">Update Slider</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="./slider-update.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                      <div class="form-group col-lg-6 col-md-6 col-sm-12">
                        <label for="">Title</label>
                        <input type="text" name="title"  value="' . $title . '" class="form-control form-control-lg" require>
                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-12">
                        <label for="">Description</label>
                        <input type="text" name="description" value="' . $description . '" class="form-control form-control-lg">
                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-12">
                        <label for="">link display text</label>
                        <input type="text" name="link_text" value="' . $link_d . '" id="link_text" class="form-control form-control-lg">
                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-12">
                        <label for="">link</label>
                        <input type="text" name="link" id="link" value="' . $link . '" class="form-control form-control-lg">
                      </div>
                      <div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
                        <img class="w-50" src="./../../img/banner/' . $file . '" alt="" style="border-radius:20px;">
                      </div>
                      <div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
                       <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck' . $n_id . '"onclick="display_slider_update(' . $n_id . ')">
                      <label class="custom-control-label font-weight-bold text-muted" for="customCheck' . $n_id . '">Check this for update slider image</label>
                       </div>
                      </div>
                      
                      <div class="form-group col-lg-12 col-md-12 col-sm-12" id="slider'.$n_id.'" style="display:none;">
                        <label for="">Slider</label>
                        <input type="file" name="slider" value="../../img/banner/' . $file . '" id="slider' . $n_id . '" class="form-control form-control-lg  form-control-file" require>
                        <small id="helpId" class="text-muted">We suggest the slider should be the 1900px x 710px and under
                          700kb
                          for better experience</small>
                      </div>
                    </div>
                </div>
                <div class="modal-footer">
                  <input type="text" name="s_id" value="'. $n_id.'" id="link" class="form-control form-control-lg" hidden>
                  <button type="reset" class="btn btn-danger font-weight-bold px-4 rounded-pill" data-dismiss="modal"><i class="fas fa-trash-restore"></i> Reset & Close</button>
                  <button type="submit" name="upload_slider" class="btn btn-success font-weight-bold px-4 rounded-pill"> <i class="fas fa-cloud-upload-alt"></i> Update</button>
                </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 my-2 mx-auto">
             <div class="card">
               <img class="card-img-top" src="./../../img/banner/' . $file . '" alt="">
               <div class="card-body px-3 py-2">
                 <h4 class="card-title mb-1">' . substr($title, 0, 23);
              echo '...' . '</h4>
                 <p class="card-text mb-1 small">' . substr($description, 0, 50);
              echo '...' . '</p>
                 <p class="text-center mb-1">
                 <button type="button" data-toggle="modal" data-target="#a' . $n_id . '" class="btn btn-sm text-white btn-primary px-4 rounded-pill"><span> <i class="fas fa-pencil-alt"></i> </span> Edit</button>
                 <a href="./slider-delete.php?s_id=' . $s_id . '" class="btn btn-sm btn-danger px-4 rounded-pill"> <span class="font-weight-normal"><i class="fas fa-trash-alt"></i></span> Delete</a>
                 </p>
               </div>
               </div>
          </div>
        
          ';
            }
          }
          ?>
        </div>


      </div>
      <!-- ^ Bondurey Line No Code after This -->
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
    function display_slider_update(params1) {
var param1 = params1
param1 = 'slider'+param1;
console.log(param1);
document.getElementById(param1).style.display="";
    }
  </script>
</body>

</html>