<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Student Profile</title>
  <link rel="stylesheet" href="../css/style_details.css" />
</head>

<body>
  <?php
  // Establish a connection to the database
  include 'connection.php';
  if (isset($_GET['prn'])) {
    // Retrieve the PRN value from the URL
    $prnParam = $_GET['prn'];
    $sql = "SELECT * FROM student WHERE PRN = $prnParam"; // Modify this query based on your database schema
    $result = $connection->query($sql);

    // Output data of each row
    while ($row = $result->fetch_assoc()) {
      // Extract data from the database and assign it to variables
      $firstname = $row['Firstname'];
      $middlename = $row['Middlename'];
      $lastname = $row['Lastname'];
      $college_email = $row['college_email'];
      $phone_no = $row['mobile'];
      $Year_of_Study = $row['Year_of_study'];
      $Branch = $row['Branch'];
      $Section = $row['Section'];
      $Year_of_graduation = $row['Year_of_grad'];
      $PRN = $row['PRN'];
      $Enrollment_No = $row['Enrollment_no'];
      $Date_of_Birth = $row['DOB'];
      $Place_of_Birth = $row['POB'];
      $Nationality = $row['Nationality'];
      $Last_college_attended_prior_to_BIT = $row['L-Clg'];
      $Academic_year_of_admission_in_BIT = $row['YOAdm'];
      $Religion = $row['religion'];
      $Category = $row['category'];
      $Reason_for_TC = $row['desc'];
      $Caution_Money_Status = $row['CauMonStatus'];
  ?>

      <?php
      //  jo adhura address connection.php me di hai usko ... ....agla comment padho
      $basicAddress = FETCH_SRC;
      ?>
      <div class="background-container">
        <div class="page-container">
          <div class="blur-card">
            <div class="profile-tile">
              <div>
                <div class="profile-picture" style="background: url('<?php
                                                                      // ...concatination ki madat se pura kia
                                                                      if (!empty($basicAddress) && !empty($row['ProfilePhoto'])) {
                                                                        echo  $basicAddress . $row['ProfilePhoto'];
                                                                      } else {
                                                                        echo "../images/ProfilePicture.png";
                                                                      }

                                                                      ?>')
                        no-repeat center center; background-size: cover;">
                </div>
                <h2 style="color:#023E8A"><?php echo $firstname . " " . $middlename . " " . $lastname; ?></h2>
                <p style="color:#023E8A"><?php echo $Branch . " (" . $Section . ")"; ?></p>
              </div>
              <div class="status-bar">
                <p>Status:
                  <span id="departmentApprovals">
                    <?php
                    include 'calculateDepartments.php';
                    $totalDepartments = calculateTotalDepartments($prnParam);
                    echo $totalDepartments;
                    ?>
                  </span> Department(s) Approved
                  <br>
                  <?php
                  if ($totalDepartments >= 7) {
                    // Use a form to submit the PRN via POST method
                    echo '<form action="../certificate generation/index.php" method="post" id="certificate" >';
                    echo '<input type="hidden" name="prn" value="' . $PRN . '">'; // Add a hidden input field to send PRN

                    echo '</form>';
                    // Create a text link for downloading the certificate
                    echo '<a id="download" onclick="document.getElementById(\'certificate\').submit();">click here to download</a>';
                  }
                  ?>
                </p>
              </div>
            </div>

            <div class="details-tiles">
              <div class="detail-tile">
                <h3 class="detail-title">Contact Information</h3>
                <div class="detail">
                  <span class="detail-label">Email:</span>
                  <span class="detail-value"><?php echo $college_email; ?></span>
                </div>
                <div class="detail">
                  <span class="detail-label">Phone:</span>
                  <span class="detail-value"><?php echo $phone_no; ?></span>
                </div>
              </div>

              <div class="detail-tile">
                <h3 class="detail-title">Academic Details</h3>
                <div class="detail">
                  <span class="detail-label">Year of Study:</span>
                  <span class="detail-value"><?php echo $Year_of_Study; ?></span>
                </div>
                <div class="detail">
                  <span class="detail-label">Branch:</span>
                  <span class="detail-value"><?php echo $Branch; ?></span>
                </div>
                <div class="detail">
                  <span class="detail-label">Section:</span>
                  <span class="detail-value"><?php echo $Section; ?></span>
                </div>
                <div class="detail">
                  <span class="detail-label">PRN:</span>
                  <span class="detail-value"><?php echo $PRN; ?></span>
                </div>
                <div class="detail">
                  <span class="detail-label">Enrollment Number:</span>
                  <span class="detail-value"><?php echo $Enrollment_No; ?></span>
                </div>
              </div>

              <div class="detail-tile">
                <h3 class="detail-title">Personal Information</h3>
                <div class="detail">
                  <span class="detail-label">Date of Birth:</span>
                  <span class="detail-value"><?php echo $Date_of_Birth; ?></span>
                </div>
                <div class="detail">
                  <span class="detail-label">Place of Birth:</span>
                  <span class="detail-value"><?php echo $Place_of_Birth; ?></span>
                </div>
                <div class="detail">
                  <span class="detail-label">Nationality:</span>
                  <span class="detail-value"><?php echo $Nationality; ?></span>
                </div>
                <div class="detail">
                  <span class="detail-label">Religion:</span>
                  <span class="detail-value"><?php echo $Religion; ?></span>
                </div>
                <div class="detail">
                  <span class="detail-label">Category:</span>
                  <span class="detail-value"><?php echo $Category; ?></span>
                </div>
              </div>

              <div class="detail-tile">
                <h3 class="detail-title">Administrative Details</h3>
                <div class="detail">
                  <span class="detail-label">Last College Attended:</span>
                  <span class="detail-value"><?php echo $Last_college_attended_prior_to_BIT; ?></span>
                </div>
                <div class="detail">
                  <span class="detail-label">Academic Year of Admission:</span>
                  <span class="detail-value"><?php echo $Academic_year_of_admission_in_BIT; ?></span>
                </div>
                <div class="detail">
                  <span class="detail-label"> Year_of_graduation :</span>
                  <span class="detail-value"><?php echo $Year_of_graduation; ?></span>
                </div>
                <div class="detail">
                  <span class="detail-label">Reason for TC:</span>
                  <span class="detail-value"><?php echo $Reason_for_TC; ?></span>
                </div>
              </div>
              <!-- Add more detail-tiles for other information clusters -->
            </div>
          </div>
        </div>
      </div>


  <?php
    }
  } else {
    echo "no prn fetched";
  }
  // Close the database connection
  $connection->close();
  ?>
</body>

</html>