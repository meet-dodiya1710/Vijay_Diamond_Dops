<?php include('header.php'); ?>
<?php include('../../functions/myfunctions.php'); ?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $category = getById("product", $id);

                if (mysqli_num_rows($category) > 0) {

                    $data = mysqli_fetch_array($category);



            ?>
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Product</h4>
                        </div>
                        <div class="card-body">
                            <form action="code.php" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="hidden" name="category_id" value="<?= $data['pro_id'] ?>">
                                        <label for="" style="margin: 20px 0px 5px 0px;">Product Name</label>
                                        <input type="text" name="pro_name" value="<?= $data['pro_name'] ?>" placeholder="Enter Product Name" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" style="margin: 20px 0px 5px 0px;">Product Cost</label>
                                        <input type="text" name="cost" value="<?= $data['cost'] ?>" placeholder="Enter Product Cost" class="form-control">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="" style="margin: 20px 0px 5px 0px;">Product Image</label>
                                        <input type="file" name="pro_image" class="form-control">
                                        <label for="" style="margin: 0px 20px 0px 0px ;">Current Image > > ></label>
                                        <input type="hidden" name="old_image" value="<?= $data['pro_image'] ?>">
                                        <img src="uploads/<?= $data['pro_image'] ?>" height="100px" width="100px" style="margin: 10px 0px;" alt="There is Some issue with the Image">
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary" name="update_product_btn" style="margin: 20px 0px 5px 0px;">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

            <?php

                } else {
                    echo "Product not Found";
                }
            } else {
                echo "Id Missing From Url";
            }
            ?>
        </div>
    </div>
</div>
</div>


<?php include('footer.php'); ?>