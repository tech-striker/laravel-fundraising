ls
cd ..
ls
cd H5P/
ls
composer
clear
 composer create-project laravel/laravel
ls
cd laravel/
ls
php artisan make:migration create_sales_table
php artisan migrate
       php artisan make:controller Sales 
       php artisan make:controller SalesController 
ls
cd vendor/
ls
cd ..
ls
clear
ls
rm -rf *
ls
rm -rf laravel/
ls
 composer create-project laravel/laravel
ls
cd laravel/
ls
cd ../
ls
sudo setfacl -Rm u:www-data:rwx storage
sudo setfacl -Rm u:apcahe:rwx storage
sudo setfacl -Rm u:apache:rwx storage
       php artisan make:controller SalesController 
php artisan make:migration create_sales_table
la
ls
sudo setfacl -Rm u:apache:rwx storage
