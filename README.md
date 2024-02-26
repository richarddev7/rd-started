<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## RD Started

Este proyecto "started" está desarrollado en Laravel, un framework PHP robusto y popular para el desarrollo de aplicaciones web. El proyecto utiliza las siguientes tecnologías:

- [Laravel 10](https://laravel.com/docs/10.x/).
- [Livewire 3](https://livewire.laravel.com/docs/quickstart).
- [Tailwind CSS v3](https://tailwindcss.com/docs/installation).
- [Flowbite](https://flowbite.com/).

## How to start

**1. Clone From Github**
```bash
git clone https://github.com/richarddev7/rd-started.git
```

**3. Create env file**
```bash
Create a .env file by cloning .env.example file
```

**4. Create a Database named**
```bash
rd_strarted
```

**5. Run Migration & Seed**
```bash
php artisan migrate
```

**6. Run User Seeder**
```bash
php artisan db:seed --class=UserSeeder
```

**7. Run Build App**
```bash
npm run build

# If Needed intall npm 
npm install
```

**8. Run On Local Machine**
```bash
php artisan serve
```

**9. Open Browser**
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
