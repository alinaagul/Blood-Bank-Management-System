<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Stream - Dashboard</title>

    <link rel="icon" href="./favicon.ico" type="image/x-icon">


    <!-- CSS Styles -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <style>
       
        hr {
            border: none; 
            height: 1px; 
            background-color: #c5c7c9; 
            margin: 0; 
        }

        .header {
            background-color: #f4f4f4;
            padding: 20px 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 70px; 
        }

        .header .logo {
            font-size: 40px;
            font-weight: bold;
            color: #6c63ff;
            text-decoration: none;
        }

        .header .header-right {
            display: flex;
            align-items: center;
        }

        .header .header-right a {
            color: #333;
            margin-left: 20px;
            text-decoration: none;
        }

        .header .header-right a.act {
            font-weight: bold;
            color: #6c63ff; /* Highlight color */
        }

        .header .header-right a:hover {
            color: #6c63ff;
        }

        .header .btn {
            background-color: #6c63ff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }

        .header .btn:hover {
            background-color: #524dff;
        }
    </style>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700;800&family=Roboto:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body>

    <div class="header">
        
        <a href="#" class="logo">Red Stream</a>    
       
    </a>

        <div class="header-right">
            <a href="home.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'home.php' ? 'act' : ''; ?>">Home</a>
            <a href="about_us.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'about_us.php' ? 'act' : ''; ?>">About Us</a>
            <a href="why_donate_blood.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'why_donate_blood.php' ? 'act' : ''; ?>">Why Donate Blood</a>
            <a href="donate_blood.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'donate_blood.php' ? 'act' : ''; ?>">Become A Donor</a>
            <a href="need_blood.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'need_blood.php' ? 'act' : ''; ?>">Need Blood</a>
            <a href="contact_us.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'contact_us.php' ? 'act' : ''; ?>">Contact</a>
            <a href="register.php" class="btn">Login / Register</a>
        </div>
    </div>

    <hr>

    <!-- SCRIPTS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.0.0/ionicons.min.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>
