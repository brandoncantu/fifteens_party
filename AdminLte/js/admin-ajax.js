$(document).ready(function(){

    $('#guardar-registro').on('submit', function(e){
        e.preventDefault();
        console.log('hooooooooooooooooooooo')
        var datos = $(this).serializeArray();
        //console.log(datos);

        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            success: function(data){
                var res = data;
                console.log(res);
                if(res.respuesta == 'exito'){
                    Swal.fire({
                        icon: 'success',
                        title: res.message,
                        showConfirmButton: false,
                        timer: 1500
                        });
                }else{
                    Swal.fire({
                        icon: 'error',
                        title: res.message + '!',
                        showConfirmButton: false,
                        timer: 1500
                        });
                }
            }
        })
    });
    ////////
    $('.borrar-registro').on('click', function(e){
        var registro = $(this);
        var id = $(this).data('id');
        var tipo = $(this).data('tipo');
        var enlace = "modelo-"+tipo+".php";
        //console.log(enlace);
        var datos = new FormData();
        datos.append('registro', 'borrar');
        datos.append('id', id);
        //console.log(datos);
        if(tipo=='evento'){
            borrarAjax(registro, enlace, datos);
        }
        // if(tipo=='invitado'){            
        //     Swal.fire({
        //     title: 'Esta seguro?',
        //     text: "Hay eventos con este invitado!",
        //     icon: 'warning',
        //     showCancelButton: true,
        //     confirmButtonColor: '#3085d6',
        //     cancelButtonColor: '#d33',
        //     confirmButtonText: 'Si, borrarlo!'
        //     }).then((result) => {
        //     if (result.isConfirmed) {
        //         datos.append('imagen', $(this).parent().parent().children()[2].innerHTML);

        //         borrarAjax(registro, enlace, datos);
        //     }
        //     })
        // }         
    });
    ////////
    $('#login-admin').on('submit', function(e){
        e.preventDefault();
        var datos = $(this).serializeArray();

        $.ajax({
            type: $(this).attr('method'),
            data: datos,
            url: $(this).attr('action'),
            dataType: 'json',
            success: function(data){
                var res = data;
                //console.log(data);
                if(res.respuesta == 'exito'){
                    Swal.fire({
                        icon: 'success',
                        title: res.message + '!',
                        showConfirmButton: false,
                        timer: 1500
                        });
                        setTimeout(function(){
                            window.location.href = 'admin-area.php';
                        }, 2000);
                        nombre_glob = res.nombre;
                        usuario_glob = res.usuario;
                }else{
                    Swal.fire({
                        icon: 'error',
                        title: res.message + '!',
                        showConfirmButton: false,
                        timer: 1500
                        });
                }
            }
        })
    });
    /////////
    function borrarAjax(etiqueta, enlace, datos){
        $.ajax({
            url: enlace,
            type: "POST",
            data: datos,
            processData: false,  // tell jQuery not to process the data
            contentType: false,   // tell jQuery not to set contentType
            dataType: 'json',
            success: function(data){
                var res = data;
                if(res.respuesta == 'exito'){
                    etiqueta.parent().parent().remove();
                    Swal.fire({
                        icon: 'success',
                        title: res.message,
                        showConfirmButton: false,
                        timer: 1500
                        });
                        
                }else{
                    Swal.fire({
                        icon: 'error',
                        title: res.message + '!',
                        showConfirmButton: false,
                        timer: 1500
                        });
                }
            }
        })
    }
    //////// 
    function BloquearNumerosyEsp(str) {
        return !/[~`!@#$%\^&*()1234567890qwertyuiopasdfghjkl??zxcvbnm+=\-\[\]\\';,/{}|\\":<>\?]/g.test(str);
    }
    ////////

});
