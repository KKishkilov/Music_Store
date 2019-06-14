<main role="main" class="container ">
    <div class="starter-template">
        <h1 class="text-center text-white  "> <?= $artist->artist_name; ?></h1>
        <p class="lead text-center  text-white ">
            Country : <?= $artist->country; ?>
        </p>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 text-center mx-auto">
                    <img src="<?php echo base_url('assets'.DS.'images'.DS.$artist->main_image); ?>" alt="" class="img-fluid">
                    <h4 class="text-white mt-4 mb-4">
                        Biography
                    <hr>
                    </h4>
                    <p>
                        
                    </p>
                </div>

            </div>
        </div>
    </div>
</main><!-- /.container -->
