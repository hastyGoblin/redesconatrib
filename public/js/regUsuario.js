'use strict'

window.addEventListener('load', function(){

	function validaInicioRed(){
    	$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        /* SELECT TIPO CONFLICTO*/
        $.ajax({
            type: 'POST',
            url: '/validarInicio',
            data: {
                id_red: $('#id_red').val(),
            },
            /*beforeSend: function () {
                alert('Enviaré mis datos va.'+ $('#materia').val());
            },*/
            success: function (respuesta) {  
                console.log(respuesta);
                if(respuesta['registro'] == 0){
                	document.querySelector('#name').value = "";
                	alert("No te puedes registrar");
                	console.log("No te puedes registrar");
                }
                else{
                	console.log("Si te puedes registrar");
                }
                /*if(respuesta.exito == 1){
                    $('#tipoConflicto').attr("disabled", false); 
                    var selectTipoConflicto = "<option value=''>Seleccione una opción</option>";
                    for(let i in respuesta.listaTipoConflicto){
                        selectTipoConflicto+= '<option value="'+respuesta.listaTipoConflicto[i].iidtipoconflicto +'">'+respuesta.listaTipoConflicto[i].cdescripcion+'</option>';
                    }
                    document.querySelector("#tipoConflicto").innerHTML = selectTipoConflicto;
                    //console.log(respuesta);
                }else{
                    $('#tipoConflicto').attr("disabled", true); 
                    var selectTipoConflicto = "<option value=''>Seleccione una opción</option>";
                    document.querySelector("#tipoConflicto").innerHTML = selectTipoConflicto;
                    //console.log(respuesta);
                }*/
                
            },
            error: function (jqXHR, textStatus, errorThrown) {
               alert('Ocurrio un errror, intente de nuevo.' + jqXHR.responseText )
            }
        });
    }

	var red = document.querySelector("#id_red");

	red.addEventListener('change', function(){        
        validaInicioRed();
    });

});