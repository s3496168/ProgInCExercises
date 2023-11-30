<?php

<<<<<<< HEAD
/* Call this function in the booking page like so:
   $postErrors = validateBooking();
   If the array is empty, then no errors were generated
*/
function validateBooking() {
  $errors = []; // new empty array to return multiple error messages
  $username = trim($_POST['user']['name']);
  if ( $username == '') {
    $errors['user']['name'] = "Name can't be blank";
  } else {
    // more advanced name checks here with better error message
  }
  $email = trim($_POST['user']['email']);
  if ($email == '') {
    $errors['user']['email'] = "Email can't be blank";
  } else {
    // more advanced email checks here with better error message
  }
  // ... repeat for all other form field checks

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
=======
/* Call this function in the booking page like so: 
   $fieldErrors = validateBooking();
   If the array is empty, then no errors were generated
*/
function validateBooking() {
  $errors = []; // new empty array to return error messages
  if ($_POST['customer']['name'] == '') {
    $errors['customer']['name'] == "Name can't be blank";
  } else {
    // more advanced checks here
  }
  if ($_POST['customer']['email'] == '') {
    $errors['customer']['email'] == "Email can't be blank";
  } else {
    // more advanced checks here
  }
  // ... etc
}



?>
>>>>>>> 61574f6a06bbf021cbaee39a979b055303f92af1
