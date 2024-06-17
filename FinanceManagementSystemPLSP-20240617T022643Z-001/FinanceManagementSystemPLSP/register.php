<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize input data
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $course = htmlspecialchars($_POST['course']);
    $dates = htmlspecialchars($_POST['dates']);
    $amount = htmlspecialchars($_POST['amount']);
    $selectable = isset($_POST['selectable']) ? $_POST['selectable'] : [];

    // Ensure all selectable items are sanitized
    $selectable = array_map('htmlspecialchars', $selectable);

    // Build query string
    $queryString = http_build_query([
        'firstName' => $firstName,
        'lastName' => $lastName,
        'course' => $course,
        'dates' => $dates,
        'amount' => $amount,
        'selectable' => $selectable
    ]);

    // Redirect to receipt page
    header("Location: receipt.php?$queryString");
    exit;
}
?>
