<?php
function fetchRecipes($apiKey, $apiEndpoint, $number) {
    // Construct the API URL
    $url = $apiEndpoint . "?apiKey=" . $apiKey . "&number=" . $number;

    // Make a GET request to the API
    $response = file_get_contents($url);

    // Check if the request was successful
    if ($response === false) {
        die("Failed to fetch recipes from the API.");
    }

    // Parse the JSON response
    $data = json_decode($response, true);

    // Check if the response contains any recipes
    if (!isset($data['recipes']) || empty($data['recipes'])) {
        die("No recipes found.");
    }

    return $data['recipes'];
}
?>
