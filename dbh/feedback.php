<?php
if (!isset($_POST['feedback_name'])) {
    header('Location: ./../feedback.php');
} else {
    include './conn.php';
    $name = mysqli_real_escape_string($conn, trim($_POST['name']));
    $office_name = mysqli_real_escape_string($conn, trim($_POST['office_name']));
    $telephone = mysqli_real_escape_string($conn, trim($_POST['telephone']));
    $mobile = mysqli_real_escape_string($conn, trim($_POST['mobile']));
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $departure_data = mysqli_real_escape_string($conn, trim($_POST['departure_data']));
    $like_visit = mysqli_real_escape_string($conn, trim($_POST['like_visit']));
    $suggestions = mysqli_real_escape_string($conn, trim($_POST['suggestion']));
    $travel_again = mysqli_real_escape_string($conn, trim($_POST['travel_again']));
    $recommend = mysqli_real_escape_string($conn, trim($_POST['recommend']));
    $destination_visited = mysqli_real_escape_string($conn, trim($_POST['destination_visited']));
    //whether ip is from share internet
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip_address = $_SERVER['HTTP_CLIENT_IP'];
    }
    //whether ip is from proxy
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    //whether ip is from remote address
    else {
        $ip_address = $_SERVER['REMOTE_ADDR'];
    }
    $ip = $ip_address;

    $sql = "INSERT INTO `customer_feedback`( `name`, `next_destination`, `office_name`, `destination_visited`, `departure_date`, `telephone`, `mobile`, `email`, `travel_again`, `recommend_friends`, `suggestions`, `ip`) VALUES ( '$name','$like_visit', '$office_name', '$destination_visited', '$departure_data', '$telephone', '$mobile', '$email', '$travel_again', '$recommend', '$suggestions', '$ip')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('Location: ./../feedback.php?msg=Thank You feedback is valuable to us && msg_class=success&&msg_head= Your Feedback is Submitted');
    } else {
        header('Location: ./../feedback.php?msg=Sorry For Incovency Your Feedback is not transfer pls Try Again&& msg_class=danger&&msg_head=Sorry for incovency');
    }
}