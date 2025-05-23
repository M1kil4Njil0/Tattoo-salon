<?php
namespace controllers\users;

use models\roles\Role;
use models\users\User;
use models\Check;

class UsersController{

    private $check;

    public function __construct()
    {
        $userRole = isset($_SESSION['user_role']) ? $_SESSION['user_role'] : null;
        $this->check = new Check($userRole);
    }

    public function index(){
        $this->check->requirePermission();
        $userModel = new User();
        $users = $userModel->readAll();

        include 'app/views/users/index.php';
    }

    public function create(){
        $this->check->requirePermission();
        include 'app/views/users/create.php';
    }

    public function store(){
        $this->check->requirePermission();
        if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_password'])){
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];

            if ($password !== $confirm_password) {
                echo "Passwords do not match";
                return;
            }

            $userModel = new User();
            $data = [
              'username' => $_POST['username'],
              'email' => $_POST['email'],
              'password' => $password,
              'role' => 1, 
            ];
            $userModel->create($data);
            
        }
        $path = '/'. APP_BASE_PATH . '/users';
        header("Location: $path");
    }

    public function edit($params){
        $this->check->requirePermission();
        $userModel = new User();
        $user = $userModel->read($params['id']);
    
        $roleModel = new Role();
        $roles = $roleModel->getAllRoles();
    
        include 'app/views/users/edit.php';
    }
    

    public function update($params)
    {
        $this->check->requirePermission();

        $userModel = new User();
        $userModel->update($params['id'], $_POST);
        if (isset($_POST['email'])) {
            $newEmail = $_POST['email'];
            
            // Проверяем, совпадает ли роль текущего пользователя с обновленной ролью
            if ($newEmail == $_SESSION['user_email']) {
                $path = '/' . APP_BASE_PATH . '/auth/logout';
                header("Location: $path");
                exit();
            }
        }
        $path = '/' . APP_BASE_PATH . '/users';
        header("Location: $path");
    }



    public function delete($params){
        $this->check->requirePermission();
        $userModel = new User();
        $userModel->delete($params['id']);
        $path = '/'. APP_BASE_PATH . '/users';
        header("Location: $path");
    }

}