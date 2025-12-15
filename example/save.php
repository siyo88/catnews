<?php
$uploadDir = __DIR__ . '/uploads/';
if (!file_exists($uploadDir)) mkdir($uploadDir, 0777, true);
if (isset($_FILES['picture'])) move_uploaded_file($_FILES['picture']['tmp_name'], $uploadDir.'uploaded.png');
if (isset($_FILES['chibifile'])) move_uploaded_file($_FILES['chibifile']['tmp_name'], $uploadDir.'uploaded.chi');
if (isset($_FILES['swatches'])) move_uploaded_file($_FILES['swatches']['tmp_name'], $uploadDir.'uploaded.aco');
echo json_encode(['status'=>'ok']);
?>
