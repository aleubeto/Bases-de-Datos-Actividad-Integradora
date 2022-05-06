<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ChatBot: Ikta'an</title>
        <!--Referencias de hoja de estilos-->
        <link rel="stylesheet" href="css/minimized.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <!--CHAT BAR BLOCK-->
        <div class="chat-bar-collapsible">
            <button id="chat-button" type="button" class="collapsible">
                Asistente virtual: Ikta'an
            </button>
            <div class="content" id="chat-content">
                <div class="full-chat-block">
                    <!--Message Container-->
                    <div class="outer-container">
                        <div class="chat-container">
                            <!--Messages-->
                            <div id="chatbox">
                                <h5 id="chat-timestamp"></h5>
                                <p id="botStarterMessage" class="botText"></p>
                                <?php
                                    require_once 'database.php';
                                    categorias();
                                    for($i = 1; $i <= 3; $i++){
                                        first_message();
                                    }
                                ?>
                            </div>
                        </div>
                        <!--User input box-->
                        <div class="chat-bar-input-block">
                            <div id="userInput">
                                <input id="textInput" class="input-box" type="text" name="msg" placeholder="Escribe aquí un mensaje">
                            </div>
                            <div class="chat-bar-icons">
                                <i id="chat-icon" style="color: rgb(218, 68, 98);" class="fa fa-fw fa-heart" onclick="heartButton()"></i>
                                <a id="chat-icon" style="color: #333; text-decoration: none;" class="fa fa-expand"  href='pag3_maximized.php' target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!--Referencia de scripts-->
<script src="js/minimized.js"></script>
<script src="js/responses.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    function preguntas(catId){
        $.post("preguntas.php", catID, preguntas(catID))
    }
</script>
</html>

<?php
    function first_message(){
        echo '<div class="botText"><span>Hola mundo.</span></div>';
    }
    function categorias(){
        $pdo = Database::connect();
        $sql = 'SELECT nombre FROM categoria;';
        $msg = '<div class="botText"><span><div>¿Qué tipo de duda puedo resolverte hoy?</div>';
        foreach($pdo->query($sql) as $categoria){
            $msg .= '<button type="button" role="button" name="btn-atc" class="ac-pushButton"';
            $msg .= 'onclick="preguntas(this.value)"';
            $msg .= 'value="' . $categoria['ID_Categoria'] . '"';
            $msg .= '<p>' . $categoria['nombre'];
            $msg .= '</button><br>';
        }
        echo($msg . '</span></div>');
        Database::disconnect();
    }
?>