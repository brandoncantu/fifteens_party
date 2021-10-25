

// function eventListeners2(){
//     document.querySelector('#btn-confirm').addEventListener('click', confirmarAsistencia);
//     document.querySelector('#btn-unconfirm').addEventListener('click', confirmarAsistencia);
// }

function confirmarAsistencia(confirmation){
    let var_confirm = '',
        cod_inv = document.querySelector('#codigo_inv').value;

        if(confirmation=="confirm"){
            var_confirm = '1';
        }else if(confirmation=="reject"){
            var_confirm = '2';
        }

  
    if(var_confirm=='' || cod_inv==''){
        // alert('Introduzca una referencia de 6 dígitos');
        Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: 'No se pudo validar',
        });
  
    }else{
        var datos = new FormData();
        datos.append('confirmation', var_confirm);
        datos.append('codigo_inv', cod_inv);
        datos.append('action', 'confirm');
  
        var xhr = new XMLHttpRequest();
  
        xhr.open('POST', 'includes/lib/controller.php', true);
  
        xhr.onload = function(){
            if(this.status == 200){
                var response = JSON.parse(xhr.responseText);
                //console.log(response);
                let answer = response.respuesta;
  
                if(answer == 'exito'){
                    Swal.fire({
                        icon: 'success',
                        title: response.message,
                        showConfirmButton: false,
                        timer: 1500
                        });
                }else{
                    Swal.fire({
                        icon: 'error',
                        title: 'Hubo un problema',
                        text: response.error
                    });
                }
                //eliminar botones.
                document.querySelector('.confirm').remove();
            }
        }
  
        xhr.send(datos);
  
    }
  }