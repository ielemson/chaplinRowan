<?= $this->extend('templates/layouts') ?>

<?= $this->section('content') ?>

<?= $this->include('templates/banner') ?>

<!--=========Contact Section Start============-->
<section class="pad100-top-bottom">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 contact-info-column text-center">
<img src="images/contact-address-icon.png" alt="address-icon">
<h4>Location</h4>
<p class="fnt-17">Plot G81 Road 2, VGC, Lekki Epe Exp. Way,Lagos.</p>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12  contact-info-column text-center">
<img src="images/contact-phn-icon.png" alt="phone-icon">
<h4>Phone</h4>
<p class="fnt-17">09132099979</p>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12  contact-info-column text-center">
<img src="images/contact-msg-icon.png" alt="message-icon">
<h4>Email</h4>
<p class="fnt-17">info@chaplinrowanltd.com</p>
</div>
</div>
<div class="row text-center">
<h3 class="mar-btm30">Leave us your info</h3>
<p class="fnt-18">and we will get back to you.</p>
<div class="contact-form">

<?php $validation = \Config\Services::validation(); ?>

      

            <div role="alert">
            <?= $validation->listErrors() ?>
             </div>

<form method="post"  class="contact-us" id="contact_form">
<?= csrf_field() ?>
<div class="col-md-6 form-field input-halfrght">
   <input name="fullName" type="text" class="form-input" placeholder="Full Name*" required>
   
</div>
<div class="col-md-6 form-field input-halflft">
   <input name="email" type="email" class="form-input" placeholder="Email*" required>
</div>
<div class="col-md-6 form-field input-halfrght">
   <input name="phone" type="text" class="form-input" placeholder="Phone Number*" required>
</div>
<div class="col-md-6 form-field input-halflft">
   <input name="subject" type="text" class="form-input" placeholder="Subject of enquiry*" required>
</div>

<div class="col-lg-12 col-md-12 form-field">
   <textarea name="enquiry" cols="1" rows="2" class="form-comment" placeholder="Leave your enquiry here..*" required></textarea>
</div>
<div class="col-md-12 form-field no-margin">
   <button  type="submit" id="sendEmail" class="form-submit-btn">Contact Us</button>
</div>
</form> 

</div>
</div>
</div>
</section>
<!-- <div class="contact_map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2381.7399040776495!2d-6.261147484122739!3d53.34791197997939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!3m2!1sen!2sus!4v1462581622087" ></iframe>
</div> -->
<div class="contact_map">
<div class="map-responsive">
<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7928.891407164622!2d3.5451005245361866!3d6.465083241924691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sG81%20Road%202%2C%20Victoria%20Garden%20City%2C%20off%20Lekki%20Epe-Expressway%2C%20Lekki%20Peninsula%20Lagos%20Nigeria.!5e0!3m2!1sen!2sng!4v1581205219051!5m2!1sen!2sng" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="true"></iframe>
</div>
</div>
<!--=========Contact Section end============-->
<?= $this->endSection() ?>


 