<?php
  if(isset($_POST['search'])){
    $search = $_POST['id'];

    $query = "SELECT * FROM EMPLOYEE WHERE id = '$search' ";
    $data = mysqli_query($connection, $query);
    $result =mysqli_fetch_assoc($data);
  }
?>