
<?php
require_once 'models/User.php';

class UserController {
    private $model;

    public function __construct() {
        $this->model = new User();
    }

    public function index() {
        $users = $this->model->getAllUsers();
        require 'views/index.php';
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->model->addUser($_POST['name'], $_POST['email']);
            header('Location: index.php');
        } else {
            require 'views/add.php';
        }
    }

    public function edit() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->model->updateUser($_POST['id'], $_POST['name'], $_POST['email']);
            header('Location: index.php');
        } else {
            $user = $this->model->getUser($_GET['id']);
            require 'views/edit.php';
        }
    }
}
?>
