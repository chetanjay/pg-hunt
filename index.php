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
    <link rel="stylesheet" href="css/index.css" />
    <title>Document</title>
    
</head>
<body id="k1">
    <div class="main-body">
        <div class="main-content">
            <div class="navbar">
                <div class="logo-part"> 
                    <div class="logo"><a href="index.php"><img src="img/home-logo-01.png"></a></div>
                </div>
                <div class="search-part">
                </div>
                <div class="city-selection-modal">
                    <div class="modal1" >
                        <div class="us2">
                        <?php
                        session_start();
                            if(isset($_COOKIE['city']))
                            {
                                echo $_COOKIE['city'];
                            }
                            else
                            {
                                echo "mumbai";
                            }
                            ?>
                        </div>
                        <div class="us"><i class="fa-solid fa-location-arrow"></i></div>
                    </div>
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
            <?php
                if(isset($_COOKIE['count']))
                {
                    $l = (int)$_COOKIE['count'];        
                    for($p = 0; $p<= $l; $p++)
                    {
                        $temp = strval($p);
                        $data = json_decode($_COOKIE[$temp], true);
                        // echo $data['name'];
                    include "include/property_card.php";
                    }
                }
                else
                {
                include "include/default.php";
                }
            ?>
            </div>
            <div class="layer">
                <div class="cover">
                    <div class="signup">
                        <div class="signup-title"><h3>Signup</h3></div>
                        <div class="signupcontent">
                            <form method="post" id="signup-form" target="api/toSignup.php">
                                <div class="box"><input type="text" name="name" id="name" placeholder="Full Name"/></div>
                                <div class="box"><input type="text" name="email" id="email" placeholder="Email" /></div>
                                <div class="box"><input type="text" name="phone" id="phone" placeholder="Phone Number" /></div>
                                <div class="box"><input type="text" name="college" id="college" placeholder="College"/></div>
                                <div class="box"><input type="password" name="password" id="password" placeholder="Password" /></div>
                                <div class="gender-blender">
                                <p>Gender</P><p>Male</p><input type="radio" name="gender" id="male" value="male"/>
                                    <p>Female</p><input type="radio" name="gender" id="female" value="female">
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
                        <div class="box"><input type="text" name="email" id="email" placeholder="Email"/></div>
                        <div class="box"><input type="password" name="password" id="password" placeholder="Password" /></div>
                        <div class="submit-box"><button>Login</button></div>
                    </form>
                <div class="to-signup"><button class="B1">Don't have an account? click here</button></div>
                </div>
            </div>
        </div>
    </div>
    <div class="city-modal">
        <div class="city-cover">
            <div class="cities">
                <div class="city-title">
                    <div id="title-box"><h3>Select City</h3></div>
                    <div class="closebtn-box"><span id="clsbtn" aria-hidden="true">&times;</span></div>
                </div>
                <div class="search-box">
                        <div>
                            <input type="search" id="search" name="search" placeholder="Search City"  onkeyup="searchFunction()">
                        </div>
                </div>
                <div class="city-template">
                    <form method="post" action="api/city.php" class="citys"></form>
                        <div class="cityimg">
                            <img src="img/gate.jpg" alt=""  id="mumbai" onclick="demo(this.id)">
                            <p>Mumbai</p>
                        </div>
                        <div class="cityimg" >
                            <img src="img/gate.jpg" alt="" id="bilaspur" onclick="demo(this.id)"/>
                            <p>Bilaspur</p>
                        </div>
                        <div class="cityimg">
                            <img src="img/gate.jpg" alt="" id="raipur" onclick="demo(this.id)">
                            <p>Raipur</p>
                        </div>
                        <div class="cityimg">
                            <img src="img/gate.jpg" alt="" id="delhi" onclick="demo(this.id)">
                            <p>Delhi</p>
                        </div>
                        <div class="cityimg">
                            <img src="img/gate.jpg" alt="" id="rajghar" onclick="demo(this.id)">
                            <p>Rajghar</p>
                        </div>
                        <div class="cityimg">
                            <img src="img/gate.jpg" alt="" id="korba" onclick="demo(this.id)">
                            <p>Korba</p>
                        </div>
                        <div class="cityimg">
                            <img src="img/gate.jpg" alt="" id="ambikapur" onclick="demo(this.id)"/>
                            <p>Ambikapur</p>
                        </div>
                        <div class="cityimg">
                            <img src="img/gate.jpg" alt="" id="rajnandgav" onclick="demo(this.id)">
                            <p>Rajnandgav</p>
                        </div>
                        <span><h3 id="others">Other Cities</h3></span>
                        <div class="citylist">
                            <p>Korea</p>
                        </div> 
                        <div class="citylist">
                            <p>Mahasamund</p>
                        </div> 
                        <div class="citylist">
                            <p>Kanker</p>
                        </div>
                        <div class="citylist">
                            <p>Korea</p>
                        </div> 
                        <div class="citylist">
                            <p>Mahasamund</p>
                        </div> 
                        <div class="citylist">
                            <p>Kanker</p>
                        </div>
                </div>
                
            <div class="loading">
                <div class="center">
                    <div class="wave"></div>
                    <div class="wave"></div>
                    <div class="wave"></div>
                    <div class="wave"></div>
                    <div class="wave"></div>
                    <div class="wave"></div>
                    <div class="wave"></div>
                    <div class="wave"></div>
                    <div class="wave"></div>
                    <div class="wave"></div>
                  </div>                  
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/modal.js"></script>
    <script type="text/javascript" src="js/cityModal.js"></script>
    <script type="text/javascript" src="js/city.js"></script>
    <script type="text/javascript" src="js/property.js"></script>
    <script type="text/javascript" src="js/search.js"></script>
    <script type="text/javascript" src="js/user.js"></script>
    <script type="text/javascript" src="js/logoutRequest.js"></script>
</body>
</html>