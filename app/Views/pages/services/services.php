<?= $this->extend('templates/layouts') ?>

<?= $this->section('content') ?>

<?= $this->include('templates/banner') ?>

   <!--=========Services Start============-->
   <section class="pad100-50-top-bottom">
         <div class="container">
            <div class="row ">
               <div class="head-section service-head other-heading">
                  <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
                     <h3>OUR services</h3>
                  </div>
                  <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
                     <p class="fnt-18">With years of experience and real focus on customer satisfaction/delivery, you can trust on us for your next project. We provide a professional service for private and commercial customers.</p>
                  </div>
               </div>
               <?php if($serviceHeaders) : ?>
            <?php   foreach($serviceHeaders as $service): ?>

               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 home3-service-column marbtm50">
                  <a href="manufacturing.html">
                  <span class="image_hover img">
                  <img src="images/<?= $service['img']?>" class="img-responsive zoom_img_effect" alt="manufacture-image">
                  </span>  </a>
                  <h4> <?= $service['header']?></h4>
                  <p class="line-height26 marbtm20"><?= substr($service['description'],0,150),'...';?>. </p>
                  <span class="read-more-link"><a href="service/<?=$service['slug'];?>">Read More</a></span>
               </div>

     <?php endforeach;?>
        <?php endif; ?> 
              
          
              
            </div>
         </div>
      </section>
      <!--=========Services end============-->
<?= $this->endSection() ?>