<?php
        include 'header.php';

        $q = "SELECT * FROM `product`";
        $run = mysqli_query($con, $q);
        $count = mysqli_num_rows($run);

        $q1 = "SELECT * FROM `pro_type`";
        $run1 = mysqli_query($con, $q1);
        $count1 = mysqli_num_rows($run1);

        $q2 = "SELECT * FROM `pro_color`";
        $run2 = mysqli_query($con, $q2);
        $count2 = mysqli_num_rows($run2);

        $q3 = "SELECT * FROM `pro_gender`";
        $run3 = mysqli_query($con, $q3);
        $count3 = mysqli_num_rows($run3);
        ?>


<section class="hero-section d-flex justify-content-center align-items-center " id="section_1" >

<!-- <div class="section-overlay"></div> -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#3D405B" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>
<div class="container">
    <div class="row">

        <div class="col-lg-6 col-12">


            <!-- <a href="#section_2" class="btn custom-btn smoothscroll me-3">Learn more</a> -->
        </div>

    </div>
</div>

</section>
<section class="membership-section section-padding" id="section_3">
<div class="container">
    <center><h3 class="h3">Golf Products</h3></center><br>
    <div class="row">
        <div class="col-md-3 col-sm-6">
      
                <div class="flowers-wrap">
                    <p><strong>Gender:</strong></p>
                    <form>
                    <?php
                    while($data3=mysqli_fetch_assoc($run3)){
                   
                        
                    
                    ?>
                      <label><input type="checkbox" name="fl-colour" value="<?php echo $data3['ge_id']; ?>"> <?php echo $data3['gender']; ?></label><br>
                  
                
                      <?php } ?>
                    </form>
                    <br>
                    <p><strong>Type:</strong></p>
                    <form>
                        <?php
                    while($data1=mysqli_fetch_assoc($run1)){   
                    ?>
                      <label><input type="checkbox" name="fl-size" value="<?php echo $data1['pt_id']; ?>"> <?php echo $data1['type']; ?></label><br>
                      <!-- <form>
                      <label><input type="checkbox" name="fl-size" value="putters">putters</label>
                      <label><input type="checkbox" name="fl-size" value="putters">drive fair away</label>
                      <label><input type="checkbox" name="fl-size" value="glasses">glasses</label>
                      </form> -->
                      <?php }?>
                    </form>  
                    <br>
                  
                    <p><strong>Colors:</strong></p>
                    <form>
                    <?php
                    while($data2=mysqli_fetch_assoc($run2)){  
                    ?>
                      <div><input type="checkbox" name="fl-cont" value="<?php echo $data2['cl_id']; ?>"> <?php echo $data2['color']; ?></div>
                     <?php }?>             
                    </form>
                  </div>
               
           
            <!-- Your filter options go here -->
        </div>
        <?php
        $count = 0;
        while ($data = mysqli_fetch_assoc($run)) {
            if ($count  === 3) {
                echo '<div class="col-md-3"></div>';
            }
        ?>
            <div class="col-md-3 col-sm-6">
                <div class="product-grid2">
                    <!-- Your product content goes here -->      
                  <div class="product-image2">
                    
                      <a href="<?php echo $data['pt_id']; ?>">
                          <img class="pic-1" src="<?php echo $data['image']; ?>">
                         
                      </a>
                    
                      <a class="add-to-cart" href="">Add to cart</a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><a href="#"><?php echo $data['product']; ?></a></h3>
                        <span class="price">Rs <?php echo $data['price']; ?></span>
                    </div>
               
               

</div>
               
            </div>
      
       
<?php
            $count++;
        }
    
        ?>
    
    </div>
  
</div>

</section>>

               
               


        <!-- <!- JAVASCRIPT FILES --> 
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/animated-headline.js"></script>
        <script src="js/modernizr.js"></script>
        <script src="js/custom.js"></script>

    



    </body>
</html>

