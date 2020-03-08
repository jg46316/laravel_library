#Install

Run composer install:

    composer install

Setup your environment:
   - rename .env.example file to .env
  

Bootstrap the application:

    php artisan key:generate
    php artisan migrate
    php artisan migrate:fresh --seed


 Login as simple user, email:jasmin@gmail.com   password:secret
 
 Login as admin, email:admin@gmail.com    password:secretadmin
   
   
   
