<?php
    // Get index
    $index = $_GET['index']; 
 
    // Fetch data from json
    $data = file_get_contents('members.json');
    $data = json_decode($data, true); // Decode JSON as associative array
 
    // Delete the row with the index
    unset($data[$index]);

    // Re-index array to ensure continuous indices
    $data = array_values($data);
 
    // Encode back to JSON
    $data = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents('members.json', $data);
 
    header('location: index.php');
