<?php

    // $email = $_POST['Email'];
    // $password = $_POST['Password'];

    // // data base Connection 
    // $con = new mysqli("localhost","root","","login");
    // if($con->connect_error){
    //     die ('connection Error' .$con->connect_error);
    // }else{
    //     $stmt = $con->prepare("select * from registration where Email = ?");
    //     $stmt->bind_param("s", $email);
    //     $stmt->execute();
    //     $stmt_result = $stmt->get_result();
    //     if($stmt_result->num_rows > 0){
    //         $data = $stmt_result->fetch_assoc();
    //         if($data['Password']=== $password){
    //              // ✅ Redirect to dashboard.html
    //             header("Location: index.html");
    //             exit(); // Always use exit() after header redirection
    //         }else{
                
    //              echo "<script>alert('Invalid password and email');</script>";
    //         }

    //     } else{
    //         echo "Invalid email or password ";

    //     }
    // }


?>

<?php
// Database connection
$con = new mysqli("localhost", "root", "", "your_database_name");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Get form values
$name = $_POST['Name'];
$phone = $_POST['Phone_No'];
$age = $_POST['Age'];
$gender = $_POST['Gender'];
$email = $_POST['Email'];
$password = $_POST['Password'];

// Basic validation
if (!empty($name) && !empty($phone) && !empty($age) && !empty($gender) && !empty($email) && !empty($password)) {
    // Insert query
    $sql = "INSERT INTO users (Name, Phone_No, Age, Gender, Email, Password) 
            VALUES ('$name', '$phone', '$age', '$gender', '$email', '$password')";

    if ($con->query($sql) === TRUE) {
        echo "<script>alert('✅ Data inserted successfully!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('❌ Error inserting data: " . $con->error . "'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('⚠️ Invalid details. All fields are required.'); window.history.back();</script>";
}

$con->close();
?>


