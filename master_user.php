<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Simple Tables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <?php include 'sidebar.php'; ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Master Pengguna</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Master Pengguna</li>
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
                  <h3 class="card-title">Table Pengguna</h3>

                  <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 300px;">
                  <table class="table table-head-fixed text-nowrap">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Fullname</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include 'db_connect.php';

                      // Add ID column if it doesn't exist
                      $checkColumnSql = "SHOW COLUMNS FROM users LIKE 'id'";
                      $checkColumnResult = $conn->query($checkColumnSql);

                      if ($checkColumnResult->num_rows == 0) {
                        $addColumnSql = "ALTER TABLE users ADD id INT AUTO_INCREMENT PRIMARY KEY FIRST";
                        if (!$conn->query($addColumnSql)) {
                          echo "Error adding ID column: " . $conn->error;
                        }
                      }

                      // Handle delete with POST method
                      if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_id'])) {
                        $idToDelete = $_POST['delete_id'];
                        $deleteSql = "DELETE FROM users WHERE id = ?";
                        $stmt = $conn->prepare($deleteSql);
                        $stmt->bind_param("i", $idToDelete);
                        if ($stmt->execute()) {
                          echo "<script>alert('User deleted successfully'); window.location.href='master_user.php';</script>";
                        } else {
                          echo "Error deleting user: " . $conn->error;
                        }
                        $stmt->close();
                      }

                      // Fetch data
                      $sql = "SELECT id, email, username, fullname FROM users";
                      $result = $conn->query($sql);

                      if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                          echo "<tr>";
                          echo "<td>" . $row["id"] . "</td>";
                          echo "<td>" . $row["email"] . "</td>";
                          echo "<td>" . $row["username"] . "</td>";
                          echo "<td>" . $row["fullname"] . "</td>";
                          echo "<td>
                                  <form action='' method='POST' style='display:inline;' onsubmit=\"return confirm('Are you sure you want to delete this user?');\">
                                    <input type='hidden' name='delete_id' value='" . $row['id'] . "'>
                                    <button type='submit' class='btn btn-danger'>Delete</button>
                                  </form>
                                </td>";
                          echo "</tr>";
                        }
                      } else {
                        echo "<tr><td colspan='5'>No users found</td></tr>";
                      }

                      $conn->close();
                      ?>
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
      <strong>Copyright &copy; 2024 SIWARSA.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
</body>

</html>