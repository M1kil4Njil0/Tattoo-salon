<?php
namespace controllers\orders;

use models\orders\OrderModel;
use models\roles\Role;
use models\Check;

class OrderController{

    private $check;

    public function __construct()
    {
        $userRole = isset($_SESSION['user_role']) ? $_SESSION['user_role'] : null;
        $this->check = new Check($userRole);
    }

    public function index(){
        $this->check->requirePermission();
        $OrderModel = new OrderModel();
        $orders = $OrderModel->readAll();

        include 'app/views/orders/index.php';
    }

    public function create(){
        $this->check->requirePermission();
        include 'app/views/orders/create.php';
    }

    public function store(){
        $this->check->requirePermission();
        if(isset($_POST['id_users']) && isset($_POST['date']) && isset($_POST['time'])){
            $id_users = trim($_POST['id_users']);
            $date = trim($_POST['date']);
            $time = trim($_POST['time']);

            if (empty($id_users)) {
                echo "id users is required!";
                return;
            }

            $OrderModel = new OrderModel();
            $OrderModel->createOrder($id_users, $date, $time);
        }
        $path = '/'. APP_BASE_PATH . '/orders';
        header("Location: $path");
    }

    public function edit($params){
        $this->check->requirePermission();
        $OrderModel = new OrderModel();
        $order = $OrderModel->read($params['id_orders']);
        include 'app/views/orders/edit.php';
    }


    public function update($params){
        $this->check->requirePermission();

        if(isset($params['id_orders']) && isset($_POST['date']) && isset($_POST['time'])){
            $id_orders = trim($params['id_orders']);
            $date = trim($_POST['date']);
            $time = trim($_POST['time']);

            $OrderModel = new OrderModel();
            $OrderModel->updateOrder($id_orders, $date, $time);
        }
        $path = '/'. APP_BASE_PATH . '/orders';
        header("Location: $path");
    }

    public function delete($params){
        $this->check->requirePermission();
        $OrderModel = new OrderModel();
        $OrderModel->delete($params['id_orders']);
        $path = '/'. APP_BASE_PATH . '/orders';
        header("Location: $path");
    }

}