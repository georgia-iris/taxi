<?php include('includes/header.php'); ?>

<main>

    <div id="sidebox-overlay"></div>

    <div class="slider-section">
        <div class="main-slider-2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slider-img"><img src="assets/img/slider-bg.jpg" alt="img" class="kenburns" style="animation-duration: 12000ms; "></div>
                    <div class="slider-content-wrap d-flex align-items-center text-left">
                        <div class="container">
                            <div class="slider-content text-center pb-60">
                                <div class="slider-caption medium">
                                    <div class="inner-layer">
                                        <div data-animation="fade-in-bottom" data-delay="0.3s">Travel securely with us!</div>
                                    </div>
                                </div>
                                <div class="slider-caption big">
                                    <div class="inner-layer">
                                        <div data-animation="fade-in-bottom" data-delay="0.5s">Book your taxi from <br>anywhare today!</div>
                                    </div>
                                </div>
                                <div class="slider-caption small">
                                    <div class="inner-layer">
                                        <div data-animation="fade-in-bottom" data-delay="0.7s" data-duration="1s">Everything your taxi business needs is already here! <br>Ridek made for taxi service companies!</div>
                                    </div>
                                </div>
                                <div class="slider-btn">
                                    <a href="book-taxi.php" class="default-btn" data-animation="fade-in-bottom" data-delay="0.9s">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slider-img"><img src="assets/img/slider-bg.jpg" alt="img" class="kenburns" style="animation-duration: 12000ms; "></div>
                    <div class="slider-content-wrap d-flex align-items-center text-left">
                        <div class="container">
                            <div class="slider-content text-center pb-60">
                                <div class="slider-caption medium">
                                    <div class="inner-layer">
                                        <div data-animation="fade-in-bottom" data-delay="0.3s">Travel securely with us!</div>
                                    </div>
                                </div>
                                <div class="slider-caption big">
                                    <div class="inner-layer">
                                        <div data-animation="fade-in-bottom" data-delay="0.5s">Book your taxi from <br>anywhare today!</div>
                                    </div>
                                </div>
                                <div class="slider-caption small">
                                    <div class="inner-layer">
                                        <div data-animation="fade-in-bottom" data-delay="0.7s" data-duration="1s">Everything your taxi business needs is already here! <br>Ridek made for taxi service companies!</div>
                                    </div>
                                </div>
                                <div class="slider-btn">
                                    <a href="book-taxi.php" class="default-btn" data-animation="fade-in-bottom" data-delay="0.9s">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider Arrows -->
            <div class="swiper-nav swiper-next"><i class="las la-long-arrow-alt-right"></i></div>
            <div class="swiper-nav swiper-prev"><i class="las la-long-arrow-alt-left"></i></div>
        </div>
    </div>
    <!--/.slider-section-->

    <section class="booking-section-2">
        <div class="container">
            <div class="row booking-form-2 g-0">
                <div class="col-md-4 d-none d-lg-block">
                    <div class="booking-car-wrap">
                        <div class="booking-car wow fade-in-left" data-wow-delay="200ms"></div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="section-heading mb-30">
                        <h4><span></span>Online Booking</h4>
                        <h2 class="white">Book Your Taxi Ride</h2>
                    </div>
                    <form action="book-ride.php" id="book-taxi-ride">
                        <div class="booking-form">
                            <div class="form-field">
                                <i class="las la-user-tie"></i>
                                <input type="text" id="full-name" name="full-name" class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="form-field">
                                <i class="las la-envelope-open"></i>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-field">
                                <i class="las la-tags"></i>
                                <select name="package-type" id="package-type" class="niceSelect">
                                    <option value="standard">Standard</option>
                                    <option value="business">Business</option>
                                    <option value="economy">Economy</option>
                                    <option value="vip-spacial">VIP Spacial</option>
                                    <option value="comfort">Comfort</option>
                                </select>
                            </div>
                            <div class="form-field">
                                <i class="las la-user-friends"></i>
                                <select name="passengers" id="passengers" class="niceSelect">
                                    <option value="1">1 Person</option>
                                    <option value="2">2 Person</option>
                                    <option value="3">3 Person</option>
                                    <option value="4">4 Person</option>
                                    <option value="5">5 Person</option>
                                </select>
                            </div>
                            <div class="form-field">
                                <i class="las la-map-marker"></i>
                                <input type="text" id="start-dest" name="start-dest" class="form-control" placeholder="Start Destination" required>
                            </div>
                            <div class="form-field">
                                <i class="las la-map-marker"></i>
                                <input type="text" id="end-dest" name="end-dest" class="form-control" placeholder="End Destination" required>
                            </div>
                            <div class="form-field">
                                <i class="las la-calendar"></i>
                                <input type="text" id="ride-date" name="ride-date" class="form-control date-picker" placeholder="Select Date" required>
                            </div>
                            <div class="form-field">
                                <i class="las la-clock"></i>
                                <input type="text" id="ride-time" name="ride-time" class="form-control time-picker" placeholder="Select Time" required>
                            </div>
                            <div class="form-field">
                                <button id="submit" class="default-btn" type="submit">Book Your Taxi</button>
                            </div>
                        </div>
                        <div id="form-messages" class="alert" role="alert"></div>
                    </form><!-- Booking Form -->
                </div>
            </div>
        </div>
    </section>
    <!--/.booking-section-->

    <section class="service-section bg-grey padding">
        <div class="bg-half"></div>
        <div class="container">
            <div class="section-heading text-center mb-40 wow fade-in-bottom" data-wow-delay="200ms">
                <h4><span></span>What We Offer</h4>
                <h2 class="white">Start your journey with<br>Ridek Taxi Company!</h2>
                <p>We successfully cope with tasks of varying complexity, provide long-term <br>guarantees and regularly
                    master new technologies.</p>
            </div>
            <!--/.section-heading-->
            <div class="swiper-outside">
                <div class="service-carousel">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="service-item wow fade-in-bottom" data-wow-delay="200ms">
                                <div class="service-thumb">
                                    <img src="assets/img/service-1.jpg" alt="img">
                                    <div class="service-shape-wrap">
                                        <div class="service-shape"></div>
                                    </div>
                                    <div class="service-car"><img src="assets/img/car-1.png" alt="car"></div>
                                </div>
                                <div class="service-content">
                                    <h3><a href="service-details.php">Regular Transport</a></h3>
                                    <p>Everything your taxi business needs is already here! Ridek made for taxi service
                                        companies!</p>
                                    <a class="read-more" href="service-details.php">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-item wow fade-in-bottom" data-wow-delay="400ms">
                                <div class="service-thumb">
                                    <img src="assets/img/service-2.jpg" alt="img">
                                    <div class="service-shape-wrap">
                                        <div class="service-shape"></div>
                                    </div>
                                    <div class="service-car"><img src="assets/img/car-1.png" alt="car"></div>
                                </div>
                                <div class="service-content">
                                    <h3><a href="service-details.php">Airport Transport</a></h3>
                                    <p>Everything your taxi business needs is already here! Ridek made for taxi service
                                        companies!</p>
                                    <a class="read-more" href="service-details.php">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-item wow fade-in-bottom" data-wow-delay="600ms">
                                <div class="service-thumb">
                                    <img src="assets/img/service-3.jpg" alt="img">
                                    <div class="service-shape-wrap">
                                        <div class="service-shape"></div>
                                    </div>
                                    <div class="service-car"><img src="assets/img/car-1.png" alt="car"></div>
                                </div>
                                <div class="service-content">
                                    <h3><a href="service-details.php">Luggage Transport</a></h3>
                                    <p>Everything your taxi business needs is already here! Ridek made for taxi service
                                        companies!</p>
                                    <a class="read-more" href="service-details.php">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-item">
                                <div class="service-thumb">
                                    <img src="assets/img/service-4.jpg" alt="img">
                                    <div class="service-shape-wrap">
                                        <div class="service-shape"></div>
                                    </div>
                                    <div class="service-car"><img src="assets/img/car-1.png" alt="car"></div>
                                </div>
                                <div class="service-content">
                                    <h3><a href="service-details.php">City Transport</a></h3>
                                    <p>Everything your taxi business needs is already here! Ridek made for taxi service
                                        companies!</p>
                                    <a class="read-more" href="service-details.php">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="service-item">
                                <div class="service-thumb">
                                    <img src="assets/img/service-5.jpg" alt="img">
                                    <div class="service-shape-wrap">
                                        <div class="service-shape"></div>
                                    </div>
                                    <div class="service-car"><img src="assets/img/car-1.png" alt="car"></div>
                                </div>
                                <div class="service-content">
                                    <h3><a href="service-details.php">Business Transport</a></h3>
                                    <p>Everything your taxi business needs is already here! Ridek made for taxi service
                                        companies!</p>
                                    <a class="read-more" href="service-details.php">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div><!-- Carousel Dots -->
                </div>
                <!-- Carousel Arrows -->
                <div class="swiper-nav swiper-next"><i class="las la-long-arrow-alt-right"></i></div>
                <div class="swiper-nav swiper-prev"><i class="las la-long-arrow-alt-left"></i></div>
            </div>
        </div>
    </section>
    <!--/.service-section-->
    <section class="testimonial-section bd-bottom bg-grey">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-heading mb-10">
                        <h4><span></span>Clients Testimonial</h4>
                        <h2>Ridek Passenger Reviews...</h2>
                        <p>We successfully cope with tasks of varying complexity, provide long-term guarantees and regularly master technologies.</p>
                    </div>
                    <div class="swiper-outside testi-pagination">
                        <div class="testimonial-carousel">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testi-item">
                                        <div class="quote-icon"><i class="las la-quote-right"></i></div>
                                        <p>Good to have transportation available in places and times it is otherwise hard to find, but the app has always been a bit difficult to use especially how it works or doesnt with large font phone settings.</p>
                                        <div class="testi-author">
                                            <div class="author-thumb"><img src="assets/img/comment-1.png" alt="author"></div>
                                            <div class="author-info">
                                                <h3>Eredrik Johanson <span>Financial .INC</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-item">
                                        <div class="quote-icon"><i class="las la-quote-right"></i></div>
                                        <p>Good to have transportation available in places and times it is otherwise hard to find, but the app has always been a bit difficult to use especially how it works or doesnt with large font phone settings.</p>
                                        <div class="testi-author">
                                            <div class="author-thumb"><img src="assets/img/comment-1.png" alt="author"></div>
                                            <div class="author-info">
                                                <h3>Eredrik Johanson <span>Financial .INC</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testi-item">
                                        <div class="quote-icon"><i class="las la-quote-right"></i></div>
                                        <p>Good to have transportation available in places and times it is otherwise hard to find, but the app has always been a bit difficult to use especially how it works or doesnt with large font phone settings.</p>
                                        <div class="testi-author">
                                            <div class="author-thumb"><img src="assets/img/comment-1.png" alt="author"></div>
                                            <div class="author-info">
                                                <h3>Eredrik Johanson <span>Financial .INC</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div><!-- Carousel Dots -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-wrap">
                        <div class="section-heading mb-30 wow fade-in-right" data-wow-delay="200ms">
                            <h4 class="white"><span></span>Why Choose Us!</h4>
                            <h2 class="white">Why Ride with Ridek?</h2>
                            <p class="white">We successfully cope with tasks of varying complexity, provide long-term
                                guarantees and regularly master technologies.</p>
                        </div>
                        <!--/.section-heading-->
                        <ul class="ridek-features">
                            <li class="wow fade-in-right" data-wow-delay="300ms">
                                <div class="feature-icon">
                                    <i class="las la-gem"></i>
                                </div>
                                <div class="feature-content">
                                    <h3>Safe Guarantee</h3>
                                    <p>We successfully cope with tasks of <br> varying complexity!</p>
                                </div>
                            </li>
                            <li class="wow fade-in-right" data-wow-delay="400ms">
                                <div class="feature-icon">
                                    <i class="las la-taxi"></i>
                                </div>
                                <div class="feature-content">
                                    <h3>Fast Pickups</h3>
                                    <p>We successfully cope with tasks of <br> varying complexity!</p>
                                </div>
                            </li>
                            <li class="wow fade-in-right" data-wow-delay="500ms">
                                <div class="feature-icon">
                                    <i class="las la-tachometer-alt"></i>
                                </div>
                                <div class="feature-content">
                                    <h3>Quick Ride</h3>
                                    <p>We successfully cope with tasks of <br> varying complexity!</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/.testimonial-section-->


    <section class="cta-section-2 padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="cta-content">
                        <h4>Ridek Taxi Services!</h4>
                        <h2>Feel your journey with Ridek!</h2>
                        <a href="book-taxi.php" class="default-btn">Book a Taxi</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <ul class="check-list">
                        <li><i class="las la-arrow-right"></i>Easy payment systems.</li>
                        <li><i class="las la-arrow-right"></i>Make safety a top priority.</li>
                        <li><i class="las la-arrow-right"></i>First and quick pickups.</li>
                        <li><i class="las la-arrow-right"></i>Access Ridek globally.</li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <div class="cta-men wow fade-in-right" data-wow-delay="200ms"> </div>
                </div>
            </div>
        </div>
    </section>
    <!--/.cta-section-->
    <?php
/*
    <section class="pricing-section bg-grey bd-bottom padding">
        <div class="container">
            <div class="section-heading text-center mb-40 wow fade-in-bottom" data-wow-delay="200ms">
                <h4><span></span>Lets Go With Us!</h4>
                <h2>Choose Your Taxi to Ride!</h2>
                <p>We successfully cope with tasks of varying complexity, provide long-term <br>guarantees and regularly master new technologies.</p>
            </div>
            <!--/.section-heading-->
            <ul class="nav pricing-tab-menu" id="pricing-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="hybrid-taxi" data-bs-toggle="tab" data-bs-target="#hybrid-taxi-content" type="button" role="tab" aria-controls="hybrid-taxi-content" aria-selected="true">Hybrid Taxi</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="town-taxt" data-bs-toggle="tab" data-bs-target="#town-taxi-content" type="button" role="tab" aria-controls="town-taxi-content" aria-selected="false">Town Taxi</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="limousine-taxi" data-bs-toggle="tab" data-bs-target="#limousine-taxi-content" type="button" role="tab" aria-controls="limousine-taxi-content" aria-selected="false">Limousine Taxi</button>
                </li>
            </ul>
            <!--Tab Menu-->
            <div class="tab-content" id="pricing-tab-content">
                <div class="tab-pane fade show active" id="hybrid-taxi-content" role="tabpanel" aria-labelledby="hybrid-taxi">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 sm-padding">
                            <div class="pricing-item">
                                <div class="pricing-head-wrap">
                                    <div class="pricing-car">
                                        <img src="assets/img/pricing-car.png" alt="car">
                                        <div class="price">$2.50/km</div>
                                    </div>
                                </div>
                                <div class="pricing-head">
                                    <h3><a href="taxi-details.php">BMW X5 2008</a></h3>
                                    <span class="location">Chicago</span>
                                </div>
                                <ul class="pricing-list">
                                    <li>Initial Charge: <span>$2.50</span></li>
                                    <li>Per Mile/KM: <span>$4.20</span></li>
                                    <li>Per Stopped Trafic: <span>$1.50</span></li>
                                    <li>Passengers: <span>4 Person</span></li>
                                    <li><a href="book-taxi.php" class="default-btn">Book Taxi Now</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 sm-padding">
                            <div class="pricing-item">
                                <div class="pricing-head-wrap">
                                    <div class="pricing-car">
                                        <img src="assets/img/pricing-car.png" alt="car">
                                        <div class="price">$3.50/km</div>
                                    </div>
                                </div>
                                <div class="pricing-head">
                                    <h3><a href="taxi-details.php">Mercedes‑Benz</a></h3>
                                    <span class="location">Florida</span>
                                </div>
                                <ul class="pricing-list">
                                    <li>Initial Charge: <span>$2.50</span></li>
                                    <li>Per Mile/KM: <span>$4.20</span></li>
                                    <li>Per Stopped Trafic: <span>$1.50</span></li>
                                    <li>Passengers: <span>4 Person</span></li>
                                    <li><a href="book-taxi.php" class="default-btn">Book Taxi Now</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 sm-padding">
                            <div class="pricing-item">
                                <div class="pricing-head-wrap">
                                    <div class="pricing-car">
                                        <img src="assets/img/pricing-car.png" alt="car">
                                        <div class="price">$4.50/km</div>
                                    </div>
                                </div>
                                <div class="pricing-head">
                                    <h3><a href="taxi-details.php">Hyundai 2022</a></h3>
                                    <span class="location">New York</span>
                                </div>
                                <ul class="pricing-list">
                                    <li>Initial Charge: <span>$2.50</span></li>
                                    <li>Per Mile/KM: <span>$4.20</span></li>
                                    <li>Per Stopped Trafic: <span>$1.50</span></li>
                                    <li>Passengers: <span>4 Person</span></li>
                                    <li><a href="book-taxi.php" class="default-btn">Book Taxi Now</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="town-taxi-content" role="tabpanel" aria-labelledby="town-taxi-content">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 sm-padding">
                            <div class="pricing-item">
                                <div class="pricing-head-wrap">
                                    <div class="pricing-car">
                                        <img src="assets/img/pricing-car.png" alt="car">
                                        <div class="price">$2.50/km</div>
                                    </div>
                                </div>
                                <div class="pricing-head">
                                    <h3><a href="taxi-details.php">BMW X5 2008</a></h3>
                                    <span class="location">Chicago</span>
                                </div>
                                <ul class="pricing-list">
                                    <li>Initial Charge: <span>$2.50</span></li>
                                    <li>Per Mile/KM: <span>$4.20</span></li>
                                    <li>Per Stopped Trafic: <span>$1.50</span></li>
                                    <li>Passengers: <span>4 Person</span></li>
                                    <li><a href="book-taxi.php" class="default-btn">Book Taxi Now</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 sm-padding">
                            <div class="pricing-item">
                                <div class="pricing-head-wrap">
                                    <div class="pricing-car">
                                        <img src="assets/img/pricing-car.png" alt="car">
                                        <div class="price">$3.50/km</div>
                                    </div>
                                </div>
                                <div class="pricing-head">
                                    <h3><a href="taxi-details.php">Mercedes‑Benz</a></h3>
                                    <span class="location">Florida</span>
                                </div>
                                <ul class="pricing-list">
                                    <li>Initial Charge: <span>$2.50</span></li>
                                    <li>Per Mile/KM: <span>$4.20</span></li>
                                    <li>Per Stopped Trafic: <span>$1.50</span></li>
                                    <li>Passengers: <span>4 Person</span></li>
                                    <li><a href="book-taxi.php" class="default-btn">Book Taxi Now</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 sm-padding">
                            <div class="pricing-item">
                                <div class="pricing-head-wrap">
                                    <div class="pricing-car">
                                        <img src="assets/img/pricing-car.png" alt="car">
                                        <div class="price">$4.50/km</div>
                                    </div>
                                </div>
                                <div class="pricing-head">
                                    <h3><a href="taxi-details.php">Hyundai 2022</a></h3>
                                    <span class="location">New York</span>
                                </div>
                                <ul class="pricing-list">
                                    <li>Initial Charge: <span>$2.50</span></li>
                                    <li>Per Mile/KM: <span>$4.20</span></li>
                                    <li>Per Stopped Trafic: <span>$1.50</span></li>
                                    <li>Passengers: <span>4 Person</span></li>
                                    <li><a href="book-taxi.php" class="default-btn">Book Taxi Now</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="limousine-taxi-content" role="tabpanel" aria-labelledby="limousine-taxi">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 sm-padding">
                            <div class="pricing-item">
                                <div class="pricing-head-wrap">
                                    <div class="pricing-car">
                                        <img src="assets/img/pricing-car.png" alt="car">
                                        <div class="price">$2.50/km</div>
                                    </div>
                                </div>
                                <div class="pricing-head">
                                    <h3><a href="taxi-details.php">BMW X5 2008</a></h3>
                                    <span class="location">Chicago</span>
                                </div>
                                <ul class="pricing-list">
                                    <li>Initial Charge: <span>$2.50</span></li>
                                    <li>Per Mile/KM: <span>$4.20</span></li>
                                    <li>Per Stopped Trafic: <span>$1.50</span></li>
                                    <li>Passengers: <span>4 Person</span></li>
                                    <li><a href="book-taxi.php" class="default-btn">Book Taxi Now</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 sm-padding">
                            <div class="pricing-item">
                                <div class="pricing-head-wrap">
                                    <div class="pricing-car">
                                        <img src="assets/img/pricing-car.png" alt="car">
                                        <div class="price">$3.50/km</div>
                                    </div>
                                </div>
                                <div class="pricing-head">
                                    <h3><a href="taxi-details.php">Mercedes‑Benz</a></h3>
                                    <span class="location">Florida</span>
                                </div>
                                <ul class="pricing-list">
                                    <li>Initial Charge: <span>$2.50</span></li>
                                    <li>Per Mile/KM: <span>$4.20</span></li>
                                    <li>Per Stopped Trafic: <span>$1.50</span></li>
                                    <li>Passengers: <span>4 Person</span></li>
                                    <li><a href="book-taxi.php" class="default-btn">Book Taxi Now</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 sm-padding">
                            <div class="pricing-item">
                                <div class="pricing-head-wrap">
                                    <div class="pricing-car">
                                        <img src="assets/img/pricing-car.png" alt="car">
                                        <div class="price">$4.50/km</div>
                                    </div>
                                </div>
                                <div class="pricing-head">
                                    <h3><a href="taxi-details.php">Hyundai 2022</a></h3>
                                    <span class="location">New York</span>
                                </div>
                                <ul class="pricing-list">
                                    <li>Initial Charge: <span>$2.50</span></li>
                                    <li>Per Mile/KM: <span>$4.20</span></li>
                                    <li>Per Stopped Trafic: <span>$1.50</span></li>
                                    <li>Passengers: <span>4 Person</span></li>
                                    <li><a href="book-taxi.php" class="default-btn">Book Taxi Now</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Tab Content -->
        </div>
    </section>
    <!--/.pricing-section-->

    <section class="download-section-2 padding">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h4><span></span>Online Booking</h4>
                        <h2>Get the Ridek Mobile app and Start Your Journey!</h2>
                        <p>We successfully cope with tasks of varying complexity, provide long-term guarantees and regularly master technologies.</p>
                        <div class="download-btn">
                            <a href="#"><img src="assets/img/google-play.svg" alt="PlayStore"></a>
                            <a href="#"><img src="assets/img/app-store.svg" alt="AppStore"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-none d-lg-block">
                    <div class="download-mockup wow fade-in-bottom" data-wow-delay="200ms"></div>
                    <div class="app-screen wow fade-in-bottom" data-wow-delay="400ms"><img src="assets/img/mockup-3.png" alt=""></div>
                </div>
            </div>
        </div>
    </section>
    <!--/.download-section-->

    <section class="team-section padding">
        <div class="container">
            <div class="section-heading text-center mb-40 wow fade-in-bottom" data-wow-delay="200ms">
                <h4><span></span>Lets Go With Us!</h4>
                <h2>Our Expert Drivers</h2>
                <p>We successfully cope with tasks of varying complexity, provide long-term <br>guarantees and regularly master new technologies.</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 sm-padding wow fade-in-bottom" data-wow-delay="200ms">
                    <div class="team-item">
                        <div class="team-thumb">
                            <img src="assets/img/team-1.jpg" alt="thumb">
                        </div>
                        <div class="team-content">
                            <h3><a href="driver-details.php">Félix Lengyel</a></h3>
                            <h4>BMW X5 2008</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-padding wow fade-in-bottom" data-wow-delay="300ms">
                    <div class="team-item">
                        <div class="team-thumb">
                            <img src="assets/img/team-2.jpg" alt="thumb">
                        </div>
                        <div class="team-content">
                            <h3><a href="driver-details.php">Henry Nathan</a></h3>
                            <h4>Mercedes‑Benz</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-padding wow fade-in-bottom" data-wow-delay="400ms">
                    <div class="team-item">
                        <div class="team-thumb">
                            <img src="assets/img/team-3.jpg" alt="thumb">
                        </div>
                        <div class="team-content">
                            <h3><a href="driver-details.php">Brandon Larned</a></h3>
                            <h4>Hyundai 2022</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-padding wow fade-in-bottom" data-wow-delay="500ms">
                    <div class="team-item">
                        <div class="team-thumb">
                            <img src="assets/img/team-4.jpg" alt="thumb">
                        </div>
                        <div class="team-content">
                            <h3><a href="driver-details.php">Sasha Hostyn</a></h3>
                            <h4>Toyota XCorola</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/.team-section-->
*/
?>

    
</main>

<?php include('includes/footer.php'); ?>
