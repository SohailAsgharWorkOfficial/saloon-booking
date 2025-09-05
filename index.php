<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Salon Booking</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Salon Appointment Booking</h1>
    <form action="process.php" method="POST" class="booking-form">
      <label>Your Name</label>
      <input type="text" name="name" required>

      <label>Service</label>
      <select name="service" required>
        <option value="Haircut">Haircut</option>
        <option value="Facial">Facial</option>
        <option value="Manicure">Manicure</option>
      </select>

      <label>Date</label>
      <input type="date" name="date" required>

      <label>Time</label>
      <input type="time" name="time" required>

      <button type="submit">Book Now</button>
    </form>
  </div>
</body>
</html>


