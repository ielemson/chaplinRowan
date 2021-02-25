  <!--=========header start============-->
  <header class="header4">
         <div class="hdr-top-bar">
            <div class="container">
               <ul class="header-info">
                  <li class="address">G81 Road 2, VGC,Lekki Lagos Nigeria</li>
                  <li class="phn">09132099979,
                  info@chaplinrowanltd.com
                  </li>
               </ul>

               <!-- <ul class="header-info">
                     <li class="address">G81 Road 2, VGC, <br/> Lekki Lagos Nigeria</li>
                     <li class="phn">09132099979,<br/><a href="mailto:info@chaplinrowanltd.com">info@chaplinrowanltd.com</a></li>
                  </ul> -->
               <div class="hdr3-right hdr4-right">
                  <div class="header-socials"> 
                     <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> 
                     <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> 
                     <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> 
                     <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> 
                  </div>
                  <div class="search-column">
                     <button name="button" type="button" class="search-btn"  data-toggle="modal" data-target=".bs-example-modal-lg"></button>
                  </div>
               </div>
            </div>
         </div>
         <nav id="main-navigation-wrapper" class="navbar navbar-default ">
            <div class="container">
               <div class="navbar-header">
                  <div class="logo-menu"><a href="index.html"><img src="images/logo.png" alt="logo"></a></div>
                  <button type="button" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
               </div>
               <div id="main-navigation" class="collapse navbar-collapse ">
                  <a href="index" class="logo"><img src="images/logo.png" class="img-responsive display-block" alt="logo"></a>
                  <ul class="nav navbar-nav">
                     <li class="dropdown ">
                        <a href="/" class="active">Home</a>
                     </li>
                     <li class="dropdown">
                           <a href="#">About Us</a><i class="fa fa-chevron-down"></i>
                           <ul class="dropdown-submenu">
                              <li><a href="/about">Who We Are</a></li>
                              <li><a href="/our-mission">Our Mission</a></li>
                              <li><a href="/our-vision">Our Vision</a></li>
                           </ul>
                        </li>
                     <li class="dropdown ">
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
                           <a href="index.html">Policies</a><i class="fa fa-chevron-down"></i>
                           <ul class="dropdown-submenu">
                              <li><a href="/hse">HSE</a></li>
                              <li><a href="/quality-assurance">Quality Assurance</a></li>
                              <li><a href="/corporate-policy">Corporate Policy Statement</a></li>
                             
                           </ul>
                        </li>
                        <li><a href="https://ds1-eude-ss.host.gl:2096/" target="_blank">Staff Login</a></li>
                        <li><a href="/contact">contact us</a></li>
                     
                  </ul>
                  <div class="header-nav-right">
                     <span class="display-none">
                     <a class="header-requestbtn hvr-bounce-to-right" href="request-quote.html">Request A Quote</a></span>
                  </div>
               </div>
            </div>
         </nav>

         
      </header>
      <!--=========header end============-->