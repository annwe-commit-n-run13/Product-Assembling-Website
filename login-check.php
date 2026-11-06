<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1 class = "text-center">Admin Login Section</h1>
        <br>

        <?php
            if (isset($_SESSION['login']))
            {
                echo $_SESSION['login'];
                unset ($_SESSION['login']);
            }
      

            if (isset($_SESSION['no-login-message']))
            {
                echo $_SESSION['no-login-message'];
                unset ($_SESSION['no-login-message']);
            }
        ?>
        <br> <br>

        <form action="" method = "POST">
            <table class="table-manage-admin">
                    <tr>
                        <td>Username</td>
                        <td>
                            <input type="text" class="input-of-login-admin-username" name = "username" placeholder ="Enter Your Username" >
                        </td>
                    </tr>

                    <tr>
                        <td>Password</td>
                        <td>
                            <input type="password" class="input-of-login-admin-password"  name ="password" placeholder ="Enter Your Password"> <br>
                        </td>
                    </tr>

                    <tr>
                        <td colspan = "2">
                            <input type="submit"  name ="submit" value = "Login" class = "button-add-admin">
                        </td>
                    </tr>
            </table>
        </form>

    </div>
</div>
   

<?php
    if (isset ($_POST['submit']))
    {
        // process for login

        // 1. get the data from login form
        $username = $_POST['username'];
        $password = md5 ($_POST['password']);

        // 2. sql query to check whether the admin with that username and password exist or not
        $sql = "SELECT * FROM table_admin WHERE username = '$username' AND password = '$password'";

        // 3. execute the query
        $res = mysqli_query($conn, $sql);

        // 4. count the number of row to seee if the user exists or not
        $count = mysqli_num_rows($res);

        if ($count == 1)
        {
            // user availablr and login success
            $_SESSION ['login'] = "<div class='success-message-add' > Login Successful. Welcome Admin $username</div>";

            // to see if user is logged in or not
            $_SESSION['user'] = $username;

            header('location:'.SITEURL.'admin.php');
        }
        else 
        {
            // user not avalable and login not successful
            $_SESSION ['login'] = "<div class='success-message-delete' > Username or Password Did Not Match. Login Was Not Successful </div>";
            header('location:'.SITEURL.'login.php');
        }
    }

?>

<?php include('partials/footer.php');