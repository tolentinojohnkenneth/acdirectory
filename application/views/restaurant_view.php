<!DOCTYPE HTML>
<html lang="en">
    
<head>
        <!--=============== basic  ===============-->
        <?= $header; ?>
        <!--=============== css  ===============-->
    </head>
    <body>
        <!--loader-->
        <div class="loader-wrap">
            <div class="pin"></div>
            <div class="pulse"></div>
        </div>
        <!--loader end-->
        <!-- Main  -->
        <div id="main">
            <!-- header-->
            <?= $header_nav; ?>
            <!--  header end -->
            <!-- wrapper -->
            <div id="wrapper">
                <div class="content">
                    <!-- Map -->
                    <div class="map-container column-map right-pos-map">
                        <div id="map-main"></div>
                        <ul class="mapnavigation">
                            <li><a href="#" class="prevmap-nav">Prev</a></li>
                            <li><a href="#" class="nextmap-nav">Next</a></li>
                        </ul>
                    </div>
                    <!-- Map end -->
                    <!--col-list-wrap -->
                    <div class="col-list-wrap left-list">
                        <div class="listsearch-options fl-wrap" id="lisfw" >
                            <div class="container">
                                <div class="listsearch-header fl-wrap">
                                    <h3>Results For : <span>Restaurants</span></h3>
                                    <div class="listing-view-layout">
                                        <ul>
                                            <li><a class="grid active" href="#"><i class="fa fa-th-large"></i></a></li>
                                            <li><a class="list" href="#"><i class="fa fa-list-ul"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- listsearch-input-wrap  -->
                                <div class="listsearch-input-wrap fl-wrap">
                                    <div class="listsearch-input-item">
                                        <i class="mbri-key single-i"></i>
                                        <input type="text" placeholder="Keywords?" value=""/>
                                    </div>
                                    <div class="listsearch-input-item">
                                        <select data-placeholder="Location" class="chosen-select" >
                                            <option>All Locations</option>
                                            <option>Bronx</option>
                                            <option>Brooklyn</option>
                                            <option>Manhattan</option>
                                            <option>Queens</option>
                                            <option>Staten Island</option>
                                        </select>
                                    </div>
                                    <div class="listsearch-input-item">
                                        <select data-placeholder="All Categories" class="chosen-select" >
                                            <option>All Categories</option>
                                            <option>Shops</option>
                                            <option>Hotels</option>
                                            <option>Restaurants</option>
                                            <option>Fitness</option>
                                            <option>Events</option>
                                        </select>
                                    </div>
                                    <div class="listsearch-input-text">
                                        <label><i class="mbri-map-pin"></i> Enter Address </label>
                                        <input type="text" placeholder="Destination , Area , Street" class="qodef-archive-places-search" value=""/>
                                        <span   class="loc-act qodef-archive-current-location"><i class="fa fa-dot-circle-o"></i></span>
                                    </div>
                                    <!-- hidden-listing-filter -->
                                    <div class="hidden-listing-filter fl-wrap">
                                        <div class="distance-input fl-wrap">
                                            <div class="distance-title"> Radius around selected destination <span></span> km</div>
                                            <div class="distance-radius-wrap fl-wrap">
                                                <input class="distance-radius rangeslider--horizontal" type="range" min="1" max="100" step="1" value="1" data-title="Radius around selected destination">
                                            </div>
                                        </div>
                                        <!-- Checkboxes -->
                                        <div class=" fl-wrap filter-tags">
                                            <h4>Filter by Tags</h4>
                                            <input id="check-aa" type="checkbox" name="check">
                                            <label for="check-aa">Elevator in building</label>
                                            <input id="check-b" type="checkbox" name="check">
                                            <label for="check-b">Friendly workspace</label>
                                            <input id="check-c" type="checkbox" name="check">
                                            <label for="check-c">Instant Book</label>
                                            <input id="check-d" type="checkbox" name="check">
                                            <label for="check-d">Wireless Internet</label>
                                        </div>
                                    </div>
                                    <!-- hidden-listing-filter end -->
                                    <button class="button fs-map-btn">Update</button>
                                    <div class="more-filter-option">More Filters <span></span></div>
                                </div>
                                <!-- listsearch-input-wrap end -->
                            </div>
                        </div>
                        <!-- list-main-wrap-->
                        <div class="list-main-wrap fl-wrap card-listing">
                            <a class="custom-scroll-link back-to-filters btf-l" href="#lisfw"><i class="fa fa-angle-double-up"></i><span>Back to Filters</span></a>
                            <div class="container">
                                <!-- listing-item -->
                                <div class="listing-item">
                                    <article class="geodir-category-listing fl-wrap">
                                        <div class="geodir-category-img">
                                            <img src="assets/frontend-assets/images/restaurants/fortune.jpg" alt="">
                                            <div class="overlay"></div>
                                            <div class="list-post-counter"><span>4</span><i class="fa fa-heart"></i></div>
                                        </div>
                                        <div class="geodir-category-content fl-wrap">
                                            <a class="listing-geodir-category" href="#">Restourants</a>
                                            <div class="listing-avatar"><a href="author-single.php"><img src="assets/frontend-assets/images/avatar/5.jpg" alt=""></a>
                                                <span class="avatar-tooltip">Added By  <strong>Lisa Smith</strong></span>
                                            </div>
                                            <h3><a href="Fortune_Hongkong_Seafood_Restaurant">Fortune Hongkong Seafood Restaurant</a></h3>
                                            <p>Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales, sed lobortis est placerat.</p>
                                            <div class="geodir-category-options fl-wrap">
                                                <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                                    <span>(7 reviews)</span>
                                                </div>
                                                <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>305 McArthur Highway, Diamond Subd, Balibago, Angeles City</a></div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <!-- listing-item end-->
                                <!-- listing-item -->
                                <div class="listing-item">
                                    <article class="geodir-category-listing fl-wrap">
                                        <div class="geodir-category-img">
                                            <img src="assets/frontend-assets/images/restaurants/dainty.jpg" alt="">
                                            <div class="overlay"></div>
                                            <div class="list-post-counter"><span>15</span><i class="fa fa-heart"></i></div>
                                        </div>
                                        <div class="geodir-category-content fl-wrap">
                                            <a class="listing-geodir-category" href="#">Restaurants</a>
                                            <div class="listing-avatar"><a href="author-single.php"><img src="assets/frontend-assets/images/avatar/2.jpg" alt=""></a>
                                                <span class="avatar-tooltip">Added By  <strong>Mark Rose</strong></span>
                                            </div>
                                            <h3><a href="Dainty_Asian_Cuisine">Dainty Asian Cuisine</a></h3>
                                            <p>Morbi suscipit erat in diam bibendum rutrum in nisl. Aliquam et purus ante.</p>
                                            <div class="geodir-category-options fl-wrap">
                                                <div class="listing-rating card-popup-rainingvis" data-starrating2="4">
                                                    <span>(17 reviews)</span>
                                                </div>
                                                <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>Mr. Cheng Building, McArthur Highway, Balibago, Angeles City</a></div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <!-- listing-item end-->
                                <div class="clearfix"></div>
                                <!-- listing-item -->
                                <div class="listing-item">
                                    <article class="geodir-category-listing fl-wrap">
                                        <div class="geodir-category-img">
                                            <img src="assets/frontend-assets/images/restaurants/koko.jpg" alt="">
                                            <div class="overlay"></div>
                                            <div class="list-post-counter"><span>553</span><i class="fa fa-heart"></i></div>
                                        </div>
                                        <div class="geodir-category-content fl-wrap">
                                            <a class="listing-geodir-category" href="listing.php">Restaurants</a>
                                            <div class="listing-avatar"><a href="author-single.php"><img src="assets/frontend-assets/images/avatar/3.jpg" alt=""></a>
                                                <span class="avatar-tooltip">Added By  <strong>Adam Koncy</strong></span>
                                            </div>
                                            <h3><a href="Koko_Buri">Koko Buri</a></h3>
                                            <p>Sed non neque elit. Sed ut imperdie.</p>
                                            <div class="geodir-category-options fl-wrap">
                                                <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                                    <span>(7 reviews)</span>
                                                </div>
                                                <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> 27th Brooklyn New York, NY 10065</a></div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <!-- listing-item end-->
                                <!-- listing-item -->
                                <div class="listing-item">
                                    <article class="geodir-category-listing fl-wrap">
                                        <div class="geodir-category-img">
                                            <img src="assets/frontend-assets/images/all/20.jpg" alt="">
                                            <div class="overlay"></div>
                                            <div class="list-post-counter"><span>47</span><i class="fa fa-heart"></i></div>
                                        </div>
                                        <div class="geodir-category-content fl-wrap">
                                            <a class="listing-geodir-category" href="listing.php">Fitness</a>
                                            <div class="listing-avatar"><a href="author-single.php"><img src="assets/frontend-assets/images/avatar/4.jpg" alt=""></a>
                                                <span class="avatar-tooltip">Added By  <strong>Alisa Noory</strong></span>
                                            </div>
                                            <h3><a href="listingsingle">Gym in the Center</a></h3>
                                            <p>Mauris in erat justo. Nullam ac urna eu. </p>
                                            <div class="geodir-category-options fl-wrap">
                                                <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                                    <span>(23 reviews)</span>
                                                </div>
                                                <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> 27th Brooklyn New York, NY 10065</a></div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <!-- listing-item end-->
                                <div class="clearfix"></div>
                                <!-- listing-item -->
                                <div class="listing-item">
                                    <article class="geodir-category-listing fl-wrap">
                                        <div class="geodir-category-img">
                                            <img src="assets/frontend-assets/images/all/5.jpg" alt="">
                                            <div class="overlay"></div>
                                            <div class="list-post-counter"><span>3</span><i class="fa fa-heart"></i></div>
                                        </div>
                                        <div class="geodir-category-content fl-wrap">
                                            <a class="listing-geodir-category" href="listing.php">Shops</a>
                                            <div class="listing-avatar"><a href="author-single.php"><img src="assets/frontend-assets/images/avatar/1.jpg" alt=""></a>
                                                <span class="avatar-tooltip">Added By  <strong>Nasty Wood</strong></span>
                                            </div>
                                            <h3><a href="listingsingle">Shop in Boutique Zone</a></h3>
                                            <p>Morbiaccumsan ipsum velit tincidunt . </p>
                                            <div class="geodir-category-options fl-wrap">
                                                <div class="listing-rating card-popup-rainingvis" data-starrating2="4">
                                                    <span>(6 reviews)</span>
                                                </div>
                                                <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> 27th Brooklyn New York, NY 10065</a></div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <!-- listing-item end-->
                                <!-- listing-item -->
                                <div class="listing-item">
                                    <article class="geodir-category-listing fl-wrap">
                                        <div class="geodir-category-img">
                                            <img src="assets/frontend-assets/images/all/23.jpg" alt="">
                                            <div class="overlay"></div>
                                            <div class="list-post-counter"><span>35</span><i class="fa fa-heart"></i></div>
                                        </div>
                                        <div class="geodir-category-content fl-wrap">
                                            <a class="listing-geodir-category" href="listing.php">Hotels</a>
                                            <div class="listing-avatar"><a href="author-single.php"><img src="assets/frontend-assets/images/avatar/6.jpg" alt=""></a>
                                                <span class="avatar-tooltip">Added By  <strong>Kliff Antony</strong></span>
                                            </div>
                                            <h3><a href="listingsingle">Luxary Hotel</a></h3>
                                            <p>Lorem ipsum gravida nibh vel velit.</p>
                                            <div class="geodir-category-options fl-wrap">
                                                <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                                    <span>(11 reviews)</span>
                                                </div>
                                                <div class="geodir-category-location"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> 27th Brooklyn New York, NY 10065</a></div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <!-- listing-item end-->
                            </div>
                            <a class="load-more-button" href="#">Load more <i class="fa fa-circle-o-notch"></i> </a>
                        </div>
                        <!-- list-main-wrap end-->
                    </div>
                    <!--col-list-wrap -->
                    <div class="limit-box fl-wrap"></div>
                    <!--section -->
                    <section class="gradient-bg">
                        <div class="cirle-bg">
                            <div class="bg" data-bg="images/bg/circle.png"></div>
                        </div>
                        <div class="container">
                            <div class="join-wrap fl-wrap">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h3>Join our online community</h3>
                                        <p>Grow your marketing and be happy with your online business</p>
                                    </div>
                                    <div class="col-md-4"><a href="#" class="join-wrap-btn modal-open">Sign Up <i class="fa fa-sign-in"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--section end -->
                </div>
                <!--content end -->
            </div>
            <!-- wrapper end -->
            <!--footer -->
                <?= $footer; ?>
            <!--footer end  -->
            <!--register form -->
            <div class="main-register-wrap modal">
                <div class="main-overlay"></div>
                <div class="main-register-holder">
                    <div class="main-register fl-wrap">
                        <div class="close-reg"><i class="fa fa-times"></i></div>
                        <h3>Sign In <span>City<strong>Book</strong></span></h3>
                        <div class="soc-log fl-wrap">
                            <p>For faster login or register use your social account.</p>
                            <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with Facebook</a>
                            <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with Twitter</a>
                        </div>
                        <div class="log-separator fl-wrap"><span>or</span></div>
                        <div id="tabs-container">
                            <ul class="tabs-menu">
                                <li class="current"><a href="#tab-1">Login</a></li>
                                <li><a href="#tab-2">Register</a></li>
                            </ul>
                            <div class="tab">
                                <div id="tab-1" class="tab-content">
                                    <div class="custom-form">
                                        <form method="post"  name="registerform">
                                            <label>Username or Email Address * </label>
                                            <input name="email" type="text"   onClick="this.select()" value="">
                                            <label >Password * </label>
                                            <input name="password" type="password"   onClick="this.select()" value="" >
                                            <button type="submit"  class="log-submit-btn"><span>Log In</span></button>
                                            <div class="clearfix"></div>
                                            <div class="filter-tags">
                                                <input id="check-a" type="checkbox" name="check">
                                                <label for="check-a">Remember me</label>
                                            </div>
                                        </form>
                                        <div class="lost_password">
                                            <a href="#">Lost Your Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab">
                                    <div id="tab-2" class="tab-content">
                                        <div class="custom-form">
                                            <form method="post"   name="registerform" class="main-register-form" id="main-register-form2">
                                                <label >First Name * </label>
                                                <input name="name" type="text"   onClick="this.select()" value="">
                                                <label>Second Name *</label>
                                                <input name="name2" type="text"  onClick="this.select()" value="">
                                                <label>Email Address *</label>
                                                <input name="email" type="text"  onClick="this.select()" value="">
                                                <label >Password *</label>
                                                <input name="password" type="password"   onClick="this.select()" value="" >
                                                <button type="submit"     class="log-submit-btn"  ><span>Register</span></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--register form end -->
        </div>
        <!-- Main end -->
        <?= $js_footer ?>
    </body>

</html>