<?= $this->extend('templates/layouts') ?>

<?= $this->section('content') ?>

<?= $this->include('templates/banner') ?>

<section class="pad95-100-top-bottom">
         <div class="container">
            <p class="fnt-18 marbtm50">Create a new service with the form below.</p>
            <div class="row">
               <!--=========Request Left Start============-->
               <form acttion="create" method="post" accept-charset="utf-8" enctype="multipart/form-data">
               <?= csrf_field() ?>
               <div class="col-md-12 col-sm-12 col-xs-12 faq-mobile-margin">
                <div class="contact-form request-form">
                     <div class="col-lg-6 col-md-12 form-field">
                        <input name="header" type="text" class="form-input" placeholder="Service header" required>
                     </div>
                    
                     <div class="col-lg-6 col-md-12 form-field">
                        <input name="file" type="file" class="form-input" placeholder="service image" required>
                     </div>
                  
                     <div class="col-lg-12 col-md-12 form-field">
                        <textarea name="description" cols="1" rows="2" class="form-comment" required placeholder="Service Description*"></textarea>
                     </div>
                     <div class="col-md-12 form-field">
                        <!-- <input  type="submit" class="form-submit-btn" > -->
                        <button type="submit" class="form-submit-btn">Submit</button>
                     </div>
                  </div>
                
               </div>
            </form>
            </div>
         </div>
      </section>
<?= $this->endSection() ?>