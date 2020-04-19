<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <meta name="description" content="">
  <!-- meta tags -->
  <?php include './inc/head-links.php'; ?>
  <style>
    body {
      background-image: url(https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2553&q=80);
    }

    .card {
      border-radius: 20px;
      overflow: hidden;
      padding: 15px;
      background-color: rgba(255, 255, 255, .3);
      border: none;
      border:5px solid rgba(255, 255, 255, .3);
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

    .btn-outline-danger{
border-width: 2px;
    }
  </style>
</head>

<body class="" id="body">

  <!-- Nav Bar -->
  <?php include './inc/nav.php'; ?>
  <!-- Nav Bar -->

  <div class="px-5 my-5">
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
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>