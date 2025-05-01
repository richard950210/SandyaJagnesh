<?php
$host = 'sql200.infinityfree.com'; // your InfinityFree DB host
$user = 'if0_38736636';    // your DB username
$pass = 'R30iN1sdQXL9';     // your DB password
$dbname = 'if0_38736636_jsandya'; // your DB name

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/* Previous code for fetching guestbook comments, commented out for future reference:
$result = $conn->query("SELECT name, comment FROM guestbook ORDER BY id DESC LIMIT 10");

$comments = array();
while($row = $result->fetch_assoc()) {
    $comments[] = $row;
}

header('Content-Type: application/json');
echo json_encode($comments);

$conn->close();
*/
?>
