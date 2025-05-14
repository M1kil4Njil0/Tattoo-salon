<?php
namespace models\orders;

use models\Database;

class OrderModel{
    private $db;

    public function __construct(){
        $this->db = Database::getInstance()->getConnection();

        try{
            $result = $this->db->query("SELECT 1 FROM `orders` LIMIT 1");
        } catch(\PDOException $e){
            $this->createTable();
        }
    }

    public function createTable(){
        $roleTableQuery = "CREATE TABLE IF NOT EXISTS `roles` (
            `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            `role_name` VARCHAR(255) NOT NULL,
            `role_description` TEXT
        )";

        $conTableQuery = "CREATE TABLE IF NOT EXISTS `users` (
            `id` INT(11) NOT NULL AUTO_INCREMENT,
            `username` VARCHAR(255) NOT NULL,
            `email` VARCHAR(255) NOT NULL,
            `email_verification` TINYINT(1) NOT NULL DEFAULT 0,
            `password` VARCHAR(255) NOT NULL,
            `is_admin` TINYINT(1) NOT NULL DEFAULT 0,
            `role` INT(11) NOT NULL DEFAULT 0,
            `is_active` TINYINT(1) NOT NULL DEFAULT 1,
            `last_login` TIMESTAMP NULL,
            `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (`id`),
            FOREIGN KEY (`role`) REFERENCES `roles`(`id`)
          )";

        try{
            $this->db->exec($roleTableQuery);
            $this->db->exec($conTableQuery);
            return true;
        } catch(\PDOException $e){
            return false;
        }
    }

    public function readAll(){
        try{
            $stmt = $this->db->query("SELECT id_orders, orders.id_users, username, date, time FROM users INNER JOIN orders on users.id = orders.id_users");

            $orders = [];
            while($row = $stmt->fetch(\PDO::FETCH_ASSOC)){
                $orders[] = $row;
            }
            return $orders;
        } catch(\PDOException $e){
            return false;
        }
    }
    

    public function delete($id_orders){
        $query = "DELETE FROM orders WHERE id_orders = ?";

        try{
            $stmt =$this->db->prepare($query);
            $stmt->execute([$id_orders]);
            return true;
        } catch(\PDOException $e){
            return false;
        }
    }

    public function read($id_orders){
        $query = 'SELECT id_orders, orders.id_users, username, date, time FROM users INNER JOIN orders on users.id = orders.id_users WHERE id_orders = ?';
        try{
            $stmt =$this->db->prepare($query);
            $stmt->execute([$id_orders]);
            $res = $stmt->fetch(\PDO::FETCH_ASSOC);
            return $res;
        } catch(\PDOException $e){
            return false;
        }
    }
    
    public function createOrder($id_users, $date, $time) {
        
        $query = "INSERT INTO orders (id_users, date, time) VALUES (?, ?, ?)";

        try {
            $stmt = $this->db->prepare($query);
            $stmt->execute([$id_users, $date, $time]);
            return true;
        } catch(\PDOException $e) {
            return false;
        }
    }

    public function updateOrder($id_orders, $date, $time){
        $query = "UPDATE orders SET date = ?, time = ? WHERE id_orders = ?";

        try{
            $stmt = $this->db->prepare($query);
            $stmt->execute([$date, $time, $id_orders]);
            
            return true;
        } catch(\PDOException $e){
            return false;
        }
    }
}