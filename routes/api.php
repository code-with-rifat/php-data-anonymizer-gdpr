<?php

/**
 * API Routes Definition for php-data-anonymizer-gdpr
 */

return [
    'GET /api/v1/health' => ['App\Controllers\ApiController', 'health'],
    'GET /api/v1/data-anonymizer-gdpr' => ['App\Controllers\\DataAnonymizerGdprController', 'index'],
    'POST /api/v1/data-anonymizer-gdpr' => ['App\Controllers\\DataAnonymizerGdprController', 'store'],
    'GET /api/v1/data-anonymizer-gdpr/{id}' => ['App\Controllers\\DataAnonymizerGdprController', 'show'],
    'DELETE /api/v1/data-anonymizer-gdpr/{id}' => ['App\Controllers\\DataAnonymizerGdprController', 'destroy']
];