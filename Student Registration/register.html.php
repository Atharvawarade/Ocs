<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Student Form</title>
  <link rel="stylesheet" href="../css/style_Stud_reg.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
</head>

<body>
  <h1 class="form-title">Online Clearance System</h1>
  <div class="container">
    <form id="studentForm" class="glassmorphism" action="../PHP/register_form.php" enctype="multipart/form-data" method="POST">
      <div class="form-row">
        <!-- Firstname -->
        <div class="form-group col-md-4">
          <label for="Firstname">First Name:</label>
          <input type="text" class="form-control" id="Firstname" name="Firstname" placeholder="Firstname" />
        </div>
        <!-- Middlename -->
        <div class="form-group col-md-4">
          <label for="Middlename">Middle Name:</label>
          <input type="text" class="form-control" id="Middlename" name="Middlename" placeholder="Middlename" />
        </div>
        <!-- Lastname -->
        <div class="form-group col-md-4">
          <label for="Lastname">Last Name:</label>
          <input type="text" class="form-control" id="Lastname" name="Lastname" placeholder="Lastname" />
        </div>
      </div>

      <div class="form-row">
        <!-- college_email -->
        <div class="form-group col-md-6">
          <label for="college_email">College Email:</label>
          <input type="email" class="form-control" id="college_email" name="college_email" placeholder="College Email" required />
          <span id="emailError" style="color: red;"></span>
        </div>
        <!-- Mobile -->
        <div class="form-group col-md-6">
          <label for="phone_no">Mobile:</label>
          <input type="tel" class="form-control" id="phone_no" name="phone_no" placeholder="Phone no." />
        </div>
      </div>

      <div class="form-row">
        <!-- Year of study -->
        <div class="form-group col-md-4">
          <label for="Year_of_Study">Year of Study:</label>
          <select class="form-control" id="Year_of_Study" name="Year_of_Study">
            <option value="">Select</option>
            <option value="1st Year">1st Year</option>
            <option value="2nd Year">2nd Year</option>
            <option value="3rd Year">3rd Year</option>
            <option value="4th Year">4th Year</option>
          </select>
        </div>
        <!-- Branch Dropdown -->
        <div class="form-group col-md-4">
          <label for="Branch">Branch:</label>
          <select class="form-control" id="Branch" name="Branch">
            <option value="">Select</option>
            <option value="Computer Engineering">Computer Engineering</option>
            <option value="Electrical Engineering">Electrical Engineering</option>
            <option value="Civil Engineering">Civil Engineering</option>
            <option value="Mechanical Engineering">Mechanical Engineering</option>
          </select>
        </div>
        <!-- Section Dropdown -->
        <div class="form-group col-md-4">
          <label for="Section">Section:</label>
          <select class="form-control" id="Section" name="Section">
            <option value="">Not Applicable</option>
            <option value="A">A</option>
            <option value="B">B</option>
          </select>
        </div>
      </div>

      <div class="form-row">
        <!-- Year of Graduation Dropdown -->
        <div class="form-group col-md-4">
          <label for="Year_of_graduation">Year of Graduation:</label>
          <select class="form-control" id="Year_of_graduation" name="Year_of_graduation" placeholder="Year of graduation">
            <?php
            // Get the current year
            $currentYear = date("Y");

            // Set the range of years you want in the dropdown
            $startYear = $currentYear - 2; // Modify this range as needed
            $endYear = $currentYear + 2;   // Modify this range as needed

            // Loop through the range of years and create options
            for ($year = $startYear; $year <= $endYear; $year++) {
              echo "<option value='$year'>$year</option>";
            }
            ?>
          </select>
        </div>
        <!-- PRN -->
        <div class="form-group col-md-4">
          <label for="PRN">PRN:</label>
          <input type="varchar" class="form-control" id="PRN" name="PRN" placeholder="PRN" />
        </div>
        <!-- enrollment no -->
        <div class="form-group col-md-4">
          <label for="Enrollment_No">Enrollment No:</label>
          <input type="varchar" class="form-control" id="Enrollment_No" name="Enrollment_No" placeholder="Enrollment No." />
        </div>
      </div>

      <div class="form-row">
        <!-- DOB -->
        <div class="form-group col-md-4">
          <label for="Date_of_Birth">Date of Birth:</label>
          <input type="date" class="form-control" id="Date_of_Birth" name="Date_of_Birth" />
        </div>
        <!-- Place of birth -->
        <div class="form-group col-md-4">
          <label for="Place_of_Birth">Place of Birth:</label>
          <input type="text" class="form-control" id="Place_of_Birth" name="Place_of_Birth" placeholder="City" />
        </div>
        <!-- Nationality -->
        <div class="form-group col-md-4">
          <label for="Nationality">Nationality:</label>
          <input type="text" class="form-control" id="Nationality" name="Nationality" value="Indian" readonly />
        </div>
      </div>
      <!-- last college -->
      <div class="form-row">
        <div class="form-group col-md-9">
          <label for="Last_college_attended_prior_to_BIT">Last College Attended:</label>
          <input type="varchar" class="form-control" id="Last_college_attended_prior_to_BIT" name="Last_college_attended_prior_to_BIT" placeholder="Previous College" />
        </div>
        <!-- Year of Admission Dropdown -->
        <div class="form-group col-md-3">
          <label for="Academic_year_of_admission_in_BIT">Academic Year of Admission in BIT:
          </label>
          <input type="varchar" class="form-control" id="Academic_year_of_admission_in_BIT" name="Academic_year_of_admission_in_BIT" />
        </div>
      </div>

      <div class="form-row">
        <!-- religion -->
        <div class="form-group col-md-4">
          <label for="Religion">Religion:</label>
          <input type="text" class="form-control" id="Religion" name="Religion" placeholder="Religion" />
        </div>
        <!-- category -->
        <div class="form-group col-md-4">
          <label for="Category">Category:</label>
          <select class="form-control" id="Category" name="Category">
            <option value="">Select</option>
            <option value="SC">SC</option>
            <option value="ST">ST</option>
            <option value="DTNT">DTNT</option>
            <option value="VJNT">VJNT</option>
            <option value="OBC">OBC</option>
            <option value="SBC">SBC</option>
            <option value="OPEN">OPEN</option>
          </select>
        </div>
        <!-- reason for tc -->
        <div class="form-group col-md-4">
          <label for="Reason_for_TC">Reason for TC:</label>
          <textarea class="form-control" id="Reason_for_TC" name="Reason_for_TC" value="Graduated" rows="1"></textarea>
        </div>
      </div>

      <div class="form-row">
        <!-- Caution Money Status Radio Buttons -->
        <div class="form-group col-md-4">
          <label>Caution Money Status:</label>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="Caution_Money_Status" id="Yes" value="Yes" style="width: 10px; height: 10px; border-radius: 5px;" />
            <label class="form-check-label" for="Yes">Paid</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="Caution_Money_Status" id="No" value="No" style="width: 10px; height: 10px; border-radius: 5px;" />
            <label class="form-check-label" for="No">Unpaid</label>
          </div>
        </div>

        <!-- Add file input for ProfilePhoto -->
        <div class="form-group col-md-6">
          <label for="ProPhoto">Profile Photo:</label>
          <input type="file" class="custom-file-upload" id="ProPhoto" name="ProPhoto" accept=" .jpg,.png , .jpeg" onchange="validateFile()" />
          <p style="font-size: smaller; margin-top: 10px; color: #023E8A">
            Only upload picture with <span style="color: red">dimention ratio 1:1</span> (JPG,JPEG,PNG format) <span style="color: red"> maximum size of 50 kb</span>.
          </p>
        </div>
      </div>

      <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
  </div>

  <script>
    document.getElementById('studentForm').addEventListener('submit', function(event) {
      var collegeEmail = document.getElementById('college_email').value;
      var emailError = document.getElementById('emailError');

      // Check if email contains "@bitwardha.ac.in"
      if (collegeEmail.indexOf('@bitwardha.ac.in') === -1) {
        emailError.textContent = "Please provide a valid college email ending with @bitwardha.ac.in";
        event.preventDefault(); // Prevent form submission
      } else {
        emailError.textContent = ""; // Clear error message
      }
    });
  </script>

  <script>
    function validateFile() {
      var fileInput = document.getElementsByName('ProPhoto')[0]; // Access the first element of NodeList
      if (fileInput.files.length > 0) {
        var img = new Image();
        img.src = window.URL.createObjectURL(fileInput.files[0]);

        img.onload = function() {
          if (img.width === img.height) {
            var fileSize = fileInput.files[0].size; // in bytes
            var maxSize = 5 * 1024 * 1024; // 50 KB

            if (fileSize > maxSize) {
              alert("Please upload a square image with a maximum size of 50 KB.");
            }
          } else {
            alert("Image dimention is noot in the ratio 1:1.");
          }
        };
      }
    }
  </script>

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
</body>

</html>