# 🌑 ShadowComm - Communication Sécurisée pour Espions 🕵️‍♂️

## 📖 Description
ShadowComm est un outil de communication sécurisé conçu pour une agence fictive d'espionnage. Ce site permet aux agents de :
✅ S'authentifier de manière sécurisée.
✅ Envoyer et recevoir des messages chiffrés avec le code César.
✅ Gérer leurs données personnelles conformément aux règles de confidentialité.

---

## 🎯 Fonctionnalités
### 🔐 Accès Sécurisé
🔹 Inscription avec nom de code et mot de passe.
🔹 Connexion sécurisée avec validation des identifiants.
🔹 Hashage des mots de passe pour une meilleure sécurité.

### 💬 Chat Sécurisé
🔹 Envoi et réception de messages en temps réel.
🔹 Chiffrement des messages avec le code César avant stockage.
🔹 Déchiffrement automatique à l'affichage.
🔹 Affichage du nom de code, du message et de l'heure d'envoi.

### 📂 Gestion des Utilisateurs et Messages
🔹 Stockage sécurisé des agents et de leurs messages.
🔹 Possibilité de supprimer un compte et toutes les données associées.

---

## 💻 Technologies Utilisées
🖥️ **Frontend** : HTML, CSS
⚙️ **Backend** : PHP, MySQL
🔒 **Sécurité** : Hashage des mots de passe avec `password_hash()`, chiffrement des messages avec le **code César**
🗄️ **Base de données** : MySQL avec PDO pour sécuriser les requêtes SQL

---

## 🚀 Installation
1️⃣ **Cloner le dépôt**
   ```bash
   git clone https://github.com/votre-utilisateur/ShadowComm.git
   ```
2️⃣ **Configurer la base de données**
   - Importer le fichier SQL (`database.sql`) dans MySQL
   - Vérifier les identifiants de connexion à la base dans `shadow.access.php`

3️⃣ **Lancer le serveur**
   - Avec un serveur local comme XAMPP ou WAMP
   - Placer les fichiers dans le dossier `htdocs`
   - Accéder au site via `http://localhost/ShadowComm`

---

## 🗂️ Structure du Projet
```
ShadowComm/
│── .htaccess             # Configuration des accès
│── index.php             # Page d'accueil
│── shadow.access.php     # Gestion des accès et sécurité
│── style.css             # Feuille de style
│── database.sql          # Script SQL pour la base de données
│── cahier des charge.pdf # Document du projet
```

---

## 🛠 Collaboration
🔹 Utilisation de **Git** pour la gestion du projet.
🔹 Branches dédiées pour chaque fonctionnalité (`auth`, `chat`).
🔹 Commits clairs et documentés (`git commit -m "Ajout du chiffrement César"`).

---

## 🎯 Objectifs
✅ Site fonctionnel et immersif dans l'univers de l'espionnage.
✅ Sécurité des données et communication protégée.
✅ Expérience utilisateur fluide et intuitive.

📧 **Contact** : **Yokko**

---
🚀 *Projet réalisé dans le cadre d'une formation en développement web.*
