//Multiple Image Add System
$(document).ready(function() {

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

      // delete button
    $(document).on('click', 'a.submit', function(){    
      if (confirm('Are you sure want to delete!!')) 
        {      
          $(this).closest('form').submit();    
        }  
      });

    $('#calendar').fullCalendar({});

    });

//To display image
function readfeatured10(input,classname) 
{
            if (input.files && input.files[0]) 
            {
                var reader = new FileReader();

                reader.onload = function (e) {
                $('form .'+classname).css('background-image','url('+ e.target.result + ')')
                };
                $('form .'+classname).show()
                $('form .'+classname).addClass('header-img')
                $('.remove').show()

                reader.readAsDataURL(input.files[0]);
            }
            else
            {
                $('form .'+classname).css('background-image','url()')
                $('form .'+classname).removeClass('header-img')
            }
} 
