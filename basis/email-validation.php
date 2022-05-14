<?php

// pass valid/invalid emails
$email = "mehmetakgul.dev@gmail.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo $email."  = Valid";
} else {
    echo $email."  = Invalid";
}
