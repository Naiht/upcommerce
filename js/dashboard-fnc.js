$(document).ready(function () {
    $('ul li').on('click', function() {
        $('li').removeClass('active');
        $(this).addClass('active');
    });
});


$(document).ready(function() {
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.profile-pic').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
   
    $(".file-upload").on('change', function(){
        readURL(this);
    });
    
    $(".upload-button").on('click', function() {
       $(".file-upload").click();
    });
});


function test ()  {
    let formulario = document.getElementsByClassName('form-modtienda');
    formulario.addEventListener('submit', function() {
      formulario.reset();
    });
}
