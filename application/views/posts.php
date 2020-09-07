<div class="row">
    <?php
    foreach ($posts as $post) {
    ?>
        <div class="col-sm-3 mb-4">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/posts/<?php echo $post->image_name; ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $post->title; ?></h5>
                    <p class="card-text"><?php echo $post->short_description; ?></p>
                    <a class="btn btn-primary" href="<?php echo base_url() . "home/post?id=" . $post->id; ?>" target="_blank">Learn More</a>
                </div>
            </div>
        </div>
    <?php } ?>
</div>