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
                                <a href='#'>Account</a>
                            </li>
                            <li class='active'>
                                <a href='#'>Sign In</a>
                            </li>
                        </ul>
                    </div>
                    <h1 class='page-title'>Account Sign In</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="login_area section--padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <form method="post" action="function/login-check.php<?php if($_REQUEST['redirect'] == 'Yes'){echo '?redirect=Yes&redirPage='.$_REQUEST['redirPage'];}?>">
                        <div class="cardify login">
                            <div class="login--header">
                                <h3>Welcome Back</h3>
                                <?php
                                    if ($_REQUEST['login'] == "mustLogin"){
                                        echo "<p>Anda harus login terlebih dahulu<p>";
                                    } elseif ($_REQUEST['login'] == "Failed"){
                                        echo "<p>Username atau password anda salah</p>";
                                    } else{echo "<p>You can sign in with your username</p>";}
                                ?>
                            </div>

                            <div class="login--form">
                                <div class="form-group">
                                    <label for="user_name">Username</label>
                                    <input name="username" type="text" class="text_field" placeholder="Enter your username...">
                                </div>

                                <div class="form-group">
                                    <label for="pass">Password</label>
                                    <input name="password" type="password" class="text_field" placeholder="Enter your password...">
                                </div>

                                <div class="form-group">
                                    <div class="custom_checkbox">
                                        <input type="checkbox" id="ch2">
                                        <label for="ch2">
                                            <span class="shadow_checkbox"></span>
                                            <span class="label_text">Remember me</span>
                                        </label>
                                    </div>
                                </div>
                                
                                <input class="btn btn--md btn--round" type="submit" value="Log In"/>

                                <div class="login_assist">
                                    <p class="recover">Lost your
                                        <a href="pass-recovery.html">username</a> or
                                        <a href="pass-recovery.html">password</a>?</p>
                                    <p class="signup">Don't have an
                                        <a href="../register.php">account</a>?</p>
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