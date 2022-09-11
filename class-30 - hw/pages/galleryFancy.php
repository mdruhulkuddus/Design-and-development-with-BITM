

<?php include('header.php'); ?>

    <section class="py-5" style="background-color: #eee;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="text-center">Gallery Fancy</h2>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row mt-3">

                    <?php foreach ($products as $product){  ?>
                        <div class="item col-md-4 col-sm-6 mb-3">
                            <a data-fancybox="gallery" href="assets/image/<?php echo $product['image']?>">
                                <img class="" src="assets/image/<?php echo $product['image']?>" style="width: 100%; height: 100%; background-color: #fff">
                            </a>

                        </div>
                    <?php }?>

            </div>

        </div>
    </section>


<?php include('footer.php'); ?>