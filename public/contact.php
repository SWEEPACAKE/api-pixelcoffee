<?php
$config = require_once __DIR__ . '/includes/config.php';
include 'includes/jwt-handler.php';
include 'includes/db.php';

if(!empty($_POST)) {
    $query = "INSERT INTO contact (first_name, last_name, email, company, message) VALUES (?, ?, ?, ?, ?)";
    
    $stmt = $database->prepare($query);
    $resultat = $stmt->execute([
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['company'],
        $_POST['message']
    ]);
    if($resultat) {
        echo json_encode(array("error" => false));
    } else {
        echo json_encode(array('error' => true, "message" => "L'insertion à échoué"));
    }

} else {
    echo json_encode(array('error' => true, "message" => "Pas de données en POST"));
}
