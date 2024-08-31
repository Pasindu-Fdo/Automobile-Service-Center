<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar</title>
    <link rel="stylesheet" href="/AutoMobile Project/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css">
    <link rel="stylesheet" href="/AutoMobile Project/User/assets/css/styles.css">
    <script src="/AutoMobile Project/assets/js/jquery-3.7.1.min.js"></script>
    <script src="/AutoMobile Project/assets/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="d-flex sticky-top">
        <aside id="sidebar">
            <div class="d-flex">
                <button id="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="/AutoMobile Project/User/vehicle.php" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Vehicles</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/AutoMobile Project/User/appointment.php" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Appointments</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/AutoMobile Project/User/history.php" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Service history</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/AutoMobile Project/User/bill.php" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Bills</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/AutoMobile Project/User/activity.php" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Activity Track</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/AutoMobile Project/User/notification.php" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Notifications</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/AutoMobile Project/User/profile.php" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Profile Settings</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="/AutoMobile Project/User/logout.php" class="sidebar-link">
                    <i class="lni lni-user"></i>
                    <span>Log Out</span>
                </a>
            </div>
        </aside>
    <script src="/AutoMobile Project/User/assets/js/index.js"></script>
</body>