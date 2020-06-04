<div class="w-100 py-2" style="background-color: rgb(200, 15, 15);">
  <a href="#body" class="text-center text-white w-100 font-weight-bold text-decoration-none">
    <p class="mb-0 my-1">
      Back To Top
    </p>
  </a>
</div>
<section class="bg-danger text-white px-4 pb-2">
  <footer>
    <!-- Back To Top -->
    <hr class="border-white mb-2 mt-0" style="border-width: 2px;">
    <!-- Our Partners -->
    <div class="w-100 bg-danger d-flex align-items-center">
      <p class="my-3 h4 font-weight-bold">
        Partners Logo :-
      </p>
      <p class="mb-0">
        <a href="http://visiontechnology.co.in" target="_blank" class="ml-3 text-decoration-none">
          <img src="./img/partnerLogo/5b169a23b7c4594b89990563_deloitte_grey.svg" alt="" height="30px" srcset=""
               class="my-sm-2">
        </a>
        <a href="http://visiontechnology.co.in" target="_blank" class="ml-3 text-decoration-none">
          <img src="./img/partnerLogo/Microsoft-CSP-1024x295.png" alt="" height="30px" srcset="" class="my-sm-2">
        </a>
        <a href="http://visiontechnology.co.in" target="_blank" class="ml-3 text-decoration-none">
          <img src="./img/partnerLogo/altmetric-logo.png" alt="" height="30px" srcset="" class="my-sm-2">
        </a>
        <a href="http://visiontechnology.co.in" target="_blank" class="ml-3 text-decoration-none">
          <img src="./img/partnerLogo/firefox_2019_logo.jpg" alt="" height="30px" srcset="" class="my-sm-2">
        </a>
      </p>
    </div>
    <hr class="border-white my-2" style="border-width: 2px;">
    <div class="d-lg-flex d-md-flex d-sm-block justify-content-between">
      <?php
      include './dbh/conn.php';
      $result = mysqli_query($conn, 'SELECT * FROM `continent`ORDER BY `continents` ASC');
      if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
          $continent = $row['continents'];
          $country = mysqli_query($conn, "SELECT * FROM `country` where `continents` = '$continent' ORDER BY `continents`,`country` ASC");
          $li = '';
          while ($country_list = mysqli_fetch_assoc($country)) {
            $country_name = $country_list['country'];
            $li .= '<li><a href="./trips.php?s=' . $country_name . '" class="text-white target="_blank"  font-weight-bold px-1 mx-1 text-decoration-none small">' . $country_name . '</a></li>';
          }
          echo '
                      <div class="px-2 m-1 my-2"> 
                        <p class="text-white font-weight-bold mb-0"><a href="./trips.php?s=' . $continent . '" class="text-white target="_blank"  font-weight-bold px-1 mx-1 text-decoration-none small">' . $continent . '</a></p>
                        <ul class="text-white font-weight-bold px-2">
                          ' . $li . '
                        </ul>
                      </div>
                      ';
        }
      }
      ?>
    </div>


    <hr class="border-white my-2" style="border-width: 2px;">

    <!-- Quick Links -->
    <div class="row">
      <div class="col-lg-4 col-md-8 col-sm-12 pr-lg-4">
        <p class="my-3 h4 font-weight-bold">
          Ed-Wings.com
        </p>
        <p class="text-justify font-weight-bold small">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum quas sequi autem doloremque,
          facilis est,
          quos provident eius sapiente, voluptas iste nisi neque?
        </p>

        <p class="mt-3 mb-1">
          <b class="h5 font-weight-bold">
            Mumbai Address :
          </b>
          <span class="small font-weight-bold">
            7H New Sahakar Nagar,
            Chembur. Mumbai
            India - 400071
          </span>
        </p>
        <p class="mb-2">
          <b class="h5 font-weight-bold">
            Canada Address :
          </b>
          <span class=" small font-weight-bold">
            1730 Albion Road,
            Toronto Canada M9V 1C1
          </span>
        </p>
        <p class="mt-3 small">
          <b><a class="text-white text-decoration-none" href="tel:+919869140080"> +91 9869140080 - India </a><br>
            <a class="text-white text-decoration-none" href="tel:+16476805658 -"> +1 6476805658 - Canada </a><br>
            <a class="text-white text-decoration-none" href="tel:+447500600736"> +44 7500600736 - UK </a><br> </b>
        </p>
        <p>
          <b>
            Email : <a class="text-white text-decoration-none" href="mailto:edwin@ed-wings.com"
               target="_top">edwin@ed-wings.com</a> |
            <a class="text-white text-decoration-none" href="mailto:travel@ed-wings.com"
               target="_top">travel@ed-wings.com</a></b>
        </p>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-12">
        <p class="my-3 h4 font-weight-bold">
          Use Full Links
        </p>
        <p class="mb-0">
          <a href="./e-brochure.php" class="text-white small font-weight-bold">
            <i class="fas fa-caret-right"></i> Download E-Brochure
          </a>
        </p>
        <p class="mb-0">
          <a href="./pressroom.php" target="_blank" class="text-white small font-weight-bold">
            <i class="fas fa-caret-right"></i> Press Room
          </a>
        </p>
        <p class="mb-0">
          <a href="./about-us.php" target="_blank" class="text-white small font-weight-bold">
            <i class="fas fa-caret-right"></i> About Us
          </a>
        </p>
        <p class="mb-0">
          <a href="./user-agreement.php" target="_blank" class="text-white small font-weight-bold">
            <i class="fas fa-caret-right"></i> User Agreement
          </a>
        </p>
        <p class="mb-0">
          <a href="./payment-security.php" target="_blank" class="text-white small font-weight-bold">
            <i class="fas fa-caret-right"></i> Payment Security
          </a>
        </p>
        <p class="mb-0">
          <a href="./doc/privacy-policy.docx" download class="text-white small font-weight-bold">
            <i class="fas fa-caret-right"></i> Privacy Policy
          </a>
        </p>
        <p class="mb-0">
          <a href="feedback.php" target="_blank" class="text-white small font-weight-bold">
            <i class="fas fa-caret-right"></i> Feedback
          </a>
        </p>
        <p class="mb-0">
          <a href="#" target="_blank" class="text-white small font-weight-bold">
            <i class="fas fa-caret-right"></i> Careers
          </a>
        </p>
        <p class="mb-0">
          <a href="#" target="_blank" class="text-white small font-weight-bold">
            <i class="fas fa-caret-right"></i> Investor Relation
          </a>
        </p>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-12  mt-lg-1 mt-md-2 mt-sm-4">
        <p class="my-3 h4 font-weight-bold">
          Company Info
        </p>
        <p class="mb-0">
          <a href="./about-us.php" target="_blank" class="text-white small font-weight-bold">
            <i class="fas fa-caret-right"></i> About Ed-wings
          </a>
        </p>

        <p class="mb-0">
          <a href="./agents/register.php" target="_blank" class="text-white small font-weight-bold">
            <i class="fas fa-caret-right"></i> Become an Affiliate
          </a>
        </p>
        <p class="mb-0">
          <a href="./investor_relation.php" target="_blank" class="text-white small font-weight-bold">
            <i class="fas fa-caret-right"></i> Investor Relation
          </a>
        </p>
        <p class="mb-0">
          <a href="./our_office.php" target="_blank" class="text-white small font-weight-bold">
            <i class="fas fa-caret-right"></i> Our Office
          </a>
        </p>
        <p class="mb-0">
          <a href="./awards.php" target="_blank" class="text-white small font-weight-bold">
            <i class="fas fa-caret-right"></i> Awards
          </a>
        </p>
      </div>
      <div class="col-lg-4 col-md-8 col-sm-12 mt-lg-1 mt-md-2 mt-sm-4">
        <p class="my-3 h4 font-weight-bold">
          News Letter
        </p>

        <p class="small font-weight-bold">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis quae earum perspiciatis, rerum
          consectetur, vero voluptatem doloremque odio qu.
        </p>

        <div>
          <form action="#" method="post">
            <div class="row">
              <div class="col-8 px-1">
                <input type="email" name="email" class="form-control" id=""
                       style="background-color: rgba(255, 255, 255, .0); border:2px solid #fff;">
              </div>
              <div class="col-4 px-1">
                <input type="submit" class="btn btn-outline-light btn-block font-weight-bold" value="Subscribe"
                       style=" border:2px solid #fff;">
              </div>
            </div>
          </form>
        </div>

        <p class="mb-1 my-2 mt-3 h4 font-weight-bold">
          Get Connect
        </p>
        <p>
          <a href="#" target="_blank" class="text-light h2 ml-2 text-decoration-none">
            <i class="fab fa-linkedin"></i>
          </a>
          <a href="#" target="_blank" class="text-light h2 ml-2 text-decoration-none">
            <i class="fab fa-youtube-square"></i>
          </a>
          <a href="#" target="_blank" class="text-light h2 ml-2 text-decoration-none">
            <i class="fab fa-instagram-square"></i>
          </a>
          <a href="#" target="_blank" class="text-light h2 ml-2 text-decoration-none">
            <i class="fab fa-twitter-square"></i>
          </a>
          <a href="#" target="_blank" class="text-light h2 ml-2 text-decoration-none">
            <i class="fab fa-facebook-square"></i>
          </a>
        </p>
      </div>
    </div>

    <hr class="border-white my-2 mt-sm-4" style="border-width: 2px;">

    <!-- Copy Right -->
    <p class="w-100 text-center font-weight-bold small mb-0">
      <span class="mr-4">
        Copyright www.ed-wings.com | <?php echo date('Y'); ?>
      </span>
      <span>
        Powered by <a href="http://crystaloceanmedia.in" class="text-white font-weight-bold text-decoration-none"
           target="_blank" rel="noopener noreferrer">
          Crystal Ocean Groups
      </span>
      </a>
    </p>

  </footer>
</section>