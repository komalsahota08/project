<?php
include("adminHeader.php");
include("../config>.php");

$query="SELECT booking*. , users.name AS user_name,
services.service_name 
from booking 
JOIN users
on users.id=booking.user_id
join services 
on service.id = booking.service_id";
$result = mysqli_query($db,$query);

?>
<main class="main">

  

<div class="container">
    <div class="row">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Service Name</th>
      <th scope="col">Description</th>
      <th scope="col">fees</th>

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
      <td><?php echo $row["name"] ?></td>
      <td><?php echo $row["description"] ?></td>
      <td><?php echo $row["fees"] ?></td>
     
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