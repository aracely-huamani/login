<?php
/*

  ____          _____               _ _           _       
 |  _ \        |  __ \             (_) |         | |      
 | |_) |_   _  | |__) |_ _ _ __ _____| |__  _   _| |_ ___ 
 |  _ <| | | | |  ___/ _` | '__|_  / | '_ \| | | | __/ _ \
 | |_) | |_| | | |  | (_| | |   / /| | |_) | |_| | ||  __/
 |____/ \__, | |_|   \__,_|_|  /___|_|_.__/ \__, |\__\___|
         __/ |                               __/ |        
        |___/                               |___/         
    
____________________________________
/ Si necesitas ayuda, contáctame en \
\ https://parzibyte.me               /
 ------------------------------------
        \   ^__^
         \  (oo)\_______
            (__)\       )\/\
                ||----w |
                ||     ||
Creado por Parzibyte (https://parzibyte.me).
------------------------------------------------------------------------------------------------
Si el código es útil para ti, puedes agradecerme siguiéndome: https://parzibyte.me/blog/sigueme/
Y compartiendo mi blog con tus amigos
También tengo canal de YouTube: https://www.youtube.com/channel/UCroP4BTWjfM0CkGB6AFUoBg?sub_confirmation=1
------------------------------------------------------------------------------------------------
*/ ?>
<?php include_once "encabezado.php" ?>
     <!-- simple captcha style -->
     <link rel="stylesheet" href="captcha.css">

<div class="col-12">
    <h1>Login</h1>
    <form action="login.php" method="post">
        <div class="form-group">
            <label for="correo">Correo electrónico:</label>
            <input class="form-control" id="correo" type="email" name="correo" placeholder="Correo electrónico" required>
        </div>
        <div class="form-group">
            <label for="palabraSecreta">Contraseña:</label>
            <input class="form-control" id="palabraSecreta" type="password" name="palabraSecreta" required placeholder="Contraseña">
        </div>
        <?php
        # si hay un mensaje, mostrarlo
        if (isset($_GET["mensaje"])) { ?>
            <div class="alert alert-info">
                <?php echo $_GET["mensaje"] ?>
            </div>
        <?php } ?>
        <br>
       

        <div class="form-group">
            <div class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
            <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha">
            <div class="help-block with-errors"></div>
        </div>

        <button class="btn btn-success" type="submit">Iniciar sesión</button>
        <br><br>
        <p>
            <a href="formulario_registro.php">¿Aun no te has registrado?</a>
        </p>
        <p>
            <a href="newpassword.php">¿Has olvidado tu contraseña?</a>
        </p>
        
    </form>
    
   
</div>
<?php include_once "pie.php" ?>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src="validator.js"></script>
    <script src="contact.js"></script>