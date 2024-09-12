<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Basic Project</title>
    <style>
    body {
        background-color: #f8f9fa;
    }

    .container {
        margin-top: 50px;
    }

    h2 {
        color: #007bff;
    }

    table {
        margin-top: 20px;
    }

    th {
        background-color: #007bff;
        color: #fff;
    }

    .btn {
        margin-right: 5px;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-inverse" style="background-color: rgb(24, 24, 1);">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="#"><a href="index.html">Home</a></li>
                    <li class="#"><a href="basic.php">Edit/Delete</a></li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>

                </ul>
            </div>
        </div>
    </nav>


    <div class="container">
        <h2 style="text-align: center;">List of persons</h2>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $hostname = "localhost";
                $username = 'root';
                $password = "";
                $database = "students";
                $conn = new mysqli($hostname, $username, $password, $database);
                if ($conn) {
                    echo "";
                } else {
                    echo "Not connected" . $conn->connect_error;
                }

                $sql = "SELECT * FROM client";
                $result = $conn->query($sql);

                if (!$result) {
                    die("Invalid query: " . $conn->error);
                }

                while ($row = $result->fetch_assoc()) {
                    echo "
                    <tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['phone']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['address']}</td>
                        <td>
                            <a class='btn btn-primary btn-sm' href='edit.php?id={$row['id']}'>EDIT</a>
                            <a class='btn btn-danger btn-sm' href='delete.php?id={$row['id']}'>DELETE</a>
                        </td>
                    </tr>
                    ";
                }

                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>