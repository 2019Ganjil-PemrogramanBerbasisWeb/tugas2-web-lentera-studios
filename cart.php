<?php
    error_reporting(0);

    include "logged-in-check.php";
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
                                        <a href='#'>Cart</a>
                                    </li>
                                </ul>
                            </div>
                            <h1 class='page-title'>Waiting for payment</h1>
                        </div>
                    </div>
                </div>
            </section>
        <section class="cart_area section--padding2 bgcolor">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product_archive added_to__cart">
                        <div class="title_area">
                            <div class="row">
                                <div class="col-md-5">
                                    <h4>Product Details</h4>
                                </div>
                                <div class="col-md-3">
                                    <h4 class="add_info">Category</h4>
                                </div>
                                <div class="col-md-2">
                                    <h4>Price</h4>
                                </div>
                                <div class="col-md-2">
                                    <h4>Remove</h4>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <?php
                                $userID = $_SESSION['user_id'];
                                $cart = mysqli_query($connect, "SELECT * FROM comp_participation WHERE user_id='$userID' AND payment='0'");
                                $row=1;
                                $userBalance = $_SESSION['balance'];
                                $totalBayar = 0;

                                foreach ($cart as $getData) {
                                    $compID = $getData['comp_id'];
                                    $compData = mysqli_query($connect, "SELECT * FROM competition WHERE comp_id='$compID'");
                                    foreach ($compData as $getData) {
                                        $compName=$getData['name'];
                                        $compPrice=$getData['price'];
                                        $compSlot=$getData['slot'];
                                        $compMember=$getData['member'];
                                        $compDesc=$getData['desc'];
                                        $compStart=$getData['reg_start'];
                                        $compEnd=$getData['reg_end'];
                                        $compLocation=$getData['location'];
                                        $compAuthor=$getData['author_id'];
                                        $compCat=$getData['category'];
                                    echo "
                                        <div class='col-md-12'>
                                            <div class='single_product clearfix'>
                                                <div class='col-lg-5 col-md-7 v_middle'>
                                                    <div class='product__description'>
                                                        <img src='images/pur1.jpg' alt='Purchase image'>
                                                        <div class='short_desc'>
                                                            <a href='single-product.html'>
                                                                <h4>".$compName."</h4>
                                                            </a>
                                                            <p>".$compDesc."</p>
                                                        </div>
                                                    </div>
                                                </div>
            
                                                <div class='col-lg-3 col-md-2 v_middle'>
                                                    <div class='product__additional_info'>
                                                        <ul>
                                                            <li>
                                                                <a href='#'>
                                                                    <img src='images/catword.png' alt=''>".$compCat."</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
            
                                                <div class='col-lg-4 col-md-3 v_middle'>
                                                    <div class='product__price_download'>
                                                        <div class='item_price v_middle'>
                                                            <span>".$compPrice."</span>
                                                        </div>
                                                        <div class='item_action v_middle'>
                                                            <a href='#' class='remove_from_cart'>
                                                                <span class='lnr lnr-trash'></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    ";
                                    }
                                    $totalBayar = $totalBayar + $compPrice;
                                }
                            ?>
                        </div>

                        <div class="row">
                            <div class="col-md-6 offset-md-6">
                                <div class="cart_calculation">
                                    <div class="cart--total">
                                        <p>
                                            <span>Total</span><?php echo $totalBayar; ?>
                                    <?php
                                        $rndm = uniqid();
                                        $sisa = $userBalance-$totalBayar;
                                        $sisaTopUp = -$sisa;
                                        echo "<br /><span>Sisa saldo setelah pembayaran adalah</span> Rp ".$sisa."</p></div>";
                                        if (($sisa) >= 0) {
                                        echo "
                                            <form method='POST' action='checkout.php?id=".$rndm."'>
                                            <input type='hidden' name='balance' value=".$userBalance." />
                                            <input type='hidden' name='bill' value=".$totalBayar." />
                                            <input class='btn btn--round btn--md checkout_link' style ='float:right;margin-bottom:40px;border-radius:3em' type='submit' name='submit' value='Proceed to Checkout' />
                                            </form>
                                        ";
                                        } else {
                                        echo "
                                            <form method='POST' action='top-up.php?redirect=Yes&redirPage=cart.php'>
                                            <input type='hidden' name='topUpBalance' value='$sisaTopUp' />
                                            <input class='btn btn--round btn--md checkout_link' style ='margin-bottom:40px;float:right;border-radius:3em' type='submit' name='submit' value='Top Up' />
                                            </form>
                                        ";
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
    include "footer.php"
?>