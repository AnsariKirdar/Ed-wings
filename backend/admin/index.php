<?php include './inc/session_check.php'; ?>
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <?php include './inc/inc.php';
  include './../../dbh/conn.php'; ?>
  <style>
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

<body>
  <?php include './inc/nav.php'; ?>
  <div class="work_body">
    <div class="h-100 container p-2">
      <div class="bg-light rounded p-3 h-100">
        <?php include './../../dbh/msg.php'; ?>

        hi

        <hr class="mb-1">
        <hr class="my-0 mb-3">

        <!-- feedback -->
        <div>
          <h2 class="">
            Feedback
          </h2>
          <table class="table table-striped table-sm table-hover text-center">
            <thead class="thead-inverse">
              <tr class="tr_border text-uppercase">
                <th class="bg-danger text-white rounded-left-pill px-4">Sr.No</th>
                <th class="bg-danger text-white px-4">name</th>
                <th class="bg-danger text-white px-4">Destination V. </th>
                <th class="bg-danger text-white px-4">Mobile</th>
                <th class="bg-danger text-white px-4">Email</th>
                <th class="bg-danger text-white rounded-right-pill px-4">Action</th>
              </tr>
            </thead>
            <tbody>

              <?php

              $feedback_result =  mysqli_query($conn, "SELECT * FROM `customer_feedback` where `viewed` = '0' order by `customer_feedback`.`c_date` DESC ,`customer_feedback`.`id` DESC");
              $a = 1;
              while ($feedback_row = mysqli_fetch_assoc($feedback_result)) {
                $f_id = $feedback_row['id'];
                $f_q = bin2hex($f_id);
                $f_name = $feedback_row['name'];
                $f_office_name = $feedback_row['office_name'];
 $f_next_destination = $feedback_row['next_destination'];
 $f_destination_visited = $feedback_row['destination_visited'];
 $f_departure_date = $feedback_row['departure_date'];
 $f_telephone = $feedback_row['telephone'];
 $f_mobile = $feedback_row['mobile'];
 $f_email = $feedback_row['email'];
 $f_travel_again = $feedback_row['travel_again'];
 $f_recommend_friends = $feedback_row['recommend_friends'];
 $f_suggestions = $feedback_row['suggestions'];
                echo '
                        <tr>
                        <td class="rounded-left-pill">' . $a . '</td>
                        <td class="font-weight-bold text-left text-capitalize">' . $f_name . '</td>
                        <td class="font-weight-bold text-center">' . $f_destination_visited . '</td>
                        <td class="">' . $f_mobile . '</td>
                        <td class="text-left">' . $f_email . '</td>
                        <td class=" rounded-right-pill">
                        <button type="button" data-toggle="modal" data-target="#a' . $f_id . '" class="btn btn-sm text-white btn-primary px-4 rounded-pill"><span> <i class="fas fa-eye"></i> </span> View</button>
                        <a href="./feedback-delete.php?q=' . $f_q . '" class="btn btn-sm btn-danger px-4 rounded-pill"> <span class="font-weight-normal"><i class="fas fa-trash-alt"></i></span> Delete</a>
                        </td>
                        </tr>
                        <div class="modal fade bd-example-modal-lg" id="a' . $f_id . '" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg modal-dialog-centered">
                              <div class="modal-content">
                              <div class="modal-header text-white bg-danger">
                                <h5 class="modal-title">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                
<p>
                               <span class="font-weight-bold">
                                Name: -
                               </span>
                               <span class="font-weight-bold text-capitalize">
                                '.$f_name. '
                               </span>
                                </p>
                                
<p>
                               <span class="font-weight-bold">
                                Office Name: -
                               </span>
                               <span class="font-weight-bold text-capitalize">
                                '.$f_office_name. '
                               </span>
                                </p>
                                
<p>
                               <span class="font-weight-bold">
                               Destination Visited: -
                               </span>
                               <span class="font-weight-bold text-capitalize">
                                '. $f_destination_visited. '
                               </span>
                                </p>
                                
<p>
                               <span class="font-weight-bold">
                               Telephone: -
                               </span>
                               <span class="font-weight-bold">
                                '.$f_telephone. '
                               </span>
                                </p>
                                
<p>
                               <span class="font-weight-bold">
                               Mobile: -
                               </span>
                               <span class="font-weight-bold">
                                '.$f_mobile. '
                               </span>
                                </p>
                                
<p>
                               <span class="font-weight-bold">
                               Email: -
                               </span>
                               <span class="font-weight-bold">
                                '.$f_email. '
                               </span>
                                </p>
                                
<p>
                               <span class="font-weight-bold">
                               Departure Date: -
                               </span>
                               <span class="font-weight-bold">
                                '.$f_departure_date. '
                               </span>
                                </p>
                                
<p>
                               <span class="font-weight-bold">
                               Destinations you would like to visit: -
                               </span>
                               <span class="font-weight-bold text-capitalize">
                                '.$f_next_destination . '
                               </span>
                                </p>
                                
<p>
                               <span class="font-weight-bold">
                             Suggestion: -
                               </span>
                               <span class="font-weight-bold text-capitalize">
                                '.$f_suggestions. '
                               </span>
                                </p>
                                
<p>
                               <span class="font-weight-bold">
                             Would I Travel with Ed-wings.com Again: -
                               </span>
                               <span class="font-weight-bold">
                                '.$f_travel_again. '
                               </span>
                                </p>
                                
<p>
                               <span class="font-weight-bold">
                             Recommend Ed-wings.com to my friends: -
                               </span>
                               <span class="font-weight-bold">
                                '.$f_recommend_friends. '
                               </span>
                                </p>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-primary px-5 rounded-pill font-weight-bold" data-dismiss="modal"> <i class="fas fa-sign-out-alt"></i> Just Close</button>
                                <a  href="feedback-move.php?q='.$f_q.'" class="btn btn-danger px-5 rounded-pill font-weight-bold"> <i class="fas fa-trash-alt"></i> Remove From Home List</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        ';
                $a++;
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
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