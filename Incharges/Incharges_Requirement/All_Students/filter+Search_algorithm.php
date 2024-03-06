<?php
include('../../../connection/connection.php');

// Initialize $input
$input = isset($_POST['text']) ? $_POST['text'] : '';

if (isset($_POST['branch']) || isset($_POST['year']) || isset($_POST['text'])) {
    $query = "SELECT * FROM status WHERE 1";
    if (isset($_POST['branch'])) {
        $branch = $_POST['branch'];
        if (!empty($branch)) {
            $query .= " AND Branch = '$branch'";
        }
    }
    if (isset($_POST['year'])) {
        $year = $_POST['year'];
        if (!empty($year)) {
            $query .= " AND Year_of_grad = '$year'";
        }
    }
    // Remove the redundant check for isset($_POST['text'])
    // as $input is already initialized above

    if (!empty($input)) {
        $query .= " AND (`PRN` LIKE '$input%' OR `name` LIKE '$input%')";
    }

    $result = mysqli_query($connection, $query);
    $count = mysqli_num_rows($result);

    // Move the table header outside of the condition
?>
    <table class="table table-hover text-center">

        <tbody>
            <?php
            if ($count) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <tr>
                        <td>
                            <?php
                            if (isset($_POST['text'])) {
                                echo highlightText($row["PRN"], $input);
                            } else {
                                echo $row['PRN'];
                            }
                            ?>
                        </td>

                        <td>
                            <?php
                            if (isset($_POST['text'])) {
                                echo highlightText($row["name"], $input);
                            } else {
                                echo $row['name'];
                            }

                            ?> </td>
                        <!-- Highlight other columns similarly -->
                        <td> <?php echo $row["Branch"] ?> </td>
                        <td> <?php echo $row["Section"] ?> </td>
                        <td> <?php echo $row["Year_of_grad"] ?> </td>
                        <td> <?php echo $row["HOD_status"] ?> </td>
                        <td> <?php echo $row["fine_status"] ?> </td>
                        <td> <?php echo $row["CC_status"] ?> </td>
                        <td> <?php echo $row["Library_HOD_status"] ?> </td>
                        <td> <?php echo $row["Sports_status"] ?> </td>
                        <td> <?php echo $row["TNP_status"] ?> </td>
                        <td> <?php echo $row["Scholarship_status"] ?> </td>
                        <td> <?php echo $row["Accountant_status"] ?> </td>
                        <td>
                            <a href="../../../Details Page/Details.php?prn='<?php echo $row['PRN']; ?>'">See Details</a>
                        </td>
                    </tr>
            <?php
                }
            } else {
                echo "<tr><td colspan='14'>Sorry! no record found</td></tr>";
            }
            ?>
        </tbody>
    </table>
<?php
}

function highlightText($text, $input)
{
    // Escape special characters in the search query
    $input = preg_quote($input, '/');
    // Highlight matching text using HTML tags
    return preg_replace('/(' . $input . ')/i', '<mark>$1</mark>', $text);
}
?>