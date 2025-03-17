# 📢 Mini-Application de MORASSALATE

## 🚀 Introduction
Bienvenue dans **MORASSALATE**, une mini-application de chat offrant une plateforme de messagerie instantanée sécurisée et intuitive permettant aux utilisateurs de communiquer en temps réel.

## 📌 Fonctionnalités Principales

### 🧑‍🤝‍🧑 Gestion des Utilisateurs
- Inscription et connexion via email/mot de passe ou OAuth (Google/Facebook).
- Gestion du profil avec avatar et statut (en ligne/hors ligne).
- Liste d'amis et possibilité de bloquer des utilisateurs.

### 💬 Messagerie Instantanée
- Envoi de messages en temps réel via WebSockets.
- Support des messages texte, emojis et partage de fichiers (images, PDF).
- Indicateur de saisie ("X est en train d'écrire...").
- Statut des messages : envoyé, reçu, lu.

### 🏡 Gestion des Conversations
- Conversations privées (one-to-one) et discussions de groupe.
- Historique des messages avec recherche avancée.
- Notifications push pour les nouveaux messages.

### 🔒 Sécurité & Confidentialité
- Chiffrement des messages avec AES-256 et TLS 1.3.
- Authentification JWT (JSON Web Token).
- Protection anti-spam et signalement des abus.

## 🛠 Installation

### Prérequis
- PHP 8.0 ou supérieur
- Composer
- Laravel 8.x ou supérieur
- PostgreSQL
- Node.js et npm

### Étapes d'installation

1. **Cloner le repository**

   ```bash
   git clone https://github.com/lakrounehamza/MORASSALATE.git
   cd grandtaxigo
2. **Installer les dépendances PHP avec Composer**

    ```bash
    composer install

3. **Configurer le fichier .env**

    ```bash
    cp .env.example .env

4. **Exécuter les migrations de la base de données**

    ```bash 
    php  artisan migrate

5. **Démarrer le serveur**
    ```bash 
    php artisan serve
