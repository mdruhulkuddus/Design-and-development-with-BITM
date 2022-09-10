

<?php include('header.php'); ?>

<section class="py-5" style="background-color: #eee;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">All <?php echo $categoryById['name']?></h2>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row mt-3">

            <?php foreach ($productByCategory as $product){  ?>

                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                            <img src="assets/image/<?php echo $product['image']?>" style="height: 250px; width: 100%;">
                        </div>
                        <div class="card-body">
                            <h4>Product Name : <?php echo $product['name']?> </h4>
                            <p>Product Price : <?php echo $product['price']?> </p>
                            <p>Product Description : <?php echo $product['description']?></p>
                            <!--                                <p>Brand Name : --><?php //echo $product['CompanyName']?><!-- </p>-->
                            <a href="action.php?page=details&id=<?php echo $product['id']?>" class="btn btn-primary">Details</a>
                        </div>
                    </div>
                </div>

            <?php }?>
        </div>
    </div>
</section>

<?php // echo  '<pre>'?>
<?php //print_r($productByCategory )?>
<?php //print_r( $categoryById )?>
<?php include('footer.php'); ?>
































































































































































