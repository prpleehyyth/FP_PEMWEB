<?php
include 'db_connect.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = isset($_POST['action']) ? $_POST['action'] : '';

    // Prepare variables
    $tipe = isset($_POST['tipe']) ? $_POST['tipe'] : '';
    $harga = isset($_POST['harga']) ? $_POST['harga'] : '';
    $no_ruko = isset($_POST['no_ruko']) ? $_POST['no_ruko'] : '';
    $desc = isset($_POST['desc']) ? $_POST['desc'] : '';
    $status = isset($_POST['status']) ? $_POST['status'] : '';
    $target_file = '';

    // Handle file upload
    if (!empty($_FILES["image"]["name"])) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    }

    if ($action == 'add') {
        // Add new property
        $sql = "INSERT INTO properties (tipe, harga, no_ruko, `desc`, `status`, image) VALUES ('$tipe', '$harga', '$no_ruko', '$desc', '$status', '$target_file')";
        $conn->query($sql);
    } elseif ($action == 'edit') {
        // Edit existing property
        $id = isset($_POST['id']) ? $_POST['id'] : '';
        if ($target_file) {
            $sql = "UPDATE properties SET tipe='$tipe', harga='$harga', no_ruko='$no_ruko', `desc`='$desc', `status`='$status', image='$target_file' WHERE id='$id'";
        } else {
            $sql = "UPDATE properties SET tipe='$tipe', harga='$harga', no_ruko='$no_ruko', `desc`='$desc', `status`='$status' WHERE id='$id'";
        }
        $conn->query($sql);
    } elseif ($action == 'delete') {
        // Delete property
        $id = isset($_POST['id']) ? $_POST['id'] : '';
        $sql = "DELETE FROM properties WHERE id='$id'";
        $conn->query($sql);
    }
    // Redirect to avoid form resubmission
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}

// Fetch properties
$sql = "SELECT * FROM properties";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage Properties</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Main Sidebar Container -->
        <?php include 'sidebar.php'; ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Manage Properties</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Manage Properties</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Property List</h3>
                                    <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#propertyModal">Add Property</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive p-0" style="height: 300px;">
                                        <table class="table table-head-fixed text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Type</th>
                                                    <th>Price</th>
                                                    <th>No. Ruko</th>
                                                    <th>Description</th>
                                                    <th>Status</th>
                                                    <th>Image</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php while ($row = $result->fetch_assoc()) : ?>
                                                    <tr>
                                                        <td><?php echo $row['id']; ?></td>
                                                        <td><?php echo $row['tipe']; ?></td>
                                                        <td><?php echo $row['harga']; ?></td>
                                                        <td><?php echo $row['no_ruko']; ?></td>
                                                        <td><?php echo $row['desc']; ?></td>
                                                        <td><?php echo $row['status']; ?></td>
                                                        <td><img src="<?php echo $row['image']; ?>" width="100" /></td>
                                                        <td>
                                                        <td>
                                                            <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#propertyModal" data-id="<?php echo $row['id']; ?>" data-tipe="<?php echo $row['tipe']; ?>" data-harga="<?php echo $row['harga']; ?>" data-no_ruko="<?php echo $row['no_ruko']; ?>" data-desc="<?php echo $row['desc']; ?>" data-status="<?php echo $row['status']; ?>" data-image="<?php echo $row['image']; ?>">Edit</button>
                                                            <button class="btn btn-danger btn-sm" onclick="deleteProperty(<?php echo $row['id']; ?>)">Delete</button>
                                                        </td>

                                                    </tr>
                                                <?php endwhile; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>


    <div class="modal fade" id="propertyModal" tabindex="-1" role="dialog" aria-labelledby="propertyModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="propertyModalLabel">Property</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" id="property-id">
                        <input type="hidden" name="action" id="property-action">
                        <div class="form-group">
                            <label for="tipe">Type</label>
                            <select class="form-control" id="tipe" name="tipe">
                                <option value="ruko">Ruko</option>
                                <option value="tenant">Tenant</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="harga">Price</label>
                            <input type="number" class="form-control" id="harga" name="harga" required>
                        </div>
                        <div class="form-group">
                            <label for="no_ruko">No. Ruko</label>
                            <input type="text" class="form-control" id="no_ruko" name="no_ruko" required>
                        </div>
                        <div class="form-group">
                            <label for="desc">Description</label>
                            <textarea class="form-control" id="desc" name="desc" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status">
                                <option value="available">Available</option>
                                <option value="rented">Rented</option>
                                <option value="unavailable">Unavailable</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" class="form-control-file" id="image" name="image">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $('#propertyModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var id = button.data('id');
            var tipe = button.data('tipe');
            var harga = button.data('harga');
            var no_ruko = button.data('no_ruko');
            var desc = button.data('desc');
            var status = button.data('status');
            var image = button.data('image');

            var modal = $(this);
            if (id) {
                modal.find('.modal-title').text('Edit Property');
                modal.find('#property-id').val(id);
                modal.find('#property-action').val('edit');
                modal.find('#tipe').val(tipe);
                modal.find('#harga').val(harga);
                modal.find('#no_ruko').val(no_ruko);
                modal.find('#desc').val(desc);
                modal.find('#status').val(status);
                modal.find('#image').removeAttr('required');
            } else {
                modal.find('.modal-title').text('Add Property');
                modal.find('#property-id').val('');
                modal.find('#property-action').val('add');
                modal.find('#tipe').val('ruko');
                modal.find('#harga').val('');
                modal.find('#no_ruko').val('');
                modal.find('#desc').val('');
                modal.find('#status').val('available');
                modal.find('#image').attr('required', 'required');
            }
        });

        function deleteProperty(id) {
            if (confirm('Are you sure you want to delete this property?')) {
                var form = document.createElement('form');
                form.method = 'POST';
                form.action = '';

                var inputAction = document.createElement('input');
                inputAction.type = 'hidden';
                inputAction.name = 'action';
                inputAction.value = 'delete';
                form.appendChild(inputAction);

                var inputId = document.createElement('input');
                inputId.type = 'hidden';
                inputId.name = 'id';
                inputId.value = id;
                form.appendChild(inputId);

                document.body.appendChild(form);
                form.submit();
            }
        }
    </script>

</body>

</html>