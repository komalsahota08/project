<?php
 include("adminHeader.php");
 include("../config.php");
 
 if(isset($_POST["submit_btn"]))
    $category_id=$_GET["id"];
   
    {

$servicename=$_POST["service_name"];
$category_id=$_POST["category_id"];
$description=$_POST["description"];
$fees=$_POST["fees"];

$query="INSERT INTO `services`(`id`,`category_id`,`service_name`,`description`,`fees`) VALUES ('$category_id','$service_name','$description','$fees')";

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
                                <h3>Services</h3>
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
                        <form class="form-contact contact_form" action="" method="post" id="contactForm" novalidate="novalidate">
                           
                                
                                    <div class="form-group">
                                        <div class="label">Category</div>
                                        <select name="category_id" id=""  class="form-control valid">
                                            <option value="select category">select category

<?php

$query1="SELECT * FROM `category` WHERE category_id='$category_id' ,`name`='$name'";
$result1=mysqli_query($db,$query);
$row=mysqli_fetch_assoc($result1);

 while($row=mysqli_fetch_assoc($result1)){
     <option value="<?php echo $row['category_id'] ?>"> </option>
         <Option value="<?php echo $row['name']; ?>"></Option>
 }
    
        ?>
        
    
        




    ?>



</option>



                                        </select>
                                        <input class="form-control valid" name="category_id" id="name" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'categoryid required'" placeholder="categoryid required" required="">
                                    </div>
                                </div>
                                 <div class="col-lg-8">
                                    <div class="form-group">
                                        <input class="form-control valid" name="service-name" id="service_name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'name of service'" placeholder="service name"required="">
                                    </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <input class="form-control valid" name="description" id="description" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'description for service'" placeholder="categorydiscription"required="">
                                    </div>
                                     <div class="col-lg-8">
                                    <div class="form-group">
                                        <input class="form-control valid" name="fees" id="number" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'fees structure'" placeholder="fees structure"required="">
                                    </div>
                                </div>
                                                                  
                                      
                                </div>
                            </div>
                            <div class="col-lg-8">
                            <div class="form-group mt-3 d-flex  justify-content-center" >
                                <button name="submit_btn" type="submit" class="button button-contactForm boxed-btn">add service </button>
                            </div>
                        </form>
                    </div>
                   
                </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->
       <?php
        include("adminFooter.php");
       ?>
       <form method="post">

<label>Description</label>

<br>

<textarea
name="description"
placeholder="Enter your case details"
required>
</textarea>


<br><br>


<button type="submit" name="submit">
Book Service
</button>


</form>



</body>