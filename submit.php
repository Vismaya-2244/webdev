<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    echo "<h3>Submitted Information:</h3>";
    echo "<p><strong>Full Name:</strong> $name</p>";
    echo "<p><strong>Email Address:</strong> $email</p>";
    echo "<p><strong>Phone Number:</strong> $phone</p>";
    echo "<p><strong>Address:</strong> $address</p>";
} else {
    echo "No data received!";
}
?>
