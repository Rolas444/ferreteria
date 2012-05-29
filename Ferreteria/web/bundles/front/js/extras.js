jQuery('document').ready(function(){
    
    jQuery('#producto').submit(function(){
        
        jQuery.post(jQuery('#producto').attr('action'), jQuery('#producto').serialize(), function(datos_devueltos){
                        if(datos_devueltos){
                              
                               fn_agregarN(datos_devueltos);
                             }

                        else
                            alert('Ha ocurrido un error');
                    });   
        return false;
        
    });
    
    
    jQuery('#compra').submit(function(){
       jQuery.post(jQuery('#compra').attr('action'),jQuery('#compra').serialize(),function(vuelto){
           alert(vuelto)
           $('#grilla tbody tr').each(function(){
           jQuery.post('detalles',{compra:(vuelto),producto: $('td:eq(0)').text(),cantidad:$('td:eq(1)').text(),costo:$('td:eq(6)').text()
                });
       });
        alert('supuestamente se completo')   
       });
       
       return false;
    });
 
});

function fn_agregarN(id){
  
    cadena = "<tr>";
    cadena = cadena + "<td style='display: none;'>"+id+"</td>";
    cadena = cadena + "<td>" + $(".procantidad").val() + "</td>";
    cadena = cadena + "<td class='oculto'>" + $(".promedida option:selected").html() + "</td>";
    cadena = cadena + "<td>" +$(".pronombre").val() + "</td>";
    cadena = cadena + "<td>" + $(".promarca").val() + "</td>";
    cadena = cadena + "<td class='oculto'>" + $(".procategoria option:selected").html() + "</td>";          
    cadena = cadena + "<td>" +$(".proprecio").val() + "</td>";
    //cadena = cadena + "<td style='display: none;' id='resta'>"+($("#").attr(value))+"</td>";
    cadena = cadena + "<td class='oculto'><a class='elimina'><img src='http://localhost/Ferreteria/web/bundles/front/images/icn_alert_error.png' /></a></td>";
    
    $("#grilla tbody").append(cadena);
    fn_dar_eliminar();
    fn_cantidad();
    fn_monto();
    alert('Articulo registrado en la base de datos');

};



            
            
           