

<?php include('header.php'); ?>

<section class="py-5" style="background-color: #eee;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Gallery Light</h2>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row mt-3 gallery">

            <?php foreach ($products as $product){  ?>

                        <a href="assets/image/<?php echo $product['image']?>" style=" width: 33%; ">
                            <img class="img-thumbnail" src="assets/image/<?php echo $product['image']?>" style=" width: 100%; height: 250px; margin: 5px; background-color: #fff;">
                        </a>

            <?php }?>

        </div>

    </div>
</section>


<?php include('footer.php'); ?>