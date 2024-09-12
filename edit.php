<?php
include 'connection.php';

$id = $name = $phone = $email = $address = $errorMessage = $successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $address = $_POST["address"];

    // validation
    if (empty($id) || empty($name) || empty($phone) || empty($email) || empty($address)) {
        $errorMessage = "Every field is mandatory";
    } else {
        $sql = "UPDATE client SET name = '$name', email = '$email', phone = '$phone', address = '$address' WHERE id = $id";
        $result = $conn->query($sql);

        if ($result) {
            $successMessage = "Data updated correctly";
        } else {
            $errorMessage = "Invalid query: " . $conn->error;
        }
    }
} else {
    // retrieve the data for the specified ID
    $id = $_GET["id"];

    //  validation
    if (empty($id)) {
        $errorMessage = "ID is required for editing";
    } else {
        $sql = "SELECT * FROM client WHERE id = $id";
        $result = $conn->query($sql);

        if ($result) {
            $row = $result->fetch_assoc();

            if ($row) {
                $name = $row["name"];
                $phone = $row["phone"];
                $email = $row["email"];
                $address = $row["address"];
            } else {
                $errorMessage = "No data found for the specified ID";
            }
        } else {
            $errorMessage = "Invalid query: " . $conn->error;
        }
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Basic project</title>
</head>

<body>
    <div class="container my-5">
        <h2>New one</h2>

        <?php
        if (!empty($errorMessage)) {
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        }
        ?>

        <form method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Phone no</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" name="phone" value="<?php echo $phone; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">ADDRESS</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="address" value="<?php echo $address; ?>">
                </div>
            </div>

            <?php
            if (!empty($successMessage)) {
                echo "
                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <strong>$successMessage</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
                ";
            }
            ?>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="basic.php" role="button">check</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>