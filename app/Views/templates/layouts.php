
<!DOCTYPE html>
<html lang="eng">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title><?=$title ?? 'Home :: ChaplinRowan Limited';?></title>
      <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
      <link rel="icon" href="images/favicon.png" type="image/x-icon">
      <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet">
      <link href="<?php echo base_url('css/style.css'); ?>" rel="stylesheet">
      <link rel="stylesheet" href="<?php echo base_url('css/animate.min.css'); ?>">
      <link href="<?php echo base_url('css/responsive_bootstrap_carousel.css'); ?>" rel="stylesheet" media="all">
      <link href="<?php echo base_url('css/loader.css'); ?>" rel="stylesheet" media="all">
   </head>

   <body>

   <?= $this->renderSection('content') ?>

   <?= $this->include('templates/footer') ?>

   <script src="<?= base_url('js/jquery.min.js'); ?>"></script> 
   <script src="<?= base_url('js/bootstrap.min.js'); ?>"></script> 
   <script src="<?= base_url('js/jquery.touchSwipe.min.js'); ?>"></script> 
   <script src="<?= base_url('js/responsive_bootstrap_carousel.js'); ?>"></script> 
   <script src="<?= base_url('js/custom.js'); ?>"></script>
   <script src="<?= base_url('js/slick.js'); ?>"></script>

   <script>
 
   </script>
   
   </body>
</html>