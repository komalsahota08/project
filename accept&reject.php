<?php

include("header.php");
include("config.php");


// check login
if(!isset($_SESSION['id']))
{
    echo "<script>
    window.location='login.php?msg=Please login first';
    </script>";
    exit();
}

// get service id
$service_id = $_GET['id'];


// fetch service details
$query = "SELECT * FROM services WHERE `id`='$service_id'";

$result = mysqli_query($db,$query);
$row=mysqli_fetch_assoc($result);
$fees=$row['fees'];
$booking_date=['booking_date'];

$next_hearing=['next_hearing'];








// booking insert

if(isset($_POST['submit']))
{

    $user_id = $_SESSION['id'];

    $description = $_POST['description'];


    $query2 = "INSERT INTO `cases`(`user_id`,`service_id`,`description`,`fees`,`booking_date`,`next_hearing`,)
    VALUES('$user_id','$service_id','$description','$fees')";


    $insert = mysqli_query($db,$query2);


    if($insert)
    {
        echo "<script>
        alert('Service Booked Successfully');
        window.location='index.php';
        </script>";
    }
    else
    {
        echo "Error: ".mysqli_error($db);
    }

}

?>



<!DOCTYPE html>
<html>
<head>
<title>Book Service</title>
</head>

<body>




<section class="contact-section">
     <div class="container">


         <div class="row d-flex justify-content-center">
             <div class="col-6">
                 <h3> book your apointment by  filling required detailes </h3><br><br>
             </div>
             <div class="col-lg-8">
                 <form enctype="multipart/form-data" action="" method="post" novalidate="novalidate">
                     <div class="col-12">

                            
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
                                         <button name="submit_btn" type="submit" class="button button-contactForm boxed-btn">Book Service </button>
                                     </div>
                                 </div>
                             </div>


                 </form>
             </div>

         </div>
     </div>
 </section>



</html>



<?php

include("footer.php");

?>
