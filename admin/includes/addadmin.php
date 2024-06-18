<?php include ('header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add Admin</h4>
                </div>

                <div class="card-body">
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="" style="margin: 20px 0px 5px 0px;">Admin Name</label>
                                <input type="text" name="a_name" placeholder="Enter Admin Name" class="form-control"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <label for="" style="margin: 20px 0px 5px 0px;">Password</label>
                                <input type="text" name="a_password" placeholder="Enter Admin Password"
                                    class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" name="addadmin_btn"
                                    style="margin: 20px 0px 5px 0px;">Add</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include ('footer.php'); ?>