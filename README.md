# R4TSHTAED - WEB

## Introduction FR / Introduction EN

**FR** : Bienvenue sur mon Portfolio. Je suis ***Henintsoa RAMAKAVELO*** (a.k.a *D'S*, *T'N*...), développeur web, game designer et graphiste freelance. Ce site est conçu pour être évolutif et ouvert aux améliorations, permettant aux visiteurs d'explorer mon parcours à travers une interface immersive inspirée d'un bureau virtuel.

**EN** : Welcome to my Portfolio. I am ***Henintsoa RAMAKAVELO*** (a.k.a *D'S, T'N*...), a web developer, game designer, and freelance graphic designer. This site is designed to be scalable and open to improvements, allowing visitors to explore my journey through an immersive interface inspired by a virtual desktop.

## FR : Le Projet / EN : About the Project

**FR** : Le projet propose un **pseudo-bureau** où l'on peut interagir avec différentes fenêtres simulant un environnement desktop.

**EN** : The project offers a **pseudo-desktop** where users can interact with different windows simulating a desktop environment.

## FR : Technologies utilisées / EN : Technologies Used

- **Laravel** (Framework PHP)
- **Breeze** (Authentification légère / Lightweight authentication)
- **Livewire** (Composants interactifs / Interactive components)
- **Filament** (Panneau d'administration / Admin panel)
- **Spatie Permissions** (Gestion des rôles et permissions / Role and permission management)
- **Three.js** (Rendu 3D, optionnel / 3D rendering, optional)
- **Draggable.js** (Gestion du mouvement des fenêtres / Window movement management)

## Fonctionnalités / Features

| Fonction / Feature | Description FR | Description EN | Statut / Status |
| -------- | ----------- | --------- |  ----- |
| Accueil / Home | Page principale | Main page | 🔄 |
| Admin | Panneau de gestion (Filament) | Management panel (Filament) | 🔄 |
| Client | Configuration de profils | Profile configuration | 🔄 |
| Terminal | Navigation via un faux terminal | Navigation via a fake terminal | 🤔 |
| Projets / Projects | Organisation des projets sous forme de fichiers | Organizing projects as files | ⏳ |
| IA | Intégration d'une IA pour interagir sur le site | Integrating AI for site interaction | 🤔 |
| Mini-jeux / Mini-games | Intégration de jeux interactifs | Adding interactive games | 🤔 |
| Changement de fond / Wallpaper Change | Personnalisation du wallpaper du bureau | Customizing the desktop wallpaper | 🤔 |

Légende : ✅ Fonctionnelle / 🔄 En développement / ⏳ À faire / 🤔 En réflexion  
Legend: ✅ Functional / 🔄 In development / ⏳ To be done / 🤔 Under consideration

## Installation FR / Installation EN

**0** Vous pouvez installer toutes les dependences en lanceant le setup.sh de la manière suivante / You can install the app by launching the following : 
```cmd
    ./setup.sh
```
***Si Ca me marche pas vous pouvez effectuer les actions suivantes / If doesn't work do the following***

**1.** Installer PHP et Composer / Install PHP and Composer  
**2.** Cloner le projet et configurer Laravel / Clone the project and set up Laravel  
   ```cmd
   cd htdocs
   composer create-project --prefer-dist laravel/laravel:^11 r4tshtaed-web
   cd r4tshtaed-web
   code .
   ```
**3.** Configurer la base de données dans `.env` / Configure the database in `.env`  
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=ds_db
   DB_USERNAME=root
   DB_PASSWORD=
   ```
**4.** Installer les dépendances et effectuer les migrations / Install dependencies and run migrations  
   ```cmd
   composer install
   php artisan migrate
   php artisan db:seed --class=RolesSeeder
   ```
**5.** Créer un utilisateur admin pour Filament / Create an admin user for Filament  
   ```cmd
   php artisan make:filament-user
   ```
   Puis assigner le rôle d'admin dans MySQL : / Then assign the admin role in MySQL:  
   ```sql
   INSERT INTO model_has_roles (role_id, model_type, model_id) VALUES (1, 'App\\Models\\User', USER_ID);
   ```
**6.** Lancer le serveur / Start the server  
   ```cmd
   php artisan serve
   ```

## FR : Laravel - Présentation / EN : Laravel - Overview

**FR** : Laravel est un framework PHP moderne et puissant qui facilite le développement d'applications web robustes et évolutives. Il propose des fonctionnalités telles que :
- Un moteur de routage rapide et simple
- Une gestion avancée des bases de données avec Eloquent ORM
- Un support natif pour l'authentification et la gestion des rôles
- Des outils de développement tels que les migrations et les seeders

**EN** : Laravel is a modern and powerful PHP framework that simplifies the development of robust and scalable web applications. It offers features such as:
- A fast and simple routing engine
- Advanced database management with Eloquent ORM
- Native support for authentication and role management
- Development tools like migrations and seeders

📞 [Documentation officielle / Official Documentation](https://laravel.com/docs)

---

This README consolidates essential information from the provided files, offering a clear vision of the project and its technologies. 🚀

## Contact

📧 **Email** : [h.social74@gmail.com](mailto:h.social74@gmail.com?subject=Portfolio%20Inquiry)  
🌐 **Website** : [www.r4tshtaed.free.nf](http://www.r4tshtaed.free.nf)  
🤖 **GitHub** : [TekNegr](https://github.com/TekNegr)
