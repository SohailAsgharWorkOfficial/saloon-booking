<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "salon_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM bookings");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bookings List</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>All Bookings</h1>
    <table border="1" width="100%" cellpadding="10">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Service</th>
        <th>Date</th>
        <th>Time</th>
      </tr>
      <?php while($row = $result->fetch_assoc()) { ?>
      <tr>
        <td><?= $row["id"] ?></td>
        <td><?= $row["name"] ?></td>
        <td><?= $row["service"] ?></td>
        <td><?= $row["date"] ?></td>
        <td><?= $row["time"] ?></td>
      </tr>
      <?php } ?>
    </table>
  </div>
</body>
</html>
<?php $conn->close(); ?>
