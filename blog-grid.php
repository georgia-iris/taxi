<?php include('includes/header.php'); ?>

<main>

    <div id="popup-search-box">
        <div class="box-inner-wrap d-flex align-items-center">
            <form id="form" action="#" method="get" role="search">
                <input id="popup-search" type="text" name="s" placeholder="Type keywords here..." />
                <button id="popup-search-button" type="submit" name="submit">
                    <i class="las la-search"></i>
                </button>
            </form>
            <div class="search-close"><i class="las la-times"></i></div>
        </div>
    </div>
    <!--/.popupsearch-box-->
    <div id="searchbox-overlay"></div>

    <div id="popup-sidebox" class="popup-sidebox">
        <div class="sidebox-content">
            <div class="site-logo">
                <a href="index.html"><img src="assets/img/logo-light.png" alt="logo" /></a>
            </div>
            <p>Everything your taxi business needs is already here! Ridek, a theme
                made for taxi service companies.</p>
            <ul class="sidebox-list">
                <li class="call"><span>Call for ride:</span>5267-214-392</li>
                <li>
                    <span>You can find us at:</span>Halk Street New York, USA - 2386
                </li>
                <li><span>Email now:</span>Info.ridek@mail.com</li>
            </ul>
        </div>
    </div>
    <!--/.popup-sidebox-->
    <div id="sidebox-overlay"></div>

    <section class="page-header">
        <div class="page-header-shape"></div>
        <div class="container">
            <div class="page-header-info">
                <h4>Blog Grid!</h4>
                <h2>Feel your journey <br> with <span>Ridek!</span></h2>
                <p>Everything your taxi business <br>needs is already here! </p>
            </div>
        </div>
    </section>
    <!--/.page-header-->

    <section class="blog-section blog-page bg-grey padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 sm-padding">
                    <div class="row grid-post">
                        <div class="col-md-6 padding-15">
                            <div class="post-card">
                                <div class="post-thumb">
                                    <img src="assets/img/post-1.jpg" alt="post">
                                    <a href="blog-details.html" class="post-category">Business</a>
                                </div>
                                <div class="post-content-wrap">
                                    <ul class="post-meta">
                                        <li><i class="las la-calendar"></i>Jan 01 2022</li>
                                        <li><i class="las la-user"></i>Elliot Alderson</li>
                                    </ul>
                                    <div class="post-content">
                                        <h3><a href="blog-details.html" class="hover">How to Start initiating an startup in few days.</a></h3>
                                        <p>Financial experts support or help you to to find out which way you can raise your funds more...</p>
                                        <a href="blog-details.html" class="read-more">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 padding-15">
                            <div class="post-card">
                                <div class="post-thumb">
                                    <img src="assets/img/post-2.jpg" alt="post">
                                    <a href="blog-details.html" class="post-category">Startup</a>
                                </div>
                                <div class="post-content-wrap">
                                    <ul class="post-meta">
                                        <li><i class="las la-calendar"></i>Jan 01 2022</li>
                                        <li><i class="las la-user"></i>Elliot Alderson</li>
                                    </ul>
                                    <div class="post-content">
                                        <h3><a href="blog-details.html">Financial experts support help you to find out.</a></h3>
                                        <p>Financial experts support or help you to to find out which way you can raise your funds more...</p>
                                        <a href="blog-details.html" class="read-more">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 padding-15">
                            <div class="post-card">
                                <div class="post-thumb">
                                    <img src="assets/img/post-3.jpg" alt="post">
                                    <a href="blog-details.html" class="post-category">Finance</a>
                                </div>
                                <div class="post-content-wrap">
                                    <ul class="post-meta">
                                        <li><i class="las la-calendar"></i>Jan 01 2022</li>
                                        <li><i class="las la-user"></i>Elliot Alderson</li>
                                    </ul>
                                    <div class="post-content">
                                        <h3><a href="blog-details.html">Innovative business all over the world.</a></h3>
                                        <p>Financial experts support or help you to to find out which way you can raise your funds more...</p>
                                        <a href="blog-details.html" class="read-more">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 padding-15">
                            <div class="post-card">
                                <div class="post-thumb">
                                    <img src="assets/img/post-4.jpg" alt="post">
                                    <a href="blog-details.html" class="post-category">Consulting</a>
                                </div>
                                <div class="post-content-wrap">
                                    <ul class="post-meta">
                                        <li><i class="las la-calendar"></i>Jan 01 2022</li>
                                        <li><i class="las la-user"></i>Elliot Alderson</li>
                                    </ul>
                                    <div class="post-content">
                                        <h3><a href="blog-details.html">Fresh startup ideas for digital business</a></h3>
                                        <p>Financial experts support or help you to to find out which way you can raise your funds more...</p>
                                        <a href="blog-details.html" class="read-more">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="pagination-wrap text-left mt-30">
                        <li><a href="#"><i class="las la-arrow-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#" class="active">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="las la-arrow-right"></i></a></li>
                    </ul>
                    <!--Pagination-->
                </div>
                <!--Blog Grid-->
                <div class="col-lg-4 sm-padding">
                    <div class="sidebar-widget">
                        <form action="" class="search-form">
                            <input type="text" class="form-control" placeholder="Search">
                            <button class="search-btn" type="button"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!--Search Form-->
                    <div class="sidebar-widget">
                        <div class="widget-title">
                            <h3>Categories</h3>
                        </div>
                        <ul class="category-list">
                            <li><a href="blog-grid.html">Business Strategy</a><span>23</span></li>
                            <li><a href="blog-grid.html">Project Management</a><span>05</span></li>
                            <li><a href="blog-grid.html">Digital Marketing</a><span>18</span></li>
                            <li><a href="blog-grid.html">Customer Experience</a><span>04</span></li>
                            <li><a href="blog-grid.html">Partnership System</a><span>15</span></li>
                        </ul>
                    </div>
                    <!--Categories-->
                    <div class="sidebar-widget">
                        <div class="widget-title">
                            <h3>Recent Articles</h3>
                        </div>
                        <ul class="thumb-post">
                            <li>
                                <div class="thumb">
                                    <img src="assets/img/post-thumb-1.jpg" alt="thumb">
                                </div>
                                <div class="thumb-post-info">
                                    <h3><a href="blog-details.html">How To Go About Initiating An Startup In Few Days.</a></h3>
                                    <a href="#" class="date">Jan 01 2022</a>
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                    <img src="assets/img/post-thumb-2.jpg" alt="thumb">
                                </div>
                                <div class="thumb-post-info">
                                    <h3><a href="blog-details.html">Financial Experts Support Help You To Find Out.</a></h3>
                                    <a href="#" class="date">Jan 01 2022</a>
                                </div>
                            </li>
                            <li>
                                <div class="thumb">
                                    <img src="assets/img/post-thumb-3.jpg" alt="thumb">
                                </div>
                                <div class="thumb-post-info">
                                    <h3><a href="blog-details.html">Innovative Helping Business All Over The World.</a></h3>
                                    <a href="#" class="date">Jan 01 2022</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--Recent Thumb Post-->
                    <div class="sidebar-widget">
                        <div class="widget-title">
                            <h3>Tags</h3>
                        </div>
                        <ul class="tags">
                            <li><a href="#">business</a></li>
                            <li><a href="#">marketing</a></li>
                            <li><a href="#">startup</a></li>
                            <li><a href="#">design</a></li>
                            <li><a href="#">consulting</a></li>
                            <li><a href="#">strategy</a></li>
                            <li><a href="#">development</a></li>
                            <li><a href="#">tips</a></li>
                            <li><a href="#">Seo</a></li>
                        </ul>
                    </div>
                    <!--Tags-->
                </div>
                <!--Sidebar-->
            </div>
        </div>
    </section>
    <!--Blog Section-->

    <footer class="footer-section">
        <div class="footer-top-wrap">
            <div class="container">
                <div class="footer-top">
                    <div class="row align-items-end">
                        <div class="col-lg-8">
                            <div class="brand">
                                <a class="footer-logo" href="index.html"><img src="assets/img/logo-light.png" alt="logo"></a>
                                <p>We successfully cope with tasks of varying complexity, provide long-term guarantees and regularly master new technologies.</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="footer-call">
                                <i class="las la-phone-volume"></i>
                                <p><span>Call For Taxi</span><a href="tel:5267214392">5267-214-392</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.footer-top-wrap-->
        <div class="footer-mid-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 sm-padding">
                        <div class="footer-item">
                            <div class="widget-title">
                                <h3>Working Hours</h3>
                            </div>
                            <ul class="footer-contact">
                                <li><span>Monday - Friday:</span>9.00am To 8.00pm</li>
                                <li><span>Saturday:</span>10.00am To 7.30pm</li>
                                <li><span>Sunday:</span>Close Day!</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 sm-padding">
                        <div class="footer-item footer-list">
                            <div class="widget-title">
                                <h3>Usefull Links</h3>
                            </div>
                            <ul class="footer-links">
                                <li><a href="book-taxi.html">Taxi Booking</a></li>
                                <li><a href="faqs.html">Help Center</a></li>
                                <li><a href="about-us.html">Privacy and Policy</a></li>
                                <li><a href="about-company.html">Terms of Use</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 sm-padding">
                        <div class="footer-item">
                            <div class="widget-title">
                                <h3>Head Office</h3>
                            </div>
                            <ul class="footer-contact">
                                <li><span>Location:</span>153 Williamson Plaza, Maggieberg, MT 09514</li>
                                <li><span>Join Us:</span>Info@YourGmail24.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 sm-padding">
                        <div class="footer-item subscribe-wrap">
                            <div class="widget-title">
                                <h3>Newsletter Signup</h3>
                            </div>
                            <form action="#" class="subscribe-form">
                                <input class="form-control" type="email" name="email" placeholder="Your Email" required="">
                                <input type="hidden" name="action" value="mailchimpsubscribe">
                                <button class="submit">Subscribe Now</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="running-taxi">
                <div class="taxi"></div>
                <div class="taxi-2"></div>
                <div class="taxi-3"></div>
            </div>
        </div>
        <!--/.footer-mid-wrap-->
        <div class="copyright-wrap">
            <div class="container">
                <p>© <span id="currentYear"></span> DynamicLayers All Rights Reserved.</p>
            </div>
        </div>
        <!--/.copyright-wrap-->
    </footer>
    <!--/.footer-section-->

    <div id="scrollup">
        <button id="scroll-top" class="scroll-to-top">
            <i class="las la-arrow-up"></i>
        </button>
    </div>
    <!--scrollup-->

    <div class="dl-cursor">
        <div class="cursor-icon-holder"><i class="las la-times"></i></div>
    </div>
    <!--/.dl-cursor-->

    <!--jQuery Lib-->
    <script src="assets/js/vendor/jquary-3.6.0.min.js"></script>
    <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script src="assets/js/vendor/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/swiper.min.js"></script>
    <script src="assets/js/vendor/jquery.datetimepicker.full.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/vendor/venobox.min.js"></script>
    <script src="assets/js/vendor/smooth-scroll.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
