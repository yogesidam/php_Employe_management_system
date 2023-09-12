<?php
  if(isset($_POST['update'])){
    $update = $_POST['id'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $address = $_POST['adderss'];

    $query = "UPDATE EMPLOYEE set employee_name = '$name', employee_gender = '$gender', employee_email = '$email', employee_department = '$department', employee_address = '$address' WHERE id = '$update'";
    $data = mysqli_query($connection, $query);

    if($data){
       $_SESSION['msg'] = "Record has been Updated Successfully";
       ?>
       <meta http-equiv="refresh" content="0 ; url = http://localhost/crud/Employee%20Managment%20System/form.php">
       <?php
    }
}
?>