<?php
session_start();

require 'vendor/autoload.php'; // Load AWS SDK
use Aws\S3\S3Client;
use Aws\Exception\AwsException;

// Fungsi untuk menghindari XSS dengan sanitasi input
function sanitize_input($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama_mhs = sanitize_input($_POST['nama_mhs']);
    $alamat = sanitize_input($_POST['alamat']);
    $no_hp = sanitize_input($_POST['no_hp']);
    $tgl_lahir = sanitize_input($_POST['tgl_lahir']);
    $asal_sklh = sanitize_input($_POST['asal_sklh']);
    $agama = sanitize_input($_POST['agama']);
    $jk = sanitize_input($_POST['jk']);

    // Konfigurasi AWS S3
    $bucket_name = "kampyus-bucket";
    $region = "US East (N. Virginia) us-east-1"; 

    try {
        // Koneksi ke database
        include('koneksi.php');

        // Simpan data ke database
        $stmt = $pdo->prepare("INSERT INTO orders (nama_mhs, alamat, no_hp, tgl_lahir, asal_sklh, agama, jk) 
                               VALUES (:nama_mhs, :alamat, :no_hp, :tgl_lahir, :asal_sklh, :agama, :jk)");

        $stmt->execute([
            ':nama_mhs' => $nama_mhs,
            ':alamat' => $alamat,
            ':no_hp' => $no_hp,
            ':tgl_lahir' => $tgl_lahir,
            ':asal_sklh' => $asal_sklh,
            ':agama' => $agama,
            ':jk' => $jk,
        ]);

        // Pesan sukses
        $_SESSION['success_message'] = "Your message has been successfully sent!";
        header("Location: index.php?status=success");
        exit();

    } catch (AwsException $e) {
        $_SESSION['error_message'] = "Error uploading file to S3: " . $e->getMessage();
        // Alert dengan pesan error
        header("Location: index.php?status=error-upload-file");
        exit();
    } catch (PDOException $e) {
        $_SESSION['error_message'] = "Error inserting data into database: " . $e->getMessage();
        // Alert dengan pesan error
        header("Location: index.php?status=error-insert-data");
        exit();
    }
    
}
?>
