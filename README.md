#Install the Imagick extension
sudo apt install php-imagick
sudo apt list php-magick -a
#after install, restart apache2 or in your server locale
sudo systemctl restart apache2
php -m | grep imagick
change the value of /etc/ImageMagick-6/policy.xml to < policy domain="coder" rights="none" pattern="PDF" / > for < policy domain="coder" rights="read|write" pattern ="PDF" / >
If these steps are completed,
launch the laravel
"php artisan serve" in the specific project.

#IF your file is converted,
you will find the file in the "public/public_images" folder
