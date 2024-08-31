<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="/AutoMobile Project/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/AutoMobile Project/User/assets/css/styles.css">
    <script src="/AutoMobile Project/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/AutoMobile Project/assets/js/jquery-3.7.1.min.js"></script>
</head>

<body>
    <div class="header">
        <nav class="navbar navbar-expand-sm fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="/AutoMobile Project/User/assets/img/logo.svg" alt="Logo" style="width: 70px;">
                </a>
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Appointments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="user-pic">
                    <img src="/AutoMobile Project/User/assets/img/profilepic.jpg" alt="User" onclick="toggleMenu()">
                </div>

                <div class="sub-menu-wrap" id="subMenu">
                    <div class="sub-menu">
                        <div class="user-info">
                            <img src="/AutoMobile Project/User/assets/img/profilepic.jpg" alt="User">
                            <div class="user-names">
                                <h3>Malaka</h3>
                                <h5>Perera</h5>
                            </div>
                        </div>
                        <hr>
                        <ul class="sub-menu-list">
                            <li class="sub-menu-options">
                                <a href="/AutoMobile Project/User/profile.php" class= "sub-menu-link">
                                    <i class="lni lni-user"></i>
                                    <p>Edit Profile</p>
                                    <span>></span></a>
                            </li>

                            <li class="sub-menu-options">
                                <a href="/AutoMobile Project/User/vehicle.php" class= "sub-menu-link">
                                    <i class="lni lni-dashboard"></i>
                                    <p>Dashboard</p>
                                    <span>></span>
                                </a>
                            </li>

                            <li class="sub-menu-options">
                                <a href="/AutoMobile Project/User/setting.php" class= "sub-menu-link">
                                    <i class="lni lni-cog"></i>
                                    <p>Settings</p>
                                    <span>></span>
                                </a>
                            </li>

                            <li class="sub-menu-options">
                                <a href="/AutoMobile Project/User/logout.php" class= "sub-menu-link">
                                    <i class="lni lni-exit"></i>
                                    <p>Log Out</p>
                                    <span>></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <script src="/AutoMobile Project/User/assets/js/index.js"></script>
</body>