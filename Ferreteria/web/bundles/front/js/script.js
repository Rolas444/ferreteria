// JavaScript Document

            $(document).ready(function(){
                fn_dar_eliminar();
		fn_cantidad();
                //$("#frm_usu").validate();
            });
			
			function fn_cantidad(){
				cantidad = $("#grilla tbody").find("tr").length;
				$("#span_cantidad").html(cantidad);
			};
            
            function fn_agregar(id){
                
                
                cadena = "<tr>";
                n1=$("#"+id+" td:eq(6)").text();
                n1=(Math.floor((n1)*100))/100;
                n2=$("#"+id+" td:eq(7) input").attr('value');
                precio = (n1)*(n2);
                cadena = cadena + "<td style='display: none;'>" + $("#valor_ide").val() + "</td>";
                cadena = cadena + "<td>" + $("#"+id+" td:eq(7) input").attr('value') + "</td>";
                cadena = cadena + "<td class='oculto'>" + $("#"+id+" td:eq(5)").text() + "</td>";
                cadena = cadena + "<td>" +$("#"+id+" td:eq(1)").text() + "</td>";
                cadena = cadena + "<td>" + $("#"+id+" td:eq(2)").text() + "</td>";
                cadena = cadena + "<td class='oculto'>" + $("#"+id+" td:eq(3)").text() + "</td>";          
                cadena = cadena + "<td>" + (precio) + "</td>";
                cadena = cadena + "<td style='display: none;' id='resta'>"+(($("#"+id+" td:eq(4)").text())-(n2))+"</td>";
                cadena = cadena + "<td class='oculto'><a class='elimina'><img src='http://localhost/Ferreteria/web/bundles/front/images/icn_alert_error.png' /></a></td>";
                $("#grilla tbody").append(cadena);
                fn_monto();
                    
                /*
                    aqui puedes enviar un conjunto de datos ajax para agregar al usuario
                    $.post("agregar.php", {ide_usu: $("#valor_ide").val(), nom_usu: $("#valor_uno").val()});
                */
                fn_dar_eliminar();
		fn_cantidad();
                alert("Articulo agregado");
                fn_igv();
            };
            
            function fn_agregarC(id){
                
                
                cadena = "<tr>";
                n1=$("#"+id+" td:eq(6) input").attr('value');
                n1=(Math.floor((n1)*100))/100;
                n2=$("#"+id+" td:eq(7) input").attr('value');
                precio = (n1)*(n2);
                n3=id;
                cadena = cadena + "<td style='display: none;'>" + $("#valor_ide").val() + "</td>";
                cadena = cadena + "<td>" + $("#"+id+" td:eq(7) input").attr('value') + "</td>";
                cadena = cadena + "<td class='oculto'>" + $("#"+id+" td:eq(5)").text() + "</td>";
                cadena = cadena + "<td>" +$("#"+id+" td:eq(1)").text() + "</td>";
                cadena = cadena + "<td>" + $("#"+id+" td:eq(2)").text() + "</td>";
                cadena = cadena + "<td class='oculto'>" + $("#"+id+" td:eq(3)").text() + "</td>";          
                cadena = cadena + "<td>" +$("#"+id+" td:eq(6) input").attr('value')+ "</td>";
                cadena = cadena + "<td style='display: none;' id='resta'>"+(($("#"+id+" td:eq(4)").text())+(n2))+"</td>";
                cadena = cadena + "<td class='oculto'><a class='elimina'><img src='http://localhost/Ferreteria/web/bundles/front/images/icn_alert_error.png' /></a></td>";
                $("#grilla tbody").append(cadena);
                fn_monto();
                    
                /*
                    aqui puedes enviar un conjunto de datos ajax para agregar al usuario
                    $.post("agregar.php", {ide_usu: $("#valor_ide").val(), nom_usu: $("#valor_uno").val()});
                */
                fn_dar_eliminar();
		fn_cantidad();
                alert("Articulo agregado");
                
            };
            
            function fn_dar_eliminar(){
                $("a.elimina").click(function(){
                    id = $(this).parents("tr").find("td").eq(3).html();
                    respuesta = confirm("Desea eliminar el articulo: " + id);
                    if (respuesta){
                        $(this).parents("tr").fadeOut("normal", function(){
                            $(this).remove();
                            alert("Articulo " + id + " eliminado")
                            
                            fn_monto();
                            fn_cantidad();
                            fn_igv();
                            /*
                                aqui puedes enviar un conjunto de datos por ajax
                                $.post("eliminar.php", {ide_usu: id})
                            */
                        })
                    }
                    
                    
                });
            };
            
            function fn_monto(){
				var resultVal= 0.0;
                $("#grilla tbody tr ").not("first").each(function(){
                
                var celdaValor = $(this).find('td:eq(6)');
                if (celdaValor.val() != null){
                    resultVal += parseFloat(celdaValor.html());
                    }
                }
                )
					
                $("#ferreteria_pedidobundle_pedidotype_Monto").attr('value',resultVal);
                $("#ferreteria_comprabundle_compratype_MontoTotal").attr('value',resultVal);
                $("#span_monto").html(resultVal);
				
				};
				
			function fn_igv(){
					var igv = 0.0;
					monto = $("#ferreteria_pedidobundle_pedidotype_Monto").attr('value');
					igv = (monto*19)/100;
					
					$("#ferreteria_pedidobundle_pedidotype_Igv").attr('value',igv);
				};
