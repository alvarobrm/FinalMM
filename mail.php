


<?php
            $dest = $_POST['mail'];
            $asunto = "Consulta Web";
            $img = $_POST['img'];

            $comentario= "http://gandiaurjc.esy.es/images/postal2.jpg";

            $headers = 'From: '.$_POST['mail']."\r\n".
                'Reply-To: '.$_POST['mail']."\r\n".
                'X-Mailer:PHP/'.phpversion();

            mail($dest, $asunto, $comentario, $headers);

            


        ?>