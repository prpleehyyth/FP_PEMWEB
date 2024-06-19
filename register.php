<?php
include 'db_connect.php'; // Connect to the database

// Initialize message and redirect flag
$message = '';
$redirect = false;

// Check if data is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $password = $_POST['password'];

    // Basic validation
    if (empty($email) || empty($username) || empty($fullname) || empty($password)) {
        $message = "Semua field harus diisi!";
    } else {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare the SQL statement
        $sql = "INSERT INTO users (email, username, fullname, password) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("ssss", $email, $username, $fullname, $hashed_password);

            // Execute and check if successful
            if ($stmt->execute()) {
                $message = "Registrasi berhasil! Anda akan diarahkan ke halaman login.";
                $redirect = true;
            } else {
                $message = "Terjadi kesalahan: " . $stmt->error;
            }

            $stmt->close();
        } else {
            $message = "Terjadi kesalahan: " . $conn->error;
        }
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifikasi</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            <?php if ($message) : ?>
                alert("<?php echo $message; ?>");
                <?php if ($redirect) : ?>
                    window.location.href = "login.php";
                <?php endif; ?>
            <?php endif; ?>
        });
    </script>
</head>

<body>
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                    <img src="assets/images/fullSiwarsa.png" alt="">
                    <div class="text">
                        <h1 class="h1">Mari Bergabung Dengan Kami</h1>
                        <p class="h1">SIWARSA adalah platform penyewaan ruko antara pemerintah desa dan masyarakat</p>
                    </div>
                </div>
                <div class="col-md-6 right">
                    <div class="input-box">
                        <header>Buat Akun</header>
                        <form action="register.php" method="POST">
                            <div class="input-field">
                                <input type="text" class="input" id="email" name="email" required autocomplete="off">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field">
                                <input type="text" class="input" id="username" name="username" required autocomplete="off">
                                <label for="username">Username</label>
                            </div>
                            <div class="input-field">
                                <input type="text" class="input" id="fullname" name="fullname" required autocomplete="off">
                                <label for="fullname">Nama Lengkap</label>
                            </div>
                            <div class="input-field">
                                <input type="password" class="input" id="password" name="password" required>
                                <label for="password">Password</label>
                                <button class="toggle-button" type="button" id="toggleButton" aria-label="Toggle password visibility" title="Toggle password visibility">🐵</button>
                            </div>
                            <div class="input-field">
                                <input type="submit" class="submit" value="Buat Akun">
                            </div>
                            <div class="signin">
                                <span>Sudah Punya Akun? <a href="login.php">Masuk disini</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const passwordField = document.getElementById('password');
        const toggleButton = document.getElementById('toggleButton');

        toggleButton.addEventListener('click', function() {
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                toggleButton.textContent = '🙈';
            } else {
                passwordField.type = 'password';
                toggleButton.textContent = '🐵';
            }
        });
    </script>
</body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

    * {
        font-family: 'Poppins', sans-serif;
    }

    .h1 {
        color: white;
    }

    .wrapper {
        background: #ececec;
        padding: 0 20px 0 20px;
    }

    .main {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .side-image {
        background-image: url("assets/images/background.png");
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        border-radius: 10px 0 0 10px;
        position: relative;
    }

    .row {
        width: 900px;
        height: 550px;
        border-radius: 10px;
        background: #fff;
        padding: 0px;
        box-shadow: 5px 5px 10px 1px rgba(0, 0, 0, 0.2);
    }

    .text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .text p {
        color: #fff;
        font-size: 20px;
    }

    i {
        font-weight: 400;
        font-size: 15px;
    }

    .right {
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }

    .input-box {
        width: 330px;
        box-sizing: border-box;
    }

    img {
        width: 100px;
        position: absolute;
        top: 20px;
        left: 20px;
    }

    .input-box header {
        font-weight: 700;
        text-align: center;
        margin-bottom: 45px;
    }

    .input-field {
        display: flex;
        flex-direction: column;
        position: relative;
        padding: 0 10px 0 10px;
    }

    .input {
        height: 45px;
        width: 100%;
        background: transparent;
        border: none;
        border-bottom: 1px solid rgba(0, 0, 0, 0.2);
        outline: none;
        margin-bottom: 20px;
        color: #40414a;
    }

    .input-box .input-field label {
        position: absolute;
        top: 10px;
        left: 10px;
        pointer-events: none;
        transition: .5s;
    }

    .input-field input:focus~label {
        top: -10px;
        font-size: 13px;
    }

    .input-field input:valid~label {
        top: -10px;
        font-size: 13px;
        color: #5d5076;
    }

    .input-field .input:focus,
    .input-field .input:valid {
        border-bottom: 1px solid #743ae1;
    }

    .submit {
        border: none;
        outline: none;
        height: 45px;
        background: #ececec;
        border-radius: 5px;
        transition: .4s;
    }

    .submit:hover {
        background: rgba(37, 95, 156, 0.937);
        color: #fff;
    }

    .signin {
        text-align: center;
        font-size: small;
        margin-top: 25px;
    }

    span a {
        text-decoration: none;
        font-weight: 700;
        color: #000;
        transition: .5s;
    }

    span a:hover {
        text-decoration: underline;
        color: #000;
    }

    .toggle-button {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        cursor: pointer;
        color: rgba(0, 0, 0, 0.5);
        font-size: 1.2rem;
    }

    @media only screen and (max-width: 768px) {
        .side-image {
            border-radius: 10px 10px 0 0;
        }

        img {
            width: 35px;
            position: absolute;
            top: 20px;
            left: 47%;
        }

        .text {
            position: absolute;
            top: 70%;
            text-align: center;
        }

        .text p,
        i {
            font-size: 16px;
        }

        .row {
            max-width: 420px;
            width: 100%;
        }
    }
</style>

</html>