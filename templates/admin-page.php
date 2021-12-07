<?php include('includes/header.php') ?>


<!-- Main Section Starts here -->

<section id="adminMain" class="mt-5">

    <!-- Forms information starts here -->

    <div id="forms-info">
        <div class="container">
            <h3>Online Applied Forms</h3>
        </div>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Applied Course</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach($forms as $form):?>
                <tr>
                <th scope="row"><?php echo $form->id?></th>
                <td><?php echo $form->fname?></td>
                <td><?php echo $form->course;?></td>
                <td>
                    <a href="<?php echo BASE_URI;?>form.php?fid=<?php echo $form->id?>" class="btn btn-primary">View</a>
                    <a href="<?php echo BASE_URI;?>form.php?del=<?php echo $form->id?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>

            <?php endforeach;?>


        </tbody>
    </table>
    </div>
    
    <!-- Forms information ends here -->

</section>

<!-- Main Section Ends here -->


<?php include('includes/footer.php') ?>