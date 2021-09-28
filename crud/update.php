<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$ho_ten = $dia_chi = $hoc_phi = "";
$ho_ten_err = $dia_chi_err = $hoc_phi_err = "";

// Processing form data when form is submitted
if(isset($_POST["ma"]) && !empty($_POST["ma"])){
    // Get hidden input value
    $ma = $_POST["ma"];

    // Validate name
    $input_ho_ten = trim($_POST["ho_ten"]);
    if(empty($input_ho_ten)){
        $ho_ten_err = "Please enter a name.";
    } elseif(!filter_var($input_ho_ten, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $ho_ten_err = "Please enter a valid name.";
    } else{
        $ho_ten = $input_ho_ten;
    }

    // Validate address address
    $input_dia_chi = trim($_POST["dia_chi"]);
    if(empty($input_dia_chi)){
        $dia_chi_err = "Please enter an address.";
    } else{
        $dia_chi = $input_dia_chi;
    }

    // Validate hoc_phi
    $input_hoc_phi = trim($_POST["hoc_phi"]);
    if(empty($input_hoc_phi)){
        $hoc_phi_err = "Please enter the hoc_phi amount.";
    } elseif(!ctype_digit($input_hoc_phi)){
        $hoc_phi_err = "Please enter a positive integer value.";
    } else{
        $hoc_phi = $input_hoc_phi;
    }

    // Check input errors before inserting in database
    if(empty($ho_ten_err) && empty($dia_chi_err) && empty($hoc_phi_err)){
        // Prepare an update statement
        $sql = "UPDATE sinh_vien SET ho_ten=?, dia_chi=?, hoc_phi=? WHERE ma=?";

        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("sssi", $param_ho_ten, $param_dia_chi, $param_hoc_phi, $param_ma);

            // Set parameters
            $param_ho_ten = $ho_ten;
            $param_dia_chi = $dia_chi;
            $param_hoc_phi = $hoc_phi;
            $param_ma = $ma;

            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Records updated successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        $stmt->close();
    }

    // Close connection
    $mysqli->close();
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["ma"]) && !empty(trim($_GET["ma"]))){
        // Get URL parameter
        $ma =  trim($_GET["ma"]);

        // Prepare a select statement
        $sql = "SELECT * FROM sinh_vien WHERE ma = ?";
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("i", $param_ma);

            // Set parameters
            $param_ma = $ma;

            // Attempt to execute the prepared statement
            if($stmt->execute()){
                $result = $stmt->get_result();

                if($result->num_rows == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = $result->fetch_array(MYSQLI_ASSOC);

                    // Retrieve individual field value
                    $ho_ten = $row["ho_ten"];
                    $dia_chi = $row["dia_chi"];
                    $hoc_phi = $row["hoc_phi"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
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
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cập nhật thông tin</title>
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
                <h2 class="mt-5">Cập nhật thông tin</h2>
                <p>Vui lòng điền thông tin cần cập nhật.</p>
                <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                    <div class="form-group">
                        <label>Họ tên</label>
                        <input type="text" name="ho_ten" class="form-control <?php echo (!empty($ho_ten_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $ho_ten; ?>">
                        <span class="invalid-feedback"><?php echo $ho_ten_err;?></span>
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <textarea name="dia_chi" class="form-control <?php echo (!empty($dia_chi_err)) ? 'is-invalid' : ''; ?>"><?php echo $dia_chi; ?></textarea>
                        <span class="invalid-feedback"><?php echo $dia_chi_err;?></span>
                    </div>
                    <div class="form-group">
                        <label>Học phí</label>
                        <input type="text" name="hoc_phi" class="form-control <?php echo (!empty($hoc_phi_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $hoc_phi; ?>">
                        <span class="invalid-feedback"><?php echo $hoc_phi_err;?></span>
                    </div>
                    <input type="hidden" name="ma" value="<?php echo $ma; ?>"/>
                    <input type="submit" class="btn btn-primary" value="Đồng ý">
                    <a href="index.php" class="btn btn-secondary ml-2">Hủy</a>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>