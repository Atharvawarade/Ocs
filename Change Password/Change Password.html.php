<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Change Password Modal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
  <?php
  if (isset($_POST['userId'])) {
    $userId = $_POST['userId'];  //setting posted userid as variable to be usedin this file
    $_POST['userId'] = $userId;    //setting variable userid as post element to be used by next php file i.e.Change_password_php.php
  ?>
    <!-- Button trigger modal
    <button
      type="button"
      class="btn btn-primary"
      data-bs-toggle="modal"
      data-bs-target="#changePasswordModal"
    >
      Launch Change Password Modal
    </button> -->

  
    <div class="modal fade" id="changePasswordModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="changePasswordModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="changePasswordModalLabel">
              Change Password
            </h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="changePasswordForm" action="../Change Password/Change_password_php.php" method="post">
              <!-- Add a hidden input field for userId -->
              <input type="hidden" name="userId" value="<?php echo $userId; ?>">

              <div class="mb-3">
                <label for="oldPassword" class="form-label">Old Password:</label>
                <input type="password" class="form-control" id="oldPassword" name="oldPassword" required />
              </div>
              <div class="mb-3">
                <label for="newPassword" class="form-label">New Password:</label>
                <input type="password" class="form-control" id="newPassword" name="newPassword" required />
              </div>
              <div class="mb-3">
                <label for="confirmPassword" class="form-label">Confirm New Password:</label>
                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required />
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                  Close
                </button>
                <button type="button" class="btn btn-primary" onclick="changePassword()">
                  Change Password
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script>
      function changePassword() {
        // Add client-side validation logic here if needed

        if (document.getElementById("newPassword").value === document.getElementById("confirmPassword").value) {

          // Submit the form if validation passes
          document.getElementById("changePasswordForm").submit();
        } else {
          alert("Password dosen't match retyped password.");
        }
      }
    </script>
</body>

</html>
<?php
  }
?>