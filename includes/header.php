<?php # Script 9.1 - header.php
// This page begins the HTML for any page.
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="../../includes/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="includes/style.css" type="text/css" media="screen" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

    <div class="grid-overlay"></div>
    <div class="gradient-overlay"></div>

    <div id="header">
        <h1>"Không có ngôn ngữ kém bảo mật <br> Chỉ có người Dev không đủ trình độ."</h1>
        <h2>ig: Taki.webdev</h2>
    </div>
    <div id="navigation">
        <ul>
            
            <?php
            // Bắt đầu session nếu chưa được bắt đầu
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }

            // Kiểm tra xem người dùng đã đăng nhập hay chưa
            if (isset($_SESSION['user_id'])) { // Đã đăng nhập
                
                // Kiểm tra quyền admin
                if (isset($_SESSION['permisson']) && $_SESSION['permisson'] == 1) { // Là admin
                    echo '<li><a href="about-admin.php">About Me</a></li>';
                    echo '<li><a href="view_users.php">View Users</a></li>';
                } else { // Là user
                    echo '<li><a href="about.php">About Me</a></li>';
                }
                // Hiển thị link đổi mật khẩu
                echo '<li><a href="password.php">Change Password</a></li>';
                // Hiển thị link Profile
                echo '<li><a href="profile.php">Profile</a></li>';
                // Hiển thị Bài Tập
                echo '<li><a href="BaiTap.php">Bài Tập</a></li>';
                // Hiển thị link Logout
                echo '<li><a href="logout.php">Logout</a></li>';
                
            }

            ?>
        </ul>
    </div>
        
    <div id="content">