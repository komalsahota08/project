<?php

include("adminHeader.php");
include("../config.php");

$id = $_GET["id"];

$query = "SELECT * FROM `services` WHERE id='$id'";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($result);





if (isset($_POST["submit_btn"])) {
  $service_name = $_POST["service_name"];
  $description = $_POST["description"];
$fees = $_POST["fees"];

  $updatequery = "UPDATE `services` SET `service_name`='$service_name',`description`='$description' ,`fees`='$fees' WHERE id='$id'";
  $result1 = mysqli_query($db, $updatequery);

  if ($result1) {
    echo "<script>window.location.assign('allservices.php?msg=editsucessfully')</script>";
  } else {
    echo mysqli_error($db);
  }
}

?>

<main class="main">

  <!-- Page Title -->
  <div class="page-title">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1 class="heading-title">Edit Services</h1>

          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <br>
        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->

  <!-- Contact Section -->
  <section id="contact" class="contact section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row g-5 d-flex justify-content-center">


        <div class="col-lg-7">
          <div class="contact-form-card" data-aos="fade-up" data-aos-delay="200">


            <form method="post" enctype="multipart/form-data">
              <div class="row g-4">
                <div class="col-md-6">
                    <div class="label">Service name</div>
                  <input type="text" class="form-control" name="service_name" id="name" placeholder="  Service Name" required="" value="<?php echo $row["service_name"] ?>">
                </div>
 <div class="col-md-6">
                <div class="label">Description</div>
                  <input type="text" class="form-control" name="description" id="description" placeholder="Description" required="" value="<?php echo $row["description"] ?>">
                </div>
              </div>

               
<div class="col-md-6">
    <div class="label">Fees</div>
                  <input type="text" class="form-control" name="fees" id="fees" placeholder="Fees structure"
                    required="" value="<?php echo $row["fees"] ?>">
                </div>




                <div class="col-12">
                  <button type="submit" name="submit_btn" class="btn btn-submit">add service</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>



  </section><!-- /Contact Section -->

</main>
<?php

include("adminFooter.php");
?>