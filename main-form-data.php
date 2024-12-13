<?php
include "koneksi.php";
if (isset($_POST['button'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pw = $_POST['password'];
    $telepon = $_POST['telepon'];
    $tempat = $_POST['tempat'];
    $tgl = $_POST['tgl'];
    $jk = $_POST['gender'];
    $alamat = $_POST['alamat'];
    $query = "INSERT INTO account(id_account, email, password,

akses) VALUES ('','$email',md5('$pw'),'2')";
    if (mysqli_query($conn, $query)) {
        $id = mysqli_insert_id($conn);
        $data = mysqli_query($conn, "INSERT INTO user(id_user,
id_account,nama,telepon,tempatlahir,tgl_lahir,jk,alamat)
VALUES

('','$id','$nama','$telepon','$tempat','$tgl','$jk','$alamat')");

        echo "<script>
Swal.fire({
title: 'Add Data',
text: 'Add Data Success.',
icon: 'success',
}).then(() => {
window.location.href = '?page=pengguna';
});
</script>";
    } else {
        echo "<script>
Swal.fire({
icon: 'error',
title: 'Add Data Fault',
text: 'Try Again..!',
}).then(() => {
window.location.href = '?page=pengguna';
});
</script>";
    }
}
?>

<div class="details">
    <div class="recentOrder">
        <div class="text">Form Input Data</div>
        
        <hr />
        <form action="" class="form" method="POST">
            <!-- Input Full Name -->
            <div class="input-box">
                <label>Full Name</label>
                <input type="text" name="nama" placeholder="Enter full name" required />
            </div>

            <!-- Input Email Address -->
            <div class="input-box">
                <label>Email Address</label>
                <input type="email" name="email" placeholder="Enter email address" required />
            </div>

            <!-- Input Password -->
            <div class="input-box">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter password" required />
            </div>

            <!-- Input Phone Number -->
            <div class="input-box">
                <label>Phone Number</label>
                <input type="number" name="telepon" placeholder="Enter phone number" required />
            </div>

            <!-- Input Birth Place and Birth Date -->
            <div class="column">
                <div class="input-box">
                    <label>Birth Place</label>
                    <input type="text" name="tempat" placeholder="Enter birth place" required />
                </div>
                <div class="input-box">
                    <label>Birth Date</label>
                    <input type="date" name="tgl" placeholder="Enter birth date" required />
                </div>
            </div>

            <!-- Gender Selection -->
            <div class="gender-box">
                <h3>Gender</h3>
                <div class="gender-option">
                    <div class="gender">
                        <input type="radio" id="check-male" value="L" name="gender" checked />
                        <label for="check-male">Male</label>
                    </div>
                    <div class="gender">
                        <input type="radio" id="check-female" value="P" name="gender" />
                        <label for="check-female">Female</label>
                    </div>
                </div>
            </div>

            <!-- Input Address -->
            <div class="input-box address">
                <label>Address</label>
                <input type="text" name="alamat" placeholder="Enter street address" required />
            </div>

            <!-- Submit Button -->
            <button type="submit" name="button">Submit</button>
        </form>
    </div>
</div>