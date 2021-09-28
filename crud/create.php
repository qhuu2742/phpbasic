<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$ho_ten = $dia_chi = $hoc_phi = "";
$ho_ten_err = $dia_chi_err = $hoc_phi_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_ho_ten = trim($_POST["ho_ten"]);
    if(empty($input_ho_ten)){
        $ho_ten_err = "Please enter a name.";
    } elseif(!filter_var($input_ho_ten, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $ho_ten_err = "Please enter a valid name.";
    } else{
        $ho_ten = $input_ho_ten;
    }

    // Validate dia_chi
    $input_dia_chi = trim($_POST["dia_chi"]);
    if(empty($input_dia_chi)){
        $dia_chi_err = "Please enter an dia_chi.";
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
        // Prepare an insert statement
        $sql = "INSERT INTO sinh_vien (ho_ten, dia_chi, hoc_phi) VALUES (?, ?, ?)";

        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("sss", $param_ho_ten, $param_dia_chi, $param_hoc_phi);

            // Set parameters
            $param_ho_ten = $ho_ten;
            $param_dia_chi = $dia_chi;
            $param_hoc_phi = $hoc_phi;

            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Records created successfully. Redirect to landing page
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
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
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
                <h2 class="mt-5">Tạo sinh viên</h2>
                <p>Vui lòng điền thông tin sinh viên.</p>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        <label>Họ tên</label>
                        <input type="text" name="ho_ten" class="form-control <?php echo (!empty($ho_ten_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $ho_ten ?>">
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
                    <input type="submit" class="btn btn-primary" value="Đồng ý">
                    <a href="index.php" class="btn btn-secondary ml-2">Hủy</a>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>