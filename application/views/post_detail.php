<div class="container">
    <div class="card mb-3">
        <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/posts/<?php echo $post[0]['image_name']; ?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?php echo $post[0]['title']; ?></h5>
            <p class="card-text"><?php echo $post[0]['long_description']; ?></p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
</div>