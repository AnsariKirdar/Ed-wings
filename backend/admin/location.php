<?php include './inc/session_check.php'; ?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <?php include './inc/inc.php'; ?>
  <link rel="stylesheet" href="./css/bootstrap.min.css" />
  <style>
  .rounded-left-pill {
    border-radius: 52rem 0 0 52rem;
  }

  .rounded-right-pill {
    border-radius: 0 52rem 52rem 0;
  }
  </style>
</head>

<body>
  <?php include './inc/nav.php'; ?>
  <div class="work_body">
    <div class="h-100 container p-2">
      <div class="bg-light rounded p-3 h-100 working_area">
        <?php include './../../dbh/msg.php'; ?>
        <nav class="navbar navbar-expand-sm navbar-dark bg-white rounded-lg">
          <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
                  aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
              <li class="nav-item">
                <a class="nav-link font-weight-bold text-danger" type="button" onclick="continent()">Continents<span
                        class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link font-weight-bold text-danger" type="button" onclick="country()">Country</a>
              </li>
            </ul>
          </div>
        </nav>
        <div id="continent" class="">
          <div>
            <h2 class=" font-weight-bold mt-3">
              Continent Control
            </h2>
            <form action="./continent-upload.php" method="post">
              <div class="row">
                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                  <label for="">Name</label>
                  <input type="text" name="name" class="form-control form-control-lg" require>
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                  <label for="">Description</label>
                  <input type="text" name="description" class="form-control form-control-lg" require>
                </div>
                <!-- <div class="form-group col-lg-12 col-md-12 col-sm-12">
                  <label for="">Description</label>
                  <input type="file" name="file" class="form-control form-control-lg" require>
                </div> -->
                <div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
                  <label for=""></label>
                  <button type="submit" name="add_location" class="btn btn-success font-weight-bold px-4 rounded-pill">
                    Add this continent
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
                  <th class="bg-danger text-white px-4">Continents</th>
                  <th class="bg-danger text-white px-4">description</th>
                  <th class="bg-danger text-white rounded-right-pill px-4">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include './../../dbh/conn.php';
                $result = mysqli_query($conn, 'SELECT * FROM `continent` ORDER BY `continents` ASC');
                if ($result) {
                  $a = 1;
                  while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $q = bin2hex($row['id']);
                    $continent = $row['continents'];
                    $description = $row['description'];
                    echo '
                        <tr>
                        <td class="rounded-left-pill">' . $a . '</td>
                        <td class="font-weight-bold text-left">' . $continent . '</td>
                        <td class="">' . substr($description, 0, 80) . '...</td>
                        <td class=" rounded-right-pill">
                        <button type="button" data-toggle="modal" data-target="#b' . $id . '" class="btn btn-sm text-white btn-primary px-4 rounded-pill"><span> <i class="fas fa-pencil-alt"></i> </span> Edit</button>
                        <a href="./continent-delete.php?q=' . $q . '" class="btn btn-sm btn-danger px-4 rounded-pill"> <span class="font-weight-normal"><i class="fas fa-trash-alt"></i></span> Delete</a>
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



        <div id="country" style="display: none;">
          <div>
            <h2 class=" font-weight-bold mt-3">
              Country Control
            </h2>
            <form action="./country-upload.php" method="post">
              <div class="row">
                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                  <label for="">Continent</label>
                  <select name="continents" id="" class="form-control form-control-lg" require>
                    <?php
                    include './../../dbh/conn.php';
                    $result = mysqli_query($conn, 'SELECT * FROM `continent`ORDER BY `continents` ASC');
                    if ($result) {
                      $a = 1;
                      $continent_loop = '';
                      while ($row = mysqli_fetch_assoc($result)) {
                        $continent = $row['continents'];
                        $continent_loop .= '<option value="' . $continent . '">' . $continent . '</option>';
                        echo '
                      <option value="' . $continent . '">' . $continent . '</option>
                      ';
                      }
                    } ?>
                  </select>
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                  <label for="">Name</label>
                  <input type="text" name="country" class="form-control form-control-lg" require>
                </div>
                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                  <label for="">Description</label>
                  <input type="text" name="description" class="form-control form-control-lg" require>
                </div>
                <div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
                  <label for=""></label>
                  <button type="submit" name="add_country" class="btn btn-success font-weight-bold px-4 rounded-pill">
                    Add this Country
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
                  <th class="bg-danger text-white px-4">Continents</th>
                  <th class="bg-danger text-white px-4">Country</th>
                  <th class="bg-danger text-white px-4">description</th>
                  <th class="bg-danger text-white rounded-right-pill px-4">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include './../../dbh/conn.php';
                $result = mysqli_query($conn, 'SELECT * FROM `country` ORDER BY `continents`,`country` ASC');
                if ($result) {
                  $a = 1;
                  while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $q = bin2hex($row['id']);
                    $continent = $row['continents'];
                    $country = $row['country'];
                    $description = $row['description'];
                    echo '
                        <tr>
                        <td class="rounded-left-pill">' . $a . '</td>
                        <td class="font-weight-bold text-left">' . $continent . '</td>
                        <td class="font-weight-bold text-left">' . $country . '</td>
                        <td class="">' . substr($description, 0, 50) . '...</td>
                        <td class=" rounded-right-pill">
                        <button type="button" data-toggle="modal" data-target="#a' . $id . '" class="btn btn-sm text-white btn-primary px-4 rounded-pill"><span> <i class="fas fa-pencil-alt"></i> </span> Edit</button>
                        <a href="./country-delete.php?q=' . $q . '" class="btn btn-sm btn-danger px-4 rounded-pill"> <span class="font-weight-normal"><i class="fas fa-trash-alt"></i></span> Delete</a>
                        </td>
                        </tr>
                        <div class="modal fade" id="a' . $id . '" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header bg-danger text-white">
                        <h5 class="modal-title">Update Continent</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        <form action="./country-update.php" method="post" enctype="multipart/form-data">
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                        <label for="">Country</label>
                        <input type="text" name="country" value="' . $country . '" class="form-control form-control-lg" require>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                        <label for="">Continent</label>
                         <select name="continent" id="" class="form-control form-control-lg" require>
                        '. $continent_loop.'
                        </select>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                        <label for="">Description</label>
                        <input type="text" name="description" value="' . $description . '" class="form-control form-control-lg" require>
                        </div>
                        </div>
                        <div class="modal-footer">
                        <input type="text" name="s_id" value="' . $id . '" id="link" class="form-control form-control-lg" hidden>
                        <button type="reset" class="btn btn-danger font-weight-bold px-4 rounded-pill" data-dismiss="modal"><i class="fas fa-trash-restore"></i> Reset & Close</button>
                        <button type="submit" name="update_country" class="btn btn-success font-weight-bold px-4 rounded-pill"> <i class="fas fa-cloud-upload-alt"></i> Update</button>
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
  <script>
  function country() {
    document.getElementById('country').style.display = '';
    document.getElementById('continent').style.display = 'none';
  }

  function continent() {
    document.getElementById('continent').style.display = '';
    document.getElementById('country').style.display = 'none';
  }
  </script>
</body>

</html>