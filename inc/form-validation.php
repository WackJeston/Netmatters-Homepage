<?php

if(isset($_CONTACT['f-submit'])){
  if(!empty($_CONTACT['f-name'])
  && !empty($_CONTACT['f-email'])
  && !empty($_CONTACT['f-phone'])
  && !empty($_CONTACT['f-subject'])
  && !empty($_CONTACT['f-message'])){

    $fName = $_CONTACT['f-name'];
    $fCompName = $_CONTACT['f-comp-name'];
    $fEmail = $_CONTACT['f-email'];
    $fPhone = $_CONTACT['f-phone'];
    $fSubject = $_CONTACT['f-subject'];
    $fMessage = $_CONTACT['f-message'];
    $fMarketing = $_CONTACT['f-marketing'];
    date_default_timezone_set('United Kingdom/London');
    $fDateTime = date('Y/m/d H:i:s', time());

    $contactFormQuery = "INSERT INTO contact_form(name, comp_name, email, phone, subject, message, marketing, submit_time)
    VALUES($fName, $fCompName, $fEmail, $fPhone, $fSubject, $fMessage, $fMarketing, $fDateTime)";
    $contactFormResult = mysqli_query($connection, $contactFormQuery);

    if ($connection->query($contactFormResult) === TRUE) {
      echo "Form Submitted Successfully";
    }
    else {
      echo "Form Failed To Submit";
    }

  }
  else{
    echo "Please Complete The Required Fields";
  }
}
