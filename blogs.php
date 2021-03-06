<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <meta name="description" content="">
  <!-- meta tags -->
  <?php include './inc/head-links.php'; ?>
  <style>
  body {
    background-image: url('./img/bg/photo-1507525428034-b723cf961d3e.jpg');
  }

  .card {
    border-radius: 20px;
    overflow: hidden;
    padding: 15px;
    background-color: rgba(255, 255, 255, .3);
    border: none;
    border: 5px solid rgba(255, 255, 255, .3);
  }

  .card {
    color: #000;
  }

  .card h1 {
    color: #000;
    font-size: 50px;
    margin-top: 10px;
    margin-bottom: 10px;
    line-height: 40px;
  }

  .card h5 {
    color: #000;
    font-size: 20px;
    line-height: 40px;
  }

  .card img {
    border-radius: 12px;
  }

  .btn-outline-danger {
    border-width: 2px;
  }
  </style>
</head>

<body class="" id="body">

  <!-- Nav Bar -->
  <?php include './inc/nav.php'; ?>
  <!-- Nav Bar -->

  <div class="px-5 my-5">
    <h1 class="text-danger h1 text-center heading mt-5 mb-4 pt-5">
      Dream - Travel - Repeat
    </h1>


    <p class="text-dark text-justify h5 about-des mb-4">
      Chief Coordinator, Outbound Operations Head with over 20 years of experience in tour management functions, with
      diverse operations, product development and marketing forte providing support to principals and clients.
      Business development, acquisitions, destination promotions and team building. <br> <br>

      Extensive travel to 105 countries promoting tourist destinations across the world to visitors from India, United
      States, Canada, United Kingdom, Australia, New Zealand, Singapore etc. managing sightseeing tours, large scale
      meetings, conferences, events and catering. <br>br

      Multilingual in English / Hindi / Malayalam / Marathi. <br>
      Continents covered: Europe, Americas, Africa, Oceana & Asia <br>

    </p>

    <div class="card-columns">
      <?php
      include_once './dbh/conn.php';
      $result = mysqli_query($conn, "SELECT * FROM `blogs` order by id desc");
      while ($row = mysqli_fetch_assoc($result)) {
        $id = bin2hex($row['id']);
        $title = $row['title'];
        $subtitle = $row['sub_title'];
        if (strlen($subtitle) > 300) {
          $subtitle = substr($subtitle, 0, 300) . '...';
        }
        $file = $row['file'];
        echo " 
        <div class='card'>
        <div class='card_box'>
        <img class='card-img-top' src='./img/blogs/$file' alt=''>
        <div class='card-body'>
          <h1 class='card-title Northline'>$title</h1>
          <h5 class='card-text alex text-muted'>$subtitle</h5>
          <p class='card-text text-center'>
          <a href='./blogs-display.php?bid=$id' class='btn btn-lg btn-outline-danger px-5 rounded-pill' target='_blank' rel='noopener noreferrer'>
          <i class='fas fa-eye'> Read More</i>
          </a>
          </p>
        </div></div>
      </div>";
      }
      ?>
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