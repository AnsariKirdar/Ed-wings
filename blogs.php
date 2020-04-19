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

  .blog_head_img {
    width: 100%;
    border-radius: 20px;
    margin-top: 20px;
  }

  .blog_subheading {
    font-family: alex;
    font-size: 120%;
  }

  .blog_content {
    font-size: 22px;
    line-height: 46px;
    text-align: justify;
    color: rgb(133, 133, 133);
    font-family: alex;
  }

  .form_heading {
    font-family: northline;
    text-transform: capitalize;
    font-size: 3vw;
    text-align: center;
    margin-bottom: 0px;
  }

  .form_sub_heading {
    text-align: center;
    font-weight: bold;
    font-size: 130%;
    font-family: glad;
  }

  .nani_header {
    font-weight: bold;
    font-size: 4vw;
    font-family: northline;
    text-transform: capitalize;
  }

  .blog_header {
    height: 170px;
    width: 100%;
    background-color: #222;
    border-radius: 8px;
    background-image: url('./img/blogs/Banner.png');
  }

  .profile {
    width: 80px;
    height: 80px;
    border-radius: 10px;
    border: 3px solid #eeee;
    background-color: #222;
    box-shadow: 3px 3px 9px #cccc;
    background-image: url('./img/profile/founder-profile-photo.png');
    background-position: center;
    background-size: cover;
  }

  .comment_box {
    max-width: 700px;
    padding: 15px 25px;
    background-color: #cccc;
    border-radius: 0 20px 20px 20px;
    font-size: 120%;
    font-family: glad;
  }
  </style>
</head>

<body class="" id="body">

  <!-- Nav Bar -->
  <?php include './inc/nav.php'; ?>
  <!-- Nav Bar -->

  <div class="container my-5">
    <div class="container bg-light mb-2 rounded-lg p-2">
      <div class="blog_header">
      </div>

      <div class="px-3 my-3">
        <p class="time_line bg-danger text-white rounded-pill px-4 py-1 font-weight-bold small">
          Thursday, 12 March 2020
        </p>

        <h1 class="blog_heading Northline text-center mb-1" style="font-size: 3.5vw;">
          What to expect in paris
        </h1>
        <p class="blog_subheading text-center font-weight-bold mb-1">
          All your low carb dreams come true with this super quick and flavorful cauliflower gnocchi aglio e olio.
        </p>

        <img src="./img/blogs/89.jpg" class="blog_head_img" alt="">
        <p class="blog_content my-3 mb-4">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae aut nihil suscipit, esse quod tempore
          voluptates tempora odio illo, facilis culpa fugiat vero excepturi! Voluptas, modi? Alias voluptates aliquam
          eligendi enim blanditiis necessitatibus labore? Nostrum nulla unde alias quidem iste eligendi libero
          voluptas perferendis aliquid repellendus iure tempore rerum eum dignissimos dolorem, aliquam ut est maiores
          quia suscipit doloremque itaque esse consequuntur labore? Dolorem alias asperiores suscipit rem adipisci,
          cum saepe corporis blanditiis facilis architecto sit officia vel aliquid iure impedit illum nostrum
          repellendus perferendis numquam maiores placeat id reiciendis neque. Esse, dolor vel quidem ratione incidunt
          recusandae deserunt temporibus.
          <br>
          <br>
          &nbsp;
          &nbsp;
          &nbsp;
          &nbsp;
          &nbsp;
          &nbsp;
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae aut nihil suscipit, esse quod tempore
          voluptates tempora odio illo, facilis culpa fugiat vero excepturi! Voluptas, modi? Alias voluptates aliquam
          eligendi enim blanditiis necessitatibus labore? Nostrum nulla unde alias quidem iste eligendi libero
          voluptas perferendis aliquid repellendus iure tempore rerum eum dignissimos dolorem, aliquam ut est maiores
          quia suscipit doloremque itaque esse consequuntur labore? Dolorem alias asperiores suscipit rem adipisci,
          cum saepe corporis blanditiis facilis architecto sit officia vel aliquid iure impedit illum nostrum
          repellendus perferendis numquam maiores placeat id reiciendis neque. Esse, dolor vel quidem ratione incidunt
          recusandae deserunt temporibus.
        </p>
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
        <img class="card-img-top" style="border-radius: 12px;" src="./img/gallery/thumb/' . $thumb . '" alt="">
        </div>
      ';
          }
          ?>
        </div>
        <p class="like_share_comment my-4 bg-danger px-4 font-weight-bold py-1 text-white rounded-pill">
          Posted by Ed-wings &nbsp; &nbsp; &nbsp; &nbsp;
          <i class="fas fa-heart    " aria-hidden="true"></i> Like &nbsp; &nbsp; &nbsp; &nbsp;
          <i class="fas fa-share" aria-hidden="true"></i>
          Share
        </p>

        <hr>
        <div class="w-100">
          <form action="#" class="w-75 mx-auto" method="post">
            <p class="form_heading">
              Tell Us How Did You Like this Post
            </p>
            <p class="form_sub_heading">
              Your email address will not be published.
            </p>
            <label for="comment" class="font-weight-bold small">
              Comment
            </label>
            <textarea name="" id="comment" rows="5" class="form-control"></textarea>
            <div class="row m-0 p-0">
              <div class="col-lg-6 col-md-6 col-sm-12 pl-0">
                <div class="form-group">
                  <label for="name" class="font-weight-bold small">Name</label>
                  <input type="text" name="name" id="name" class="form-control form-control-lg rounded-pill"
                         placeholder="" aria-describedby="helpId">
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 pr-0">
                <div class="form-group">
                  <label for="email" class="font-weight-bold small">Email</label>
                  <input type="email" name="email" id="email" class="form-control form-control-lg rounded-pill"
                         placeholder="" aria-describedby="helpId">
                </div>
              </div>
            </div>
            <center>
              <button class="btn btn-danger rounded-pill px-5 font-weight-bold btn-lg">
                Post Comment
              </button>
            </center>
          </form>
        </div>
        <hr>
        <div>
          <h1 class="Northline px-4">Your Comment Box</h1>
          <div class="comment_box">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur natus sunt vitae blanditiis! Eos
            perferendis quaerat fuga possimus accusantium repellendus similique error nam, deserunt amet quasi sed
            placeat architecto vero!
          </div>
        </div>
      </div>
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