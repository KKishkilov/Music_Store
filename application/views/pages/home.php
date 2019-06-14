<main role="main" class="container ">
    <div class="starter-template">
        <h1 class="text-center text-white">Welcome to Music Store</h1>
        <p class="lead text-center text-white">
            Providing quality information about famous music artists and albums.
        </p>
        <?php if(count($artists) > 0): ?>
            <div class="container">
                <div class="row customGallery">
                    <?php foreach($artists as $artist): ?>
                        <div class="  grid-item">
                            <h5 class="text-white text-center"><?= $artist->artist_name; ?></h5>
                            <a href="<?php echo site_url('artists/preview/'. $artist->id); ?>">
                                <img class="img-fluid card" src="<?php echo base_url('assets'.DS.'images'.DS.$artist->main_image); ?>" alt="">
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</main><!-- /.container -->
