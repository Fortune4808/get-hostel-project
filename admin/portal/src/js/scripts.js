$(document).ready(function() {
  var images = ["all-images/backgrounds/cover-pix.jpg"];
  $.backstretch(images, { duration: 4000, fade: 2000 });
});

function _next_page(next_id) {
  $('.log-div').hide();
  $('#'+next_id).fadeIn(1000);
}

function alert_close(){
  $('.overlay-div').html('').fadeOut(200);
}


function _get_page(page){
  $('#main-div').html('<div class="ajax-loader"><br><img src="all-images/image-pix/ajax-loader.gif"/></div>').fadeIn(500);
      var action='get_page';
      var dataString ='action='+action+'&page='+page;
      $.ajax({
      type: "POST",
      url: admin_portal_local_url,
      data: dataString,
      cache: false,
      success: function(html){
          $('#main-div').html(html);
      }
    });
}

function _get_form(page){
  $('.overlay-div').html('<div class="ajax-loader"><br><img src="all-images/image-pix/ajax-loader.gif"/></div>').fadeIn(500);
      var action='get_form';
      var dataString ='action='+action+'&page='+page;
      $.ajax({
      type: "POST",
      url: admin_portal_local_url,
      data: dataString,
      cache: false,
      success: function(html){
          $('.overlay-div').html(html);
      }
    });
}


function _get_form_with_id(page, ids){
  $('.overlay-div').html('<div class="ajax-loader"><br><img src="all-images/image-pix/ajax-loader.gif"/></div>').fadeIn(500);
  var action='_get_form_with_id';
  var dataString = 'action=' + action + '&page=' + page + '&ids=' + ids;
  $.ajax({
  type: "POST",
  url: admin_portal_local_url,
  data: dataString,
  cache: false,
  success: function(html){
      $('.overlay-div').html(html);}
  });
}



document.addEventListener('DOMContentLoaded', () => {
  const handleItemClick = (selector, removeClasses, addClasses) => {
    const listItems = document.querySelectorAll(selector);
    
    listItems.forEach(item => {
      item.addEventListener('click', () => {
        // Remove active classes from all list items
        listItems.forEach(li => {
          li.classList.remove(...removeClasses);
        });
        
        // Add active classes to the clicked item
        item.classList.add(...addClasses);
      });
    });
  };

  // Apply the function to the first set of items
  handleItemClick(
    'nav ul .side-active',
    ['shadow-left-border', 'bg-[#d4d4d4]'],
    ['shadow-left-border', 'bg-[#d4d4d4]']
  );

  // Apply the function to the second set of items
  handleItemClick(
    'nav ul .header-active',
    ['bg-white', 'bg-opacity-30'],
    ['bg-white', 'bg-opacity-30']
  );
});


function capitalizeWords(str) {
  return str.toLowerCase().replace(/\b\w/g, char => char.toUpperCase());
}

function validateTextInput(input) {
  input = input.trim();
  return input === '' || /^[a-zA-Z\s]+$/.test(input);
}

function validatePhoneNumber(input) {
  input = input.trim();
  return /^[\d\s()+-]+$/.test(input);
}



function _get_staff_login(staff_id){

  var dataString = 'staff_id=' + staff_id;

  $.ajax({
    type: "POST",
    url: endpoint + '/admin/fetch-staff-api?access_key='+access_key,
    data: dataString,
    dataType: 'json',
    beforeSend: function(xhr) {
      xhr.setRequestHeader('apiKey', apiKey);
    },
    cache: false,
    success: function(info) {
      var access_check = info.check;

      if (access_check==0){
        _logout_();
      }else{

      if (info.success==true) {
        var staff_data = info.data;
        var staff_fullname = staff_data.fullname;
        var last_login = staff_data.last_login;
        var staff_role = staff_data.role_name;
        var role_id = staff_data.role_id;
        var status_id = staff_data.status_id;

        var staff_profile = capitalizeWords(staff_fullname);
        var status_name = staff_data.status_name;
        var email_address = staff_data.email_address;
        var phoneno = staff_data.phoneno;
        var staff_id = staff_data.staff_id;
        var date = staff_data.date;
        var nationality = staff_data.nationality;
        var dob = staff_data.dob;
        var address = staff_data.address;

        var passport = staff_data.passport;
        var documentStoragePath = staff_data.documentStoragePath + '/' + passport;
        
        $("#staff_fullname").html(staff_fullname);
        $("#last_login").html(last_login);
        $("#staff_role").html(staff_role);

        $("#staff_profile").html(staff_profile);
        $("#status_name").html(status_name);

        $("#surname").val(staff_fullname);
        $("#email_address").val(email_address);
        $("#phoneno").val(phoneno);
        $("#staff_id").val(staff_id);
        $("#r_date").val(date);
        $("#last_login_date").val(last_login);
        $("#role").val(staff_role);
        $("#role_id").val(role_id);
        $("#status").val(status_name);
        $("#status_id").val(status_id);
        $("#nationality").val(nationality);
        $("#address").val(address);
        $("#dob").val(dob);

        $("#profile_url").attr('src', documentStoragePath);
        $("#profile_picture").attr('src', documentStoragePath);

      } else {
        // Handle failure
      }
    }
    }
  });
}



function _all_active_staff(status_id) {
  $('#fetch_all_staff').html('<div class="ajax-loader"><br><img src="all-images/image-pix/ajax-loader.gif"/></div>').fadeIn(500);
  var search_txt = $('#search_txt').val();
  var dataString = 'search_txt=' + search_txt + '&status_id=' + status_id;

  $.ajax({
    type: 'POST',
    url: endpoint + '/admin/fetch-staff-api?access_key='+access_key,
    data: dataString,
    dataType: 'json',
    beforeSend: function(xhr) {
      xhr.setRequestHeader('apiKey', apiKey);
    },
    cache: false,
    success: function(info) {
      var fetch = info.data;
      var success = info.success;
      var message = info.message;
      var access_check = info.check;

      var text = '';

      if (access_check==0){
        _log_out();
      }else{

      if (success == true) {
        for (var i = 0; i < fetch.length; i++) {
          var staff_id = fetch[i].staff_id;
          var staff_fullname = fetch[i].fullname.toUpperCase();
          var status_name = fetch[i].status_name.toUpperCase();
          var staff_phoneno = fetch[i].phoneno;
          var passport = fetch[i].passport;
          var documentStoragePath = fetch[i].documentStoragePath;

          text +=

            '<div class="w-[45%] h-[130px] bg-[#f0f0f0] rounded-[5px] cursor-pointer hover:shadow-profile-border hover:bg-white mb-[20px]" onClick="_get_form_with_id(' + "'admin-profile-module'" + "," + "'" + staff_id+ "'" + ')">' +
                '<div class="w-[100%] h-[130px] flex items-center gap-[15px]">'+
                    '<div class="w-[100px] h-[100px] shadow-picture-box-border ml-[15px] rounded-[5px]">'+
                        '<div class="w-[80px] h-[80px] bg-black mt-[10px] ml-[10px] rounded-[5px]">'+
                            '<img src="' + documentStoragePath + '/' + passport + '" class="w-[100%] h-[100%] object-cover" style="width: 80px; height: 80px; object-position: top;"/>'+
                        '</div>'+
                    '</div>'+

                   '<div class="flex flex-col gap-1 text-[#424141]">'+
                        '<p class="font-bold">' + staff_fullname + '</p><hr class="w-[100px] border border-[#FF8A33]"/>'+
                        '<p class="text-[10px] pl-[10px]">STAFF ID: ' +  staff_id + '</p>'+
                        '<p class="text-[10px] pl-[10px]">' +  staff_phoneno + '</p>'+
                        '<p class="text-[10px] pl-[10px] text-[#FF8A33] font-bold">' + status_name + '</p>'+
                   '</div>'+
                '</div>'+
            '</div>';


        }

        $('#fetch_all_staff').html(text);
      } else {
        text +=
          '<div class="false-notification-div">' +
          "<p> " + message + " </p>" + '</div>';
        $('#fetch_all_staff').html(text);
      }
    }
    },
  });
}



function _get_staff_profile(staff_id) {
  var dataString ='staff_id=' + staff_id;
  $.ajax({
    type: "POST",
    url: endpoint + '/admin/fetch-staff-api?access_key='+access_key,
    data: dataString,
    dataType: 'json',
    beforeSend: function(xhr) {
      xhr.setRequestHeader('apiKey', apiKey);
    },
    cache: false,
    success: function(info) {
      var success = info.success;
      var access_check = info.check;

      if (access_check==0){
        _log_out();
      }else{
      if(success==true){
        var staff_data = info.data;
        var staff_fullname = staff_data.fullname;
        var last_login = staff_data.last_login;

        var staff_profile = capitalizeWords(staff_fullname);
        var status = staff_data.status_name;
        var email_address = staff_data.email_address;
        var phoneno = staff_data.phoneno;
        var staff_id = staff_data.staff_id;
        var date = staff_data.date;
        var role_name = staff_data.role_name;
        var role_id = staff_data.role_id;
        var status_name = staff_data.status_name;
        var status_id = staff_data.status_id;
        var registrar_staff_id = staff_data.registrar_staff_id;
        var registrar_fullname = staff_data.registrar_fullname;
        var dob = staff_data.dob;
        var address = staff_data.address;
        var nationality = staff_data.nationality;

        var passport = staff_data.passport;
        var documentStoragePath = staff_data.documentStoragePath + '/' + passport;
        
        $("#fullname").html(staff_profile);
        $("#login_date").html(last_login);
        $("#staff_status").html(status);

        $("#surname").val(staff_fullname);
        $("#email_address").val(email_address);
        $("#phoneno").val(phoneno);
        $("#dob").val(dob);
        $("#staff_id").val(staff_id);
        $("#r_date").val(date);
        $("#last_login_date").val(last_login);
        $("#registrar_id").val(registrar_staff_id);
        $("#registrar_fullname").val(registrar_fullname);
        $("#nationality").val(nationality);
        $("#address").val(address);

        $("#profile_url").attr('src', documentStoragePath);

        $("#role_id").append('<option value="' + role_id + '" selected="selected">' + role_name +"</option>");
        $("#status_id").append('<option value="' + status_id + '" selected="selected">' + status_name +"</option>");
     }else{
      ///
    }
  }
    }
  });
}


function _add_new_staff(){
  var fullname = $('#fullname').val();
  var phoneno = $('#phoneno').val();
  var email = $('#email').val();
  var role_id = $('#role_id').val();
  var status_id = $('#status_id').val();

  if (fullname==''){
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> FULLNAME ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  }else if (phoneno==''){
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> PHONE NUMBER ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  }else if (email==''){
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> EMAIL ADDRESS ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  } else if (role_id === 'Select Role') {
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> ROLE ERROR!<br /><span>Please select a role</span>').fadeIn(500).delay(3000).fadeOut(100);
  } else if (status_id === 'Select Status') {
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> STATUS ERROR!<br /><span>Please select a status</span>').fadeIn(500).delay(3000).fadeOut(100);
  }else if (!validateTextInput(fullname)){
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> FULLNAME ERROR!<br /><span>Digit is not allowed in fullname input</span>').fadeIn(500).delay(3000).fadeOut(100);
  }else if  (!validatePhoneNumber(phoneno)){
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> PHONE ERROR!<br /><span>Please ensure you enter a valid phone numner</span>').fadeIn(500).delay(3000).fadeOut(100);

  }else{

    var btn_text  = $('#submit_btn').html();
    $('#submit_btn').html('<i id="spinner" class="bi bi-arrow-repeat"></i> PROCESSING...');
    document.getElementById('submit_btn').disabled = true;

    var dataString ='fullname=' + fullname + '&phoneno=' + phoneno + '&email_address=' + email + '&role_id=' + role_id + '&status_id=' + status_id;

    $.ajax({
      type: 'POST',
      url: endpoint + '/admin/add-new-staff-api?access_key='+access_key,
      data: dataString,
      dataType: 'json',
      beforeSend: function(xhr) {
        xhr.setRequestHeader('apiKey', apiKey);
      },
      cache: false,
      success: function (info){
        var success = info.success;
        var message = info.message;
        var access_check = info.check;
  
        if (access_check==0){
          _log_out();
        }else{
  
        if (success == true){
  
          $('#success-div').html('<div><i class="bi-check-all"></i></div>' + 'SUCCESS!<br>' + message).fadeIn(500).delay(5000).fadeOut(100);
          alert_close();
          _all_active_staff('');
        }else{
          $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div>'  +'ERROR!' + ' ' + message).fadeIn(500).delay(3000).fadeOut(100);
  
          $('#submit_btn').html(btn_text);
          document.getElementById('submit_btn').disabled = false;
        }
      }
      },
  
    });
  }
}



function _get_role(){ 
  $.ajax({
     type: "POST",
     url: endpoint + '/admin/fetch-role-api?access_key='+access_key,
     dataType: 'json',
     beforeSend: function(xhr) {
      xhr.setRequestHeader('apiKey', apiKey);
    },
     cache: false,
     success: function(info){
      var fetch=info.data;
      var success=info.success;
      var message=info.message;
      var access_check = info.check;

        var text ='';
        if (access_check==0){
          _log_out();
        }else{
      if(success==true){  
        for (var i=0; i<fetch.length; i++){
          var role_id =fetch[i].role_id;
          var role_name =fetch[i].role_name;
          text+='<option value="'+role_id+'">'+role_name+'</option>';  
      } 
      $('#role_id').append(text);
      

      }else{
          text+='<option value="'+role_id+'">'+message+'</option>';
          $('#role_id').append(text);
     }
    }
  }
  });
}


function _get_status(){  
  $.ajax({
     type: "POST",
     url: endpoint + '/admin/fetch-status-api?access_key='+access_key,
     dataType: 'json',
     beforeSend: function(xhr) {
      xhr.setRequestHeader('apiKey', apiKey);
    },
     cache: false,
     success: function(info){
      var fetch=info.data;
      var success=info.success;
      var message=info.message;
      var access_check = info.check;

        var text ='';
        if (access_check==0){
          _log_out();
        }else{
      if(success==true){  
        for (var i=0; i<fetch.length; i++){
          var status_id =fetch[i].status_id;
          var status_name =fetch[i].status_name;
          text+='<option value="'+status_id+'">'+status_name+'</option>';  
      } 
      $('#status_id').append(text);

      }else{
          text+='<option value="'+status_id+'">'+message+'</option>';
          $('#status_id').append(text);
     }
    }
  }
  });
}



function _all_active_users(status_id) {
  $('#fetch_all_users').html('<div class="ajax-loader"><br><img src="all-images/image-pix/ajax-loader.gif"/></div>').fadeIn(500);
  var search_txt = $('#search_txt').val();
  var dataString = 'search_txt=' + search_txt + '&status_id=' + status_id;

  $.ajax({
    type: 'POST',
    url: endpoint + '/admin/fetch-user-api?access_key='+access_key,
    data: dataString,
    dataType: 'json',
    beforeSend: function(xhr) {
      xhr.setRequestHeader('apiKey', apiKey);
    },
    cache: false,
    success: function(info) {
      var fetch = info.data;
      var success = info.success;
      var message = info.message;
      var access_check = info.check;

      var text = '';

      if (access_check==0){
        _log_out();
      }else{

      if (success == true) {
        for (var i = 0; i < fetch.length; i++) {
          var user_id = fetch[i].user_id;
          var fullname = fetch[i].fullname.toUpperCase();
          var status_name = fetch[i].status_name.toUpperCase();
          var phoneno = fetch[i].phoneno;
          var passport = fetch[i].passport;
          var documentStoragePath = fetch[i].documentStoragePath;

          text +=

            '<div class="w-[45%] h-[130px] bg-[#f0f0f0] rounded-[5px] cursor-pointer hover:shadow-profile-border hover:bg-white mb-[20px]" onClick="_get_form_with_id(' + "'customers-profile-module'" + "," + "'" + user_id+ "'" + ')">' +
                '<div class="w-[100%] h-[130px] flex items-center gap-[15px]">'+
                    '<div class="w-[100px] h-[100px] shadow-picture-box-border ml-[15px] rounded-[5px]">'+
                        '<div class="w-[80px] h-[80px] bg-black mt-[10px] ml-[10px] rounded-[5px]">'+
                            '<img src="' + documentStoragePath + '/' + passport  +'" class="w-[100%] h-[100%] object-cover" style="width: 80px; height: 80px; object-position: top;"/>'+
                        '</div>'+
                    '</div>'+

                   '<div class="flex flex-col gap-1 text-[#424141]">'+
                        '<p class="font-bold">' + fullname + '</p><hr class="w-[100px] border border-[#FF8A33]"/>'+
                        '<p class="text-[10px] pl-[10px]">ID: ' +  user_id + '</p>'+
                        '<p class="text-[10px] pl-[10px]">' +  phoneno + '</p>'+
                        '<p class="text-[10px] pl-[10px] text-[#FF8A33] font-bold">' + status_name + '</p>'+
                   '</div>'+
                '</div>'+
            '</div>';


        }

        $('#fetch_all_users').html(text);
      } else {
        text +=
          '<div class="false-notification-div">' +
          "<p> " + message + " </p>" + '</div>';
        $('#fetch_all_users').html(text);
      }
    }
    },
  });
}


function _update_staff_data(staff_id){
  var surname = $('#surname').val();
  var dob = $('#dob').val();
  var nationality = $('#nationality').val();
  var address = $('#address').val();
  var email_address = $('#email_address').val();
  var phoneno = $('#phoneno').val();
  var role = $('#role_id').val();
  var status = $('#status_id').val();

  if (surname==''){
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> SURNAME ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  }else if (email_address==''){
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> EMAIL ADDRESS ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  }else if (phoneno==''){
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> PHONE NUMBER ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  }else if (!validatePhoneNumber(phoneno)){
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> PHONE NUMBER ERROR!<br /><span>Please ensure you enter a valid phone numner</span>').fadeIn(500).delay(3000).fadeOut(100);
  }else if (!validateTextInput(surname)){
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> FULLNAME ERROR!<br /><span>Digit is not allowed in surname input</span>').fadeIn(500).delay(3000).fadeOut(100);
  }else if (!validateTextInput(nationality)){
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> NATIONALITY ERROR!<br /><span>Digit is not allowed in nationality input</span>').fadeIn(500).delay(3000).fadeOut(100);
  }

  else{

    var btn_text  = $('#submit_btn').html();
    $('#submit_btn').html('<i id="spinner" class="bi bi-arrow-repeat"></i> UPDATING...');
    document.getElementById('submit_btn').disabled = true;

    var dataString ='fullname=' + surname + '&phoneno=' + phoneno + '&email_address=' + email_address + '&dob=' + dob + '&nationality=' + nationality + '&address=' + address + '&staff_id=' + staff_id + '&role_id=' + role + '&status_id=' + status;

    $.ajax({
      type: 'POST',
      url: endpoint + '/admin/update-staff-api?access_key='+access_key,
      data: dataString,
      dataType: 'json',
      beforeSend: function(xhr) {
        xhr.setRequestHeader('apiKey', apiKey);
      },
      cache: false,
      success: function (info){
        var success = info.success;
        var message = info.message;
        var access_check = info.check;
  
        if (access_check==0){
          _log_out();
        }else{
  
        if (success == true){
  
          $('#success-div').html('<div><i class="bi-check-all"></i></div>' + 'SUCCESS!<br>' + message).fadeIn(500).delay(5000).fadeOut(100);
  
          $('#submit_btn').html(btn_text);
            document.getElementById('submit_btn').disabled = false;
            _all_active_staff('');
        }else{
          $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div>'  +'ERROR!<br>' + ' ' + message).fadeIn(500).delay(3000).fadeOut(100);
  
          $('#submit_btn').html(btn_text);
          document.getElementById('submit_btn').disabled = false;
        }
      }
      },
  
    });
  }
}


function _change_password(staff_id){
  var old_pass = $('#old_pass').val();
  var new_pass = $('#new_pass').val();
  var confirm_pass = $('#confirm_pass').val();

  if (old_pass==''){
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> OLD PASSWORD ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  }else if (new_pass==''){
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> NEW PASSWORD ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  }else if (confirm_pass==''){
    $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div> CONFIRM PASSWORD ERROR!<br /><span>Fill all Fields To Continue</span>').fadeIn(500).delay(3000).fadeOut(100);
  }else{

    var btn_text  = $('#submit_btn').html();
    $('#submit_btn').html('<i id="spinner" class="bi bi-arrow-repeat"></i> UPDATING...');
    document.getElementById('submit_btn').disabled = true;

    var dataString ='old_pass=' + old_pass + '&new_pass=' + new_pass + '&confirm_pass=' + confirm_pass + '&staff_id=' + staff_id;

    $.ajax({
      type: 'POST',
      url: endpoint + '/admin/change-pass-api?access_key='+access_key,
      data: dataString,
      dataType: 'json',
      beforeSend: function(xhr) {
        xhr.setRequestHeader('apiKey', apiKey);
      },
      cache: false,
      success: function (info){
        var success = info.success;
        var message = info.message;
        var access_check = info.check;
  
        if (access_check==0){
          _log_out();
        }else{
  
        if (success == true){
  
          $('#success-div').html('<div><i class="bi-check-all"></i></div>' + 'SUCCESS!<br>' + message).fadeIn(500).delay(5000).fadeOut(100);
  
          alert_close();
        }else{
          $('#warning-div').html('<div><i class="bi-exclamation-circle"></i></div>'  +'ERROR!<br>' + ' ' + message).fadeIn(500).delay(3000).fadeOut(100);
  
          $('#submit_btn').html(btn_text);
          document.getElementById('submit_btn').disabled = false;
        }
      }
      },
  
    });
  }
}





