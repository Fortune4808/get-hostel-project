$(document).ready(function() {
  var images = ["all-images/backgrounds/bg-1.jpg", "all-images/backgrounds/bg-2.jpg", "all-images/backgrounds/bg-3.jpg", "all-images/backgrounds/bg-4.jpg"];
  $.backstretch(images, { duration: 4000, fade: 2000 });
});


function _next_page(next_id) {
    $('.log-div').hide();
    $('#'+next_id).fadeIn(1000);
  }

  function alert_close(){
    $('.overlay-div').html('').fadeOut(200);
  }

  $(document).ready(function() {
    function trim(s) {
              return s.replace( /^\s*/, "" ).replace( /\s*$/, "" );
          }
  $("#login-info").keydown(function(e){
    if(e.keyCode==13){
      _log_in();
    }
  });
  });


function _get_form(page){
  $('.overlay-div').html('<div class="ajax-loader"><br><img src="all-images/image-pix/ajax-loader.gif"/></div>').fadeIn(500);
  var action='get_form';
  var dataString ='action='+ action+'&page='+ page;
  $.ajax({
  type: "POST",
  url: admin_local_url,
  data: dataString,
  cache: false,
  success: function(html){
      $('.overlay-div').html(html);}
  });
}



function _reset_password(){
  var email_address = $('#pass_email').val();

  if ( email_address == '' ){
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> EMAIL ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  }else{

    var btn_text = $('#submit_button').html();
    $('#submit_button').html('<i id="spinner" class="bi bi-arrow-repeat"></i> PROCESSING...');
    document.getElementById('submit_button').disabled = true;

    var dataString ='email_address=' + email_address;

    $.ajax({
      type: "POST",
      url: endpoint + '/admin/reset-password-api',
      data: dataString,
      dataType: 'json',
      beforeSend: function(xhr) {
        xhr.setRequestHeader('apiKey', apiKey);
      },
      success: function(data) {
        var success = data.success;
        var message = data.message;
        var staff_id = data.staff_id;
        var fullname = data.fullname;
        var email_address = data.email_address;

        if (success == true) {
          $('#success-div').html('<div><i class="bi-check-all"></i></div>SUCCESS!' + ' ' + message + "").fadeIn(500).delay(5000).fadeOut(100);
          $('#submit_button').html(btn_text);
          document.getElementById('submit_button').disabled=false;
          _get_resetPass_form(staff_id,fullname,email_address);
        }else{
          $('#not-success-div').html('<div><i class="bi-check-all"></i></div>ERROR!<br/>' + message + "").fadeIn(500).delay(5000).fadeOut(100);
          $('#submit_button').html(btn_text);
          document.getElementById('submit_button').disabled=false;
        }
      }

    });
  }
}



function _get_resetPass_form(staff_id,fullname,email_address){
  sessionStorage.setItem('staff_id', staff_id);
  var action='reset_password';
  $('.overlay-div').html('<div class="ajax-loader"><br><img src="all-images/image-pix/ajax-loader.gif"/></div>').fadeIn(500);
  var dataString ='action='+ action;
  $.ajax({
  type: "POST",
  url: admin_local_url,
  data: dataString,
  cache: false,
  success: function(html){
    $('.overlay-div').html(html);
    $('#pass_fullname').html(fullname);
    $('#pass_email').html(email_address);
  }
  });
}



function _finish_reset_pass(staff_id){
  var reset_pass_otp = $('#reset_pass_otp').val();
  var reset_password = $('#reset_password').val();
  var c_password = $('#c_password').val();

  if (reset_pass_otp == ''){
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> OTP ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  }else if (reset_password == ''){
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> PASSWORD ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  }else if (c_password ==''){
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> CONFIRMED PASSWORD ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  }else if (reset_password!=c_password) {
    $('#not-success-div').html('<div><i class="bi-x-circle"></i></div> Password NOT Match<br /><span>Check the password and try again</span>').fadeIn(500).delay(5000).fadeOut(100);
  }else{

    if ((reset_password.match(/^(?=[^A-Z]*[A-Z])(?=[^!"#$%&'()*+,-.:;<=>?@[\]^_`{|}~]*[!"#$%&'()*+,-.:;<=>?@[\]^_`{|}~])(?=\D*\d).{8,}$/)) && (reset_password.length >= 8)){

    var btn_text = $('#submit_btn').html();
    $('#submit_btn').html('<i id="spinner" class="bi bi-arrow-repeat"></i> PROCESSING...');
    document.getElementById('submit_btn').disabled = true;

    var staff_id = sessionStorage.getItem('staff_id');

    var dataString ='otp=' + reset_pass_otp + '&password=' + reset_password + '&staff_id=' + staff_id;

    $.ajax({
      type: "POST",
      url: endpoint + '/admin/finish-reset-password-api',
      data: dataString,
      cache: false,
      dataType: 'json',
      beforeSend: function(xhr) {
        xhr.setRequestHeader('apiKey', apiKey);
      },
      success: function(data){
        var success = data.success;
        var message = data.message;

        if (success==true){
          $('#success-div').html('<div><i class="bi-check-all"></i></div>SUCCESS!<br/>' + message + "").fadeIn(500).delay(5000).fadeOut(100);
          $('#submit_btn').html(btn_text);
          document.getElementById('submit_btn').disabled=false;
          sessionStorage.removeItem('user_id');
          alert_close();
          $('#pass_email').val("");
          password_success_alerts();
        }else{
          $('#not-success-div').html('<div><i class="bi-check-all"></i></div>ERROR!<br/>' + message + "").fadeIn(500).delay(5000).fadeOut(100);
          $('#submit_btn').html(btn_text);
          document.getElementById('submit_btn').disabled=false;
        }
        
      }
      });
  }else{
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> Password Error!<br><span>Check your password and try again</span>').fadeIn(500).delay(5000).fadeOut(100);
  }
}
}


function _resend_otp(ids, staff_id) {
  var btn_text = $('#' + ids).html();
  $('#' + ids).html('SENDING...');

  var staff_id = sessionStorage.getItem('staff_id');
  var dataString = 'staff_id=' + staff_id;
  
  $.ajax({
    type: "POST",
    url: endpoint + '/admin/resend-password-otp',
    data: dataString,
    beforeSend: function(xhr) {
      xhr.setRequestHeader('apiKey', apiKey);
    },
    cache: false, 
    success: function(info) {
      $('#success-div').html('<div><i class="bi-check-all"></i></div>' + 'SUCCESS!<br>' + '<span> OTP Resent Successfully </span>').fadeIn(500).delay(5000).fadeOut(100);
      $('#' + ids).html(btn_text);
    }
  });
}



function _check_password(){
	var password = $('#reset_password').val();
	if (password==''){
    $('#text-warning').hide();
    $('#pswd_info').fadeIn(500);
	}else{
    $('#pswd_info').hide();
		if(password.length<8){
			 $('#text-warning').fadeIn(500);
		}else{
			if (password.match(/^(?=[^A-Z]*[A-Z])(?=[^!"#$%&'()*+,-.:;<=>?@[\]^_`{|}~]*[!"#$%&'()*+,-.:;<=>?@[\]^_`{|}~])(?=\D*\d).{8,}$/)) {
				$('#text-warning').hide();
			  } else {
				 $('#text-warning').fadeIn(500);
			  }
		}
	}
 }

 function password_success_alerts(){
  async function showFixedAlert() {
    const result = await Swal.fire({
      html: `
      <div style="display: flex; flex-direction: column; align-items: center;">
        <img src="all-images/image-pix/success.gif" alt="Success" style="width: 100px; height: 100px;"/>
        <h2><strong>Password Successfully Updated</strong></h2>
        <p>You can proceed to login with your new passowrd.</p>
      </div>
    `,
      confirmButtonText: 'Login',
      allowOutsideClick: false,
      allowEscapeKey: false,
      allowEnterKey: false
    });
  
    if (result.isConfirmed) {
      _next_page('next_1');
    }
  }
  showFixedAlert();
  
 }


 function _log_in(){
  var email_address = $('#login_email').val();
  var password = $('#login_pass').val();

  if (email_address==''){
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> EMAIL ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  }else if (password==''){
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> PASSWORD ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  }else{

    var btn_text = $('#submit_btn').html();
    $('#submit_btn').html('<i id="spinner" class="bi bi-arrow-repeat"></i> AUTHENTICATING...');
    document.getElementById('submit_btn').disabled = true;

    var dataString ='email_address=' + email_address + '&password=' + password;

    $.ajax({
      type: "POST",
      url: endpoint + '/admin/login',
      data: dataString,
      cache: false,
      dataType: 'json',
      beforeSend: function(xhr) {
        xhr.setRequestHeader('apiKey', apiKey);
      },
      success: function(data){
        var success = data.success;
        var message = data.message;
        var staff_id = data.staff_id;
        var access_key = data.access_key;

        if (success==true){
          $('#success-div').html('<div><i class="bi-check-all"></i></div> SUCCESS!<br/>' + message + "").fadeIn(500).delay(5000).fadeOut(100);
          $('#submit_btn').html(btn_text);
          document.getElementById('submit_btn').disabled=false;
          sessionStorage.setItem('staff_id', staff_id);
          sessionStorage.setItem('access_key', access_key);
          window.location.href=portal_url;
        }else{
          $('#not-success-div').html('<div><i class="bi-check-all"></i></div> LOGIN ERROR!<br/>' + message + "").fadeIn(500).delay(5000).fadeOut(100);
          $('#submit_btn').html(btn_text);
          document.getElementById('submit_btn').disabled=false;
        }
        
      }
      });
  }
 }




