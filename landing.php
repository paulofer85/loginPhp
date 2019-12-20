<?php

session_start();
if (isset($_SESSION['user']))
{
?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <title>Welcome!</title>
    </head>

    <body>
        <div class="content">
            <h1>Welcome : <?php echo $_SESSION['user']; ?></h1>
            <hr>
            <img src="welcome.png" alt="">
            <p>Hola Mundo!</p>
            <p><a href="logout.php">Logout</a></p>
        </div>
    </body>

    </html>
<?php
}
else
{
    echo '<script>location.href = "index.php";</script>';
}
?>