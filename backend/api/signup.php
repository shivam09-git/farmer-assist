<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "farmer_assist";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo json_encode(["status" => "error", "message" => "Database connection failed"]);
    exit();
}

// Get JSON data
$data = json_decode(file_get_contents("php://input"), true);
$name = $data["name"] ?? "";
$email = $data["email"] ?? "";
$pass = $data["password"] ?? "";

// Validate inputs
if (empty($name) || empty($email) || empty($pass)) {
    echo json_encode(["status" => "error", "message" => "All fields required"]);
    exit();
}

// Check if user already exists
$check = $conn->prepare("SELECT * FROM users WHERE email=?");
$check->bind_param("s", $email);
$check->execute();
$result = $check->get_result();

if ($result->num_rows > 0) {
    echo json_encode(["status" => "error", "message" => "User already exists"]);
    exit();
}

// Hash password securely
$hashedPass = password_hash($pass, PASSWORD_BCRYPT);

// Insert new user
$stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $hashedPass);

if ($stmt->execute()) {
    echo json_encode(["status" => "success", "message" => "User registered successfully"]);
} else {
    echo json_encode(["status" => "error", "message" => "Registration failed"]);
}

$stmt->close();
$conn->close();
?>
