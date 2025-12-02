<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $content = $_POST['basta'] ?? '';

    file_put_contents(__DIR__ . '/aboutsave.txt', $content);

    // Redirect back to the page
    header("Location: index.php#about");
    exit;
}
?>