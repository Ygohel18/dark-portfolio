<?php
// Function to fetch JSON data from a URL
function fetchJSON($url) {
    $json = file_get_contents($url);
    return json_decode($json, true);
}

function convertToRSSDate($dateString) {
    $dateTime = new DateTime($dateString);
    return $dateTime->format(DateTime::RSS);
}

// Function to convert JSON data into XML format
function convertToXML($data) {
    $xml = new SimpleXMLElement('<rss/>');
    $channel = $xml->addChild('channel');

    // Add additional information
    $channel->addChild('title', 'Yash Gohel on Uplabs');
    $channel->addChild('link', 'https://yashgohel.com/posts');
    $channel->addChild('description', 'Explore Graphics Design from Yash Gohel on Uplabs');
    $channel->addChild('language', 'en-us');
    
    // Add atom:link element
    $atomLink = $channel->addChild('atom:link');
    $atomLink->addAttribute('href', 'https://yashgohel.com/rss/uplabs');
    $atomLink->addAttribute('rel', 'self');
    $atomLink->addAttribute('type', 'application/rss+xml');

    foreach ($data as $item) {
        $rssItem = $channel->addChild('item');
        
        // Add attributes as child elements
        $rssItem->addChild('title', htmlspecialchars($item['name']));
        // $rssItem->addChild('link', htmlspecialchars($item['link_url']));
        $linkUrl = str_replace('uplabs.com', 'yashgohel.com', $item['link_url']);
        $rssItem->addChild('link', htmlspecialchars($linkUrl));
        $rssItem->addChild('description', htmlspecialchars($item['description_without_html']));
        $rssItem->addChild('category', htmlspecialchars($item['category_friendly_name']));
        $rssItem->addChild('guid', htmlspecialchars(md5($item['link_url'])));
        $rssItem->addChild('pubDate', htmlspecialchars(convertToRSSDate($item['showcased_at'])));
        
        // <guid isPermaLink="false">D20KGbJghT</guid>
        
        // Add image URL as enclosure
        $enclosure = $rssItem->addChild('enclosure');
        $enclosure->addAttribute('url', htmlspecialchars($item['preview_url']));
        $enclosure->addAttribute('type', 'image/png');
        
    }

    return $xml->asXML();
}

// Main function to fetch data from multiple pages and create RSS feed
function createRSSFeed($baseUrl, $pages) {
    $allData = array();

    for ($i = 1; $i <= $pages; $i++) {
        $url = $baseUrl . '?format=json&page=' . $i;
        $jsonData = fetchJSON($url);

        if (!empty($jsonData)) {
            $allData = array_merge($allData, $jsonData);
        }
    }

    $rssXML = convertToXML($allData);
    return $rssXML;
}

// Define base URL and number of pages
$baseUrl = 'https://www.uplabs.com/ygohel18';
$pages = 1;

// Generate RSS feed
$rssFeed = createRSSFeed($baseUrl, $pages);

// Output RSS feed
header('Content-Type: application/xml; charset=utf-8');
echo $rssFeed;
?>
