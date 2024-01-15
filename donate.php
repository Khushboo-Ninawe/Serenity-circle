<?php
    include('database.php');

    if(isset($_POST['submit']))
    {
        $name = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];
        $dob = $_POST['dob'];
        $amount = $_POST['amount'];

        if (!preg_match ("/^[a-z A-z]*$/", $name)) {    
            echo '<script>alert("Only alphabets and whitespace are allowed In Name Field.")</script>';  
        }
        else if(strlen((string)$phone) != 10) {
            echo '<script>alert("Please Enter 10 Digit Phone Number.")</script>';
        }
        else {
            $sql = "INSERT INTO serenity VALUES (' ', '$name', '$email', '$phone', '$city', '$dob', $amount)"; 
            $result = mysqli_query($conn, $sql);

            if($result)
            {
                echo '<script> alert("Your Details Recorded Successfully!")</script>';
                echo '<script> window.location.href = "https://rzp.io/l/IHAm09XD"; </script>';
                exit;
            }
            else
            {
                echo '<script> alert("Something Went Wrong !")</script>';
            }
        }    
        mysqli_close($conn);
    }
?>