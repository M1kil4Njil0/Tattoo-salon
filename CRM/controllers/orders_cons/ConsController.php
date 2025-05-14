<?php
namespace controllers\orders_cons;

use models\orders_cons\ConModel;
use models\roles\Role;
use models\Check;

class ConsController{

    private $check;

    public function __construct()
    {
        $userRole = isset($_SESSION['user_role']) ? $_SESSION['user_role'] : null;
        $this->check = new Check($userRole);
    }

    public function index(){
        $this->check->requirePermission();
        $ConModel = new ConModel();
        $cons = $ConModel->readAll();

        include 'app/views/orders_cons/index.php';
    }

    public function delete($params){
        $this->check->requirePermission();

        $ConModel = new ConModel();
        $ConModel->delete($params['id_orderscons']);
        
        $path = '/'. APP_BASE_PATH . '/orders_cons';
        header("Location: $path");
    }

}