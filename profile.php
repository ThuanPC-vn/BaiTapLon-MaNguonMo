<?php # Script - profile.php
$page_title = 'Your Profile';
include ('includes/header.php');

// Kiểm tra xem người dùng đã đăng nhập hay chưa
if (!isset($_SESSION['user_id'])) {

    // Nếu không đăng nhập, chuyển hướng về trang login
    $url = 'login.php';
    header("Location: $url");
    exit();

} else { // Người dùng đã đăng nhập
    require ('mysqli_connect.php'); // Kết nối đến database

    // Lấy ID của người dùng từ session
    $user_id = $_SESSION['user_id'];

    // Tạo câu lệnh SQL để lấy thông tin của người dùng
    $q = "SELECT first_name, last_name, email, DATE_FORMAT(registration_date, '%d/%c/%Y') AS dr FROM users WHERE user_id = $user_id";
    $r = @mysqli_query ($dbc, $q); // Thực hiện truy vấn

    if (mysqli_num_rows($r) == 1) { // Nếu tìm thấy thông tin người dùng

        // Lấy dữ liệu người dùng
        $row = mysqli_fetch_array ($r, MYSQLI_ASSOC);

        echo '<h1>Your Profile</h1>';
        echo '<p><strong>First Name:</strong> ' . htmlspecialchars($row['first_name']) . '</p>';
        echo '<p><strong>Last Name:</strong> ' . htmlspecialchars($row['last_name']) . '</p>';
        echo '<p><strong>Email:</strong> ' . htmlspecialchars($row['email']) . '</p>';
        echo '<p><strong>Registration Date:</strong> ' . htmlspecialchars($row['dr']) . '</p>';

    } else { // Nếu không tìm thấy thông tin người dùng (lỗi)
        echo '<div class="error"><h1>System Error</h1>
        <p class="error">There was an error retrieving your profile information.</p></div>';
        echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
    }

    mysqli_free_result ($r); // Giải phóng kết quả
    mysqli_close($dbc); // Đóng kết nối database
}

include ('includes/footer.php');
?>