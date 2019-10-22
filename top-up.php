<?php
    error_reporting(0);

    include "logged-in-check.php";
    include "header.php";

    $redirPage = $_REQUEST['redirPage'];
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
                                        <a href='#'>Top Up</a>
                                    </li>
                                </ul>
                            </div>
                            <h1 class='page-title'>Top Up your balance</h1>
                        </div>
                    </div>
                </div>
            </section>

<section class="dashboard-area">
        
        <!-- end /.dashboard_menu_area -->

        <div class="dashboard_contents">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="dashboard_title_area">
                            <div class="dashboard__title">
                                <h3>Buy Credits</h3>
                            </div>
                        </div>
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->

                <form method='POST' action='function/top-up-submit.php<?php if($_REQUEST['redirect'] == 'Yes'){ echo '?redirect=Yes&redirPage='.$redirPage;};?>' name="add_credit_form">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="credit_modules">
                                <div class="modules__title">
                                    <h3>Credit Amount</h3>
                                </div>
                                <div class="modules__content">
                                    <p class="subtitle">Select an amount</p>
                                    <div class="amounts">
                                        <ul>
                                            <li data-price="25000">
                                                <p>25.000</p>
                                            </li>
                                            <li data-price="50000">
                                                <p>50.000</p>
                                            </li>
                                            <li data-price="100000">
                                                <p>100.000</p>
                                            </li>
                                            <li data-price="250000">
                                                <p>250.000</p>
                                            </li>
                                            <li data-price="500000">
                                                <p>500.000</p>
                                            </li>
                                        </ul>
                                        <input type="hidden" class="selected_price">
                                    </div>
                                    <!-- end /.amounts -->
                                    <div class="or"></div>
                                    <p class="subtitle">Enter an amount</p>
                                    <div class="custom_amount">
                                        <div class="input-group">
                                            <span class="input-group-addon">Rp</span>
                                            <input type="text" id="rlicense" class="text_field" name="topUp" value="<?php echo $_POST['topUpBalance'];?>">
                                            <input class= 'btn btn--round btn--md checkout_link' style='padding:10px 0px' type='submit' name='submit' value='Top Up' />
                                        </div>
                                    </div>

                                </div>
                                <!-- end /.modules__content -->
                            </div>
                            <!-- end /.credit_modules -->
                        </div>
                        <!-- end /.col-md-12 -->
                    </div>
                    <!-- end /.row -->

                </form>
                <!-- end /.add_credit_form -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.dashboard_menu_area -->
    </section>
<?php
    include "footer.php"
?>