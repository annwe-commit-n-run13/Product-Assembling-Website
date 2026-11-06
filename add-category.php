<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>
<br>

            <?php
                if(isset($_SESSION['add']))
                {
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                }
           ?>

        <form action="" method="POST">
            <table class="add-admin-table">
                <tr>
                    <td>Full Name</td>
                    <td>
                        <input type="text" name="full_name" placeholder="Enter Your Full Name" class="input-of-add-admin">
                    </td>
                </tr>

                <tr>
                    <td>Username</td>
                    <td >
                        <input type="text" name="username" placeholder="Enter Your Username" class="input-of-add-admin">
                    </td>
                </tr>

                <tr>
                    <td>Password</td>
                    <td>
                        <input type="password" name="password" placeholder="Enter Your Password" class="input-of-add-admin">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="button-add-admin">
                    </td>
                </tr>
            </table>
        </form>
      
</div>

</div>




<?php include('partials/footer.php'); ?>

<?php

    // here will process the value from form and save it in the database

    // 1st, to check whether the submit button is clicked or not

    if(isset ($_POST ['submit'] ) )
    {
    //     echo "button clicked";

    // 2nd, to get the value from the form after button clicked
    $full_name = $_POST ['full_name']; // the name should be same as the one in form
    $username = $_POST ['username'];
    $password = md5 ($_POST ['password']) ;


    // 3rd, SQL query to save the data into the database
        $sql = "INSERT INTO table_admin 
                SET
                    fullname = '$full_name', 
                    username = '$username',
                    password = '$password'
                ";
    // left side col name from the db and right side is from the form

  
    
    // 4th if the query is successful then the data will be saved in the database by doing the folowing
    $res = mysqli_query($conn, $sql) or die(mysqli_error());

    //5th check whether the data is inserted or not and display message

    if($res==TRUE)
    {
        // echo "data inserted";

        // create a session variable to display message
        $_SESSION['add'] = "<div class = 'success-message-add'>Admin Added Successfully</div>";
        // then redirect the page 
        header("location:".SITEURL.'manage-admin.php');
    }
    else
    {
        // echo "data insertion was not successfull";
        // create a session variable to display message
        $_SESSION['add'] = "Admin Could Not Be Added";
        // then redirect the page 
        header("location:".SITEURL.'add-admin.php');
    }
    
    }

?>


