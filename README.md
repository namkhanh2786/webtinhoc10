# HƯỚNG DẪN CHẠY FILE TRONG FOLDER 'test' #

**Bước 1**: tải Xampp từ trang web https://www.apachefriends.org/download.html

*_Dùng hệ điều hành nào thì tải bản Xampp của hệ điều hành đó._  
*_Khuyến khích nên tải version mới nhất._

**Bước 2**: Chạy file cài đặt - bạn cần ghi nhớ tên thư mục cài đặt, ví dụ: F:/xampp  
_Lưu ý_: Tên thư mục cài đặt XAMPP không nên có khoảng trắng - 1 số đoạn mã sẽ không chạy được.

**Bước 3**: Tải folder 'test' xuống, ghi nhớ vị trí tải folder.

**Bước 4**: Search trên máy từ khóa 'Xampp', hoặc trong lúc cài đặt, trình cài đặt sẽ hỏi địa chỉ để folder, sau khi cài đặt xong 'Xampp' thì tìm nơi đã tải folder.

**Bước 5**: Di dời folder 'test' từ bước 3 vào trong folder 'htdocs' của folder Xampp, chi tiết từ folder: xampp -> htdocs.

**Bước 6**: Mở control panel xampp từ bước 4 và run 2 module là Apache và MySQL.

**Bước 7**: Vào browser và search địa chỉ sau: http://localhost/phpmyadmin/

**Bước 8**: Bấm vào SQL và chạy paste đoạn mã sau:
``` sql
CREATE DATABASE book;

USE book;

CREATE TABLE book (
  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  post VARCHAR(50) COLLATE utf8mb4_general_ci NOT NULL,
  name VARCHAR(100) COLLATE utf8mb4_general_ci NOT NULL,
  author VARCHAR(100) COLLATE utf8mb4_general_ci NOT NULL,
  gerne VARCHAR(100) COLLATE utf8mb4_general_ci NOT NULL,
  description TEXT COLLATE utf8_general_ci NOT NULL
); 
```

Sau khi đã paste code thì bấm nút GO.

**Bước 9**: Truy cập vào đường link sau: http://localhost/test/

Lúc này bạn có thể thấy và chạy các file có thể chạy trong folder 'test'.
