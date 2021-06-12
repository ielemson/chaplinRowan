  
<?= $this->extend('templates/layouts') ?>

<?= $this->section('content') ?>

<?= $this->include('templates/banner') ?>

<section class="pad100-top-bottom">
         <div class="container">
            <div class="row">
			
			 <!--=========Servie Right Start============-->
             <div class="col-md-8 right-column">
                  <div class="service-right-desc">
                     <span class="image_hover ">
                     <img src="/images/quality-assurance.jpg" class="img-responsive zoom_img_effect" alt="manufacture-image">
                     </span>
                     <h3>Quality Assurance Policy</h3>
                     <p>We are committed to professional products and services delivery while adding value to its clients We are committed to implementation of quality standards in our processes to enable us satisfy our customers, meet statutory and regulatory requirements and ensure continual improvement of our Quality Management System. To enhance customer satisfaction, we shall review and revise our objectives periodically for continuous suitability. Management shall ensure that this Quality Policy is reviewed, communicated and understood by all employees.</p>
                  </div>
                
               </div>
               <!--=========Servie Right end============-->
               <!--=========Servie Left Start============-->
               <div class="col-md-4 left-column">
                  <ul class="category-list">
                     <li><a href="hse">Health Safety &amp; Environment</a></li>
                     <li><a href="quality-assurance" class="active-category">Quality Assurance Policy</a></li>
                     <li><a href="corporate-policy">Corporate Policy</a></li>
        
                  </ul>
                  <div class="contact-help">
                     <div class="office-info-col wdt-100">
                        <h4>CONTACT US </h4>
                        <ul class="office-information">
                           <li class="office-loc">
                           <span class="info-txt">Plot G81 Road 2, VGC, Lekki Epe Exp. Way, Lagos.</span>
                           </li>
                           <li class="office-phn">
                              <span class="info-txt fnt_17">09132099979</span>
                           </li>
                           <li class="office-msg">
                              <span class="info-txt fnt_17">info@chaplinrowanltd.com</span>
                           </li>
                        </ul>
                     </div>
                  </div>
            
               </div>
               <!--=========Servie Left end============-->
              
            </div>
         </div>
      </section>
    
<?= $this->endSection() ?>
  
