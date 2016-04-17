﻿<?php
require_once('template/client.php');
?>
<!DOCTYPE html>
<html lang="en">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>BizKit Business Solutions</title>
	<meta name="description" content="">
	<link href='http://www.edgekit.com/favicon.ico' rel='icon' type='image/vnd.microsoft.icon'/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/jquery.base64.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/knockout-3.2.0.js"></script>
    <script src="js/jquery-ui.min.js"></script>   
</head>
<body>
	<!--[if lt IE 10]>
		<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	<![endif]-->
	
	<!-- fixed navigation bar -->
	<div class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#b-menu-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/bizkit2/"><?php echo $clientName;?></a>
            </div>
        </div> <!-- /.container -->
	</div> <!-- /.navbar -->
	
	<!-- main container -->
	<div class="container">
