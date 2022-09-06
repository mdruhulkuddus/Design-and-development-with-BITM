<?php include('header.php'); ?>

    <section class="py-5">
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
            <div class="row">
                <div class="col-md-4">
                    <img src="assets/image/<?php echo $productById['image'] ?>" alt="" style="width: 100%">
                </div>
                <div class="col-md-8">
                    <div class="card mb-5">
                        <div class="card-body">
                            <h4>Product Name : <?php echo $productById['name']?> </h4>
                            <p>Product Price : <?php echo $productById['price']?> </p>
                            <p>Product Description : <?php echo $productById['description']?></p>
                            <p>Company Name : <?php echo $productById['CompanyName']?> </p>
                            <p>Category Name : <?php echo $productById['categoryId']?> </p>
                            <a href="action.php?page=details&id=<?php echo $productById['id']?>" class="btn btn-outline-danger">Add To Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php // echo  '<pre>'?>
<?php //print_r($productById)?>

<?php include('footer.php'); ?>