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
            Gallery Control
          </h2>
          <hr>
          <form action="./gallery_upload.php" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="form-group col-lg-12 col-md-12 col-sm-12">
                <label for="">Title</label>
                <input type="text" name="title" id="" class="form-control form-control-lg" placeholder=""
                       aria-describedby="helpId" require>
              </div>
              <div class="form-group col-lg-6 col-md-6 col-sm-12">
                <label for="">Thumbnails Image</label>
                <input type="file" name="thumb" id="thumb" class="form-control form-control-lg  form-control-file"
                       placeholder="" aria-describedby="helpId" require>
              </div>
              <div class="form-group col-lg-6 col-md-6 col-sm-12">
                <label for="">Full Size Image</label>
                <input type="file" name="full_img" id="full_img" class="form-control form-control-lg  form-control-file"
                       placeholder="" aria-describedby="helpId" require>
              </div>
              <div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
                <label for=""></label>
                <button type="submit" name="upload_gallery" class="btn btn-success font-weight-bold px-5 rounded-pill">
                  Upload in gallery
                </button>
              </div>
            </div>
          </form>
        </div>
        <hr class="mb-1">
        <hr class="my-0 mb-3">
        <div class="card-columns">
          <?php
          include './../../dbh/conn.php';
          $result = mysqli_query($conn, 'SELECT * FROM `gallery` ORDER BY `id` DESC');
          if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
              $title = $row['title'];
              $title = $row['title'];
              $thumb = trim($row['thumb']);
              $c_date = $row['c_date'];
              $n_id = $row['id'];
              $s_id = bin2hex($n_id);
              echo '
          <div class="modal fade" id="a' . $n_id . '" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                  <h5 class="modal-title">Update Gallery</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="./gallery-update.php" method="post" enctype="multipart/form-data">
                     <div class="row">
              <div class="form-group col-lg-12 col-md-12 col-sm-12">
                <label for="">Title</label>
                <input type="text" name="title" value="'.$title. '" id="" class="form-control form-control-lg" placeholder="" aria-describedby="helpId" require>
                <input type="text" name="s_id" value="'. $s_id.'" hidden id="" class="form-control form-control-lg" placeholder="" aria-describedby="helpId" require>
              </div>
              <div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
                       <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" name="file_upload" id="customCheck' . $n_id . '"onclick="display_slider_update(' . $n_id . ')">
                      <label class="custom-control-label font-weight-bold text-muted" for="customCheck' . $n_id . '">Check this for update slider image</label>
                       </div>
                      </div>
              <div class="form-group col-lg-6 col-md-6 col-sm-12" id="slider'.$n_id.'" style="display:none;">
              <img src="./../../img/gallery/thumb/2a069651f789df22f60e57534f038f4ea.jpg" class="w-100 rounded-lg" alt=".."> 
                <label for="">Thumbnails Image</label>
                <input type="file" name="thumb" id="thumb" class="form-control form-control-lg  form-control-file" placeholder="" aria-describedby="helpId" require>
              </div>
              <div class="form-group col-lg-6 col-md-6 col-sm-12" id="slider1'.$n_id.'" style="display:none;">
              <img src="./../../img/gallery/thumb/2a069651f789df22f60e57534f038f4ea.jpg" class="w-100 rounded-lg" alt=".."> 
                             <label for="">Full Size Image</label>
                <input type="file" name="full_img" id="full_img" class="form-control form-control-lg  form-control-file" placeholder="" aria-describedby="helpId" require>
              </div>
               </div> 
                </div>
                <div class="modal-footer">
                  <input type="text" name="s_id" value="' . $n_id . '" id="link" class="form-control form-control-lg" hidden>
                  <button type="reset" class="btn btn-danger font-weight-bold px-4 rounded-pill" data-dismiss="modal"><i class="fas fa-trash-restore"></i> Reset & Close</button>
                  <button type="submit" name="upload_slider" class="btn btn-success font-weight-bold px-4 rounded-pill text-white"> <i class="fas fa-cloud-upload-alt"></i> Update</button>
                </div>
                </form>
              </div>
            </div>
          </div>

             <div class="card">
               <img class="card-img-top" src="./../../img/gallery/thumb/' . $thumb . '" alt="">
               <div class="card-body px-3 py-2">
                 <h4 class="card-title mb-1">' . substr($title, 0, 23);
              echo '...' . '</h4>
                 <p class="text-center mb-1">
                 <button type="button" data-toggle="modal" data-target="#a' . $n_id . '" class="btn btn-sm text-white btn-primary px-4 rounded-pill"><span> <i class="fas fa-pencil-alt"></i> </span> Edit</button>
                 <a href="./gallery-delete.php?s_id=' . $s_id . '" class="btn btn-sm btn-danger px-4 rounded-pill text-white"> <span class="font-weight-normal"><i class="fas fa-trash-alt"></i></span> Delete</a>
                 </p>
               </div>
               </div>
        
          ';
            }
          }
          ?>
        </div>
        <!-- Bondurey Line No Code after This -->
      </div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
          integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
          integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
          integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>
<script>
function display_slider_update(params1) {
  var param11 = params1
  param1 = 'slider' + param11;
  param2 = 'slider1' + param11;
  console.log(param1);
  document.getElementById(param1).style.display = "";
  document.getElementById(param2).style.display = "";
}
</script>

</html>