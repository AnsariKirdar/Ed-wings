<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <meta name="description" content="">
  <!-- meta tags -->
  <?php include './inc/head-links.php'; ?>
  <style>
    body {
      background-image: url(https://images.unsplash.com/photo-1449516611143-3a80c1a4f89f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80);
    }

    .rounded-left-pill {
      border-radius: 52rem 0 0 52rem;
    }

    .rounded-right-pill {
      border-radius: 0 52rem 52rem 0;
    }

    .nav {
      background-color: #fff;
      padding: 10px 20px;
      border-radius: 13px;
    }

    .nav-pills .nav-link {
      font-weight: bold;
      color: var(--danger);
    }

    .nav-pills .nav-link.active {
      background-color: var(--danger);
      font-weight: bold;
    }
  </style>
</head>

<body class="" id="body">

  <!-- Nav Bar -->
  <?php include './inc/nav.php'; ?>
  <!-- Nav Bar -->

  <div class=" container mb-5 mt-3 pb-4 pt-4">

    <?php
    $result = mysqli_query($conn, 'SELECT * FROM `packages` ORDER BY `packages` ASC');
    if ($result) {
      $tab_list = '';
      $tab_div = '';
      $active_sta = 'True';
      while ($row = mysqli_fetch_assoc($result)) {
        $brochure ='';
        if ($active_sta == 'True'){
          $st = 'active';
          $active_sta = 'False';
        }else{
          $st = '';
        }
        $id = $row['id'];
        $q = bin2hex($row['id']);
        $file = $row['file'];
        $packages = $row['packages'];
        $description = $row['description'];
        $tab_id =  preg_replace('/[^A-Za-z0-9]/', '', $packages);
        $brochure_result = mysqli_query($conn, "SELECT * FROM `brochure` where `packages` = '$id'");
       if(mysqli_num_rows($brochure_result) > 0){
         while ( $brochure_rows = mysqli_fetch_assoc($brochure_result)){
          $b_id = bin2hex($brochure_rows['id']);
          $b_tile =  $brochure_rows['title'];
            $b_image_File =  trim($brochure_rows['image_File']);
            $b_file =  trim($brochure_rows['file']);
           $brochure .= '
            <div class="col-lg-3 col-md-4 col-sm-6 p-2">
        <div class="p-2" style="background-color: rgba(255, 255, 255, .4); border:3px solid rgba(0,0,0,0.2); border-radius: 15px;">
          <div>
            <img src="./img/brochure/covers/'.$b_image_File.'" class="w-100" alt="" style="border-radius: 10px;">
          </div>
          <div class="my-2">
            <p class="mb-0 text-center h5">
              ' . $b_tile. '
            </p>
          </div>
          <div class="w-100 d-lg-flex d-md-block d-sm-block justify-content-around">
            <a class="btn btn-sm rounded-pill btn-primary px-4 font-weight-bold my-2" href="./img/brochure/' . $b_file. '" download="ed-wings.com-tours-'.$b_tile.'.pdf">
              <i class="fas fa-download"></i> Download
            </a>
            <a class="btn btn-sm rounded-pill btn-primary px-4 font-weight-bold my-2" href="./e-brochure-display.php?b_id='.$b_id. '" target="_blank">
              <i class="fas fa-eye"></i> View
            </a>
          </div>
        </div>
      </div>
           ';
         }
       }
        $tab_list .= '
       <li class="nav-item">
        <a class="nav-link '.$st.'" id="' . $tab_id . '-tab" data-toggle="tab" href="#'.$tab_id.'" role="tab" aria-controls="'.$tab_id.'" aria-selected="false">'. $packages.'</a>
      </li>
      ';
        $tab_div .= '
      <div class="tab-pane '.$st.'" id="' . $tab_id . '" role="tabpanel" aria-labelledby="' . $tab_id . '-tab">
      <div class="row">
      '. $brochure.'
    </div>
      </div>
      ';
      // echo "SELECT * FROM `brochure` where `packages` = '$id'";
      }
    }
    ?>

    <!-- Nav tabs -->
    <ul class="nav nav-pills nav-fill" id="myTab" role="tablist">
           <?php echo $tab_list; ?>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <?php echo $tab_div; ?>
    </div>

    
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