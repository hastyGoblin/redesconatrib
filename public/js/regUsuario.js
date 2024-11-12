
window.addEventListener('load', function(){

	function validaInicioRed(){
    	$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: '/validarInicio',
            data: {
                id_red: $('#id_red').val(),
            },
            success: function (respuesta) {
                if(respuesta['registro'] == 1){
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
                    Swal.fire({
                        icon: 'info',
                        title: 'Registro no disponible',
                        text: 'El periodo de registro para esta red comenzará en la fecha indicada. Por favor, inténtelo de nuevo más adelante.',
                    });
                }
            },
        });
    }

	var red = document.querySelector("#id_red");

	red.addEventListener('change', function(){
        validaInicioRed();
    });

});
