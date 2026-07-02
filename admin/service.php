<?php
include("adminHeader.php");
include("../config.php");
if (isset($_POST["submit_btn"])) {
    $category_id = $_POST["category_id"];
    $service_name = $_POST["service_name"];
    $description = $_POST["description"];
    $fees = $_POST["fees"];
    $query="INSERT INTO `services` (`category_id`,`service_name`,`description`, `fees`) VALUES ('$category_id','$service_name','$description','$fees')";
    $result=mysqli_query($db,$query);
    if ($result) {
       
        echo ("<br<br>Added Successfully");
        
    } else {
        echo ("Not Added");
    }
}
?>
<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container d-flex justify-content-center">
        <div class="row g-5 d-flex justify-content-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <p class="fs-5 fw-bold text-primary"></p>
                <h1 class="display-5 mb-5">Services</h1>

                <form method="post" enctype="multipart/form-data">
                    <div class="row g-3">

                        <div class="col-md-6">

                            <div class="form-floating">
                                <select name="category_id" id="" class="form-control">
                                    <option value="" disabled selected>Select your category</option>

                                    <?php
                                    include("../config.php");

                                    $query = "SELECT * FROM `category`";
                                    $result = mysqli_query($db, $query);
                                    while($row=mysqli_fetch_assoc($result)){
                                    ?>
                                    <option value="<?php echo $row["id"] ?>"> <?php echo$row["name"] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">

                            <div class="form-floating">
                                 <label for="service_name">Service Name</label>
                                <input type="text" class="form-control" name="service_name" id="service_name" placeholder="Service Name" required="">
                               
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                 <label for="productDescription">Service  Description</label>
                                <input type="text" class="form-control" name="description" id="description" placeholder="service Description" required="">
                               
                            </div>

                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                 <label for="productPrice">Fees</label>
                                <input type="number" class="form-control" name="fees" id="productPrice" placeholder="Fees Structure" required="">
                                
                            </div>
                        </div>
        
                        <div class="col-12">
                            <button type="Submit" name="submit_btn" class="btn btn-submit justify-contennt-center ">Add Service</button>
                        </div>
                  
     
                    </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- Contact End -->
<?php
include("adminFooter.php");
?>