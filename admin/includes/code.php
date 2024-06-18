<?php
session_start();

include ("../../php/config.php");
include ("../../functions/myfunctions.php");

if (isset($_POST['add_product_btn'])) {
    $pro_name = $_POST['pro_name'];
    $cost = $_POST['cost'];

    $pro_image = $_FILES['pro_image']['name'];

    $path = "uploads";
    // path from where we upload the image 

    $image_ext = pathinfo($pro_image, PATHINFO_EXTENSION);
    $filename = time() . '.' . $image_ext;


    // $cate_querry = "INSERT INTO `product` (`pro_id`, `pro_name`, `cost`, `pro_image`) VALUES ('$pro_name', '$cost', '$filename')";
    // $cate_querry = "INSERT INTO `product` (`pro_name`, `cost`, `pro_image`) VALUES ('$pro_name', '$cost', '$filename')";
    $cate_querry = "INSERT INTO `product` (`pro_name`, `cost`, `pro_image`) VALUES ('$pro_name', '$cost', '$filename')";



    $cate_querry_run = mysqli_query($con, $cate_querry);


    if ($cate_querry_run) {
        move_uploaded_file($_FILES['pro_image']['tmp_name'], $path . '/' . $filename);

        redirect("add-product.php", "Product Added Successfully");
    } else {
        redirect("add-product.php", "Something Went Wrong");
    }
} else if (isset($_POST['update_product_btn'])) {
    $category_id = $_POST['category_id'];
    $pro_name = $_POST['pro_name'];
    $cost = $_POST['cost'];

    $new_pro_image = $_FILES['pro_image']['name'];

    $old_image = $_POST['old_image'];

    if ($new_pro_image != "") {
        // $update_filename = $new_pro_image;
        $image_ext = pathinfo($new_pro_image, PATHINFO_EXTENSION);
        $update_filename = time() . '.' . $image_ext;
    } else {
        $update_filename = $old_image;
    }

    $path = "uploads";

    $update_query = "UPDATE product SET pro_name='$pro_name', cost='$cost', pro_image='$update_filename' WHERE pro_id='$category_id' ";

    $update_query_run = mysqli_query($con, $update_query);

    if ($update_query_run) {

        if ($_FILES['pro_image']['name'] != "") {

            move_uploaded_file($_FILES['pro_image']['tmp_name'], $path . '/' . $update_filename);

            if (file_exists("uploads/.$old_pro_image")) {

                unlink("uploads/" . $old_pro_image);

            }

        }

        redirect("edit-c-o-p.php?id=$category_id", "Product Updated Successfully");

    } else {
        redirect("edit-c-o-p.php?id=$category_id", "Something Went Wrong");
    }
} else if (isset($_POST['delete_product_btn'])) {
    $category_id = mysqli_real_escape_string($con, $_POST['category_id']);

    $category_query = "SELECT * FROM product WHERE pro_id='$category_id'";
    $category_query_run = mysqli_query($con, $category_query);
    $category_data = mysqli_fetch_array($category_query_run);
    $image = $category_data['pro_image'];

    $delete_query = "DELETE FROM product WHERE pro_id='$category_id'";
    $delete_query_run = mysqli_query($con, $delete_query);

    if ($delete_query_run) {
        $image_path = "uploads/" . $image;

        if (file_exists($image_path)) {
            unlink($image_path);
        }

        redirect("c-o-p.php", "Product Deleted Successfully");
    } else {
        redirect("c-o-p.php", "Something Went Wrong");
    }
}

if (isset($_POST["addadmin_btn"])) {
    $a_name = $_POST['a_name'];
    $a_password = $_POST['a_password'];

    $add_admin = "INSERT INTO `admin` (`a_name`,`a_password`) VALUES ('$a_name','$a_password')";

    if (mysqli_query($con, $add_admin)) {
        // echo "Admin Added Succesfully";
        redirect("addadmin.php", "Admin Added Successfully");
    }
}

if (isset($_POST['delete_users_btn'])) {
    $Id = mysqli_real_escape_string($con, $_POST['category_id']); // Change 'Id' to 'category_id'

    $u_query = "SELECT * FROM users WHERE Id='$Id'";
    $u_query_run = mysqli_query($con, $u_query);
    $u_data = mysqli_fetch_array($u_query_run);

    $delete_queryy = "DELETE FROM users WHERE Id='$Id'";
    $delete_queryy_run = mysqli_query($con, $delete_queryy);

    if ($delete_queryy_run) {
        redirect("showuser.php", "User Deleted Successfully");
    } else {
        redirect("showuser.php", "Something Went Wrong");
    }
}


if (isset($_POST['delete_admin_btn'])) {
    $a_id = mysqli_real_escape_string($con, $_POST['a_id']);

    $a_query = "SELECT * FROM product WHERE pro_id='$a_id'";
    $a_query_run = mysqli_query($con, $a_query);
    $a_data = mysqli_fetch_array($a_query_run);

    $delete_query = "DELETE FROM admin WHERE a_id='$a_id'";
    $delete_query_run = mysqli_query($con, $delete_query);

    if ($delete_query_run) {

        redirect("showadmin.php", "Admin Deleted Successfully");
    } else {
        redirect("showadmin.php", "Something Went Wrong");
    }
}
