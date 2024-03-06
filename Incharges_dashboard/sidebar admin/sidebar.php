<?php
if (isset($_SESSION['ID'])) {
  $userId = $_SESSION['ID'];
  // echo $userId;
}
?>
<!DOCTYPE html>
<html class="fontawesome-i2svg-active fontawesome-i2svg-complete">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <title>Collapsible sidebar using Bootstrap 4</title>

  <!-- Our Custom CSS -->
  <link rel="stylesheet" href="sidebar/style_sidebar.css" />
  <!-- Bootstrap CSS CDN  -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous" />


  <!-- Font Awesome JS -->
  <script defer="" src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
  <script defer="" src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
  <!-- <div class="wrapper"> -->
  <!-- Sidebar Holder -->
  <nav id="sidebar">
    <div class="sidebar-header">
      <h3>Clear Gate</h3>
    </div>

    <ul class="list-unstyled components">

      <li class="active">
        <a href data-toggle="collapse" aria-expanded="false" id="dropdown" class="dropdown-toggle collapsed">Approve now</a>
        <ul id="dropdownUL" class="collapse list-unstyled" id="homeSubmenu">
          <li>
            <a href="../Incharges/New_Acc/Requested/main.php">Requested</a>
          </li>
          <li>
            <a href="../Incharges/New_Acc/Pending/main.php">Pending</a>
          </li>
        </ul>
      </li>
      <li class="active">
        <a href="../Incharges/New_Acc/Approved/main.php">Approved</a>
      </li>
      <li class="active">
        <a href="../Incharges/Incharges_Requirement/All_Students/main.php">All Students</a>
      </li>
      <li class="active">
        <a href="../Incharges/Admin_Requirement/Manage_Incharge.php">Manage Incharges</a>
      </li>
    </ul>

    <ul class="list-unstyled CTAs">
      <li>
        <a href="" class="download">Profile</a>
      </li>
      <li>
        <a href class="download" data-bs-toggle="modal" data-bs-target="#changePasswordModal">Change Password</a>
      </li>
      <li>
        <a href="logout.php" class="article">LogOut</a>
      </li>
    </ul>
  </nav>

  <?php
  // Pass the user ID as a POST parameter
  $_POST['userId'] = $userId;
  include "Change Password/Change Password.html.php";
  ?>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Get the "Approve now" link and the associated dropdown UL
      var approveNowLink = document.querySelector('#dropdown');
      var dropdownUL = document.querySelector('#dropdownUL');

      // Set aria-expanded to true initially
      approveNowLink.setAttribute('aria-expanded', 'true');

      // Add a click event listener to the "Approve now" link
      approveNowLink.addEventListener('click', function() {
        // Toggle the aria-expanded attribute value
        var isExpanded = approveNowLink.getAttribute('aria-expanded') === 'true';
        approveNowLink.setAttribute('aria-expanded', (!isExpanded).toString());

        // Toggle the collapse class on the dropdown UL
        dropdownUL.classList.toggle('show');
      });
    });
  </script>



  <!-- jQuery CDN - Slim version (=without AJAX) -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <!-- Popper.JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</body>

</html>