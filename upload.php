<?php
require_once('auth.php');


// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "siwarsa"; // Replace with your actual database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    // Retrieve form data
    $id_user = $_SESSION['id'];
    $id_ruko = $_POST['Jenis_Ruko'];
    $nomor_telepon = $_POST['nomor_telepon'];
    $no_ktp = $_POST['no_ktp'];
    $alamat = $_POST['alamat'];
    $nama_usaha = $_POST['nama_usaha'];
    $jenis_usaha = $_POST['jenis_usaha'];
    $lama_usaha = $_POST['lama_usaha'];
    $durasi = $_POST['duration'];
    $tanggal_mulai = $_POST['tanggal_penyewaan'];
    $email = $_SESSION['email'];


    // Insert form data into database
    $sql = "INSERT INTO pengajuan (
        id_user, id_ruko, nomor_telepon, no_ktp, alamat, nama_usaha, jenis_usaha, lama_usaha, durasi, tanggal_mulai, email
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iississssss", $id_user, $id_ruko, $nomor_telepon, $no_ktp, $alamat, $nama_usaha, $jenis_usaha, $lama_usaha, $durasi, $tanggal_mulai, $email);

    if ($stmt->execute()) {
        echo "Form submitted successfully and data saved.";
        
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>