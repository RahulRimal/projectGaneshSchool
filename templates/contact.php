<?php include('includes/header.php'); ?>

<!-- Main section starts here -->
<div class="main-content">

  <section id="school-location">
    <div class="map">
      <!-- <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=Kathmandu&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2piratebay.org"></a><br><style>.mapouter{position:relative;text-align:center;height:400px;width:100%;}</style><a href="https://www.embedgooglemap.net">using google map on website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:100%;}</style></div></div> -->

      <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=Prabha%20Dayagada%20+(Shree%20Prabha%20Dhamkot%20Secondary%20School)&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> <a href='https://embedmaps.net'>google maps iframe embed</a>
      <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=e928aad61abb2755c3d7745353346d9f5262179c'></script>

    </div>
  </section>


  <div id="contact-desc">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="contact-desc-content">
            <h2>Contact us </h2>
            <p><i class="fa fa-location-arrow" aria-hidden="true"></i> Prabha Dayagada,Achham</p>
            <p><i class="fa fa-envelope" aria-hidden="true"></i> contact@school.com</p>
            <p><i class="fa fa-phone" aria-hidden="true"></i> 081540394</p>
          </div>
        </div>
        <div class="col-md-6">
          <!-- Leaving it for the blank space -->
        </div>


        <section id="contact-main" class="w-100 text-center my-5">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <!-- Leaving it for the blank space -->
              </div>
              <div class="col-md-6">
                <div class="contact-box-main w-100 p-0">
                  <div class="contact-box-heading">
                    <h5>Send us a mail</h5>
                  </div>
                  <div class="contact-box-body p-1">
                    <form method="POST" , action="contact.php">
                      <input type="text" name="fullname" placeholder="Full Name" required>
                      <input type="email" name="contactEmail" placeholder="Email" required>
                      <input type="text" name="Address" placeholder="Address" required>
                      <input type="number" name="Mobilenumber" placeholder="MobileNumber" required>
                      <input id="contactBody" type="text" name="contactBody" placeholder="Please describe the reason" required>
                      <script>
                        CKEDITOR.replace('contactBody');
                      </script>

                      <div class="submit-btn mt-1 text-left">
                        <button name="submitButton" class="contact-submit-btn">Submit</button>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>

  <!-- Main section ends here -->

  <?php include('includes/footer.php'); ?>