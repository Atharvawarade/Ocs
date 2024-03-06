<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incharge Details Form</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container">

    <?php
    include '../../connection/connection.php';

    if (isset($_GET['userId'])) {
        $userId = $_GET['userId'];


        $sql = "SELECT * FROM `incharges` WHERE ID = $userId";
        $result = $connection->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
    ?>

            <h2 class="mt-3 mb-4">Incharge Details</h2>
            <form action="update_incharge.php" enctype="multipart/form-data" method="post">
                <label hidden for="id" class="form-label">ID:</label>
                <input type="hidden" name="id" value="<?php echo $row['ID']; ?>" class="form-control" readonly><br>

                <label for="username" class="form-label">Username:</label>
                <input type="text" name="username" value="<?php echo $row['Username']; ?>" class="form-control" readonly><br>

                <label for="password" class="form-label">Password:</label>
                <input type="password" name="password" value="<?php echo $row['Password']; ?>" class="form-control"><br>

                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" value="<?php echo $row['Name']; ?>" class="form-control"><br>

                <label for="department" class="form-label">Department:</label>
                <select name="department" class="form-select">
                    <?php
                    $departments = array(
                        'Fine Department',
                        'Computer Center',
                        'Library',
                        'Sports',
                        'Training & Placement',
                        'Scholarship',
                        'Account',
                        'First Year Department',
                        'Computer Engineering',
                        'Electrical Engineering',
                        'Civil Engineering',
                        'Mechanical Engineering'
                    );

                    foreach ($departments as $dept) {
                        echo "<option value=\"$dept\"" . ($row['Department'] == $dept ? ' selected' : '') . ">$dept</option>";
                    }
                    ?>

                    ?>
                </select><br>

                <label for="image" class="form-label">Image URL:</label>
                <input type="file" name="image" value="<?php echo $row['image']; ?>" class="form-control" accept=".png"><br>

                <input type="submit" value="Update Incharge" class="btn btn-primary">
            </form>

    <?php
        } else {
            echo "Incharge not found!";
        }

        // Close the database connection
        include '../../connection/break.php';
    }
    ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>