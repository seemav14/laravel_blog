jQuery(function ($) {

    $(".sidebar-dropdown > a").click(function () {
        $(".sidebar-submenu").slideUp(200);
        if ($(this).parent().hasClass("active")) {
            $(".sidebar-dropdown").removeClass("active");
            $(this).parent().removeClass("active");
        } else {
            $(".sidebar-dropdown").removeClass("active");
            $(this).next(".sidebar-submenu").slideDown(200);
            $(this).parent().addClass("active");
        }

    });

    $("#toggle-sidebar").click(function () {
        $(".page-wrapper").toggleClass("toggled");
    });
   
   
});

// validates text only
function Validate(txt) {
    txt.value = txt.value.replace(/[^a-zA-Z- '\n\r.]+/g, '');
}


$.validator.addMethod("space_check", function (value, element) {
    // alert(element);
   var filter = /^[^-\s][\w\s-]+$/;  
      if (filter.test(value)) {
          return true;
      }
      else {
          return false;
      }
});



 $.validator.addMethod('filesize', function (value, element,param) {
    // alert();
   var size=element.files[0].size;
  
   size=size/1024;
   size=Math.round(size);
   return this.optional(element) || size <=param ;
   
 }, 'File size must be less than 1 MB');	
 
$("#register_contact").click(function(){

     $("#contact-form").validate({
     rules: {
            first_name: {
                required:true,
                 space_check: true,
                 minlength:2,
                 maxlength:32
              },
              middle_name: {
                 space_check: true,
                 minlength:2,
                 maxlength:32
              },
              last_name: {
                required:true,
                 space_check: true,
                 minlength:2,
                 maxlength:32
              },
               email: {
                //  emailcheck:true,
                 email: true
               },
               mobile:{
                    
                    // number:true,
                    minlength:10,
                    maxlength:10
                },
                landline:{
                    number:true,
                    minlength:10,
                    maxlength:12
                },
            //    photo: {
            //     //  required: true,
            //      accept:"application/jpeg,application/jpg,application/png",
            //      filesize: 500
            //    }
         },

     messages: {
       first_name: {
               required:"Please enter your First Name",
               minlength:"Please enter valid First Name",
               maxlength:"Maximum 32 characters allowed",
               space_check: "Please enter valid First Name"
       },
       middle_name: {
            minlength:"Please enter valid Middle Name",
            maxlength:"Maximum 32 characters allowed",
            space_check: "Please enter valid Middle Name"
        },
       last_name: {
            required:"Please enter your Last Name",
            minlength:"Please enter valid Name",
            maxlength:"Maximum 32 characters allowed",
            space_check: "Please enter valid Last Name"
        },
        email: {
            emailcheck: "Please enter valid Email",
            email: "Please enter valid Email"
          },
       mobile: {
               number:"Only digits are allowed",
               minlength:"Please enter valid Mobile Number",
               maxlength:"Please enter valid Mobile Number"
       },
       landline: {
        number:"Only digits are allowed",
        minlength:"Please enter valid Mobile Number",
        maxlength:"Please enter valid Mobile Number"
},
    //    photo: {
    //      required: "Please select Resume",
    //      accept:"Only jpeg,jpg & png image is allowed."
      
    //    }
     },
     submitHandler: function(form) {
        //  alert();
         form.submit();
     }

 });
});

filter_data('/load-blog');




function filter_data(url){
    // alert();
    $.ajax({
        type:"get",
        url:url,
        success : function(response){
           $('#load_data').html('');
           $('#load_data').html(response); 
        }
    });
}

function show_hide(state,data){
    var postData = {
        'id':data,
        'status': state
    };
   
    if(state == "1"){
        var action = window.confirm('Would you like to continue?');

        if(action==true) {
            // alert('delete');
            $.get("delete-records",postData, function(data){
                location.reload();
            });
        
        } else {
            return false;
        }
    }else{
        $.get("delete-records",postData, function(data){
            location.reload();
        });
    }
   
}


function show_hide23(state,data)
    {

    	if(state == "1"){
  
 		Notiflix.Confirm.Show( 'Please Confirm', 'Are you sure you want to Hide this record ?', 'Yes', 'No', function(){ 
 	
       // Yes button callback
       var postData = {
            'id':data,
            'status': state
        };

        $.post("/admin/downloads/forms/application-forms/hide_show_details",postData, function(data){
            location.reload();
        });


    
    });

        }else{

       var postData = {
            'id':pro_id,
            'status': state,
            'caption':caption,
            'filename':filename,
            'html' : 'PASS'
        };

        $.post("/admin/downloads/forms/application-forms/hide_show_details",postData, function(data){
            location.reload();
        });


        }

    }

