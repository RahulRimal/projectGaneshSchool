<?php include('includes/header.php'); ?>
<?php include('includes/main-carousel.php'); ?>

<!-- Main section starts here -->

<div class="container text-center">
  <h2>Grade 11 Admission Application Form 2078</h2>
</div>

<div id="apply-form">
  <div class="container apply-form p-2">
    <form formrole="form" enctype="multipart/form-data" method="post" action="apply.php" class="text-center">
      <div class="row">
        <div class="col-md-4">
          <label for="fname">First name:</label>
          <input type="text" class="form-control" id="fname" name="fname" value="" required> <br>
        </div>
        <div class="col-md-4">
          <label for="lname">Last name:</label>
          <input type="text" class="form-control" id="lname" name="lname" value=""><br>
        </div>
        <div class="col-md-4" style="align-self: center;">
          <div class="input-group">
          <select class="form-select" aria-label="Default select example" name="grade" required>
            <option selected>Please select the class</option>
            <option value="6">Grade 6</option>
            <option value="7">Grade 7</option>
            <option value="8">Grade 8</option>
            <option value="9">Grade 9</option>
            <option value="10">Grade 10</option>
            <option value="11">Grade 11</option>
            <option value="12">Grade 12</option>
          </select>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <label for="fname">Date of Birth</label>:</label> <br>
          <input type="date" class="form-control" name="dob" > <br>
        </div>
        <div class="col-md-4">
          <label for="gender">Gender</label><br>
          <label for="radioMale">MALE</label>
          <input type="radio" id="fname" name="gender" value="male" checked>
          <label for="radioFemale">FEMALE</label>
          <input type="radio" id="fname" name="gender" value="female">
          <label for="radioOther">OTHER</label>
          <input type="radio" id="fname" name="gender" value="other">
        </div>

        <div class="col-md-4" style="align-self: center;">
          <label for="fname">Nationality</label>
          <input type="text" class="form-control" id="nationality" name="nationality" value=""> <br>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <label for="fname">Contact Adress:</label>
          <input type="text" class="form-control" id="CAddress" name="contactaddress" placeholder="city or village or ward no" value=""> <br>
        </div>
        <div class="col-md-4">
          <label for="fname">Mobile Number:</label>
          <input type="number" class="form-control" id="Mobileno" name="mnumber" value="" required> <br>
        </div>

        <div class="col-md-4">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="emailId" name="email" value="" required> <br>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <label for="fname">Parents/Guardian Name:</label>
          <input type="text" class="form-control" id="fname" name="guardianname" value="">
        </div>

        <div class="col-md-4">
          <label for="Relationship">Relationship:</label>
          <input type="text" class="form-control" id="fname" name="guardianrelationship" value="">
        </div>

        <div class="col-md-4">
          <label for="fname">Parents/Guardian MObile number:</label>
          <input type="number" class="form-control" id="GMobileno" name="guardainnumber" value=""> <br>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <label for="gender">Choose a Course</label><br>
          <label for="radioMale">Agriculture</label>
          <input type="radio" id="fname" name="course" value="agriculture" checked>
          <label for="radioFemale">Management</label>
          <input type="radio" id="fname" name="course" value="management">
          <label for="radioOther">Education</label>
          <input type="radio" id="fname" name="course" value="education">
        </div>

        <div class="col-md-4">
          <label for="Relationship">GPA OF SEE</label>
          <input type="text" class="form-control" id="seegpa" name="gpa" value="">
        </div>

        <div class="col-md-4">
          <label for="fname">School Name</label>
          <input type="text" class="form-control" id="GMobileno" name="school" value=""> <br>
        </div>
      </div>

      <div class="submit-btn text-end">
        <input name='apply' type="submit" class="btn btn-primary w-25 text-center" value="Submit">
      </div>
  </div>
</form>
</div>
<!-- <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p> -->

<!-- Main section ends here -->

<?php include('includes/footer.php'); ?>