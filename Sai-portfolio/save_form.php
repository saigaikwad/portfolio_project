<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Save data to a file (you may want to use a database instead)
    $data = "$name, $email, $subject, $message\n";
    file_put_contents("form_data.txt", $data, FILE_APPEND);

    // Return a success response
    echo json_encode(["status" => "success"]);
} else {
    // Return an error response
    echo json_encode(["status" => "error"]);
}
?>
