<?php include('header.php'); ?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-center">Contact Form</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="action.php" method="post">
                                <label for="firstName" class="form-label">First Name</label>
                                <input id="firstName" name="first_name" type="text" class="form-control" placeholder="First Name" value="<?php echo isset($firstName)? $firstName : ' '?>">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input id="lastName" name="last_name" type="text" class="form-control" placeholder="Last Name" value="<?php echo isset($lastName)? $lastName : ' '?>">
                               <label for="fullName" class="form-label">Full Name</label>
                                <input id="fullName" name="full_name" type="text" class="form-control" disabled value="<?php echo isset($fullName)? $fullName : ' '?>" placeholder="Full Name">
                                <br>
                                <input type="submit" name="make_full_name" class="btn btn-outline-success" value="Make full Name">
                                <input type="reset" name="clear" class="btn btn-outline-danger" value="Clear">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

<?php // echo  '<pre>'?>
<?php //print_r($productById)?>

<?php include('footer.php'); ?>






































































































































































































































