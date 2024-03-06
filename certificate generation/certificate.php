<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <style>
    @media print {
      body {
        margin: 0;
        padding: 0;
        font-size: 14px;
        font-family: "Times New Roman", serif;
      }

      table {
        font-size: 14px;
      }

      header,
      footer {
        display: none;
      }

      @page {
        size: A4;
        /* margin: 0; */
      }

      /* Exclude headers and footers */
      /* @page :left {
        margin-left: 0;
      }

      @page :bottom {
        margin-left: 0;
      } */
    }
  </style>
</head>

<body>
  <?php
  include 'student_table.php';
  ?>
  <p style="text-align: center">
    <img src="Picture1.png" align="left" alt="image" style="float: left; height: 120px; width: 120px; font-size: 16" />
    Shiksha Mandal's
  </p>
  <h1 style="text-align: center; font-size: 20">
    <strong>Bajaj Institute of Technology,</strong>
  </h1>
  <p style="text-align: center; font-size: 14">Pipri – Wardha</p>
  <p style="text-align: center; font-size: 14">
    Post Box. No. 25, Pin code: 442001
  </p>
  <hr style="margin-bottom: 5px" />
  <p style="text-align: center; font-size: 14px; margin: 0">
    Email: <a href="mailto:bit@bitwardha.ac.in">bit@bitwardha.ac.in</a> Phone:
    07152-295473
  </p>
  <hr style="margin-top: 5px" />
  <p style="text-align: center; font-size: 16">
    <strong>No dues for TC</strong>
  </p>
  <p>
    Date: <span id="currentDate"></span>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    Contact Number: <?php echo $phone_no ?>
  </p>
  <p>To,</p>
  <p>The Principal,</p>
  <p>Bajaj Institute of Technology, Wardha</p>
  <p>
    <strong>Subject:</strong>
    <strong>Request for issuing of Transfer/Leaving Certificate (TC)</strong>
  </p>
  <p>Respected Sir,</p>
  <p>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; I am a Regular student of this
    institute during the year
    <strong>
      <?php
      echo $Academic_year_of_admission_in_BIT . "-" . $Year_of_graduation;
      ?>
    </strong>
    &nbsp;
  </p>
  <p>My particular is as under:</p>
  <ol>
    <li>Name: <strong><?php echo $firstname . " " . $middlename . " " . $lastname; ?></strong>&nbsp;</li>
    <li>
      Year: <strong><?php echo $Year_of_Study ?></strong>
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      Branch: <strong><?php echo $Branch ?></strong>&nbsp;
    </li>
    <li>
      Section: <strong><?php echo $Section ?></strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      University Roll No.: <strong><?php echo $PRN ?></strong>
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
      Enrollment No: <strong><?php echo $Enrollment_No ?></strong>
      &nbsp;
    </li>
    <li>Date of Birth: <strong><?php echo $Date_of_Birth ?></strong>&nbsp;</li>
    <li>
      Place of Birth: <strong><?php echo $Place_of_Birth ?></strong>
      &nbsp; &nbsp; &nbsp; &nbsp;
      &nbsp; &nbsp; &nbsp; &nbsp;
      &nbsp; &nbsp; &nbsp;
      Nationality/Domicile: <strong><?php echo $Nationality ?></strong>
    </li>
    <li>Last College Attended prior to BIT: <strong><?php echo $Last_college_attended_prior_to_BIT ?></strong> &nbsp;</li>
    <li>Academic Year of admission in BIT: <strong><?php echo $Academic_year_of_admission_in_BIT ?></strong></li>
    <li>Religion/ Race: <strong><?php echo $Religion ?></strong>&nbsp;</li>
    <li>Category: <strong><?php echo $Category ?></strong>&nbsp;</li>
    <li>Reason for TC: <strong><?php echo $Reason_for_TC ?></strong>&nbsp;</li>
    <li>Caution money status: <strong><?php echo $Caution_Money_Status ?></strong>&nbsp;</li>
  </ol>
  <p><strong>No Dues Certificate form:</strong></p>
  <?php
  include 'status_table.php';
  include 'incharge_table.php';
  ?>
  <table style="border-collapse: collapse; border: 1pt solid black; width: 100%">
    <tr>
      <th style="border: 1pt solid black; padding: 2px; align-items: center;">Sr. No.</th>
      <th style="border: 1pt solid black; padding: 2px">Lab/Department</th>
      <th style="border: 1pt solid black; padding: 2px">Incharge</th>
      <th style="border: 1pt solid black; padding: 2px">Clearance Status</th>
    </tr>
    <tr>
      <td style="border: 1pt solid black; padding: 2px;  text-align: center;">1.</td>
      <td style="border: 1pt solid black; padding: 2px">
        H.O.D. of Concerned Department
      </td>
      <td style="border: 1pt solid black; padding: 2px">
        <?php
        if ($Year_of_Study == 1) {
          echo $FY_HOD_incharge;
        } else if ($Branch == "Computer Engineering") {
          echo $COMP_HOD_incharge;
        } else if ($Branch == "Mechanical Engineering") {
          echo $MECH_HOD_incharge;
        } else if ($Branch == "Electrical Engineering") {
          echo $ELEC_HOD_incharge;
        } else if ($Branch == "Civil Engineering") {
          echo $CIVIL_HOD_incharge;
        }
        ?>
        &nbsp;
      </td>
      <td style="border: 1pt solid black; padding: 2px"><?php echo $HOD_status ?>&nbsp;</td>
    </tr>
    <tr>
      <td style="border: 1pt solid black; padding: 2px;  text-align: center;">2.</td>
      <td style="border: 1pt solid black; padding: 2px">Fine</td>
      <td style="border: 1pt solid black; padding: 2px"><?php echo $FINE_incharge ?>&nbsp;</td>
      <td style="border: 1pt solid black; padding: 2px"><?php echo $fine_status ?>&nbsp;</td>
    </tr>
    <tr>
      <td style="border: 1pt solid black; padding: 2px; text-align: center;">3.</td>
      <td style="border: 1pt solid black; padding: 2px">Computer Center</td>
      <td style="border: 1pt solid black; padding: 2px"><?php echo $CC_incharge ?>&nbsp;</td>
      <td style="border: 1pt solid black; padding: 2px"><?php echo $CC_status ?>&nbsp;</td>
    </tr>
    <tr>
      <td style="border: 1pt solid black; padding: 2px; text-align: center;">4.</td>
      <td style="border: 1pt solid black; padding: 2px">Library</td>
      <td style="border: 1pt solid black; padding: 2px"><?php echo $LIB_incharge ?>&nbsp;</td>
      <td style="border: 1pt solid black; padding: 2px"><?php echo $Library_HOD_status ?>&nbsp;</td>
    </tr>
    <tr>
      <td style="border: 1pt solid black; padding: 2px;  text-align: center;">5.</td>
      <td style="border: 1pt solid black; padding: 2px">Sports</td>
      <td style="border: 1pt solid black; padding: 2px"><?php echo $SPORT_incharge ?>&nbsp;</td>
      <td style="border: 1pt solid black; padding: 2px"><?php echo $Sports_status ?>&nbsp;</td>
    </tr>
    <tr>
      <td style="border: 1pt solid black; padding: 2px;  text-align: center;">6.</td>
      <td style="border: 1pt solid black; padding: 2px">
        T &amp; P Department
      </td>
      <td style="border: 1pt solid black; padding: 2px"><?php echo $TNP_incharge ?>&nbsp;</td>
      <td style="border: 1pt solid black; padding: 2px"><?php echo $TNP_status ?>&nbsp;</td>
    </tr>
    <tr>
      <td style="border: 1pt solid black; padding: 2px;  text-align: center;">7.</td>
      <td style="border: 1pt solid black; padding: 2px">
        Scholarship Department
      </td>
      <td style="border: 1pt solid black; padding: 2px"><?php echo $SCHR_incharge ?>&nbsp;</td>
      <td style="border: 1pt solid black; padding: 2px"><?php echo $Scholarship_status ?>&nbsp;</td>
    </tr>
    <tr>
      <td style="border: 1pt solid black; padding: 2px; text-align: center;">8.</td>
      <td style="border: 1pt solid black; padding: 2px">
        Account Department
      </td>
      <td style="border: 1pt solid black; padding: 2px"><?php echo $ACCNT_incharge ?>&nbsp;</td>
      <td style="border: 1pt solid black; padding: 2px"><?php echo $Accountant_status ?>&nbsp;</td>
    </tr>
  </table>
  <p>
    Therefore, I request you to kindly issue me all my Original documents, if
    any and Leaving Certificate (TC).
  </p>
  <p>Thanking You,</p>
  <br>
  <p>
    Signature of Candidate &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Principal
  </p>

</body>
<script>
  // Get the current date
  var currentDate = new Date();

  // Get day, month, and year
  var day = currentDate.getDate();
  var month = currentDate.toLocaleString('default', {
    month: 'long'
  });
  var year = currentDate.getFullYear();

  // Add suffix to the day
  var suffix = '';
  if (day % 10 === 1 && day !== 11) {
    suffix = 'st';
  } else if (day % 10 === 2 && day !== 12) {
    suffix = 'nd';
  } else if (day % 10 === 3 && day !== 13) {
    suffix = 'rd';
  } else {
    suffix = 'th';
  }

  // Format the date
  var formattedDate = day + suffix + " " + month + " " + year;

  // Display the date in the span element
  document.getElementById("currentDate").textContent = formattedDate;
</script>

</html>