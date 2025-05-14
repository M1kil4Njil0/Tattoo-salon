<?php
namespace models\orders_cons;

use models\Database;

class ConModel{
    private $db;

    public function __construct(){
        $this->db = Database::getInstance()->getConnection();

        try{
            $result = $this->db->query("SELECT 1 FROM `orders_cons` LIMIT 1");
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
            $stmt = $this->db->query("SELECT * FROM `orders_cons`");

            $cons = [];
            while($row = $stmt->fetch(\PDO::FETCH_ASSOC)){
                $cons[] = $row;
            }
            return $cons;
        } catch(\PDOException $e){
            return false;
        }
    }
    
    public function read($id){
        $query = "SELECT * FROM orders_cons WHERE id_orderscons = ?";

        try{
            $stmt =$this->db->prepare($query);
            $stmt->execute([$id]);
            $res = $stmt->fetch(\PDO::FETCH_ASSOC);
            return $res;
        } catch(\PDOException $e){
            return false;
        }
    }
    
    public function delete($id){
        $query = "DELETE FROM orders_cons WHERE id_orderscons = ?";

        try{
            $stmt =$this->db->prepare($query);
            $stmt->execute([$id]);
            return true;
        } catch(\PDOException $e){
            return false;
        }
    }
}