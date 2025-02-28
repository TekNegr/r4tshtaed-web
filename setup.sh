#!/bin/bash

echo "🔧 Installation des dépendances Laravel et Node.js..."
composer install
npm install

echo "⚙️ Configuration de l'environnement..."
if [ ! -f ".env" ]; then
    cp .env.example .env
    php artisan key:generate
fi

echo "💾 Vérification et migration de la base de données..."
read -p "Souhaitez-vous exécuter les migrations et seeders ? (y/n) " migrate
if [[ "$migrate" == "y" ]]; then
    php artisan migrate --seed
fi

echo "📂 Lien du stockage Laravel..."
php artisan storage:link

echo "🚀 Compilation des assets..."
npm run build

echo "♻️ Nettoyage du cache Laravel..."
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear

echo "✅ Setup terminé ! Lancement du serveur..."
php artisan serve
