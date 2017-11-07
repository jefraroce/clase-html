$( document ).ready(function(){
  $('.etiquetas').hide();
});

function mostrar_memnu_etiqueta(nombre_div){
    if ($('.'+nombre_div).is(":visible")){
        $("."+nombre_div).hide();
    }else{
        $("."+nombre_div).show();
    }
}


