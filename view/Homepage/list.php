<main>
    <div class="page-loader">
        <div class="loader">Loading...</div>
    </div>
    <nav class="navbar navbar-custom navbar-fixed-top navbar-transparent" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="index.php?controller=Homepage&action=list">SPARK</a>
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
                    <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown">
                            <?php
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
            </div>
        </div>
    </nav>
    <section class="home-section home-parallax home-fade" id="home">
        <div class="hero-slider">
            <ul class="slides">
                <li class="bg-dark-30 bg-dark" style="background-image:url(public/images/section-8.jpg);">
                    <div class="titan-caption">
                        <div class="caption-content">
                            <div class="font-alt mb-30 titan-title-size-1">Hello &amp; welcome</div>
                            <div class="font-alt mb-40 titan-title-size-4">We are Spark</div><a class="section-scroll btn btn-border-w btn-round" href="#about">Learn More</a>
                        </div>
                    </div>
                </li>
                <li class="bg-dark-30 bg-dark" style="background-image:url(public/images/section-9.jpg);">
                    <div class="titan-caption">
                        <div class="caption-content">
                            <div class="font-alt mb-30 titan-title-size-2">Spark is the biggest digital market in Vietnam for<br />everyone in Vietnam and around the world !
                            </div><a class="btn btn-border-w btn-round" href="about">Learn More</a>
                        </div>
                    </div>
                </li>
                <li class="bg-dark-30 bg-dark" style="background-image:url(public/images/section-10.jpg);">
                    <div class="titan-caption">
                        <div class="caption-content">
                            <div class="font-alt mb-30 titan-title-size-1">We can provide every thing you want to buy just in 1 click</div>
                            <div class="font-alt mb-40 titan-title-size-3">We are Amazing</div><a class="section-scroll btn btn-border-w btn-round" href="#about">Learn More</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <div class="main">
        <section class="module" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <h2 class="module-title font-alt">Welcome to Stark</h2>
                        <div class="module-subtitle font-serif large-text">We’re the biggest digital market in Vietnam. We don’t have a style we have standards - bring for you best choice and best prices</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 col-sm-offset-5">
                        <div class="large-text align-center"><a class="section-scroll" href="#services"><i class="fa fa-angle-down"></i></a></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="module bg-dark-60">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="video-box">
                            <div class="video-box-icon"><a class="video-pop-up" href="https://www.youtube.com/watch?v=ZMMJyFkyPbM"><span class="icon-video"></span></a></div>
                            <div class="video-title font-alt">Comming Soon</div>
                            <div class="video-subtitle font-alt">Click to watch the video about our new products</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="module pb-0" id="works">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">Our Services</h2>
                        <div class="module-subtitle font-serif"></div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="filter font-alt" id="filters">
                            <!----------------------------------------------->
                            <li><a class="current wow fadeInUp" href="#" data-filter="*">All</a></li>
                            <?php
                            for ($i = 0; $i < count($type_rows); $i++) {
                                echo '<li>
                                        <a class="current wow fadeInUp" href="#" data-filter=".' . $type_rows[$i]->id . '">' . $type_rows[$i]->item_type . '</a>
                                    </li>';
                            }
                            ?>

                        </ul>
                    </div>
                </div>
            </div>
            <!----------------------- Display item list  ----------------------->
            <ul class="works-grid works-grid-gut works-grid-3 works-hover-w" id="works-grid">
                <?php
                for ($j = 0; $j < count($list_rows); $j++) {
                    echo '<li class="work-item ' . $list_rows[$j]->item_type . '"><a href="index.php?controller=Item&action=list&list_id=' . $list_rows[$j]->id . '"><div class="work-image"><img src="' . $list_rows[$j]->item_image . '" alt="Menu Item" /></div><div class="work-caption font-alt"> <h3 class="work-title">' . $list_rows[$j]->item_name . '</h3><div class="work-descr">' . $list_rows[$j]->item_info . '</div> </div> </a></li>';
                }
                ?>
            </ul>
            <!---------------------------------------------->
        </section>
        <section class="module-small bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-8 col-lg-6 col-lg-offset-2">
                        <div class="callout-text font-alt">
                            <h3 class="callout-title">Want to see more products?</h3>
                            <p>We are always open to interesting products.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-2">
                        <div class="callout-btn-box"><a class="btn btn-w btn-round" href="portfolio_boxed_gutter_col_3.html">Lets view all products</a></div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="divider-w">
        <section class="module" id="team">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">Meet Our Company Member</h2>
                        <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3">
                        <div class="team-item">
                            <div class="team-image"><img src="public/images/myavatar.jpg" alt="Member Photo" />
                                <div class="team-detail">
                                    <h5 class="font-alt">Hi all</h5>
                                    <p class="font-serif">Think Different</p>
                                    <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a></div>
                                </div>
                            </div>
                            <div class="team-descr font-alt">
                                <div class="team-name">Hoang Phuoc</div>
                                <div class="team-role">CEO</div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3">
                        <div class="team-item">
                            <div class="team-image"><img src="public/images/phuonichan.jpg" alt="Member Photo" />
                                <div class="team-detail">
                                    <h5 class="font-alt">Hi all</h5>
                                    <p class="font-serif">I'm so Amazing</p>
                                    <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a></div>
                                </div>
                            </div>
                            <div class="team-descr font-alt">
                                <div class="team-name">Phu Le</div>
                                <div class="team-role">COO</div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-3">
                        <div class="team-item">
                            <div class="team-image"><img src="public/images/thanhonichan.jpg" alt="Member Photo" />
                                <div class="team-detail">
                                    <h5 class="font-alt">Hi all</h5>
                                    <p class="font-serif">I'm so Amazing</p>
                                    <div class="team-social"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a></div>
                                </div>
                            </div>
                            <div class="team-descr font-alt">
                                <div class="team-name">Thanh Nguyen</div>
                                <div class="team-role">Leader Developer</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="module bg-dark-60 pt-0 pb-0 parallax-bg testimonial" data-background="public/images/wallpaper.jpg">
            <div class="testimonials-slider pt-140 pb-140">
                <ul class="slides">
                    <li>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="module-icon"><span class="icon-quote"></span></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <blockquote class="testimonial-text font-alt">I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.</blockquote>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 col-sm-offset-4">
                                    <div class="testimonial-author">
                                        <div class="testimonial-caption font-alt">
                                            <div class="testimonial-title">Jack Woods</div>
                                            <div class="testimonial-descr">SomeCompany INC, CEO</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="module-icon"><span class="icon-quote"></span></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <blockquote class="testimonial-text font-alt">I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.</blockquote>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 col-sm-offset-4">
                                    <div class="testimonial-author">
                                        <div class="testimonial-caption font-alt">
                                            <div class="testimonial-title">Jim Stone</div>
                                            <div class="testimonial-descr">SomeCompany INC, CEO</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="module-icon"><span class="icon-quote"></span></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <blockquote class="testimonial-text font-alt">I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</blockquote>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 col-sm-offset-4">
                                    <div class="testimonial-author">
                                        <div class="testimonial-caption font-alt">
                                            <div class="testimonial-title">Adele Snow</div>
                                            <div class="testimonial-descr">SomeCompany INC, CEO</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <div class="module-small bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-4 col-lg-offset-2">
                        <div class="callout-text font-alt">
                            <h3 class="callout-title">Subscribe now</h3>
                            <p>We will not spam your email.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="callout-btn-box">
                            <form id="subscription-form" role="form" method="post" action="php/subscribe.php">
                                <div class="input-group">
                                    <input class="form-control" type="email" id="semail" name="semail" placeholder="Your Email" data-validation-required-message="Please enter your email address." required="required" /><span class="input-group-btn">
                                        <button class="btn btn-g btn-round" id="subscription-form-submit" type="submit">Submit</button></span>
                                </div>
                            </form>
                            <div class="text-center" id="subscription-response"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="module" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">Get in touch</h2>
                        <div class="module-subtitle font-serif"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <form id="contactForm" role="form" method="post" action="php/contact.php">
                            <div class="form-group">
                                <label class="sr-only" for="name">Name</label>
                                <input class="form-control" type="text" id="name" name="name" placeholder="Your Name*" required="required" data-validation-required-message="Please enter your name." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="email">Email</label>
                                <input class="form-control" type="email" id="email" name="email" placeholder="Your Email*" required="required" data-validation-required-message="Please enter your email address." />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="7" id="message" name="message" placeholder="Your Message*" required="required" data-validation-required-message="Please enter your message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-block btn-round btn-d" id="cfsubmit" type="submit">Submit</button>
                            </div>
                        </form>
                        <div class="ajax-response font-alt" id="contactFormResponse"></div>
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