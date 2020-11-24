
<?php
// mysqli
$mysqli = new mysqli("localhost", "root", "hansol123", "pokercrew");
$result = $mysqli->query("SELECT 'Hello, dear MySQL user!' AS _message FROM DUAL");
$row = $result->fetch_assoc();
echo htmlentities($row['_message']);
?>