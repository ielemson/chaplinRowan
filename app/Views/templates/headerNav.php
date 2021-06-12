
<header class="header2">

         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 display-block ">
                  <a href="/" class="logo"><img src="/images/black-logo.png" class="img-responsive" alt="logo"></a>
               </div>
               <div class="col-lg-8 col-md-9 col-sm-12 col-xs-12 pull-right">
                  <ul class="header-info">
                  <li class="address">Plot G81 Road 2, VGC,<br/>Lekki Epe Exp. Way,Lagos</li>
                     <li class="phn">09132099979,<br/><a href="mailto:info@chaplinrowanltd.com">info@chaplinrowanltd.com</a></li>
                  </ul>
                  <div class="header-socials display-block"> 
                     <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> 
                     <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> 
                     <!-- <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>  -->
                     <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> 
                  </div>
               </div>
            </div>
         </div>
         <nav id="main-navigation-wrapper" class="navbar navbar-default navbar2-wrap ">
            <div class="container">
               <div class="navbar-header">
                  <div class="logo-menu"><img src="/images/black-logo.png" alt="logo"></div>
                  <button type="button" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
               </div>
               <div class="var2-nav">
                  <div id="main-navigation" class="collapse navbar-collapse ">
                     <ul class="nav navbar-nav">
                        <li>
                           <a href="/" class='<?= $status ?? '' ?>'>Home</a>
                          
                        </li>
                        <li class="dropdown">
                           <a href="#" >About Us</a><i class="fa fa-chevron-down"></i>
                           <ul class="dropdown-submenu">
                              <li><a href="/about">Who We Are</a></li>
                              <li><a href="/our-mission">Our Mission</a></li>
                              <li><a href="/our-vision">Our Vision</a></li>
                           </ul>
                        </li>
                        <li class="dropdown">
                           <a href="#">Our Services</a><i class="fa fa-chevron-down"></i>
                           <ul class="dropdown-submenu">
                           <?php if($serviceHeaders) : ?>
                           <?php   foreach($serviceHeaders as $header): ?>
                              <li><a href="/service/<?=$header['slug'];?>"><?=$header['header'];?></a></li>
                           <?php endforeach;?>
                           <?php endif; ?>
                           </ul>
                        </li>
                        <li class="dropdown ">
                           <a href="#">Policies</a><i class="fa fa-chevron-down"></i>
                           <ul class="dropdown-submenu">
                              <li><a href="/hse">HSE</a></li>
                              <li><a href="/quality-assurance">Quality Assurance</a></li>
                              <li><a href="/corporate-policy">Corporate Policy Statement</a></li>
                             
                           </ul>
                        </li>
                        <li><a href="https://ds1-eude-ss.host.gl:2096/" target="_blank">Staff Login</a></li>
                        <li><a href="/contact">contact us</a></li>
                     </ul>
                      <div class="search-column search-fl">
                        <button name="button" type="button" class="search-btn"  data-toggle="modal" data-target=".bs-example-modal-lg"></button>
                     </div>
                     <a class="header-requestbtn header2-requestbtn hvr-bounce-to-right" href="/contact">Request A Quote</a>
                  </div> 
               </div>
            </div>
         </nav>
      </header> 

      <?php 
$uri = current_url(true);
// echo (string)$uri;  // http://example.com
?>