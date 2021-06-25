<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Users</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Users</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">DATABASE</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Name</th>
                                    <th>Email Address</th>
                                    <th>Password</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0;
                                $admin = $mysqli->query("SELECT * FROM users");
                                while ($m = mysqli_fetch_array($admin)) {
                                    $no++;
                                ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $m['username']; ?></td>
                                        <td><?php echo $m['name']; ?></td>
                                        <td><?php echo $m['email']; ?></td>
                                        <td><?php echo $m['password']; ?></td>
                                        <td>
                                            <a href="index.php?page=edit_user&opsi=<?php echo $m['id']; ?>">
                                                <button button class="btn btn-danger" role="button" title="Edit Data"><i class="fa fa-edit"></i>
                                                </button>
                                            </a>
                                            <a href="index.php?page=delete_user&opsi=<?php echo $m['id']; ?>" onclick="return confirm('Are you sure to delete the data?')">
                                                <button button class="btn btn-danger" role="button" title="Delete Data"><i class="fa fa-trash"></i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                            <li class="fa fa-plus"></li>
                            Add User
                        </button>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">FORM ADD USER</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="index.php?page=add_user">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input name="username" type="username" class="form-control" id="exampleInputEmail1" placeholder="Enter username">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input name="name" type="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->