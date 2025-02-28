# 📌 Commandes essentielles pour le projet R4TSHTAED

## 🚀 **1. Commandes Git**

### 📂 **Initialiser un projet Git**
```bash
git init
```

### 🌐 **Associer un dépôt GitHub**
```bash
git remote add origin https://github.com/TonPseudo/r4tshtaed-web.git
git branch -M main
git push -u origin main
```

### 🏗 **Gestion des commits et push**
```bash
git add .
git commit -m "Message du commit"
git push origin main
```

### 🔄 **Mettre à jour le projet depuis GitHub**
```bash
git pull origin main
```

### 🏷 **Lister les commits et revenir à une version spécifique**
```bash
git log --oneline --graph --decorate --all
git checkout <hash-du-commit>
```

### 🏗 **Créer et gérer des branches**
```bash
git branch dev
git checkout dev
git push -u origin dev
```

### 🔥 **Fusionner une branche avec `main`**
```bash
git checkout main
git merge dev
git push origin main
```

### 🏷 **Créer un tag pour une version stable**
```bash
git tag v1.0
git push origin v1.0
```

### ♻️ **Revenir à une version précédente**
```bash
git reset --hard <hash-du-commit>
git push --force origin main
```

### 🏗 **Créer une branche de sauvegarde (Back-Up)**
```bash
git checkout -b back-up <hash-du-commit>
git push origin back-up
```

### 🔄 **Restaurer une version depuis une branche Back-Up**
```bash
git checkout main
git reset --hard back-up
git push --force origin main
```

### 🏷 **Supprimer un tag ou une branche**
```bash
git tag -d v1.0
git push origin --delete v1.0

git branch -d dev
git push origin --delete dev
```

---

## 🖥 **2. Commandes Shell & Bash**

### 🗂 **Navigation dans les dossiers**
```bash
cd nom_du_dossier   # Entrer dans un dossier
cd ..               # Revenir au dossier précédent
ls                  # Lister les fichiers du dossier
pwd                 # Afficher le chemin actuel
```

### 🏗 **Manipulation des fichiers**
```bash
touch fichier.txt    # Créer un fichier
mkdir mon_dossier    # Créer un dossier
rm fichier.txt       # Supprimer un fichier
rm -r mon_dossier    # Supprimer un dossier et son contenu
```

### 🏗 **Droits et exécution des fichiers**
```bash
chmod +x setup.sh   # Rendre exécutable le script setup.sh
./setup.sh          # Exécuter le script
```

---

## 🎯 **3. Setup Laravel (Après un `git pull`)**

### 🏗 **Installation des dépendances**
```bash
composer install
npm install
```

### 🛠 **Configurer l’environnement**
```bash
cp .env.example .env
php artisan key:generate
```

### 📂 **Migrer la base de données**
```bash
php artisan migrate --seed
```

### 🔧 **Lien de stockage Laravel**
```bash
php artisan storage:link
```

### 🚀 **Démarrer le serveur Laravel**
```bash
php artisan serve
```

---

## 🛠 **4. Commandes utiles pour la maintenance**

### 🔄 **Vider le cache Laravel**
```bash
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear
```

### ⚡ **Recompiler les assets (si utilisation de Vite)**
```bash
npm run build
```

---

🔥 **Avec ce fichier, tu as toutes les commandes essentielles sous la main !** 🚀

