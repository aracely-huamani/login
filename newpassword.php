<?php
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Login con límite de intentos en PHP">
    <meta name="author" content="Parzibyte">
    <!-- Cargar el CSS de Boostrap-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Cargar estilos propios -->
    <link href="style.css" rel="stylesheet">
</head>
<main role="main" class="container">
        <div class="row">
<div class="col-10">
    <h1>Reestablecer contraseña </h1>
        <p>
            Hola,
            <br>
            Ha solicitado reestablecer su contraseña de sus cuenta de nuestra pagina web.
            Se le enviara un enlace a su correo una vez que nos de la informacion de
            su direccion de correo electronico.Con ello podra realizar todas las acciones para 
            tener una nueva contraseña.Si no ha solicitado ninguna contraseña,ignore este
            correo electronico.Si cree que alguien esta intentando acceder a su cuenta,contacte con 
            supoort@gmail.com
        </p>
        <div class="form-group">
            <label for="correo">Correo electrónico:</label>
            <input class="form-control" id="correo" type="email" name="correo" placeholder="Correo electrónico" required>
        </div>
        <button class="btn btn-success" type="submit">Reestablecer contraseña</button>
<div>