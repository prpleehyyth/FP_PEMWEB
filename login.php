<?php
session_start(); // Start the session

include 'db_connect.php'; // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Basic validation
    if (empty($email) || empty($password)) {
        $message = "Semua field harus diisi!";
        $redirect = false;
    } else {
        // Prepare and execute SQL statement to check user
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            // Check if user found
            if ($result->num_rows > 0) {
                $user = $result->fetch_assoc();
                // Verify password
                if (password_verify($password, $user['password'])) {
                    // Successful login, save user info in session
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    $message = "Login berhasil! Anda akan diarahkan.";
                    $redirect = true;
                } else {
                    $message = "Password salah!";
                    $redirect = false;
                }
            } else {
                $message = "Email tidak ditemukan!";
                $redirect = false;
            }

            $stmt->close();
        } else {
            $message = "Terjadi kesalahan: " . $conn->error;
            $redirect = false;
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
    <title>Login - SIWARSA</title>

    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            <?php if (isset($message)) : ?>
                alert("<?php echo $message; ?>");
                <?php if ($redirect) : ?>
                    window.location.href = "index.php"; // Change to the appropriate post-login page
                <?php endif; ?>
            <?php endif; ?>
        });
    </script>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-tale-seo-agency.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
</head>
<body>


<div class="wrapper">
    <div class="container main">
        <div class="row">
            <div class="col-md-6 side-image">
                <img src="loginimg.jpeg" alt="">
                <div class="text">
                    <h1 class="h1">Mari Bergabung Dengan Kami</h1>
                    <p class="h1">BumDESGo! adalah platform</p>
                </div>
            </div>
            <div class="col-md-6 right">
                <div class="input-box">
                    <header>Masuk Akun</header>
                    <form action="login.php" method="POST">
                        <div class="input-field">
                            <input type="text" class="input" id="email" name="email" required autocomplete="off">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field">
                            <input type="password" class="input" id="password" name="password" required>
                            <label for="password">Password</label>
                        </div>
                        <div class="input-field">
                            <input type="submit" class="submit" value="Masuk Akun">
                        </div>
                        <div class="signin">
                            <span>Belum Punya Akun? <a href="register.php">Daftar disini</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
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
    background-image: url("loginimg.jpeg");
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
    width: 35px;
    position: absolute;
    top: 30px;
    left: 30px;
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
.input-field input:focus ~ label {
    top: -10px;
    font-size: 13px;
}
.input-field input:valid ~ label {
    top: -10px;
    font-size: 13px;
    color: #5d5076;
}
.input-field .input:focus, .input-field .input:valid {
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
    .text p, i {
        font-size: 16px;
    }
    .row {
        max-width: 420px;
        width: 100%;
    }
}
</style>
</html>
