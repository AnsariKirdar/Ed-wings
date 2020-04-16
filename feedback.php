<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <meta name="description" content="">
  <!-- meta tags -->
  <?php include './inc/head-links.php'; ?>
  <style>
  body {
    background-image: url(https://images.unsplash.com/photo-1497091071254-cc9b2ba7c48a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1353&q=80);
  }
  </style>
</head>

<body class="" id="body">

  <!-- Nav Bar -->
  <?php include './inc/nav.php'; ?>
  <!-- Nav Bar -->

  <div class=" container mb-5 mt-3 pb-4 pt-4">
    <img src="./img/banner/feedback-banner.jpg" class="img-fluid rounded-lg" alt="">
    <p class="h1 my-5 text-center font-weight-bold text-white">
      We Value Your Feedback and Make it feed Forward !
    </p>
    <form action="./dbh/feedback.php" method="post">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="form-group">
            <label for="name" class="font-weight-bold text-white">Name</label>
            <input type="text" name="name" id="name" class="form-control form-control-lg" placeholder=""
                   aria-describedby="helpId" autofocus>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="form-group">
            <label for="office_name" class="font-weight-bold text-white">Office Name</label>
            <input type="text" name="office_name" id="office_name" class="form-control form-control-lg" placeholder=""
                   aria-describedby="helpId">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="form-group">
            <label for="" class="font-weight-bold text-white">Destination Visited</label>
            <input type="text" name="destination_visited" id="" class="form-control form-control-lg" placeholder=""
                   aria-describedby="helpId">
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="form-group">
            <label for="telephone" class="font-weight-bold text-white">Telephone</label>
            <input type="number" name="telephone" id="telephone" class="form-control form-control-lg" placeholder=""
                   aria-describedby="helpId">
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="form-group">
            <label for="mobile" class="font-weight-bold text-white">Mobile</label>
            <input type="number" name="mobile" id="mobile" class="form-control form-control-lg" placeholder=""
                   aria-describedby="helpId">
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="form-group">
            <label for="email" class="font-weight-bold text-white">Email</label>
            <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder=""
                   aria-describedby="helpId">
          </div>
        </div>
        <div class="col-12"></div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="form-group">
            <label for="departure_data" class="font-weight-bold text-white">Departure Date</label>
            <input type="date" name="departure_data" id="departure_data" class="form-control form-control-lg"
                   placeholder=""
                   aria-describedby="helpId">
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="form-group">
            <label for="like_visit" class="font-weight-bold text-white">Destinations you would like to visit</label>
            <div class="form-group">
              <select class="form-control form-control-lg" name="like_visit" id="">
                <option value="demo-country"></option>
                <option value="demo-country"></option>
                <option value="demo-country"></option>
              </select>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="form-group">
            <label for="suggestion" class="font-weight-bold text-white">Would Like to Share Suggestion</label>
            <textarea name="suggestion" id="suggestion" rows="10" class="form-control form-control-lg"></textarea>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="form-group">
            <label for="" class="font-weight-bold text-white">Would I Travel with Ed-wings.com Again</label>
            <br>
            <label for="yes" class="text-white font-weight-bold h4">
              Yes
              <input type="radio" name="travel_again" value="Yes" class="" id="yes" style="width:17px; height:17px;">
            </label>
            &nbsp;
            &nbsp;
            &nbsp;
            <label for="no" class="text-white font-weight-bold h4">
              No
              <input type="radio" name="travel_again" class="" value="No" id="no" style="width:17px; height:17px;">
            </label>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="form-group">
            <label for="" class="font-weight-bold text-white">Recommend Ed-wings.com to my friends</label>
            <br>
            <label for="yes_f" class="text-white font-weight-bold h4">
              Yes
              <input type="radio" name="recommend" class="" value="Yes" id="yes_f" style="width:17px; height:17px;">
            </label>
            &nbsp;
            &nbsp;
            &nbsp;
            <label for="no_f" class="text-white font-weight-bold h4">
              No
              <input type="radio" name="recommend" class="" value="No" id="no_f" style="width:17px; height:17px;">
            </label>
          </div>
        </div>
        <div class="col-12">
          <button type="submit" name="feedback_name" class="btn btn-success font-weight-bold">Submit This
            feedback</button>
          <button type="reset" class="btn btn-danger font-weight-bold">Reset</button>
        </div>
      </div>
    </form>
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