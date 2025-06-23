# Google Gemini PHP API Connection & Test Example

This document explains how to connect to the Google Gemini API using PHP, test the connection, and lays the foundation for generating e-commerce product descriptions.

---

## 1. Introduction
While there’s no official Google Gemini API library for PHP, it’s easy to connect using basic PHP and cURL. This guide shows how to:
- Connect to Gemini API
- Test the connection
- Prepare for generating product descriptions

## 2. Prerequisites
- PHP 7.4+
- Gemini API Key ([Get one here](https://aistudio.google.com/app/apikey))
- IDE or text editor

## 3. Project Structure
```
├── src/
│   └── GeminiClient.php         # Gemini API client class
├── tests/
│   └── test_gemini_connection.php # Test script for Gemini API connection
├── README.md                   # Main documentation
├── google_gemini_php.md        # This tutorial
└── LICENSE
```

## 4. GeminiClient Class (src/GeminiClient.php)
```php
class GeminiClient {
    // ...existing code...
}
```
- Handles API requests and response parsing
- Usage:
```php
$client = new GeminiClient(getenv('GEMINI_API_KEY'));
$response = $client->generateContent('Describe a blue mug.');
echo $response;
```

## 5. Testing the Connection (tests/test_gemini_connection.php)
- Loads API key from environment variable
- Calls Gemini API and prints the result
- Usage:
```bash
php tests/test_gemini_connection.php
```

## 6. Next Steps
- Integrate with your e-commerce platform to generate product descriptions
- Extend the client for more advanced use cases (e.g., vision, chat)

## 7. Security Note
- Never commit your API key to version control
- Use environment variables for sensitive data

---

Gemini is a powerful tool for content generation. For more details, see the README.md and explore the code in `src/` and `tests/` folders.