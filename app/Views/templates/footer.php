   <footer>
         <div class="yellow-background solution-available text-center">
            <div class="container">
               <!-- <h5>For Any Solution We Are <span>Available</span> For You</h5> -->
               <!-- <a data-animation="animated fadeInUp" class="header-requestbtn contactus-btn hvr-bounce-to-right" href="contact.html">s</a> -->
            </div>
         </div> 
         <div class="ftr-section">
            <div class="container">
               <ul class="footer-info">
                  <!-- <li class="ftr-loc">121  Maxwell Farm Road,<br/> Washington DC, USA</li> -->
                  <li class="ftr-loc">G81 Road 2, VGC, <br/> Lekki Lagos Nigeria</li>
                  <li class="ftr-phn">09132099979</li>
                  <li class="ftr-msg">info@chaplinrowanltd.com</li>
                  <li class="ftr-support">9am To 5pm Mon-Fri</li>
               </ul>
               <div class="row">
                  <div class="col-md-4 col-sm-6 col-xs-12  ftr-about-text">
                     <h6>About Us</h6>
                     <p class="marbtm20 line-height26">Chaplin Rowan Services Limited is an Oil and Gas servicing and support company, with a vision to provide dependable, cost effective</p>
                     <a class="ftr-read-more" href="/about">Read More</a>
                  </div>
                  <div class="col-md-3 col-sm-6 col-xs-12 ftr-sol-column">
                     <h6>Our Solutions</h6>
                     <ul class="footer-link">
                        <!-- <li><a href="#">- Manufacturing</a></li>
                        <li><a href="#">- CNC Industry</a></li>
                        <li><a href="#">- Chemical Industry</a></li>
                        <li><a href="#">- Energy Engineering</a></li>
                        <li><a href="#">- Oil Industry</a></li> -->
                        <?php if($services) : ?>
                        <?php foreach($services as $service): ?>
                           <li><a a href="/service/<?=$service['slug'];?>"><?=$service['header']?></a></li>
                        <?php endforeach; ?>
                        <?php endif; ?>
                        <a class="ftr-read-more" href="/services">View All</a>
                     </ul>
                  </div>
                  <div class="col-md-2 col-sm-6 col-xs-12 ftr-link-column">
                     <h6>Quick Links</h6>
                     <ul class="footer-link">
                        <li><a href="/about">- About Us</a></li>
                        <li><a href="/contact">- Contact Us</a></li>
                        <!-- <li><a href="https://ds1-eude-ss.host.gl:2096/" target="_blank">- Staff Login</a></li> -->
                        <!-- <li><a href="#">- Request A Quote</a></li>
                        <li><a href="#">- FAQ</a></li>  -->
                     </ul>
                  </div>
                  <div class="col-md-3 col-sm-6 col-xs-12 ftr-follow-column pull-right">
                     <h6>Follow Us</h6>
                     <div class="header-socials footer-socials"> 
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> 
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> 
                        <!-- <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>  -->
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> 
                     </div>
                     <span class="ftr-logo img"><img src="images/black-logo.png" class="img-responsive" alt="logo-image"></span>
                  </div>
               </div>
               <div class="footer-btm">
                  <div class="col-md-6 col-sm-6 col-xs-12 pad-left_zero pad-right_zero">
                     <p>Copyright © <?php echo Date('Y'); ?> Chaplin Rowan. All Rights Reserved.</p>
                  </div>
                  <!-- <div class="col-md-4 col-sm-6 col-xs-12 pad-left_zero pad-right_zero pull-right">
                     <p class="text-right">Developed by: <a href="">Elemson Ifeanyi</a></p>
                  </div> -->
               </div>
            </div>
         </div>
      </footer>

  