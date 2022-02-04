<?php include("inc/components/header.php"); ?>
<main id="contact-page">
<!-- Offices Section -->
<div class="offices-section">
  <div class="file-view">
    <h4><a href="index.php">Home</a> / Our Offices</h4>
  </div>
  <div class="offices-title-mobile">
    <h2>Our Offices</h2>
  </div>
  <div class="offices-title-desktop">
    <h2>Our Offices</h2>
  </div>

  <div class="offices-container">
    <div class="o-container">
      <div class="office cambridge">
        <img src="imgs/cambridge.jpg" alt="Cambridge Office">
        <div class="o-info">
          <a href="#" class="o-title">Cambridge Office</a>
          <p>
            Unit 1.28,
            <br>St John's Innovation Centre,
            <br>Cowley Road, Milton,
            <br>Cambridge,
            <br>CB4 0WS
          </p>
          <a href="#" class="o-phone">01223 37 57 72</a>
          <a href="#" class="o-button">VIEW MORE</a>
        </div>
      </div>
      <div class="o-map" id="map1"></div>
    </div>

    <div class="o-container">
      <div class="office wymondham">
        <img src="imgs/wymondham.jpg" alt="Wymondham Office">
        <div class="o-info">
          <a href="#" class="o-title">Wymondham Office</a>
          <p>
            Unit 15,
            <br>Penfold Drive,
            <br>Gateway 11 Business Park,
            <br>Wymondham, Norfolk,
            <br>NR18 0WZ
          </p>
          <a href="#" class="o-phone">01603 70 40 20 </a>
          <a href="#" class="o-button">VIEW MORE</a>
        </div>
      </div>
      <div class="o-map" id="map2"></div>
    </div>

    <div class="o-container">
      <div class="office great-yarmouth">
        <img src="imgs/yarmouth.jpg" alt="Great Yarmouth Office">
        <div class="o-info">
          <a href="#" class="o-title">Great Yarmouth Office</a>
          <p>
            Suite F23,
            <br>Beacon Innovation Centre,
            <br>Beacon Park, Gorleston,
            <br>Great Yarmouth, Norfolk,
            <br>NR31 7RA
          </p>
          <a href="#" class="o-phone">01493 60 32 04 </a>
          <a href="#" class="o-button">VIEW MORE</a>
        </div>
      </div>
      <div class="o-map" id="map3"></div>
    </div>
  </div>
</div>
<div class="gradient"></div>

<!-- Contact Section -->
<div class="form-section">
  <div class="f-container">
    <div class="f-info">
      <h5>Email us on:</h5>
      <a href="#">sales@netmatters.com</a>
      <h5>Buesiness Hours:</h5>
      <h5>Monday - Friday 07:00 - 18:00</h5>
      <h5 class="hours-info-button">Out of Hours IT Support<i class="fas fa-angle-down"></i></h5>
      <div class="hours-info">
        <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p><br>
        <p class="hi-bold">Monday - Friday 18:00 - 22:00 Saturday 08:00 - 16:00<br>Sunday 10:00 - 18:00</p><br>
        <p>To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours  voicemail. A technician will contact you on the number provided within 45 minutes of your call. </p>
      </div>
    </div>

    <form class="contact-form" id="contact-form" action="#contact-form" method="post">
      <?php include("inc/form-validation.php"); ?>

      <div class="first-4-inputs">
        <div class="first-4-inputs-container">
          <div><label for="f-name" class="label-color">Your Name</label><label for="f-name" class="star">*</label></div><br>
          <input type="text" name="f-name" id="f-name" class="f-input" value="<?php if (isset($_POST['f-name'])) echo $_POST['f-name']; ?>">
        </div>
        <div class="first-4-inputs-container">
          <label for="f-comp-name" class="label-color">Company Name</label><br>
          <input type="text" name="f-comp-name" id="f-comp-name" class="f-input" value="<?php if (isset($_POST['f-comp-name'])) echo $_POST['f-comp-name']; ?>">
        </div>
        <div class="first-4-inputs-container">
          <div><label for="f-email" class="label-color">Your Email</label><label for="f-email" class="star">*</label></div><br>
          <input type="email" name="f-email" id="f-email" class="f-input" value="<?php if (isset($_POST['f-email'])) echo $_POST['f-email']; ?>">
        </div>
        <div class="first-4-inputs-container">
          <div><label for="f-phone" class="label-color">Your Telephone Number</label><label for="f-phone" class="star">*</label></div><br>
          <input type="text" name="f-phone" id="f-phone" class="f-input" value="<?php if (isset($_POST['f-phone'])) echo $_POST['f-phone']; ?>">
        </div>
      </div>
      <div><label for="f-subject" class="label-color">Subject</label><label for="f-subject" class="star">*</label></div><br>
      <input type="text" name="f-subject" id="f-subject" class="f-input" value="<?php if (isset($_POST['f-subject'])) echo $_POST['f-subject']; ?>">
      <div><label for="f-message" class="label-color">Message</label><label for="f-message" class="star">*</label></div><br>
      <textarea type="text" name="f-message" id="f-message"></textarea>
      <div class="f-tickbox">
        <input type="checkbox" name="f-marketing" id="f-checkbox">
        <label for="f-checkbox" class="label-color"> Please tick this box if you wish to receive marketing information from us. Please see our <a href="#">Privacy Policy</a> for more information on how we use your data</label>
      </div>
      <input type="submit" name="f-submit" value="SEND ENQUIRY" class="f-submit">
    </form>
  </div>
</div>


<?php include("inc/components/footer.php"); ?>
