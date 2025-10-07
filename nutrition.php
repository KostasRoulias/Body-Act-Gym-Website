<?php
// Initialize the session
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 
// Include config file
require_once "./db.php";

$csv = "./nutrients_csvfile.csv";

if (($handle = fopen($csv, "r")) !== FALSE) {
    // Read and discard the first row (header)
    fgetcsv($handle, 1000, ","); 
    
    // Read and insert data for the remaining rows
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        // Insert CSV values into the database
        $sql = "INSERT INTO nutrition (Food, Measure, Grams, Calories, Protein, 
        Fat, Sat_Fat, Fiber, Carbs, Category) VALUES 
        ('" . $link->real_escape_string($data[0]) . "', '" . $link->real_escape_string($data[1]) . "', 
        '" . $link->real_escape_string($data[2]) . "', '" . $link->real_escape_string($data[3]) . "', 
        '" . $link->real_escape_string($data[4]) . "', '" . $link->real_escape_string($data[5]) . "',
        '" . $link->real_escape_string($data[6]) . "', '" . $link->real_escape_string($data[7]) . "', 
        '" . $link->real_escape_string($data[8]) . "', '" . $link->real_escape_string($data[9]) . "')";

        if ($link->query($sql) === FALSE) {
            echo "Error: " .$sql. "<br>". $link->error;
        }
    }
    fclose($handle);

} else{
    echo "Error: Unable to open CSV file.";
}

?>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 
require_once "./db.php";

//Create API
header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Method:GET');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Request-With');

include "./function.php";

$requestMethod = $_SERVER['REQUEST_METHOD'];

if($requestMethod == "GET"){

    $nutritionList = getNutritionList();
    echo $nutritionList;

}else{

    $data = [
        'status' => 405,
        'message' => $requestMethod. 'Method not Allowed',
    ];
    header("HTTP/1.0 405 Method not Allowed");
    echo json_encode($data);
}

?>