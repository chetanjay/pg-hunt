
    <div class="card">
    <div class="property-img">
        <img src="<?php echo $data['image'];?>" alt="">
    </div>
    <div class="description">
        <div>
            <div class="star-container" title="4.5">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="interested-container">
                <i class="far fa-heart"></i>
                <p class="interested-text">3 interested</p>
            </div>
        </div>
        <div style="flex-direction: column; height:55px" id="ad">
            <h5 class="property-name">
                <?php echo $data['name'];?>
            </h5>
            <p class="address"  ><?php echo $data['address'];?></p>
        </div>
        <div class="gender"><img src="img/male.png" /></div>
        <div style="flex-direction:row ; " class="pricing">
            <div><h5 class="price"><?php echo $data['price'];?>/-</h5><p class="price">per month</p></div>
            <form class="propertyDetail" method="get" action="property_detail.php">
                <input type="radio" class="t1" name="propertyind" value="<?php echo $temp;?>" checked  >
                <input type="submit" value="View" class="btn">
                <!-- <div><?php // echo $temp;?></div> -->
            </form>
            <!-- <button  class="btn" id="<?//php echo $temp;?>" onclick="setProperty(this.id)">view</button> -->
        </div>
        <form method="get" action="api/setProperty.php" class="propertys"></form>
    </div>
</div>