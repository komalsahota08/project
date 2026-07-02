<?php

include("header.php");
include("config.php");



$query="SELECT * FROM `category`";
$result=mysqli_query($db,$query);
?>
<main class="main">

  

<div class="container">
    <div class="row">
         <?php

$no=1;
    while($row=mysqli_fetch_assoc($result)){
    ?>
        <div class="col my-3">
            <div class="card" style="width: 18rem;">
  <div class="card-body bg-dark ">
    <h5 class="card-title text-warning"><?php echo $row["name"] ?></h5>
   
    <p class="card-text text-warning"><?php echo $row["description"] ?></p>
    <a href="viewservices.php?id=<?php echo $row["id"] ?>" class="card-link text-warning">Service</a>
    <a href="#" class="card-link text-warning">another link</a>

  </div>
</div>
        </div>
        <?php } ?>
    </div>
</div>




</main>
<?php

include("footer.php");
?>
