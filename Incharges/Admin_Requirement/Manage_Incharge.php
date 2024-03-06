<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incharges</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/style_View_Incharge.css">
    <link rel="stylesheet" href="../../css/style_spinner.css">
</head>

<body>
    <div class="overlay"></div>
    <div id="loader" class="lds-roller">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div class="container">
        <div class="row">
            <?php
            // Include the database connection file
            include '../../connection/connection.php';

            // Fetch data from the database
            $sql = "SELECT * FROM `incharges`";
            $result = $connection->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="col-1kx col-7l2 col-3hx col-jo2 col-vqp mb-p6d">
                        <div class="row-fjx bg-wvy py-xhk m-lxe">
                            <div class="col-1kx col-7l2 col-vi5 col-3m2 col-bik">
                                <img src="
                                <?php
                                $basicAddress = "http://127.0.0.1/Online Clearance System/uploads/Incharges/";

                                if (!empty($basicAddress) && !empty($row['image'])) {
                                    echo  $basicAddress . $row['image'];
                                } else {
                                    echo  '../../uploads/Incharges/tp.jpg';
                                }

                                ?>" class="img-mxa" />
                                <!-- <img src="../../uploads/Incharges/dalvi.png" class="img-mxa" /> -->
                            </div>
                            <div class="col-1kx col-7l2 col-3hx col-jo2 col-vqp">
                                <h5 class="mt-pop"><?php echo $row['Name']; ?></h5>
                                <p><?php echo $row['Department']; ?></p>
                                <a class="btn-m5f btn-iqs text-ms6" href="View_Incharge_Details.php?userId=<?php echo $row['ID']; ?>">View Profile</a>
                            </div>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo "No records found!";
            }

            // Close the database connection
            include '../../connection/break.php';
            ?>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Delay in milliseconds before hiding the loader
            var delay = 3000; // Adjust as needed

            // Get the loader element by ID
            var loader = document.querySelector("#loader");

            // Set a timeout to hide the loader after the delay
            setTimeout(function() {
                loader.style.display = "none";
                // Also hide the overlay
                document.querySelector(".overlay").style.display = "none";
            }, delay);
        });
    </script>
</body>

</html>