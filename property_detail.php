<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/common.css" />
    <link rel="stylesheet" href="css/animation.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <script src="https://kit.fontawesome.com/5de0508e11.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/property_detail.css" />
    <link rel="stylesheet" href="css/property_detail_media.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <title>Document</title>
</head>
<body id="k1">
    <?php
    session_start();
        $trial = $_GET['propertyind'];
        $cookie_name = 'fetch';
        if(!isset($_COOKIE['fetch']))
        {
            setcookie($cookie_name, $trial, time() + (60 * 60 * 24)); 
            // $_COOKIE['fetch'] = $trial;
            // echo $_COOKIE['fetch'];
        }
    include "api/setProperty.php";
    // echo $_COOKIE['msg'];
        $tempdata = json_decode($_COOKIE[$trial], true); 
    ?> 
    <div class="main-body">
        <div class="main-content">
            <div class="navbar">
                <div class="logo-part"> 
                    <div class="logo"><a href="index.php"><img src="img/home-logo-01.png"></a></div>
                </div>
                <div class="search-part">
                </div>
                <div class="city-selection-modal">
                </div>
                <div class="user-modal">
                    <?php
                        if(isset($_SESSION['name']))
                        {
                            include "include/logged_in.php";
                        }
                        else
                        {
                            include "include/login.php";
                        }
                    ?>
                </div>
            </div>
            <div class="content">
                <div class="image-slider">
                    <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <img src="<?php echo $tempdata['image']; ?>" alt="image not found" />
                            </div>
                            <div class="swiper-slide">
                                <img src="img/properties/1/46ebbb537aa9fb0a.jpg" />
                            </div>
                            <div class="swiper-slide">
                                <img src="img/properties/1/eace7b9114fd6046.jpg" />
                            </div>
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>
        
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
        
                    </div>
                </div>
                <div class="property">
                    <div class="property-details">
                        <div>
                            <div class="star-container" title="4.8">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="interested-container">
                                <i class="is-interested-image far fa-heart"></i>
                                <div class="interested-text">
                                    <span class="interested-user-count">6</span> interested
                                </div>
                            </div>
                        </div>
                        <div id="address">
                            <h2><?php echo $tempdata['name']; ?></h2>
                            <p><?php echo $tempdata['address']; ?></p>
                        </div>
                        <div id="gender">
                            <img src="img/unisex.png" />
                        </div>
                        <div class="price">
                            <div>
                                <h3><?php echo $tempdata['price']; ?>/-</h3>
                                <p>per months</p>
                            </div>
                            <button class="Button">Book Now</button>
                        </div>
                    </div>
                </div>
                   
                <div class="map-section">
                <iframe src="<?php  echo $tempdata['map']?>" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="amenities">
                    <div class="amenities-details">
                        <div class="amenities-title">
                            <h2>Amenities</h2>
                        </div>
                        <div class="amenities-list">
                            <div>
                                <div class="amenities-header">Building</div>
                                <div class="amenity-container">
                                    <img src="img/amenities/powerbackup.svg">
                                    <span>Power backup</span>
                                </div>
                                <div class="amenity-container">
                                    <img src="img/amenities/lift.svg">
                                    <span>Lift</span>
                                </div>
                            </div>
                            <div>
                                <div class="amenities-header">Common Area</div>
                                <div class="amenity-container">
                                    <img src="img/amenities/wifi.svg">
                                    <span>Wifi</span>
                                </div>
                                <div class="amenity-container">
                                    <img src="img/amenities/tv.svg">
                                    <span>TV</span>
                                </div>
                                <div class="amenity-container">
                                    <img src="img/amenities/rowater.svg">
                                    <span>Water Purifier</span>
                                </div>
                                <div class="amenity-container">
                                    <img src="img/amenities/dining.svg">
                                    <span>Dining</span>
                                </div>
                                <div class="amenity-container">
                                    <img src="img/amenities/washingmachine.svg">
                                    <span>Washing Machine</span>
                                </div>
                            </div>
                            <div>
                                <div class="amenities-header">Bedroom</div>
                                <div class="amenity-container">
                                    <img src="img/amenities/bed.svg">
                                    <span>Bed with Matress</span>
                                </div>
                                <div class="amenity-container">
                                    <img src="img/amenities/ac.svg">
                                    <span>Air Conditioner</span>
                                </div>
                            </div>
                            <div>
                                <div class="amenities-header">Washroom</div>
                                <div class="amenity-container">
                                    <img src="img/amenities/geyser.svg">
                                    <span>Geyser</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="review">
                    <div class="property-about page-container">
                        <h1>About the Property</h1>
                        <p>Furnished studio apartment - share it with close friends! Located in posh area of Bijwasan in Delhi, this house is available for
                            both boys and girls. Go for a private room or opt for a shared one and make it your own abode. Go out with your new friends
                            - catch a movie at the nearest cinema hall or just chill in a cafe which is not even 2 kms away. Unwind with your flatmates after
                            a long day at work/college. With a common living area and a shared kitchen, make your own FRIENDS moments. After all, there's always
                            a Joey with unlimited supply of food. Remember, all it needs is one crazy story to convert a roomie into a BFF. What's nearby/Your
                            New Neighborhood 4.0 Kms from Dwarka Sector- 21 Metro Station.
                        </p>
                    </div>
                </div>
        
        
                <div class="review-section">
                    <div class="property-rating">
                        <div class="rating-heading">
                            <h2>Property Rating</h2>
                        </div>
                        <div class="rating-categories">
                            <div id="rating">
                                <div class="rating-criteria row">
                                    <div class="col-6">
                                        <i class="rating-criteria-icon fas fa-broom"></i>
                                        <span class="rating-criteria-text">Cleanliness</span>
                                    </div>
                                    <div class="rating-criteria-star-container col-6" title="4.3">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
        
                                <div class="rating-criteria row">
                                    <div class="col-6">
                                        <i class="rating-criteria-icon fas fa-utensils"></i>
                                        <span class="rating-criteria-text">Food Quality</span>
                                    </div>
                                    <div class="rating-criteria-star-container col-6" title="3.4">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
        
                                <div class="rating-criteria row">
                                    <div class="col-6">
                                        <i class="rating-criteria-icon fa fa-lock"></i>
                                        <span class="rating-criteria-text">Safety</span>
                                    </div>
                                    <div class="rating-criteria-star-container col-6" title="4.8">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="rating-circle">
                                    <div class="total-rating">4.2</div>
                                    <div class="rating-circle-star-container" id="stars">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
        
                <div class="comment-section">
                    <div class="comments-heading">
                        <h2>What people say</h2>
                    </div>
        
                    <div class="user-testemonial-card">
                        <div class="user-image">
                            <img src="img/man.png" />
                        </div>
                        <div class="comment">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            <p>You just have to arrive at the place, it's fully
                                furnished and stocked with all basic amenities and
                                services and even your friends are welcome.
                            </p>
                        </div>
                        <div class="user-name">
                            <p>- Ashutosh Gowariker</p>
                        </div>
                    </div>
        
                    <div class="user-testemonial-card">
                        <div class="user-image">
                            <img src="img/man.png" />
                        </div>
                        <div class="comment">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            <p>You just have to arrive at the place, it's fully
                                furnished and stocked with all basic amenities and
                                services and even your friends are welcome.
                            </p>
                        </div>
                        <div class="user-name">
                            <p>- Karan Johar</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="layer">
                <div class="cover">
                    <div class="signup">
                        <div class="signup-title"><h3>Signup</h3></div>
                        <div class="signupcontent">
                            <form method="post" id="signup-form">
                                <div class="box"><input type="text" name="name" id="name" placeholder="Full Name"/></div>
                                <div class="box"><input type="text" name="email" id="email1" placeholder="Email" /></div>
                                <div class="box"><input type="text" name="phone" id="phone" placeholder="Phone Number" /></div>
                                <div class="box"><input type="text" name="college" id="college" placeholder="College"/></div>
                                <div class="box"><input type="password" name="password" id="password1" placeholder="Password" /></div>
                                <div class="gender-blender">
                                    <p>i'm Male</p><input type="radio" name="gender" id="male" value="Male"/>
                                    <p>Female</p><input type="radio" name="gender" id="female" value="Female">
                                </div>
                                <div class="signup-submit"><button id="B3">Signup</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- here -->
    </div>
    <div class="modal-part">
        <div class="modal">
            <div class="login">
            <div class="login-title"><h4>Login</h4></div>
                <div class="logincontent">
                    <form method="post" id="login-form" action = "api/toLogin.php"  >
                        <div class="box"><input type="text" name="email" id="email" placeholder="Email"  /></div>
                        <div class="box"><input type="password" name="password" id="password" placeholder="Password" /></div>
                        <div class="submit-box"><button>Login</button></div>
                    </form>
                <div class="to-signup"><button class="B1">Don't have an account? click here</button></div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/modal.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            loop: true,

            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

        });
    </script>
    <script type="text/javascript" src="js/logoutRequest.js"></script>
</body>
</html>