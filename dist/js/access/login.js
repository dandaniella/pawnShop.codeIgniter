// $(function () {
//     //this fucttion is called once the file is loaded
//     //$("#username").val();
//     //$("input[name=username]").val();


//     // this fucntion is triggered when the form has button type submit
//     $("#form_id").on("submit",function (e){
//         alert("form is submitted");
//     })

//     $("#submit_btn").click(function(e){
//         alert("button is cliked!");
//     });


    
// });


$(function () {
    $.validator.setDefaults({
      submitHandler: function () {
        // alert( "Form successful submitted!" );
        {
          $.ajax({
            url: baseURL + "login",
            type: "POST",
            data : {
              user_email : $("#username").val(), 
              user_password : $('#password').val(),
            },
            datatype: "json", 
            success: function(data) {
              console.log(data);
            },
            error: function({responseJSON}){
              console.log(responseJSON);
            },
          });
        }
      }
    });

    ($('#form_id').validate({
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
    }));
  });