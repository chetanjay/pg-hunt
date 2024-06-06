<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Arima+Madurai:wght@700&display=swap" rel="stylesheet">
    <title>dashboard</title>
</head>
<body>
    <div class="main-body">
        <div class="header">
            <div class="logo-section">
                <div class="logo"><a href="index.html"></a><img src="img/home-logo-01.png"></a></div>
            </div>
            <div class="blank-space"></div>
            <div class="logout-section">
                <div class="logout">
                    <p>Logout</p>
                </div>
            </div>
        </div>
        <div class="content-part">
            <div class="main-content">
                <div class="MyProfile_text">
                    <p>My Profile</p>
                </div>
                <div class="Profile-content">
                    <div class="profile_pic"><img src="img/profile-icon.png"></div>
                    <div class="profile_details">
                        <div class="dets" id="prof_name">
                            <input id="i1" type="text" >
                            <button id="b1">Save</button>
                            <button id="c1">Cancel</button>    
                           <p id="n1"> <?php session_start() ; echo $_SESSION['name']; ?></p>
                            <div class="edit" id ="e1"><img src="img/edit.png" height="20px" width="20px" /></div>
                        </div>
                        <div class="dets" id="prof_email"><?php echo $_SESSION['email']; ?></div>
                        <div class="dets"  id="prof_contact-no">
                        <input id="i2" type="text" >
                            <button id="b2">Save</button>
                            <button id="c2">Cancel</button> 
                            <p id="n2"><?php echo $_SESSION['phone']; ?></p>
                            <div id="e2" class="edit"><img src="img/edit.png" height="20px" width="20px" /></div>  
                        </div>
                        <div class="dets" id="prof_college">
                            <input id="i3" type="text" >
                            <button id="b3">Save</button>
                            <button id="c3">Cancel</button>
                            <p id="n3"><?php echo $_SESSION['college']; ?></p>
                            <div id="e3" class="edit"><img src="img/edit.png" height="20px" width="20px" /></div>  
                        </div>
                        <div class="prof_gender-part">
                            <div class="prpf_gender"></</div>
                                <div class="edit-profile-part">
                                    <div class="edit-profile">
                                        <p id=pc>
                                            Change Password
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="password_change">
                <form class="change_password" method="post">
                    <input type="password" name="current_password" id="current_password" placeholder="current password" />
                    <input type="password" name="new_password" id="new_password"  placeholder="new password" />
                    <input type="password" name="confirm_password" id="confirm_password" placeholder="confirm password" />
                    <input type="submit" value="submit" id="s1">
                </form> 
                <button id="cancel-request" >Cancel</button>   
            </div>
        </div>
        <div class="footer">
            <div class="footer-container">
                <div class="copyright-part">© Copyright </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/logoutRequest.js"></script>
    <script type="text/javascript" src="js/dashboard.js"></script>
    <script type="text/javascript" src="js/changes.js"></script>
</body>
</html>