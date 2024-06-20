<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('head.php'); ?>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            color: #343a40;
            margin: 0;
            padding: 0;
        }

        .header {
          
            padding: 20px 0;
            text-align: center;
        }

        .header h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .header p {
            font-size: 18px;
            margin: 0;
        }

        .content {
            background-color: #ffffff;
            padding: 30px;
            margin-top: 30px;
            border-radius: 8px;
            box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.1);
        }

        .content h2 {
            font-size: 28px;
            margin-bottom: 20px;
            color: #6c63ff;
        }

        .content p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            background-color: #6c63ff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease-in-out;
        }

        .btn:hover {
            background-color: #524dff;
        }

        .footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        .footer p {
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="container">
            <h1>Welcome to Red Stream</h1>
            <p>Blood Bank & Donation Management System</p>
        </div>
    </div>

    <div class="container content">
        <div class="row">
            <div class="col-lg-8">
                <h2>About Us</h2>
                <p>
                    Red Stream is dedicated to saving lives by connecting blood donors with those in need of blood
                    transfusions. We understand the importance of timely access to safe blood, and we strive to make
                    the donation process as easy and convenient as possible.
                </p>
                <p>
                    Whether you're looking to become a blood donor or in need of blood yourself, Red Stream is here to
                    assist you every step of the way. Our platform connects donors with recipients, ensuring that blood
                    reaches those who need it most.
                </p>
                <p>
                    Join us in our mission to make a difference in the world by saving lives, one donation at a time.
                    Register as a donor today or request blood if you or a loved one are in need.
                </p>
            </div>
            <div class="col-lg-4">
                <h2>Latest News</h2>
                <ul>
                    <li>Stay updated with the latest news and events related to blood donation.</li>
                    <li>Learn about upcoming blood drives and initiatives in your area.</li>
                    <li>Discover inspiring stories of donors and recipients making a difference.</li>
                </ul>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-lg-6">
                <h2>Become a Blood Donor</h2>
                <p>
                    Join our community of blood donors and help save lives. Donating blood is a simple yet impactful way to
                    make a difference in the world. By donating blood, you can contribute to medical treatments, emergency
                    surgeries, and life-saving procedures.
                </p>
                <p>
                    Register as a blood donor today and be a hero to someone in need. Your donation can make a world of
                    difference to those facing medical emergencies.
                </p>
                <a href="donate_blood.php" class="btn">Register as Donor</a>
            </div>
            <div class="col-lg-6">
                <h2>Need Blood?</h2>
                <p>
                    If you or a loved one are in need of blood, we're here to help. Red Stream connects individuals and
                    hospitals with blood donors, ensuring timely access to safe blood supplies.
                </p>
                <p>
                    Request blood from our network of donors and receive the support you need during medical emergencies
                    and treatments. Your health and well-being are our top priorities.
                </p>
                <a href="need_blood.php" class="btn btn-danger">Request Blood</a>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>
    
</body>

</html>
