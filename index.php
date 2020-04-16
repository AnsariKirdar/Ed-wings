<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <meta name="description" content="">
  <!-- meta tags -->
  <?php include './inc/head-links.php'; ?>

  <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
  <link rel="stylesheet" href="./css/main.css">
</head>

<body class="" id="body">

  <!-- Nav Bar -->
  <?php include './inc/nav.php'; ?>
  <!-- Nav Bar -->

  <div class="slider_container_box px-0">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <?php
        include './dbh/conn.php';
        $result = mysqli_query($conn, 'SELECT * FROM `slider`ORDER BY `slider`.`c_date` DESC');
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $title = $row['title'];
            $description = $row['description'];
            $link = $row['link'];
            $link_text = $row['link_text'];
            $file = $row['file'];
            $c_date = $row['c_date'];
            echo '
            <div class="swiper-slide" style="background-image:url(./img/banner/' . $file . ');">
            <div class="index-swiper-content text-white">
            <div class="text-center">
            <h1 class="index-sidler-h1">
            ' . $title . '
            </h1>
            <p class="index-sidler-p">
            ' . $description . '
            </p>
            <p class="index-sidler-a">
            <a href="' . $link . '" class="btn btn btn-outline px-5 rounded-pill mt-4">
            ' . $link_text . '
            </a>
            </p>
            </div>
            </div>
            </div>
             ';
          }
        }
        ?>
      </div>
      <!-- Add Arrows -->
      <div class="swiper-button-next index-slider-button"></div>
      <div class="swiper-button-prev index-slider-button"></div>
    </div>
  </div>
  <div class="vh-100"></div>
  <div class="vh-100"></div>

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
  <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
</body>

</html>