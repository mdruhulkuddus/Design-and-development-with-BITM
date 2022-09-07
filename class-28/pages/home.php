
    <?php include('header.php'); ?>

        <section class="py-5" style="background-color: #eee;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h1 class="text-center">All Product Info</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row mt-3">

                    <?php foreach ($products as $product){  ?>

                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="assets/image/<?php echo $product['image']?>" style="height: 300px; width: 100%;">
                            <div class="card-body">
                                <h4>Product Name : <?php echo $product['name']?> </h4>
                                <p>Product Price : <?php echo $product['price']?> </p>
                                <p>Product Description : <?php echo $product['description']?></p>
<!--                                <p>Brand Name : --><?php //echo $product['CompanyName']?><!-- </p>-->
                                <a href="action.php?page=details&id=<?php echo $product['id']?>&catID=<?php echo $product['categoryId'] ?>&brandID=<?php echo $product['brandId'] ?>" class="btn btn-outline-primary">Details</a>
                            </div>
                        </div>
                    </div>

                    <?php }?>
                </div>
            </div>
        </section>
  

    <?php include('footer.php'); ?>