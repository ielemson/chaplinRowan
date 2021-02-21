  
  
<?= $this->extend('templates/layouts') ?>

<?= $this->section('content') ?>

    <?= $this->include('templates/header') ?>
    <?= $this->include('templates/homeSlider') ?>

           <!--=========Who Section Start============-->
      <section class="pad95-100-top-bottom">
         <div class="container">
            <div class="row">
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                  <h3>who are we?</h3>
                  <span class="image_hover wdt-100 img marbtm30">
                  <img src="images/who-are-we.jpg" class="img-responsive zoom_img_effect" alt="whoare-image">
                  </span>
                  <p class="fnt-17">Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus. Aenean lacinia.  Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. </p>
                  <a data-animation="animated fadeInUp" class="header-requestbtn more-infobtn hvr-bounce-to-right" href="#">more info</a>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 why-choose">
                  <h3>Why choose us?</h3>
                  <ul class="whychoose-list">
                     <li class="delivery-icon">
                        <h4>Delivery Time</h4>
                        <p class="line-height26">Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas faucibus mollis interdum. </p>
                     </li>
                     <li class="technology-icon">
                        <h4>Smart Technology</h4>
                        <p class="line-height26">Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas faucibus mollis interdum. </p>
                     </li>
                     <li class="support-icon">
                        <h4>24/7 Support</h4>
                        <p class="line-height26">Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas faucibus mollis interdum. </p>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </section>
      <!--=========Who Section end============-->
      <!--=========Wordpress Bestthing Start============-->
      <section class="home2 bestthing-section">
         <div class="container">
            <div class="row ">
               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 bestthing-text-column">
                  <h2>THE NEXT BEST THING IN 
                     <span>INDUSTRY WORDPRESS</span>
                  </h2>
                  <p class="fnt-17">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi dicta sunt explicabo. </p>
               </div>
            </div>
         </div>
      </section>
      <!--=========Wordpress Bestthing end============-->
      <!--=========Our Services Start============-->
      <section class="pad95-50-top-bottom">
         <div class="container">
            <h3 class="text-center">Our Services</h3>
            <div class="row">
            <?php if($services) : ?>
            <?php   foreach($services as $service): ?>
<!-- 
            <div class="col-md-4 col-sm-4 col-xs-12 marbtm50 service-list-column">
                  <a href="manufacturing.html" >
                     <span class="image_hover"> <img src="images/who-are-we.jpg" class="img-responsive zoom_img_effect" alt="Manufacture-image"></span>
                     <div class="service-heading service-manufactureicon">
                        <h5><?= $service['header']?></h5>
                        <span class="read-more-link">Read More</span>
                     </div>
                  </a>
               </div> -->

               
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 home3-service-column marbtm50">
                  <a href="/service/<?=$service['slug'];?>">
                  <span class="image_hover img">
                  <img src="images/who-are-we.jpg" class="img-responsive zoom_img_effect" alt="manufacture-image">
                  </span>  </a>
                  <h4> <?= $service['header']?></h4>
                  <p class="line-height26 marbtm20"><?= substr($service['description'],0,150),'...';?>. </p>
                  <span class="read-more-link"><a href="/service/<?=$service['slug'];?>">Read More</a></span>
               </div>
               <?php endforeach; ?> 
            </div>
            <a data-animation="animated fadeInUp" class="header-requestbtn more-infobtn hvr-bounce-to-right" href="/services">more services</a>
        <?php endif; ?> 
        </div>
      </section>
      <!--=========Our Services end============-->
      <!--=========High Quality Start============-->
      <section class="hight-level-section background-variation">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h2>In <span>quality assurance a constant effort </span> is made to enhance the quality practices in the organization.</h2>
               </div>
               <div class="col-lg-6 col-md-6 col-xs-12 col-xs-12">
                  <p class="fnt-17">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
               </div>
               <div class="col-lg-6 col-md-6 col-xs-12 col-xs-12 text-center">
                  <ul class="icon_size">
                     <li class="vision-icon"><i class="fa fa-eye"></i>Vision</li>
                     <li class="value-icon"><i class="fa fa-line-chart"></i>Values</li>
                     <li class="mission-icon"><i class="fa fa-rocket"></i> Mission</li>
                  </ul>
               </div>
            </div>
         </div>
      </section>
      <!--=========High Quality end============-->
      <section class="pad95-100-top-bottom get_in_02">
         <div class="container">
            <h3 class="marbtm30 text-center">GET IN TOUCH</h3>
            <p class="fnt-18 marbtm50 text-center">Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus. Aenean lacinia. Donec ullamcorper nulla non metus auctor fringilla.</p>
            <div class="row">
               <!--=========Request Left Start============-->
               <div class="col-md-12 col-sm-12 col-xs-12 faq-mobile-margin">
                  <div class="row">
                     <div class="contact-form request-form">
                        <div class="col-lg-6 col-md-6 col-sm-6 form-field">
                           <input name="name" type="text" class="form-input" value="Full Name*">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 form-field">
                           <input name="name" type="text" class="form-input" value="Email*">
                        </div>
                        <div class="col-lg-6 col-md-6  col-sm-6 form-field">
                           <input name="name" type="text" class="form-input" value="Phone*">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 form-field">
                           <input name="name" type="text" class="form-input" value="Subject*">
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12  form-field">
                           <textarea name="name" cols="1" rows="2" class="form-comment">Comment*</textarea>
                        </div>
                        <div class="col-md-12 form-field request_btn">
                           <input name="name" type="button" class="form-submit-btn" value="Submit Now">
                        </div>
                     </div>
                  </div>
               </div>
               <!--=========Request Left end============-->
               <!--=========Request Right Start============-->
               <!--=========Request Left end============-->
            </div>
         </div>
      </section>
     

<?= $this->endSection() ?>
  
