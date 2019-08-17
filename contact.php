<?php

    $errors = '';
    $submit = false;

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        if(!empty($_POST['name'])){
            $name = $_POST['name'];
            $name = cleanDates($name);
        }else{
            $errors = 'Debes ingresar un nombre';
        }

        if(!empty($_POST['email'])){
            $email = $_POST['email'];
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                $email = cleanDates($email);
            }else{
                $errors = 'Debes ingresar un email valido';
            }
        }else{
            $errors = 'Debes ingresar un email';
        }

        if(!empty($_POST['phone'])){
            $phone = $_POST['name'];
            $phone = cleanDates($email);
        }else{
            $phone = 'No se ha ingresado un numero';
        }

        if(!empty($_POST['message'])){
            $message = $_POST['message'];
            $message = cleanDates($message);
        }else{
            $errors = 'Debes ingresar un mensaje';
        }

        if(empty($errors)){
            $enviar_a = 'ifdesing.contacto@gmail.com';
            $asunto = 'Correo enviado desde ifdesign.tech';
            $mensaje_preparado = "De: " . $name ."\n";
            $mensaje_preparado .= "Correo:" . $email . "\n";
            $mensaje_preparado .= "Numero:" . $phone . "\n";
            $mensaje_preparado .= "Mensaje: " . $message;

            mail($enviar_a, $asunto, $mensaje_preparado);
            $submit = true;
        }

    }

?>
