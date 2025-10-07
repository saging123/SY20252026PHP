<?php
$movies = [
    ['title' => 'Avengers',      'rate' => 9.0],
    ['title' => 'Avatar',        'rate' => 8.5],
    ['title' => 'Aquaman',       'rate' => 7.8],
    ['title' => 'Batman',        'rate' => 8.2],
    ['title' => 'Black Panther', 'rate' => 8.7],
    ['title' => 'Barbie',        'rate' => 7.5]
];

$keyword = $_GET['search'] ?? '';
$orderBy = $_GET['order'] ?? '';

function searchMovies($movies, $keyword) {
    $result = [];
    foreach ($movies as $movie) {
        if (str_starts_with(strtolower($movie['title']), strtolower($keyword))) {
            $result[] = $movie;
        }
    }
    return $result;
}

function orderMovies(&$movies, $key) {
    usort($movies, function ($a, $b) use ($key) {
        if (is_numeric($a[$key]) && is_numeric($b[$key])) {
            return $a[$key] <=> $b[$key];
        }
        return strcmp($a[$key], $b[$key]);
    });
}


$filtered = searchMovies($movies, $keyword);


if (!empty($orderBy)) {
    orderMovies($filtered, $orderBy);
}


echo "You searched for: <b>$keyword</b> | Ordered by: <b>$orderBy</b><br><br>";

if (empty($filtered)) {
    echo "No results found.";
} else {
    foreach ($filtered as $movie) {
        echo " {$movie['title']} - Rating: {$movie['rate']}<br>";
    }
}
?>
