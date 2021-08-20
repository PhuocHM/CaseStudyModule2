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
                    <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">Home</a>
                        <ul class="dropdown-menu">
                            <?php
                            for ($j = 0; $j < count($list_rows); $j++) {
                                echo '<li><a href="index.php?controller=Item&action=list&list_id=' . $list_rows[$j]->id . '">' . $list_rows[$j]->item_name . '</a></li>';
                            }
                            ?>
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
                    <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown"><?php echo $_SESSION['current_user']->username ?></a>
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
        <section class="module">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 mb-sm-40"><img src="<?php echo $rows->item_image ?>" alt="<?php echo $rows->item_name ?>" /></a>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1 class="product-title font-alt"><?php echo $rows->item_name ?></h1>
                            </div>
                        </div>
                        <div class="row mb-20">
                            <div class="col-sm-12"><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star-off"></i></span><a class="open-tab section-scroll" href="#reviews">-2customer reviews</a>
                            </div>
                        </div>
                        <div class="row mb-20">
                            <div class="col-sm-12">
                                <div class="price font-alt"><span class="amount"><?php echo $rows->item_price ?>$</span></div>
                            </div>
                        </div>
                        <div class="row mb-20">
                            <div class="col-sm-12">
                                <div class="description">
                                    <p><?php echo $rows->item_info ?></p>
                                </div>
                            </div>
                        </div>
                        <form action="index.php" method="get">
                            <div class="row mb-20">
                                <div class="col-sm-4 mb-sm-20">
                                    <input type="hidden" name="controller" value="Checkout">
                                    <input type="hidden" name="action" value="add">
                                    <input type="hidden" name="item_id" value="<?php echo $rows->id  ?>">
                                    <input class="form-control input-lg" type="number" name="amount" id="soluong" value="1" max="40" min="1" required="required" />
                                </div>
                                <!-- Checkout Area -->
                                <div class="col-sm-8"><input type="submit" value="Add to cart" class="btn btn-lg btn-block btn-round btn-b">
                                    <!-- Checkout Area -->
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row mt-70">
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs font-alt" role="tablist">
                                <li class="active"><a href="#description" data-toggle="tab"><span class="icon-tools-2"></span>Description</a></li>
                                <li><a href="#data-sheet" data-toggle="tab"><span class="icon-tools-2"></span>Data sheet</a></li>
                                <li><a href="#reviews" data-toggle="tab"><span class="icon-tools-2"></span>Reviews (2)</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="description">
                                    <?php echo $rows->item_info ?>
                                </div>
                                <div class="tab-pane" id="data-sheet">
                                    <table class="table table-striped ds-table table-responsive">
                                        <tbody>
                                            <tr>
                                                <th>Title</th>
                                                <th>Info</th>
                                            </tr>
                                            <tr>
                                                <td>Brand</td>
                                                <td><?php echo $rows->item_brand ?></td>
                                            </tr>
                                            <tr>
                                                <td>Size</td>
                                                <td><?php echo $rows->item_size ?></td>
                                            </tr>
                                            <tr>
                                                <td>Color</td>
                                                <td><?php echo $rows->item_color ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane" id="reviews">
                                    <div class="comments reviews">
                                        <div class="comment clearfix">
                                            <div class="comment-avatar"><img src="" alt="avatar" /></div>
                                            <div class="comment-content clearfix">
                                                <div class="comment-author font-alt"><a href="#">John Doe</a></div>
                                                <div class="comment-body">
                                                    <p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The European languages are members of the same family. Their separate existence is a myth.</p>
                                                </div>
                                                <div class="comment-meta font-alt">Today, 14:55 -<span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star-off"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment clearfix">
                                            <div class="comment-avatar"><img src="" alt="avatar" /></div>
                                            <div class="comment-content clearfix">
                                                <div class="comment-author font-alt"><a href="#">Mark Stone</a></div>
                                                <div class="comment-body">
                                                    <p>Europe uses the same vocabulary. The European languages are members of the same family. Their separate existence is a myth.</p>
                                                </div>
                                                <div class="comment-meta font-alt">Today, 14:59 -<span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star"></i></span><span><i class="fa fa-star star-off"></i></span><span><i class="fa fa-star star-off"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-form mt-30">
                                        <h4 class="comment-form-title font-alt">Add review</h4>
                                        <form method="post">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class="sr-only" for="name">Name</label>
                                                        <input class="form-control" id="name" type="text" name="name" placeholder="Name" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label class="sr-only" for="email">Name</label>
                                                        <input class="form-control" id="email" type="text" name="email" placeholder="E-mail" />
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <select class="form-control">
                                                            <option selected="true" disabled="">Rating</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" id="" name="" rows="4" placeholder="Review"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <button class="btn btn-round btn-d" type="submit">Submit Review</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <hr class="divider-w">
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