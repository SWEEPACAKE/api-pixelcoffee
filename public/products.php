<?php
$config = require_once __DIR__ . '/includes/config.php';
include 'includes/jwt-handler.php';
include 'includes/db.php';

$query = "SELECT products.* FROM products";

$stmt = $database->prepare($query);
$stmt->execute();
$result = $stmt->fetchAll();
echo json_encode($result);