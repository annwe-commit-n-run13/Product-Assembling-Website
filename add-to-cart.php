<?php 
ob_start();

include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Products</h1>

        <br>

        <?php
            if(isset($_SESSION['upload']))
            {
                echo $_SESSION['upload'];
                unset($_SESSION['upload']);
            }

        ?>

        <!-- add category form starts -->
        <form action="" method = "POST" enctype = "multipart/form-data">
            
            <table class="add-admin-table">
                <tr>
                    <td>Title</td>
                    <td>
                        <input type="text" name ="title" placeholder = "Enter Product Title" class="input-of-add-admin">
                    </td>
                </tr>
                
                <tr>
                    <td>Description</td>
                    <td>
                        <textarea name="description" cols="30" rows="5" placeholder="Description of The Product" class="input-of-add-admin"></textarea>
                    </td>
                </tr>

                <tr>
                    <td>Price</td>
                    <td>
                        <input type="number" name = "price" placeholder = "Price of The Product" class="input-of-add-admin">
                    </td>
                </tr>

                <tr>
                    <td>Select Image</td>
                    <td>
                        <input type="file" name = "image">
                    </td>
                </tr>

                <tr>
                    <td>Category</td>
                    <td> 
                        <!-- we will make  a dropdown here. will  show all the category from the database. for now we need the select tag to show the dropdown -->
                        <select name="category">

                            <?php

                                // create PHP code to display cateogories from database
                                // 1. create SQL to get all the active categories from database
                                $sql = "SELECT * FROM table_category WHERE active = 'Yes'";

                                // execute the query
                                $res = mysqli_query($conn, $sql);

                                // to count the rows to check whether we have categories or not
                                $count = mysqli_num_rows($res);

                                // if count is greayer than zero we have categories else we do not have categories
                                if ($count > 0)
                                {
                                    // we have categories
                                    while($row = mysqli_fetch_assoc($res))
                                    {
                                        // get the details of categories 
                                        $id = $row['id'];
                                        $title = $row['title'];

                                        ?>

                                        <option value="<?php echo $id; ?>"><?php echo $title; ?></option>

                                        <?php
                                    }
                                }
                                else
                                {
                                    //  we do not have categories
                                    ?>
                                    <option value="0">No Categories Found</option>
                                    <?php
                                    
                                }


                                // 2. display the dropdown


                            ?>

                            <!-- <option value="1">Cables</option>
                            <option value="2">Monitor</option>
                            <option value="3">Keyboard</option> -->

                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Featured</td>
                    <td>
                        <input type="radio" name ="featured" value = "Yes"> Yes
                        <input type="radio" name ="featured" value = "No"> No
                    </td>
                </tr>

                <tr>
                    <td>Active</td>
                    <td>
                        <input type="radio" name ="active" value ="Yes"> Yes
                        <input type="radio" name ="active" value ="No"> No
                    </td>
                </tr>

                <tr>
                    <td colspan="2"> 
                        <input type="submit" name = "submit" value = "Add Product" class = "update-admin-button" >
                    </td>
                </tr>

            </table>

        </form>

        <?php
            //  check whether the button is clicked or not
            if (isset($_POST['submit']))
            {
                // add the product in the database
                // echo "button clicked";

                // 1. to get the value from the form after button clicked
                $title = mysqli_real_escape_string($conn, $_POST['title']);
                $description = mysqli_real_escape_string($conn, $_POST['description']);
                $price = mysqli_real_escape_string($conn, $_POST['price']);
                $category = mysqli_real_escape_string($conn, $_POST['category']);


                // for feature and active check whether radio button is checked or not
                if(isset ($_POST ['featured'] ) )
                {
                    $featured = $_POST ['featured'];
                }
                else
                {
                    $featured = "No";
                }

                // now for the active button 
                if(isset ($_POST ['active'] ) )
                {
                    $active = $_POST ['active'];
                }
                else
                {
                    $active = "No";
                }

                // 2. upload the image if selected
                // check whether the select image is clicked or not
                if(isset($_FILES['image'] ['name']))
                {
                    // get the detail or the selected image
                    // to upload image we need image name, source path and destination path
                    $image_name = $_FILES['image'] ['name'];

                    // check whether the image is selected
                    if ($image_name!="")
                    {
                        // image selected
                        // A. rename the image name
                        // get the extension of the selected image (jpg, png, gif etc.)
                        $temp = explode('.', $image_name);
                        $ext = end($temp); // explode function look at the sentense and break down into string-string.jpg

                        // rename the product name
                        $image_name = "Product-Name-".rand(0000, 9999).'.'.$ext; // eg. product_name_ 834.jpg


                        // B. upload the image
                        // to get the source path
                        $src = $_FILES['image'] ['tmp_name'];

                        // destination path 
                        $dst = "images/product/".$image_name;

                        // finally upload the image
                        $upload = move_uploaded_file($src, $dst);

                        // check whther the image is uploaded  or not 
                        if ($upload == FALSE)
                        {
                                $_SESSION['upload'] = "<div class = 'success-message-delete'> Image could not be uploaded. Try Again Later</div>";
                                // redirect to add category page
                                header('location:'.SITEURL.'add-product.php');
                                // stop the process
                                die();
                        }

                    }
                }

                else
                {
                    // set the image_name as blank if select button is not clicked
                    $image_name = "";
                }

                // 3. insert into database
                //  create a sql query to insert or add product. for numerical we do not need to pass values
                $sql2 = "INSERT INTO table_products 
                        SET
                        title = '$title',
                        description = '$description',
                        price = '$price',
                        image_name = '$image_name',
                        category_id = '$category',
                        featured = '$featured',
                        active= '$active'
                        ";

                        // execute the query and save into database
                        $res2 = mysqli_query($conn, $sql2);

                        if($res==TRUE)
                        {
                            // create a session variable to display message
                            $_SESSION['add'] = "<div class = 'success-message-add'>Product Added Successfully</div>";
                            // then redirect the page 
                            header("location:".SITEURL.'product.php');
                            
                        }
                        else
                        {
                            // echo "data insertion was not successfull";
                            // create a session variable to display message
                            $_SESSION['add'] = "<div class = 'success-message-delete'>Product Could Not Be Added </div>";
                            // then redirect the page 
                            header("location:".SITEURL.'product.php');
                            
                        }

                // redirect with message to manage product page
            }
        ?>

    </div>
</div>








<?php include('partials/footer.php'); 

ob_end_flush(); ?>