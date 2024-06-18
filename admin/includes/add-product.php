<?php include('header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Product</h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" style="margin: 20px 0px 5px 0px;">Product Name</label>
                                <input type="text" name="pro_name" placeholder="Enter Product Name" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="" style="margin: 20px 0px 5px 0px;">Product Cost</label>
                                <input type="text" name="cost" placeholder="Enter Product Cost" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <label for="" style="margin: 20px 0px 5px 0px;">Product Image</label>
                                <input type="file" name="pro_image" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <!-- <div type="submit" class="btn btn-primary" name="add_product_btn">Save</div> -->
                                <button type="submit" class="btn btn-primary" name="add_product_btn" style="margin: 20px 0px 5px 0px;">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include('footer.php'); ?>