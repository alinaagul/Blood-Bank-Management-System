<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize form inputs
    $name = isset($_POST["full_name"]) ? htmlspecialchars($_POST["full_name"]) : "";
    $email = isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : "";
    $phone = isset($_POST["mobile_number"]) ? htmlspecialchars($_POST["mobile_number"]) : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : ""; // No need to htmlspecialchars for the password
    $bloodgroup = isset($_POST["blood_group"]) ? htmlspecialchars($_POST["blood_group"]) : "";
    $gender = isset($_POST["gender"]) ? htmlspecialchars($_POST["gender"]) : "";
    $birthdate = isset($_POST["birth_date"]) ? htmlspecialchars($_POST["birth_date"]) : "";
    $weight = isset($_POST["weight"]) ? htmlspecialchars($_POST["weight"]) : "";
    $anydisease = isset($_POST["anydisease"]) ? htmlspecialchars($_POST["anydisease"]) : "";
    

    $servername = "localhost";
    $username = "root";
    $dbpassword = "";
    $dbname = "blood_donation";
    $conn = new mysqli($servername, $username, $dbpassword, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT); // Hash the password
    $stmt = $conn->prepare("INSERT INTO registered_users (name, email, phone, password, bloodgroup, gender, birthdate, `weight(kg)`, anydisease) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    if (!$stmt) {
        die("Error: " . $conn->error);
    }
    $stmt->bind_param("sssssssss", $name, $email, $phone, $hashedPassword, $bloodgroup, $gender, $birthdate, $weight, $anydisease); // Added semicolon here
    if ($stmt->execute()) {
        echo '<script>alert("Registration successful!");</script>';
    } else {
        echo '<script>alert("Error: Unable to register. Please try again later.");</script>';
    }
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('head.php'); ?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Red Stream - connect the donors</title>

  <!-- favicon-->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!--css-->
  <link rel="stylesheet" href="./assets/css/style.css">
  
  <!-- google font link-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700;800&family=Roboto:wght@400;500;600&display=swap" rel="stylesheet">

  <style>
    /* Form Styles */
    .form-title {
        color: var(--oxford-blue-1);
        font-family: var(--ff-poppins);
        font-size: 3.4rem;
        font-weight: var(--fw-800);
        text-align: center;
        margin-bottom: 20px;
    }

    .form-section {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .form-field {
      flex: 0 0 48%;
      margin-bottom: 20px;
    }

    .form-field label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-field input,
    .form-field select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .form-field input[type="submit"] {
      background-color: #216aca;
      color: #fff;
      cursor: pointer;
      transition: background-color 0.3s ease-in-out;
    }

    .form-field input[type="submit"]:hover {
      background-color: #060952;
    }
  </style>
 
</head>



  <main>
    <article>
        <section class="section hero" id="home" style="background-image: url('./assets/images/hero-bg.png'); margin: 0%;" aria-label="hero">
            <!-- Login and Registration Form -->
            <div class="container">
              <div class="form-container">
                <div class="form-title">Register</div>
                <form action="#" method="POST">
                  <!-- Login Information -->
                  <div class="form-section">
                    <div class="form-field">
                      <label for="full-name">FULL NAME</label>
                      <input type="text" id="full-name" name="full_name" required>
                    </div>
                    <div class="form-field">
                      <label for="mobile">MOBILE NUMBER</label>
                      <input type="text" id="mobile" name="mobile_number" required>
                    </div>
                    <div class="form-field">
                      <label for="email">EMAIL</label>
                      <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-field">
                      <label for="password">PASSWORD</label>
                      <input type="password" id="password" name="password" required>
                    </div>
                  </div>
                  <!-- Donor Information -->
                  <div class="form-section">
                    <div class="form-field">
                      <label for="blood-group">BLOOD GROUP</label>
                      <select id="blood-group" name="blood_group" required>
                        <option value="" disabled selected>Select Blood Group</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                      </select>
                    </div>
                    <div class="form-field">
                      <label for="birth-date">BIRTH DATE</label>
                      <input type="date" id="birth-date" name="birth_date" required>
                    </div>
                    <div class="form-field">
                      <label for="gender">GENDER</label>
                      <select id="gender" name="gender" required>
                        <option value="" disabled selected>Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                      </select>
                    </div>
                    <div class="form-field">
                      <label for="weight">WEIGHT</label>
                      <input type="text" id="weight" name="weight" required>
                    </div>
                  </div>
                  <!-- Contact Information -->
                  <div class="form-section">
                    <div class="form-field">
                      <label for="anydisease">STATE</label>
                      <input type="text" id="anydisease" name="Any Disease" required>
                    </div>
                   
                  <button type="submit" class="btn">Register</button>
                </form>
                <div class="form-title">Already Registered? <u><a href="login.php" style="display: inline; color: #216aca;" onmouseover="this.style.color='#03d9ff'" onmouseout="this.style.color='#216aca'">Login Here</a></u></div>
              </div>
              <figure class="hero-banner">
                <img src="./assets/images/bg.svg" width="587" height="839" alt="hero banner" class="w-100">
               
              </figure>
            </div>
          </section>
  
  
  <!--BACK TO TOP-->
  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="caret-up" aria-hidden="true"></ion-icon>
  </a>

  <!--custom js link-->
  <script src="./assets/js/script.js" defer></script>
  <!--ionicon link-->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <?php include('footer.php'); ?>
</body>
</html>