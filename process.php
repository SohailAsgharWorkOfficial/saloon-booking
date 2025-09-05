<?php
$servername = "localhost";
$username = "root";  // default XAMPP user
$password = "";      // default XAMPP password
$dbname = "salon_db";

// Create DB connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Insert booking
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $service = $_POST['service'];
  $date = $_POST['date'];
  $time = $_POST['time'];

  $sql = "INSERT INTO bookings (name, service, date, time) 
          VALUES ('$name', '$service', '$date', '$time')";

  if ($conn->query($sql) === TRUE) {
    echo "<h2>Booking Successful!</h2>";
    echo "<a href='bookings.php'>View All Bookings</a>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>
