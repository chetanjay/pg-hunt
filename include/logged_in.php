                <!-- <div class="background-cover">
                        <img src="img/abstract-blue-modern-background-template.jpg" alt="">
                        <div class="profile">
                            <img src="img/user.png" alt="">
                        </div>
                    </div>
                    <div class="User-name">
                        <h3>
                            <?php
                                // echo $_SESSION['name'];
                            ?>
                        </h3>
                    </div>
                    <div class="to-dashboard">
                        <button id="dashboard" ><a href="dashboard.php" >dashboard</a></button>
                </div> -->

<div class="dropdown">
            <button class="dropbtn"></button>
            
    <div class="dropdown-content">
            <h3><?php
                echo $_SESSION['name'];
                ?>
            </h3>
        <div><a href="dashboard.php">Dashboard</a></div>
        <div class="logout">
            <p>Logout</p>
        </div>
    </div>
</div>