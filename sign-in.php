<?php
    $email = $_POST['Email'];
    $password = $_POST['Password'];

    // data base Connection 
    $con = new mysqli("localhost","root","","login");
    if($con->connect_error){
        die ('connection Error' .$con->connect_error);
    }else{
        $stmt = $con->prepare("select * from registration where Email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data = $stmt_result->fetch_assoc();
            if($data['Password']=== $password){
                echo "Login Succesfully";
            }else{
                echo "Invalid email or password ";
            }

        } else{
            echo "Invalid email or password ";

        }
    }
?>