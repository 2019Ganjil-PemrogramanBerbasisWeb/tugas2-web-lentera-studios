<?php
    error_reporting(0);

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
                                        <a href='#'>Paid</a>
                                    </li>
                                </ul>
                            </div>
                            <h1 class='page-title'>Payment History</h1>
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
                                $cart = mysqli_query($connect, "SELECT * FROM comp_participation WHERE user_id='$userID' AND payment='1'");
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
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
    include "footer.php"
?>