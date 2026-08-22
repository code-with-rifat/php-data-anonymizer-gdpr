<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Controllers\\DataAnonymizerGdprController;

echo "========================================\n";
echo " PHP GDPR Data Anonymizer & Masking Shield CLI Engine\n";
echo "========================================\n\n";

$controller = new DataAnonymizerGdprController();
$status = $controller->status();

echo "Service: " . $status['service'] . "\n";
echo "Version: " . $status['version'] . "\n";
echo "Status:  " . $status['status'] . "\n\n";
echo "System Ready.\n";