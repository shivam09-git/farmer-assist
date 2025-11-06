<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["plant_image"])) {
    $fileTmp = $_FILES["plant_image"]["tmp_name"];
    $fileName = $_FILES["plant_image"]["name"];
    $fileType = $_FILES["plant_image"]["type"];

    $api_key = "vLgswfBiLBMN9zbcrDnH";
    $model_url = "https://detect.roboflow.com/plants-diseases-detection-and-classification/12";

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => $model_url . "?api_key=" . $api_key,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_HTTPHEADER => ["Content-Type: multipart/form-data"],
        CURLOPT_POSTFIELDS => [
            "file" => new CURLFile($fileTmp, $fileType, $fileName)
        ]
    ]);

    $response = curl_exec($curl);

    if (curl_errno($curl)) {
        echo json_encode(["status" => "error", "message" => curl_error($curl)]);
        curl_close($curl);
        exit;
    }

    curl_close($curl);
    $data = json_decode($response, true);

    if (isset($data["predictions"]) && count($data["predictions"]) > 0) {
        echo json_encode([
            "status" => "success",
            "detections" => $data["predictions"]
        ]);
    } else {
        echo json_encode([
            "status" => "error",
            "message" => "No predictions found — try another image.",
            "response" => $data
        ]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "No image provided"]);
}
?>
