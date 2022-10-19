<?php
    if(isset($_POST['enviar'])){
        if(!empty($_POST['nombre']) && !empty($_POST['descripcion']) && !empty($_POST['email'])){
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $email = $_POST['email'];
            $header = "From: noreply@example.com" . "\r\n";
            $header = "Reply-To: noreply@example.com" . "\r\n";
            $header = "X-Mailer: PHP/" . phpversion();
            $mail = mail($email,$descripcion, $header);
            if ($mail){
                echo "<h2> El correo fue enviado con exito </h2>";
            }
        }
    }
?>