<?php
session_start();
if (isset($_SESSION['user']))
{
    echo '<script>location.href = "welcome.php";</script>';
}
else
{
?>
    <!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="UTF-8">
            <title>Login</title>

            <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        </head>

        <body>
            <div class="contenedor">
                <h1>Login - Hola Mundo! </h1>
                <hr>
                <h2>Ingrese credenciales</h2>
                <img src="login.png" alt="" width="80" height="80">
                <div id="login">
                    <form method="POST" action="return false" onsubmit="return false">
                        <div id="result"></div>
                        <p><input type="text" name="user" id="user" value="" placeholder="user"></p>
                        <p><input type="password" name="pass" id="pass" value="" placeholder="*******"></p>
                        <p>
                            <button onclick="Validar(document.getElementById('user').value, document.getElementById('pass').value);">
                                login
                            </button>
                        </p>
                    </form>
                    <script>
                        function Validar(user, pass) {
                            $.ajax({
                                url: "validate.php",
                                type: "POST",
                                data: "user=" + user + "&pass=" + pass,
                                success: function (resp) {
                                    $('#result').html(resp)
                                }
                            });
                        }
                    </script>
                </div>
            </div>
        </body>
    </html>
    <?php
}
?>