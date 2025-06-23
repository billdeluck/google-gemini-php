<?php
// src/GeminiClient.php
/**
 * GeminiClient: Simple PHP client for Google Gemini API
 *
 * Usage:
 *   $client = new GeminiClient(getenv('GEMINI_API_KEY'));
 *   $response = $client->generateContent('Your prompt here');
 */
class GeminiClient {
    private $apiKey;
    private $model;
    private $baseUrl;

    public function __construct($apiKey, $model = 'gemini-2.0-flash') {
        $this->apiKey = $apiKey;
        $this->model = $model;
        $this->baseUrl = 'https://generativelanguage.googleapis.com/v1beta';
    }

    /**
     * Generate content from Gemini API
     * @param string $prompt
     * @return string|null
     */
    public function generateContent($prompt) {
        $url = sprintf("%s/models/%s:generateContent?key=%s", $this->baseUrl, $this->model, $this->apiKey);
        $data = [
            "contents" => [[
                "role" => "user",
                "parts" => [["text" => $prompt]]
            ]]
        ];
        $jsonData = json_encode($data);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            curl_close($ch);
            return null;
        }
        curl_close($ch);
        $response = json_decode($response);
        if (isset($response->candidates[0]->content->parts[0]->text)) {
            return $response->candidates[0]->content->parts[0]->text;
        }
        return null;
    }
}
