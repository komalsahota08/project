<?php

include("adminHeader.php");
include("../config.php");

if(isset($_GET["delete_id"])){
    $id=$_GET["delete_id"];
    $delete_query="DELETE FROM `services` WHERE id= $id";
    mysqli_query($db,$delete_query);
}


$query="SELECT * FROM `services`";
$result=mysqli_query($db,$query);
?>
<main class="main">

<div class="container">
    <div class="row">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Service Name</th>
      <th scope="col"> Service Description</th>

      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php

$no=1;
    while($row=mysqli_fetch_assoc($result)){
    ?>
    <tr>
      <th scope="row"><?php echo $no ?></th>
      <td><?php echo $row["service_name"] ?></td>
      <td><?php echo $row["description"] ?></td>
      <td><a href="editservices.php?id=<?php echo $row["id"]?>" class="btn btn-primary">Edit</a></td>
      <td><a href="?delete_id=<?php echo $row["id"] ;?>">Delete</a></td>
    </tr>
    <?php
$no++;
    }
   ?>
    
  </tbody>
</table>
    </div>
</div>




</main>
<?php

include("adminFooter.php");
?>
