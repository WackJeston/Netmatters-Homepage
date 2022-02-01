<?php

include 'news-database.php';

function isDigits(string $s, int $minDigits = 9, int $maxDigits = 14): bool {
  return preg_match('/^[0-9]{'.$minDigits.','.$maxDigits.'}\z/', $s);
}

if(isset($_POST['f-submit'])){
  error_reporting(0);
  if(!empty($_POST['f-name'])
  && !empty($_POST['f-email'])
  && isDigits($_POST['f-phone'])
  && !empty($_POST['f-subject'])
  && 4 < strlen($_POST['f-message'])){

    $fName = $_POST['f-name'];
    $fCompName = $_POST['f-comp-name'];
    $fEmail = $_POST['f-email'];
    $fPhone = $_POST['f-phone'];
    $fSubject = $_POST['f-subject'];
    $fMessage = $_POST['f-message'];
    $fMarketing = $_POST['f-marketing'];
    date_default_timezone_set('Europe/London');
    $fDateTime = date('Y/m/d H:i:s', time());

    $contactFormQuery = "INSERT INTO contact_form(name, comp_name, email, phone, subject, message, marketing, submit_time)
    VALUES('$fName', '$fCompName', '$fEmail', '$fPhone', '$fSubject', '$fMessage', '$fMarketing', '$fDateTime')";
    $contactFormResult = mysqli_query($connection, $contactFormQuery);

    if ($contactFormResult){
      echo <<<EOT
      <div class="green-validation">
        <p>Your message has been sent!</p>
        <i class="fas fa-times"></i>
      </div>
      EOT;
    }
    else {
      echo "Form Failed To Submit";
    }

  }
  elseif(!empty($_POST['f-name'])
  && !empty($_POST['f-email'])
  && isDigits($_POST['f-phone'])
  && !empty($_POST['f-subject'])
  && 5 > strlen($_POST['f-message'])){
    echo <<<EOT
    <div class="red-validation">
      <p>The message must be at least 5 characters.</p>
      <i class="fas fa-times"></i>
    </div>
    EOT;
  }
  elseif(!empty($_POST['f-name'])
  && !empty($_POST['f-email'])
  && !isDigits($_POST['f-phone'])
  && !empty($_POST['f-subject'])
  && 4 < strlen($_POST['f-message'])){
    echo <<<EOT
    <div class="red-validation">
      <p>validation.phone</p>
      <i class="fas fa-times"></i>
    </div>
    EOT;
  }
  else{
    // echo "Please Complete The Required Fields";
    echo <<<EOT
    <div class="red-validation">
      <p>validation.phone</p>
      <i class="fas fa-times"></i>
    </div>
    <div class="red-validation">
      <p>The message must be at least 5 characters.</p>
      <i class="fas fa-times"></i>
    </div>
    EOT;
  }
}
