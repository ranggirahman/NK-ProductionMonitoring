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
	<link href="<?=base_url();?>assets/img/favicon.png" rel="icon" type="image/x-icon" />

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
    <nav class="navbar navbar-expand-md fixed-top navbar-light bg-white justify-content-between" style="box-shadow: 0px 0px 1px 0px;">
        <div class="container-fluid justify-content-between d-flex user-disabled">
            <div class="d-flex"><a href="" class="bg-transparent text-white d-flex ml-2" role="button"><img class="my-auto mr-2" style="max-height: 24px;" src="<?= base_url(); ?>assets/img/logo-wide.png"></a></div>

            
                <div class="btn-group">
                    <button class="btn btn-white rounded d-flex py-1 px-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img id="my_photo" class="rounded-circle border border-light mr-2" style="object-fit: cover;height: 30px;width: 30px;" src="<?= base_url(); ?>assets/img/profile.jpg"><div class="font-weight-light text-muted my-auto">Ranggi Rahman</div>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right border-0 py-0">
                        <div class="card" style="width: 150px;">
                            <div class="card-body bg-transparent py-2">
                                <a href="" class="text-muted d-block py-1" style="font-size: 16px;"><i class="material-icons text-muted mr-2" style="font-size: 16px;">exit_to_app</i>Signout</a>
                            </div>
                        </div>
                    </div>
                </div>    
        </div>
    </nav>