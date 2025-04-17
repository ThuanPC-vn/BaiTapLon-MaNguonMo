<?php # Script - BaiTap.php
$page_title = 'Bài Tập Lập Trình';
include ('includes/header.php');
?>

<h1>Thư Mục Bài Tập</h1>

<?php
$rootDir = './BaiTap'; // Đường dẫn đến thư mục BaiTap (tính từ thư mục chứa file BaiTap.php)

if (is_dir($rootDir)) {
    $subFolders = scandir($rootDir);
    echo '<ul style="list-style-type: none; padding-left: 0;">';
    foreach ($subFolders as $folder) {
        if ($folder != '.' && $folder != '..') {
            $folderPath = $rootDir . '/' . $folder;
            if (is_dir($folderPath)) {
                echo '<li style="margin-bottom: 10px;">';
                echo '<strong>' . htmlspecialchars($folder) . '</strong>';
                echo '<ul style="list-style-type: none; padding-left: 20px;">';
                $files = scandir($folderPath);
                foreach ($files as $file) {
                    if (pathinfo($file, PATHINFO_EXTENSION) == 'php') {
                        echo '<li><a href="' . htmlspecialchars($folderPath . '/' . $file) . '">' . htmlspecialchars($file) . '</a></li>';
                    }
                }
                echo '</ul>';
                echo '</li>';
            }
        }
    }
    echo '</ul>';
} else {
    echo '<p class="error">Thư mục BaiTap không tồn tại!</p>';
}
?>

<?php
include ('includes/footer.php');
?>

<style>
    #content {
        padding-bottom: 20px; /* Để có khoảng trống dưới danh sách */
    }

    h1 {
        color: #337ab7; /* Màu tiêu đề nổi bật */
        border-bottom: 2px solid #eee;
        padding-bottom: 10px;
        margin-bottom: 20px;
    }

    strong {
        color: #5cb85c; /* Màu cho tên thư mục */
    }

    ul {
        margin-bottom: 15px;
    }

    ul li {
        margin-bottom: 5px;
    }

    ul ul {
        margin-left: 15px;
    }

    ul ul li {
        color: #777; /* Màu cho tên file */
    }

    ul ul li a {
        color: #007bff; /* Màu cho link file */
        text-decoration: none;
    }

    ul ul li a:hover {
        text-decoration: underline;
    }

    .error {
        color: #d9534f; /* Màu cho thông báo lỗi */
        font-weight: bold;
    }
</style>