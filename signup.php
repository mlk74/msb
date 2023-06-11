<?php

    include("includes/controllerUserData.php");
    if(isset($_SESSION["User_ID"])){
        echo '<script>location.href="home.php";</script>';
    }

?>
<html>

<head>
    <title>Sign up</title>
    <!-- Mobile Specific Metas
  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Parallax HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Meghna Template v1.0">

    <!-- theme meta -->
    <meta name="theme-name" content="meghna" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

    <!-- CSS
		================================================== -->
    <!-- Fontawesome Icon font -->
    <link rel="stylesheet" href="New/theme/plugins/themefisher-font/style.css">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="New/theme/plugins/bootstrap/bootstrap.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="New/theme/plugins/animate-css/animate.css">
    <!-- Magnific popup css -->
    <link rel="stylesheet" href="New/theme/plugins/magnific-popup/dist/magnific-popup.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="New/theme/plugins/slick-carousel/slick.css">
    <link rel="stylesheet" href="New/theme/plugins/slick-carousel/slick-theme.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="New/theme/css/style.css">
    <style>
    .label-style {
        font-weight: 500;
    }

    input[type=text] {
        padding: 12px 20px;
        border: 3px solid #ccc;
        -webkit-transition: 0.5s;
        transition: 0.5s;
    }

    input {
        border: 1px solid #343a40 !important;
    }

    input[type=text]:focus {

        border: 3px solid red;
    }

    .form-control:focus-visible {
        background-color: #424040;
        color: white;

    }
    </style>
</head>

<body>

    <?php
        

        if (isset($_REQUEST["usersignup"])) {
            $username = $_REQUEST["username"];
            $email = $_REQUEST["email"];
            $password = $_REQUEST["password"];
            $city = $_REQUEST["city"];
            $country = $_REQUEST["country"];
            $dateob = $_REQUEST["dateob"];
            $gender = $_REQUEST["gender"];
    
            $sql = "SELECT * FROM users WHERE username= '$username'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                echo '<script>location.href="index.php?signup=2";</script>';
            } else {
                $query = "INSERT INTO `users`(`username`, `email`, `password`, `city`, `country`, `dateob`, `gender`) VALUES ('$username','$email','$password','$city','$country','$dateob','$gender')";
                if (mysqli_query($conn, $query)) {
                    echo '<script>location.href="index.php?signup=1";</script>';
                }
            }
        }
    ?>

    <div class="container-fluid h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col col-sm-6 col-md-6 col-lg-4 col-xl-3">
                <h3 align="center">User Sign Up</h3>
                <br />
                <form name="form" method="post">
                    <div class="form-group">
                        <label class="label-style">Username*</label>
                        <input class="form-control form-control-lg" name="username" placeholder="Username" type="text"
                            required>
                    </div>
                    <div class="form-group">
                        <label class="label-style">Email Address*</label>
                        <input class="form-control form-control-lg" name="email" placeholder="name@example.com"
                            type="email" required>
                    </div>
                    <div class="form-group">
                        <label class="label-style">Password*</label>
                        <input class="form-control form-control-lg" name="password" placeholder="Password"
                            type="password" minlength="6" required>
                            <div class="form-group">
                        <label class="label-style">Confirm Password*</label>
                        <input class="form-control form-control-lg" name="cpassword" placeholder="Confirm Password" type="password" minlength="6" required>
                    </div>
                    </div>

                    <div class="form-group">
                        <label class="label-style">Your Country*</label>
                        <input list="country" type="text" name="country" placeholder="Your Country"
                            class="form-control form-control-lg" required />
                        <datalist id="country">
                            <option value="Afghanistan" />
                            <option value="Albania" />
                            <option value="Algeria" />
                            <option value="American Samoa" />
                            <option value="Andorra" />
                            <option value="Angola" />
                            <option value="Anguilla" />
                            <option value="Antarctica" />
                            <option value="Antigua and Barbuda" />
                            <option value="Argentina" />
                            <option value="Armenia" />
                            <option value="Aruba" />
                            <option value="Australia" />
                            <option value="Austria" />
                            <option value="Azerbaijan" />
                            <option value="Bahamas" />
                            <option value="Bahrain" />
                            <option value="Bangladesh" />
                            <option value="Barbados" />
                            <option value="Belarus" />
                            <option value="Belgium" />
                            <option value="Belize" />
                            <option value="Benin" />
                            <option value="Bermuda" />
                            <option value="Bhutan" />
                            <option value="Bolivia" />
                            <option value="Bosnia and Herzegovina" />
                            <option value="Botswana" />
                            <option value="Bouvet Island" />
                            <option value="Brazil" />
                            <option value="British Indian Ocean Territory" />
                            <option value="Brunei Darussalam" />
                            <option value="Bulgaria" />
                            <option value="Burkina Faso" />
                            <option value="Burundi" />
                            <option value="Cambodia" />
                            <option value="Cameroon" />
                            <option value="Canada" />
                            <option value="Cape Verde" />
                            <option value="Cayman Islands" />
                            <option value="Central African Republic" />
                            <option value="Chad" />
                            <option value="Chile" />
                            <option value="China" />
                            <option value="Christmas Island" />
                            <option value="Cocos (Keeling) Islands" />
                            <option value="Colombia" />
                            <option value="Comoros" />
                            <option value="Congo" />
                            <option value="Congo, The Democratic Republic of The" />
                            <option value="Cook Islands" />
                            <option value="Costa Rica" />
                            <option value="Cote D'ivoire" />
                            <option value="Croatia" />
                            <option value="Cuba" />
                            <option value="Cyprus" />
                            <option value="Czech Republic" />
                            <option value="Denmark" />
                            <option value="Djibouti" />
                            <option value="Dominica" />
                            <option value="Dominican Republic" />
                            <option value="Ecuador" />
                            <option value="Egypt" />
                            <option value="El Salvador" />
                            <option value="Equatorial Guinea" />
                            <option value="Eritrea" />
                            <option value="Estonia" />
                            <option value="Ethiopia" />
                            <option value="Falkland Islands (Malvinas)" />
                            <option value="Faroe Islands" />
                            <option value="Fiji" />
                            <option value="Finland" />
                            <option value="France" />
                            <option value="French Guiana" />
                            <option value="French Polynesia" />
                            <option value="French Southern Territories" />
                            <option value="Gabon" />
                            <option value="Gambia" />
                            <option value="Georgia" />
                            <option value="Germany" />
                            <option value="Ghana" />
                            <option value="Gibraltar" />
                            <option value="Greece" />
                            <option value="Greenland" />
                            <option value="Grenada" />
                            <option value="Guadeloupe" />
                            <option value="Guam" />
                            <option value="Guatemala" />
                            <option value="Guinea" />
                            <option value="Guinea-bissau" />
                            <option value="Guyana" />
                            <option value="Haiti" />
                            <option value="Heard Island and Mcdonald Islands" />
                            <option value="Holy See (Vatican City State)" />
                            <option value="Honduras" />
                            <option value="Hong Kong" />
                            <option value="Hungary" />
                            <option value="Iceland" />
                            <option value="India" />
                            <option value="Indonesia" />
                            <option value="Iran, Islamic Republic of" />
                            <option value="Iraq" />
                            <option value="Ireland" />
                            <option value="Israel" />
                            <option value="Italy" />
                            <option value="Jamaica" />
                            <option value="Japan" />
                            <option value="Jordan" />
                            <option value="Kazakhstan" />
                            <option value="Kenya" />
                            <option value="Kiribati" />
                            <option value="Korea, Democratic People's Republic of" />
                            <option value="Korea, Republic of" />
                            <option value="Kuwait" />
                            <option value="Kyrgyzstan" />
                            <option value="Lao People's Democratic Republic" />
                            <option value="Latvia" />
                            <option value="Lebanon" />
                            <option value="Lesotho" />
                            <option value="Liberia" />
                            <option value="Libyan Arab Jamahiriya" />
                            <option value="Liechtenstein" />
                            <option value="Lithuania" />
                            <option value="Luxembourg" />
                            <option value="Macao" />
                            <option value="Macedonia, The Former Yugoslav Republic of" />
                            <option value="Madagascar" />
                            <option value="Malawi" />
                            <option value="Malaysia" />
                            <option value="Maldives" />
                            <option value="Mali" />
                            <option value="Malta" />
                            <option value="Marshall Islands" />
                            <option value="Martinique" />
                            <option value="Mauritania" />
                            <option value="Mauritius" />
                            <option value="Mayotte" />
                            <option value="Mexico" />
                            <option value="Micronesia, Federated States of" />
                            <option value="Moldova, Republic of" />
                            <option value="Monaco" />
                            <option value="Mongolia" />
                            <option value="Montserrat" />
                            <option value="Morocco" />
                            <option value="Mozambique" />
                            <option value="Myanmar" />
                            <option value="Namibia" />
                            <option value="Nauru" />
                            <option value="Nepal" />
                            <option value="Netherlands" />
                            <option value="Netherlands Antilles" />
                            <option value="New Caledonia" />
                            <option value="New Zealand" />
                            <option value="Nicaragua" />
                            <option value="Niger" />
                            <option value="Nigeria" />
                            <option value="Niue" />
                            <option value="Norfolk Island" />
                            <option value="Northern Mariana Islands" />
                            <option value="Norway" />
                            <option value="Oman" />
                            <option value="Pakistan" />
                            <option value="Palau" />
                            <option value="Palestinian Territory, Occupied" />
                            <option value="Panama" />
                            <option value="Papua New Guinea" />
                            <option value="Paraguay" />
                            <option value="Peru" />
                            <option value="Philippines" />
                            <option value="Pitcairn" />
                            <option value="Poland" />
                            <option value="Portugal" />
                            <option value="Puerto Rico" />
                            <option value="Qatar" />
                            <option value="Reunion" />
                            <option value="Romania" />
                            <option value="Russian Federation" />
                            <option value="Rwanda" />
                            <option value="Saint Helena" />
                            <option value="Saint Kitts and Nevis" />
                            <option value="Saint Lucia" />
                            <option value="Saint Pierre and Miquelon" />
                            <option value="Saint Vincent and The Grenadines" />
                            <option value="Samoa" />
                            <option value="San Marino" />
                            <option value="Sao Tome and Principe" />
                            <option value="Saudi Arabia" />
                            <option value="Senegal" />
                            <option value="Serbia and Montenegro" />
                            <option value="Seychelles" />
                            <option value="Sierra Leone" />
                            <option value="Singapore" />
                            <option value="Slovakia" />
                            <option value="Slovenia" />
                            <option value="Solomon Islands" />
                            <option value="Somalia" />
                            <option value="South Africa" />
                            <option value="South Georgia and The South Sandwich Islands" />
                            <option value="Spain" />
                            <option value="Sri Lanka" />
                            <option value="Sudan" />
                            <option value="Suriname" />
                            <option value="Svalbard and Jan Mayen" />
                            <option value="Swaziland" />
                            <option value="Sweden" />
                            <option value="Switzerland" />
                            <option value="Syrian Arab Republic" />
                            <option value="Taiwan, Province of China" />
                            <option value="Tajikistan" />
                            <option value="Tanzania, United Republic of" />
                            <option value="Thailand" />
                            <option value="Timor-leste" />
                            <option value="Togo" />
                            <option value="Tokelau" />
                            <option value="Tonga" />
                            <option value="Trinidad and Tobago" />
                            <option value="Tunisia" />
                            <option value="Turkey" />
                            <option value="Turkmenistan" />
                            <option value="Turks and Caicos Islands" />
                            <option value="Tuvalu" />
                            <option value="Uganda" />
                            <option value="Ukraine" />
                            <option value="United Arab Emirates" />
                            <option value="United Kingdom" />
                            <option value="United States" />
                            <option value="United States Minor Outlying Islands" />
                            <option value="Uruguay" />
                            <option value="Uzbekistan" />
                            <option value="Vanuatu" />
                            <option value="Venezuela" />
                            <option value="Viet Nam" />
                            <option value="Virgin Islands, British" />
                            <option value="Virgin Islands, U.S" />
                            <option value="Wallis and Futuna" />
                            <option value="Western Sahara" />
                            <option value="Yemen" />
                            <option value="Zambia" />
                            <option value="Zimbabwe" />
                        </datalist>
                    </div>
                    <div class="form-group">
                        <label class="label-style">Your City*</label>
                        <input class="form-control form-control-lg" name="city" placeholder="Your City" type="text"
                            required>
                    </div>
                    <div class="form-group">
                        <label class="label-style">Date of Birth*</label>
                        <input class="form-control form-control-lg" name="dateob" placeholder="User email" type="date"
                            required>
                    </div>
                    <div class="form-group" style="padding: 0px; margin: 0px;">
                        <label class="label-style" required>Gender*</label>
                    </div>
                    <div class="form-group">
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="Male" name="gender" required>Male
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" value="Female" name="gender"
                                    required>Female
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="signup" class="btn btn-success btn-lg btn-block">Sign
                            Up</button>
                    </div>
                </form>
                <p align="center">Already have an account? <a href="index.php">Sign In</a></p>
                <p align="center">All rights reserved © <?=date("Y");?></p>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>