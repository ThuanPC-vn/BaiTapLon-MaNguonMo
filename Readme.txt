# Hướng dẫn cài đặt và chạy dự án web Local

## Yêu cầu hệ thống

* **Hệ điều hành:** Windows, macOS hoặc Linux
* **Phần mềm:** Đã cài đặt XAMPP (phiên bản mới nhất hoặc tương thích) bao gồm:
    * **Apache:** Web Server
    * **PHP:** Ngôn ngữ lập trình backend
    * **MySQL:** Hệ quản trị cơ sở dữ liệu

## Các bước cài đặt

1.  **Cài đặt XAMPP:**
    * Nếu bạn chưa cài đặt XAMPP, hãy tải xuống phiên bản phù hợp với hệ điều hành của bạn từ trang web chính thức của Apache Friends: [https://www.apachefriends.org/download.html](https://www.apachefriends.org/download.html)
    * Thực hiện theo các bước hướng dẫn cài đặt được cung cấp. Thông thường, bạn sẽ chọn một thư mục cài đặt (ví dụ: `C:\xampp` trên Windows hoặc `/Applications/XAMPP` trên macOS).

2.  **Sao chép mã nguồn dự án:**
    * Sao chép toàn bộ thư mục chứa mã nguồn dự án web của bạn vào thư mục `htdocs` bên trong thư mục cài đặt XAMPP.

3.  **Khởi động XAMPP:**
    * Mở XAMPP Control Panel (thường có biểu tượng trên desktop hoặc trong menu ứng dụng).
    * Nhấn nút **Start** bên cạnh **Apache** để khởi động web server. Bạn sẽ thấy trạng thái chuyển sang màu xanh lá cây nếu khởi động thành công.
    * Nhấn nút **Start** bên cạnh **MySQL** để khởi động hệ quản trị cơ sở dữ liệu MySQL. Tương tự, trạng thái sẽ chuyển sang màu xanh lá cây nếu thành công.

4.  **Tạo cơ sở dữ liệu:**
    * Mở trình duyệt web của bạn và truy cập vào phpMyAdmin. Đường dẫn mặc định thường là: `http://localhost/phpmyadmin/` hoặc `http://127.0.0.1/phpmyadmin/`.
    * Trong phpMyAdmin, tìm và nhấp vào tab **"Databases"**.
    * Nhập tên cơ sở dữ liệu "huynhleminhthuan" vào trường **"Create database"** và nhấp vào nút **"Create"**.
    * **Import dữ liệu vào bằng file huynhleminhthuan.sql ** hãy chọn cơ sở dữ liệu bạn vừa tạo, nhấp vào tab **"Import"**, chọn file `huynhleminhthuan.sql` và nhấp vào nút **"Go"**.

## Chạy dự án

1.  **Điều chỉnh dự án phù hợp với máy local:**
    * Mở thư mục dự án 23TH2520-HLeMinhThuan.
    * Truy cập vào thư mục mysqli_connect.php và chỉnh sửa trong những trường hợp sau:
        * Nếu như port của MySQL trên máy local của bạn khác 3306. Trong trường hợp này thì hãy thay đổi lại port sao cho phù hợp với máy local của bạn.
        ( Ví dụ nếu port MySQL của bạn là 8889 thì hãy thay đổi ở dòng "$port = 3306;" lại thành "$port = 8889;" )
        

2.  **Truy cập trang web:**
    * Mở trình duyệt web của bạn.
    * Nhập địa chỉ URL của dự án vào thanh địa chỉ. Đường dẫn thường sẽ dựa trên tên thư mục bạn đã sao chép vào `htdocs`. Ví dụ:
        * Nếu bạn sao chép vào `C:\xampp\htdocs\`, hãy truy cập `http://localhost/23TH2520-HLeMinhThuan/` hoặc `http://127.0.0.1/23TH2520-HLeMinhThuan/`.
        * Nếu file index chính của bạn nằm trực tiếp trong `htdocs`, hãy truy cập `http://localhost/` hoặc `http://127.0.0.1/`.

3.  **Kiểm tra các chức năng:**
    * Điều hướng qua các trang của trang web để đảm bảo mọi thứ hoạt động bình thường.
    * Kiểm tra các tính năng liên quan đến cơ sở dữ liệu , chẳng hạn như đăng ký, đăng nhập, hiển thị dữ liệu, v.v.

## Lưu ý quan trọng

* **Quyền hạn đăng nhập:** Trang web cơ bản chỉ có chức năng dành cho user (người dùng) vì vậy mà mình đã biến tấu một số chức năng như sau:

    * Khi vào trang web (chưa đăng nhập user) thì trang sẽ chỉ có mục Home Page | Register | Login | Bài Tập.

    * Sau khi đăng nhập với user với quyền User thì trang sẽ có mục Home Page | Change Password | Logout | Profile | Bài Tập.

    * Sau khi đăng nhập với user với quyền Admin thì trang sẽ có mục Home Page | View Users | Change Password | Logout | Profile | Bài Tập.


* **Có theo dõi qua trình mình làm dự án thông qua Github của mình:** Link GitHub https://github.com/ThuanPC-vn/BaiTapLon-MaNguonMo .
