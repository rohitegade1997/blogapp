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
    <form enctype="multipart/form-data" id="addPost" name="addPost">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Select Category</label>
            <select class="form-control" id="category" name="category">
                <option value="">Select Category</option>
                <?php foreach ($categories as $category) { ?>
                    <option value="<?php echo $category->id; ?>"><?php echo $category->category_name; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Post Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Short Description</label>
            <textarea class="form-control" name="shortDescription" id="shortDescription" rows="2" placeholder="Short description"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Long Description</label>
            <textarea class="form-control" name="longDescription" id="longDescription" rows="3" placeholder="Long description"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Select Image</label>
            <input type="file" class="form-control-file" id="imageFile" name="imageFile">
        </div>
        <div class="form-group">
            <input type="button" class="btn btn-success" value="Add" id="addNewPost">
            <input type="button" class="btn btn-secondary" value="Cancel" id="back">
        </div>
    </form>
</div>
<script src="<?php echo base_url(); ?>assets/js/admin/add_post.js"></script>