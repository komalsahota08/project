<?php
include("header.php");
include("config.php");

$row=null;
if(isset($_POST['search']))
$case_number=$_POST["case_number"];
{
    $query="SELECT * FROM `cases_progress` WHERE `case_number`='$case_number'"; 
$result=mysqli_query($db,$query);
if(mysqli_fetch_assoc($result))
    {
        $row=mysqli_fetch_assoc($result);
    }
 else
    {
        echo "<div class='alert alert-danger'>
            No case progress found for this Case Number.
        </div>";
    }





}
?>
        
<!DOCTYPE html>
<html>
<head>
    <title>Track Case Progress</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <!-- Search Card -->
    <div class="card shadow mb-4">
        <div class="card-header bg-dark text-warning">
            <h4 class="mb-0">Track Your Case</h4>
        </div>

        <div class="card-body">
            <form method="POST">
                <div class="row">
                    <div class="col-md-10">
                        <input type="text"
                               name="case_number"
                               class="form-control"
                               placeholder="Enter Case Number"
                               required>
                    </div>

                    <div class="col-md-2">
                        <button type="submit"
                                name="search"
                                class="btn btn-dark text-warning w-100">
                            Track
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

            <!-- Progress Card -->
            <div class="card shadow-sm mb-3 border-start border-primary border-4">
                <div class="card-body">

                    <div class="d-flex justify-content-between">
                        <h5>
                            <?php echo ($row['status']); ?>
                        </h5>

                        <span class="text-muted">
                            <?php echo date(
                                'd M Y',
                              ($row['hearing_date'])
                            ); ?>
                        </span>
                    </div>

                    <p class="mb-2">
                        <?php echo ($row['remarks']); ?>
                    </p>

                    <div class="row">
                        <div class="col-md-6">
                            <strong>Next Hearing:</strong>
                            <?php echo ($row['next_hearing']); ?>
                        </div>

                        <div class="col-md-6 text-end">
                            <?php
                            if(!empty($row['documents']))
                            {
                                ?>
                                <a href="casedocument.php<?php echo ($row['documents']); ?>"
                                   target="_blank"
                                   class="btn btn-sm btn-outline-primary">
                                    View Document
                                </a>
                                <?php
                            }
                            ?>
                        </div>
                    </div>

                </div>
            </div>

<?php
        
    ?>

</div>

</body>
</html>