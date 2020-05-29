<?php
if (!isset($_POST['reg_submit'])) {
  header('Location: ./../register.php?msg=Error 404&msg_class=danger');
} else {
  include './../../dbh/conn.php';
  $agency_name = mysqli_real_escape_string($conn, trim($_POST['agency_name']));
  $business_registration_with = mysqli_real_escape_string($conn, trim($_POST['business_registration_with']));
  $business_registration_number = mysqli_real_escape_string($conn, trim($_POST['business_registration_number']));
  $manager_first_name = mysqli_real_escape_string($conn, trim($_POST['manager_first_name']));
  $manager_last_name = mysqli_real_escape_string($conn, trim($_POST['manager_last_name']));
  $manager_email = mysqli_real_escape_string($conn, trim($_POST['manager_email']));
  $manager_contact = mysqli_real_escape_string($conn, trim($_POST['manager_contact']));
  $agency_email = mysqli_real_escape_string($conn, trim($_POST['agency_email']));
  $agency_public_phone_number = mysqli_real_escape_string($conn, trim($_POST['agency_public_phone_number']));
  $agency_phone_number = mysqli_real_escape_string($conn, trim($_POST['agency_phone_number']));
  $agency_fax = mysqli_real_escape_string($conn, trim($_POST['agency_fax']));
  $agency_address = mysqli_real_escape_string($conn, trim($_POST['agency_address']));
  $agency_country = mysqli_real_escape_string($conn, trim($_POST['agency_country']));
  $agency_state = mysqli_real_escape_string($conn, trim($_POST['agency_state']));
  $agency_city = mysqli_real_escape_string($conn, trim($_POST['agency_city']));
  $postal_code = mysqli_real_escape_string($conn, trim($_POST['postal_code']));
  $iata_number = mysqli_real_escape_string($conn, trim($_POST['iata_number']));
  $abta_number = mysqli_real_escape_string($conn, trim($_POST['abta_number']));
  $clia_number = mysqli_real_escape_string($conn, trim($_POST['clia_number']));
  $tids_number = mysqli_real_escape_string($conn, trim($_POST['tids_number']));

  $sql = "INSERT INTO `agencyregisterrequest`(`agency_name`, `business_registration_with`, `business_registration_number`, `iata_number`, `abta_number`, `clia_number`, `tids_number`, `manager_first_name`, `manager_last_name`, `manager_email`, `manager_contact`, `agency_email`, `agency_public_phone_number`, `agency_phone_number`, `agency_fax`, `agency_address`, `agency_country`, `agency_state`, `agency_city`, `postal_code`) VALUES ('$agency_name' ,'$business_registration_with' ,'$business_registration_number','$iata_number', '$abta_number', '$clia_number', '$tids_number','$manager_first_name' ,'$manager_last_name' ,'$manager_email' ,'$manager_contact' ,'$agency_email' ,'$agency_public_phone_number' ,'$agency_phone_number' ,'$agency_fax' ,'$agency_address' ,'$agency_country' ,'$agency_state' ,'$agency_city' ,'$postal_code')";
  echo $sql;
  $result = mysqli_query($conn,$sql);
  if ($result) {
    header('Location: ./../register.php?msg=Great Your Agency is under reviews with the Ed-wings Team Please ready for the call and email verify&msg_class=success');
  } else {
    header('Location: ./../register.php?msg=Error Pls Try Again&msg_class=danger');
  }
  
}

?>