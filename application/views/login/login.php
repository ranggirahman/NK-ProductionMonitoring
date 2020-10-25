<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta charset="utf-8">
    <meta name="theme-color" content=""/>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?=base_url();?>" />
    <meta property="og:site_name" content="Nindya Karya" />
    <meta property="og:title" content="Nindya Karya" />
    <meta name="description" content="Nindya Karya Test Site">
    <link rel="canonical" href="<?=base_url();?>"/>
	<title><?php echo isset($title)?$title:'Nindya Karya';?></title>

	<!-- Icon -->
	<link href="<?=base_url();?>assets/img/favicon.ico" rel="icon" type="image/x-icon" />

	<!-- Css -->
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/materialicons/material-icons.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/modification.css">

	<!-- Js -->
    <script src="<?=base_url();?>assets/jquery/jquery.js"></script>
    <script src="<?=base_url();?>assets/bootstrap/js/popper.js"></script>
    <script src="<?=base_url();?>assets/bootstrap/js/bootstrap.js"></script>

</head>
<body>
	<div class="container-fluid">
        <div class="row">
            <div class="col-lg-9 d-none d-sm-block my-auto p-0">
                <img style="object-fit: cover; width: 100%; height: 100vh;" src="<?= base_url(); ?>assets/img/dock.jpg">
            </div>
            <div class="col-12 col-lg-3 shadow-lg">
                <div class="card border-0" style="height: 100vh;">
                    <div class="card-body justify-content-center d-flex">
                        <div class="my-auto text-center w-100">
                            <img class="mb-4" style="width: 100px;" src="<?= base_url(); ?>assets/img/logo.png">
                            <div class="form-group border border-black-50 rounded">
                                <input name="user" type="text" class="form-control border-0" placeholder="Username" required autofocus min="3" pattern=".{3,}" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <div class="input-group border border-black-50 rounded" id="show_hide_password">
                                    <input id="password" name="pass" type="password" class="form-control border-0" style="width: 170px;" placeholder="Password" required min="3" pattern=".{3,}" autocomplete="off">
                                    <div class="input-group-addon">
                                        <a class="btn bg-white border-0 px-2" onclick="showpass()"><i class="material-icons text-muted" style="font-size: 18px;" id="pass_indicator">visibility</i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="justify-content-between d-flex">
                                <a href="" class="text-muted ml-1 my-auto" style="font-size: 15px;" title="Forgot Password">Forgot ?</a>
                                <a href="<?=base_url();?>dashboard" class="btn btn-nk">Sign in</a>
                            </div>
                            
                            <div class="mt-3 mb-4">
                                <div class="text-center" style="margin-bottom: -26px;"><div class="text-black-50 badge bg-white">OR</div></div>
                                <hr>
                            </div>

                            <a href="" class="btn btn-outline-nk w-100"><span class="font-weight-light">Continue with</span> <span class="font-weight-bold">SSO</span></a>
                    	</div>
                	</div>
	                <div class="card-footer bg-transparent border-0">
	                    <div class="text-muted small justify-content-between d-flex">
	                        <div>&copy; <?php echo date("Y"); ?> Nindya Karya</div>
	                        <div title="<?=getenv("HOSTNAME")? getenv("HOSTNAME") : null;?>">
	                            V 1.0
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<script type="text/javascript">

	// password show hide logic
	$sp = 0;
	function showpass() {
		if( $sp == 0 ){
			$('#password').prop('type', 'text');
			$('#pass_indicator').html('visibility_off');
			$sp = 1;
		}else{
			$('#password').prop('type', 'password');
			$('#pass_indicator').html('visibility');
			$sp = 0;
		}
	}
</script>