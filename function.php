<?php

require_once "./db.php";

function getNutritionList(){

    global $link;

    $query = "SELECT * FROM nutrition";
    $result = mysqli_query($link, $query);

    if($result){

        if(mysqli_num_rows($result) > 0){

            $response = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $data = [
                'status' => 200,
                'message' => 'Nutrition list fetched successfully',
                'data' => $response
            ];
            header("HTTP/1.0 200 Nutrition list fetched successfully");
            return json_encode($data);

        }else{
            $data = [
                'status' => 404,
                'message' => 'No nutrition found',
            ];
            header("HTTP/1.0 404 No nutrition found");
            return json_encode($data);
        }

    }else{
        $data = [
            'status' => 500,
            'message' => 'Internal Server Error',
        ];
        header("HTTP/1.0 500 Internal Server Error");
        return json_encode($data);
    }
}


?>