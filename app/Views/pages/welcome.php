  
  
<?= $this->extend('templates/layouts') ?>

<?= $this->section('content') ?>

    <?= $this->include('templates/headerNav') ?>
    <?= $this->include('templates/homeSlider') ?>


<!--=========Who Section Start============-->
<section class="pad95-100-top-bottom">
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<h3>who we are</h3>
<span class="image_hover wdt-100 img marbtm30">
<img src="images/shop-banner.jpg" class="img-responsive zoom_img_effect" alt="whoare-image">
</span>
<p class="fnt-17">At Chaplin Rowan Services Limited, we are committed to helping our clients reach their goals by identifying with client projects and constantly striving to provide solutions for seamless operations to ensure the best value is obtained on time and on schedule. We provide the continual delivery of superior support while providing customer satisfaction.
100% Satisfaction Guarantee – We want you to be completely satisfied with our services. We will do whatever it takes to make you happy. No hassles, no problems.</p>
<a data-animation="animated fadeInUp" class="header-requestbtn more-infobtn hvr-bounce-to-right" href="/about">more info</a>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 why-choose">
<h3>Why choose us?</h3>

<ul class="whychoose-list">
<!-- <li class="delivery-icon"> -->
<p class="line-height26" style="margin-bottom:5px">As a fast-growing company, we can provide a wide range of professionally delivered services, including: </p>
</li>
<li class="delivery-icon">
<h4>Procurement and Supply Chain Management</h4>
<p class="line-height26">We specialize in procurement and supply chain management, cutting across the Oil & Gas industry inline with international best practices. </p>
</li>
<li class="technology-icon">
<h4>Supply of Personal Protective Equipment (PPE)</h4>
<p class="line-height26">We sepecialize in sales and supply of durabe safety equipment that shields workers from work-related hazrds & working environment.</p>
</li>
<li class="support-icon">
<h4>Business Support and Technical Documentation</h4>
<p class="line-height26">We specialise in providing indepth expertise to our clients,guiding them with their Business Support and Technical Documentation needs.</p>
</li>
<li class="service-cncicon">
<h4>Provision of Drilling and Production Chemicals</h4>
<p class="line-height26">We undertake the supply of chemicals for various drilling and production activities and for equipment maintenance support services across Nigeria.</p>
</li>
</ul>
</div>
</div>
</div>
</section>
<!--=========Who Section end============-->
<!--=========Wordpress Bestthing Start============-->
<!-- <section class="home2 bestthing-section">
<div class="container">
<div class="row ">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 bestthing-text-column">
<h2>THE NEXT BEST THING IN 
<span>OIL AND GAS SERVICES</span>
</h2>
<p class="fnt-17">As a fast-growing company, we can provide a wide range of professionally delivered services to suit our customer needs.</p>
</div>
</div>
</div>
</section> -->


<!--=========High Quality Start============-->
<section class="hight-level-section background-variation">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<h2>In <span>quality assurance a constant effort </span> is made to enhance the quality practices in the organization.</h2>
</div>
<div class="col-lg-6 col-md-6 col-xs-12 col-xs-12">
<p class="fnt-17">Our operations are handled by a set of qualified and innovative professionals who function in various capacities on each project, this has ensured consistency in  customer loyalty and excellent service delivery. </p>
</div>
<div class="col-lg-6 col-md-6 col-xs-12 col-xs-12 text-center">
<ul class="icon_size">
<li class="vision-icon"><a href="/our-vision"><i class="fa fa-eye"></i>Vision</a></li>
<!-- <li class="value-icon"><a href=""><i class="fa fa-line-chart"></i>Values</a></li> -->
<li class="mission-icon"><a href="/our-mission"><i class="fa fa-rocket"></i> Mission</a></li>
</ul>
</div>
</div>
</div>
</section>
<!--=========High Quality end============-->
<section class="pad95-100-top-bottom get_in_02">
<div class="container">
<h3 class="marbtm30 text-center">GET IN TOUCH</h3>
<p class="fnt-18 marbtm50 text-center">We will be glad to hear from you...</p>
<div class="row">
<!--=========Request Left Start============-->
<div class="col-md-12 col-sm-12 col-xs-12 faq-mobile-margin">
<div class="row">
        <form class="request-form" id="request_form">
                     <?= csrf_field() ?>
                        <div class="col-lg-6 col-md-6 col-sm-6 form-field">
                           <input name="fullName" type="text" class="form-input" placeholder="Full Name" required>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 form-field">
                           <input name="email" type="email" class="form-input" placeholder="Email" required>
                        </div>
                        <div class="col-lg-6 col-md-6  col-sm-6 form-field">
                           <input name="phone" type="text" class="form-input" placeholder="phone" required>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 form-field">
                           <input name="subject" type="text" class="form-input" placeholder="subject*" required>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12  form-field">
                           <textarea name="enquiry" cols="1" rows="2" class="form-comment" required>Comment*</textarea>
                        </div>
                        <div class="col-md-12 form-field request_btn">
                           <button  type="submit" class="form-submit-btn" >Submit Now</button>
                        </div>
                     </form>
</div>
</div>
<!--=========Request Left end============-->
<!--=========Request Right Start============-->
<!--=========Request Left end============-->
</div>
</div>
</section>


<?= $this->endSection() ?>
  
