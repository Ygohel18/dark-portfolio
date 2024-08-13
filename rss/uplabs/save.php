<?php
// Function to fetch JSON data from a URL
function fetchJSON($url) {
    $json = file_get_contents($url);
    return json_decode($json, true);
}

// Function to save JSON data to a file
function saveJSONToFile($data, $filename) {
    file_put_contents($filename, json_encode($data, JSON_PRETTY_PRINT));
}

// Function to download images from the JSON data
function downloadImages($data, $folder) {
    if (!is_dir($folder)) {
        mkdir($folder, 0777, true);
    }

    foreach ($data as $item) {
        if (isset($item['images'])) {
            foreach ($item['images'] as $image) {
                $imageUrl = $image['urls']['full'];
                $imageExtension = pathinfo($imageUrl, PATHINFO_EXTENSION);
                $uniqueFilename = uniqid() . '.' . $imageExtension;
                $imagePath = $folder . '/' . $uniqueFilename;
                file_put_contents($imagePath, file_get_contents($imageUrl));
            }
        }
    }
}

// Main function to fetch data from multiple pages and save it to a JSON file
function saveJSONFromMultiplePages($baseUrl, $pages, $filename, $imageFolder) {
    $allData = array();

    for ($i = 1; $i <= $pages; $i++) {
        $url = $baseUrl . '?format=json&page=' . $i;
        $jsonData = fetchJSON($url);

        if (!empty($jsonData)) {
            $allData = array_merge($allData, $jsonData);
        }
    }

    // Save merged data to file
    saveJSONToFile($allData, $filename);

    // Download images
    downloadImages($allData, $imageFolder);
}

// Define base URL, number of pages, and filename
$baseUrl = 'https://www.uplabs.com/ygohel18';
$pages = 200;
$filename = 'uplabs_data.json';
$imageFolder = 'img';

// Fetch and save JSON data and download images
saveJSONFromMultiplePages($baseUrl, $pages, $filename, $imageFolder);

echo "JSON data saved to $filename and images downloaded to $imageFolder";
?>
