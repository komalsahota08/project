<?php

include("adminHeader.php");
include("../config.php");

$id = $_GET["id"];

$query = "SELECT * FROM `category` WHERE id='$id'";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($result);





if (isset($_POST["submit_btn"])) {
  $name = $_POST["name"];
  $description = $_POST["description"];


  $updatequery = "UPDATE `category` SET `name`='$name',`description`='$description' WHERE id='$id'";
  $result1 = mysqli_query($db, $updatequery);

  if ($result1) {
    echo "<script>window.location.assign('allCategory.php?msg=editsucessfully')</script>";
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
            <h1 class="heading-title">Edit Category</h1>

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
                  <input type="text" class="form-control" name="name" id="name" placeholder="Category Name" required="" value="<?php echo $row["name"] ?>">
                </div>

                <div class="col-md-6">
                  <input type="text" class="form-control" name="description" id="email" placeholder="Category Description"
                    required="" value="<?php echo $row["description"] ?>">
                </div>





                <div class="col-12">
                  <button type="submit" name="submit_btn" class="btn btn-submit">Add Category </button>
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