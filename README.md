<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# Cài đặt grpc:
Nếu chưa có package pear  thì cần cài đặt trước
sudo apt install php7.4-dev php-pear

Hãy cài một số extension cần thiết của php:
sudo apt install -y php7.4-dev php-pear autoconf automake libtool make g++ unzip

Sau đó caì đặt grpc:
sudo pecl install grpc

Với máy có nhiều phiên bản php thì lên truyền php version để cài lại
sudo pecl -d php_suffix=7.4 install grpc
Nhớ là xóa bản grpc cũ trước khi cài lại nó
sudo pecl uninstall grpc


Với php phiên bản 7.0 thì grpc ko hỗ trợ, còn mỗi phiên bản php khác thì sẽ có phiên bản grpc phù hợp để triển khai
7.4 => grpc-1.48.0

cài đặt grpc: sudo pecl install grpc-1.48.0

Cuối cùng bạn tìm file php.ini và thêm dòng này vào extension=grpc.so


=> THời gian build có thể mất nhiều thời gian, check quá tình build xem có lỗi ko nhé
✅ Máy mạnh (CPU 8 core, RAM 16GB+): ~5-10 phút
✅ Máy trung bình (CPU 4 core, RAM 8GB): ~10-20 phút
✅ Máy yếu (CPU 2 core, RAM < 4GB): ~30 phút hoặc lâu hơn

Bây giờ chúng ta chạy command: ./rr-grpc -c .rr.yaml serve -v -d là xong 
