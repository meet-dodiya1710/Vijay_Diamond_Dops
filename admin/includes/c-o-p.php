<?php include('header.php'); ?>
<?php include('../../functions/myfunctions.php'); ?>
<!-- category of products  -->
<!-- category of products  -->
<!-- category of products  -->
<!-- category of products  -->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Products</h4>
                </div>
                <div class="card-body">
                    <table class="table table-border table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Cost</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $category = getAll("product");

                            if (mysqli_num_rows($category) > 0) {
                                foreach ($category as $item) {
                            ?>
                                    <tr>
                                        <td><?= $item['pro_id'] ?></td>
                                        <td><?= $item['pro_name'] ?></td>
                                        <td>
                                            <img src="uploads/<?= $item['pro_image'] ?>" width="50px" height="50px" alt="<?= $item['pro_name'] ?>">
                                        </td>
                                        <td><?= $item['cost'] ?></td>
                                        <td>
                                            <a href="edit-c-o-p.php?id=<?= $item['pro_id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                                        </td>
                                        <td>
                                            <form action="code.php" method="POST">
                                                <input type="hidden" name="category_id" value="<?= $item['pro_id'] ?>">
                                                <button type="submit" class="btn btn-danger btn-sm" name="delete_product_btn">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                            <?php
                                }
                            } else {
                                echo "no records found";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>