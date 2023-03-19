<?php 
    include "db_connect.php";

    if (isset($_POST['submit'])) {
        $name = $_POST['username'];
        $password = $_POST['password'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $fullname = $_POST['full_name'];
        $gender = $_POST['gender'];

        // Check if any field is empty
        if (empty($name) || empty($fullname) || empty($gender)|| empty($password) || empty($age) || empty($email)) {
            echo "<script>alert('Please fill in all the fields.');</script>";
        } else {
            // Prepare SQL statement to insert data into database
            $sql = "INSERT INTO tb_user (name, password, age, email, fullname, gender) VALUES (?, ?, ?, ?, ?, ?)";
            
            // Prepare the SQL statement
            $stmt = $conn->prepare($sql);
            
            // Bind the parameters to the SQL statement
            $stmt->bind_param("ssisss", $name, $password, $age, $email, $fullname, $gender);
            
            // Execute the SQL statement
            if ($stmt->execute()) {
                
                // Redirect to another page
                header("Location: ../../login.php");
                exit();
               
            } else {
                // Display error alert
                echo "<script>alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
            }
            
            // Close the statement
            $stmt->close();
        }
    }
?>
