<?php 
// $inv_html = "<main>
// <div class='row' id='row1'>
//     <div class='column c-left'>   
//     </div>
//     <div class='column c-middle column2'>   
//     </div>
//     <div class='column c-right'>   
//     </div>
// </div>
// <div class='row' id='row2'>
//     <div class='column c-left'>   
//     </div>
//     <div class='column c-middle column2' id='content-here'> 
//         <div class='page'>
//             <div class='half'>
//                 <div class='top-line'>
//                     <div class='top1'>
//                         <p>Silvia <span>Lozano</span></p>
//                         <p>&</p>
//                         <p>Omar <span>Cantu</span></p>
//                     </div>
//                     <div class='top2'>
//                         <p>Nos complace invitarlos a festejar a nuestra hija en sus</p>
//                         <h2 class='top-title gradient-gray'>xv años</h2>
//                     </div>
//                 </div>
//                 <div class='title'>
//                     <h1 class='name-title gradient-gray'>Karen Cantu</h1>
//                 </div>
//             </div>
//             <div class='half'>
//                 <div class='cont-fecha'>
//                     <div class='intro'>
//                         <p>Que tendrá lugar el</p>
//                     </div>
//                     <div class='fecha'>
//                         <p>Domigo</p>
//                         <span>17</span>
//                         <p>Octubre</p>
//                     </div>
//                 </div>
//                 <div class='cont-lugar'>
//                     <div class='lugar'>
//                         <h1>Misa</h1>
//                         <h2>Capilla Santo Domingo Savio</h2>
//                         <p>Av. Constituyentes de Nuevo León 205, Linda Vista, Guadalupe, N.L.</p>
//                         <h3>6:00 PM</h3>
//                     </div>
//                     <div class='lugar'>
//                         <h1>Recepción</h1>
//                         <h2>La Fontana Eventos</h2>
//                         <p>Av. República Mexicana, 711 Col. Riveras de las Puentes</p>
//                         <h3>7:00 PM</h3>
//                     </div>
//                 </div>
//                 <div class='footer'>
//                     <div class='personalizacion'>
//                         <h1>Fam. Perales Cantú</h1>
//                         <h2>(<span>4</span>) personas</h2>
//                     </div>
//                     <div class='extras'>
//                         <img src='' alt=''>
//                         <p>No niños</p>
//                         <p>Formal</p>
//                     </div>
//                 </div>
//             </div>     
//             <div class='confirm'>
//                 <button id='btn-confirm' class='btn-confirm'>Confirmar</button>
//                 <button id='btn-unconfirm' class='btn-confirm'>Rechazar</button>
//             </div>
//         </div>  
//     </div>
//     <div class='column c-right'>
// </div> 
// </div>
// <div class='row' id='row3'>
//     <div class='column c-left'>   
//     </div>
//     <div class='column c-middle column2'>   
//     </div>
//     <div class='column c-right'> 
// </div>  
// </main>";

function retrievehtml($nombre_familiar, $invitados, $codigo, $asistencia)
{
    $inv_html = "
                    <div class='row' id='row1'>
                        <div class='column c-left'>   
                        </div>
                        <div class='column c-middle column2'>   
                        </div>
                        <div class='column c-right'>   
                        </div>
                    </div>
                    <div class='row' id='row2'>
                        <div class='column c-left'>   
                        </div>
                        <div class='column c-middle column2' id='content-here'> 
                            <div class='page'>
                                <div class='page-cont'>
                                <div class='half'>
                                    <div class='top-line'>
                                        <div class='title'>
                                            <h2 class='top-title gradient-gray'>xv años</h2>
                                            <h1 class='name-title gradient-gray'>Karen Iveth</h1>
                                        </div>
                                        <div class='top2'>
                                            <p>Mis padres</p>
                                        </div>
                                        <div class='top1'>
                                            <p>Silvia <span>Lozano</span></p>
                                            <p>&</p>
                                            <p>Omar <span>Cantú</span></p>
                                        </div>
                                        <div class='top2'>
                                            <p>Nos complace invitarlos a festejar a nuestra hija en sus xv años</p>
                                        </div>
                                    </div>
                                </div>
                                <div class='half'>
                                    <div class='cont-fecha'>
                                        <div class='intro'>
                                            <p>Que tendrá lugar el</p>
                                        </div>
                                        <div class='fecha'>
                                            <p>Domigo</p>
                                            <span>17</span>
                                            <p>Octubre</p>
                                        </div>
                                    </div>
                                    <div class='cont-lugar'>
                                        <div class='lugar'>
                                            <h1>Misa</h1>
                                            <h2>Capilla Santo Domingo Savio</h2>
                                            <p>Av. Constituyentes de Nuevo León 205, Linda Vista, Guadalupe, N.L.</p>
                                            <h3>6:00 PM</h3>
                                        </div>
                                        <div class='lugar'>
                                            <h1>Recepción</h1>
                                            <h2>La Fontana Eventos</h2>
                                            <p>Av. República Mexicana, 711 Col. Riveras de las Puentes</p>
                                            <h3>7:00 PM</h3>
                                        </div>
                                    </div>
                                    <div class='footer'>
                                        <div class='personalizacion'>
                                            <h1>{$nombre_familiar}</h1>
                                            <h2>(<span>{$invitados}</span>) personas</h2>
                                        </div>
                                        <div class='extras'>
                                            <img src='' alt=''>
                                            <p>No niños</p>
                                            <p>Formal</p>
                                        </div>
                                    </div>
                                </div>     
                                <div class='confirm'>
                                    <button id='btn-confirm' class='btn-confirm'>Confirmar</button>
                                    <button id='btn-unconfirm' class='btn-confirm'>Rechazar</button>
                                </div>
                                </div><!--page-cont-->
                            </div><!--page-->  
                        </div>
                        <div class='column c-right'>
                    </div> 
                    </div>
                    <div class='row' id='row3'>
                        <div class='column c-left'>   
                        </div>
                        <div class='column c-middle column2'>   
                        </div>
                        <div class='column c-right'> 
                    </div>  
                    ";
    return $inv_html;
}