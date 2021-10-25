<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="includes/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="includes/css/sweetalert2.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Satisfy&family=Coming+Soon&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marcellus+SC&family=MonteCarlo&family=Montserrat:wght@100;200;300&family=WindSong:wght@400;500&display=swap" rel="stylesheet"><body>
    <div class="panel left"></div>
    <div class="panel right"><div class="diagonal gradient-gray-line"></div></div> 
    
    <div class="header">
        <div class="front-border gradient-gray">      
            <div class="front-card">
                <div class="front-title">
                    <h1 class="gradient-gray">Mis XV Años</h1>
                </div>
                <form autocomplete="off" id="formulario" method="post" class="enter-form">
                    <input id="codigo_inv" name="codigo_inv" type="text" class="text-input" placeholder="Codigo de invitado">
                    <input type="hidden" name="action" id="action" value="login">
                    <div class="submit brush-gray">
                        <input class="gradient-gray submit-btn" type="submit" value="Entrar">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- <main>
        <div class="row" id="row1">
            <div class="column c-left">   
            </div>
            <div class="column c-middle column2">   
            </div>
            <div class="column c-right">   
            </div>
        </div>
        <div class="row" id="row2">
            <div class="column c-left">   
            </div>
            <div class="column c-middle column2" id="content-here"> 
                <div class="page">
                    <div class="half">
                        <div class="top-line">
                            <div class="top1">
                                <p>Silvia <span>Lozano</span></p>
                                <p>&</p>
                                <p>Omar <span>Cantu</span></p>
                            </div>
                            <div class="top2">
                                <p>Nos complace invitarlos a festejar a nuestra hija en sus</p>
                                <h2 class="top-title gradient-gray">xv años</h2>
                            </div>
                        </div>
                        <div class="title">
                            <h1 class="name-title gradient-gray">Karen Cantu</h1>
                        </div>
                    </div>
                    <div class="half">
                        <div class="cont-fecha">
                            <div class="intro">
                                <p>Que tendrá lugar el</p>
                            </div>
                            <div class="fecha">
                                <p>Domigo</p>
                                <span>17</span>
                                <p>Octubre</p>
                            </div>
                        </div>
                        <div class="cont-lugar">
                            <div class="lugar">
                                <h1>Misa</h1>
                                <h2>Capilla Santo Domingo Savio</h2>
                                <p>Av. Constituyentes de Nuevo León 205, Linda Vista, Guadalupe, N.L.</p>
                                <h3>6:00 PM</h3>
                            </div>
                            <div class="lugar">
                                <h1>Recepción</h1>
                                <h2>La Fontana Eventos</h2>
                                <p>Av. República Mexicana, 711 Col. Riveras de las Puentes</p>
                                <h3>7:00 PM</h3>
                            </div>
                        </div>
                        <div class="footer">
                            <div class="personalizacion">
                                <h1>Fam. Perales Cantú</h1>
                                <h2>(<span>4</span>) personas</h2>
                            </div>
                            <div class="extras">
                                <img src="" alt="">
                                <p>No niños</p>
                                <p>Formal</p>
                            </div>
                        </div>
                    </div>     
                    <div class="confirm">
                        <button id="btn-confirm" class="btn-confirm">Confirmar</button>
                        <button id="btn-unconfirm" class="btn-confirm">Rechazar</button>
                    </div>
                </div>  
            </div>
            <div class="column c-right">
        </div> 
        </div>
        <div class="row" id="row3">
            <div class="column c-left">   
            </div>
            <div class="column c-middle column2">   
            </div>
            <div class="column c-right"> 
        </div>  
    </main> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="includes/js/sweetalert2.all.min.js"></script>
    <script src="includes/js/actions.js"></script>
    <script src="includes/js/confirm.js"></script>
</body>

</html>