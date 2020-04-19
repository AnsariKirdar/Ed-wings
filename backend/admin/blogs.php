<?php require './inc/session_check.php'; ?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <?php require './inc/inc.php'; ?>
  <link rel="stylesheet" href="./css/bootstrap.min.css" />
  <link rel="stylesheet" href="../../vendor/summernote-develop/dist/summernote.css">
  <style>
  .note-dropdown-menu ul li a {
    color: #000;
  }
  </style>
</head>

<body>
  <?php require './inc/nav.php'; ?>
  <div class="work_body">
    <div class="h-100 container p-2">
      <div class="bg-light rounded p-3 h-100 working_area">
        <!-- refired Mg Php -->
        <?php require './../../dbh/msg.php'; ?>
        <div class="">
          <h2 class="font-weight-bold">
            Post a Blog
          </h2>
          <form action="./blogs-upload.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="">Title</label>
              <input type="text" name="title" id="" class="form-control form-control-lg" placeholder=""
                     aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="">Sub Tilte</label>
              <input type="text" name="sub_title" id="" class="form-control form-control-lg" placeholder=""
                     aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="">File</label>
              <input type="file" name="file" id="" class="form-control form-control-lg" placeholder=""
                     aria-describedby="helpId">
              </label>
              <div class="form-group">
                <label for="">Content</label>
                <textarea name="content" id="" class="form-control form-control-lg summernote"></textarea>
              </div>
              <div class="form-group text-center">
                <button class="btn btn-success btn-lg rounded-pill px-5 font-weight-bold" name="upload_blogs">
                  Submit
                </button>
              </div>
          </form>
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
  <script type="text/javascript" src="../../vendor/summernote-develop/dist/summernote.js"></script>

  <script type="text/javascript">
  $(document).ready(function() {
    $('.summernote').summernote({
      height: 200,
      tabsize: 2,
      toolbar: [
        ['Basic', ['style', 'fontsize']],
        ['color', ['forecolor']],
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['block', ['ul', 'ol', 'paragraph']],
        ['media', ['table', 'hr']],
        ['height', ['undo', 'redo']]
      ]
    });
  });
  </script>
</body>

</html>