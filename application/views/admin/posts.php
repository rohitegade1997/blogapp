<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->helper('url');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog Application</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-4.2.1.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/all.min.css">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/slider.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-4.2.1.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</head>

<div class="container">
    <br /><br />
    <p><input type="button" class="btn btn-success" value="Add Post" id="addPost"></p>
    <!-- <p><button class="btn btn-success">Add Post</button></p> -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Post Name</th>
                <th>Edit Post</th>
                <th>Delete Post</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($posts as $post) {
            ?>

                <tr>
                    <td><?php echo $post->title; ?></td>
                    <td><button class="btn btn-info">Edit</button></td>
                    <td><button class="btn btn-danger">Delete<input type="hidden" value="<?php echo $post->id; ?>"></button></td>
                </tr>
            <?php  } ?>
        </tbody>
    </table>
</div>
<script src="<?php echo base_url(); ?>assets/js/admin/posts.js"></script>