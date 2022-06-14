$(document).ready(function() {
    $("#nav_user").on('click', function() {

        if($("#opcion").hasClass("contopciones")){

            $("#opcion").addClass("invopciones");
            $("#opcion").removeClass("contopciones");

        }else if($("#opcion").hasClass("invopciones")){
            $("#opcion").removeClass("invopciones");
            $("#opcion").addClass("contopciones");
        }
    });
});
