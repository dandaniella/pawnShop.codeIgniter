
  
$(function () {
  //first modal validation in user redential profile
  val=$("#form-id1").validate({
    rules: {
      user_email: {
        required: true,
        email : true
      },
      user_password: {
        required: true
      },
      user_type: {
        required: true
      },
      user_name: {
        required: true
      },
    },
    messages: {
      user_email: "Please accept our terms", 
      user_password: "Please accept our terms", 
      user_type: "Please accept our terms", 
      user_name: "Please accept our terms"  
    },
  
    errorElement: 'div',
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
  })

 //Second and third modal valdiation in user employee profile and location
  val2 =$("#form-id2").validate({
    rules: {
      first_name: {
        required: true,
      },
      last_name: {
        required: true
      },
      birth_date: {
        required: true
      },
      sex: {
        required: true
      },
      civil_status: {
        required: true
      },
      contact_no: {
        required: true
      }
    },
    messages: {
      first_name: "Please accept our terms", 
      last_name: "Please accept our terms", 
      birth_date: "Please accept our terms", 
      sex: "Please accept our terms", 
      civil_status: "Please accept our terms", 
      contact_no: "Please accept our terms"
    },
  
    errorElement: 'div',
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
  })
  

 //Second and third modal valdiation in user employee profile and location
 val3 =$("#form-id3").validate({
  rules: {
    province: {
      required: true,
    },
    city: {
      required: true
    },
  },
  messages: {
    province: "Please accept our terms", 
    city: "Please accept our terms", 
  },

  errorElement: 'div',
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
})

/*
|--------------------------------------------------------------------------
| Add user credential to database
|--------------------------------------------------------------------------
*/

  $("#form-id1").on("submit", function(event){
    event.preventDefault();
    event.stopPropagation();
   
    if(val.errorList.length===0)
    {
      $.ajax({
        url: apiURL + "user_credentials",
        type: "POST",
        data : 
        {
          user_email : $("#user_email").val(), 
          user_password : $('#user_password').val(),
          user_name : $('#user_name').val(),
          user_type : $('#user_type').val()
        },
        dataType: "json", 
        headers:{
          Accept: "application/json", 
          Authorization: "Bearer " + localStorage.getItem("TOKEN"),
        },
        // crossDomain:true,
        success: function(data){
          //saving the user_id to the local storage for referenc of the next form
          localStorage.setItem("user_id", data.data.user_id);
          _toastr("success","",data.message.join());
          $("#modal1").modal('hide');
          $("#modal2").modal().show();
        },
        error: function({responseJSON}){
          console.log(responseJSON.message);
          _toastr("error","",responseJSON.message.join());  
        },
      });
      
     
    }
  });

/*
|--------------------------------------------------------------------------
| Add user profile to database
|--------------------------------------------------------------------------
*/

  $("#form-id2").on("submit", function(event){
    event.preventDefault();
    event.stopPropagation();
   console.log(localStorage.getItem("user_id"))
    if(val2.errorList.length===0)
    {
      $("#modal2").modal('hide');
      $("#modal3").modal().show();
    }
  })


  
  $("#form-id3").on("submit", function(event){
    event.preventDefault();
    event.stopPropagation();
    console.log(localStorage.getItem("user_id"))
    if(val3.errorList.length===0)
    {
      alert("wala pang ajax");
    }
  })
  /*
  |--------------------------------------------------------------------------
  |  modal bottons
  |--------------------------------------------------------------------------
  */
    //back button
  $("#prev_modal").click(function(){
    $("#modal3").modal('hide');
    $("#modal2").modal().show();
  });


   /*
  |--------------------------------------------------------------------------
  | profile picture
  |--------------------------------------------------------------------------
  */
  $("#profile_pic").change(function(){
    readURL(this);
  });




  /*
  |--------------------------------------------------------------------------
  | Add user modal validation
  |--------------------------------------------------------------------------
  */

  /*
  |--------------------------------------------------------------------------
  | modal prev button
  |--------------------------------------------------------------------------
  */
  
 

  $('#date_1').datetimepicker({
    format: 'L'
  });

  $('#date_2').datetimepicker({
    format: 'L'
  });

    $("#example1").DataTable({
        "responsive": true, 
        "lengthChange": false, 
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
    
    // modal dropdown
    $('.js-example-basic-single').select2({
      dropdownParent: $("#modal3")
    })

    //Initialize Select2 Elements
    $('.select2').select2({
      theme: 'bootstrap4',
      dropdownParent: $("#modal3")
    })

   

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })


  function readURL(input){
    var url=input.value;
    var ext=url.substring(url.lastIndexOf(".") + 1).toLowerCase();
    if(
        input.files &&
        input.files[0]&&
        (ext == "gif" || ext=="png" || ext=="jpeg" || ext == "jpg")
    ){
      var reader = new FileReader();

      reader.onload = function (e) {
        $("#photo_path_placeholder").attr("src", e.target.result);
      };
      reader.readAsDataURL(input.files[0]);
    }else{
      //$("#img").attr("src", "/assets/no_preview.png");
    }
        
  }