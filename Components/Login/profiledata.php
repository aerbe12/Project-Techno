<?php

    include 'db_connect.php';

      // Retrieve the user ID from the session
      $user_id = $_SESSION['username'];

      // Build a SQL query to retrieve all data for the logged-in user
      $sql = "SELECT * FROM tb_user WHERE name = '$user_id'";

      // Execute the query and retrieve the result
      $result = mysqli_query($conn, $sql);

      // Check if the query was successful
      if ($result && mysqli_num_rows($result) > 0) {
          // Loop through the result and display each row on the page
          while ($row = mysqli_fetch_assoc($result)) {
            echo '<p> Nama:  ' . $row['fullname'] . '</p>';
            echo '<p> Umur:  ' . $row['age'] . '</p>';
            echo '<p> Jenis kelamin:  ' . $row['gender'] . '</p>';
            echo '<p> Email:  ' . $row['email'] . '</p>';
              // add additional fields as needed
              echo "<br>";
          }
      } else {
          // Display an error message if the query failed or no results were found
          echo "Error: Could not retrieve data";
      }

      // Close the database connection
      mysqli_close($conn);

    ?>