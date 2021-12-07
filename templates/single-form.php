<?php include('includes/header.php'); ?>

<!-- Main section starts here -->
<section id="online-form">
    <div class="container mt-5">
        <div class="form-wrapper">
            <div class="form-header text-center">
                <h2>Applicant Information</h2>
            </div>
            <div class="form-body mt-5">
                <div class="row">
                    <div class="col-md-6 my-2" style="align-self: center;">
                        <div class="form-field d-flex">
                            <!-- Name: <? //php echo $applicant->name; 
                                        ?> -->
                            <div class="label mr-4">
                                <h5>Name:</h5>
                            </div>
                            <div class="input">
                                <?php echo $resultForm->fname?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 my-2" style="align-self: center;">
                        <div class="form-field d-flex">
                            <!-- Name: <? //php echo $applicant->name; 
                                        ?> -->
                            <div class="label mr-4">
                                <h5>DOB:</h5>
                            </div>
                            <div class="input">
                                <?php echo $resultForm->dob?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 my-2" style="align-self: center;">
                        <div class="form-field d-flex">
                            <!-- Name: <? //php echo $applicant->name; 
                                        ?> -->
                            <div class="label mr-4">
                                <h5>Applied Class:</h5>
                            </div>
                            <div class="input" style="align-self: center;">
                                <?php echo $resultForm->grade?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 my-2" style="align-self: center;">
                        <div class="form-field d-flex">
                            <!-- Name: <? //php echo $applicant->name; 
                                        ?> -->
                            <div class="label mr-4">
                                <h5>Gender:</h5>
                            </div>
                            <div class="input">
                                <?php echo $resultForm->gender?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 my-2" style="align-self: center;">
                        <div class="form-field d-flex">
                            <!-- Name: <? //php echo $applicant->name; 
                                        ?> -->
                            <div class="label mr-4">
                                <h5>Nationality:</h5>
                            </div>
                            <div class="input" style="align-self: center;">
                                <?php echo $resultForm->nationality?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 my-2" style="align-self: center;">
                        <div class="form-field d-flex">
                            <!-- Name: <? //php echo $applicant->name; 
                                        ?> -->
                            <div class="label mr-4">
                                <h5>Address:</h5>
                            </div>
                            <div class="input" style="align-self: center;">
                            <?php echo $resultForm->contactaddress?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 my-2" style="align-self: center;">
                        <div class="form-field d-flex">
                            <!-- Name: <? //php echo $applicant->name; 
                                        ?> -->
                            <div class="label mr-4">
                                <h5>Email:</h5>
                            </div>
                            <div class="input" style="align-self: center;">
                            <?php echo $resultForm->email?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 my-2" style="align-self: center;">
                        <div class="form-field d-flex">
                            <!-- Name: <? //php echo $applicant->name; 
                                        ?> -->
                            <div class="label mr-4">
                                <h5>Contact:</h5>
                            </div>
                            <div class="input" style="align-self: center;">
                            <?php echo $resultForm->mnumber?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-2" style="align-self: center;">
                        <div class="form-field d-flex">
                            <!-- Name: <? //php echo $applicant->name; 
                                        ?> -->
                            <div class="label mr-4">
                                <h5>GPA:</h5>
                            </div>
                            <div class="input" style="align-self: center;">
                            <?php echo $resultForm->gpa?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 my-2" style="align-self: center;">
                        <div class="form-field d-flex">
                            <!-- Name: <? //php echo $applicant->name; 
                                        ?> -->
                            <div class="label mr-4">
                                <h5>Previous School:</h5>
                            </div>
                            <div class="input" style="align-self: center;">
                            <?php echo $resultForm->school?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 my-2" style="align-self: center;">
                        <div class="form-field d-flex">
                            <!-- Name: <? //php echo $applicant->name; 
                                        ?> -->
                            <div class="label mr-4">
                                <h5>Guardian:</h5>
                            </div>
                            <div class="input" style="align-self: center;">
                            <?php echo $resultForm->guardianname?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 my-2" style="align-self: center;">
                        <div class="form-field d-flex">
                            <!-- Name: <? //php echo $applicant->name; 
                                        ?> -->
                            <div class="label mr-4">
                                <h5>Relation:</h5>
                            </div>
                            <div class="input" style="align-self: center;">
                            <?php echo $resultForm->guardianrelationship?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 my-2" style="align-self: center;">
                        <div class="form-field d-flex">
                            <!-- Name: <? //php echo $applicant->name; 
                                        ?> -->
                            <div class="label mr-4">
                                <h5>Guardian Phone:</h5>
                            </div>
                            <div class="input" style="align-self: center;">
                            <?php echo $resultForm->guardiannumber?>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12 my-2" style="align-self: center;">
                        <div class="form-field d-flex">
                            <!-- Name: <? //php echo $applicant->name; 
                                        ?> -->
                            <div class="label mr-4">
                                <h5>Selected Course:</h5>
                            </div>
                            <div class="input" style="align-self: center;">
                            <?php echo $resultForm->course?>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
</section>

<!-- Main section ends here -->

<?php include('includes/footer.php'); ?>