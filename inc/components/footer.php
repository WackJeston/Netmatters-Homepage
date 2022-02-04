        <!-- Newsletter Form ------------------------------>
        <div class="form-container">
          <form class="form" id="email-signup" action="#email-signup" method="post">
            <?php include("inc/email-signup.php"); ?>

            <h2>Email Newsletter Sign-Up</h2>
            <div class="form-input-section">

              <div class="form-input f1">
                <div class="input-labels">
                  <label for="name">Your Name</label><label class="star" for="name">*</label>
                </div>
                <input type="text" name="user-name" id="user-name" value="<?php if (isset($_POST['user-name'])) echo $_POST['user-name']; ?>">
              </div>

              <div class="form-input">
                <div class="input-labels">
                  <label for="email">Your Email</label><label class="star" for="email">*</label>
                </div>
                <input type="email" name="user-email" id="user-email" value="<?php if (isset($_POST['user-email'])) echo $_POST['user-email']; ?>">
              </div>

            </div>
            <div class="priv-policy">
              <input type="checkbox" name="user-marketing" id="user-marketing">
              <p>Please tick this box if you wish to receive marketing information from us. Please see our <a href="#">Privacy Policy</a> for more information on how we use your data.</p>
            </div>
            <input type="submit" name="user-submit" class="subscribe read-more" id="user-submit" value="SUBSCRIBE">
          </form>
        </div>
      </main>

      <!-- Footer --------------------------------------------->
      <footer>

        <!-- Links -->
        <div class="links footer-section">
          <h4>about netmatters</h4>
          <ul>
            <li><a href="#">News</a></li>
            <li><a href="#">Our Careers</a></li>
            <li><a href="#">Our Team</a></li>
            <li><a href="#">Our Office Tour</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Cookie Policy</a></li>
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="#">UK Domains</a></li>
          </ul>
        </div>

        <!-- Wymondham Address -->
        <div class="address-1 footer-section">
          <h4>wymondham branch</h4>
          <ul>
            <li>11 Penfold Drive</li>
            <li>Wymondham</li>
            <li>Norfolk</li>
            <li>NR18 0WZ</li>
            <li class="filler">filler</li>
            <li class="phone-number">Tel: 01603 70 40 20</li>
          </ul>
        </div>

        <!-- Gorleston Address -->

        <div class="address-2 footer-section">
          <h4>gorleston branch</h4>
          <ul>
            <li>Suite F23 Beacon Innovation Centre, Beacon Park</li>
            <li>Gorleston, Great Yarmouth</li>
            <li>Norfolk</li>
            <li>NR31 7RA</li>
            <li class="phone-number">Tel: 01493 60 32 04</li>
          </ul>
        </div>

        <!-- Social Accounts -->
        <div class="footer-section">
          <div class="socials">
            <h4 class="social-title">social media</h4>
            <div class="social-container">
              <div class="facebook social"><div class="social-icon-box"><i class="fab fa-facebook-f fa-lg social-icon"></i></div></div>
              <div class="twitter social"><div class="social-icon-box"><i class="fab fa-twitter fa-lg social-icon"></i></div></div>
              <div class="insta social"><div class="social-icon-box"><i class="fab fa-instagram fa-lg social-icon"></i></div></div>
              <div class="linkedin social"><div class="social-icon-box"><i class="fab fa-linkedin-in fa-lg social-icon"></i></div></div>
            </div>
          </div>

          <!-- Legal Extras -->
          <div class="legal">
            <ul>
              <li><a href="#">Sitemap</a></li>
              <li>© Copyright Netmatters Ltd. 2021</li>
              <li>All rights reserved</li>
            </ul>
          </div>
        </div>
      </footer>

      <!-- Partners & Awards -->
      <div class="partners-and-awards">
        <div class="partners-and-awards-container">
          <div class="partners">
            <div class="google"></div>
            <div class="microsoft"></div>
            <div class="future-50"></div>
            <div class="qms"></div>
            <div class="norfolk"></div>
          </div>
          <div class="awards">
            <div class="future-growth"></div>
            <div class="royal-training"></div>
            <div class="skills-tomorrow"></div>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
      const homePage = document.querySelector('#home-page')
      const contactPage = document.querySelector('#contact-page')
    </script>

    <!-- JQuery ------------------>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Slick JS ------------------>
    <!-- <script src="js/slick-1.8.1/slick/slick.min.js"></script>
    <script src="js/slick-callback.js"></script> -->

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <script src="js/map-leaflet.js"></script>

    <!-- Pop Up Menu JS ------------>
    <script src="js/pop-up-menu.js"></script>

    <!-- Sticky Header JS ------------>
    <!-- <script src="js/sticky-header.js"></script> -->

    <!-- Cookie Pop Up JS ------------>
    <script src="js/cookie-pop-up.js"></script>

    <!-- Hours Info pop-up JS -->
    <script src="js/hours-info.js"></script>

    <!-- Form & News Letter Validation JS -->
    <script src="js/form-validation.js"></script>
    <script src="js/email-signup.js"></script>

  </body>
</html>
