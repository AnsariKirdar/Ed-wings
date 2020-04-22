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

        <!-- Nav tabs -->
        <ul class="nav nav-pills nav-fill">
          <li class="nav-item active">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
              Continent Control
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
              Country Control
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">
              Itinerary Control
            </a>
          </li>
          <!-- <li class="nav-item">
              <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">Messages</a>
            </li> -->
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">

          <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
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

          <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
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
                        ' . $continent_loop . '
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

          <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">

            <ul class="nav nav-pills mb-3 nav-fill my-2" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="view_itinerary-tab" data-toggle="pill" href="#view_itinerary" role="tab" aria-controls="view_itinerary" aria-selected="true">Add Itinerary</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="view_itinerary_setting-tab" data-toggle="pill" href="#view_itinerary_setting" role="tab" aria-controls="view_itinerary_setting" aria-selected="false">Update / Delete Itinerary</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" id="view_itinerary_setting_s-tab" data-toggle="pill" href="#view_itinerary_setting_s" role="tab" aria-controls="view_itinerary_setting_s" aria-selected="false">Contact</a>
              </li> -->
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="view_itinerary" role="tabpanel" aria-labelledby="view_itinerary-tab">
                <div>
                  <h2 class=" font-weight-bold mt-3">
                    Add Itinerary
                  </h2>
                  <hr>
                  <form action="./add_itinerary.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                      <div class="form-group col-lg-6 col-md-6 col-sm-12">
                        <label for="">Continent</label>
                        <select name="continent" class="form-control form-control-lg" id="" onchange="change_country(this.value)">
                          <option value=""></option>
                          <?php
                          include './../../dbh/conn.php';
                          $result = mysqli_query($conn, 'SELECT * FROM `continent` ORDER BY `continents` ASC');
                          if ($result) {
                            while ($row = mysqli_fetch_assoc($result)) {
                              $continent = $row['continents'];
                              echo "<option value='$continent' class='text-dark'>$continent</option>";
                            }
                          }
                          ?>
                        </select>
                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-12">
                        <label for="">Country</label>
                        <input type="text" id="country" name="country" class="form-control form-control-lg" id="" autocomplete="off">
                        <?php
                        include './../../dbh/conn.php';
                        $result = mysqli_query($conn, 'SELECT * FROM `continent` ORDER BY `continents` ASC');
                        if ($result) {
                          while ($row = mysqli_fetch_assoc($result)) {
                            $continent = $row['continents'];
                            $country = mysqli_query($conn, "SELECT * FROM `country` where `continents` = '$continent' ORDER BY `country`.`country` ASC");
                            $countrylist = '';
                            while ($row1 = mysqli_fetch_assoc($country)) {
                              $country_data = $row1['country'];
                              $countrylist .= " <option value='$country_data'>";
                            }
                            echo "
                          <datalist id='$continent'>
                            $countrylist
                          </datalist>
                        ";
                          }
                        }
                        ?>

                      </div>
                      <div class="form-group col-lg-12 col-md-12 col-sm-12">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control form-control-lg" required>
                      </div>
                      <div class="form-group col-lg-12 col-md-12 col-sm-12">
                        <label for="">Description</label>
                        <input type="text" name="description" class="form-control form-control-lg">
                      </div>


                      <div class="form-group col-lg-12 col-md-12 col-sm-12">
                        <label for="">Itinerary Days Description</label>
                        <div class="row">
                          <div class="col-lg-10" id="days">
                            <div class="row" id="">
                              <div class="col-lg-6 col-md-6 col-sm-10 my-2">
                                <input type="text" name="days_place_name[]" class="form-control form-control-lg" placeholder="Place" aria-describedby="helpId">
                                <p class="text-muted small font-weight-bold px-2">
                                  Please Enter the name of the place you will visit this day
                                </p>
                              </div>
                              <div class="col-lg-6 col-md-6 col-sm-10 my-2">
                                <input type="text" name="days_place_decs[]" class="form-control form-control-lg" placeholder="Place Description" aria-describedby="helpId">
                                <p class="text-muted small font-weight-bold px-2">
                                  Please describe the activities if make sense
                                </p>
                              </div>
                            </div>

                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 my-2 position-relative">
                            <div class="position-absolute px-1" style="bottom: 34px; left:0px;">
                              <a class="btn btn-block btn-lg btn-danger text-white " id="add_day_description" onclick="add_day_description()">
                                <i class="fas fa-plus"></i> Add Days
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="form-group col-lg-12 col-md-12 col-sm-12">
                        <label for="">What's Included?</label>
                        <div class="row">
                          <div class="col-lg-10 col-md-10 col-sm-10 my-2">
                            <div class="row" id="included">
                              <div class="col-12">
                                <input type="text" name="included[]" class="form-control form-control-lg my-2">
                                <p class="text-muted small font-weight-bold px-2">
                                  Pls Describe what is included with this package
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 my-3 position-relative">
                            <div class="position-absolute px-1" style="bottom: 34px; left:0px;">
                              <a class="btn btn-block btn-lg btn-danger text-white" onclick="add_included()">
                                <i class="fas fa-plus"></i> Add More
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="form-group col-lg-6 col-md-6 col-sm-12">
                        <label for="">Accommodations</label>
                        <input type="text" name="accommodation" class="form-control form-control-lg" required>
                        <p class="small font-weight-bold text-muted">
                          Describe Accommodation is it include and what is included
                        </p>
                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-12">
                        <label for="">Meals</label>
                        <input type="text" name="meals" class="form-control form-control-lg" required>
                        <p class="small font-weight-bold text-muted">
                          Describe Meals is it include and what is included
                        </p>
                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-12">
                        <label for="">Transportation</label>
                        <input type="text" name="transportation" class="form-control form-control-lg" required>
                        <p class="small font-weight-bold text-muted">
                          Describe Transportation is it include and what is included
                        </p>
                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-12">
                        <label for="">Visa Service</label>
                        <input type="text" name="visa" class="form-control form-control-lg" required>
                        <p class="small font-weight-bold text-muted">
                          Describe Visa Service is it include and what is included not what are the options
                        </p>
                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-12">
                        <label for="">Tags</label>
                        <input type="text" name="tags" class="form-control form-control-lg" required>
                        <p class="small font-weight-bold text-muted">
                          Describe Visa Service is it include and what is included not what are the options
                        </p>
                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-12">
                        <label for="">Travel Type</label>
                        <input type="text" name="travel_type" class="form-control form-control-lg" required>
                        <p class="small font-weight-bold text-muted">
                          Describe Visa Service is it include and what is included not what are the options
                        </p>
                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-12">
                        <label for="">Activity level</label>
                        <input type="text" name="activity_level" class="form-control form-control-lg" required>
                        <p class="small font-weight-bold text-muted">
                          Describe Visa Service is it include and what is included not what are the options
                        </p>
                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-12">
                        <label for="">Group Size</label>
                        <div class="row">
                          <div class="col-4">
                            <input type="text" name="group_size_min" class="form-control form-control-lg" required>
                            <p class="small font-weight-bold text-muted">
                              Min
                            </p>
                          </div>
                          <div class="col-4">
                            <input type="text" name="group_size_max" class="form-control form-control-lg" required>
                            <p class="small font-weight-bold text-muted">
                              Max
                            </p>
                          </div>
                          <div class="col-4">
                            <input type="text" name="group_size_avg" class="form-control form-control-lg" required>
                            <p class="small font-weight-bold text-muted">
                              Avg
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class="form-group col-lg-12 col-md-12 col-sm-12">
                        <label for="">Price </label>
                        <input type="price" name="price" class="form-control form-control-lg" required>
                        <p class="small font-weight-bold text-muted">
                          All the Price Should Be in USD
                        </p>
                      </div>

                      <div class="form-group col-lg-6 col-md-12 col-sm-12">
                        <label for="">Card Image</label>
                        <input type="file" name="card_img" class="form-control form-control-lg form-control-file" required>
                        <small id="helpId" class="text-muted">We suggest the slider should be the 1900px x 710px and
                          under 700kb for better experience</small>
                      </div>
                      <div class="form-group col-lg-6 col-md-12 col-sm-12">
                        <label for="">Header Image</label>
                        <input type="file" name="header" class="form-control form-control-lg form-control-file" required>
                        <small id="helpId" class="text-muted">We suggest the slider should be the 1900px x 710px and
                          under 700kb for better experience</small>
                      </div>
                      <div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
                        <label for=""></label>
                        <button type="submit" name="upload_itinerary" class="btn btn-success mt-5 font-weight-bold px-4 rounded-pill text-white">
                          Upload Itinerary
                        </button>
                      </div>
                    </div>
                  </form>


                </div>
                <script>
                  function add_included() {
                    $('#included').append(
                      '<div class="col-12" id="included_e"><input type="text" name="included[]" required value="" class="form-control form-control-lg my-2"><p class="text-muted small font-weight-bold px-2">Please Describe what is included with this package</p></div>'
                    );
                  }

                  function add_day_description() {
                    $('#days').append(
                      '<div class="row"><div class="col-lg-6 col-md-6 col-sm-10 my-2"><input type="text" required name="days_place_name[]" class="form-control form-control-lg" value="" placeholder="Place" aria-describedby="helpId"><p class="text-muted small font-weight-bold px-2">Please Enter the name of the place you will visit this day</p></div><div class="col-lg-6 col-md-6 col-sm-10 my-2"><input type="text" name="days_place_decs[]" class="form-control form-control-lg" value="" placeholder="Place Description" required aria-describedby="helpId"><p class="text-muted small font-weight-bold px-2">Please describe the activities if make sense</p></div></div>'
                    );
                  }

                  function change_country(value) {
                    var continent = value;
                    document.getElementById('country').value = '';
                    document.getElementById('country').setAttribute('list', continent);
                  }
                </script>
              </div>
              <div class="tab-pane fade" id="view_itinerary_setting" role="tabpanel" aria-labelledby="view_itinerary_setting-tab">
                <div class="row">
                  <div class="col-3">
                    <div class="bg-white h-100 p-3 px-4" style="border-radius: 13px;">
                      hiiih
                    </div>
                  </div>
                  <div class="col-9">
                    <div class="row">
                      <?php
                      $result = mysqli_query($conn, "SELECT * FROM `itinerary` ORDER BY `itinerary`.`c_date` DESC");
                      while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $id = bin2hex($id);
                        $title = $row['title'];
                        $description = substr($row['description'],0,50).'...';
                        $img = $row['card_img'];
                        $price = $row['price'];
                        $days_place_name = $row['days_place_name'];
                        $days_place_name = explode('-----', $days_place_name  );
                        $days_place_name = count($days_place_name);
                        
                        echo '
                        <div class="col-6">
                          <div class="card overflow-hidden border-0 shadow" style="border-radius: 12px;">
                            <img class="card-img-top" src="./../../img/Itinerary/'.$img. '" alt="">
                            <div class="card-body p-2 pt-2 pb-3">
                              <h4 class="card-title mb-0 font-weight-bold text-danger"><b>' . $title . '</b></h4>
                              <p class="card-text my-0 font-weight-bold h5">Days '.$days_place_name.'</p>
                              <p class="card-text my-0 small font-weight-bold text-muted">
                              '. $description.'
                              </p>
                                <p class="card-text h4 text-danger font-weight-bold my-0">
                                  <b>
                                    Price : '.$price. '/- USD 
                                  </b>
                                </p>
                              <p class="text-center my-2 mt-3">
                                <button class="btn btn-block btn-primary px-5 rounded-pill font-weight-bold ">
                                  <i class="fas fa-plus"></i> Add Gallery Image
                                </button>
                              </p>
                              <p class="text-center my-2 d-flex">
                                <a href="#" class="btn btn-success px-5 rounded-pill w-100 mr-1 font-weight-bold  ">
                                  <i class="fas fa-pen-alt"></i> Update
                                </a>
                                <a href="./itinerary-delete.php?id='.$id.'" class="btn btn-danger px-5 rounded-pill w-100 ml-1 font-weight-bold ">
                                  <i class="fas fa-trash-alt"></i> Delete
                                </a>
                              </p>
                            </div>
                          </div>
                        </div>
                        ';
                      }
                      ?>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="tab-pane fade" id="view_itinerary_setting_s" role="tabpanel" aria-labelledby="view_itinerary_setting_s-tab">...</div> -->
            </div>


          </div>
          <!-- <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">...</div> -->
        </div>

        <!-- Bondurey Line No Code after This -->
      </div>
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
</body>

</html>