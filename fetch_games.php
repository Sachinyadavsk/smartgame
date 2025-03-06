<?php
header("Content-Type: application/json");
require "db_connection.php";
// Retrieve game_ids from the AJAX request
$storedGameIds = isset($_GET['game_ids']) ? explode(',', $_GET['game_ids']) : [];

if (empty($storedGameIds)) {
    echo json_encode([]);
    exit;
}

// Convert array to comma-separated string for SQL query
$ids = implode(",", array_map('intval', $storedGameIds));

$sql = "SELECT id, name, image, game_url FROM games WHERE id IN ($ids) order by games.id desc";
$result = $con->query($sql);

$games = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $games[] = [
            "id" => $row["id"],
            "name" => $row["name"],
            "image" => $row["image"],
            "game_url" => $row["game_url"]
        ];
    }
}

echo json_encode($games);
?>
