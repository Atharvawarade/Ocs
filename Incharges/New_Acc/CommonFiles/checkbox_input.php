<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        .d-flex {
            gap: 20px;
        }

        .active {
            color: #fff;
            background-color: #198754;
            border-color: #198754;
        }

        .Dactive {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
        }
    </style>
    <?php
    if (!function_exists('generateCheckboxInput')) {
        function generateCheckboxInput($prn, $status)
        {
            $acceptLabel = $status == '1' ? 'Accepted' : 'Accept';
            $rejectLabel = $status == '0' ? 'Rejected' : 'Reject';
            echo
            '
            <form id="myForm_' . $prn . '" class="d-flex flex-row" action="update_status.php" method="post">
                <button type="button" class="btn btn-outline-success ' . ($status == 1 ? 'active' : '') . '" onclick="submitForm(\'' . $prn . '\', 1,)">' . $acceptLabel . '</button>
                <button type="button" class="btn btn-outline-danger ' . ($status == 0 ? 'Dactive' : '') . '" onclick="openRejectModal(\'' . $prn . '\')">' . $rejectLabel . '</button> 
            </form>
            ';
        }
    }
    ?>

    <!-- Modal HTML -->
    <div id="rejectModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Reject Reason</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                    <textarea id="rejectReason" class="form-control" placeholder="Enter rejection reason"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Cancel
                    </button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick=" setStatusToReject()">Reject</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function submitForm(prn, checkboxValue, msg) {
            // Make an AJAX request
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Replace the entire table body with the updated content
                    document.getElementById("try").innerHTML = xhr.responseText;
                }
            };
            // Submit prn, checkboxValue, and msg to update_status.php
            xhr.open("POST", "update_status.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.send("prn=" + prn + "&checkboxValue=" + checkboxValue + "&msg=" + encodeURIComponent(msg));
        }

        function openRejectModal(prn) {
            // Pass prn to the modal function
            $('#rejectModal').modal('show');
            // Store prn in a global variable accessible to setStatusToReject
            window.rejectPRN = prn;
        }

        function setStatusToReject() {
            var prn = window.rejectPRN; // Get prn from global variable
            var msg = document.getElementById('rejectReason').value; // Get rejection reason from modal
            var status = 0;
            // console.log(prn, msg);
            // Now you can submit prn, status, and msg to the server
            submitForm(prn, status, msg);
        }
    </script>
</body>

</html>