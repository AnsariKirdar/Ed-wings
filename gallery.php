<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <meta name="description" content="">
  <!-- meta tags -->
  <?php include './inc/head-links.php'; ?>
  <style>
    body {
      background-image: url();
    }

    .card .card_hover {
      position: absolute;
      background-color: rgba(0, 0, 0, .5);
      display: none;
      text-align: center;
      z-index: 2;
      width: 0px;
      height: 0px;
      top: 0px;
      margin: 50%;
      transform-origin: -50%;
      border-radius: 50px;
      overflow: hidden;
      transition-duration: 1s;
      flex-direction: column;
    }

    .card_hover h1,
    .card_hover p,
    .card_hover a {
      margin-top: -1000px;
    }

    .card:hover .card_hover {
      position: absolute;
      display: block;
      background-color: rgba(0, 0, 0, .5);
      z-index: 2;
      width: 100%;
      height: 100%;
      top: 0px;
      padding-bottom: .5rem;
      padding-right: 1rem;
      margin: 0px;
      transform-origin: '';
      border-radius: 12px;
      padding: 2rem;
      transition-duration: 1s;
      flex-direction: column;
    }

    .card:hover .card_hover h1,
    .card:hover .card_hover p,
    .card:hover .card_hover a {
      transition-delay: .5s;
      transition-duration: 1s;
      margin-top: 10px;
    }
  </style>
</head>

<body class="" id="body">

  <!-- Nav Bar -->
  <?php include './inc/nav.php'; ?>
  <!-- Nav Bar -->

  <div class="container my-5">
    <div class="row">
      <div class="col-lg-8 col-sm-12 pr-5">
        <h1 class="font-weight-bold">
          hhihihi
        </h1>
        <p class="h5 font-weight-normal">
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi nesciunt deserunt ad. Ad, deleniti, ratione sed incidunt corrupti autem voluptas?
        </p>
        <p class="h5 font-weight-bold mt-4">
          <span>
            <img src="./img/logo/nav-logo.png" alt="" height="20px" srcset="">
          </span> <br>
          Curated by Ed-wings
        </p>
      </div>
      <div class="col-lg-4 col-sm-12">
        <hr>
        <p class="d-flex font-weight-bold text-dark">
          <span class="px-3"><i class="fas fa-archway"></i></span>
          <span class="w-100">Total Itinerary</span>
          <span class="px-3">3.6K</span>
        </p>
        <p class="d-flex font-weight-bold text-dark">
          <span class="px-3"><i class="fas fa-globe-americas"></i></span>
          <span class="w-100">Total Country</span>
          <span class="px-3">3.6K</span>
        </p>
        <hr>
        <button class="btn btn-lg btn-block btn-danger font-weight-normal">
          Dream - Travel - Repeat
        </button>
      </div>
    </div>
    <hr>
    <div class="card-columns mt-5 border-0">
      <?php
      include './dbh/conn.php';
      $sql = 'SELECT * FROM `gallery` ORDER BY `gallery`.`id` DESC';
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
        $thumb = trim($row['thumb']);
        $title = trim($row['title']);
        $full = trim($row['full_img']);
        echo '
      <div class="card p-0 border-0 position-relative">
        <img class="card-img-top" style="border-radius: 12px;" src="./img/gallery/thumb/'. $thumb . '" alt="">
        <div class="card_hover d-flex align-items-center">
        <a href="./img/gallery/full_img/' . $full . '" target="_blank" class="text-decoration-none">
          <h1 class="text-white">
              ' . $title . '
              </h1>
              </a>
          <p class="text-center">
            <a href="./img/gallery/full_img/' . $full . '" target="_blank" class="btn btn-outline-light px-5 font-weight-bold">
              <i class="fas fa-expand mr-2"></i> Expand
            </a>
          </p>
       </div>
        </div>
      ';
      }
      ?>
    </div>

  </div>

  <!-- footer  -->
  <?php include './inc/footer.php'; ?>
  <!-- Footer  -->

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