<footer>
    <?php
                if (!isset($_SESSION['email'])) {
                    ?>
    <div class="container">
        
        <div class="row">
            
            <div class="columnf">
              <h3>Information</h3>
                <p><a href="about.php"><span style="color:white">About Us</span></a></p>
                <p><a href="contact.php"><span style="color:white">Contact Us</span></a></p>
            </div>

            <div class="columnf">
              <h3>My Account</h3>
                <p><a href="#" data-toggle="modal" data-target="#loginmodal" ><span style="color:white">Log In</span></a></p>
                <p><a href="signup.php"><span style="color:white">Sign Up</span></a></p>
            </div>

            <div class="columnf">
              <h3>Contact Us</h3>
                <p>CONTACT No.+91 77177 52576</p>
                <p>Copyright © CakeParlour | Store. All Rights Reserved</p>
                
            </div>


             <?php
                } else {
                    ?>

                    <?php
                    }
                    ?>
        </div>
        
    </div>
</footer>
