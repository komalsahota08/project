 
 <?php
 
 include("header.php");
 include("config.php");
 
 if(isset($_POST["submit_btn"]))
    {

$name=$_POST["name"];
$email=$_POST["email"];
$password=md5($_POST["password"]);
$contact=$_POST["contact"];
$address=$_POST["address"];



$profile_image = $_FILES["profile_image"]["name"];
    $tmp_name = $_FILES["profile_image"]["tmp_name"];
    $new_name = rand().$profile_image;

$query="INSERT INTO `users`(`name`, `email`, `password`, `contact`, ` address`, `profile_image`) VALUES ('$name','$email','$password','$contact','$address','$profile_image')";

$result = mysqli_query($db,$query);

if($result)
{
    move_uploaded_file($tmp_name,"userprofile/".$new_name);
    
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
                                <h3> Register yourself</h3>
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
                       <h3> Register yourself by filling required detailes </h3>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" enctype="multipart/form-data" action="" method="post" id="contactForm" novalidate="novalidate">
                           
                               <div class="col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                    </div>
                    
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="password" id="password" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter password'" placeholder="Enter your  password">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="address" id="address" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter address'" placeholder="Enter your address"></textarea>
                                    </div>
                                                                          
                                      <div class="form-group">
                                        <input class="form-control" name="contact" id="contact" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter contact'" placeholder="Enter contact">
                                        </div>
                                        <div class="form-group">
                                        <input class="form-control" name="profile_image" id="profile_image" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = ''" placeholder="add user's profile">
                                        </div>

                                         <div class="form-group mt-3 d-flex justify-content-center">
                                <button name="submit_btn" type="submit" class="button button-contactForm boxed-btn"> register</button>
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