<?php
include('connection.php');
include('search.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="msg">
    <?php if (isset($_SESSION['msg'])) { ?>
     <center>  <div class="alert alert-success font-weight-bold alert-data-dismissiable">
            <?php echo $_SESSION['msg']; ?>
            <a href="" class="close" data-dismiss="alert" aria-label="close">x</a>
        </div></center> 
    <?php
        unset($_SESSION['msg']);
    } ?>
    </div>
    <div class="container">
        <center>
            <h2>Employee Data Entry Automation Software</h2>
        </center>
        <hr>
        <form action="#" method="POST">
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Search ID" name="id" value="<?php if (isset($_POST['search'])) {
                                                                                                        echo $result['id'];
                                                                                                    } ?>">
            </div>

            <div class="form-group">
                <input type="name" class="form-control" placeholder="Employee Name" name="name" value="<?php if (isset($_POST['search'])) {
                                                                                                            echo $result['employee_name'];
                                                                                                        } ?>">
            </div>

            <div class="form-group">
                <select class="form-control" name="gender">
                    <option value="">Select Gender</option>
                    <option value="Male" <?php if (isset($_POST['search']) && $result['employee_gender'] == 'Male') {
                                                echo "selected";
                                            } ?>>Male</option>
                    <option value="Female" <?php if (isset($_POST['search']) && $result['employee_gender'] == 'Female') {
                                                echo "selected";
                                            } ?>>Female</option>
                    <option value="Other" <?php if (isset($_POST['search']) && $result['employee_gender'] == 'Other') {
                                                echo "selected";
                                            } ?>>Other</option>
                </select>
            </div>

            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email Address" name="email" value="<?php if (isset($_POST['search'])) {
                                                                                                                echo $result['employee_email'];
                                                                                                            } ?>">
            </div>

            <div class="form-group">
                <select class="form-control" name="department">
                    <option value="">Select Department</option>
                    <option value="IT" <?php if (isset($_POST['search']) && $result['employee_department'] == 'IT') {
                                            echo "selected";
                                        } ?>>IT</option>
                    <option value="Accounts" <?php if (isset($_POST['search']) && $result['employee_department'] == 'Accounts') {
                                                    echo "selected";
                                                } ?>>Accounts</option>
                    <option value="Sales" <?php if (isset($_POST['search']) && $result['employee_department'] == 'Sales') {
                                                echo "selected";
                                            } ?>>Sales</option>
                    <option value="HR" <?php if (isset($_POST['search']) && $result['employee_department'] == 'HR') {
                                            echo "selected";
                                        } ?>>HR</option>
                    <option value="Business Development" <?php if (isset($_POST['search']) && $result['employee_department'] == 'Business Development') {
                                                                echo "selected";
                                                            } ?>>Business Development</option>
                    <option value="Marketing" <?php if (isset($_POST['search']) && $result['employee_department'] == 'Marketing') {
                                                    echo "selected";
                                                } ?>>Marketing</option>
                </select>
            </div>

            <div class="form-group">
                <textarea class="form-control" cols="30" rows="3" placeholder="Address" name="adderss"><?php if (isset($_POST['search'])) {
                                                                                                            echo $result['employee_address'];
                                                                                                        } ?></textarea>
            </div>

            <div class="button">
                <center>
                    <button type="submit" class="btn btn-secondary" name="search">Search</button>
                    <button type="submit" class="btn btn-success" name="save">Save</button>
                    <button type="submit" class="btn btn-warning text-light" name="update">Update</button>
                    <button type="submit" class="btn btn-danger" name="delete" onclick="checkdelete()">Delete</button>
                    <button type="reset" class="btn btn-primary" name="clear">Clear</button>
                </center>
            </div>
        </form>
    </div>
    <script>
        function checkdelete() {
            return confirm("Are you sure you want to delect this record ?");
        }
    </script>
</body>

</html>

<?php
include('submit.php');
include('delete.php');
include('update.php');
?>