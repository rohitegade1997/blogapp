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

<section class="login-section bg-white">
    <div class="container align-items-center">
        <div class="login-wrapper">
            <div class="logo-dv">
                <img src="<?php echo base_url(); ?>assets/images/icons/sign-in-icon.svg" class="img-fluid">
                <h3 class="mt-1">Sign In</h3>
            </div>
            <form id="login" name="login">
                <div class="login-panel">
                    <div class="form-group">
                        <label class="custom-label">User Name</label>
                        <div class="login-field">
                            <input type="email" class="form-control" placeholder="Enter your email" id="email" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="custom-label">Password</label>
                        <div class="login-field">
                            <input type="password" class="form-control" placeholder="Enter your password" id="password" name="password">
                        </div>
                    </div>
                    <!-- <div class="form-group d-flex no-margin">
                        <div class="custom-control custom-checkbox mr-sm-2">
                            <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                            <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                        </div>
                    </div> -->
                </div>
                <div class="row login-action">
                    <div class="col-md-12 text-center no-padding">
                        <button type="button" class="btn login-btn-blue" id="sign_in">SIGN IN</button>
                        <hr>
                    </div>
                </div>
            </form>
        </div>
</section>

</html>
<script src="<?php echo base_url(); ?>assets/js/admin/login.js"></script>