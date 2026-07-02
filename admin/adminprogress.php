<?php
include("adminHeader.php");
include("../config.php");

if(isset($_POST['save_progress']))
{
    $case_number  = $_POST['case_number'];
    $status       = $_POST['status'];
    $remarks      = $_POST['remarks'];
    $next_hearing = $_POST['next_hearing'];

    if(!empty($_FILES['documents']['name']))
    {
$documents=$_FILES['documents']['names'];
$temp=$_FILES['documents']['temp_name'];


        move_uploaded_file( 
            $_FILES['documents']['tmp_name'],
            "casedocument/".$documents);
    
    $query = "UPDATE `cases_progress` SET `case_number`='$case_number',`status`='$status',`remarks`='$remarks',`documents`='$documents',`next_hearing`='$next_hearing' WHERE `case_number`='$case_number'";

    }
    else{
        $query1="UPDATE `cases_progress` SET `status`='$status',`remarks`='$remarks',`next_hearing`='$next_hearing' WHERE case_number='$case_number'";
    


    mysqli_query($db,$query1);
    }
  echo"<div class='alert alert-success'>Case Progress Added Successfully.</div>";


    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Case Progress</title>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

    <div class="card shadow">
        <div class="card-header bg-dark text-warning">
            <h4 class="mb-0">Manage  Case Progress</h4>
        </div>

        <div class="card-body">

            <form method="POST" enctype="multipart/form-data">

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Case Number</label>
                        <input type="text"
                               name="case_number"
                               class="form-control"
                               required>
                    </div>

                    <div class="col-md-6 ">
                        <label class="form-label">Case Status</label>
                        <select name="status"
                                class="form-select"
                                required>
                            <option value="" selected disabled>Select Status</option>
                            <option>Case Filed</option>
                            <option>Pending</option>
                            <option>In Progress</option>
                            <option>Hearing Completed</option>
                            <option>Adjourned</option>
                            <option>Disposed</option>
                            <option>Closed</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Remarks</label>
                    <textarea name="remarks"
                              class="form-control"
                              rows="4"
                              required></textarea>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Next Hearing Date</label>
                        <input type="date"
                               name="next_hearing"
                               class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Update Date</label>
                        <input type="date"
                               name="update_date"
                               class="form-control"
                               value="<?php echo date('Y-m-d'); ?>"
                               required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Upload Document</label>
                    <input type="file"
                           name="document"
                           class="form-control">
                </div>

                <button type="submit"
                        name="save_progress"
                        class="btn btn-dark text-warning">
                    Save Progress
                </button>

            </form>

        </div>
    </div>

</div>

</body>
</html>