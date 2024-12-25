<?php
header('Content-Type: application/json');

$file_path = 'conversations.txt';

$logs = [];
if (file_exists($file_path)) {
    $lines = file($file_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    array_shift($lines); // Ignorer l'en-tête

    foreach ($lines as $line) {
        $columns = explode("\t", $line);
        $logs[] = [
            "source" => $columns[0],
            "destination" => $columns[1],
            "protocol" => $columns[2],
            "dscp" => $columns[3],
            "traffic" => $columns[4]
        ];
    }
}

echo json_encode($logs);
?>
