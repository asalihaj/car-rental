<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include("../styles/styles.php");
    ?>
    <link rel="stylesheet" href="registerstyle.css?">
    <title>Register</title>
</head>

<body>
    <header>
        <?php
        include("../header/header.php");
        ?>
    </header>
    <main>
        <div class="panel hidden">
            <form class="register-form" action="#">
                <div class="user-data">
                    <label class="register-label">Sign Up</label>
                    <div class="data-input-container">
                        <div class="user-input">
                            <img id="user-logo" src="../icons/registration/red_user.png" alt="User Icon">
                            <input class="register-component input-area" type="text" name="username" id="username" placeholder="Username" required>
                        </div>
                        <span class="valid-info">Test Test Test</span>
                    </div>
                    <div class="data-input-container">
                        <div class="user-input">
                            <img id="email-logo" src="../icons/registration/red_email.png" alt="Mail Icon">
                            <input class="register-component input-area" type="text" name="email" id="email" placeholder="Email" required>
                        </div>
                        <span class="valid-info">Test Test Test</span>
                    </div>
                    <div class="data-input-container">
                        <div class="user-input">
                            <img id="pw-logo" src="../icons/registration/red_lock.png" alt="Lock Icon">
                            <input class="register-component input-area" type="password" name="password" id="password" placeholder="Password" required>
                        </div>
                        <span class="valid-info">Test Test Test</span>
                    </div>
                    <div class="data-input-container">
                        <div class="user-input">
                            <img id="pw-confirm-logo" src="../icons/registration/red_lock.png" alt="Opened Lock">
                            <input class="register-component input-area" type="password" name="password-confirm" id="confirm-password" placeholder="Confirm Password" required>
                        </div>
                        <span class="valid-info">Test Test Test</span>
                    </div>
                </div>
                <ul id="password-strength" hidden>
                    <p>Password is case sensitive and should have at least:</p>
                    <li id="pw-length">8 charactes</li>
                    <li id="pw-upper">1 upper case letter</li>
                    <li id="pw-lower">1 lower case letter</li>
                    <li id="pw-number">1 number</li>
                    <li id="pw-special">1 special character</li>
                </ul>
                <div class=" register-event">
                    <div class="terms-and-services">
                        <input type="checkbox" name="tos-checkbox" id="tos-checkbox">
                        <label for="tos-checkbox">I agree to the <a href="../terms_of_use/terms_of_use.php">Terms
                                and
                                Conditions</a> and the <a href="../privacy_policy/privacy_policy.php">Privacy
                                Policy</a></label>
                    </div>
                    <input class="register-component" id="register-button" type="button" value="Register" disabled>
                </div>
                <div class="register-links">
                    <a href="../Login/login.php">Login</a>
                </div>

            </form>
        </div>
        <div class="panel">
            <form class="register-form" action="">
                <div class="user-data">
                    <span class="back">Go back</span>
                    <label class="register-label" for="first-name">Personal Info</label>
                    <div class="data-input-container">
                        <div class="user-input">
                            <input class="register-component input-area" type="text" name="first-name" id="first-name" placeholder="First Name" required>
                        </div>
                        <span class="valid-info">Test Test Test</span>
                    </div>
                    <div class="data-input-container">
                        <div class="user-input">
                            <input class="register-component input-area" type="text" name="last-name" id="last-name" placeholder="Last Name" required>
                        </div>
                        <span class="valid-info">Test Test Test</span>
                    </div>
                    <div class="data-input-container">
                        <div class="user-input">
                            <input class="register-component input-area" type="text" name="phone-number" id="phone-number" placeholder="Phone Number" required>
                        </div>
                        <span class="valid-info">Test Test Test</span>
                    </div>
                    <div class="data-input-container pick-option">
                        <div class="user-input bday-container">
                            <label>Birthday</label>
                            <div class="bday-date">
                                <select class="bday birthday-day" name="birthday-day">
                                    <option value="-1">Day</option>
                                    <?php
                                    $days = 31;
                                    for ($day = 1; $day <= $days; $day++) {
                                        echo '<option value="' . $day . '">' . $day . '</option>';
                                    }
                                    ?>
                                </select>
                                <select class="bday birthday-month" name="birthday-month">
                                    <option value="-1">Month</option>
                                    <?php
                                    $months = array(
                                        'January', 'February', 'March', 'April',
                                        'May', 'June', 'July', 'August', 'September',
                                        'October', 'November', 'December'
                                    );
                                    $length = count($months);
                                    for ($i = 0; $i < $length; $i++) {
                                        echo '<option value="' . ($i + 1) . '">' . $months[$i] . '</option>';
                                    }
                                    ?>
                                </select>
                                <select class="bday birthday-year" name="birthday-year">
                                    <option value="-1">Year</option>
                                    <?php
                                    $startYear = 1905;
                                    $endYear = 2021;

                                    while ($endYear >= $startYear) {
                                        echo '<option value="' . ($endYear) . '">' . $endYear . '</option>';
                                        $endYear--;
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="data-input-container pick-option">
                        <div class="user-input gender-pick">
                            <label>Gender</label>
                            <div class="gender-info">
                                <div class="gender-container">
                                    <label class="gender" for="male">Male</label>
                                    <input type="radio" name="gender" id="male" required>
                                </div>
                                <div class="gender-container">
                                    <label class="gender" for="female">Female</label>
                                    <input type="radio" name="gender" id="female" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="data-input-container location-container">
                        <div class="country-container">
                            <label for="country">Country</label>
                            <select class="country" name="country" id="country">
                                <option value="-1">Choose</option>
                                <?php
                                include('countries.php');

                                ?>
                            </select>

                        </div>
                        <div class="country-container">
                            <label for="city">City</label>
                            <input class="input-area city" type="text" id="city" placeholder="City">
                        </div>
                    </div>
                    <div class=" register-event">
                        <input class="register-component" id="continue-button" type="button" value="Continue">
                    </div>
                    <div class="register-links">
                        <a href="../Login/login.php">Login</a>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <footer>
        <?php
        include("../footer/footer.php");
        ?>
    </footer>
    <script src="usernamevalidator.js"></script>
    <script src="emailvalidator.js"></script>
    <script src="passwordvalidator.js"></script>
    <script src="registervalidator.js?dd"></script>
    <script src="registerfunction.js"></script>
</body>

</html>