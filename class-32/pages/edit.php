<?php include('header.php'); ?>

<section class="py-5" style="background-color: #eee;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Student</h2>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row mt-3">
            <div class="card">
                <div class="card-body">
                <form action="action.php" method="post">
                   <?php foreach($studentInfoById as $student) {?>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" class="form-control" placeholder="Enter Name" name="name" value="<?php echo $student['name']?>">
                        </div>
                        <div class="mb-3">
                            <label for="roll" class="form-label">Roll:</label>
                            <input type="text" class="form-control" placeholder="Enter Roll" name="roll" value="<?php echo $student['roll']?>">
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone:</label>
                            <input type="text" class="form-control" placeholder="Enter Phone" name="phone" value="<?php echo $student['phone']?>">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address:</label>
                            <input type="text" class="form-control" placeholder="Enter email" name="email" value="<?php echo $student['email']?>">
                        </div>
                        <div class="mb-3">
                            <label for="department" class="form-label">Department:</label>
                            <input type="text" class="form-control" placeholder="Enter department" name="department" value="<?php echo $student['department']?>">
                        </div>
                        <div class="mb-3">
                            <label for="session" class="form-label">Session:</label>
                            <input type="text" class="form-control" placeholder="Enter session" name="session" value="<?php echo $student['session']?>">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address:</label>
                            <textarea class="form-control" name="address" rows="3"><?php echo $student['address']?></textarea>
                        </div>
                        <div class="mb-3">
                        <input type="hidden" name="editId" value="<?php echo $student['id']?>">
                            <input type="submit" name="editSubmit" class="form-control btn btn-success btn-lg btn-block" value="Submit">
                        </div>
                    <?php }?>
                   </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>















































































































































































































































































































































































































































































































































