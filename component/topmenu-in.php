            <div class="top-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-6 v_middle">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="images/logo.png" alt="logo image" class="img-fluid">
                                </a>
                            </div>
                        </div>
    
                        <div class="col-lg-8 offset-lg-1 col-md-9 col-6 v_middle">
                            <div class="author-area">
    
                                <div class="author__notification_area">
                                    <ul>
                                        <li class="has_dropdown">
                                            <div class="icon_wrap">
                                                <span class="lnr lnr-alarm"></span>
                                            </div>
                                        </li>
    
                                        <li class="has_dropdown">
                                            <div class="icon_wrap">
                                                <span class="lnr lnr-envelope"></span>
                                            </div>
                                        </li>

                                        <li class="has_dropdown">
                                            <div class="icon_wrap">
                                                <span class="lnr lnr-cart"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
    
                                <div class="author-author__info inline has_dropdown">
                                    <div class="author__avatar">
                                        <img src="images/usr_avatar.png" alt="user avatar">
    
                                    </div>
                                    <div class="autor__info">
                                        <p class="name">
                                            <?php echo $_SESSION['name'];?>
                                        </p>
                                        <p class="ammount"><?php echo $_SESSION['balance'] ?></p>
                                    </div>
    
                                    <div class="dropdowns dropdown--author">
                                        <ul>
                                            <!-- <li>
                                                <a href="author.html">
                                                    <span class="lnr lnr-user"></span>Profile</a>
                                            </li>
                                            <li>
                                                <a href="dashboard.html">
                                                    <span class="lnr lnr-home"></span> Dashboard</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-setting.html">
                                                    <span class="lnr lnr-cog"></span> Setting</a>
                                            </li>
                                            <li>
                                                <a href="cart.html">
                                                    <span class="lnr lnr-cart"></span>Purchases</a>
                                            </li>
                                            <li>
                                                <a href="favourites.html">
                                                    <span class="lnr lnr-heart"></span> Favourite</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-add-credit.html">
                                                    <span class="lnr lnr-dice"></span>Add Credits</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-statement.html">
                                                    <span class="lnr lnr-chart-bars"></span>Sale Statement</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-upload.html">
                                                    <span class="lnr lnr-upload"></span>Upload Item</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-manage-item.html">
                                                    <span class="lnr lnr-book"></span>Manage Item</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-withdrawal.html">
                                                    <span class="lnr lnr-briefcase"></span>Withdrawals</a>
                                            </li> -->
                                            <li>
                                                <a href="../cart.php">
                                                    <span class="lnr lnr-cart"></span>Cart</a>
                                            </li>
                                            <li>
                                                <a href="../paid.php">
                                                    <span class="lnr lnr-cart"></span>Paid</a>
                                            </li>
                                            <li>
                                                <a href="../top-up.php">
                                                    <span class="lnr lnr-cart"></span>Top Up</a>
                                            </li>
                                            <li>
                                                <a href="../logout.php">
                                                    <span class="lnr lnr-exit"></span>Log Out</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
    
                            <div class="mobile_content ">
                                <span class="lnr lnr-user menu_icon"></span>
    
                                <div class="offcanvas-menu closed">
                                    <span class="lnr lnr-cross close_menu"></span>
                                    <div class="author-author__info">
                                        <div class="author__avatar v_middle">
                                            <img src="images/usr_avatar.png" alt="user avatar">
                                        </div>
                                        <div class="autor__info v_middle">
                                            <p class="name">
                                                Jhon Doe
                                            </p>
                                            <p class="ammount">$20.45</p>
                                        </div>
                                    </div>
    
                                    <div class="author__notification_area">
                                        <ul>
                                            <li>
                                                <a href="notification.html">
                                                    <div class="icon_wrap">
                                                        <span class="lnr lnr-alarm"></span>
                                                        <span class="notification_count noti">25</span>
                                                    </div>
                                                </a>
                                            </li>
    
                                            <li>
                                                <a href="message.html">
                                                    <div class="icon_wrap">
                                                        <span class="lnr lnr-envelope"></span>
                                                        <span class="notification_count msg">6</span>
                                                    </div>
                                                </a>
                                            </li>
    
                                            <li>
                                                <a href="cart.html">
                                                    <div class="icon_wrap">
                                                        <span class="lnr lnr-cart"></span>
                                                        <span class="notification_count purch">2</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
    
                                    <div class="dropdowns dropdown--author">
                                        <ul>
                                            <li>
                                                <a href="author.html">
                                                    <span class="lnr lnr-user"></span>Profile</a>
                                            </li>
                                            <li>
                                                <a href="dashboard.html">
                                                    <span class="lnr lnr-home"></span> Dashboard</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-setting.html">
                                                    <span class="lnr lnr-cog"></span> Setting</a>
                                            </li>
                                            <li>
                                                <a href="cart.html">
                                                    <span class="lnr lnr-cart"></span>Purchases</a>
                                            </li>
                                            <li>
                                                <a href="favourites.html">
                                                    <span class="lnr lnr-heart"></span> Favourite</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-add-credit.html">
                                                    <span class="lnr lnr-dice"></span>Add Credits</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-statement.html">
                                                    <span class="lnr lnr-chart-bars"></span>Sale Statement</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-upload.html">
                                                    <span class="lnr lnr-upload"></span>Upload Item</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-manage-item.html">
                                                    <span class="lnr lnr-book"></span>Manage Item</a>
                                            </li>
                                            <li>
                                                <a href="dashboard-withdrawal.html">
                                                    <span class="lnr lnr-briefcase"></span>Withdrawals</a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="lnr lnr-exit"></span>Logout</a>
                                            </li>
                                        </ul>
                                    </div>
    
                                    <div class="text-center">
                                        <a href="signup.html" class="author-area__seller-btn inline">Become a Seller</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>