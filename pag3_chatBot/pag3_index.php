<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Bot</title>

    <link rel="stylesheet" href="css/minimized.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <!-- CHAT BAR BLOCK -->
    <div class="chat-bar-collapsible">
        <button id="chat-button" type="button" class="collapsible">Asistente virtual Ikta'an
            <i id="chat-icon" style="color: #fff;" class="fa fa-fw fa-comments-o"></i>
        </button>

        <div class="content">
            <div class="full-chat-block">
                <!-- Message Container -->
                <div class="outer-container">
                    <div class="chat-container">
                        <!-- Messages -->
                        <div id="chatbox">
                            <h5 id="chat-timestamp"></h5>
                            <p id="botStarterMessage" class="botText"><span>Loading...</span></p>
                            <?php
                                require_once 'database.php';
                                categoria();
                            ?>
                        </div>

                        <!-- User input box -->
                        <div class="chat-bar-input-block">
                            <div id="userInput">
                                <input id="textInput" class="input-box" type="text" name="msg"
                                    placeholder="Tap 'Enter' to send a message">
                                <p></p>
                            </div>

                            <div class="chat-bar-icons">
                                <i id="chat-icon" style="color: rgb(218, 68, 98);" class="fa fa-fw fa-heart"
                                    onclick="heartButton()"></i>
                                    <a id="chat-icon" style="color: #333; text-decoration: none;" class="fa fa-expand"  href='pag3_maximized.php' target="_blank"></a>
                            </div>
                        </div>

                        <div id="chat-bar-bottom">
                            <p></p>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/responses.js"></script>
<script src="js/chat.js"></script>
<script>
    function imprimicion(preguntas, respuestas, categoria){
        document.getElementById("chatbox").innerHTML += '<p class="userText"><span>' + categoria + '<br></span></p>';
        document.getElementById("chatbox").innerHTML += '<p class="botText"><span>Selecciona la duda que tengas'
        for (i = 0; i < preguntas.length; i++){
            imprimir_pregunta(preguntas[i], respuestas[i]);
        }
        document.getElementById("chatbox").innerHTML += '</span></p>'
        document.getElementById("chat-bar-bottom").scrollIntoView(true);
    }
    function imprimir_pregunta(pregunta, respuesta){
        document.getElementById("chatbox").innerHTML += '<button onclick="imprimir_respuesta(' + "'" + pregunta +"', " + "'" + respuesta + "'" + ')">' + pregunta + '</button><br>';
        document.getElementById("chat-bar-bottom").scrollIntoView(true);
    }
    function imprimir_respuesta(preg, resp){
        document.getElementById("chatbox").innerHTML += '<p class="userText"><span>' + preg + '<br></span></p>';
        document.getElementById("chatbox").innerHTML += '<p class="botText"><span>' + resp + '<br></span></p>';
        document.getElementById("chat-bar-bottom").scrollIntoView(true);
        feedback();
    }
    function feedback(){
        document.getElementById("chatbox").innerHTML += '<p class="botText" id="feedback"><span>¿Encontraste la respuesta a tu pregunta? <br> <button type="button" onclick="positivo()">Si</button> <button type="button" onclick="negativo()">No</button>';
        document.getElementById("chatbox").innerHTML += '</span></p>'
        document.getElementById("chat-bar-bottom").scrollIntoView(true);
    }

    function positivo(){
        document.getElementById("chatbox").innerHTML += '<p class="botText"><span>' + '¡Fue un placer atenderte!' + '<br></span></p>';
        document.getElementById("chat-bar-bottom").scrollIntoView(true);
    }
    function negativo(){
        document.getElementById("chatbox").innerHTML += '<p class="botText"><span>' + 'Lamento no haber podido ayudarte :(' + '<br></span></p>';
        document.getElementById("chat-bar-bottom").scrollIntoView(true);
    }
</script>
</html>

<?php
    function categoria(){
        $pdo = Database::connect();
        $sql = 'SELECT * FROM categoria;';
        $a = '"hola"';
        $b = '"mundo"';
        $msg = '<p class="botText"><span>¿Qué tipo de pregunta tienes sobre Naatik?<br>';
        foreach($pdo->query($sql) as $categoria){
            $sql2 = 'SELECT * FROM pregunta WHERE ID_Categoria =' . $categoria['ID_Categoria'] . ';';
            $ps = array();
            $rs = array();
            foreach ($pdo->query($sql2) as $pregunta){
                array_push($ps, $pregunta[1]);
                array_push($rs, $pregunta[2]);
            }
            $msg .= '<button type="button" role="button" name="btn-atc" class="ac-pushButton"';
            #$msg .= "onclick='imprimir_pregunta(" . $a . "," . $b . ")'";
            $msg .= "onclick='imprimicion(" . json_encode($ps)  . "," .  json_encode($rs)  . ", " . json_encode($categoria[1]) . ")'";
            $msg .= '<p>' . $categoria['nombre'];
            $msg .= '</button><br>';
        }
        echo($msg . '</span></p>');
        Database::disconnect();
    }
?>