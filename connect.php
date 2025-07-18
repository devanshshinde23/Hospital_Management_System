<?php
    $Name = $_POST['Name'];
    $Phone_No = $_POST['Phone_No'];
    $Age = $_POST['Age'];
    $Gender = $_POST['Gender'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    // Data Base Connectivity

    $conn = new mysqli('localhost','root','','login');
    if($conn->connect_error){
        die('connection Failed :'.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("Insert into Registration(Name,number,Age,Gender,Email,Password) values(?,?,?,?,?,?)");
        $stmt -> bind_param("ssisss",$Name,$Phone_No,$Age,$Gender,$Email,$Password);
        // $stmt->execute();
        // echo " Registration Successfully....";

        if ($stmt->execute()) {
            echo "Data inserted successfully!";

        } else {
            echo "Error: " . $stmt->error;
        }


        $stmt->close();
        $conn->close();
    }

?>