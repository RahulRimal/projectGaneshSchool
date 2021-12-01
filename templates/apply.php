<?php include('includes/header.php');?>
<?php include('includes/main-carousel.php');?>

  <!-- Main section starts here -->

  <div class="container text-center">
    <h2>Grade 11 Admission Application Form 2078</h2>
  </div>

  <div id="apply-form">
  <div class="container apply-form p-2">
      <form action="/action_page.php" class="text-center">

        <div class="row">
          <div class="col-md-4">
            <label for="fname">First name:</label>
            <input type="text" class="form-control" id="fname" name="fname" value=""> <br>
          </div>
          <div class="col-md-4">
            <label for="lname">Last name:</label>
            <input type="text" class="form-control" id="lname" name="lname" value=""><br>
          </div>
          <div class="col-md-4" style="align-self: center;">
            <div class="input-group">
              <input type="text" placeholder="Applied Grade" class="form-control" aria-label="Text input with segmented dropdown button">
              <div class="input-group-append">
                <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Grade 6</a>
                  <a class="dropdown-item" href="#">Grade 7</a>
                  <a class="dropdown-item" href="#">Grade 8</a>
                  <a class="dropdown-item" href="#">Grade 9</a>
                  <a class="dropdown-item" href="#">Grade 10</a>
                  <a class="dropdown-item" href="#">Grade 11</a>
                  <a class="dropdown-item" href="#">Grade 12</a>

                  <div role="separator" class="Grade 9"></div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <label for="fname">Date of Birth</label>:</label> <br>
            <input type="date" class="form-control" id="fname" name="fname" value=""> <br>
          </div>

          <div class="col-md-4">
            <label for="gender">Gender</label><br>
            <label for="radioMale">MALE</label>
            <input type="radio" id="fname" name="Nationality" value="male" checked>
            <label for="radioFemale">FEMALE</label>
            <input type="radio" id="fname" name="Nationality" value="female">
            <label for="radioOther">OTHER</label>
            <input type="radio" id="fname" name="Nationality" value="other">
          </div>

          <div class="col-md-4" style="align-self: center;">
            <label for="fname">Nationality</label>
            <input type="text" class="form-control" id="fname" name="Nationality" value=""> <br>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <label for="fname">Contact Adress:</label>
            <input type="text" class="form-control" id="Cname" name="contact adress"
              placeholder="city or village or ward no" value=""> <br>
          </div>
          <div class="col-md-4">
            <label for="fname">Mobile Number:</label>
            <input type="number" class="form-control" id="Mobileno" name="Mnumber" value=""> <br>

          </div>
          <div class="col-md-4">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="emailId" name="email" value=""> <br>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <label for="fname">Parents/Guardian Name:</label>
            <input type="text" class="form-control" id="fname" name="gname" value="">

          </div>
          <div class="col-md-4">
            <label for="Relationship">Relationships:</label>
            <input type="text" class="form-control" id="fname" name="gname" value="">

          </div>
          <div class="col-md-4">
            <label for="fname">Parents/Guardian MObile number:</label>
            <input type="number" class="form-control" id="GMobileno" name="Mnumber" value=""> <br>

          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <label for="gender">Choose a Course</label><br>
            <label for="radioMale">Agriculture</label>
            <input type="radio" id="fname" name="Nationality" value="male" checked>
            <label for="radioFemale">Management</label>
            <input type="radio" id="fname" name="Nationality" value="female">
            <label for="radioOther">Education</label>
            <input type="radio" id="fname" name="Nationality" value="other">
          </div>

          <div class="col-md-4">
            <label for="Relationship">GPA OF SEE</label>
            <input type="text" class="form-control" id="fname" name="gname" value="">

          </div>
          <div class="col-md-4">
            <label for="fname">School Name</label>
            <input type="text" class="form-control" id="GMobileno" name="Mnumber" value=""> <br>

          </div>
        </div>

        <div class="submit-btn text-end">
          <input type="submit" class="btn btn-primary w-25 text-center" value="Submit">
        </div>
      </div>
      </form>

    </div>
    <!-- <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p> -->






    <!-- Main section ends here -->

    <?php include('includes/footer.php');?>