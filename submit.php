<?php
 if(isset($_POST['save'])){
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $address = $_POST['adderss'];

    $query = "INSERT INTO EMPLOYEE (employee_name, employee_gender, employee_email, employee_department, employee_address)
              VALUES ('$name', '$gender', '$email', '$department', '$address')";
    $data = mysqli_query($connection, $query);
    if($data){
        $_SESSION['msg'] = "Record has been Submited Successfully";
        ?>
        <meta http-equiv="refresh" content="0 ; url = http://localhost/crud/Employee%20Managment%20System/form.php">
        <?php    }
 }
?>