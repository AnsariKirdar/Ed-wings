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

    .rounded-left-pill {
      border-radius: 52rem 0 0 52rem;
    }

    .rounded-right-pill {
      border-radius: 0 52rem 52rem 0;
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
  <?php include './inc/nav.php'; ?>
  <div class="work_body">
    <div class="h-100 container p-2">
      <div class="bg-light rounded p-3 h-100 working_area">
        <?php include './../../dbh/msg.php'; ?>
        <div>
          <ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Add Packages</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <div>
                <h2 class=" font-weight-bold mt-3">
                  Add Packages
                </h2>
                <form action="./package-upload.php" method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                      <label for="">Name</label>
                      <input type="text" name="name" class="form-control form-control-lg" require>
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                      <label for="">Description</label>
                      <input type="text" name="description" class="form-control form-control-lg" require>
                    </div>
                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                      <label for="">Display Image</label>
                      <input type="file" accept="image/*" name="file" class="form-control form-control-lg" require>
                    </div>
                    <div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
                      <label for=""></label>
                      <button type="submit" name="add_packages" class="btn btn-success font-weight-bold px-4 rounded-pill">
                        Add this Package
                      </button>
                    </div>
                  </div>
                </form>
              </div>
              <hr class="mb-1">
              <hr class="my-0 mb-3">

              <div class="">
                <table class="table table-striped table-sm table-hover text-center">
                  <thead class="thead-inverse">
                    <tr class="tr_border text-uppercase">
                      <th class="bg-danger text-white rounded-left-pill px-4">Sr.No</th>
                      <th class="bg-danger text-white px-4">Packages</th>
                      <th class="bg-danger text-white px-4">description</th>
                      <th class="bg-danger text-white rounded-right-pill px-4">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include './../../dbh/conn.php';
                    $result = mysqli_query($conn, 'SELECT * FROM `packages` ORDER BY `packages` ASC');
                    if ($result) {
                      $a = 1;
                      while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $q = bin2hex($row['id']);
                        $file = $row['file'];
                        $continent = $row['packages'];
                        $description = $row['description'];
                        echo '
                        <tr>
                        <td class="rounded-left-pill">' . $a . '</td>
                        <td class="font-weight-bold text-left">' . $continent . '</td>
                        <td class="">' . substr($description, 0, 80) . '...</td>
                        <td class=" rounded-right-pill">
                        <button type="button" data-toggle="modal" data-target="#b' . $id . '" class="btn btn-sm text-white btn-primary px-4 rounded-pill"><span> <i class="fas fa-pencil-alt"></i> </span> Edit</button>
                        <a href="./package-delete.php?id=' . $q . '" class="btn btn-sm btn-danger px-4 rounded-pill"> <span class="font-weight-normal"><i class="fas fa-trash-alt"></i></span> Delete</a>
                        </td>
                        </tr>
                        <div class="modal fade" id="b' . $id . '" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header bg-danger text-white">
                        <h5 class="modal-title">Update Continent</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        <form action="./continent-update.php" method="post" enctype="multipart/form-data">
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                        <label for="">Name</label>
                        <input type="text" name="name" value="' . $continent . '" class="form-control form-control-lg" require>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                        <label for="">Description</label>
                        <input type="text" name="description" value="' . $description . '" class="form-control form-control-lg" require>
                        </div>
                        </div>
                        <div class="modal-footer">
                        <input type="text" name="s_id" value="' . $id . '" id="link" class="form-control form-control-lg" hidden>
                        <button type="reset" class="btn btn-danger font-weight-bold px-4 rounded-pill" data-dismiss="modal"><i class="fas fa-trash-restore"></i> Reset & Close</button>
                        <button type="submit" name="update_continent" class="btn btn-success font-weight-bold px-4 rounded-pill"> <i class="fas fa-cloud-upload-alt"></i> Update</button>
                        </div>
                        </form>
                        </div>
                        </div>
                        </div>
                        ';
                        $a++;
                      }
                    }
                    ?>
                  </tbody>
                </table>
              </div>

            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
          </div>
        </div>
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