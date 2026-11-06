<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Category of Products</h1>
<br>

            <?php
                if(isset($_SESSION['add']))
                {
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                }

                if(isset($_SESSION['upload']))
                {
                    echo $_SESSION['upload'];
                    unset($_SESSION['upload']);
                }


           ?>

<br>
<!-- add category form starts -->
    <form action="" method = "POST" enctype = "multipart/form-data">
        
        <table class="add-admin-table">
        <tr>
            <td>Title</td>
            <td>
                <input type="text" name ="title" placeholder = "Enter Category Title" class="input-of-add-admin">
            </td>
        </tr>

        <tr>
            <td>Select Image</td>
            <td>
                <input type="file" name ="image" class="choose-file">
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
                <input type="submit" name = "submit" value = "Add Category" class = "update-admin-button" >
            </td>
        </tr>
        </table>
    </form>

<!-- add category form starts -->


<?php

// check whether the submit button is clicked or not

if(isset ($_POST['submit'] ) )
{
//     echo "button clicked";

    // 2nd, to get the value from the form after button clicked
    $title = $_POST ['title']; // the name should be same as the one in form

    // for radio we need to see whether the button is selected or not
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

    // check whether the image is selected or not
    // print_r($_FILES['image']);
    // die();

    if(isset($_FILES['image'] ['name']))
    {
            // upload the image
            // to upload image we need image name, source path and destination path
            $image_name = $_FILES['image'] ['name'];

            // upload the image only if image is selected
            if ($image_name != "") 
            {

                // auto rename our image
                // 1. get the extension of our image (img, jpg, gif, png) etc 'product.jpg'
                $ext = end(explode('.', $image_name));

                // rename the product name
                $image_name = "Product_Category_".rand(000, 999).'.'.$ext; // eg. product_category_ 834.jpg


                // to get the source path
                $source_path = $_FILES['image'] ['tmp_name'];
                // destination path 
                $destination_path = "images/category/".$image_name;

                // finally upload the image
                $upload = move_uploaded_file($source_path, $destination_path);

                // check whther the image is uploaded  or not 
                // if it ie then stop the process
                if ($upload == FALSE)
                {
                    $_SESSION['upload'] = "<div class = 'success-message-delete'> Image could not be uploaded. Try Again Later</div>";
                    // redirect to add category page
                    header("location:".SITEURL.'add-category.php');
                    // stop the process
                    die();
                }
                // but if not then stop the process with a message
            }
    } 
    else
    {
        // dont upload image and set the image_name as blank
        $image_name = "";
    }

// 3rd, SQL query to save the data into the database
    $sql = "INSERT INTO table_category
            SET
                title = '$title', 
                image_name = '$image_name',
                featured = '$featured',
                active = '$active'
            ";

// execute the query and save into database
    $res = mysqli_query($conn, $sql);

    if($res==TRUE)
    {
        // echo "data inserted";

        // create a session variable to display message
        $_SESSION['add'] = "<div class = 'success-message-add'>Product Category Added Successfully</div>";
        // then redirect the page 
        header("location:".SITEURL.'category.php');
    }
    else
    {
        // echo "data insertion was not successfull";
        // create a session variable to display message
        $_SESSION['add'] = "<div class = 'success-message-delete'>Product Category Could Not Be Added </div>";
        // then redirect the page 
        header("location:".SITEURL.'category.php');
    }
}

?>

    </div>
</div>

<?php include('partials/footer.php'); ?>