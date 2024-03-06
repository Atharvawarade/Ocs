<?php
include "../connection/connection.php";
$sql = "SELECT count(*) AS total FROM student"; // Alias the count(*) result
$result = $connection->query($sql);
$row = $result->fetch_assoc(); // Fetch the row from the result
$count = $row['total']; // Get the count value
?>

<style>
  /* Styling for the digital counter */
  #userCount {
    font-size: 2em;
    font-weight: bold;
    color: #333;
    display: inline-block;
    overflow: hidden;
    position: relative;
  }

  #userCount span {
    display: inline-block;
    transform: translateY(100%);
    animation: count-up 1s ease-in-out forwards;
  }

  @keyframes count-up {
    to {
      transform: translateY(0);
    }
  }
</style>

<!-- Display the user count with a digital count-up animation -->
<h1 id="userCountHeader">Total Users: <span id="userCount">0</span></h1>

<!-- JavaScript to handle user count updates and start the animation -->
<script>
  // Call the example function with the user count
  counter(<?php echo $count; ?>);

  function counter(num) {
    var targetUserCount = num;
    var total_time = 10000;
    var currentCount = 0;
    var interval = total_time / targetUserCount / 2; // milliseconds between count updates

    function updateDisplay() {
      document.getElementById("userCount").textContent = currentCount;

      if (currentCount < targetUserCount) {
        currentCount = currentCount + 13;
        requestAnimationFrame(updateDisplay);
      }
      if (currentCount > targetUserCount) {
        currentCount = currentCount - 1;
        requestAnimationFrame(updateDisplay);
      }
    }

    // Start the counting animation
    requestAnimationFrame(updateDisplay);
  }
</script>