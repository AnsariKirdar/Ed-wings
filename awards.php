<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <meta name="description" content=""> <!-- meta tags --> <?php include './inc/head-links.php'; ?> <style>
    body {
      background-image: url(./img/bg/awards.jpg);
    }

    .awards_cards {
      border-radius: 15px;
      box-shadow: 3px 3px 10px #ccc, inset 2px 2px 2px #ccc, inset -3px -3px 3px #ccc;
      padding: 5px;
      background-color: rgba(255, 255, 255, .2);
      backdrop-filter: blur(10px);
    }
  </style>
</head>

<body class="" id="body">
  <!-- Nav Bar -->
  <?php include './inc/nav.php'; ?>
  <!-- Nav Bar -->
  <div class=" container mb-5 mt-3 pb-4 pt-4">
    <div class="row m-0 p-0">
      <?php
      include './dbh/conn.php';
      $sql = "SELECT * FROM `award` ORDER BY `award`.`date` ASC";

      $result = mysqli_query($conn, $sql);
      while ($row =  mysqli_fetch_assoc($result)) {
        $img = $row['img'];
        $date = $row['date'];
        $name = $row['name'];
        echo '
     <div class="col-lg-3 col-md-4 col-sm-6 my-2">
        <div class="awards_cards">
          <img src="./img/awards/' . $img . '" alt="' . $img . '" class="w-100"
               style="border-radius: 15px;">
          <h5 class="text-danger font-weight-bolder mt-2 text-center mb-0">
            ' . $name . '
          </h5>
          <p class="text-center font-weight-bolder small text-danger mb-0">
           ' . $date . '
          </p>
          
</div>
      </div>
    ';
      }


      ?>

    </div>

  </div>
  <!-- footer -->
  <?php include './inc/footer.php'; ?>
  <!-- Footer -->
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