<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once __DIR__ . "/src/Controllers/TaskController.php";

$controller = new TaskController();
$action = $_GET['action'] ?? 'index';

if (method_exists($controller, $action)){
    $controller->{$action}();
}else {
    echo "Action non trouvee !";
}