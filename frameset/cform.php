<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
header("Content-Type: application/json");

header("Content-Type: application/json");
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if request method is POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo json_encode(["error" => "Invalid request method, use POST"]);
    exit;
}

// Read JSON input
$input = file_get_contents("php://input");
$data = json_decode($input, true);

// Validate input
if (!$data || !isset($data["code"]) || !isset($data["language"])) {
    echo json_encode(["error" => "Invalid JSON format or missing fields"]);
    exit;
}

// API Credentials
$apiKey = "YOUR_RAPIDAPI_KEY"; // Replace with your RapidAPI key
$apiUrl = "https://judge0-ce.p.rapidapi.com/submissions?base64_encoded=true&wait=true";

// Prepare request data
$postData = [
    "source_code" => base64_encode($data["code"]),
    "language_id" => (int) $data["language"]
];

// Create request context
$options = [
    "http" => [
        "header"  => "Content-Type: application/json\r\n" .
                     "x-rapidapi-host: judge0-ce.p.rapidapi.com\r\n" .
                     "x-rapidapi-key: $apiKey\r\n",
        "method"  => "POST",
        "content" => json_encode($postData)
    ]
];

$context = stream_context_create($options);
$response = file_get_contents($apiUrl, false, $context);
$responseData = json_decode($response, true);

// Send response back to frontend
echo json_encode($responseData);
?>
