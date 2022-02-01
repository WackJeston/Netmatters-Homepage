<?php

if(isset($_POST['user-submit'])){
  error_reporting(0);
  if(!empty($_POST['user-name'])
  && !empty($_POST['user-email'])
  && !empty($_POST['user-marketing'])){

    $userName = $_POST['user-name'];
    $userEmail = $_POST['user-email'];
    $userMarketing = $_POST['f-marketing'];
    date_default_timezone_set('Europe/London');
    $userDateTime = date('Y/m/d H:i:s', time());

    $userFormQuery = "INSERT INTO contact_form(name, email, marketing, submit_time)
    VALUES('$userName', '$userEmail', '$userMarketing', '$userDateTime')";
    $userFormResult = mysqli_query($connection, $userFormQuery);

    if ($userFormResult){
      echo <<<EOT
      <div class="green-validation">
        <p>You have successfully joined our mailing list</p>
        <i class="fas fa-times"></i>
      </div>
      EOT;
    }
    else {
      echo "Form Failed To Submit";
    }

  }
  elseif(empty($_POST['user-name'])
  && !empty($_POST['user-email'])
  && !empty($_POST['user-marketing'])){
    echo <<<EOT
    <div class="red-validation">
      <p>The name field is required.</p>
      <i class="fas fa-times"></i>
    </div>
    EOT;
  }
  elseif(!empty($_POST['user-name'])
  && empty($_POST['user-email'])
  && !empty($_POST['user-marketing'])){
    echo <<<EOT
    <div class="red-validation">
      <p>The email field is required.</p>
      <i class="fas fa-times"></i>
    </div>
    EOT;
  }
  elseif(!empty($_POST['user-name'])
  && !empty($_POST['user-email'])
  && empty($_POST['user-marketing'])){
    echo <<<EOT
    <div class="red-validation">
      <p>The marketing preference field is required.</p>
      <i class="fas fa-times"></i>
    </div>
    EOT;
  }
  elseif(empty($_POST['user-name'])
  && empty($_POST['user-email'])
  && !empty($_POST['user-marketing'])){
    echo <<<EOT
    <div class="red-validation">
      <p>The name field is required.</p>
      <i class="fas fa-times"></i>
    </div>
    <div class="red-validation">
      <p>The email field is required.</p>
      <i class="fas fa-times"></i>
    </div>
    EOT;
  }
  elseif(empty($_POST['user-name'])
  && !empty($_POST['user-email'])
  && empty($_POST['user-marketing'])){
    echo <<<EOT
    <div class="red-validation">
      <p>The name field is required.</p>
      <i class="fas fa-times"></i>
    </div>
    <div class="red-validation">
      <p>The marketing preference field is required.</p>
      <i class="fas fa-times"></i>
    </div>
    EOT;
  }
  elseif(!empty($_POST['user-name'])
  && empty($_POST['user-email'])
  && empty($_POST['user-marketing'])){
    echo <<<EOT
    <div class="red-validation">
      <p>The email field is required.</p>
      <i class="fas fa-times"></i>
    </div>
    <div class="red-validation">
      <p>The marketing preference field is required.</p>
      <i class="fas fa-times"></i>
    </div>
    EOT;
  }
  else{
    // echo "Please Complete The Required Fields";
    echo <<<EOT
    <div class="red-validation">
      <p>The name field is required.</p>
      <i class="fas fa-times"></i>
    </div>
    <div class="red-validation">
      <p>The email field is required.</p>
      <i class="fas fa-times"></i>
    </div>
    <div class="red-validation">
      <p>The marketing preference field is required.</p>
      <i class="fas fa-times"></i>
    </div>
    EOT;
  }
}
