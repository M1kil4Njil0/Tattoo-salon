<?php
if($_SERVER['REQUEST_URI'] == '/CRM/index.php'){
    header('Location: /CRM/');
    exit();
}

$title = 'Home page';
ob_start(); 
?>

<h1>Home page</h1>

<?php $content = ob_get_clean(); 

include 'app/views/layout.php';
?>