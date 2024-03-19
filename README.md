<p align="center"><a href="https://laravel.com" target="_blank"><img src="storage/app/public/assets/logo-rd-strated.png" width="400" alt="Laravel Logo"></a></p>

## RD Started

Este proyecto "started" está desarrollado en Laravel, un framework PHP robusto y popular para el desarrollo de aplicaciones web. El proyecto Incluye la siguientes caracteristicas:

1. Index
![Screen](https://i.ibb.co/48fjWST/rd-started-capture-1.png "Index")

2. Admin Dashboard
![Screen](https://i.ibb.co/c3GGK0b/rd-started-capture-2.png "Dashboard")

## Demo
💻 Index [https://rd-started.richard-dev.net](https://rd-started.richard-dev.net)

💻 Login [https://rd-started.richard-dev.net/iniciar-sesion](https://rd-started.richard-dev.net/iniciar-sesion)

.- 👦 Username: admin@richard-dev.net

.- 🔑 Password: admin-2024

**Featured:**
- Index
- Blog
- Articles (CRUD) / Categories (CRUD)
- Pages (CRUD)
- Login / Logout
- Dashboard
- Admin users
- Profile user
- Dark mode
- Switch language (English/Spanish)

**Technologies:**
- [Laravel 10](https://laravel.com/docs/10.x/).
- [Livewire 3](https://livewire.laravel.com/docs/quickstart).
- [Tailwind CSS v3](https://tailwindcss.com/docs/installation).
- [Flowbite](https://flowbite.com/).

## How to start

**1. Clone From Github**
```bash
git clone https://github.com/richarddev7/rd-started.git
```

**2. Create env file**
```bash
Create a .env file by cloning .env.example file
```

**3. Create a Database named**
```bash
"rd_strarted" and repleace value in file .env -> DB_DATABASE
```

**4. Update Composer**
```bash
composer update
```

**5. Genera Key APP**
```bash
php artisan key:generate
```

**6. Run Migration & Seed**
```bash
php artisan migrate
```

**7. Run User Seeder**
```bash
php artisan db:seed --class=UserSeeder
```

**8. Run Build App**
```bash
npm run build

# If Needed intall npm 
npm install
```

**9. Create Storage Link**
```bash
php artisan storage:link
```

**10. Run On Local Machine**
```bash
php artisan serve
```

**11. Open Browser**
```bash
http://localhost:8000
```
10. Go to RD Started Admin
Go to this link - http://localhost:8000/iniciar-sesion

Login Now by giving this data
```php
Username: admin@richard-dev.net
Password: admin-2024
```


### Contact

- **[Richard-Dev (Richard Bolivar)](https://richard-dev.net/)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
