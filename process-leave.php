<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Leave Application Result</title>
  <?php
  // Include the CSS file link
  echo '<link rel="stylesheet" href="styles.css">';
  ?>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve form data
  $applicantName = $_POST['applicantName'];
  $leaveType = $_POST['leaveType'];
  $startDate = $_POST['startDate'];
  $endDate = $_POST['endDate'];
  $reason = $_POST['reason'];
  $action = $_POST['action'];

  // Perform the necessary processing based on the selected action
  if ($action === 'approve') {
    // Process the leave application approval
    // Example: Update the leave application status in the database
    $status = 'Approved';
  } elseif ($action === 'reject') {
    // Process the leave application rejection
    // Example: Update the leave application status in the database
    $status = 'Rejected';
  }

  // Display the result to the user
  echo '<div class="container">';
  echo '<h3 class="result-title">Leave Application Result</h3>';
  echo '<div class="result-container">';
  echo '<div class="result-item"><span class="result-label">Applicant Name:</span>' . $applicantName . '</div>';
  echo '<div class="result-item"><span class="result-label">Leave Type:</span>' . $leaveType . '</div>';
  echo '<div class="result-item"><span class="result-label">Start Date:</span>' . $startDate . '</div>';
  echo '<div class="result-item"><span class="result-label">End Date:</span>' . $endDate . '</div>';
  echo '<div class="result-item"><span class="result-label">Reason:</span>' . $reason . '</div>';
  echo '<div class="result-item"><span class="result-label">Action:</span>' . $action . '</div>';
  echo '<div class="result-item"><span class="result-label">Status:</span>' . $status . '</div>';
  echo '</div>'; // Closing result-container
  echo '</div>'; // Closing container
}
?>
</body>
</html>

