<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<link href="/css/bootstrap.min.css" rel="stylesheet">
	<link href="/css/cohoda.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" media="screen" />

	<!-- Custom Fonts -->
	<link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    <title><?php wp_title(' '); ?><?php if(wp_title(' ', false)) { echo ' &raquo; '; } ?><?php bloginfo('name'); ?></title>

    </head>

    <body id="page-top" class="index">

    	<!-- Navigation -->
    	<nav class="navbar navbar-default navbar-fixed-top">
    		<div class="container">
    			<!-- Brand and toggle get grouped for better mobile display -->
    			<div class="navbar-header page-scroll">
    				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
    					<span class="sr-only">Toggle navigation</span>
    					<span class="icon-bar"></span>
    					<span class="icon-bar"></span>
    					<span class="icon-bar"></span>
    				</button>
    				<a class="navbar-brand page-scroll" href="/">
                        <img src="/img/logos/cohoda.png" class="img-responsive img-centered" alt="">
                    </a>

                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                       <li class="hidden">
                          <a href="/"></a>
                      </li>
                      <li>
                          <a class="page-scroll" href="/#about">About</a>
                      </li>
                      <li>
                          <a class="page-scroll" href="/#services">Services</a>
                      </li>
                      <li>
                          <a class="page-scroll" href="/#work">Work</a>
                      </li>
                      <li>
                          <a class="page-scroll" href="/#startups">Startups</a>
                      </li>
                      <li>
                          <a class="page-scroll" href="/#contact">Contact</a>
                      </li>
                      <li class="active">
                          <a class="page-scroll" href="/blog">Blog</a>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>
