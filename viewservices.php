<?php

include("header.php");
include("config.php");


if(isset($_GET["id"])){
    $id=$_GET["id"];
    $query = "SELECT * FROM `services` where category_id =$id";
}
else{
   $query = "SELECT * FROM `services`"; 
}

$result = mysqli_query($db, $query);
?>
<main class="main">
    <div class="container">
        <div class="row">
            <?php

            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="col my-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body bg-dark ">
                            <h5 class="card-title text-warning"><?php echo $row["service_name"] ?></h5>

                            <p class="card-text text-warning"><?php echo $row["description"] ?></p>
                            <a href="#" class="card-link text-warning">Card link</a>
                            <a href="accept&reject.php?id=<?php echo$row["id"] ?>" class="card-link text-warning">book service</a>


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