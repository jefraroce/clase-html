$( document ).ready(function(){
  $('.menus-ocultos').hide();
});

function mostrar_menu_etiqueta(nombre_div){
    if ($('#'+nombre_div).is(":visible")){
        $("#"+nombre_div).hide();
    }else{
        $("#"+nombre_div).show();
    }
}


