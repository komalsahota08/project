 <?php

    include("header.php");
    include("config.php");

    if (isset($_POST["submit_btn"])) {
        $user_id = ($_POST["user_id"]);
        $service_id = ($_POST["service_id"]);
        $case_number = ($_POST["case_number"]);
        $description = $_POST["description"];
        $booking_date = $_POST["booking_date"];
        $next_hearing = $_POST["next_hearing"];
        $notes = $_POST["notes"];




        $document = $_FILES["document"]["name"];
        $tmp_name = $_FILES["document"]["tmp_name"];
        $new_name = rand() . $document;

        $query = "INSERT INTO `cases`
(`service_id`,`case_number`,`document`,`description`,`booking_date`,`next_hearing`,`notes`)
VALUES
('$user_id','$service_id','$case_number', 'casedocument/$document', '$description' ,'$booking_date','$next_hearing', '$notes')";
        $result = mysqli_query($db, $query);

        if ($result) {
            move_uploaded_file($tmp_name, "casedocument/" . $new_name);

            echo ("<br><br><br><br><br><br><br><br><br><br><br>
    added succesfully");
        } 
        
        else {
            echo ("not added");
        }
    }

    ?>

 <div class="bradcam_inner bradcam_bg_2 d-flex align-items-center">
     <div class="container">
         <div class="row">
             <div class="col-xl-12">
                 <div class="bradcam_text text-center">
                     <h3> Case Registration Form</h3>
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
                 <h3> Register your case by filling required detailes </h3><br><br>
             </div>
             <div class="col-lg-8">
                 <form enctype="multipart/form-data" action="" method="post" novalidate="novalidate">
                     <div class="col-12">

                         <div class="col-12">
                             <div class="form-group">
                                 <div class="label">User Id</div>
                                 <input class="form-control" name="user_id" id="case_number" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = ''" placeholder="enter user id">
                             </div>
                             <div class="col-12">
                                 <div class="form-group">
                                     <div class="label">service_id</div>
                                     <input class="form-control" name="service_id" id="case_number" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = ''" placeholder="enter service id">
                                 </div>
                                 <div class="col-12">
                                     <div class="form-group">
                                         <div class="label">Case number</div>
                                         <input class="form-control" name="case_number" id="case_number" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = ''" placeholder="enter case number">
                                     </div>
                                     <div class="form-group">
                                         <div class="label">Description</div>
                                         <textarea class="form-control" name="description" id="description" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'description'" placeholder="description"></textarea>
                                     </div>

                                     <div class="form-group">
                                         <div class="label">Booking_date</div>
                                         <input class="form-control" name="booking_date" id="booking_date" type="date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'booking_date'" placeholder="booking_date">
                                     </div>
                                     <div class="form-group">
                                         <div class="label"> Documents</div>
                                         <input class="form-control" name="document" id="documents" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = ''" placeholder="add documents">
                                     </div>
                                     <div class="form-group">
                                         <div class="label"> Next hearing date</div>
                                         <input class="form-control" name="next_hearing" id="next_hearing" type="date" onfocus="this.placeholder = ''" onblur="this.placeholder = ''" placeholder="next hearing">
                                     </div>
                                     <div class="form-group">
                                         <div class="label">Notes</div>
                                         <input class="form-control" name="notes" id="notes" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = ''" placeholder="">
                                     </div>

                                     <div class="form-group mt-3 d-flex justify-content-center">
                                         <button name="submit_btn" type="submit" class="button button-contactForm boxed-btn">Case Registered</button>
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