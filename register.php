<?php
    error_reporting(0);

    include 'function/logged-in-check.php';
    include "header.php";
?>
<section class='breadcrumb-area'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-md-12'>
                            <div class='breadcrumb'>
                                <ul>
                                    <li>
                                        <a href='#'>Profile</a>
                                    </li>
                                    <li class='active'>
                                        <a href='#'>Sign Up</a>
                                    </li>
                                </ul>
                            </div>
                            <h1 class='page-title'>Account Register</h1>
                        </div>
                    </div>
                </div>
            </section>

    <section class="signup_area section--padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <form action="function/register-check.php" method="POST">
                        <div class="cardify signup_form">
                            <div class="login--header">
                                <h3>Create Your Account</h3>
                                <p>Be our family
                                </p>
                            </div>
                            <!-- end .login_header -->

                            <div class="login--form">

                                <div class="form-group">
                                    <label for="urname">Your Name</label>
                                    <input id="urname" name="name" type="text" class="text_field" placeholder="Enter your Name">
                                </div>

                                <div class="form-group">
                                    <label for="email_ad">Email Address</label>
                                    <input id="email_ad" name="email" type="text" class="text_field" placeholder="Enter your email address">
                                </div>

                                <div class="form-group">
                                    <label for="user_name">Username</label>
                                    <input id="user_name" name="username" type="text" class="text_field" placeholder="Enter your username...">
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input id="password" name="password" type="password" class="text_field" placeholder="Enter your password...">
                                </div>

                                <button class="btn btn--md btn--round register_btn" type="submit">Register</button>

                                <div class="login_assist">
                                    <p>Already have an account?
                                        <a href="../login.php">Login</a>
                                    </p>
                                </div>
                            </div>
                            <!-- end .login--form -->
                        </div>
                        <!-- end .cardify -->
                    </form>
                </div>
                <!-- end .col-md-6 -->
            </div>
            <!-- end .row -->
        </div>
        <!-- end .container -->
    </section>
<?php
    include "footer.php";
?>