<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data Products</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Products</li>
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
                                    <th>Title</th>
                                    <th>Artist</th>
                                    <th>Price</th>
                                    <th>Rating</th>
                                    <th>Description</th>
                                    <th>Stock</th>
                                    <th>Sold</th>
                                    <th>Pictures</th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 0;
                                $admin = $mysqli->query("SELECT * FROM products");
                                while ($m = mysqli_fetch_array($admin)) {
                                    $no++;
                                ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $m['title']; ?></td>
                                        <td><?php echo $m['artist']; ?></td>
                                        <td><?php echo $m['price']; ?></td>
                                        <td><?php echo $m['rating']; ?></td>
                                        <td><?php echo $m['description']; ?></td>
                                        <td><?php echo $m['stock']; ?></td>
                                        <td><?php echo $m['sold']; ?></td>
                                        <td><?php echo $m['pictures']; ?></td>
                                        <td>
                                            <a href="index.php?page=delete_product&opsi=<?php echo $m['id']; ?>" onclick="return confirm('Are you sure to delete the data?')">
                                                <button button class="btn btn-danger" role="button" title="Delete Data"><i class="fa fa-trash"></i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-xl">
                            <li class="fa fa-plus"></li>
                            Add Product
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

<div class="modal fade" id="modal-xl">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">FORM ADD PRODUCT</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="index.php?page=add_product" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input required name="title" type="title" class="form-control" id="exampleInputEmail1" placeholder="Title...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Artist</label>
                            <input required name="artist" type="artist" class="form-control" id="exampleInputEmail1" placeholder="Artist name...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Price</label>
                            <input required name="price" type="number" class="form-control" id="exampleInputEmail1" placeholder="Price...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Rating</label>
                            <input required name="rating" type="number" class="form-control" id="exampleInputEmail1" placeholder="Rating...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <input required name="description" type="text" class="form-control" id="exampleInputEmail1" placeholder="Descriptions...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Stock</label>
                            <input required name="stock" type="number" class="form-control" id="exampleInputEmail1" placeholder="Stocks....">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Sold</label>
                            <input required name="sold" type="number" class="form-control" id="exampleInputEmail1" placeholder="Sold...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Pictures</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input required type="file" class="custom-file-input" id="exampleInputFile" name="pictures">
                                    <label class="custom-file-label text-muted" for="exampleInputFile" >Choose file...</label>
                                </div>
                                <!-- <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->