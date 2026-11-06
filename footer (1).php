<?php include('partials/menu.php'); ?>

    <!-- main content starts here -->
     <div class="main-content">
        <div class="wrapper">
           <h1>Manage Admin</h1>
           <br>

           <?php 
                if(isset($_SESSION['add']))
                {
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                }

                // for delete admin
                if(isset($_SESSION['delete']))
                {
                    echo $_SESSION['delete'];
                    unset($_SESSION['delete']);
                }


                // for update admin
                if(isset($_SESSION['update']))
                {
                    echo $_SESSION['update'];
                    unset($_SESSION['update']);
                }

                //update password
                if(isset($_SESSION['user-not-found']))
                {
                    echo $_SESSION['user-not-found'];
                    unset($_SESSION['user-not-found']);
                }

                // password not match
                if(isset($_SESSION['pwd-not-match']))
                {
                    echo $_SESSION['pwd-not-match'];
                    unset($_SESSION['pwd-not-match']);
                }

                // change password
                if(isset($_SESSION['change-pwd']))
                {
                    echo $_SESSION['change-pwd'];
                    unset($_SESSION['change-pwd']);
                }


           ?>
            
            <br> <br> 

           <a href="add-admin.php" class="button-add-admin">Add Admin</a>
           <br><br><br>
           <table class="table-manage-admin">
            <tr>
                <th>Serial No.</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Actions</th>
            </tr>
            
            <?php
                $sql = "SELECT * FROM table_admin";

                $res = mysqli_query($conn, $sql);

                if($res == TRUE)
                {
                    $count = mysqli_num_rows($res);

                    $sn = 1;
                    
                    // check whether there is data in the database
                    if($count > 0)
                    {
                        while($rows=mysqli_fetch_assoc($res))
                        {
                            $id = $rows['id'];
                            $full_name = $rows['fullname'];
                            $username = $rows['username'];
                            // display the values in table
                            ?>

                            <tr>
                                <td><?php echo $sn++; ?>. </td>
                                <td><?php echo $full_name; ?></td>
                                <td><?php echo $username; ?></td>
                                <td>
                                    <a href ="<?php echo SITEURL; ?>update-password.php?id=<?php echo $id; ?>" class ="change-password">Change Password</a>
                                    <a href="<?php echo SITEURL; ?>update-admin.php?id=<?php echo $id; ?>" class="update-admin-button">Update Admin</a> 
                                
                                    <a href="<?php echo SITEURL; ?>delete-admin.php?id=<?php echo $id; ?>" class="delete-admin-button">Delete Admin</a>
                                
                                </td>
                            </tr>

                            <?php

                        }
                    }
                    else
                    {
                        // we do not have data in the database
                    }
                }
            ?>

            
           </table>

            
            <div class="clearfix"></div>
        </div>
     </div>
    <!-- main content ends here -->



<!-- footer -->
<?php include('partials/footer.php'); ?>