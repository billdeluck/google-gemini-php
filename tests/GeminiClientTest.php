<?php
// tests/GeminiClientTest.php
require_once __DIR__ . '/../src/bootstrap.php';
require_once __DIR__ . '/../src/GeminiClient.php';

use PHPUnit\Framework\TestCase;

class GeminiClientTest extends TestCase {
    public function testGenerateContentReturnsString() {
        $apiKey = getenv('GEMINI_API_KEY');
        if (!$apiKey || $apiKey === 'your_api_key_here') {
            $this->markTestSkipped('Valid GEMINI_API_KEY not set in .env');
        }
        $client = new GeminiClient($apiKey);
        $response = $client->generateContent('Say hello from Gemini!');
        $this->assertIsString($response);
        $this->assertNotEmpty($response);
    }
}
