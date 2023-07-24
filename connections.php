<?php

try {
    $pdo = new PDO
    (
        'mysql:host=127.0.0.1;
        dbname=calculator',
        'dckap',
        'Dckap2023Ecommerce'
    );
} catch (Exception $e) {
    echo "Connection:" . $e->getMessage();
}
?>