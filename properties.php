<?php
include 'db_connect.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = isset($_POST['action']) ? $_POST['action'] : '';

    // Prepare variables for daftar_ruko
    $ruko_id = isset($_POST['id']) ? $_POST['id'] : '';
    $ruko_status = isset($_POST['status']) ? $_POST['status'] : '';

    // Prepare variables for properties
    $property_id = isset($_POST['property_id']) ? $_POST['property_id'] : '';
    $harga = isset($_POST['harga']) ? $_POST['harga'] : '';
    $desc = isset($_POST['desc']) ? $_POST['desc'] : '';
    $image = isset($_POST['image']) ? $_POST['image'] : '';

    if ($action == 'add_ruko') {
        // Add new ruko
        $sql = "INSERT INTO daftar_ruko (id, status) VALUES ('$ruko_id', '$ruko_status')";
        $conn->query($sql);
    } elseif ($action == 'edit_ruko') {
        // Edit existing ruko
        $sql = "UPDATE daftar_ruko SET status='$ruko_status' WHERE id='$ruko_id'";
        $conn->query($sql);
    } elseif ($action == 'delete_ruko') {
        // Delete ruko
        $sql = "DELETE FROM daftar_ruko WHERE id='$ruko_id'";
        $conn->query($sql);
    } elseif ($action == 'add_property') {
        // Add new property
        $sql = "INSERT INTO properties (id, harga, `desc`, image) VALUES ('$property_id', '$harga', '$desc', '$image')";
        $conn->query($sql);
    } elseif ($action == 'edit_property') {
        // Edit existing property
        $sql = "UPDATE properties SET harga='$harga', `desc`='$desc', image='$image' WHERE id='$property_id'";
        $conn->query($sql);
    } elseif ($action == 'delete_property') {
        // Delete property
        $sql = "DELETE FROM properties WHERE id='$property_id'";
        $conn->query($sql);
    }

    // Redirect to avoid form resubmission
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}

// Fetch ruko properties
$ruko_sql = "SELECT * FROM daftar_ruko";
$ruko_result = $conn->query($ruko_sql);

// Fetch properties
$property_sql = "SELECT * FROM properties";
$property_result = $conn->query($property_sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage Ruko and Properties</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Main Sidebar Container -->
        <?php include 'sidebar.php'; ?>
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Manage Ruko and Properties</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Manage Ruko and Properties</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- Ruko Section -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Ruko List</h3>
                                    <div class="card-tools">
                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#rukoModal">Add Ruko</button>
                                    </div>
                                </div>
                                <div class="card-body table-responsive p-0" style="height: 300px;">
                                    <table class="table table-head-fixed text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while ($row = $ruko_result->fetch_assoc()) : ?>
                                                <tr>
                                                    <td><?php echo $row['id']; ?></td>
                                                    <td><?php echo $row['status']; ?></td>
                                                    <td>
                                                        <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#rukoModal" data-id="<?php echo $row['id']; ?>" data-status="<?php echo $row['status']; ?>">Edit</button>
                                                        <button class="btn btn-danger btn-sm" onclick="deleteRuko(<?php echo $row['id']; ?>)">Delete</button>
                                                    </td>
                                                </tr>
                                            <?php endwhile; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Properties Section -->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Properties List</h3>
                                    <div class="card-tools">
                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#propertyModal">Add Property</button>
                                    </div>
                                </div>
                                <div class="card-body table-responsive p-0" style="height: 300px;">
                                    <table class="table table-head-fixed text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Harga</th>
                                                <th>Desc</th>
                                                <th>Image</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while ($row = $property_result->fetch_assoc()) : ?>
                                                <tr>
                                                    <td><?php echo $row['id']; ?></td>
                                                    <td><?php echo $row['harga']; ?></td>
                                                    <td><?php echo $row['desc']; ?></td>
                                                    <td><img src="<?php echo $row['image']; ?>" alt="Property Image" style="width: 50px; height: 50px;"></td>
                                                    <td>
                                                        <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#propertyModal" data-id="<?php echo $row['id']; ?>" data-harga="<?php echo $row['harga']; ?>" data-desc="<?php echo $row['desc']; ?>" data-image="<?php echo $row['image']; ?>">Edit</button>
                                                        <button class="btn btn-danger btn-sm" onclick="deleteProperty(<?php echo $row['id']; ?>)">Delete</button>
                                                    </td>
                                                </tr>
                                            <?php endwhile; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </div>
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>
    </div>

    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="dist/js/adminlte.min.js"></script>

    <!-- Ruko Modal -->
    <div class="modal fade" id="rukoModal" tabindex="-1" role="dialog" aria-labelledby="rukoModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="rukoModalLabel">Ruko</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" id="ruko-id">
                        <input type="hidden" name="action" id="ruko-action">
                        <div class="form-group">
                            <label for="id">ID</label>
                            <input type="text" class="form-control" id="id" name="id" required>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" id="status" name="status">
                                <option value="tersedia">Tersedia</option>
                                <option value="disewa">Disewa</option>
                            </select>
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

    <!-- Property Modal -->
    <div class="modal fade" id="propertyModal" tabindex="-1" role="dialog" aria-labelledby="propertyModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="propertyModalLabel">Property</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="property_id" id="property-id">
                        <input type="hidden" name="action" id="property-action">
                        <div class="form-group">
                            <label for="property_id">ID</label>
                            <input type="text" class="form-control" id="property_id" name="property_id" required>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga" required>
                        </div>
                        <div class="form-group">
                            <label for="desc">Description</label>
                            <textarea class="form-control" id="desc" name="desc" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Image URL</label>
                            <input type="text" class="form-control" id="image" name="image" required>
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

    <script>
        $('#rukoModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var id = button.data('id');
            var status = button.data('status');

            var modal = $(this);
            if (id) {
                modal.find('.modal-title').text('Edit Ruko');
                modal.find('#ruko-id').val(id);
                modal.find('#ruko-action').val('edit_ruko');
                modal.find('#id').val(id).attr('readonly', 'readonly');
                modal.find('#status').val(status);
            } else {
                modal.find('.modal-title').text('Add Ruko');
                modal.find('#ruko-id').val('');
                modal.find('#ruko-action').val('add_ruko');
                modal.find('#id').val('').removeAttr('readonly');
                modal.find('#status').val('tersedia');
            }
        });

        function deleteRuko(id) {
            if (confirm('Are you sure you want to delete this ruko?')) {
                var form = document.createElement('form');
                form.method = 'POST';
                form.action = '';

                var inputAction = document.createElement('input');
                inputAction.type = 'hidden';
                inputAction.name = 'action';
                inputAction.value = 'delete_ruko';
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

        $('#propertyModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var id = button.data('id');
            var harga = button.data('harga');
            var desc = button.data('desc');
            var image = button.data('image');

            var modal = $(this);
            if (id) {
                modal.find('.modal-title').text('Edit Property');
                modal.find('#property-id').val(id);
                modal.find('#property-action').val('edit_property');
                modal.find('#property_id').val(id).attr('readonly', 'readonly');
                modal.find('#harga').val(harga);
                modal.find('#desc').val(desc);
                modal.find('#image').val(image);
            } else {
                modal.find('.modal-title').text('Add Property');
                modal.find('#property-id').val('');
                modal.find('#property-action').val('add_property');
                modal.find('#property_id').val('').removeAttr('readonly');
                modal.find('#harga').val('');
                modal.find('#desc').val('');
                modal.find('#image').val('');
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
                inputAction.value = 'delete_property';
                form.appendChild(inputAction);

                var inputId = document.createElement('input');
                inputId.type = 'hidden';
                inputId.name = 'property_id';
                inputId.value = id;
                form.appendChild(inputId);

                document.body.appendChild(form);
                form.submit();
            }
        }
    </script>

</body>

</html>