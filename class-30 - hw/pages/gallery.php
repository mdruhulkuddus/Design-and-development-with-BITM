<?php include('header.php'); ?>

<div class="photo-gallery">
    <div class="container">
        <div class="intro">
            <h2 class="text-center">Lightbox Gallery</h2>
        </div>
        <div class="row photos">

            <?php foreach ($products as $product){  ?>

            <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="#" data-lightbox="photos"><img class="img-fluid" src="assets/image/<?php echo $product['image']?>"></a></div>
            <?php }?>
         </div>
    </div>
</div>


<?php include('footer.php'); ?>