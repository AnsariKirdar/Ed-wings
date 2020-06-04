<!doctype html>
<html lang="en">

<head>
  <title>
    <?php
    if (isset($_GET['s'])) {
      echo $_GET['s'];
    } else {
      echo 'Ed-wings';
    } ?> Tour</title>
  <meta name="description" content="">
  <!-- meta tags -->
  <?php include './inc/head-links.php'; ?>

  <link rel="stylesheet" href="./css/main.css">
</head>
<style>
body {
  background-image: url();
  background-color: #f0f5f5 !important;
}
</style>

<body class="" id="body">

  <!-- Nav Bar -->
  <?php include './inc/nav.php'; ?>
  <!-- Nav Bar -->

  <div class="">
    <div class="container py-3">
      <div class="row">
        <!-- <div class="col-lg-3 col-md-3 col-sm-4">
          hihihih
        </div> -->
        <div class="col-lg-12 col-md-12 col-sm-12 p-2">

          <?php
          include './dbh/conn.php';
          $sql = "SELECT * FROM `itinerary`";
          // echo $sql;
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result)) {
            echo '<div class="card-columns">';

            while ($row = mysqli_fetch_assoc($result)) {
              $id = $row['id'];
              $id = bin2hex($id);
              $title = $row['title'];
              $description = substr($row['description'], 0, 50) . '...';
              $img = $row['card_img'];
              $tags = $row['tags'];
              $price = $row['price'];
              $country = $row['country'];
              $continents = $row['continents'];
              $days_place_name = $row['days_place_name'];
              $days_place_name = explode('-----', $days_place_name);
              $days_place_name = count($days_place_name);

              echo '
          <div class="card overflow-hidden shadow" style="border-radius:10px;">
              <div>
                <img class="card-img-top rounded-0" src="./img/Itinerary/' . $img . '" alt="" srcset="">
              </div>
              <div class="card-body p-0">
          <div class="bg-light px-2 py-1 small font-weight-bold">
          <a href="trips.php?s=' . $country . '" target="_blank" class="text-decoration-none text-muted">
          ' . $country . '
          </a>
          /
          <a href="trips.php?s=' . $continents . '" target="_blank" class="text-decoration-none text-muted">
          ' . $continents . '
          </a>
          </div>

                <div class="py-0 px-2">
                <h4 class="text-danger font-weight-bolder my-0 py-0">
                  ' . $title . '
                </h4>
                <!-- <h4 class="card-title">Title</h4> -->
                <p class="text-danger font-weight-bold my-0 small mb-1">
                  ' . $days_place_name . ' Days
                </p>
                <p class="text-dark font-weight-bold my-0 small mb-1">
                  ' . substr($description, 0, 30) . '...
                </p>
                <p class="font-weight-bold text-danger my-1">
                  <span class="h5 font-weight-bold">
                    <b>
                      USD ' . $price . '/-
                    </b>
                  </span>
                  <span class="text-secondary small font-weight-bold">
                    Per Person
                  </span>
                </p>
                <p class="">
                  <a href="itinerary.php?q=' . $id . '" class="btn btn-block btn-danger w-100 mx-1 rounded-pill font-weight-bold" target="_blank">
                    More Detail\'s
                  </a>
                </p>
                
                </div>


              </div>
            </div>
          ';
            }
            echo '</div>';
          } else {
            echo '<h1 class="text-center font-weight-bold text-danger">
            <b>
            We apologize Currently We are not operating to  ' . $_GET["s"] . ' 
            </b>
            </h1>';
          }

          ?>
        </div>
      </div>
    </div>
  </div>

  <!-- footer  -->
  <?php include './inc/footer.php'; ?>
  <!-- Footer  -->

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