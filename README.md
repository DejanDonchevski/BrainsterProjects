### Dejan Donchevski - BrainsterPreneurs Project 03

To set up the project you need to run

- composer install
- cp .env.example .env
- php artisan key:generate

then you need to make the database and set it .env, after that execute

- php artisan migrate --seed

// 
Additional: you need to run following commands in order to successfull compile your assets
- npm install
- npm run dev
