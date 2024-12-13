<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
</head>

<body>
    <div class="container">
        <table id="myTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                $no = 1;
                $data = mysqli_query($conn, "SELECT * FROM account");
                while ($show = mysqli_fetch_array($data)) {
                    echo "<tr>
                                <td>" . $no++ . "</td>
                                <td>" . $show["email"] . "</td>
                                <td>" . $show["akses"] . "</td>
                                <td>
                                <a href='?page=edit&id=" . $show['id_account'] . "' class='btn-edit'><ion-icon name='create-outline'></ion-icon></a>
                                <a href='hapus_data.php?id=" . $show['id_account'] . "' 
                                    onclick='return confirm(\"Are you sure you want to delete this record?\")' 
                                    class='btn-delete'>
                                    <ion-icon name='trash-outline'></ion-icon>
                                </a>
                                </td>
                                </tr>
                            ";
                } ?>
            </tbody>
        </table>
    </div>
    <script src="jquery/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

</body>

</html>