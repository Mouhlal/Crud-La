# 📝 Crud-La - Système de gestion CRUD avec Laravel  

Crud-La est une application permettant de gérer des données via un système **CRUD** (Create, Read, Update, Delete) développé avec **Laravel** et **MySQL**.  

📍 **Technologies utilisées :**  
- Laravel  
- MySQL  
- Blade (templating)  
- Tailwind CSS (ou Bootstrap, selon ton choix)  

---

## ✨ Fonctionnalités  

✔️ **Ajout de nouvelles entrées** ➕  
✔️ **Affichage des données sous forme de tableau** 📊  
✔️ **Modification des informations existantes** ✏️  
✔️ **Suppression d’entrées** 🗑️  
✔️ **Validation des données en backend** 🔐  

---

## 📂 Structure du projet  

```
📦 Crud-La  
 ┣ 📂 app/Http/Controllers   # Contrôleurs Laravel  
 ┣ 📂 database/migrations    # Migrations de la base de données  
 ┣ 📂 resources/views        # Templates Blade  
 ┣ 📂 routes/web.php         # Définition des routes  
 ┣ 📂 public/images          # Images utilisées  
 ┣ 📜 .env                   # Fichier de configuration  
 ┗ 📜 README.md              # Documentation  
```  

---

## 🚀 Installation et exécution  

### 1️⃣ Cloner le projet  
```bash
git clone https://github.com/Mouhlal/Crud-La.git
cd myapp
```  

### 2️⃣ Installer les dépendances  
```bash
composer install
npm install
```  

### 3️⃣ Configurer la base de données  
- Copier `.env.example` en `.env`  
- Modifier les informations de connexion à la base de données dans `.env` :  
  ```ini
  DB_DATABASE=crud_la
  DB_USERNAME=root
  DB_PASSWORD=
  ```  
- Générer la clé d’application :  
  ```bash
  php artisan key:generate
  ```  

### 4️⃣ Exécuter les migrations  
```bash
php artisan migrate --seed
```  

### 5️⃣ Lancer le serveur  
```bash
php artisan serve
```  
Accéder à l'application sur **http://127.0.0.1:8000**  
