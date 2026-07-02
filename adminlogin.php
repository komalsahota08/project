<?php

include("header.php");
    include("config.php");

if (isset($_POST["submit_btn"])) {
        $email = $_POST["email"];
        $password = md5($_POST["password"]);

        $query = " SELECT * FROM `admin` WHERE `email`='$email' and `password`='$password' ";

        $result = mysqli_query($db, $query);

        if (mysqli_num_rows($result))
             {
                session_start();
            $row = mysqli_fetch_assoc($result);
            $_SESSION["user_id"] = $row["id"];

            $_SESSION["email"] = $row["email"];

            echo"<script>window.location.assign('./admin/admindashboard.php?msg=Login succesful')</script>";
        } 
        
        else {
            echo "<script>window.location.assign('adminlogin.php?msg=login unsucessful')</script>";
        }
    }

    ?>

 <div class="bradcam_inner bradcam_bg_2 d-flex align-items-center">
     <div class="container">
         <div class="row">
             <div class="col-xl-12">
                 <div class="bradcam_text text-center">
                     <h3> LOGIN </h3>
                 </div>
             </div>
         </div>
     </div>
 </div>
 </div>
 <!-- bradcam_area_end  -->

 <!-- ================ contact section start ================= -->


 <section class="contact-section">
     <div class="container">


         <div class="row d-flex justify-content-center">

             <div class="col-lg-8">
                 <form  enctype="multipart/form-data"  method="post"  novalidate="novalidate">

                     <div class="col-sm-12">
                         <div class="form-group">
                             <input class="form-control valid" name="email" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your email'" placeholder="Enter your email">
                         </div>

                     </div>
                     <div class="col-sm-12">
                         <div class="form-group">
                             <input class="form-control valid" name="password" id="password" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter password'" placeholder=" enter your password">
                         </div>
                     </div>

                     <div class="form-group mt-3 d-flex justify-content-center">
                         <button name="submit_btn" type="submit" class="button button-contactForm boxed-btn"> LOGIN</button>
                     </div>
             </div>
         </div>


         </form>
     </div>

     </div>
     </div>
 </section>
 <!-- ================ contact section end ================= -->



 <?php
    include("footer.php");

    ?>