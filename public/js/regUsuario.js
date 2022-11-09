
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
                    document.querySelector('#paterno').value = "";
                    document.querySelector('#materno').value = "";
                    document.querySelector('#dependencia').value = "";
                    document.querySelector('#fk_estado').value = "";
                    document.querySelector('#cargo').value = "";
                    document.querySelector('#celular').value = "";
                    document.querySelector('#email').value = "";
                    document.querySelector('#id_red').value = "";
                    document.querySelector('#password').value = "";
                    document.querySelector('#password-confirm').value = "";
                	alert("El periodo de registro para esta red ha finalizado");
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
