<?php
// Connect to the database
$host = 'sql200.infinityfree.com'; // your InfinityFree DB host
$user = 'if0_38736636';    // your DB username
$pass = 'R30iN1sdQXL9';     // your DB password
$dbname = 'if0_38736636_jsandya'; // your DB name

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to get all guestbook messages
$sql = "SELECT message, name FROM guestbook ORDER BY created_at DESC";
$result = $conn->query($sql);

// Check if there are results
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        // Here, you can display the data as you wish
        echo "<div class='guestbook-main bg-white shadow rounded-xl p-4'>";
        echo "<p class='guestbook-comment text-gray-700 italic'>" . htmlspecialchars($row['message']) . "</p>";
        echo "<p class='guestbook-name text-right text-sm text-gray-500 mt-2'>– " . htmlspecialchars($row['name']) . "</p>";
        echo "</div>";
    }
} else {
    echo "No results found.";
}

// Close the connection
$conn->close();
?>
