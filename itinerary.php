<!doctype html>
<html lang="en">
<?php
include './dbh/conn.php';
$id = $_GET['q'];
$id = hex2bin($id);
$sql = "SELECT * FROM `itinerary` WHERE id = $id";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);
$title = $data['title'];
$description = $data['description'];
$days_place_name = $data['days_place_name'];
$days_place_decs = $data['days_place_decs'];
$card_img = $data['card_img'];
$header_img = $data['header_img'];
$accommodation = $data['accommodation'];
$meals = $data['meals'];
$transportation = $data['transportation'];
$visa = $data['visa'];
$included = $data['included'];
$activity_level = $data['activity_level'];
$group_size_min = $data['group_size_min'];
$group_size_max = $data['group_size_max'];
$group_size_avg = $data['group_size_avg'];
$travel_type = $data['travel_type'];
$tags = $data['tags'];
$add_by = $data['add_by'];
$continents = $data['continents'];
$country = $data['country'];
$price = $data['price'];
?>

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
      background-position: center;
      background-size: cover;
      height: 60vh;
      display: flex;
      align-items: center;
    }

    .banner p {
      max-width: 680px;
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

  <div class="banner" style="background-image: url('./img/Itinerary/header/<?php echo $header_img; ?>');">
    <div class="container">
      <h1 class="text-white index-sidler-h1">
        <?php echo $title; ?>
      </h1>
      <hr class="border-white" style="margin:5px; width:180px; border-width:3px;">
      <h3 class="text-white">
        Overview
      </h3>
      <p class="text-white">
        <?php echo $description; ?>
      </p>
    </div>
  </div>

  <div class="container my-3 itinerary">
    <div class="row">
      <div class="col-lg-7">
        <h3 class="text-muted">
          Itinerary
        </h3>
        <?php
        $days_place_names = explode('-----', $days_place_name);
        $a = 0;
        $days_place_decss = explode('-----', $days_place_decs);
        foreach ($days_place_names as $key => $value) {
          $values = $days_place_decss[$a];
          $a++;
          echo "
        <p class=\"days\">
        <span>
         Day $a          </span>
        $value
      </p>
        <p class=\"day_des\">
        $values
      </p>
        ";
        }
        ?>
      </div>

      <div class="col-lg-5 overflow-hidden" style="border-radius: 15px;">
        <div class="card text-white bg-danger border-0" style="box-shadow: 3px 3px 10px #222; border-radius:15px;">
          <img class="card-img-top" src="./img/Itinerary/<?php echo $card_img; ?>" alt="" style="border-radius: 15px;">
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
                  USD <?php echo $price; ?>
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
              Travel Type : <span class="text-danger font-weight-bold"> <?php echo $travel_type; ?></span>
            </p>
            <p class="text-left mb-0">
              Meal Type : <span class="text-danger font-weight-bold"> <?php echo $meals; ?></span>
            </p>
            <p class="text-left">
              Group Size : <span class="text-danger font-weight-bold"> <?php echo $group_size_max; ?></span>
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
        <?php
        $includeds = explode('-----', $included);
        foreach ($includeds as $key => $value) {
          echo "<li style=\"list-style:square;\" class=\"text-muted\">$value</li>";
        }
        ?>
      </ol>
      <h5 class="text-muted text-danger font-weight-bold">
        Accommodation
      </h5>
      <p>
        <?php echo $accommodation; ?>
      </p>
      <h5 class="text-muted text-danger font-weight-bold">
        Meals
      </h5>
      <p>
        <?php echo $meals; ?>
      </p>
      <h5 class="text-muted text-danger font-weight-bold">
        Transportaton
      </h5>
      <p>
        <?php echo $transportation; ?>
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