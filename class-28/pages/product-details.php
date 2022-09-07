<?php include('header.php'); ?>

    <section class="py-5" style="background-color: #eee;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">Product Info</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <img src="assets/image/<?php echo $productById['image'] ?>" alt="" style="width: 100%; height: 350px; background-color: #fff">
                </div>
                <div class="col-md-8">
                    <div class="card mb-5" style="width: 100%; height: 350px">
                        <div class="card-body">
                            <h4>Product Name : <?php echo $productById['name']?> </h4>
                            <p>Product Price : <?php echo $productById['price']?> </p>
                            <p>Product Description : <?php echo $productById['description']?></p>
                            <p>Brand Name : <?php echo $brandOfProduct['name']?> </p>
                            <p>Category Name : <?php echo $categoryOfProduct['name']?> </p>
                            <a href="#" class="btn btn-outline-danger">Add To Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php // echo  '<pre>'?>
<?php //print_r($productById)?>
<?php //print_r($categoryOfProduct)?>

<?php include('footer.php'); ?>