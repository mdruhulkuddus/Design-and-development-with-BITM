<?php include('header.php'); ?>

<section class="py-5" style="background-color: #eee;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Student List </h2>
                        <?php if(isset($deleteMessage)) {?>
                            <button type="button" class="form-control btn btn-danger btn-lg btn-block"><?php echo isset($deleteMessage) ? $deleteMessage : ''; ?></button>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row mt-3">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Sl No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Roll</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Department</th>
                                <th scope="col">Session</th>
                                <th scope="col">Address</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($studentInfo as $sudent){ ?>
                            <tr>
                                <th scope="col"><?php echo isset($sudent['id']) ? $sudent['id'] : '' ?></th>
                                <th scope="col"><?php echo $sudent['name']?></th>
                                <th scope="col"><?php echo $sudent['roll']?></th>
                                <th scope="col"><?php echo $sudent['phone']?></th>
                                <th scope="col"><?php echo $sudent['email']?></th>
                                <th scope="col"><?php echo $sudent['department']?></th>
                                <th scope="col"><?php echo $sudent['session']?></th>
                                <th scope="col"><?php echo $sudent['address']?></th>
                                <th scope="col">
                                    <a href="action.php?page=edit&id=<?php echo $sudent['id']?>">Edit</a>
                                    <a href="action.php?page=delet&id=<?php echo $sudent['id']?>">Delet</a>
                                </th>

                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>



                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>
