# R4TSHTAED - WEB

## Introduction FR 
Bienvenue sur mon Portfolio.
Je suis ***Henintsoa RAMAKAVELO*** (a.k.a *D'S*, *T'N*...), développeur web, game designer et graphiste freelance.
Ce site est conçu pour être évolutif et ouvert aux améliorations, permettant aux visiteurs d'explorer mon parcours à travers une interface immersive inspirée d'un bureau virtuel.

## Introduction EN

Welcome to my Portfolio.
I am Henintsoa RAMAKAVELO (a.k.a D'S, T'N...), a web developer, game designer, and freelance graphic designer.
This site is designed to be scalable and open to improvements, allowing visitors to explore my journey through an immersive interface inspired by a virtual desktop.


## About the project

## Fonctionnalités
Le projet propose un **pseudo-bureau** où l'on peut interagir avec différentes fenêtres simulant un environnement desktop.

| Fonction | Description | Statut |
| -------- | ----------- | ------ |
| Accueil | Page principale | 🔄 |
| Admin | Panneau de gestion (Filament) | 🔄 |
| Client | Configuration de profils | 🔄 |
| Terminal | Navigation via un faux terminal | 🤔 |
| Projets | Organisation des projets sous forme de fichiers | ⏳ |
| IA | Intégration d'une IA pour interagir sur le site | 🤔 |
| Mini-jeux | Intégration de jeux interactifs | 🤔 |
| Changement de fond | Personnalisation du wallpaper du bureau | 🤔 |

Légende : ✅ Fonctionnelle / 🔄 En développement / ⏳ À faire / 🤔 En réflexion

## FR : Technologies utilisées / EN : Technologies Used
- **FR** : The project is built on **Laravel** and includes several dependencies to extend its functionalities:
- **EN** : Le projet repose sur **Laravel** et inclut plusieurs dépendances pour étendre ses fonctionnalités :

- **Laravel** (Framework PHP)
- **Breeze** (Authentification légère)
- **Livewire** (Composants interactifs)
- **Filament** (Panneau d'administration)
- **Spatie Permissions** (Gestion des rôles et permissions)
- **Three.js** (Rendu 3D, optionnel)
- **Draggable.js** (Gestion du mouvement des fenêtres)

## Features EN
The project offers a **pseudo-desktop** where users can interact with different windows simulating a desktop environment.

| Feature | Description | Status |
| -------- | ----------- | ------ |
| Home | Main page | 🔄 |
| Admin | Management panel (Filament) | 🔄 |
| Client | Profile configuration | 🔄 |
| Terminal | Navigation via a fake terminal | 🤔 |
| Projects | Organizing projects as files | ⏳ |
| AI | Integrating AI for site interaction | 🤔 |
| Mini-games | Adding interactive games | 🤔 |
| Wallpaper Change | Customizing the desktop wallpaper | 🤔 |

Legend: ✅ Functional / 🔄 In development / ⏳ To be done / 🤔 Under consideration


## Installation

1. **FR : Installer PHP et Composer / EN : Install PHP and Composer**
2. **FR : Cloner le projet et configurer Laravel / EN: Clone the project and set up Laravel**
   ```cmd
   cd htdocs
   composer create-project --prefer-dist laravel/laravel:^11 r4tshtaed-web
   cd r4tshtaed-web
   code .
   ```
3. **FR : Configurer la base de données dans `.env` / EN : Configure the database in `.env**
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=ds_db
   DB_USERNAME=root
   DB_PASSWORD=
   ```
4. **FR : Installer les dépendances et effectuer les migrations / EN : Install dependencies and run migrations**
   ```cmd
   composer install
   php artisan migrate
   php artisan db:seed --class=RolesSeeder
   ```
5. **FR : Créer un utilisateur admin pour Filament / EN : Create an admin user for Filament**
   ```cmd
   php artisan make:filament-user
   ```
   Puis assigner le rôle d'admin dans MySQL :
   ```sql
   INSERT INTO model_has_roles (role_id, model_type, model_id) VALUES (1, 'App\\Models\\User', USER_ID);
   ```
6. **FR : Lancer le serveur / EN : Start the server**
   ```cmd
   php artisan serve
   ```




- **Laravel** (PHP Framework)
- **Breeze** (Lightweight authentication)
- **Livewire** (Interactive components)
- **Filament** (Admin panel)
- **Spatie Permissions** (Role and permission management)
- **Three.js** (3D rendering, optional)
- **Draggable.js** (Window movement management)


## FR : Laravel - Présentation

Laravel est un framework PHP moderne et puissant qui facilite le développement d'applications web robustes et évolutives. Il propose des fonctionnalités telles que :

- Un moteur de routage rapide et simple
- Une gestion avancée des bases de données avec Eloquent ORM
- Un support natif pour l'authentification et la gestion des rôles
- Des outils de développement tels que les migrations et les seeders

Laravel offre une documentation complète et une large communauté permettant de l'exploiter au maximum.

📞 [Documentation officielle](https://laravel.com/docs)


## EN : Laravel - Overview

Laravel is a modern and powerful PHP framework that simplifies the development of robust and scalable web applications. It offers features such as:

- A fast and simple routing engine
- Advanced database management with Eloquent ORM
- Native support for authentication and role management
- Development tools like migrations and seeders

Laravel provides comprehensive documentation and a large community to maximize its potential.

📞 [Official Documentation](https://laravel.com/docs)


---

This README consolidates essential information from the provided files, offering a clear vision of the project and its technologies. 🚀

## Contact

📧 **Email** : [h.social74@gmail.com](mailto:h.social74@gmail.com?subject=Portfolio%20Inquiry)
🌐 **Website** : [www.r4tshtaed.free.nf](http://www.r4tshtaed.free.nf)
🤖 **GitHub** : [TekNegr](https://github.com/TekNegr)



<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
