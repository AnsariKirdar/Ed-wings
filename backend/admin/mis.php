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


          <!-- Nav tabs -->
          <ul class="nav nav-pills nav-fill">
            <li class="nav-item active">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                 aria-selected="true">
                Awards Control
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                 aria-selected="false">
                Office Control
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab"
                 aria-controls="settings" aria-selected="false">
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
                  Awards Control
                </h2>
                <form action="./award-upload.php" method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                      <label for="">Name</label>
                      <input type="text" name="name" class="form-control form-control-lg" require>
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                      <label for="">Date</label>
                      <input type="text" name="date" class="form-control form-control-lg" require>
                    </div>
                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                      <label for="">Award Image</label>
                      <input type="file" name="files" class="form-control form-control-lg" require>
                    </div>
                    <div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
                      <label for=""></label>
                      <button type="submit" name="add_awards"
                              class="btn btn-success font-weight-bold px-4 rounded-pill">
                        Add this Award
                      </button>
                    </div>
                  </div>
                </form>
              </div>

              <hr class="mb-1">
              <hr class="my-0 mb-3">

              <div class="row m-0 p-0">
                <?php
                include './../../dbh/conn.php';
                $sql = "SELECT * FROM `award` ORDER BY `award`.`date` ASC";

                $result = mysqli_query($conn, $sql);
                while ($row =  mysqli_fetch_assoc($result)) {
                  $id = $row['id'];
                  $img = $row['img'];
                  $date = $row['date'];
                  $name = $row['name'];
                  echo '
                      <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                          <div class="awards_cards">
                            <img src="./../../img/awards/' . $img . '" alt="' . $img . '" class="w-100"
                                style="border-radius: 15px;">
                            <h5 class="text-danger font-weight-bolder mt-2 text-center mb-0">
                              ' . $name . '
                            </h5>
                            <p class="text-center font-weight-bolder small text-danger mb-0">
                            ' . $date . '
                            </p>
                            
                            <p class="text-center font-weight-bolder small text-danger mb-0">
                          <a href="./awards-delete.php?id=' . $id . '" class="btn btn-block rounded-pill btn-danger btn-sm font-weight-bold"><i class="fas fa-trash-alt "></i> Delete</a>
                            </p>
                          </div>
                        </div>
                      ';
                }


                ?>

              </div>
            </div>

            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <div>
                <h2 class=" font-weight-bold mt-3">
                  Office Control
                </h2>
                <form action="./office-upload.php" method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                      <label for="">Location</label>
                      <input type="text" name="tags" class="form-control form-control-lg" required>
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                      <label for="">Country</label>
                      <input type="text" name="location" class="form-control form-control-lg" required>
                    </div>
                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                      <label for="">Description</label>
                      <textarea name="description" id="" class="form-control form-control-lg" required></textarea>
                    </div>
                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                      <label for="">Award Image</label>
                      <input type="file" name="files" class="form-control form-control-lg" required>
                    </div>
                    <div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
                      <label for=""></label>
                      <button type="submit" name="add_office"
                              class="btn btn-success font-weight-bold px-4 rounded-pill">
                        Add this Office
                      </button>
                    </div>
                  </div>
                </form>
              </div>

              <hr class="mb-1">
              <hr class="my-0 mb-3">

              <div class="row m-0 p-0">
                <div class="row m-0  p-0">

                  <?php
                  $sql = "SELECT * FROM `office`";
                  $result = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $img = $row['img'];
                    $name = $row['name'];
                    $location = $row['location'];
                    $description = $row['description'];

                    echo  '
         <div class="col-lg-3 col-md-4 col-sm-12 text-center my-4">
        <img src="./../../img/office/' . $img . '" class="office_img" alt="' . $img . '" style="width: 90%;    border-radius: 300px;    box-shadow: 0px 0px 30px #000;">
        <h1 class="text-dark my-2 mt-4">
          ' . $name . '
        </h1>
        <h4 class="text-dark my-2">
          ' . $location . '
        </h4>
        <p class="text-dark my-4 text-justify">
        ' . substr($description, 0, 70) . '...
        </p>
         <p class="text-center font-weight-bolder small text-danger mb-0">
                          <a href="./office-delete.php?id=' . $id . '" class="btn btn-block rounded-pill btn-danger btn-sm font-weight-bold"><i class="fas fa-trash-alt "></i> Delete</a>
                            </p>
      </div>
        ';
                  }

                  ?>


                </div>
              </div>
            </div>

            <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">
              ......
            </div>
          </div>
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
</body>

</html>