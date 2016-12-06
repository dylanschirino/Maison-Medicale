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
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
    <?php wp_head(); ?>
  </head>
  <body class="no-js">
    <div class="site-container">
      <div class="site-pusher">
        <header class="header">
          <div class="header__content">
            <h1 class="header__logo"><a class="header__logolink" href="<?php echo the_permalink('5');?>"><img class="header__img" src="<?php echo get_template_directory_uri().'/images/svg/logo.svg';?>" width="121" height="72" alt="Centre de santé intégré"><span class="hidden"> - <?php the_title();?></span></a></h1>
