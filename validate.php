<?php
    error_reporting(0);
    session_start();
    $con = new mysqli("localhost:3306", "root", "root", "loginPhp");
    
    if ($con->connect_errno)
    {
        echo "Fail to connect MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
        exit();
    }
    
    @mysqli_query($con, "SET NAMES 'utf8'");
    if ($_POST['user'] == null || $_POST['pass'] == null)
    {
        echo '<span>Complete todos los campos.</span>';
    }
    else
    {
        $MESSAGE_ERROR_LOG = "<span>El usuario y/o clave son incorrectas, vuelva a intentarlo.</span>";
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $query= 'SELECT userName, password FROM login WHERE userName = "'.$user.'"; ';
        $resultado = mysqli_query($con, $query);
        if (mysqli_num_rows($resultado) > 0)
        {
            //$hash = password_hash($pass, PASSWORD_DEFAULT);
            $rowPass = mysqli_fetch_row($resultado)[1];
            if (password_verify($pass, $rowPass)) 
            {
                $_SESSION["user"] = $user;
                echo '<script>location.href = "landing.php"</script>';
            }
            else
            {
                echo $MESSAGE_ERROR_LOG;
                exit;
            }
        }
        else
        {
            echo $MESSAGE_ERROR_LOG;
        }
    }
?>