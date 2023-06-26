<!DOCTYPE html>
<html>
  <head>
    <title>Sorted Report of Application Results</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <div class="container">
      <h1>Sorted Report of Application Results</h1>
      <?php
        // Assuming you have a database connection established
        $connection = true;
        // Check if database connection is successful
        if (!$connection) {
          echo "<h3>No database connection found.</h3>";
        } else {
          // Retrieve approved and rejected leave applications from the database
          $query = "SELECT applicant_name, leave_type, status FROM leave_applications WHERE status IN ('Approved', 'Rejected') ORDER BY status";
          $result = mysqli_query($connection, $query);

          if (mysqli_num_rows($result) > 0) {
            echo "
              <table>
                <thead>
                  <tr>
                    <th>Applicant Name</th>
                    <th>Leave Type</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
            ";

            while ($row = mysqli_fetch_assoc($result)) {
              echo "
                <tr>
                  <td>" . htmlspecialchars($row['applicant_name']) . "</td>
                  <td>" . htmlspecialchars($row['leave_type']) . "</td>
                  <td>" . htmlspecialchars($row['status']) . "</td>
                </tr>
              ";
            }

            echo "
                </tbody>
              </table>
            ";
          } else {
            echo "<h3>No leave applications found.</h3>";
          }

          // Close the database connection
          mysqli_close($connection);
        }
      ?>
    </div>
  </body>
</html>
