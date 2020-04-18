<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <meta name="description" content="">
  <!-- meta tags -->
  <?php include './inc/head-links.php'; ?>

  <link rel="stylesheet" href="./css/main.css">
  <style>
    @font-face {
      font-family: Bitter;
      src: './css/fonts/CharlesWright-Bold.ttf';
    }

    body {
      background-image: url();
    }

    .banner {
      background-image: url(./img/banner/0a34dfe740ebdb6607e8b25eaa9a03b9photo-1502602898657-3e91760cbb34.png);
      background-position: center;
      background-size: cover;
      height: 60vh;
      display: flex;
      align-items: center;
    }

    .banner p {
      max-width: 400px;
    }

    .itinerary .days {
      font-weight: bolder;
      font-size: 110%;
      color: var(--dark);
      /* font-family: Bitter; */
      margin-bottom: 0px;
    }

    .itinerary .days span {
      font-weight: bolder;
      font-size: 110%;
      color: var(--danger);
      margin-right: 20px;
    }

    .itinerary .days_des {
      font-weight: bolder;
      font-size: 90%;
      /* color: var(--danger); */
    }
  </style>
</head>

<body class="" id="body">

  <!-- Nav Bar -->
  <?php include './inc/nav.php'; ?>
  <!-- Nav Bar -->

  <div class="banner">
    <div class="container">
      <h1 class="text-white index-sidler-h1">
        Paris
      </h1>
      <hr class="border-white" style="margin:5px; width:180px; border-width:3px;">
      <h3 class="text-white">
        Overview
      </h3>
      <p class="text-white">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, laudantium totam corrupti quidem labore dolorum? Consectetur eos qui voluptatem, iure eius nihil autem deleniti accusamus iusto asperiores quis obcaecati libero.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, laudantium totam corrupti quidem labore dolorum?
      </p>
    </div>
  </div>
  <div class="container my-3 itinerary">
    <div class="row">
      <div class="col-lg-7">
        <h3 class="text-muted">
          Itinerary
        </h3>
        <p class="days">
          <span>
            Day 1
          </span>
          Paris
        </p>
        <p class="day_des">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis dolorem totam nemo illo distinctio, repellendus eligendi earum dolores, sint numquam saepe nobis quasi. Dignissimos modi at temporibus eius laudantium ullam.
        </p>
        <p class="days">
          <span>
            Day 2
          </span>
          Paris
        </p>
        <p class="day_des">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis dolorem totam nemo illo distinctio, repellendus eligendi earum dolores, sint numquam saepe nobis quasi. Dignissimos modi at temporibus eius laudantium ullam.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis dolorem totam nemo illo distinctio, repellendus eligendi earum dolores, sint numquam saepe nobis quasi. Dignissimos modi at temporibus eius laudantium ullam.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis dolorem totam nemo illo distinctio, repellendus eligendi earum dolores, sint numquam saepe nobis quasi. Dignissimos modi at temporibus eius laudantium ullam.
        </p>
        <p class="days">
          <span>
            Day 3
          </span>
          Paris
        </p>
        <p class="day_des">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis dolorem totam nemo illo distinctio, repellendus eligendi earum dolores, sint numquam saepe nobis quasi. Dignissimos modi at temporibus eius laudantium ullam.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis dolorem totam nemo illo distinctio, repellendus eligendi earum dolores, sint numquam saepe nobis quasi. Dignissimos modi at temporibus eius laudantium ullam.
        </p>
        <p class="days">
          <span>
            Day 4
          </span>
          Paris
        </p>
        <p class="day_des">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis dolorem totam nemo illo distinctio, repellendus eligendi earum dolores, sint numquam saepe nobis quasi. Dignissimos modi at temporibus eius laudantium ullam.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis dolorem totam nemo illo distinctio, repellendus eligendi earum dolores, sint numquam saepe nobis quasi. Dignissimos modi at temporibus eius laudantium ullam.
        </p>
        <p class="days">
          <span>
            Day 5
          </span>
          Paris
        </p>
        <p class="day_des">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis dolorem totam nemo illo distinctio, repellendus eligendi earum dolores, sint numquam saepe nobis quasi. Dignissimos modi at temporibus eius laudantium ullam.
        </p>
        <p class="days">
          <span>
            Day 6
          </span>
          Paris
        </p>
        <p class="day_des">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis dolorem totam nemo illo distinctio, repellendus eligendi earum dolores, sint numquam saepe nobis quasi. Dignissimos modi at temporibus eius laudantium ullam.
        </p>
        <p class="days">
          <span>
            Day 7
          </span>
          Paris
        </p>
        <p class="day_des">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis dolorem totam nemo illo distinctio, repellendus eligendi earum dolores, sint numquam saepe nobis quasi. Dignissimos modi at temporibus eius laudantium ullam.
        </p>
      </div>
      <div class="col-lg-5 overflow-hidden">
        <div class="card text-white bg-danger border-0 rounded-lg" style="box-shadow: 3px 3px 10px #222;">
          <img class="card-img-top" src="./img/Itinerary/photo-1549144511-f099e773c147.jpg" alt="">
          <div class="card-body py-2">
            <h4 class="card-title font-weight-bolder mb-1"><b>7 Days</b></h4>
            <p class="card-text mb-0 font-weight-bold">
              Start City : <b>Paris</b>
            </p>
            <p class="card-text mb-2 font-weight-bold">
              Start City : <b>Paris</b>
            </p>
            <p class="mb-0 small font-weight-bold">
              From <br>
              <span class="font-weight-bold h2">
                <b>
                  USD 1499
                </b>
              </span>
              <span class="small font-weight-normal">
                <b>Per Person</b>
              </span>
            </p>
            <hr class="w-25 border-white my-2" style="border-width: 3px;">
            <p class=" text-center mb-0 h4">
              Active Tour
            </p>
          </div>
          <div class="rounded-bottom text-dark  bg-white text-center px-4">
            <p class="my-2 font-weight-bold h5">
              Tour Specification
            </p>
            <hr class="w-25 border-danger my-2" style="border-width: 3px;">
            <p class="text-left mb-0">
              Travel Type : <span class="text-danger font-weight-bold"> Group</span>
            </p>
            <p class="text-left mb-0">
              Meal Type : <span class="text-danger font-weight-bold"> French</span>
            </p>
            <p class="text-left mb-0">
              Group Size : <span class="text-danger font-weight-bold"> 15 Max</span>
            </p>
            <p class="text-left">
              Minimum Age : <span class="text-danger font-weight-bold"> 16 Years</span>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="w-100 mt-5">
      <h3 class="text-muted text-danger font-weight-bold">
        What is Included
      </h3>
      <ol class="ml-5">
        <li style="list-style:square;" class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo nihil impedit illum optio ad nemo.</li>
        <li style="list-style:square;" class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo nihil impedit illum optio ad nemo.</li>
        <li style="list-style:square;" class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo nihil impedit illum optio ad nemo.</li>
        <li style="list-style:square;" class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo nihil impedit illum optio ad nemo.</li>
        <li style="list-style:square;" class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo nihil impedit illum optio ad nemo.</li>
        <li style="list-style:square;" class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo nihil impedit illum optio ad nemo.</li>
        <li style="list-style:square;" class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo nihil impedit illum optio ad nemo.</li>
        <li style="list-style:square;" class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo nihil impedit illum optio ad nemo.</li>
        <li style="list-style:square;" class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo nihil impedit illum optio ad nemo.</li>
        <li style="list-style:square;" class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo nihil impedit illum optio ad nemo.</li>
      </ol>
      <h5 class="text-muted text-danger font-weight-bold">
        Accommodation
      </h5>
      <p>
        Hotels (7days | 6 Nights)
      </p>
      <h5 class="text-muted text-danger font-weight-bold">
        Meals
      </h5>
      <p>
        Meal At Hotels
      </p>
      <h5 class="text-muted text-danger font-weight-bold">
        Transportaton
      </h5>
      <p>
        Meal At HotelsPrivate vehicle, antique WWII vehicle, canoe, walking
      </p>
      <h5 class="text-muted text-danger font-weight-bold">
        STAFF & EXPERTS
      </h5>
      <p>
        2 CEOs (Chief Experience Officers) throughout, local guides
      </p>
    </div>

  </div>
  <div>
    <img src="https://images.assetsdelivery.com/compings_v2/tupungato/tupungato1901/tupungato190100486.jpg" class="w-100" alt="" srcset="">
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