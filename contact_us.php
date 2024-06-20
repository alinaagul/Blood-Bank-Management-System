<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Contact Us">
  <meta name="author" content="Your Name">
  <title>Contact Us</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<?php $active = 'contact'; include 'head.php'; ?>

<?php
if(isset($_POST["send"])){
  $name = $_POST['fullname'];
  $number = $_POST['contactno'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $conn = mysqli_connect("localhost", "root", "", "blood_donation") or die("Connection error");
  $sql = "INSERT INTO contact_query (query_name, query_mail, query_number, query_message) VALUES ('{$name}', '{$number}', '{$email}', '{$message}')";
  $result = mysqli_query($conn, $sql) or die("Query unsuccessful.");
  echo '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button><strong>Query Sent!</strong> We will contact you shortly.</div>';
}
?>

<div class="container mt-5">
  <div class="row">
    <div class="col-lg-8 mb-4">
      <h2>Send us a Message</h2>
      <form name="sentMessage" method="post">
        <div class="form-group">
          <label for="fullname">Full Name:</label>
          <input type="text" class="form-control" id="fullname" name="fullname" required>
        </div>
        <div class="form-group">
          <label for="contactno">Phone Number:</label>
          <input type="tel" class="form-control" id="contactno" name="contactno" required>
        </div>
        <div class="form-group">
          <label for="email">Email Address:</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="message">Message:</label>
          <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" name="send" class="btn btn-primary">Send Message</button>
      </form>
    </div>
    <div class="col-lg-4 mb-4">
      <h2>Contact Details</h2>
      <?php
        include 'conn.php';
        $sql = "SELECT * FROM contact_info";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
      ?>
        <p><strong>Address:</strong><br><?php echo $row['contact_address']; ?></p>
        <p><strong>Contact Number:</strong><br><?php echo $row['contact_phone']; ?></p>
        <p><strong>Email:</strong><br><a href="mailto:<?php echo $row['contact_mail']; ?>"><?php echo $row['contact_mail']; ?></a></p>
      <?php
          }
        }
      ?>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>

</body>
</html>
