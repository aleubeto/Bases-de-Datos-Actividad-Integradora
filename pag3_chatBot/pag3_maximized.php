<?php
    
?>
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Ikta'an maximizado</title>
            <!--Referencias de hoja de estilos-->
            <link rel="stylesheet" href="css/maximized.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        </head>
        <body>
            <!--CHAT BAR BLOCK-->
            <div class="sidebar" id="side-menu">
                <nav  class="datos-contacto">
                    <ul class="list">
    
                        <li class="list_item">
                            <div class="list_button" id="list_title">
                                <img src="assets/contact.svg" class="list_img">
                                <a href="#" class="nav_link">Contacto</a>
                            </div>
                        </li>
    
                        <li class="list_item list_item--click" id="list_title">
                            <div class="list_button list_button--click">
                                <img src="assets/phone.svg" class="list_img">
                                <a href="#" class="nav_link">Teléfono</a>
                                <img src="assets/arrow.svg" class="list_arrow">
                            </div>
                            <ul class="list_show">
                                <li class="list_inside">
                                    <a href="#" class="nav_link nav_link--inside">(55) 1952 2602</a>
                                </li>
                            </ul>
                        </li>
    
                        <li class="list_item list_item--click" id="list_title">
                            <div class="list_button list_button--click">
                                <img src="assets/mail.svg" class="list_img">
                                <a href="#" class="nav_link">Correo</a>
                                <img src="assets/arrow.svg" class="list_arrow">
                            </div>
                            <ul class="list_show">
                                <li class="list_inside">
                                    <a href="#" class="nav_link nav_link--inside">contacto@naatik.ai</a>
                                </li>
                            </ul>
                        </li>
    
                        <li class="list_item list_item--click" id="list_title">
                            <div class="list_button list_button--click">
                                <img src="assets/message.svg" class="list_img">
                                <a href="#" class="nav_link">Redes sociales</a>
                                <img src="assets/arrow.svg" class="list_arrow">
                            </div>
                            <ul class="list_show">
                                <li class="list_inside">
                                    <a href="https://wa.me/525519522602" class="nav_link nav_link--inside" target="_blank"><img src="assets/whats.svg" class="list_img"></a>
                                </li>
                                <li class="list_inside">
                                    <a href="https://www.facebook.com/NaatikAI" class="nav_link nav_link--inside" target="_blank"><img src="assets/fb.svg" class="list_img"></a>
                                </li>
                                <li class="list_inside">
                                    <a href="https://twitter.com/NaatikAI" class="nav_link nav_link--inside" target="_blank"><img src="assets/twitter.svg" class="list_img"></a>
                                </li>
                                <li class="list_inside">
                                    <a href="https://www.youtube.com/channel/UCgL1wxyGeuTBaRwBMB3lT6A/featured" class="nav_link nav_link--inside" target="_blank"><img src="assets/youtube.svg" class="list_img"></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
    
                </nav>
            </div>
            <div class="chat-bar-maximized">
                <div class="maximized" id="maximized-top">
                    <button id="menu-button" type="button" class="collapsible-x">
                        <i style="color: #efef; text-decoration:none;" class="fa fa-bars"></i>
                    </button>
                    Asistente virtual: Ikta'an
                </div>
                <div class="content" id="maximized-bottom">
                    <div class="full-chat-block">
                        <!--Message Container-->
                        <div class="outer-container">
                            <div class="chat-container">
                                <!--Messages-->
                                <div id="chatbox">
                                    <h5 id="chat-timestamp"></h5>
                                    <p id="botStarterMessage" class="botText"><span>Cargando...</span></p>
                                </div>
                                <!--User input box-->
                                <div class="chat-bar-input-block">
                                    <div id="userInput">
                                        <input id="textInput" class="input-box" type="text" name="msg" placeholder="Escribe aquí un mensaje">
                                        <p></p>
                                    </div>
                                    <div class="chat-bar-icons">
                                        <i id="chat-icon" style="color: rgb(218, 68, 98);" class="fa fa-fw fa-heart" onclick="heartButton()"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <!--Referencia de scripts-->
    <script src="js/maximize.js"></script>
    <script src="js/responses.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </html>