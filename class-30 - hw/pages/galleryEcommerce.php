

<?php include('header.php'); ?>

<section class="py-5" style="background-color: #eee;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Gallery eCommerce</h2>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row mt-3">

            <div class="ecommerce-gallery" data-mdb-zoom-effect="true" data-mdb-auto-height="true">
                <div class="row py-3 shadow-5">
                    <div class="col-12 mb-1">
                        <div class="lightbox">

                            <img
                                src="assets/image/<?php echo $products[0]['hp.jpg']?>"
                                alt="Gallery image 1"
                                class="ecommerce-gallery-main-img active w-100"
                            />

                        </div>
                    </div>
                    <?php foreach ($products as $product){  ?>
                    <div class="col-3 mt-1">
                        <img
                            src="assets/image/<?php echo $product['image']?>"
                            data-mdb-img="assets/image/<?php echo $product['image']?>"
                            alt="Gallery image 1"
                            class="active w-100"
                        />
                    </div>
                    <?php }?>
                </div>
            </div>

        </div>

    </div>
</section>


<?php include('footer.php'); ?>