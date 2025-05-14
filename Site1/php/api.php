<?php

session_start();
require_once 'func.php';

if(isset($_POST['action'])){
    if($_POST['action'] === 'add_user') {
        echo registerUser();
    }
}