$(function () {
    $.validator.setDefaults({
      submitHandler: function () {
        
          $.ajax({
            url: apiURL + "login",
            type: "POST",
            data : {
              user_email : $("#username").val(), 
              user_password : $('#password').val(),
            },
            dataType: "json", 
            success: function(data){
              console.log(data);
              
              localStorage.setItem("TOKEN", data.token)
             
              // save session data in php
              let session_data = "";

              session_data += "token=" + data.token;
              session_data += "&user_name=" + data.data.user_name;
              session_data += "&user_email=" + data.data.user_email;
              session_data += "&user_type=" + data.data.user_type;
              
              window.location.replace( baseURL + "Access/oAuth?" + session_data);
              
            },
            error: function({responseJSON}){
              console.log(responseJSON);
              _toastr("error","",responseJSON.message.join());  
            },
          });
        
      }
    });

    $('#form_id').validate({
      rules: {
        username: {
          required: true,
          email: true,
        },
        password: {
          required: true,
          minlength: 5
        },
        remember: {
          required: true
        },
      },
      messages: {
        username: {
          required: "Please enter a email address",
          email: "Please enter a valid email address"
        },
        password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long"
        },
        remember: "Please accept our terms"
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.input-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    }, );
  });