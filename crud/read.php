<?php
// Check existence of id parameter before processing further
if(isset($_GET["ma"]) && !empty(trim($_GET["ma"]))){
    // Include config file
    require_once "config.php";

    // Prepare a select statement
    $sql = "SELECT * FROM sinh_vien WHERE ma = ?";

    if($stmt = $mysqli->prepare($sql)){
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("i", $param_ma);

        // Set parameters
        $param_ma = trim($_GET["ma"]);

        // Attempt to execute the prepared statement
        if($stmt->execute()){
            $result = $stmt->get_result();

            if($result->num_rows == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = $result->fetch_array(MYSQLI_ASSOC);

                // Retrieve individual field value
                $name = $row["ho_ten"];
                $address = $row["dia_chi"];
                $salary = $row["hoc_phi"];
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }

        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }

    // Close statement
    $stmt->close();

    // Close connection
    $mysqli->close();
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mt-5 mb-3">Chi tiết </h1>
                <div class="form-group">
                    <label>Mã</label>
                    <p><b><?php echo $row["ma"]; ?></b></p>
                </div>
                <div class="form-group">
                    <label>Họ tên</label>
                    <p><b><?php echo $row["ho_ten"]; ?></b></p>
                </div>
                <div class="form-group">
                    <label>Địa chỉ</label>
                    <p><b><?php echo $row["dia_chi"]; ?></b></p>
                </div>
                <div class="form-group">
                    <label>Học phí</label>
                    <p><b><?php echo $row["hoc_phi"]; ?></b></p>
                </div>
                <p><a href="index.php" class="btn btn-primary">Back</a></p>
            </div>
        </div>
    </div>
</div>
</body>
</html>