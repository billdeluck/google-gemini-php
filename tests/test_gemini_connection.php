<?php
// tests/test_gemini_connection.php
require_once __DIR__ . '/../src/bootstrap.php';
require_once __DIR__ . '/../src/GeminiClient.php';

// Load API key from .env (via bootstrap.php)
$apiKey = getenv('GEMINI_API_KEY');
if (!$apiKey || $apiKey === 'your_api_key_here') {
    echo "Please set GEMINI_API_KEY in your .env file.\n";
    exit(1);
}

$client = new GeminiClient($apiKey);
$prompt = 'Test connection to Gemini API.';
$response = $client->generateContent($prompt);

if ($response) {
    echo "Connection successful!\n";
    echo "Gemini response: \n$response\n";
    exit(0);
} else {
    echo "Connection failed. Please check your API key and network.\n";
    exit(1);
}
