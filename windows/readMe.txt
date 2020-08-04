Hướng dẫn được dựa theo link sau  https://github.com/php-webdriver/php-webdriver

B1: set php thành biến môi trường, (khi nào mở command line => gõ php --version nó ra version là đã set thành công)

B2: Download composer.phar binary
curl -sS https://getcomposer.org/installer | php
php composer.phar require php-webdriver/webdriver

B3: Download chrome driver bản mới nhất (ra google gõ là ra)
giải nén ra được 1 file chromedriver.exe, gõ mở command line ở thư mục đó rồi gõ chromedriver --port=4444
Điều này có nghĩa chromedriver lắng nghe ở cổng 4444. (chrome driver này sẽ điều khiển chrome)
(chromedriver --port=4444)

B4: Chạy file code php, nói chung tác dụng của file này là giống như ra lệnh cho con chrome driver, sau đó chrome driver sẽ điều khiển chrome

B5: run : php test.php: 
Nó sẽ khởi động 1 chrome ở chế độ headless và lấy title của trang wiki