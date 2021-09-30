<?php
error_reporting(E_ALL);
ini_set('display_errors', true);

require_once("config/main.php");

    spl_autoload_register(function($class) {
        if (file_exists('controllers/'."$class.php")) {
            require_once 'controllers/'."$class.php";
            return true;
        }
    });


?>
<!DOCTYPE html>
<html lang='pt-br'>
    <?php
        require_once("assets/includes/header.php");
    ?>
    <body>
        <?php
        if ($_GET) {
            $controller = isset($_GET['controller']) ? ((class_exists($_GET['controller'])) ? new $_GET['controller'] : NULL ) : null;
            $method     = isset($_GET['method']) ? $_GET['method'] : null;
            if ($controller && $method) {
                if (method_exists($controller, $method)) {
                    $parameters = $_GET;
                    unset($parameters['controller']);
                    unset($parameters['method']);
                    call_user_func(array($controller, $method), $parameters);
                    $url = 'asa';
                } else {
                    echo "Método não encontrado!";
                }
            } else {
                echo "Controller não encontrado!";
            }
        } else {
            echo '<h1 class="center">Home</h1><hr><div class="container">';
            echo '<a href="?controller=FilmesController&method=listar" class="btn btn-success">Listar!</a></div>';
        }
        ?>
    </body>
    <?php
        require_once("assets/includes/footer.php");
    ?>
</html>