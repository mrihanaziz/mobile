<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatitble" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Input</title>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="admin.css" />
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
                    <a href="user.php">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="form_user.php">
                        <span class="icon"><ion-icon name="clipboard-outline"></ion-icon></span>
                        <span class="title">Form</span>
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
            <div class="details">
                <div class="recentOrders" style="width: 62rem;">
                    <div style="color: blue; font-size: x-large; font-weight: 600;">Responsive Form Input</div>

                    <hr />
                    <form action="#" class="form">
                        <div class="input-box">
                            <label>Full Name</label>
                            <input type="text" placeholder="Enter full name" required />

                        </div>
                        <div class="input-box">
                            <label>Email Address</label>
                            <input type="text" placeholder="Enter email address" required />

                        </div>
                        <div class="column">
                            <div class="input-box">
                                <label>Phone Number</label>
                                <input type="number" placeholder="Enter phone number" required />
                            </div>
                            <div class="input-box">
                                <label>Birth Date</label>
                                <input type="date" placeholder="Enter birth date" required />

                            </div>
                        </div>
                        <div class="gender-box">
                            <h3>Gender</h3>
                            <div class="gender-option">
                                <div class="gender">
                                    <input type="radio" id="check-male" name="gender" checked />

                                    <label for="check-male">male</label>
                                </div>
                                <div class="gender">
                                    <input type="radio" id="check-female" name="gender" />

                                    <label for="check-female">Female</label>
                                </div>
                                <div class="gender">
                                    <input type="radio" id="check-other" name="gender" />

                                    <label for="check-other">prefer not to say</label>
                                </div>
                            </div>
                        </div>
                        <div class="input-box address">
                            <label>Address</label>
                            <input type="text" placeholder="Enter street address" required />
                            <input type="text" placeholder="Enter street address line 2" required />
                            <div class="column">
                                <div class="select-box">
                                    <select>
                                <option hidden>Country</option>
                                <option>America</option><option>Japan</option>
                                <option>India</option>
                                <option>Nepal</option>
                                </select>
                                </div>
                                <input type="text" placeholder="Enter your city" required />

                            </div>
                            <div class="column">
                                <input type="text" placeholder="Enter your region" required />

                                <input type="number" placeholder="Enter postal code" required />
                            </div>
                        </div>
                        <button>Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <script src="main.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>