function updateStatusToNull(status) {
    console.log("reached" + status);
    // Send AJAX request to update_status.php
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../Student_Dash/ReRequest.php');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        if (xhr.status === 200) {
            // Check the response text for success or error
            if (xhr.responseText === "Success") {
                // Display success message
                alert('Status updated successfully!');
            } else {
                // Display error message from ReRequest.php
                // alert('ReRequest.php responded: ' + xhr.responseText);
            }
            // Display a confirmation message and button
            var confirmMessage = "Are you sure? Confirm if you've completed the required work.";
            if (confirm(confirmMessage)) {
                // Reload the page after confirming
                location.reload();
            }
        } else {
            // Handle error
            alert('Error updating status');
        }
    };
    xhr.send('department=' + status);
}
