<?php
$config = require_once __DIR__ . '/includes/config.php';

include 'includes/jwt-handler.php';
include 'includes/db.php';

if(empty($_GET) || !isset($_GET['id'])) {
    header("HTTP/1.0 422 Missing parameter");
    exit();
}
$query = "SELECT article.* FROM article WHERE id = ?";

$stmt = $database->prepare($query);
$stmt->execute([$_GET['id']]);
$result = $stmt->fetch(PDO::FETCH_ASSOC);
echo json_encode($result);