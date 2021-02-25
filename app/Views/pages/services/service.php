<?= $this->extend('templates/layouts') ?>

<?= $this->section('content') ?>

<?= $this->include('templates/banner') ?>

<section class="pad100-top-bottom">
         <div class="container">
            <div class="row">
			
			 <!--=========Servie Right Start============-->
               <div class="col-md-8 right-column">
                  <div class="service-right-desc">
                     <span class="image_hover">
                     <img src="/images/<?=$service['img'];?>" class="img-responsive zoom_img_effect" alt="material-image">
                     </span>
                     <div class="service-detail">
                     <h3><?=$service['header'];?></h3>
                     <?=$service['description'];?>
                  </div>
                  </div>
                  <!-- <div class="specialization-cl">
                     <div class="special-text project-mission">
                        <h3>PROJECT MISSION</h3>
                        <p class="mar-btm20">Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus. Aenean lacinia. Donec ullamcorper nulla non metus auctor fringilla.</p>
                        <p>Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus. Aenean lacinia.</p>
                     </div>
                  </div> -->
                 
               </div>
               <!--=========Servie Right end============-->
               <!--=========Servie Left Start============-->
               <div class="col-md-4 left-column">
                  <ul class="category-list">
                  <?php   foreach($serviceHeaders as $header): ?>
                    <li><a href="/service/<?=$header['slug'];?>"><?=$header['header'];?></a></li>
                     <?php endforeach;?>
                 </ul>
                
               </div>
               <!--=========Servie Left end============-->
              
            </div>
         </div>
      </section>
<?= $this->endSection() ?>