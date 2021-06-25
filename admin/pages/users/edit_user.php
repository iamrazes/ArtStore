<?php
$edit = $mysqli->query("SELECT * FROM users WHERE id='$_GET[opsi]'");
$e = mysqli_fetch_array($edit);
?>

<form method="post" action="index.php?page=update_user">
    <input type="hidden" name="id" value="<?= $e['id']; ?>">
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input required name="username" type="username" class="form-control" id="exampleInputEmail1" value="<?php echo $e['username']; ?>" placeholder="Enter username">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input required name="name" type="name" class="form-control" id="exampleInputEmail1" value="<?php echo $e['name']; ?>" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input required name="email" type="email" class="form-control" id="exampleInputEmail1" value="<?php echo $e['email']; ?>" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input required name="password" type="password" class="form-control" id="exampleInputPassword1" value="<?php echo $e['password']; ?>" placeholder="Password">
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </div>
</form>