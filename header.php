<?php

?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <?php 
            if (isset($_SERVER['HTTP_USER_AGENT']) && 
                (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
                    header('X-UA-Compatible: IE=edge,chrome=1');
        ?>
        <title>Pete Lower | Musicians and Programmer</title>
        <meta name="description" content="I'm Pete Lower, I write code for the Internet (PHP, Javascript) and make music (i9mh.com).">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script src="js/vendor/jquery.sticky.js"></script>
		<script src="js/plugins.js"></script>

		<link href='http://fonts.googleapis.com/css?family=Lobster|Changa+One|Merriweather' rel='stylesheet' type='text/css'>
        
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class='github-ribbon'>
	        <a href="https://github.com/hawkeye126"><img style="position: absolute; top: 0; left: 0; border: 0;" src="https://camo.githubusercontent.com/8b6b8ccc6da3aa5722903da7b58eb5ab1081adee/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f6f72616e67655f6666373630302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_left_orange_ff7600.png"></a>
	    </div>
        <div id="header-container" class="header-container">
            <header class="wrapper clearfix">
			<h1 class="title"><a href="/">PeteLower.Com</a></h1>
                <nav>
                    <ul>
                        <li><a href="#area-two">Dev</a></li>
                        <li><a href="#area-three">Music</a></li>
                        <li><a href="#area-four">Life</a></li>
                        <li><a href="http://peteygreen.wordpress.com">Blog</a></li>
                    </ul>
                </nav>
            </header>
        </div>

        <div class="main-container">
            