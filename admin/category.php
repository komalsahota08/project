<?php
 include("adminHeader.php");
 include("../config.php");
 
 if(isset($_POST["submit_btn"]))
   
    {

$name=$_POST["name"];
$description=$_POST["description"];

$query="INSERT INTO `category`(`name`,`description`)  VALUES ('$name','$description')";

$result = mysqli_query($db,$query);

if($result)
    {
    echo("<br><br><br><br><br><br><br><br><br><br><br>
    added succesfully");
}
else{
    echo("not added");
}

}

 ?>
 
            <div class="bradcam_inner bradcam_bg_2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="bradcam_text text-center">
                                <h3> category</h3>
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
                    <div class="col-6">
                       <h3> regiter yourself by filling required detailes </h3>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="" method="post" id="contactForm" novalidate="novalidate">
                           
                                
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'categoryname required'" placeholder="categoryname required" required="">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <input class="form-control valid" name="description" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="categorydiscription"required="">
                                    </div>
                                </div>
                                                                  
                                      
                                </div>
                            </div>
                            <div class="col-lg-8">
                            <div class="form-group mt-3 d-flex  justify-content-center" >
                                <button name="submit_btn" type="submit" class="button button-contactForm boxed-btn">add category </button>
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