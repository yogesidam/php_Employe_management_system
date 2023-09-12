<?php
  if(isset($_POST['delete'])){
    $id = $_POST['id'];

    $query = "DELETE FROM EMPLOYEE WHERE id = '$id' ";
    $data = mysqli_query($connection, $query);
    
    if($data){
        $_SESSION['msg'] = "Record has been Deleted Successfully";
        ?>
        <meta http-equiv="refresh" content="0 ; url = http://localhost/crud/Employee%20Managment%20System/form.php">
        <?php    }
  }
?>