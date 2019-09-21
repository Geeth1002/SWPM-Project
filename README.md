~ Welcome to NSBM Smart Timetable ~

01. Clone the project. (https://github.com/Geeth1002/SWPM-Projects.git)
02. Create database in phpmyadmin (DB Name : nsbmtimetable).
03. Open cloned project in visual studio code.
04. Open terminal.
05. Go to the folder location from terminal.
06. Type 'composer intall' & press enter.
07. After installing it type 'composer update' & press enter.
08. Then type 'cp .env.example .env' & press enter.
09. Select .env file in file directory and change DBConnection details (DB_DATABASE=nsbmtimetable,DB_USERNAME=root,DB_PASSWORD=)
10. Then type 'php artisan key:generate' & press enter.
11. Then type 'php artisan migrate' & press enter.
12. Then type 'php artisan db:seed' & press enter.
13. Then type 'php artisan serve' & press enter.
14. Laravel development server started at <http://127.0.0.1:8000>

~ Demo Credentials ~

  User: admin@admin.com
  Password: secret
