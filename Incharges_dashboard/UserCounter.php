<link rel="stylesheet" href="../css/counter.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;900&display=swap" rel="stylesheet">
<script src="../JS/counter.js" defer></script>

<?php
include "../connection/connection.php";
$sql1 = "SELECT count(*) AS total FROM student"; // Alias the count(*) result
$sql2 = "SELECT count(*) AS total FROM incharges";
$result1 = $connection->query($sql1);
$result2 = $connection->query($sql2);


if ($result1) {
    $row1 = $result1->fetch_assoc(); // Fetch the row from the result
    $student = $row1['total']; // Get the count value
} else {
    // Error handling in case the query fails
    $student = "Error";
}

if ($result2) {
    $row2 = $result2->fetch_assoc(); // Fetch the row from the result
    $incharges = $row2['total']; // Get the count value
} else {
    // Error handling in case the query fails
    $incharges = "Error";
}
?>

<div class="container">
    <div class="counter-container">
        <div class="counter">
            <img src="../images/girl30.svg" alt="timer" srcset="" class="icon">
            <h3 data-target="<?php echo $student; ?>" class="count">0</h3>
            <h6>Student</h6>
        </div>
        <div class="counter">
            <img src="../images/guardian-30.svg" alt="Coffee" srcset="" class="icon">
            <h3 data-target="<?php echo $incharges; ?>" class="count">0</h3>
            <h6>Department Heads</h6>
        </div>

    </div>
</div>