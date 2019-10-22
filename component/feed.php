    <section class="products section--padding">
        <!-- start container -->
        <div class="container">
            <div class="row">
                <!-- start .col-md-4 -->
                
        <?php
            $competition = mysqli_query($connect, "SELECT * FROM competition");
            foreach($competition as $getData){
              echo "
                <div class='col-lg-4 col-md-6'>
                    <div class='product product--card'>

                        <div class='product__thumbnail'>
                            <img src='image/abstract-1.png' alt='Product Image'>
                            <div class='prod_btn'>
                                <a href='competition.php?id=".$getData['comp_id']."' class='transparent btn--sm btn--round'>More Info</a>
                            </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class='product-desc'>
                            <a href='competition.php?id=".$getData['comp_id']."' class='product_title'>
                                <h4>".$getData['name']."</h4>
                            </a>
                            <ul class='titlebtm'>
                                <li>
                                    <img class='auth-img' src='images/auth.jpg' alt='author image'>
                                    <p>
                                        <a href='author.php?id=".$getData['author_id']."'>Trofhee</a>
                                    </p>
                                </li>
                                <li class='product_cat'>
                                    <a href='#'>
                                        <span class='lnr lnr-location'></span>".$getData['location']."</a>
                                </li>
                            </ul>

                            <p>".$getData['desc']."</p>
                        </div>
                        <!-- end /.product-desc -->

                        <div class='product-purchase'>
                            <div class='price_love'>
                                <span>Rp ".$getData['price']."</span>
                            </div>
                            <div class='sell'>
                                <p>
                                    <span class='lnr lnr-heart'></span>
                                    <span>".$getData['booked_slot']."</span>
                                </p>
                            </div>
                        </div>
                        <!-- end /.product-purchase -->
                    </div>
                    <!-- end /.single-product -->
                </div>
              ";
            }
        ?>
    </section>
