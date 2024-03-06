<!-- ye tab page ko reload karta hai jab koi status change kare -->
<!-- called by js of checkbox_input.php -->
<?php
session_start();
$Dept = $_SESSION['Department'];
$department = "";

switch ($_SESSION['Department']) {
    case 'Fine Department':
        $department = "fine_status";
        $reject = "Fine_reject";
        $condition = "";
        break;
    case 'Computer Center':
        $department = "CC_status";
        $reject = "CC_reject";
        $condition = "";
        break;
    case 'Library':
        $department = "Library_HOD_status";
        $reject = "Library_reject";
        $condition = "";

        break;
    case 'Sports':
        $department = "Sports_status";
        $reject = "Sports_reject";
        $condition = "";

        break;
    case 'Training & Placement':
        $department = "TNP_status";
        $reject = "T&P_reject";
        $condition = "";

        break;
    case 'Account':
        $department = "Accountant_status";
        $reject = "Account_reject";
        $condition = "";
        break;
    case 'First Year Department':
        $department = "HOD_status";
        $reject = "HOD_reject";
        $condition = " and Year_of_study = 1 ";
        break;
    case 'Computer Engineering':
        $department = "HOD_status";
        $reject = "HOD_reject";
        $condition = " and Branch ='Computer Engineering' ";
        break;
    case 'Electrical Engineering':
        $department = "HOD_status";
        $reject = "HOD_reject";
        $condition = " and Branch ='Electrical Engineering' ";
        break;
    case 'Civil Engineering':
        $department = "HOD_status";
        $reject = "HOD_reject";
        $condition = " and Branch ='Civil Engineering'";
        break;
    case 'Mechanical Engineering':
        $department = "HOD_status";
        $reject = "HOD_reject";
        $condition = " and Branch ='Mechanical Engineering' ";
        break;
    case 'Scholarship':
        $department = "Scholarship_status";
        $reject = "HOD_reject";
        $condition = "";
        break;
    default:
        // Handle default case if necessary
        break;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include '../../../connection/connection.php';

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $prn = $_POST["prn"];
        $status = $_POST["checkboxValue"];
        $msg = isset($_POST["msg"]) ? htmlspecialchars($_POST["msg"]) : "";


        // Update the database - Example using MySQLi
        $updateSQL = "UPDATE status SET $department = $status,$reject = '$msg'  WHERE PRN = $prn $condition";
        // echo $updateSQL;
        $result = $connection->query($updateSQL);


        if ($result === false) {
            // Query execution failed, handle the error
            die("Update failed: " . $connection->error);
        }


        include 'query.php';

        $r = mysqli_query($connection, $query);

        if (!$r) {
            die("Invalid query: " . $connection->error);
        }
        // Function to print 'y' or 'n' based on the value
        function printYN($value)
        {
            return ($value == 1) ? '✅' : '❌';
        }

        while ($row = mysqli_fetch_assoc($r)) {
    ?>


            <tr>
                <td> <?php echo $row["PRN"] ?> </td>
                <td> <?php echo $row["name"] ?> </td>
                <td> <?php echo $row["Branch"] ?> </td>
                <td> <?php echo $row["Section"] ?> </td>
                <td> <?php echo $row["Year_of_grad"] ?> </td>

                <!--  HOD  Status-->
                <td> <?php
                        if ($Dept == "First Year Department" || $Dept == "Computer Engineering" || $Dept == "Civil Engineering" || $Dept == "Civil Engineering" || $Dept == "Civil Engineering") {
                            include '../CommonFiles/checkbox_input.php';
                            generateCheckboxInput($row["PRN"], $row["HOD_status"]);
                        } else {
                            echo printYN($row["HOD_status"]);
                        }
                        ?>
                </td>

                <!-- Fine Department -->
                <td> <?php
                        if ($Dept == "Fine Department") {
                            include '../CommonFiles/checkbox_input.php';
                            generateCheckboxInput($row["PRN"], $row["fine_status"]);
                        } else {
                            echo printYN($row["fine_status"]);
                        }
                        ?>
                </td>

                <!-- CC Department -->
                <td>
                    <?php
                    if ($Dept == "Computer Center") {
                        include '../CommonFiles/checkbox_input.php';
                        generateCheckboxInput($row["PRN"], $row["CC_status"]);
                    } else {
                        echo printYN($row["CC_status"]);
                    }
                    ?>
                </td>

                <!-- Library Department -->
                <td>
                    <?php
                    if ($Dept == "Library") {
                        include '../CommonFiles/checkbox_input.php';
                        generateCheckboxInput($row["PRN"], $row["Library_HOD_status"]);
                    } else {
                        echo printYN($row["Library_HOD_status"]);
                    }
                    ?>
                </td>

                <!-- Sports Department -->
                <td>
                    <?php
                    if ($Dept == "Sports") {
                        include '../CommonFiles/checkbox_input.php';
                        generateCheckboxInput($row["PRN"], $row["Sports_status"]);
                    } else {
                        echo printYN($row["Sports_status"]);
                    }
                    ?>
                </td>

                <!-- T&P Department -->
                <td>
                    <?php
                    if ($Dept == "Training & Placement") {
                        include '../CommonFiles/checkbox_input.php';
                        generateCheckboxInput($row["PRN"], $row["TNP_status"]);
                    } else {
                        echo printYN($row["TNP_status"]);
                    }
                    ?>
                </td>

                <!-- Scholarship department -->
                <td>
                    <?php
                    if ($Dept == "Scholarship") {
                        include '../CommonFiles/checkbox_input.php';
                        generateCheckboxInput($row["PRN"], $row["Scholarship_status"]);
                    } else {
                        echo printYN($row["Scholarship_status"]);
                    }
                    ?>
                </td>

                <td>
                    <?php
                    if ($Dept == "Account") {
                        include '../CommonFiles/checkbox_input.php';
                        generateCheckboxInput($row["PRN"], $row["Accountant_status"]);
                    } else {
                        echo printYN($row["Accountant_status"]);
                    }
                    ?>
                </td>



                <td>
                    <a onclick="toggleQuery('<?php echo $row['PRN']; ?>')" href="../../../Details Page/Details.php?prn='<?php echo $row['PRN']; ?>'">See Details</a>
                </td>
            </tr>

    <?php
        } //closing of while

        // Close the database connection
        include '../../../connection/break.php';
    }
    ?>
    <script>
        function toggleQuery(prn_passed) {
            $.ajax({
                type: "POST",
                url: "togglingQuery.php", // replace with the actual path to your PHP script
                data: {
                    prn: prn_passed
                },
                success: function(response) {
                    console.log(response); // Handle the response from the server if needed
                }
            });
        }
    </script>
</body>

</html>