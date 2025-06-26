<!-- GitAds-Verify: DNKDRQM9P37ERQTLWCNF7YV7M9RHSMKE -->

# Google Gemini PHP API Example & Test Generator

This repository demonstrates how to connect to the Google Gemini API using PHP, and provides a simple test generator for e-commerce product descriptions.

## Features
- Simple PHP client for Gemini API (no external dependencies)
- Example code for generating content
- Test script to verify API connection
- Secure API key handling
- Ready for extension to e-commerce product description generation

## Folder Structure

```
├── src/
│   └── GeminiClient.php         # Main Gemini API client class
├── tests/
│   └── test_gemini_connection.php # Test script for Gemini API connection
├── README.md                   # This documentation
├── google_gemini_php.md        # Original tutorial and notes
└── LICENSE
```

## Getting Started

### Prerequisites
- PHP 7.4 or higher
- A Google Gemini API key ([Get one here](https://aistudio.google.com/app/apikey))

### Setup
1. **Clone the repository:**
   ```bash
   git clone https://github.com/yourusername/google-gemini-php.git
   cd google-gemini-php
   ```
2. **Set your API key as an environment variable:**
   ```bash
   export GEMINI_API_KEY=your_api_key_here
   ```

### Usage

#### 1. Generate Content with Gemini
Edit and use the `src/GeminiClient.php` class in your PHP project:

```php
require_once 'src/GeminiClient.php';
$client = new GeminiClient(getenv('GEMINI_API_KEY'));
$response = $client->generateContent('Describe a red t-shirt for my shop.');
echo $response;
```

#### 2. Test Your Gemini API Connection

You can now run automated tests using PHPUnit (recommended):

```bash
vendor/bin/phpunit --bootstrap src/bootstrap.php tests/GeminiClientTest.php
```

Or, run the manual test script:

```bash
php tests/test_gemini_connection.php
```

> **Note:**
> - The test scripts load your API key from the `.env` file in the project root.
> - Make sure you have set your API key in `.env` as `GEMINI_API_KEY=your_api_key_here`.
> - Do **not** commit your `.env` file to version control (it is already in `.gitignore`).

If successful, you’ll see the Gemini response printed in your terminal.

## Extending for E-Commerce
- Use the `generateContent` method to create product descriptions, summaries, or marketing copy.
- Integrate with your product database to automate content generation.

## Contributing
1. Fork the repo and create your feature branch (`git checkout -b feature/YourFeature`)
2. Commit your changes (`git commit -am 'Add new feature'`)
3. Push to the branch (`git push origin feature/YourFeature`)
4. Open a Pull Request

## License
MIT

## Community & Support
- Star this repo if you find it useful!
- Open issues for bugs or feature requests.
- Pull requests are welcome.

---

For a full tutorial and code explanation, see `google_gemini_php.md`.
