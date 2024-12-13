<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- SweetAlert -->
    <link
        href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.min.css"
        rel="stylesheet">
    <script
        src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.all.min.js">
    </script>
</head>

<body>
    <?php
    include "koneksi.php";

    // Mendapatkan ID dari URL
    $id = $_GET['id'];

    // Query untuk menghapus data dari tabel account
    $query = "DELETE FROM account WHERE id_account = $id";

    if (mysqli_query($conn, $query)) {
        // Jika berhasil menghapus data dari tabel account, hapus juga dari tbl_user
        $query2 = mysqli_query($conn, "DELETE FROM user WHERE id_account = $id");

        // Notifikasi berhasil menggunakan SweetAlert
        echo "
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Hapus File',
                text: 'Berhasil',
            }).then(() => {
                window.location.href = 'index.php?page=tabel';
            });
        </script>";
    } else {
        // Notifikasi gagal menggunakan SweetAlert
        echo "
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Hapus File',
                text: 'Gagal',
            }).then(() => {
                window.location.href = 'dashboard.php?page=tabel';
            });
        </script>";
    }
    ?>
</body>

</html>