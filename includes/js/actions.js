eventListeners();

function eventListeners(){
    document.querySelector('#formulario').addEventListener('submit', validarRegistro);
}

function validarRegistro(event){
  event.preventDefault();
  var codigo_inv = document.querySelector('#codigo_inv').value,
      action = document.querySelector('#action').value;

  if(codigo_inv==''){
      // alert('Introduzca una referencia de 6 dígitos');
      Swal.fire({
          icon: 'error',
          title: 'Error!',
          text: 'Introduzca una codigo válido',
      });

  }else{
      var datos = new FormData();
      datos.append('codigo_inv', codigo_inv);
      datos.append('action', action);

      var xhr = new XMLHttpRequest();

      xhr.open('POST', 'includes/lib/controller.php', true);

      xhr.onload = function(){
          if(this.status == 200){
              var response = JSON.parse(xhr.responseText);
              console.log(response);
              let answer = response.respuesta;

              if(answer == 'exito'){

                let inner_html = response.html;
                // resumen = resultados.resumen,
                // fpago = resultados.fpago;

                //console.log(resumen);

                $('body').toggleClass('open');
                $('.header').fadeOut('fast');

                //borrar default
                if(document.querySelector('#default')){
                    document.querySelector('#formulario').remove();
                }
                //template
                var nuevoDiv = document.createElement('main');

                nuevoDiv.innerHTML= inner_html;

                var body = document.querySelector('body');
                body.appendChild(nuevoDiv);
              }else{
                  Swal.fire({
                      icon: 'error',
                      title: 'Hubo un problema',
                      text: response.error
                  });
              }

          }
      }

      xhr.send(datos);

  }
}

// $('.submit-btn').on('click', function() {
//   $('body').toggleClass('open');
//   $('.header').fadeOut('fast');
// });