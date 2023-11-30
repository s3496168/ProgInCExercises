<?php

/* Call this function in the booking page like so:
   $postErrors = validateBooking();
   If the array is empty, then no errors were generated
*/
function validateBooking() {
  $errors = []; // new empty array to return multiple error messages
  $username = trim($_POST['user']['name']);
  if ( $username == '') {
    $errors['user']['name'] = "Name can't be blank";
  } elseif (!preg_match("/^[a-zA-Z]+$/", $username)) {
    $errors['user']['name'] = "Only letters allowed";
  } elseif(!preg_match("^[\-A-Za-zŒœŽžŸÀ-ɸ '.]{1,64}$", $username)){
     $errors['user']['name'] = 'Please enter an actual name';
    // more advanced name checks here with better error message
  }else{
     echo 'name ok';
  }
  $email = trim($_POST['user']['email']);
  if ($email == '') {
    $errors['user']['email'] = "Email can't be blank";
  } elseif (!filter_var ($email, FILTER_VALIDATE_EMAIL)) {
    // more advanced email checks here with better error message
     $errors['user']['email'] = "Please enter a valid email";
  } else {
    // more advanced email checks here with better error message
     echo 'email ok';
  }
  // ... repeat for all other form field checks

    $phoneNo = trim($_POST['user']['phoneNo']);
  if ($phoneNo == '') {
    $errors['user']['phoneNo'] = "Phone number can't be blank";
  } elseif (!is_numeric($_POST['phoneNo'])){
      $errors['phoneNo'] = 'Phone numbers must be numeric'; 
    // more advanced email checks here with better error message
  }elseif(!preg_match("^(\(04\)|04|\+614)( ?\d){8}$",$_POST['phoneNo'])){
    $errors['phoneNo'] ='Please enter an actual phone number';
  }else{
     echo 'phone number ok'; 
  }
  return $errors; // empty array -> no errors; populated array -> errors.
}

//capacity to ignore minor norices
error_reporting( E_ERROR | E_WARNING | E_PARSE );

//for file(s) that perform POST request validation and only when the POST request method is being used
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      // include the post processing file
    // 
    }

   

?>
