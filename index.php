
<?php
require_once 'config/database.php';
require_once 'controllers/UserController.php';

$controller = new UserController();

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    $controller->$action();
} else {
    $controller->index();
}
?>
