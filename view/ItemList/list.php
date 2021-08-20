<main>
    <div class="page-loader">
        <div class="loader">Loading...</div>
    </div>
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.php?controller=Homepage&action=list">Spark</a>
            </div>
            <div class="collapse navbar-collapse" id="custom-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown"><a class="dropdown-toggle" href="index.php" data-toggle="dropdown">Home</a>
                        <ul class="dropdown-menu">
                            <!-- NAV Item List -->
                            <?php
                            for ($j = 0; $j < count($list_rows); $j++) {
                                echo '<li><a href="index.php?controller=Item&action=list&list_id=' . $list_rows[$j]->id . '">' . $list_rows[$j]->item_name . '</a></li>';
                            }
                            ?>
                            <!-- ------------------- -->
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">FAQ</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">About</a>
                                <ul class="dropdown-menu">
                                    <li><a href="about1.html">About 1</a></li>
                                    <li><a href="about2.html">About 2</a></li>
                                    <li><a href="about3.html">About 3</a></li>
                                    <li><a href="about4.html">About 4</a></li>
                                    <li><a href="about5.html">About 5</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Services</a>
                                <ul class="dropdown-menu">
                                    <li><a href="service1.html">Service 1</a></li>
                                    <li><a href="service2.html">Service 2</a></li>
                                    <li><a href="service3.html">Service 3</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Pricing</a>
                                <ul class="dropdown-menu">
                                    <li><a href="pricing1.html">Pricing 1</a></li>
                                    <li><a href="pricing2.html">Pricing 2</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Gallery</a>
                                <ul class="dropdown-menu">
                                    <li><a href="gallery_col_2.html">2 Columns</a></li>
                                    <li><a href="gallery_col_3.html">3 Columns</a></li>
                                    <li><a href="gallery_col_4.html">4 Columns</a></li>
                                    <li><a href="gallery_col_6.html">6 Columns</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Contact</a>
                                <ul class="dropdown-menu">
                                    <li><a href="contact1.html">Contact 1</a></li>
                                    <li><a href="contact2.html">Contact 2</a></li>
                                    <li><a href="contact3.html">Contact 3</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Restaurant menu</a>
                                <ul class="dropdown-menu">
                                    <li><a href="restaurant_menu1.html">Menu 2 Columns</a></li>
                                    <li><a href="restaurant_menu2.html">Menu 3 Columns</a></li>
                                </ul>
                            </li>
                            <li><a href="login_register.html">Login / Register</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="404.html">Page 404</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Contact us</a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Boxed</a>
                                <ul class="dropdown-menu">
                                    <li><a href="portfolio_boxed_col_2.html">2 Columns</a></li>
                                    <li><a href="portfolio_boxed_col_3.html">3 Columns</a></li>
                                    <li><a href="portfolio_boxed_col_4.html">4 Columns</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Boxed - Gutter</a>
                                <ul class="dropdown-menu">
                                    <li><a href="portfolio_boxed_gutter_col_2.html">2 Columns</a></li>
                                    <li><a href="portfolio_boxed_gutter_col_3.html">3 Columns</a></li>
                                    <li><a href="portfolio_boxed_gutter_col_4.html">4 Columns</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Full Width</a>
                                <ul class="dropdown-menu">
                                    <li><a href="portfolio_full_width_col_2.html">2 Columns</a></li>
                                    <li><a href="portfolio_full_width_col_3.html">3 Columns</a></li>
                                    <li><a href="portfolio_full_width_col_4.html">4 Columns</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Full Width - Gutter</a>
                                <ul class="dropdown-menu">
                                    <li><a href="portfolio_full_width_gutter_col_2.html">2 Columns</a></li>
                                    <li><a href="portfolio_full_width_gutter_col_3.html">3 Columns</a></li>
                                    <li><a href="portfolio_full_width_gutter_col_4.html">4 Columns</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Masonry</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Boxed</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="portfolio_masonry_boxed_col_2.html">2 Columns</a></li>
                                            <li><a href="portfolio_masonry_boxed_col_3.html">3 Columns</a></li>
                                            <li><a href="portfolio_masonry_boxed_col_4.html">4 Columns</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Full Width</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="portfolio_masonry_full_width_col_2.html">2 Columns</a></li>
                                            <li><a href="portfolio_masonry_full_width_col_3.html">3 Columns</a></li>
                                            <li><a href="portfolio_masonry_full_width_col_4.html">4 Columns</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Hover Style</a>
                                <ul class="dropdown-menu">
                                    <li><a href="portfolio_hover_black.html">Black</a></li>
                                    <li><a href="portfolio_hover_gradient.html">Gradient</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Single</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Featured Image</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="portfolio_single_featured_image1.html">Style 1</a></li>
                                            <li><a href="portfolio_single_featured_image2.html">Style 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Featured Slider</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="portfolio_single_featured_slider1.html">Style 1</a></li>
                                            <li><a href="portfolio_single_featured_slider2.html">Style 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Featured Video</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="portfolio_single_featured_video1.html">Style 1</a></li>
                                            <li><a href="portfolio_single_featured_video2.html">Style 2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- Current User -->
                    <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown"><?php
                                                                                                    echo $_SESSION['current_user']->username;
                                                                                                    ?></a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Edit profile</a>
                                <ul class="dropdown-menu">
                                    <li><a href="portfolio_boxed_gutter_col_2.html">2 Columns</a></li>
                                    <li><a href="portfolio_boxed_gutter_col_3.html">3 Columns</a></li>
                                    <li><a href="portfolio_boxed_gutter_col_4.html">4 Columns</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Privacy</a>
                                <ul class="dropdown-menu">
                                    <li><a href="portfolio_full_width_col_2.html">2 Columns</a></li>
                                    <li><a href="portfolio_full_width_col_3.html">3 Columns</a></li>
                                    <li><a href="portfolio_full_width_col_4.html">4 Columns</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a class="dropdown-toggle" href="index.php?controller=User&action=logout" data-toggle="dropdown">Logout</a> </li>


                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="main">
        <section class="module bg-dark-60 shop-page-header" data-background="public/images/shop/product-page-bg.png">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">Shop Products</h2>
                        <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
                    </div>
                </div>
            </div>
        </section>
        <!--  -->
        <!--  -->
        <hr class="divider-w">
        <section class="module-small">
            <div class="container">
                <div class="row multi-columns-row">
                    <!--------------------  ------------------------->
                    <?php
                    for ($i = 0; $i < count($rows); $i++) {
                        if ($rows[$i]->status == "0") {
                            echo '<div class="col-sm-6 col-md-4 col-lg-4"> 
                            <div class="shop-item"><div class="shop-item-image">
                                <img src="' . $rows[$i]->item_image . '" alt="' . $rows[$i]->item_name . '" /> 
                                <div class="shop-item-detail">
                                    <a class="btn btn-round btn-b" href="index.php?controller=Checkout&action=add&amount=1&item_id=' . $rows[$i]->id . '"><span class="icon-basket">Add To Cart</span></a>
                                </div> 
                            </div>
                            <h4 class="shop-item-title font-alt">
                            <a href="index.php?controller=Item&action=view&item_id=' . $rows[$i]->id . '">' . $rows[$i]->item_name . '</a>
                            </h4>' . $rows[$i]->item_price . '$</div></div>';
                        }
                    }
                    ?>
                    <!----------------------  ---------------------->
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="pagination font-alt"><a href="#"><i class="fa fa-angle-left"></i></a><a class="active" href="#">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#"><i class="fa fa-angle-right"></i></a></div>
                    </div>
                </div>
            </div>
        </section>
        <div class="module-small bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="widget">
                            <h5 class="widget-title font-alt">About Spark</h5>
                            <p>The languages only differ in their grammar, their pronunciation and their most common words.</p>
                            <p>Phone: +84 123 456 789</p>Fax: +1 234 567 89 10
                            <p>Email:<a href="#">sparkcompany@gmail.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="divider-d">
        <footer class="footer bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="copyright font-alt">&copy; 2021&nbsp;<a href="index.html">Spark</a>, All Rights Reserved</p>
                    </div>
                    <div class="col-sm-6">
                        <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
</main>