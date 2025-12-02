<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data safely

    $data = [
        "Name: " => $_POST ["user"],
        "Email: " => $_POST ["useremail"],
        "Comment: " => $_POST ["usercomment"],
    ];

    // Append to file
    $file = fopen("data.txt", "a"); // "a" = append mode
    foreach ($data as $key => $value) {
        fwrite($file, "$key: $value\n");
    }

    fwrite($file, "<===========================================>\n");
    fclose($file);

    header("Location: index1.html?status=success");
exit;

}
?>