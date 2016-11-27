<!DOCTYPE html>
<html lang="fr">
  <head><!--[if lt IE 9]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
<![endif]-->
    <meta charset="utf-8">
    <meta name="description" content="<?php echo substr(get_field('meta-description'),3,-5);?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo the_title();?> - <?php echo bloginfo();?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/main.css';?>" type="text/css">
  </head>
  <body class="no-js">
    <div class="site-container">
      <div class="site-pusher">
        <header class="header">
          <div class="header__content">
            <h1 class="header__logo"><a class="header__logolink" href="<?php echo the_permalink('5');?>"><img class="header__img" src="<?php echo get_template_directory_uri().'/images/svg/logo.svg';?>" width="121" height="72"><span class="hidden">CSI Angleur - Accueil</span></a></h1>
