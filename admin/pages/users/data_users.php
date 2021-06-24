

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
                                        <th>username</th>
                                        <th>Name</th>
                                        <th>Email Address</th>
                                        <th>Pssword</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 0;
                                    $admin=$mysqli->query("SELECT * FROM users");
                                    while($m=mysqli_fetch_array($admin)){
                                    $no++;
                                    ?>
                                    <tr>
                                        <td><?php echo $no ; ?></td>
                                        <td><?php echo $m['username']; ?></td>
                                        <td><?php echo $m['name']; ?></td>
                                        <td><?php echo $m['email']; ?></td>
                                        <td><?php echo $m['password']; ?></td>
                                    </tr>
                                        <?php } ?>
                                </tbody>
                            </table>
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