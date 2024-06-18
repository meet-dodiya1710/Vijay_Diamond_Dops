<?php include ('header.php'); ?>
<?php include ('../../functions/myfunctions.php'); ?>
<!-- category of products  -->
<!-- category of products  -->
<!-- category of products  -->
<!-- category of products  -->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Users</h4>
                </div>
                <div class="card-body">
                    <table class="table table-border table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>UserName</th>
                                <th>Email</th>
                                <th>Phone_no</th>
                                <th>Password</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $category = getAll("users");

                            if (mysqli_num_rows($category) > 0) {
                                foreach ($category as $item) {
                                    ?>
                                    <tr>
                                        <td>
                                            <?= $item['Id'] ?>
                                        </td>
                                        <td>
                                            <?= $item['Username'] ?>
                                        </td>
                                        <td>
                                            <?= $item['Email'] ?>
                                        </td>
                                        <td>
                                            <?= $item['Phone_no'] ?>
                                        </td>
                                        <td>
                                            <?= $item['Password'] ?>
                                        </td>

                                        <td>
                                            <form action="code.php" method="POST">
                                                <input type="hidden" name="category_id" value="<?= $item['Id'] ?>">
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    name="delete_users_btn">Delete</button>
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

<?php include ('footer.php'); ?>