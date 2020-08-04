Hướng dẫn được dựa theo link sau  https://github.com/php-webdriver/php-webdriver

B1: set php thành biến môi trường, (khi nào mở command line => gõ php --version nó ra version là đã set thành công)

B2: Download composer.phar binary
curl -sS https://getcomposer.org/installer | php
php composer.phar require php-webdriver/webdriver

B3: # Install Chrome.
sudo curl -sS -o - https://dl-ssl.google.com/linux/linux_signing_key.pub | apt-key add
sudo echo "deb http://dl.google.com/linux/chrome/deb/ stable main" >> /etc/apt/sources.list.d/google-chrome.list
sudo apt-get -y update
sudo apt-get -y install google-chrome-stable

B3: Download chrome driver bản mới nhất (ra google gõ là ra)
# Install ChromeDriver.
wget -N https://chromedriver.storage.googleapis.com/79.0.3945.36/chromedriver_linux64.zip -P ~/
unzip ~/chromedriver_linux64.zip -d ~/
rm ~/chromedriver_linux64.zip
sudo mv -f ~/chromedriver /usr/local/bin/chromedriver
sudo chown root:root /usr/local/bin/chromedriver
sudo chmod 0755 /usr/local/bin/chromedriver

Run chromedriver and listen port 4444
cd /usr/local/bin/chromedriver
chromedriver --port=4444

B4: Cài đặt thư viện để chạy chrome driver (dùng composer để cài đặt)
https://github.com/php-webdriver/php-webdriver

B5: Chạy file code php, nói chung tác dụng của file này là giống như ra lệnh cho con chrome driver, sau đó chrome driver sẽ điều khiển chrome (lưu ý thêm option là sanbox cho nó)

B6: run : php test.php: 
Nó sẽ khởi động 1 chrome ở chế độ headless và lấy title của trang wiki