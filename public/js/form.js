       
   $(document).on('submit','form.contact-us',function(e){
    // $("#submit_form").click(function(e){
    e.preventDefault();
 
    toastr.options.positionClass = 'toast-bottom-right';
    toastr.options.extendedTimeOut = 0; //1000;
    toastr.options.timeOut = 3000;
    toastr.options.fadeOut = 250;
    toastr.options.fadeIn = 250;
    //   var _token = $("input[name='_token']").val();
    
 
    $('#sendEmail').html('Sending...');
 
    emailjs.sendForm('service_rf9bmyh', 'template_vx02ap9', '#contact_form')
    .then(function(response) {
 
    $('#sendEmail').html('CONTACT US');
 
    jQuery("#contact_form")[0].reset();
 
    toastr["success"]('Your message has been recieved!');
 
    }, function(error) {
 
    toastr["error"]("Error, please try again");
 
    });
 
    });



       
   $(document).on('submit','form.request-form',function(e){

    e.preventDefault();
    
    toastr.options.positionClass = 'toast-bottom-right';
    toastr.options.extendedTimeOut = 0; //1000;
    toastr.options.timeOut = 3000;
    toastr.options.fadeOut = 250;
    toastr.options.fadeIn = 250;   
 
    $('.form-submit-btn').html('Sending...');
 
    emailjs.sendForm('service_rf9bmyh', 'template_get_in_touch', '#request_form')

    .then(function(response) {
 
    $('.form-submit-btn').html('SUBMIT NOW');
 
    jQuery("#request_form")[0].reset();
 
    toastr["success"]('Your message has been recieved!');
 
    }, function(error) {
 
    toastr["error"](error);
 
    });
 
    });