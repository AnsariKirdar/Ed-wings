<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <meta name="description" content="">
  <!-- meta tags -->
  <?php include './inc/head-links.php'; ?>

  <link rel="stylesheet" href="./css/swiper.min.css">
  <link rel="stylesheet" href="./css/main.css">
  <style>
    .top_destination .swiper-container-2 {
      width: 100%;
      height: 100%;
      margin-bottom: 50px;
    }

    .top_destination .swiper-slide {
      text-align: center;
      font-size: 18px;
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      /* height: 200px; */
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
      border-radius: 12px;
      background-color: aliceblue;
      padding: 10px;
    }

    .swiper-container-3 {
      width: 100%;
      height: 100%;
    }

    .swiper-container-3 .swiper-slide {
      text-align: center;
      font-size: 18px;
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
      border-radius: 12px;
      background-color: aliceblue;
      padding: 10px;
    }

    .form-control:focus,
    .form-control:active,
    .form-control {
      background-color: transparent !important;
      color: #fff;
      font-weight: bold;
    }
  </style>
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
  <div class="pb-5">

    <div class="container my-5">
      <h1 class="text-center text-white font-weight-bold">
        Top Destinations
      </h1>
      <div class="top_destination overflow-hidden px-5" id="top_destination">
        <div class="swiper-container-2">
          <div class="swiper-wrapper">
            <div class="swiper-slide">Slide 1</div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
            <div class="swiper-slide">Slide 4</div>
            <div class="swiper-slide">Slide 5</div>
            <div class="swiper-slide">Slide 6</div>
            <div class="swiper-slide">Slide 7</div>
            <div class="swiper-slide">Slide 8</div>
            <div class="swiper-slide">Slide 9</div>
            <div class="swiper-slide">Slide 10</div>
          </div>
          <!-- Add Arrows
          <div class="text-white swiper-button-next swiper-button-next2"></div>
          <div class="text-white  swiper-button-prev swiper-button-prev2"></div> -->
        </div>
      </div>
    </div>

    <div class="container my-5">
      <h1 class="text-center text-white font-weight-bold">
        Tranding Destinations
      </h1>
      <div class="top_destination overflow-hidden px-5" id="top_destination">
        <div class="swiper-container-3">
          <div class="swiper-wrapper">
            <div class="swiper-slide">Slide 1</div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
            <div class="swiper-slide">Slide 4</div>
            <div class="swiper-slide">Slide 5</div>
            <div class="swiper-slide">Slide 6</div>
            <div class="swiper-slide">Slide 7</div>
            <div class="swiper-slide">Slide 8</div>
            <div class="swiper-slide">Slide 9</div>
            <div class="swiper-slide">Slide 10</div>
          </div>
          <!-- Add Arrows
          <div class="text-white swiper-button-next swiper-button-next-3"></div>
          <div class="text-white swiper-button-prev swiper-button-prev-3"></div> -->
        </div>
      </div>
    </div>
  </div>

  <div class="bg-white my-5 py-5">
    <h1 class="text-center text-black font-weight-bold">
      Ed Wings Explore Interaries
    </h1>
    <div class="row mx-0 px-0 my-4 py-3">
      <?php
      $result = mysqli_query($conn, "SELECT * FROM `itinerary`ORDER BY rand() LIMIT 12");
      while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $id = bin2hex($id);
        $title = $row['title'];
        $description = substr($row['description'], 0, 50) . '...';
        $img = $row['card_img'];
        $tags = $row['tags'];
        $price = $row['price'];
        $days_place_name = $row['days_place_name'];
        $days_place_name = explode('-----', $days_place_name);
        $days_place_name = count($days_place_name);
        echo '
<div class="col-lg-3 col-md-4 col-sm-6 my-2">
  <div class="card overflow-hidden shadow" style="border-radius:15px;">
    <div>
      <img class="card-img-top rounded-0" src="./img/Itinerary/' . $img . '" alt="" srcset="">
    </div>
    <div class="card-body">
      <h3 class="text-danger font-weight-bolder my-0">
        ' . $title . '
      </h3>
      <!-- <h4 class="card-title">Title</h4> -->
      <p class="text-danger font-weight-bold my-0">
        ' . $days_place_name . ' Days
      </p>
      <p class="text-secondary font-weight-bold my-2 my-0">
       ' . $tags . '
      </p>
      <p class="font-weight-bold text-danger my-2 my-0">
        <span class="h4 font-weight-bolder">
          <b>
            USD ' . $price . '/-
          </b>
        </span>
        <span class="text-secondary small font-weight-bold">
          Per Person
        </span>
      </p>
      <p class="d-flex justify-content-around my-0">
        <button class="btn btn btn-danger w-100 mx-1 rounded-pill font-weight-bold">
          More Detailes
        </button>
        <button class="btn btn btn-danger w-100 rounded-pill mx-1 font-weight-bold">
          Buy Now
        </button>
      </p>
    </div>
  </div>
</div>
  ';
      }
      ?>
      <div class="col-lg-12 col-md-12 col-sm-12 my-2">
        <p class="text-center">
          <a href="#" target="_blank" rel="noopener noreferrer" class="btn btn-danger px-5 rounded-pill font-weight-bold">
            SEE ALL ITINERARIES
          </a>
        </p>
      </div>
    </div>
  </div>

  <div class="my-5 py-5">
    <div class="container my-5 py-4">
      <p class="text-center text-white h1 font-weight-bolder">
        Dream -Travel - Repeat
      </p>
      <p class="px-5 text-white text-center h5">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet ipsa repellat fugiat, sed consectetur iste
        necessitatibus praesentium temporibus minus et ea officia possimus ut sunt voluptate in. Eius, cum debitis.
      </p>
      <div class="container row text-white my-5">
        <div class="col-lg-3 col-md-3 col-sm-6">
          <p class="text-center display-4">
            <i class="fas fa-users" aria-hidden="true"></i>
          </p>
          <h3 class="text-center h5 font-weight-bold text-uppercase my-0 mt-3">
            Group Internetires<br>
          </h3>
          <p class="small text-center text-uppercase">
            Company Tours and Bonus
          </p>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6">
          <p class="text-center display-4">
            <i class="fas fa-award"></i>
          </p>
          <h3 class="text-center h5 font-weight-bold text-uppercase my-0 mt-3">
            Best Prices<br>
          </h3>
          <p class="small text-center text-uppercase">
            Fit to Your Buget
          </p>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6">
          <p class="text-center display-4">
            <i class="fas fa-umbrella-beach" aria-hidden="true"></i>
          </p>
          <h3 class="text-center h5 font-weight-bold text-uppercase my-0 mt-3">
            Hand Pick Trips<br>
          </h3>
          <p class="small text-center text-uppercase">
            Fit to Your Expectation
          </p>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6">
          <p class="text-center display-4">
            <i class="fas fa-user-tie" aria-hidden="true"></i>
          </p>
          <h3 class="text-center h5 font-weight-bold text-uppercase my-0 mt-3">
            Expert Support<br>
          </h3>
          <p class="small text-center text-uppercase">
            to Ensure Convinces
          </p>
        </div>

      </div>
      <p class="text-center mt-3">
        <a href="#" class="btn btn-lg btn-outline-light px-5 rounded-pill font-weight-bold">Start Planning Now</a>
      </p>
    </div>
  </div>
  <div class="container overflow-hidden my-5 py-5">
    <p class="text-uppercase text-white font-weight-bold text-center h1 mb-5 pb-4">
      Testimonials
    </p>
    <div class="testimonail swiper-container">
      <div class="swiper-wrapper text-white">
        <?php
        $result = mysqli_query($conn, "SELECT * FROM `testimonials`ORDER BY rand() LIMIT 10");
        while ($row = mysqli_fetch_assoc($result)) {
          $file = trim($row['file']);
          $name = $row['name'];
          $from_city = $row['from_city'];
          $trip_to = $row['trip_to'];
          $testimonial = $row['testimonial'];
          echo '
  <div class="swiper-slide my-5">
    <div class="mx-auto" style="width:80%;">
      <div class="text-white text-center">
        <span class="h1 d-block text-left"><i class="fas fa-quote-left" aria-hidden="true"></i></span>
       ' . $testimonial . '
        <span class="h1 d-block text-right"><i class="fas fa-quote-right" aria-hidden="true"></i></span>
      </div>
      <div class="profile p-1 rounded-circle border-danger text-center">
        <img src="./img/testimonial/' . $file . '" style="width:80px; border-radius:60px;" alt="">
        <p class="text-white mt-3 h4">
          ' . $name . '
        </p>
        <p class="small text-white font-weight-bold">
          <span>
            <span class="text-danger font-weight-bold">
              From
            </span>
           ' . $from_city . '
          </span>
          <br>
          <span>
            <span class="text-danger font-weight-bold">
              Trip To
            </span>
           ' . $trip_to . '
          </span>
        </p>
      </div>
    </div>
  </div>
  ';
        }
        ?>


      </div>
      <!-- Add Arrows -->
      <div class="text-white swiper-button-next testimonail-swiper-button-next "></div>
      <div class="text-white swiper-button-prev testimonail-swiper-button-prev "></div>

    </div>
  </div>
  <div class="d-lg-flex d-md-flex d-sm-block justify-content-center align-items-center flex-sm-column flex-lg-row flex-md-column py-5 my-5">
    <div class="container order-md-1 order-lg-0 order-sm-1 my-4">
      <center>
        <img src="./img/logo/nav-logo.png" width="400px" alt="">
      </center>
      <br>
      <p class="h2 font-weight-bold text-light text-center text-uppercase">
        Dream - TRavel - Repeat
      </p>
      <div class="d-flex mt-5 text-light justify-content-around">
        <div class="w-100">
          <p class="w-100 h2 text-center">
            <span class="">
              <i class="fas fa-map-marked-alt" aria-hidden="true"></i>
            </span>
          </p>
          <p class="text-center mt-3 text-capitalize font-weight-bold">
            Mumbai :<br>
            7H New Sahakar Nagar,<br>
            Chembur. Mumbai <br>
            India - 400071
          </p>
        </div>
        <div class="w-100">
          <p class="w-100 h2 text-center">
            <span class="">
              <i class="fab fa-canadian-maple-leaf" aria-hidden="true"></i>
            </span>
          </p>
          <p class="text-center mt-3 text-capitalize font-weight-bold">
            Canada :<br>
            1730 Albion Road, <br>
            Toronto Canada M9V 1C1<br>
          </p>
        </div>
      </div>
      <div class="d-flex mt-5 text-light justify-content-around">
        <div class="w-100">
          <p class="w-100 h2 text-center">
            <span class="">
              <i class="fas fa-phone" aria-hidden="true"></i>
            </span>
          </p>
          <p class="text-center mt-3 text-capitalize font-weight-bold">
            +91 9869140080 - India <br>+16476805658 - Canada <br>+44 7500600736 - UK
          </p>
        </div>
        <div class="w-100">
          <p class="w-100 h2 text-center">
            <span class="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </span>
          </p>
          <p class="text-center mt-3 text-lowercase font-weight-bold">
            edwin@ed-wings.com <br>travel@ed-wings.com
          </p>
        </div>
      </div>
      <div class="d-flex mt-5 text-light">

        <p class="h1 m-3 text-center w-100">
          <span class="m-3">
            <i class="fab fa-facebook-square" aria-hidden="true"></i>
          </span>
          <span class="m-3">
            <i class="fab fa-instagram" aria-hidden="true"></i>
          </span>
          <span class="m-3">
            <i class="fab fa-linkedin" aria-hidden="true"></i>
          </span>
          <span class="m-3">
            <i class="fab fa-pinterest-square" aria-hidden="true"></i>
          </span>
          <span class="m-3">
            <i class="fab fa-twitter-square" aria-hidden="true"></i>
          </span>
        </p>
      </div>
    </div>
    <div class="container order-md-0 order-lg-1 order-sm-0 my-4">
      <p for="" class=" text-light text-center font-weight-bold h1">Leave Us A Message</p>
      <br>
      <br>
      <form action="index.php" method="post" class="w-75 mx-auto">
        <div class="form-group">
          <label for="" class=" text-light text-center font-weight-bold h3 w-100">Your Name</label>
          <input type="text" name="name" id="" class="form-control form-control-lg bg-transparent rounded-pill" placeholder="" aria-describedby="helpId" style="border-width: 2px;">
        </div>
        <div class="form-group">
          <label for="" class=" text-light text-center font-weight-bold h3 w-100">Contact Number</label>
          <input type="text" name="contact" id="" class="form-control form-control-lg bg-transparent rounded-pill" placeholder="" aria-describedby="helpId" style="border-width: 2px;">
        </div>
        <div class="form-group">
          <label for="" class=" text-light text-center font-weight-bold h3 w-100">Email Address</label>
          <input type="text" name="email" id="" class="form-control form-control-lg bg-transparent rounded-pill" placeholder="" aria-describedby="helpId" style="border-width: 2px;">
        </div>
        <div class="form-group">
          <label for="" class=" text-light text-center font-weight-bold h3 w-100">Message</label>
          <textarea name="massage" class="form-control rounded-lg form-control-lg bg-transparent border-light w-100" id="" rows="5" style="border-width: 2px;"></textarea>
        </div>
        <center>
          <button type="submit" class="btn btn-outline-light btn-lg px-5 font-weight-bold rounded-pill text-uppercase">
            Level Us a Message
          </button>
        </center>
      </form>
    </div>
  </div>

  <!-- <div class="vh-100"></!--> -->

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
  <script src="./js/swiper.min.js"></script>
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      loop: true,
      // effect: 'fade',
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

    var swiper = new Swiper('.swiper-container-2', {
      slidesPerView: 1,
      spaceBetween: 10,
      loop: true,
      breakpoints: {
        '@0.00': {
          slidesPerView: 2,
          spaceBetween: 10,
        },
        '@0.75': {
          slidesPerView: 3,
          spaceBetween: 20,
        },
        '@1.00': {
          slidesPerView: 4,
          spaceBetween: 20,
        },
        '@1.50': {
          slidesPerView: 5,
          spaceBetween: 10,
        },
      },
      // navigation: {
      //   nextEl: '.swiper-button-next2',
      //   prevEl: '.swiper-button-prev2',
      // },
    });

    var swiper = new Swiper('.swiper-container-3', {
      slidesPerView: 1,
      spaceBetween: 10,
      loop: true,
      breakpoints: {
        '@0.00': {
          slidesPerView: 2,
          spaceBetween: 10,
        },
        '@0.75': {
          slidesPerView: 3,
          spaceBetween: 20,
        },
        '@1.00': {
          slidesPerView: 4,
          spaceBetween: 20,
        },
        '@1.50': {
          slidesPerView: 5,
          spaceBetween: 10,
        },
      },
      // navigation: {
      //   nextEl: '.swiper-button-next-3',
      //   prevEl: '.swiper-button-prev-3',
      // },
    });

    var swiper = new Swiper('.testimonail', {
      slidesPerView: 1,
      spaceBetween: 0,
      loop: true,
      pagination: {
        el: '.testimonail-swiper-pagination'
      },
      navigation: {
        nextEl: '.testimonail-swiper-button-next',
        prevEl: '.testimonail-swiper-button-prev',
      },
    });
  </script>
</body>

</html>