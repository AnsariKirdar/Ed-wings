 <section class="fixed-top">
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
     <a class="navbar-brand" href="#">
       <img src="./img/logo/nav-logo.png" height="30" alt="">
     </a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav ml-auto font-weight-bold">
         <li class="nav-item active">
           <a class="nav-link text-danger" href="./index.php">Home</a>
         </li>
         <li class="nav-item active">
           <a class="nav-link text-danger" href="#">Holidays</a>
         </li>
         <li class="nav-item active">
           <a class="nav-link text-danger" href="#">Steals Deals</a>
         </li>
         <li class="nav-item active">
           <a class="nav-link text-danger" href="./blogs.php">Blogs</a>
         </li>
         <li class="nav-item active">
           <a class="nav-link text-danger" href="./gallery.php">Gallery</a>
         </li>
         <li class="nav-item active">
           <a class="nav-link text-danger" href="#">Special Tours</a>
         </li>

         <li class="nav-item active">
           <a type="button" class="nav-link text-danger" onclick="display_dropdown()">Country Tours <i class="fas fa-caret-down"></i></a>
         </li>

         <li class="nav-item active">
           <a class="nav-link text-danger" href="./about-us.php">About Us</a>
         </li>
         <li class="nav-item active">
           <a class="nav-link text-danger" href="./contact-us.php">Contact Us</a>
         </li>
       </ul>
       <form class="form-inline my-2 ml-3 my-lg-0" action="./trips.php" method="GET">
         <input class="form-control mr-sm-2 rounded-pill" type="search" placeholder="Search" name="s" aria-label="Search" style="background-color: #fff !important; color:black; font-weight:normal;">
         <button class="btn btn-success font-weight-bold my-2 my-sm-0 px-5 rounded-pill" type="submit">Search</button>
         <a href="./login.php" class="btn btn-danger my-2 my-sm-0 px-4 rounded-pill font-weight-bold mx-2 mr-4">Login /Sign up</a>
       </form>
     </div>
   </nav>
   <section class="px-4 py-3" id="display_dropdown" style="display: none; border-top:3px solid var(--danger); background-color:rgba(255, 255,255,1)">
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
              $li .= '<li><a href="#" class="text-danger font-weight-bold px-1 mx-1 text-decoration-none">' . $country_name . '</a></li>';
            }
            echo '
                      <div class="px-2 m-1 my-2">
                        <h5 class="text-danger font-weight-bold">' . $continent . '</h5>
                        <ul class="text-danger font-weight-bold px-2">
                          ' . $li . '
                        </ul>
                      </div>
                      ';
          }
        }
        ?>
     </div>
   </section>
 </section>
 <script>
   var displays_dropdown = 'off';

   function display_dropdown() {
     if (displays_dropdown === 'off') {
       document.getElementById('display_dropdown').style.display = 'block';
       displays_dropdown = 'on';
     } else {
       document.getElementById('display_dropdown').style.display = 'none';
       displays_dropdown = 'off';
     }
   }
 </script>