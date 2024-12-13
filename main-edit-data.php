<?php
include "koneksi.php";

if (isset($_POST['button'])) {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $telepon = $_POST['telepon'];
    $tempat = $_POST['tempat'];
    $tgl = $_POST['tgl'];
    $jk = $_POST['gender'];
    $alamat = $_POST['alamat'];

    // Query update data
    $data = "UPDATE user 
             SET nama = '$nama',
                 telepon = '$telepon',
                 tempatlahir = '$tempat',
                 tgl_lahir = '$tgl',
                 jk = '$jk',
                 alamat = '$alamat' 
             WHERE id_account = $id";

    // Eksekusi query
    if (mysqli_query($conn, $data)) {
        echo "
        <script>
            Swal.fire({
                title: 'Edit Data',
                text: 'Edit Data Success.',
                icon: 'success',
            }).then(() => {
                window.location.href = '?page=pengguna';
            });
        </script>";
    } else {
        echo "
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Edit Data Fault',
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
            <?php
            include "koneksi.php";
            $id = $_GET['id'];
            $data = mysqli_query($conn, "SELECT * FROM user WHERE id_account = $id");
            $show = mysqli_fetch_assoc($data);
            ?>

            <!-- Input Full Name -->
            <div class="input-box">
                <label>Full Name</label>
                <input
                    type="text"
                    name="nama"
                    value="<?php echo $show['nama']; ?>"
                    placeholder="Enter full name"
                    required />
            </div>

            <!-- Input Phone Number -->
            <div class="input-box">
                <label>Phone Number</label>
                <input
                    type="number"
                    name="telepon"
                    value="<?php echo $show['telepon']; ?>"
                    placeholder="Enter phone number"
                    required />
            </div>

            <!-- Input Birth Place and Birth Date -->
            <div class="column">
                <div class="input-box">
                    <label>Birth Place</label>
                    <input
                        type="text"
                        name="tempat"
                        value="<?php echo $show['tempatlahir']; ?>"
                        placeholder="Enter birth place"
                        required />
                </div>
                <div class="input-box">
                    <label>Birth Date</label>
                    <input
                        type="date"
                        name="tgl"
                        value="<?php echo $show['tgl_lahir']; ?>"
                        placeholder="Enter birth date"
                        required />
                </div>
            </div>

            <!-- Gender Selection -->
            <div class="gender-box">
                <h3>Gender</h3>
                <div class="gender-option">
                    <div class="gender">
                        <input
                            type="radio"
                            id="check-male"
                            value="L"
                            name="gender"
                            <?php if ($show['jk'] == 'L') echo 'checked'; ?> />
                        <label for="check-male">Male</label>
                    </div>
                    <div class="gender">
                        <input
                            type="radio"
                            id="check-female"
                            value="P"
                            name="gender"
                            <?php if ($show['jk'] == 'P') echo 'checked'; ?> />
                        <label for="check-female">Female</label>
                    </div>
                </div>
            </div>

            <!-- Input Address -->
            <div class="input-box address">
                <label>Address</label>
                <input
                    type="text"
                    name="alamat"
                    value="<?php echo $show['alamat']; ?>"
                    placeholder="Enter street address"
                    required />
            </div>

            <!-- Submit Button -->
            <button type="submit" name="button">Submit</button>
        </form>
    </div>
</div>