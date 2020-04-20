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

    .nav {
      background-color: #fff;
      padding: 10px 20px;
      border-radius: 13px;
    }

    .nav-pills .nav-link {
      font-weight: bold;
      color: var(--danger);
    }

    .nav-pills .nav-link.active {
      background-color: var(--danger);
      font-weight: bold;
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
          <!-- Nav tabs -->
          <ul class="nav nav-pills nav-fill">
            <li class="nav-item active">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                aria-selected="true">
                Post Blog
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                aria-selected="false">View Blogs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab"
                aria-controls="messages" aria-selected="false">Messages</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab"
                aria-controls="settings" aria-selected="false">Settings</a>
            </li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <h2 class="font-weight-bold mt-2">
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
                  <p class="text-muted small font-weight-bold mt-1 ml-2">
                    We Highly Recommend to have img with 1000px X 400px
                  </p>
                  </label>
                </div>
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
            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">

              <div class="row">

                <?php
                require './../../dbh/conn.php';

                $result = mysqli_query($conn, "SELECT * FROM `blogs` order by id desc");
                while ($row = mysqli_fetch_assoc($result)) {
                  $id = bin2hex($row['id']);
                  $title = $row['title'];
                  $file = $row['file'];
                  $content = $row['content'];
                  if (strlen($title) > 47) {
                    $title = substr($title, 0, 50);
                  }
                  echo '
                  <div class="col-lg-4 col-md-6 col-m-12">
                  <div class="bg-white my-2 px-2 py-2 rounded-lg d-flex flex-column justify-content-around align-items-center">
                    <div class="w-100">
                    <img src="./../../img/blogs/' . $file . '" class="w-100" alt="">
                    </div>
                    <div class="w-100 px-2">
                    <h3 class="my-3">
                    ' . $title . '
                    </h3>
                    </div>
                    <div class="w-100 px-2">
                    <button class="my-2 rounded-pill font-weight-bold btn btn-block btn-danger" data-toggle="modal" data-target="#add_gallery' . $id . '">
                  <i class="fas fa-plus"></i> Add Image
                </button>
                    <a href="./blogs-delete.php?bid=' . $id . '" class="my-2 rounded-pill font-weight-bold btn btn-block btn-danger">
                  <i class="fas fa-trash-alt"></i> Delete This
                </a>
                </button>
                    <button class="my-2 rounded-pill font-weight-bold btn btn-block btn-success" data-toggle="modal" data-target="#edit' . $id . '">
                  <i class="fas fa-pen-alt"></i> Edit This
                </button>
                    <a href="./../../blogs-display.php?bid=' . $id . '" target="_blank" class="my-2 rounded-pill font-weight-bold btn btn-block btn-success">
                  <i class="fas fa-eye"></i> View This
                </a>
                    </div>
                  </div>
                  </div>

                  <div class="modal fade" id="add_gallery' . $id . '" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title font-weight-bold">' . $title . '</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="./blogs-gallery-add.php" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                        <div class="form-group">
                        <label for="">
                        Add File for Add in this Blogs Gallery
                        </label>
                          <input type="file" class="form-control-lg form-control" name="file" id="customFile">
                        </div>
                        <input type="text" name="blogsId" value="' . $id . '" id="" hidden>
                        </div>
                        <div class="modal-footer">
                          <button type="reset" class="btn  px-5 rounded-pill btn-danger font-weight-bold" data-dismiss="modal"> <i class="fas fa-times"></i> Close</button>
                          <button type="submit" name="add_blog_gallery" class="btn  px-5 rounded-pill btn-success font-weight-bold"> <i class="fas fa-location-arrow"></i> Save</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>

                <div class="modal fade" id="edit' . $id . '" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title font-weight-bold">' . $title . '</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form action="./blogs-edit-add.php" method="post" enctype="multipart/form-data">
                          <div class="modal-body">
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
                              <p class="text-muted small font-weight-bold mt-1 ml-2">
                                We Highly Recommend to have img with 1000px X 400px
                              </p>
                              </label>
                            </div>
                            <div class="form-group">
                              <label for="">Content</label>
                              <textarea name="content" id="" class="form-control form-control-lg summernote"></textarea>
                            </div>
                            <input type="text" name="blogsId" value="' . $id . '" id="" hidden>
                          </div>
                          <div class="modal-footer">
                            <button type="reset" class="btn  px-5 rounded-pill btn-danger font-weight-bold" data-dismiss="modal"> <i
                                class="fas fa-times"></i> Close</button>
                            <button type="submit" name="update_blogs" class="btn  px-5 rounded-pill btn-success font-weight-bold"> <i
                                class="fas fa-location-arrow"></i> Save</button>
                          </div>
                        </form>
                      </div>
                    </div>
                    </div>
                ';
                }
                ?>

              </div>
            </div>
            <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">...</div>
            <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">...</div>
          </div>

        </div>
        <!-- Bondurey Line No Code after This -->
      </div>
    </div>
  </div>

  <script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
      var fileName = e.target.files[0].name;
      $('.custom-file-label').html(fileName);
    });
  </script>

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
        height: 250,
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