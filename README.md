
# BingHr Interview

Take home interview app for Web developer application at BingHr



## Introduction

The application lists users in an organization, and gives the current user the permissions to read users details, modify/edit and delete users according to the current user's level or permissions




## Tech Stack

**Client:** Bootstrap 5, JQuery, Css3, HTML5, Javascript

**Server:** PHP/Laravel

**Database:** MySQL


## Project Setup

To deploy this project run

```bash
  git clone https://github.com/Daniel-Ola/BingHR-Interview.git
```

```bash
    composer install
```

```bash
    npm install && npm run dev
```
- Create a database and set DB_DATABASE value in your .env file to the name of the databse created

```bash
    php artisan migrate
```

```bash
    php artisan db:seed
```

- Pause a little and go to root/database/seeders/DatabaseSeeder.php
- Uncomment the last seeder call (user factory)
- Comment the rest of the seed calls

```bash
    php artisan db:seed
```

```bash
    php artisan serve
```

Project should start at localhost:8000, which is the default startup for laravel. Navigate to this url from your browser and enjoy


## Note

- Some icons may not appear as it is in the image provided, this is because font awesome was used and some of these icons either does not exist or are not free.
- Do not disconnect from the internet, some resources are gotten directly from the web
- The file upload button was included but not functional
- Selecting the year updates the users list sorted by created year
