<head>
    <link rel="stylesheet" href="dist/css1/style1.css">
    <style>
        .map {
            margin: 40px;
            background: linear-gradient(180deg, rgba(248, 248, 248, 0) 50%, #F8F8F888 100%);
            border: 1px solid #F7F7F8;
            filter: drop-shadow(0px 0.5px 0.5px #EFEFEF) drop-shadow(0px 1px 0.5px rgba(239, 239, 239, 0.5));
            border-radius: 11px;
        }

        .custom-select {
            border: none;
            height: 33px;
        }

        .input-group1 {
            display: flex;
            width: 100%;
        }

        .col-md-7 {
            margin-left: 22%;
        }

        .form-group .rd {
            border-radius: 5px;
        }
    </style>
</head>

<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue layout-top-nav">
    <div class="">

        <?php include 'includes/navbar.php'; ?>
        <?php
        if (isset($_SESSION['error'])) {
            echo "
                <div class='alert alert-danger'>
                    " . $_SESSION['error'] . "
                </div>
            ";
            unset($_SESSION['error']);
        }
        ?>
        <!-- Page Title -->
        <section class="page-title" style="background-image: url(Images1/background/breadcrumb-1.jpg);">
            <div class="auto-container">
                <div class="content-box">
                    <div class="title">
                        <h1>Get in touch</h1>
                    </div>
                    <ul class="bread-crumb ">
                        <li><a href="index.php">Home</a></li>
                        <i class='fas fa-angle-right'></i>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Page Title -->

        <!-- contact form -->
        <section>
            <div class="contact-us">
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <form action="enquiry.php" method="post" onsubmit="return validatePhoneNumber()">
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" class="form-control rd" id="name" name="name" placeholder="Enter your name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control rd" id="email" name="email" placeholder="Enter your email" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <div class="input-group1">
                                    <div class="input-group-prepend">
                                        <select class="custom-select rd" id="countryCode" name="countryCode">
                                            <option>+1</option>
                                            <option selected>+91</option>
                                            <option>+44</option>
                                        </select>
                                    </div>
                                    <input type="number" class="form-control rd" id="phone" name="number" placeholder="Enter your number" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control rd" id="subject" name="subject" placeholder="Enter your subject">
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control rd" id="message" name="message" rows="4"></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact form -->

        <section>
            <div class="">
                <iframe class="map" alt="map" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7002.981641479025!2d77.16675652274176!3d28.645018945374456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s9%2F2%20Ground%20Floor%2C%20G-3%20Back%20Side%20Portion%2C%20East%20Patel%20Nagar%2C%20New%20Delhi-%20110008!5e0!3m2!1sen!2sin!4v1655647257720!5m2!1sen!2sin" width="95%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </section>

        <?php include 'includes/footer.php'; ?>
    </div>

    <?php include 'includes/scripts.php'; ?>
</body>

</html>