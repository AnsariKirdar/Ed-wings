<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <meta name="description" content="">
  <!-- meta tags -->
  <?php include './inc/head-links.php'; ?>
  <style>
  .office_img {
    width: 80%;
    border-radius: 300px;
    box-shadow: 0px 0px 30px #000;
  }
  </style>
</head>

<body class="" id="body">

  <!-- Nav Bar -->
  <?php include './inc/nav.php'; ?>
  <!-- Nav Bar -->

  <div class="container py-5">
    <div class="row m-0  p-0">

      <?php
      include './dbh/conn.php';
      $sql = "SELECT * FROM `office`";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
        $img = $row['img'];
        $name = $row['name'];
        $location = $row['location'];
        $description = $row['description'];

        echo  '
         <div class="col-lg-6 col-md-6 col-sm-12 text-center my-4">
        <img src="./img/office/' . $img . '" class="office_img" alt="' . $img . '">
        <h1 class="text-white my-2 mt-4">
          ' . $name . '
        </h1>
        <h4 class="text-white my-2">
          ' . $location . '
        </h4>
        <p class="text-white my-4 text-justify">
        ' . $description . '
        </p>
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