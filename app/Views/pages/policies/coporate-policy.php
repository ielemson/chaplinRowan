  
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
                     <img src="/images/corporate-policy.jpg" class="img-responsive zoom_img_effect" alt="manufacture-image">
                     </span>
                     <h3>Coporate Policy</h3>
                     <p>We are fully committed to maintaining the highest standards of occupational health, safety and protection of the environment in all its operations. We consider the safety of our personnel along with the protection of the environment in which we operate, a top priority in achieving our goal of delivering projects and services of highest quality standard to its clients, partners and all stakeholders.</p>
                     <p> We have put HSE processes in place for the continuous identification and assessment of all hazards and risks associated with our operations. We have also developed policies to ensure that all our business operations are carried out in line with regulatory requirements and international best practices</p>
                    
                  </div>
                
               </div>
               <!--=========Servie Right end============-->
               <!--=========Servie Left Start============-->
               <div class="col-md-4 left-column">
                  <ul class="category-list" >
                  <li><a href="hse">Health Safety &amp; Environment</a></li>
                     <li><a href="quality-assurance" >Quality Assurance Policy</a></li>
                     <li><a href="corporate-policy" class="active-category">Corporate Policy</a></li>
        
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
  
