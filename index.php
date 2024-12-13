<?php
session_start();
include("koneksi.php");
if (!isset($_SESSION['email'])) {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatitble" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/admin.css" />
</head>

<body>
    <!-- navigation -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="school-outline"></ion-icon></span>
                        <span class="title">Horizon University Indonesia</span>
                    </a>
                </li>
                <li>
                    <a href="?page=index">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="?page=form">
                        <span class="icon"><ion-icon name="clipboard-outline"></ion-icon></span>
                        <span class="title">Form</span>
                    </a>
                </li>
                <li>
                    <a href="?page=chart">
                        <span class="icon"><ion-icon name="pie-chart-outline"></ion-icon></span>
                        <span class="title">Chart</span>
                    </a>
                </li>
                <li>
                    <a href="?page=tabel">
                        <span class="icon"><ion-icon name="browsers-outline"></ion-icon></span>
                        <span class="title">Data Tabel</span>
                    </a>
                </li>
                <li>
                    <a href="?page=pengguna">
                        <span class="icon">
                            <ion-icon name="person-outline"></ion-icon>
                        </span>
                        <span class="title">Pengguna</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title">Setting</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                        <span class="title">Password</span>
                    </a>
                </li>
                <li>
                    <a href="logout.php">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <div class="search">
                    <label>
                        <input type="text" placeholder="search here" />
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
                <div class="user">
                    <img src="img/avatar1.jpg" alt="" />
                </div>
            </div>

            <?php

            if (isset($_GET['page'])) {
                $page = $_GET['page'];
                if ($page == 'index') {
                    include "main-index.php";
                } elseif ($page == 'form') {
                    include "main-form.php";
                } elseif ($page == 'chart') {
                    include "main-chart.php";
                } elseif ($page == 'tabel') {
                    include "main-tabel.php";
                } elseif ($page == 'pengguna') {
                    include "main-pengguna.php";
                } elseif ($page == 'form') {
                    include 'main-form-data.php';
                } elseif ($page == 'edit') {
                    include "main-edit-data.php";
                } elseif ($page == 'form-data') {
                    include "main-form-data.php";
                }
            } else {
                include 'main-index.php';
            }
            ?>
        </div>
    </div>
    <script>

    </script>
    <script src="main.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
 
</body>

</html>